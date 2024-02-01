@extends('layouts.app')
@section('content')
    <div class="container  d-flex justify-content-center">
        <div class="card col-5">
            <div class="card-body">
                <h5 class="card-title">{{ $author->fullName }}</h5>
                <ul>
                    @foreach ($author->books as $book)
                        <li>{{ $book->title }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection
