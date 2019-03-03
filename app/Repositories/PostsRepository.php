<?php

namespace App\Repositories;

use App\Post;
use Spatie\Feed\FeedItem;
use Illuminate\Support\Str;
use Sbuckpesch\Medium\Reader;
use Illuminate\Support\Carbon;
use Illuminate\Support\Collection;
use App\Contracts\Repositories\PostsRepositoryContract;

class PostsRepository implements PostsRepositoryContract
{
    public function all(): Collection
    {
        $posts = collect();

        foreach ((new Reader('@nunomaduro'))->getPosts() as $readerPost) {
            $post = [];
            foreach ($readerPost->toArray() as $property => $value) {
                $post[Str::snake($property)] = $value;
            }

            $post['published_at'] = $post['published_at'] / 1000;
            $posts->push(new Post($post));
        }

        return $posts;
    }

    public static function feed(): Collection
    {
        return (new static)->all()->map(function ($post) {
            return FeedItem::create()
                ->id($post->url)
                ->title($post->title)
                ->summary($post->subtitle)
                ->updated($post->published_at)
                ->link($post->url)
                ->author('Nuno Maduro');
        });
    }
}
