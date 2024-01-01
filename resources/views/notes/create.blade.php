@extends('components.layout')
@section('titulo')
    My notes | New note
@endsection

@section('slot')
    @if ( isset($note) )
        {{$action = "/notes/update?id=$note->id"}}
        @method('PUT')
        {{ method_field('PUT') }}
    @else
        {{$action = route('store')}}
    @endif

    <main style="display:flex;align-items:center;justify-content:center;width:80vw">
        <form style="width: 100%" action="{{$action}}" method="POST">
            @csrf
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="hidden" name="id" value="{{ old('id', isset($note) ? $note->id : null) }}">
            <div class="form-group">
                <label for="title">Title</label>
                <input required id="title" name="title" type="text" class="form-control" value="{{ old('title', isset($note) ? $note->title : null) }}">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea required class="form-control" name="description"
                id="description" cols="30" rows="10">{{ old('description', isset($note) ? $note->description : "Description of your note...") }}</textarea>
            </div>
            <div class="">
                <button class="btn btn-success" type="submit">Save</button>
                <a href="/notes/all">
                <button class="btn btn-primary" type="button">Return</button></a>
            </div>
        </form>
    </main>
@endsection