@extends('layouts.app')
@section('content')
    <div class="container">
        <form action="{{ route('books.update', $book) }}" class="form" method="POST" enctype="multipart/form-data">
            @method('PATCH')
            @csrf

            <x-select-categories :selectedCategories="$book->categories->pluck('id')->toArray()" />


            <x-select-author authorId="{{$book->author_id}}" />


            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" class="form-control" value="{{ old('title',$book->title) }}">

            @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <label for="pages" class="form-label">Pages</label>
            <input type="number" name="pages" class="form-control" value="{{ old('pages',$book->pages) }}">

            @error('pages')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <label for="image" class="form-label">Pages</label>
            <input type="file" name="image" class="form-control">

            @error('image')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <button type="submit" class="btn btn-primary mt-4">Edit</button>
        </form>
    </div>
@endsection
