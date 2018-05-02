<?php

namespace App\Providers;

use League\CommonMark\Converter;
use App\Repositories\TalksRepository;
use App\Repositories\PostsRepository;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Storage;
use App\Contracts\Repositories\TalksRepositoryContract;
use App\Contracts\Repositories\PostsRepositoryContract;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(PostsRepositoryContract::class, PostsRepository::class);

        $this->app->singleton(TalksRepositoryContract::class, function () {
            return new TalksRepository(resolve(Converter::class), Storage::disk('content'));
        });
    }
}
