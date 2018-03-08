<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contracts\Repositories\PostsRepositoryContract;

class PostsController extends Controller
{
    private $postsRepository;

    public function __construct(PostsRepositoryContract $postsRepository)
    {
        $this->postsRepository = $postsRepository;
    }

    public function index()
    {
        $posts = $this->postsRepository->all();

        return view('posts.index', compact('posts'));
    }
}
