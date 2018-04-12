<?php

namespace App\Contracts\Repositories;

use App\Talk;
use Illuminate\Support\Collection;

interface TalksRepositoryContract
{
    public function all(): Collection;

    public function get(int $id): Talk;

    public function create(array $attributes): Talk;

    public function update(int $id, array $attributes): Talk;

    public function delete(int $id): bool;
}
