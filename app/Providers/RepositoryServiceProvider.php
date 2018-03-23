<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(
            \App\Contracts\Repositories\PostsRepositoryContract::class,
            \App\Repositories\PostsRepository::class
        );

        $this->app->singleton(
            \App\Contracts\Repositories\TalksRepositoryContract::class,
            \App\Repositories\TalksRepository::class
        );
    }
}
