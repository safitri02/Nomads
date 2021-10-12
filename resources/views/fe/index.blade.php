@extends('layFe')
@section('title', 'Travel Agency')
@section('navbar')

@section('content');
<section class="section-popular" id="popular">
<div class="container">
    <div class="row">
    <div class="col text-center section-popular-heading">
        <h2>Wisata Popular</h2>
        <p>
        Something that you never try
        <br />
        before in this world
        </p>
    </div>
    </div>
</div>
</section>
<section class="section-popular-content" id="popularContent">
<div class="container">
    <div class="section-popular-travel row justify-content-center">
    <div class="col-sm-6 col-md-4 col-lg-3">
        <div
        class="card-travel text-center d-flex flex-column"
        style="background-image: url('frontend/images/travel-1.jpg');"
        >
        <div class="travel-country">INDONESIA</div>
        <div class="travel-location">DERATAN, BALI</div>
        <div class="travel-button mt-auto">
            <a href="details.html" class="btn btn-travel-details px-4">
            View Details
            </a>
        </div>
        </div>
    </div>
    <div class="col-sm-6 col-md-4 col-lg-3">
        <div
        class="card-travel text-center d-flex flex-column"
        style="background-image: url('frontend/images/travel-2.jpg');"
        >
        <div class="travel-country">INDONESIA</div>
        <div class="travel-location">BROMO, MALANG</div>
        <div class="travel-button mt-auto">
            <a href="details.html" class="btn btn-travel-details px-4">
            View Details
            </a>
        </div>
        </div>
    </div>
    <div class="col-sm-6 col-md-4 col-lg-3">
        <div
        class="card-travel text-center d-flex flex-column"
        style="background-image: url('frontend/images/travel-3.jpg');"
        >
        <div class="travel-country">INDONESIA</div>
        <div class="travel-location">NUSA PENIDA</div>
        <div class="travel-button mt-auto">
            <a href="details.html" class="btn btn-travel-details px-4">
            View Details
            </a>
        </div>
        </div>
    </div>
    <div class="col-sm-6 col-md-4 col-lg-3">
        <div
        class="card-travel text-center d-flex flex-column"
        style="background-image: url('frontend/images/travel-4.jpg');">
        <div class="travel-country">INDONESIA</div>
        <div class="travel-location">DUBAI</div>
        <div class="travel-button mt-auto">
            <a href="details.html" class="btn btn-travel-details px-4">
            View Details
            </a>
        </div>
        </div>
    </div>
    </div>
</div>
</section>
@endsection

@section('testimoni')
@section('footer')

