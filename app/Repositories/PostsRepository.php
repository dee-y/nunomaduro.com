<?php

namespace App\Repositories;

use Sbuckpesch\Medium\Reader;
use App\Contracts\Repositories\PostsRepositoryContract;

class PostsRepository implements PostsRepositoryContract
{
    private static $url = 'https://medium.com/@nunomaduro/latest?format=json';

    public function all(): array
    {
        $posts = (new Reader('@nunomaduro'))->getPosts();

        return array_map(function ($post) {
            return (object) $post->toArray();
        }, $posts);
    }
}
