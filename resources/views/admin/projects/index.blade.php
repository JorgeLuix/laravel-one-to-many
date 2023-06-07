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
                <div class="row">
                    @foreach ($projects as $project)
                        <div class="col-md-6 col-lg-4">
                            <div class="card">
                                <img class="card-img-top" src="{{ Vite::asset($project['image']) }}" alt="">
                                <div class="card-body">
                                    <h2>{{ $project->name }}</h2>
                                    <p>{{ $project->description }}</p>
                                    <a class="btn btn-primary" href="{{ $project->repository_url }}">Repository</a>
                                    <a href="{{ route('admin.projects.show', $project->slug) }}"><i class="fa-solid fa-eye"></i></a>
                                    <a href="{{ route('admin.projects.edit', $project->slug) }}" class="btn btn-warning text-white"><i
                                        class="fa-solid fa-pencil"></i></a>
                                        <form action="{{ route('admin.projects.destroy', $project->slug) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type='submit' class="delete-button btn btn-danger text-white"
                                                data-item-title="{{ $project->name }}"> <i class="fa-solid fa-trash"></i></button>
                                        </form>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    @include('partials.modal-delete')
@endsection
