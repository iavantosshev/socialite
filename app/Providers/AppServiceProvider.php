<?php

namespace App\Providers;

use App\Setting;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(Guard $auth)
    {
        if (env('APP_ENV', 'local') !== 'local') {
            DB::connection()->disableQueryLog();
        }

      
        App::setLocale(Setting::get('language', 'en'));
                
        if (Schema::hasTable('settings')) {
            Config::set('app.timezone',  Setting::get('timezone', 'Asia/Kolkata'));
        }


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
