<?php

namespace App\Repositories;

use App\Talk;
use Illuminate\Support\Collection;
use App\Contracts\Repositories\TalksRepositoryContract;

class TalksRepository implements TalksRepositoryContract
{
    public function all(): Collection
    {
        return Talk::all();
    }

    public function get(int $id): Talk
    {
        return Talk::find($id);
    }

    public function create(array $attributes): Talk
    {
        return Talk::create($attributes);
    }

    public function update(int $id, array $attributes): Talk
    {
        return tap(Talk::find($id))->update($attributes);
    }

    public function delete(int $id): bool
    {
        return Talk::find($id)
            ->delete();
    }
}
