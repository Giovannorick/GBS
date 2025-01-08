@extends('template')
@section('title', 'Publisher Detail')

@section('content')
    <div class="container my-5">
        <h1 class="text-center mb-4 fw-bold">
            <span class="border-bottom border-warning border-3 pb-2">Publisher Details</span>
        </h1>
        <div class="container-fluid row">
            <div class="col-md-4 p-3 text-center">
                <img class="img-fluid rounded shadow" src="{{ asset('/storage/image/PublisherLogo/' . $publisher->image) }}"
                    alt="Book Cover" style="max-width: 100%; height: auto;">
            </div>
            <div class="col-md-8 py-3">
                <h2 class="fw-bold text-warning">{{ $publisher->name }}</h2>
                <p class="text-muted"><strong>Address:</strong> {{ $publisher->address }}</p>
                <p class="text-muted"><strong>Phone:</strong> {{ $publisher->phone }}</p>
                <p class="text-muted"><strong>Email:</strong> {{ $publisher->email }}</p>
            </div>
        </div>

        <div class="container my-5">
            <h2 class="text-center mb-4 fw-bold">
                <span class="border-bottom border-warning border-3 pb-2">Publisher Book List</span>
            </h2>
            <div class="row row-cols-1 row-cols-md-3 row-cols-lg-3 py-3 g-3">
                @foreach ($book as $b)
                    <div class="col">
                        <div class="card border rounded border-2 border-black h-100">
                            <img height="500px" width="500px" class="card-img-top"
                                src="{{ asset('/storage/image/BookCover/' . $b->image) }}" alt="Error">
                            <div class="card-body bg-light d-flex flex-column">
                                <h5 class="card-title text-dark fw-normal">{{ $b->title }}</h5>
                                <p class="card-subtitle text-warning mt-2 fw-bold">{{ $b->author }}</p>
                                <div class="mt-auto">
                                    <a class="btn btn-outline-dark mt-2" href="/bookDetail/{{ $b->id }}">Detail</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="mb-3 m-2 d-flex justify-content-center">
            {{ $book->withQueryString()->links() }}
        </div>
    </div>
@endsection
