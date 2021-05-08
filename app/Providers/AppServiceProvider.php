<?php

namespace App\Providers;


use App\Service\UserAgent\JenssegersUserAgent;
use App\Service\UserAgent\PlainUserAgent;
use App\Service\UserAgent\UserAgent;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(UserAgent::class, function () {
//            return new PlainUserAgent();
            return new JenssegersUserAgent();
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
