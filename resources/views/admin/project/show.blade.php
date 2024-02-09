@extends('layouts.admin')
@section('content')
    <ul class="list-group p-4">
        <li class="list-group-item">
            <h1>{{ $project->title }}</h1>
        </li>
        <li class="list-group-item">
            <p>{{ $project->description }}</p>
        </li>
        <li class="list-group-item">Link GitHub: <a href="{{ $project->link }}"> {{ $project->link }}</a> </li>
        <li class="list-group-item">Collaboratori: {{ $project->collaborators }}</li>
        <li class="list-group-item">Categoria: {{ $project->type?->title }}</li>
        <li class="list-group-item">Linguaggi e framework: {{ $project->used_languages }}</li>
    </ul>
@endsection
