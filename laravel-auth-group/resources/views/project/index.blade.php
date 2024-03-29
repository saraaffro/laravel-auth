@extends('layouts.app')
@section('content')

<div class="container">
    <h1 class="text-center py-5">Projects:</h1>

    @auth
        <div class="text-end me-4" >
            <a href="{{ route('project.create') }}" class="btn btn-primary my-3">New Project</a>
        </div>
   @endauth

    <div class="row gy-5 justify-content-center">
        @foreach ($projects as $project)
            <div class="col-3">
                <div class="card" style="width: 18rem;">
                    <img src="{{ $project -> image_url }}" class="card-img-top" alt="project img">
                    <div class="card-body">
                        <h5 class="card-title">{{$project -> title}}</h5>
                        <p class="card-text">{{$project -> date}}</p>
                        <a href="{{ route('project.show', $project -> id) }}" class="btn btn-primary">Show Details</a>

                        @auth
                            <form class="d-inline-block" action="{{ route('project.destroy', $project -> id) }}" method="POST">
                            @csrf
                            @method('DELETE')

                                <input class="btn btn-primary" type="submit" value="Delete" onclick="return confirm('Confirm delete?')" >
                            </form>
                        @endauth
                    </div>
                </div>
            </div>
        @endforeach
        
    </div>
</div>
@endsection