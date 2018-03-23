<?php

namespace App\Contracts\Repositories;

use Illuminate\Support\Collection;

interface TalksRepositoryContract
{
    public function all(): Collection;
}
