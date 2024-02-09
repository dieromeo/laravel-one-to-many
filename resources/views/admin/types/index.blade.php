@extends('layouts.admin')
@section('content')
    <div class="container py-4">
        @include('partials.toast')

        @foreach ($types as $type)
            <div class="d-flex align-items-center">
                <a href="{{ route('admin.types.show', $type->id) }}"
                    class="text-decoration-none text-dark fs-3 mb-3 badge bg-light">{{ $type->title }}</a>
                <p class="text-light"><span class="fs-3">&leftarrow;</span> Clicca qui
                    ver vedere i progetti correlati</p>
            </div>
        @endforeach
    </div>
@endsection
