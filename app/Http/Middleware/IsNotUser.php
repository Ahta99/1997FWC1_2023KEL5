<?php

namespace App\Http\Middleware;

use Closure;

class IsNotUser
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
        if(auth()->check() && $request->user()->level != 'User'){
			return redirect('login');
		}
		else if(auth()->check() && $request->user()->level == 'User'){
			return $next($request);
		}
		return redirect('login');
			
    }
}
