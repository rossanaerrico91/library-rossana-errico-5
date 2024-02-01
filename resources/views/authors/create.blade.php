@extends('layouts.app')
@section('content')
    <div class="container">
        <form action="{{ route('authors.store') }}" class="form" method="POST" enctype="multipart/form-data">
            @method('POST')
            @csrf

            <label for="nome" class="form-label">Nome</label>
            <input type="text" name="nome" class="form-control" value="{{ old('nome') }}">
            @error('nome')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <label for="cognome" class="form-label">Cognome</label>
            <input type="text" name="cognome" class="form-control" value="{{ old('cognome') }}">
            @error('cognome')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <button type="submit" class="btn btn-primary mt-4">Create</button>
        </form>
    </div>
@endsection
