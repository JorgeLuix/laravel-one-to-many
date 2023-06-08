@extends('layouts.admin')

@section('content')
    <h1>Tecnology list</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Created at</th>
                <th scope="col">Tools</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tecnologies as $tecnology)
                <tr>
                    <th scope="row">{{ $tecnology->id }}</th>
                    <td>{{ $tecnology->name }}</td>
                    <td>{{ $tecnology->created_at }}</td>
                    <td>
                        <a href="{{ route('admin.tecnologies.show', $tecnology->slug) }}">Show</a>
                        <a href="">Edit</a>
                        <a href="">Delete</a>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
@endsection
