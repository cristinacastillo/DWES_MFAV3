<?php

namespace App\Http\Middleware;

use Closure;

class isAdmin
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

        // the value of the logged in user administrator 
        // is stored in a variable
        $admin = auth()->user()->admin;

        // if the logged in user is not an administrator, 
        // he will be redirected to his main view.
        if($admin != 1)

            return redirect()->route('dogs.list');

        return $next($request);
    }
}
