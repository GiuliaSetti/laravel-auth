@extends('layouts.admin')
@section('content')

<div class="jumbotron bg-light rounded-3">
    <div class="container p-3">

        <h1 class="fw-bold">
            You are now logged in!
        </h1>

        <div class="container">
            <h4>Admin Page</h4>
            <a href="{{route('admin.projects.index')}}">Show all projects</a>
        </div>
    </div>
</div>



@endsection