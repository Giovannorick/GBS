@extends('template')
@section('title', 'Category')

@section('content')
    <div class="container my-5">
        <h1 class="text-center mb-4 fw-bold">
            <span class="border-bottom border-warning border-3 pb-2">{{ $category->name }}</span>
        </h1>
        <div class="row row-cols-1 row-cols-md-3 row-cols-lg-3 py-3 g-3">
            @foreach ($book as $b)
                <div class="col">
                    <div class="card border rounded border-2 border-black h-100">
                        <img class="card-img-top img-fluid" src="{{ asset('/storage/image/BookCover/' . $b->image) }}"
                            alt="Error" style="max-height: 500px; max-width: 100%;">
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
@endsection
