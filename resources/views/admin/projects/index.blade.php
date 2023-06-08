@extends('layouts.admin')

@section('content')
    <div class="d-flex" id=wrapper>

        @include('partials.sidebar')

        <div id="page-content-wrapper">
            <nav class="navbar navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                    <h2 class="fs-2 m-0">Projects</h2>
                </div>

                <div class="">
                    <a class="btn btn-success" href="{{ route('admin.projects.create') }}">Create new project</a>
                </div>

            </nav>

            <div class="container-fluid px-4">

                <div class="row g-3 my-2">
                    @if (session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                @endif
                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <p class="fs-5">Actions</p>
                            </div>
                            <i class="fa-regular fa-circle-play fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2">2</h3>
                                <p class="fs-5">Star</p>
                            </div>
                            <i class="fa-regular fa-star fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div class="">
                                <h3 class="fs-2">38</h3>
                                <p class="fs-5">Watch</p>
                            </div>
                            <i class="fa-solid fa-eye fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2">%25</h3>
                                <p class="fs-5">Insights</p>
                            </div>
                            <i class="fas fa-chart-line fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>
                </div>

            </div>
            <div class="container-fluid px-4">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Image</th>
                            <th scope="col">Tecnology</th>
                            <th scope="col">Created</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($projects as $project)
                            <tr>
                                <th scope="row">{{ $project->id }}</th>
                                <td>{{ $project->name }}</td>
                                <td><img class="img-thumbnail" style="width:100px" src="{{ Vite::asset($project['image']) }}" alt="{{ $project->name }}">
                                </td>
                                <td>
                                    {{ $project->tecnology ? $project->tecnology->name : 'Senza tecnologia' }}
                                </td>
                                <td>{{ $project->created_at }}</td>
                                <td>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <a href="{{ route('admin.projects.show', $project->slug) }}" class="btn btn-primary text-white"><i
                                                class="fa-solid fa-eye"></i></a>
                                        <a href="{{ route('admin.projects.edit', $project->slug) }}" class="btn btn-warning text-white"><i
                                                class="fa-solid fa-pencil"></i></a>
                                        <form action="{{ route('admin.projects.destroy', $project->slug) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type='submit' class="delete-button btn btn-danger text-white"
                                                data-item-title="{{ $project->name }}"> <i class="fa-solid fa-trash"></i></button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{-- {{ $projects->links('vendor.pagination.bootstrap-5') }} --}}
            </div>
        </div>
    </div>
    @include('partials.modal-delete')
@endsection
