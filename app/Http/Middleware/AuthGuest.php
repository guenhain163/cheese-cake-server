<?php

namespace App\Http\Middleware;


use App\Models\User;
use Closure;

class AuthGuest
{
    public function handle($request, Closure $next)
    {
//        dd(auth()->check());
        if (!auth()->check()) {
            $user = User::where("username", "guest")->where("email", "guest@system")->first();
            auth()->setUser($user);
        }
        return $next($request);
    }
}
