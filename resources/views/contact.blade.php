<link rel="stylesheet" href="{{ asset('CSS/contact.css') }}">
@extends('template')
@section('title', 'Contact')

@section('content')
    <div class="container my-5">
        <h1 class="text-center mb-4 fw-bold">
            <span class="border-bottom border-warning border-3 pb-2">Contact</span>
        </h1>
        <div class="accordion accordion-flush" id="accordionPanelsStayOpenExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                        aria-controls="panelsStayOpen-collapseOne">
                        <span class="fw-bold">Address</span>
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show"
                    aria-labelledby="panelsStayOpen-headingOne">
                    <div class="accordion-body">
                        Jalan Pembangunan Baru Raya, <br>
                        Kompleks Pertokoan Emerald Blok III/12 <br>
                        Bintaro, Tangerang Selatan <br>
                        Indonesia <br>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="true"
                        aria-controls="panelsStayOpen-collapseTwo">
                        <span class="fw-bold">Opening</span>
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse show"
                    aria-labelledby="panelsStayOpen-headingTwo">
                    <div class="accordion-body">
                        08.00 - 20.00 <br>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="true"
                        aria-controls="panelsStayOpen-collapseThree">
                        <span class="fw-bold">Contact Us</span>
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse show"
                    aria-labelledby="panelsStayOpen-headingThree">
                    <div class="accordion-body">
                        Phone: 021-08899776655 <br>
                        Email: happybookstore@happy.com <br>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
