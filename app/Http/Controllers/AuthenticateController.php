<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticateController extends Controller
{
    public function logout(Request $request)
    {
        Auth::logout();
        if (!auth('api')->guest()) {
            auth('api')->logout();
        }

        $request->session()->flush();

        $request->session()->regenerate();

        return redirect('/')->withCookie(cookie("token", "token", -10000000));
    }

    public function syncUser(Request $request)
    {
        $new_user = $request['user'];

        $email = $new_user['email'];


        $user = User::where("email", $email)->first();
        if ($user) {

        } else {
            $new_user['password'] = password_hash('123456', PASSWORD_BCRYPT);
            $user = new User($new_user);

            $user->save();
        }

    }
}
