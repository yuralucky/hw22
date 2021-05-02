<?php

namespace App\Providers;

use App\Service\Geo\GeoService;
use App\Service\Geo\IpApiGeoService;
use App\Service\Geo\MaxmindGeoService;
use GeoIp2\Database\Reader;
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
        $this->app->singleton(GeoService::class, function () {
//            return new MaxmindGeoService();
            return new IpApiGeoService();

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
