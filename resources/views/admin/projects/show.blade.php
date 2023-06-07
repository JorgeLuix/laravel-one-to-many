@extends('layouts.admin')

@section('content')
    <h1>{{ $project->name }}</h1>
    <img class="card-img-top" src="{{ Vite::asset($project['image']) }}" alt="">
    <p>{!! $project->description !!}</p>
@endsection
