@extends('layouts.app')
@section('content')

<div class="container">
    <h1 class="text-center py-5">{{$project -> title}}</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
   
    <form action="{{ route('project.update', $project -> id)}}" method="POST">

        @csrf
        @method('PUT')
       
        <label for="title">Title</label>
        <br>
        <input type="text" name="title" value="{{ $project -> title }}">
        <br>
        <br>

        <label for="description">Description</label>
        <br>
        <input type="text" name="description" value="{{ $project -> description }}">
        <br>
        <br>

        <label for="date">Date</label>
        <br>
        <input type="text" name="date" value="{{ $project -> date }}">
        <br>
        <br>

        <label for="image_url">Image</label>
        <br>
        <div class="input-group mb-3">
            <input name="image_url" type="file" class="form-control" id="inputGroupFile02" value="{{ $project -> image_url}}">
            <label class="input-group-text" for="inputGroupFile02">Upload</label>
        </div>
          
        <input type="submit" value="SAVE">
    </form>
</div>
@endsection