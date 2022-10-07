<?php

namespace App\Http\Middleware;


use Closure;
use Illuminate\Support\Facades\Session;


class AuthSession
{
    protected static function swap($user)
    {

        if (auth()->user()->isGuest()) return;
        $new_session_id = Session::getId(); //get new session_id after user sign in
        $last_session = !empty($user->last_session_id) ? Session::getHandler()->read($user->last_session_id) : null; // retrive last session
        if ($last_session && $user->last_session_id != $new_session_id) {
            if (Session::getHandler()->destroy($user->last_session_id)) {
                // session was destroyed
            }
        }
        $user->last_session_id = $new_session_id;
        $user->save();
    }

    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        self::swap(auth()->user());
        return $next($request);

    }
}
