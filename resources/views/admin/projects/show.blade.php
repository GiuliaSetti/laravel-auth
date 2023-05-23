@extends('layouts/admin')

@section('content')


<div class="container my-3 text-center">
    <h1 class="my-3">
        Project Overview
    </h1>
    <h2>{{$project->title}}</h2>
    <hr class="py-2">

    <div class="project_desc">
        <p>{{$project->description}}</p>
    </div>

    <div class="project_slug">
        <pre>
            ({{$project->slug}})
        </pre>
    </div>

    <div class="project_language">
        <div>- {{$project->languages}} -</div>
    </div>
    <div class="button my-2">
        <a class="btn btn-primary" href="{{route('admin.projects.edit', $project->slug)}}">EDIT</a>
    </div>
</div>


@endsection