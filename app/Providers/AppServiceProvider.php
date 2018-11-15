<?php

namespace App\Providers;
use Illuminate\Support\Facades\Schema;
use App\sponsor;
use App\logo;
use App\social;
use App\organizationinfo;
use App\videogallery;
use App\contactinfo;
use App\menu;
use App\submenu;
use Illuminate\Support\ServiceProvider;
use View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
         Schema::defaultStringLength(191);
          $logo = logo::first();
          View::share('logo', $logo);   

         $social=social::where('social_status',1)->get();
         View::share('social', $social);  

         $organizationinfo=organizationinfo::first();
         view::share('organizationinfo',$organizationinfo);
   
         $videos=videogallery::orderby('id','DESC')->get()->take(4);
         view::share('videos',$videos);

         $getmenu=menu::orderby('menu_si','ASC')->where('menu_status',1)->get();
         view::share('getmenu',$getmenu);

    
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
