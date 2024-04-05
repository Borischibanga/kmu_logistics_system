<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsAdmin
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
        {
            $isAdmin = auth()->user()->is_admin;

            if ($isAdmin == 1) {
                return redirect()->route('superHome');
            } elseif ($isAdmin == 2) {
                // Redirect to student home
                return redirect()->route('driverHome');
            } elseif ($isAdmin == 3) {
                // Redirect to driver home
                return redirect()->route('studentHome');}
                else{
            return redirect('home')->with('error', 'You have no admin access.');
        }

    }
    }}
