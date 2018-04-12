<?php

namespace App\Http\Controllers;

use App\Talk;
use App\Http\Requests\TalkRequest;
use Illuminate\Auth\Middleware\Authenticate;
use App\Contracts\Repositories\TalksRepositoryContract;

class TalksController extends Controller
{
    private $talksRepository;

    public function __construct(TalksRepositoryContract $talksRepository)
    {
        $this->talksRepository = $talksRepository;

        $this->middleware('auth', ['except' => ['index']]);
    }

    public function index()
    {
        $talks = $this->talksRepository->all();

        return view('talks.index', compact('talks'));
    }

    public function create()
    {
        $talk = new Talk();

        return view('talks.create', ['talk' => $talk]);
    }

    public function store(TalkRequest $request)
    {
        $this->talksRepository->create($request->all());

        return redirect()->route('talks.index');
    }

    public function edit(int $id)
    {
        $talk = $this->talksRepository->get($id);

        return view('talks.edit', compact('talk'));
    }

    public function update(int $id, TalkRequest $request)
    {
        $this->talksRepository->update($id, $request->all());

        return redirect()->route('talks.index');
    }

    public function destroy(int $id)
    {
        $this->talksRepository->delete($id);

        return redirect()->route('talks.index');
    }
}
