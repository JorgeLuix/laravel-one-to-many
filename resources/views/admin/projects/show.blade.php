@extends('layouts.admin')

@section('content')
    <h1>{{ $project->name }}</h1>
    <img class="card-img-top" src="{{ Vite::asset($project['image']) }}" alt="">
    <p>{!! $project->description !!}</p>
    <a class="btn btn-primary" href="{{route('admin.projects.index') }}">Go to Back</a>
@endsection
