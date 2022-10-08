<?php

namespace App\Http\Controllers;

use App\Http\Requests\Api\LoginAppleRequest;
use App\Http\Requests\Api\LoginGoogleRequest;
use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    /**
     * Create a new AuthController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login', "login_cheesecake", "login_google", "login_google_api", "loginItWeb", "login_apple_api", "login_google_oauth2"]]);
    }

    /**
     * Get a JWT via given credentials.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function login()
    {
        $credentials = request(['email', 'password']);

        if (!$token = auth('api')->attempt($credentials)) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        return $this->respondWithToken($token);
    }

    protected function getLinkRedirectLogin(Request $request)
    {
        if ($request->redirectTo != null) {
            return $request->redirectTo;
        }

        return "/";

    }

    public function login_cheesecake(Request $request)
    {
        $linkRedirect = $this->getLinkRedirectLogin($request);
        $new_user = collect(json_decode($request->data))->toArray();
        $email = $new_user['email'];

        $user = User::where("email", $email)->first();
        if ($user == null) {
            $new_user['password'] = password_hash('aGFja2Zlc3Q=', PASSWORD_BCRYPT);
            $new_user['google_id'] = '';
            $user = new User($new_user);

            $user->save();
        }

//        event(new FirstLogin($user));

        $credentials = [
            "email" => $email,
            "password" => 'aGFja2Zlc3Q='
        ];

        if (!$token = auth()->attempt($credentials)) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        $client = new \GuzzleHttp\Client(['verify' => false ]);
        $response = $client->post(config('app.protocol') . $request->getHost() . '/api/auth/login', ['json' => $credentials]);

        $token = collect(json_decode((string)$response->getBody()))['access_token'];


        return redirect($linkRedirect)->withCookie(cookie("token", $token, auth('api')->factory()->getTTL()));
    }

    private function google($data)
    {
        $email = $data['email'];

        $user = User::where("email", $email)->first();

        if ($user) {
            if (!$user->google_id || $user->google_id == '') {
                $user->google_id = $data['google_id'];
            } else if (!$data['google_id'] || $user->google_id !== $data['google_id']) {
                return null;
            } else if (!$user->avatar_url || $user->avatar_url == '') {
                $user->avatar_url = $data["avatar_url"];
            }
        }


        if ($user == null) {
            $data = [
                "name" => $data["name"],
                "email" => $data["email"],
                "username" => $data["email"],
                "google_id" => $data["google_id"],
                "avatar_url" => $data["avatar_url"],
            ];
            $data['password'] = password_hash('aGFja2Zlc3Q=', PASSWORD_BCRYPT);
            $user = new User($data);
            $user->save();
            $user->assignRole("free_account");

        }
        $user->save();

        $credentials = [
            "email" => $email,
            "password" => 'aGFja2Zlc3Q='
        ];

        return $credentials;
    }

    public function login_google_oauth2(Request $request)
    {
            $linkRedirect = $this->getLinkRedirectLogin($request);
            $data = $request->all();
            $new_user = parseJwt($data['credential']);
            $new_user = json_decode(json_encode($new_user), true);
            $new_user['google_id'] = $new_user['sub'];
            $new_user['avatar_url'] = isset($new_user['picture']) ? $new_user['picture']: '';

            $credentials = $this->google($new_user);

            if ($credentials == null || !$token = auth()->attempt($credentials)) {
                return response()->json(['error' => 'Unauthorized'], 401);
            }

            $client = new \GuzzleHttp\Client(['verify' => false ]);
            $url = config('app.protocol') . $request->getHttpHost() . '/api/auth/login';
            $response = $client->post($url, ['json' => $credentials]);

            $token = collect(json_decode((string)$response->getBody()))['access_token'];

            return redirect($linkRedirect)->withCookie(cookie("token", $token, auth('api')->factory()->getTTL()));

    }

    public function login_google(Request $request)
    {
        $linkRedirect = $this->getLinkRedirectLogin($request);
        $new_user = collect(json_decode($request->data))->toArray();

        $credentials = $this->google($new_user);

        if ($credentials == null || !$token = auth()->attempt($credentials)) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        $client = new \GuzzleHttp\Client(['verify' => false ]);
        $url = config('app.protocol') . $request->getHttpHost() . '/api/auth/login';
        $response = $client->post($url, ['json' => $credentials]);
        $token = collect(json_decode((string)$response->getBody()))['access_token'];

        return redirect($linkRedirect)->withCookie(cookie("token", $token, auth('api')->factory()->getTTL()));
    }

    public function login_google_api(LoginGoogleRequest $request)
    {

        $credentials = $this->google($request);

        if ($credentials == null || !$token = auth('api')->attempt($credentials)) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        return $this->respondWithToken($token);
    }

    /**
     * Get the authenticated User.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function me()
    {
        return response()->json(auth('api')->user());
    }

    /**
     * Log the user out (Invalidate the token).
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout()
    {
        auth('api')->logout();

        return response()->json(['message' => 'Successfully logged out']);
    }

    /**
     * Refresh a token.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function refresh()
    {
        return $this->respondWithToken(auth('api')->refresh());
    }

    public function loginITWeb($email, Request $request)
    {
        $user = User::where("email", $email)->first();

        if (empty($user)) {
            return abort(404);
        }

        $credentials = [
            "email" => $email,
            "password" => $request->password
        ];

        if (!$token = auth()->attempt($credentials)) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        $client = new \GuzzleHttp\Client(['verify' => false ]);
        $url = config('app.protocol') . $request->getHost() . '/api/auth/login';
        $response = $client->post($url, ['json' => $credentials]);

        $token = collect(json_decode((string)$response->getBody()))['access_token'];


        return redirect("/")->withCookie(cookie("token", $token, auth('api')->factory()->getTTL()));
    }

    /**
     * Get the token array structure.
     *
     * @param string $token
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth('api')->factory()->getTTL() * 60
        ]);
    }
}
