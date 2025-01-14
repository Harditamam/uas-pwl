<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Role as Middleware;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Role
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, String $role)
    {

        $user = Auth::user();
        if ($user->role == $role) {
            return $next($request);
        }
        abort(403);
    }
}
