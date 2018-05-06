<div class="card mb-4">
    <div class="card-body">
        <h5 class="card-title">{{ $project->name }}
        @if (! $project->owner)
            <small><span class="badge badge-warning float-right">Contributor only</span></small>
        @endif
        </h5>
        <h6 class="card-subtitle mb-2 text-muted">
            <small>
                <a href="{{ $project->html_url }}" target="_blank">{{ substr($project->html_url, 8) }}</a>
            </small>
        </h6>
        <p class="card-text"><small>{{ $project->description }}</small></p>

        <a class="btn btn-sm" href="{{ $project->html_url }}"><small>{{ $project->stargazers_count }} Stars</small></a>
        @if ($project->downloads_count > 500)
        <a class="btn btn-sm" href="{{ $project->html_url }}"><small>{{ $project->downloads_count }} Donwloads</small></a>
        @endif
    </div>
</div>
