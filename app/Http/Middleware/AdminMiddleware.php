<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Admin;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next)
    {
        $admin = Admin::where('user_id', auth()->user()->id)->first();
        if (!auth()->check() || !$admin) {
            // L'utilisateur n'est pas un administrateur, redirigez-le vers une page d'erreur ou une autre action
            return $request->expectsJson() ? null : route('login');
        }

        return $next($request);
    }

}
