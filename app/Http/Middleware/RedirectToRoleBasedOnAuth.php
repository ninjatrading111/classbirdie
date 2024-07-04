<?php

namespace App\Http\Middleware;

use Closure;

// app/Http/Middleware/RedirectToRoleBasedOnAuth.php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectToRoleBasedOnAuth
{
    public function handle(Request $request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
            $user = Auth::user();
            if ($user->role == 'admin') {
                return redirect()->intended('/admin/dashboard');
            }
        return $next($request);

        }
        return $next($request);
    }
}
