<?php namespace App\Http\Middleware;

use Closure;

class AuthorizedAdmin {

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
        if(!\Auth::user()->hasRole('Administrator'))
        {
            \Log::warning('A user has attempted to access the administration area and failed.');
            return response('Unauthorized.', 401);
        }

		return $next($request);
	}

}
