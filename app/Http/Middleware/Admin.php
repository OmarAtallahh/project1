<?php

namespace App\Http\Middleware;

use Auth;
use Closure;
use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Admin {
	/**
	 * Get the path the user should be redirected to when they are not authenticated.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return string
	 */
	public function handle($request, Closure $next) {
		if (Auth::guard('admin')->check()) {
			return $next($request);
		}

		return back();
	}
}
