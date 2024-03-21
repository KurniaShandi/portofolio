@extends('layouts.frontend.main')
@section('content')
    <section class="hero-wrap" style="background-image: url('{{ asset('template/frontend_ndi/images/bg_1.jpg') }}');"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end justify-content-center" style="height: 350px;">
                <div class="col-md-12 ftco-animate pb-5 mb-3 text-center">
                    <h1 class="mb-3 bread">Resume</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('portofolio.index') }}">Home <i
                                    class="ion-ios-arrow-forward"></i></a></span> <span class="mr-2"><a
                                href="{{ route('portofolio.resume') }}">Resume <i class="ion-ios-arrow-forward"></i></a></p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-no-pb" id="resume-section">
        <div class="container">
            <div class="row justify-content-center pb-5">
                <div class="col-md-10 heading-section text-center ftco-animate">
                    <h1 class="big big-2">Resume</h1>
                    <h2 class="mb-4">Resume</h2>
                    <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a
                        paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    @foreach ($pendidikan as $data)
                        <div class="resume-wrap ftco-animate">
                            <span class="date">{{ $data->tahun_mulai }} - {{ $data->tahun_selesai }}</span>
                            <h2>{{ $data->institusi }}</h2>
                            <span class="position">{{ $data->jurusan }}</span>
                            <p class="mt-4">{{ $data->keterangan }}</p>
                        </div>
                    @endforeach
                </div>

                <div class="col-md-6">
                    @foreach ($pengalaman as $data)
                        <div class="resume-wrap ftco-animate">
                            <span class="date">{{ $data->tahun_mulai }} - {{ $data->tahun_selesai }}</span>
                            <h2>{{ $data->pekerjaan }}</h2>
                            <span class="position">{{ $data->nama_perusahaan }}</span>
                            <p class="mt-4">{{ $data->keterangan }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection
