@extends('layouts.admin')
@section('content')
    <div class="container py-4">
        @include('partials.toast')

        @foreach ($types as $type)
            <div class="row justify-content-between">
                <div class="d-flex align-items-center col-auto">
                    <a href="{{ route('admin.types.show', $type->id) }}"
                        class="text-decoration-none text-dark fs-3 mb-3 badge bg-light">{{ $type->title }}</a>
                    <p class="text-light"><span class="fs-3">&leftarrow;</span> Clicca qui
                        ver vedere i progetti correlati</p>
                </div>
                <div class="d-flex col-auto justify-content-end">
                    <a href="{{ route('admin.types.edit', $type->id) }}"
                        class="btn btn-primary btn-sm  align-self-center">Modifica</a>
                    <form action="{{ route('admin.types.destroy', $type) }}" method="POST" class="align-self-center ms-2">
                        @csrf
                        @method('DELETE')
                        <input type="submit" class="btn btn-danger btn-sm" value="Elimina">
                    </form>
                </div>
            </div>
        @endforeach
    </div>
@endsection
