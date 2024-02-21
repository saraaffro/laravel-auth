@extends('layouts.app')
@section('content')

<div class="container">
    <h1 class="text-center py-5">New Project</h1>
   
    <form action="{{ route('project.store')}}" method="POST">

        @csrf
        @method('POST')
       
        <label for="title">Title</label>
        <br>
        <input type="text" name="title">
        <br>
        <br>

        <label for="description">Description</label>
        <br>
        <input type="text" name="description">
        <br>
        <br>

        <label for="date">Date</label>
        <br>
        <input type="text" name="date">
        <br>
        <br>

        <input type="submit" value="CREATE">
    </form>
</div>
@endsection