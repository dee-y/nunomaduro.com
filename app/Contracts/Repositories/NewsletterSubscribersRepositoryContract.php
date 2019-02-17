<?php

namespace App\Contracts\Repositories;

interface NewsletterSubscribersRepositoryContract
{
    public function create(string $email, string $list): bool;
}
