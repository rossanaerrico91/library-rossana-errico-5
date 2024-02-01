@extends('layouts.app')
@section('content')
    <div class="container">
        @auth
            <a href="{{ route('authors.create') }}" class="btn btn-primary mb-4">Add Author</a>
        @endauth

        <table class="table table-stripped table-hover table-responsive">
            <tr>
                <th>Nome</th>
                <th>Cognome</th>
                @auth
                    <th></th>
                   
                @endauth
            </tr>
            @foreach ($authors as $index => $author)
                <tr>
                   
                    <td>{{ $author->nome }}</td>
                    <td>{{ $author->cognome }}</td>
                   
                    @auth
                        <td>
                            <a href="{{ route('authors.show', $author) }}" class="d-inline-block btn btn-primary">Elenco Libri</a>
                            <a href="{{ route('authors.edit', $author) }}" class="d-inline-block btn btn-warning">Modifica</a>
                            <form class="d-inline-block" action="{{ route('authors.destroy', $author) }}" method="post">
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
