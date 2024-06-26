<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\View\View;
use Illuminate\Support\Facades;
use Illuminate\Support\Facades\Auth;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {

        Facades\View::composer(['pages.myListings','pages.favorites','pages.edit','pages.create','users.all'], function (View $view) {
            $user = Auth::user();

            if(!Auth::check()){
                return redirect('/users/login')->send();
            }
    
            $role = $user->roles[0]->title;
    
            $view->with([
                'user'=>$user,
                'role'=>$role
            ]);
       
        });
    }
}
