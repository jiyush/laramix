<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class CheckRole
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
       // $role =  Auth::get('role');
       // if($role == 'admin'){
       //   return redirect('/test');
       // }
        return $next($request);
    }
}
