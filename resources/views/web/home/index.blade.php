@extends('web.layout')
<!-- ======= Hero Section ======= -->
<section id="hero" class="hero d-flex align-items-center section-bg">
    <div class="container">
        <div class="row justify-content-between gy-5">
            <div
                class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start">
                <h2 data-aos="fade-up">{{ $banner->title }}</h2>
                <p data-aos="fade-up" data-aos-delay="100">{{ $banner->description }}</p>
            </div>
            <div class="col-lg-5 order-1 order-lg-2 text-center text-lg-start">

                @if ($banner->image)
                    <img src="{{ asset('upload/banner/' . $banner->image) }}" class="img-fluid" alt=""
                        data-aos="zoom-out" data-aos-delay="300">
                @else
                    <img src="{{ asset('web_assets') }}/assets/img/hero-img.png" class="img-fluid" alt=""
                        data-aos="zoom-out" data-aos-delay="300">
                @endif
            </div>
        </div>
    </div>
</section>
@section('main')
@endsection
