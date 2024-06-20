<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
use App\Models\Role as Ro;

class Role
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next , ...$roles): Response
    {

        $user = Auth::user();
        //user must be logged in and information is in this variable 

        if(!Auth::check()){
            return redirect('/users/login');
        }

        foreach($roles as $role){
         //in each iteration we check if the user->roles->title == $role

            $ro = Ro::where('title', $role)->first();
            //find the model of role that matches the parameter
            //1 is Admin, 2 is agent. in this example, The middleware makes it so only a person with Admin can enter this route else redirect /login

            if($user->roles->contains($ro)){
                return $next($request);
            } else{
                return redirect('/users/error');
            }

        }

        dd($roles);
     
        
    }
}
