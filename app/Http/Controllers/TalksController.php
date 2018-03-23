<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contracts\Repositories\TalksRepositoryContract;

class TalksController extends Controller
{
    private $talksRepository;

    public function __construct(TalksRepositoryContract $talksRepository)
    {
        $this->talksRepository = $talksRepository;
    }

    public function index()
    {
        $talks = $this->talksRepository->all();

        return view('talks.index', compact('talks'));
    }
}
