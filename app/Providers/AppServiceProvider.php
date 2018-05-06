<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(\Spatie\Packagist\Packagist::class, function () {
            $client = new \GuzzleHttp\Client();

            return new \Spatie\Packagist\Packagist($client);
        });
    }
}
