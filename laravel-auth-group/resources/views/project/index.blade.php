@extends('layouts.app')
@section('content')

<div class="container">
    <h1 class="text-center py-5">Projects: {{count($projects)}}</h1>

    <div class="text-end me-4" >
        <a href="#" class="btn btn-primary my-3">New Project</a>
    </div>
   

    <div class="row gy-5 justify-content-center">
        @foreach ($projects as $project)
            <div class="col-3">
                <div class="card" style="width: 18rem;">
                    <img src="https://buffer.com/library/content/images/size/w1200/2023/10/free-images.jpg" class="card-img-top" alt="project img">
                    <div class="card-body">
                      <h5 class="card-title">{{$project -> title}}</h5>
                      <p class="card-text">{{$project -> date}}</p>
                      <a href="{{ route('project.show', $project -> id) }}" class="btn btn-primary">Show Details</a>
                    </div>
                </div>
            </div>
        @endforeach
        
    </div>
</div>
@endsection