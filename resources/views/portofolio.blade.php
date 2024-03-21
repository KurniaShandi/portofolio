@extends('layouts.frontend.main')
@section('content')
    <section id="home-section" class="hero">
        <div class="home-slider  owl-carousel">
            <div class="slider-item ">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row d-md-flex no-gutters slider-text align-items-end justify-content-end"
                        data-scrollax-parent="true">
                        <div class="one-third js-fullheight order-md-last img"
                            style="background-image:url({{ url('images/foto/' . $biodata->foto) }});">
                            <div class="overlay"></div>
                        </div>
                        <div class="one-forth d-flex  align-items-center ftco-animate"
                            data-scrollax=" properties: { translateY: '70%' }">
                            <div class="text">
                                <span class="subheading">Welcome to my portfolio website!</span>
                                <h1 class="mb-4 mt-3">I'm <span>{{ $biodata->nama_lengkap }}</span></h1>
                                <h2 class="mb-4">
                                    {{ substr($biodata->about, 0, 100) }}{{ strlen($biodata->about) > 100 ? '...' : '' }}
                                </h2>
                                <p>
                                    <a href="{{ route('portofolio.about') }}" class="btn btn-primary py-3 px-4">About Me</a>
                                    <a href="#" class="btn btn-white btn-outline-white py-3 px-4">Download CV</a>
                                </p>
                            </div>
                        </div>
                    </div>
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
                    <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It
                        is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    @php $counter = 0 @endphp
                    @foreach ($pendidikan as $data)
                        @if ($counter < 3)
                            <div class="resume-wrap ftco-animate">
                                <span class="date">{{ $data->tahun_mulai }} - {{ $data->tahun_selesai }}</span>
                                <h2>{{ $data->institusi }}</h2>
                                <span class="position">{{ $data->jurusan }}</span>
                                <p class="mt-4">{{ $data->keterangan }}</p>
                            </div>
                        @endif
                        @php $counter++ @endphp
                    @endforeach
                </div>

                <div class="col-md-6">
                    @php $counter = 0 @endphp
                    @foreach ($pengalaman as $data)
                        @if ($counter < 3)
                            <div class="resume-wrap ftco-animate">
                                <span class="date">{{ $data->tahun_mulai }} - {{ $data->tahun_selesai }}</span>
                                <h2>{{ $data->pekerjaan }}</h2>
                                <span class="position">{{ $data->nama_perusahaan }}</span>
                                <p class="mt-4">{{ $data->keterangan }}</p>
                            </div>
                        @endif
                        @php $counter++ @endphp
                    @endforeach
                </div>
            </div>
            <div class="row justify-content-center mt-5">
                <div class="col-md-6 text-center ftco-animate">
                    <p><a href="{{ route('portofolio.resume') }}" class="btn btn-primary py-4 px-5">Selengkapnya</a></p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section" id="skills-section">
        <div class="container">
            <div class="row justify-content-center pb-5">
                <div class="col-md-12 heading-section text-center ftco-animate">
                    <h1 class="big big-2">Skills</h1>
                    <h2 class="mb-4">My Skills</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 animate-box">
                    <div class="progress-wrap ftco-animate">
                        <h3>Photoshop</h3>
                        <div class="progress">
                            <div class="progress-bar color-1" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                                aria-valuemax="100" style="width:90%">
                                <span>90%</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 animate-box">
                    <div class="progress-wrap ftco-animate">
                        <h3>jQuery</h3>
                        <div class="progress">
                            <div class="progress-bar color-2" role="progressbar" aria-valuenow="85" aria-valuemin="0"
                                aria-valuemax="100" style="width:85%">
                                <span>85%</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 animate-box">
                    <div class="progress-wrap ftco-animate">
                        <h3>HTML5</h3>
                        <div class="progress">
                            <div class="progress-bar color-3" role="progressbar" aria-valuenow="95" aria-valuemin="0"
                                aria-valuemax="100" style="width:95%">
                                <span>95%</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 animate-box">
                    <div class="progress-wrap ftco-animate">
                        <h3>CSS3</h3>
                        <div class="progress">
                            <div class="progress-bar color-4" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                                aria-valuemax="100" style="width:90%">
                                <span>90%</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 animate-box">
                    <div class="progress-wrap ftco-animate">
                        <h3>WordPress</h3>
                        <div class="progress">
                            <div class="progress-bar color-5" role="progressbar" aria-valuenow="70" aria-valuemin="0"
                                aria-valuemax="100" style="width:70%">
                                <span>70%</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 animate-box">
                    <div class="progress-wrap ftco-animate">
                        <h3>SEO</h3>
                        <div class="progress">
                            <div class="progress-bar color-6" role="progressbar" aria-valuenow="80" aria-valuemin="0"
                                aria-valuemax="100" style="width:80%">
                                <span>80%</span>
                            </div>
                        </div>
                    </div>
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
                    @if ($count < 6)
                        <!-- Batasi hingga maksimal 6 proyek -->
                        @if ($count % 3 == 0 && $count != 0)
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
                @endif
                @endforeach
            </div>
        </div>
    </section>


    <section class="ftco-section ftco-no-pt ftco-no-pb ftco-counter img" id="section-counter">
        <div class="container">
            <div class="row d-md-flex align-items-center">
                @php
                    // Hitung total pengalaman dari data yang Anda miliki
                    $totalExperience = count($pengalaman);
                @endphp

                <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18">
                        <div class="text">
                            <strong class="number" data-number="{{ $totalExperience }}">{{ $totalExperience }}</strong>
                            <span>Pengalaman</span>
                        </div>
                    </div>
                </div>

                @php
                    // Hitung total projeck dari data yang Anda miliki
                    $totalExperience2 = count($project);
                @endphp

                <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18">
                        <div class="text">
                            <strong class="number"
                                data-number="{{ $totalExperience2 }}">{{ $totalExperience2 }}</strong>
                            <span>Project</span>
                        </div>
                    </div>
                </div>

                <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18">
                        <div class="text">
                            <strong class="number" data-number="500">0</strong>
                            <span>Skill</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-hireme img margin-top"
        style="background-image: url({{ asset('template/frontend_ndi/images/bg_1.jpg') }})">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-7 ftco-animate text-center">
                    <h2>I'm <span>Available</span> for freelancing</h2>
                    <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                    <p class="mb-0"><a href="#" class="btn btn-primary py-3 px-5">Hire me</a></p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section contact-section ftco-no-pb" id="contact-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <h1 class="big big-2">Contact</h1>
                    <h2 class="mb-4">Contact Me</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                </div>
            </div>

            <div class="row d-flex contact-info mb-5">
                <div class="col-md-6 col-lg-3 d-flex ftco-animate">
                    <div class="align-self-stretch box p-4 text-center">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="icon-map-signs"></span>
                        </div>
                        <h3 class="mb-4">Address</h3>
                        <p>198 West 21th Street, Suite 721 New York NY 10016</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex ftco-animate">
                    <div class="align-self-stretch box p-4 text-center">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="icon-phone2"></span>
                        </div>
                        <h3 class="mb-4">Contact Number</h3>
                        <p><a href="tel://1234567920">+ 1235 2355 98</a></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex ftco-animate">
                    <div class="align-self-stretch box p-4 text-center">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="icon-paper-plane"></span>
                        </div>
                        <h3 class="mb-4">Email Address</h3>
                        <p><a href="mailto:info@yoursite.com">info@yoursite.com</a></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex ftco-animate">
                    <div class="align-self-stretch box p-4 text-center">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="icon-globe"></span>
                        </div>
                        <h3 class="mb-4">Website</h3>
                        <p><a href="#">yoursite.com</a></p>
                    </div>
                </div>
            </div>

            <div class="row no-gutters block-9">
                <div class="col-md-6 order-md-last d-flex">
                    <form action="#" class="bg-light p-4 p-md-5 contact-form">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Your Name">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Your Email">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Subject">
                        </div>
                        <div class="form-group">
                            <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
                        </div>
                    </form>

                </div>

                <div class="col-md-6 d-flex">
                    <div class="img"
                        style="background-image: url({{ asset('template/frontend_ndi/images/about.jpg') }});"></div>
                </div>
            </div>
        </div>
    </section>
@endsection
