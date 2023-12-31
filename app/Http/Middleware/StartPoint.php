<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class StartPoint
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (auth()->check()) {
            if (auth()->user()->role == 'admin') {
                // Redirect to the admin panel
                return redirect('/admin/home');
            } elseif (auth()->user()->role == 'client') {
                // Redirect to the client's home page
                return redirect('/client/home');
            } elseif (auth()->user()->role == 'manager') {
                // Redirect to the client's home page
                return redirect('/manager/home');
            }
        }

        return $next($request);
    }
}