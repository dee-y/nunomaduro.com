<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\ResponseCache\Middlewares\DoNotCacheResponse;
use App\Contracts\Repositories\NewsletterSubscribersRepositoryContract;

class EffectivePhpController extends Controller
{
    public function __construct()
    {
        $this->middleware(DoNotCacheResponse::class);
    }

    public function create()
    {
        return \File::get(public_path() . '/writing-effective-php/index.html');
    }

    public function store(
        NewsletterSubscribersRepositoryContract $newslettersSubscribersRepository,
        Request $request
    ) {
        $newslettersSubscribersRepository->create((string) $request->input('email'), 'effective-php.com');
    }
}
