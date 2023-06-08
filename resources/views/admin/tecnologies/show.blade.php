@extends('layouts.admin')
@section('content')
    <h1>Tecnology</h1>

    <p>The tecnology name is: {{ $tecnology->name }}</p>
    @foreach ($tecnology->projects as $project)
        <p>{{ $project->name }}</p>
    @endforeach
@endsection
