<?php

namespace App\Repositories;

use App\Project;
use Illuminate\Support\Str;
use Illuminate\Support\Collection;
use GrahamCampbell\GitHub\GitHubManager;
use App\Contracts\Repositories\ProjectsRepositoryContract;

class ProjectsRepository implements ProjectsRepositoryContract
{
    private $github;

    private static $owner = [
        'nunomaduro',
        'laravel-zero',
    ];

    private static $contributor = [
        'laravel',
    ];

    private static $attributes = [
        'name',
        'full_name',
        'html_url',
        'description',
        'stargazers_count',
        'homepage',
    ];

    public function __construct(GitHubManager $github)
    {
        $this->github = (clone $github)->user()->setPerPage(100);
    }

    public function all(): Collection
    {
        return $this->get()
            ->reject(function($repository) {
                return $repository['fork'] === true;
            })->reject(function($repository) {
                return $repository['stargazers_count'] < 5;
            })->sortByDesc('stargazers_count')
            ->take(20)
            ->map(function($repository) {

                $repository['name'] = str_replace('-', ' ', Str::upper($repository['name']));

                return new Project(
                    array_intersect_key($repository, array_flip(static::$attributes))
                );
            });
    }

    protected function get(): Collection
    {
        $projects = collect();

        foreach (static::$owner as $org) {
            $projects = $projects->merge($this->github->repositories($org));
        }

        foreach (static::$contributor as $org) {
            $projects = $projects->merge(collect($this->github->repositories($org))
                ->sortByDesc('stargazers_count')
                ->take(1));
        }

        return $projects;
    }
}
