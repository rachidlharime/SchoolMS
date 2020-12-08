<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;

class AdminTeacherAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (Auth::user()->isAdmin !== null || Auth::user()->isTeacher !== null) { // if the current role is Administrator
            return $next($request);
        }
        abort(403, "Cannot access to restricted page");
    }
}
