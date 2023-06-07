@extends('layouts.admin')

<title>Editare Project</title>

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Modifica Project con id: {{$project->name}} </h5>
                <form action="{{ route('admin.projects.update', $project->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="name">Name</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name"
                            required maxlength="150" minlength="3" value="{{ old('name', $project->name) }}">
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" id="description" name="description" rows="4" value="{{ $project->description }}" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="image">Image</label>
                        <input type="file" class="form-control @error('image') is-invalid @enderror" name="image" id="image"
                            maxlength="255" value="{{ old('image', $project->image) }}">
                        @error('image')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="repository_url" class="form-label">Repository</label>
                        <input type="url" class="form-control" id="repository_url" name="repository_url" value="{{ $project->repository_url }}" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Save</button>
                    <a href="{{ route('admin.projects.index') }}" class="btn btn-danger">Back to List</a>
                </form>
            </div>
        </div>
    </div>
@endsection
