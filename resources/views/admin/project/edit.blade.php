@extends('layouts.admin')
@section('content')
    <div class="container">

        @include('partials.errors')

        <form action={{ route('admin.project.update', $project) }} method="POST" class="d-flex row p-4">
            @csrf
            @method('PUT')
            <div class="mb-3 col-6">
                <label for="nome" class="form-label">Nome Progetto</label>
                <input type="text" class="form-control" id="nome" name="title"
                    value="{{ old('title', $project->title) }}">
            </div>
            <div class="mb-3 col-6">
                <label for="link" class="form-label">Link Progetto</label>
                <input type="text" class="form-control" id="link" name="link"
                    value="{{ old('link', $project->link) }}">
            </div>
            <div class="mb-3 col-3">
                <label for="screen" class="form-label">Screenshot Progetto</label>
                <input type="text" class="form-control" id="tipo" name="screen"
                    value="{{ old('screen', $project->screen) }}">
            </div>
            <div class="mb-3 col-9">
                <label for="collaborators" class="form-label">Collaboratori</label>
                <input type="text" class="form-control" id="collaborators" name="collaborators"
                    value="{{ old('collaborators', $project->collaborators) }}">
            </div>
            <div class="mb-3 col-9">
                <label for="used_languages" class="form-label">Linguaggi e Framework</label>
                <input type="text" class="form-control" id="used_languages" name="used_languages"
                    value="{{ old('used_languages', $project->used_languages) }}">
            </div>
            <div class="mb-3">
                <label for="descrizione" class="form-label">Descrizione Progetto</label>
                <textarea name="description" id="descrizione" cols="30" rows="5" class="form-control">{{ old('description', $project->description) }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary ">Submit</button>
        </form>
    </div>
@endsection
