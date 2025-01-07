@extends('template')
@section('title', 'Book Details')

@section('content')
    <div class="container my-5">
        <h1 class="text-center mb-4 fw-bold">
            <span class="border-bottom border-warning border-3 pb-2">Book Details</span>
        </h1>
        <div class="container-fluid row">
            <div class="col-md-4 p-3 text-center">
                <img class="img-fluid rounded shadow" src="{{ asset('/storage/image/BookCover/' . $book->image) }}"
                    alt="Book Cover" style="max-width: 100%; height: auto;">
            </div>
            <div class="col-md-8 py-3">
                <h2 class="fw-bold text-warning">{{ $book->title }}</h2>
                <p class="text-muted"><strong>Year:</strong> {{ $book->year }}</p>
                <p class="text-muted"><strong>Author:</strong> {{ $book->author }}</p>
                <p class="text-muted"><strong>Synopsis:</strong> {{ $book->synopsis }}</p>
            </div>
        </div>
    </div>
@endsection
