<form action="{{ $action }}" method="POST">

    @if (isset($method))
        <input type="hidden" name="_method" value="{{ $method }}">
    @endif

    {!! csrf_field() !!}

    <div class="form-group row">
        <label for="title" class="col-sm-2 col-form-label">Title</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="title" name="title" placeholder="The talk title..."
                   value="{{ old('title', $talk->title) }}">
        </div>
    </div>

    <div class="form-group row">
        <label for="description" class="col-sm-2 col-form-label">Description</label>
        <div class="col-sm-10">
            <textarea type="text" class="form-control" rows="5" id="description" name="description"
                      placeholder="The talk description...">{{ old('description', $talk->description) }}</textarea>
        </div>
    </div>

    <div class="form-group row">
        <label for="place" class="col-sm-2 col-form-label">Place</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="place" name="place" placeholder="The talk place..."
                   value="{{ old('place', $talk->place) }}">
        </div>
    </div>

    <div class="form-group row">
        <label for="src" class="col-sm-2 col-form-label">Src</label>
        <div class="col-sm-10">
            <textarea type="text" class="form-control" rows="2" id="src" name="src"
                      placeholder="The talk src...">{{ old('src', $talk->src) }}</textarea>
        </div>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
