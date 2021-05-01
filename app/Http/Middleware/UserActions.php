<?php

namespace App\Http\Middleware;

use App\Models\Users;
use Closure;

class UserActions
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Users::where('email', $request->input('inputEmail'))->first() && Users::where('inputPassword', $request->input('inputPassword'))->first()){
//            dd($request);
        }


            return $next($request);




    }

}
