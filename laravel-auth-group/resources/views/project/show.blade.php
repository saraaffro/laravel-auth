@extends('layouts.app')
@section('content')

<div class="container">
    <h1 class="text-center py-5">{{$project -> title}}</h1>

    @auth
        <div class="text-end me-4" >
            <a href="{{ route('project.edit', $project -> id) }}" class="btn btn-primary my-3">Edit</a>
        </div>
    @endauth

    <div class="row gy-5 justify-content-center align-items-center">
        <div class="col-5">
            <img src="{{ $project -> image_url}}" class="card-img-top" alt="project img">
        </div>    
        <div class="col-5">
            <p>{{$project -> description}}</p>
            <p>{{$project -> date}}</p>
        </div>    
    </div>
</div>
@endsection