@extends('layouts.frontend.main')
@section('content')
    <section class="hero-wrap" style="background-image: url('{{ asset('template/frontend_ndi/images/bg_1.jpg') }}');"
        data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row no-gutters slider-text align-items-end justify-content-center" style="height: 350px;">
                <div class="col-md-12 ftco-animate pb-5 mb-3 text-center">
                    <h1 class="mb-3 bread">Project</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('portofolio.index') }}">Home <i
                                    class="ion-ios-arrow-forward"></i></a></span> <span class="mr-2"><a
                                href="{{ route('portofolio.project') }}">Project<i class="ion-ios-arrow-forward"></i></a>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-project" id="projects-section">
        <div class="container">
            <div class="row justify-content-center pb-5">
                <div class="col-md-12 heading-section text-center ftco-animate">
                    <h1 class="big big-2">Projects</h1>
                    <h2 class="mb-4">Our Projects</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                </div>
            </div>
            <div class="row">
                @php $count = 0; @endphp
                @foreach ($project as $data)
                    @if ($count % 3 == 0)
            </div>
            <div class="row">
                @endif
                <div class="col-md-4">
                    <div class="project img ftco-animate d-flex justify-content-center align-items-center"
                        style="background-image: url({{ url('images/foto/' . $data->foto) }});">
                        <div class="overlay"></div>
                        <div class="text text-center p-4">
                            <h3><a href="#">{{ $data->nama_projek }}</a></h3>
                            <span>{{ $data->keterangan }}</span>
                        </div>
                    </div>
                </div>
                @php $count++; @endphp
                @endforeach
            </div>

        </div>
    </section>
@endsection
