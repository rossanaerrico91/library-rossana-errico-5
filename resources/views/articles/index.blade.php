@extends('layouts.app')
@section('content')
    <div class="container">
        @auth
            <a href="{{ route('articles.create') }}" class="btn btn-primary mb-4">Add Article</a>
        @endauth

        <table class="table table-stripped table-hover table-responsive">
            <tr>
                <th>Titolo</th>
                <th>Sotto-titolo</th>
                <th>Descrizione</th>
                {{-- @auth
                    <th></th>
                   
                @endauth --}}
            </tr>
            @foreach ($articles as $index => $article)
                <tr>

                    <td>{{ $article->title }}</td>
                    <td>{{ $article->subtitle }}</td>
                    <td>{{ $article->description }}</td>

                    {{-- @auth
                        <td>
                            <a href="{{ route('articles.edit', $article) }}" class="d-inline-block btn btn-warning">Modifica</a>
                            <form class="d-inline-block" action="{{ route('articles.destroy', $article) }}" method="post">
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-danger" type="submit">Elimina</button>
                            </form>
                        </td>
                        
                    @endauth --}}
                </tr>
            @endforeach
        </table>
    </div>
@endsection
