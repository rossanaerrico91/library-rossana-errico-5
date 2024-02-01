@extends('layouts.app')
@section('content')
    <div class="container">
        @auth
            <a href="{{ route('books.create') }}" class="btn btn-primary mb-4">Add Book</a>
        @endauth

        <table class="table table-stripped table-hover table-responsive">
            <tr>
                <th>Image</th>
                <th>Title</th>
                <th>Pages</th>
                <th>Author</th>
                <th>Categories</th>
                @auth
                    <th></th>
                   
                @endauth
            </tr>
            @foreach ($books as $index => $book)
                <tr>
                    <td>
                        <img src="{{ Storage::url($book->image) }}" class="img-thumbnail" style="max-height:50px;width:auto">
                    </td>
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->pages }}</td>
                    <td>{{ $book->author->fullName }}</td>
                    <td>{{ $book->categories->pluck('name')->join(', ')}}</td>

                    @auth
                        <td>
                            <a href="{{ route('books.show', $book) }}" class="d-inline-block btn btn-primary">Dettagli</a>
                            <a href="{{ route('books.edit', $book) }}" class="d-inline-block btn btn-warning">Modifica</a>
                            <form class="d-inline-block" action="{{ route('books.destroy', $book) }}" method="post">
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-danger" type="submit">Elimina</button>
                            </form>
                        </td>
                        
                    @endauth
                </tr>
            @endforeach
        </table>
    </div>
@endsection
