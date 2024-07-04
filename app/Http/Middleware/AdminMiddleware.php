<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // Assuming you have a way to determine if the user is an admin,
        // such as a role or permission attribute on the User model.
        if (Auth::check() && Auth::user()->isAdmin()) {
            return $next($request);
        }

        // Redirect the user to the home page or show an error message.
        abort(403, 'Unauthorized action.');
    }
}
