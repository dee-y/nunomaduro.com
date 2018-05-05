<div class="card mb-4">
  <div class="card-body">
    <h5 class="card-title">{{ $project->name }}</h5>
    <h6 class="card-subtitle mb-2 text-muted">{{ $project->stargazers_count }} ✨</h6>
    <p class="card-text"><small>{{ $project->description }}</small></p>
    <small><a href="{{ $project->home_url }}">Github</a></small>
  </div>
</div>
