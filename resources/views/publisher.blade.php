@extends('template')
@section('title', 'Publisher')

@section('content')
    <div class="container my-5">
        <h1 class="text-center mb-4 fw-bold">
            <span class="border-bottom border-warning border-3 pb-2">Publisher</span>
        </h1>
        <div class="row row-cols-2 row-cols-md-2 row-cols-lg-4 py-3 g-3">
            @foreach ($publisher as $p)
                <div class="col">
                    <div class="card border rounded border-2 border-black">
                        <img height="250px" width="250px" class="card-img-top"
                            src="{{ asset('/storage/image/PublisherLogo/' . $p->image) }}" alt="Error">
                        <div class="card-body bg-light">
                            <h5 class="card-title text-dark fw-normal">{{ $p->name }}</h5>
                            <p class="card-subtitle text-warning mt-2 fw-bold">{{ $p->address }}</p>
                            <a class="btn btn-outline-dark mt-2" href="/publisherDetail/{{ $p->id }}">Detail</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    {{-- <div class="mb-3 m-2 d-flex justify-content-center">
        {{ $publisher->withQueryString()->links() }}
    </div> --}}
@endsection
