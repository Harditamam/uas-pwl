<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  ...$guards
     * @return mixed
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {
        $guards = empty($guards) ? [null] : $guards;
        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                $role = Auth::user()->role;
                switch ($role) {
                    case 'admin':
                        return redirect('/admin');
                        break;
                    case 'operator':
                        return redirect('/operator');
                        break;
                    case 'manager':
                        return redirect('/manager');
                        break;
                    case 'verifikator':
                        return redirect('/verifikator');
                        break;
                    default:
                        return redirect('/login');
                        break;
                }
            }
        }
        return $next($request);
    }
}
