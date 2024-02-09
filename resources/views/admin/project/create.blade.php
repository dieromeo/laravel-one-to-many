@extends('layouts.admin')
@section('content')
    <div class="container py-4">

        @include('partials.errors')

        <form action={{ route('admin.project.store') }} method="POST" class="d-flex row">
            @csrf
            <div class="mb-3 col-6">
                <label for="nome" class="form-label">Nome Progetto</label>
                <input type="text" class="form-control" id="nome" name="title" value="{{ old('title') }}">
            </div>
            <div class="mb-3 col-6">
                <label for="link" class="form-label">Link Progetto</label>
                <input type="text" class="form-control" id="link" name="link" value="{{ old('link') }}">
            </div>
            <div class="mb-3 col-3">
                <label for="screen" class="form-label">Screenshot Progetto</label>
                <input type="text" class="form-control" id="tipo" name="screen" value="{{ old('screen') }}">
            </div>
            <div class="mb-3 col-9">
                <label for="collaborators" class="form-label">Collaboratori</label>
                <input type="text" class="form-control" id="collaborators" name="collaborators"
                    value="{{ old('collaborators') }}">
            </div>
            <div class="mb-3">
                <label for="type_id" class="form-label">Tipo di progetto</label>
                <select class="form-select" aria-label="Default select example" name="type_id">
                    <option selected>Scegli un tipo per il progetto</option>
                    @foreach ($types as $type)
                        <option value="{{ $type->id }}" @if (old('type_id', $project->type_id) == $type->id) selected @endif>
                            {{ $type->title }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3 col-9">
                <label for="used_languages" class="form-label">Linguaggi e Framework</label>
                <input type="text" class="form-control" id="used_languages" name="used_languages"
                    value="{{ old('used_languages') }}">
            </div>
            <div class="mb-3">
                <label for="descrizione" class="form-label">Descrizione Progetto</label>
                <textarea name="description" id="descrizione" cols="30" rows="5" class="form-control">{{ old('description') }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Invia</button>
        </form>
    </div>
@endsection
