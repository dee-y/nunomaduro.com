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
}
