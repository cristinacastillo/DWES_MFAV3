<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;


class checkUserProfile
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

        $user = auth()->user();

        // if the logged in user is not an administrator, 
        // he will be redirected to his main view.
        if(!$user->isAdmin())

            return redirect()->route('dogs.list');
            //abort(401);

        return $next($request);
        
        //$profile parametro
        /*dd($profile);

        $user = Auth::user();


        if ($user->profile($profile)) return $next($request);

        if ($user->isAdmin()) return redirect()->route('admin');

        
        return redirect()->route('dogs.list');*/




        // the value of the logged in user administrator 
        // is stored in a variable
        //$admin = auth()->user()->profile;

        

    }
}