@extends('components.layout')
@section('titulo')
    My notes
@endsection

@section('slot')
    <div class="d-flex flex-column flex-md-row p-4 gap-4 py-md-5 align-items-center justify-content-center">
        <div class="list-group">
            @foreach ($notes as $note)
                <a href="/notes/edit/{{ $note->id }}" class="list-group-item list-group-item-action d-flex gap-3 py-3"
                    style="width: 80vw">
                    <div class="d-flex gap-2 w-100 justify-content-between">
                        <div>
                            <h6 class="mb-0">{{ $note->title }}</h6>
                            <p class="mb-0 opacity-75">{{ $note->description }}</p>
                        </div>
                        <small class="opacity-50 text-nowrap">{{ $note->created_at }}</small>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
@endsection
