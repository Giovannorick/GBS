@extends('template')
@section('title', 'Home')
@section('content')
    {{-- Quotes --}}
    <div class="container my-5">
    </div>
    <div class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="8000">
                <div class="card mx-auto border-0 bg-transparent">
                    <div class="card-body text-center">
                        <blockquote class="blockquote mb-2">
                            <p class="fs-4 fst-italic">"I took a deep breath and listened to the old brag of my heart: I am,
                                I am, I am.”</p>
                            <footer class="blockquote-footer text-warning">Sylvia Plath, The Bell Jar</footer>
                        </blockquote>
                    </div>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="8000">
                <div class="card mx-auto border-0 bg-transparent">
                    <div class="card-body text-center">
                        <blockquote class="blockquote mb-2">
                            <p class="fs-4 fst-italic">“And so we beat on, boats against the current, borne back ceaselessly
                                into the past.”</p>
                            <footer class="blockquote-footer text-warning">F. Scott Fitzgerald, The Great Gatsby</footer>
                        </blockquote>
                    </div>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="8000">
                <div class="card mx-auto border-0 bg-transparent">
                    <div class="card-body text-center">
                        <blockquote class="blockquote mb-2">
                            <p class="fs-4 fst-italic">“I am not afraid of storms, for I am learning how to sail my ship.”
                            </p>
                            <footer class="blockquote-footer text-warning">Louisa May Alcott, Little Women</footer>
                        </blockquote>
                    </div>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="8000">
                <div class="card mx-auto border-0 bg-transparent">
                    <div class="card-body text-center">
                        <blockquote class="blockquote mb-2">
                            <p class="fs-4 fst-italic">“Life is to be lived, not controlled; and humanity is won by
                                continuing to play in face of certain defeat.”</p>
                            <footer class="blockquote-footer text-warning">Ralph Ellison, Invisible Man</footer>
                        </blockquote>
                    </div>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="8000">
                <div class="card mx-auto border-0 bg-transparent">
                    <div class="card-body text-center">
                        <blockquote class="blockquote mb-2">
                            <p class="fs-4 fst-italic">“Reality is the lifeblood that makes a work pulse with energy.
                                Reality itself is entertainment!”</p>
                            <footer class="blockquote-footer text-warning">Hirohiko Araki, JoJo's Bizarre Adventure: Diamond
                                is Unbreakable</footer>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Slider Book Preview --}}
    <div class="container my-5">
        <h2 class="text-center mb-4 fw-bold">
            <span class="border-bottom border-warning border-3 pb-2">Best Seller</span>
        </h2>
        <div id="bookPreviewCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner py-3">
                <div class="carousel-item active" data-bs-interval="5000">
                    <div class="d-flex justify-content-center flex-wrap gap-3">
                        <img src="{{ asset('/storage/image/BookCover/a2.jpg') }}"
                            class="img-fluid rounded border border-2 border-black col-xl-3 col-lg-6 col-md-6 col-sm-12"
                            style="max-height: 500px; max-width: 300px;">
                        <img src="{{ asset('/storage/image/BookCover/a4.jpg') }}"
                            class="img-fluid rounded border border-2 col-xl-3 col-lg-6 col-md-6 col-sm-12"
                            style="max-height: 500px; max-width: 300px;">
                        <img src="{{ asset('/storage/image/BookCover/a6.jpg') }}"
                            class="img-fluid rounded border border-2 col-xl-3 col-lg-6 d-none d-md-block"
                            style="max-height: 500px; max-width: 300px;">
                        <img src="{{ asset('/storage/image/BookCover/a7.jpg') }}"
                            class="img-fluid rounded border border-2 col-xl-3 col-lg-6 d-none d-md-block"
                            style="max-height: 500px; max-width: 300px;">
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="5000">
                    <div class="d-flex justify-content-center flex-wrap gap-3">
                        <img src="{{ asset('/storage/image/BookCover/r1.jpg') }}"
                            class="img-fluid rounded border border-2 col-xl-3 col-lg-6 col-md-6 col-sm-12"
                            style="max-height: 500px; max-width: 300px;">
                        <img src="{{ asset('/storage/image/BookCover/r3.jpg') }}"
                            class="img-fluid rounded border border-2 col-xl-3 col-lg-6 col-md-6 col-sm-12"
                            style="max-height: 500px; max-width: 300px;">
                        <img src="{{ asset('/storage/image/BookCover/r5.jpg') }}"
                            class="img-fluid rounded border border-2 col-xl-3 col-lg-6 d-none d-md-block"
                            style="max-height: 500px; max-width: 300px;">
                        <img src="{{ asset('/storage/image/BookCover/r7.jpg') }}"
                            class="img-fluid rounded border border-2 col-xl-3 col-lg-6 d-none d-md-block"
                            style="max-height: 500px; max-width: 300px;">
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="5000">
                    <div class="d-flex justify-content-center flex-wrap gap-3">
                        <img src="{{ asset('/storage/image/BookCover/fan1.jpg') }}"
                            class="img-fluid rounded border border-2 col-xl-3 col-lg-6 col-md-6 col-sm-12"
                            style="max-height: 500px; max-width: 300px;">
                        <img src="{{ asset('/storage/image/BookCover/fan2.jpg') }}"
                            class="img-fluid rounded border border-2 col-xl-3 col-lg-6 col-md-6 col-sm-12"
                            style="max-height: 500px; max-width: 300px;">
                        <img src="{{ asset('/storage/image/BookCover/fan3.jpg') }}"
                            class="img-fluid rounded border border-2 col-xl-3 col-lg-6 d-none d-md-block"
                            style="max-height: 500px; max-width: 300px;">
                        <img src="{{ asset('/storage/image/BookCover/fan4.jpg') }}"
                            class="img-fluid rounded border border-2 col-xl-3 col-lg-6 d-none d-md-block"
                            style="max-height: 500px; max-width: 300px;">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container my-5">
        <h2 class="text-center mb-4 fw-bold">
            <span class="border-bottom border-warning border-3 pb-2">Our Book</span>
        </h2>
        <div class="row row-cols-1 row-cols-md-3 row-cols-lg-3 py-3 g-3">
            @foreach ($book as $b)
                <div class="col">
                    <div class="card border rounded border-2 border-black">
                        <img class="card-img-top img-fluid" src="{{ asset('/storage/image/BookCover/' . $b->image) }}"
                            alt="Error" style="max-height: 500px; max-width: 100%;">
                        <div class="card-body bg-light">
                            <h5 class="card-title text-dark fw-normal">{{ $b->title }}</h5>
                            <p class="card-subtitle text-warning mt-2 fw-bold">{{ $b->author }}</p>
                            <a class="btn btn-outline-dark mt-2" href="/bookDetail/{{ $b->id }}">Detail</a>
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
