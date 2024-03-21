@extends('layouts.frontend.main')
@section('content')
    <section class="hero-wrap" style="background-image: url('{{ asset('template/frontend_ndi/images/bg_1.jpg') }}');"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end justify-content-center" style="height: 350px;">
                <div class="col-md-12 ftco-animate pb-5 mb-3 text-center">
                    <h1 class="mb-3 bread">About Me</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('portofolio.index') }}">Home <i
                                    class="ion-ios-arrow-forward"></i></a></span> <span class="mr-2"><a
                                href="{{ route('portofolio.about') }}">About <i
                                    class="ion-ios-arrow-forward"></i></a></span></p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-about img ftco-section ftco-no-pb" id="about-section">
        <div class="container">
            <div class="row d-flex">
                <div class="col-md-6 col-lg-5 d-flex">
                    <div class="img-about img d-flex align-items-stretch">
                        <div class="overlay"></div>
                        <div class="img d-flex align-self-stretch align-items-center"
                            style="background-image:url({{ url('images/foto/' . $biodata->foto) }});">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-7 pl-lg-5 pb-5">
                    <div class="row justify-content-start pb-3">
                        <div class="col-md-12 heading-section ftco-animate">
                            <h1 class="big">About</h1>
                            <h2 class="mb-4">About Me</h2>
                            <p style="text-align: justify;">{{ $biodata->about }}</p>
                            <ul class="about-info mt-4 px-md-0 px-2">
                                <li class="d-flex"><span>Name</span> <span>{{ $biodata->nama_lengkap }}</span></li>
                                <li class="d-flex"><span>Date of birth</span> <span>Februari 26, 2003</span></li>
                                <li class="d-flex"><span>Address</span> <span>Simpang Tiga Kenanga, Sungai Antuan</span>
                                </li>
                                <li class="d-flex"><span>Email</span> <span>shandikurnia33@gmail.com</span></li>
                                <li class="d-flex"><span>Phone</span> <span>+62-822-8761-5325</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="counter-wrap ftco-animate d-flex mt-md-3">
                        <div class="text">
                            <p><a href="#" class="btn btn-primary py-3 px-3">Download CV</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
