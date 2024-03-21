@extends('layouts.backend.main')
@section('content')
    <!-- dashboard inner -->
    <div class="midde_cont">
        <div class="container-fluid">
            <div class="row column_title">
                <div class="col-md-12">
                    <div class="page_title">
                        <h2>Dashboard</h2>
                    </div>
                </div>
            </div>
            <div class="row column1">
                @php
                    $totalExperience = count($pengalaman);
                    $totalProject = count($project);
                    $totalSkill = count($skill);
                @endphp

                <div class="col-md-6 col-lg-3">
                    <div class="full counter_section margin_bottom_30">
                        <div class="couter_icon">
                            <div>
                                <i class="fa fa-graduation-cap" style="color: #FFD700;"></i> <!-- Warna kuning -->
                            </div>
                        </div>
                        <div class="counter_no">
                            <div>
                                <p class="total_no">{{ $totalExperience }}</p>
                                <p class="head_couter">Pengalaman</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="full counter_section margin_bottom_30">
                        <div class="couter_icon">
                            <div>
                                <i class="fa fa-laptop" style="color: #00CED1;"></i> <!-- Warna biru muda -->
                            </div>
                        </div>
                        <div class="counter_no">
                            <div>
                                <p class="total_no">{{ $totalProject }}</p>
                                <p class="head_couter">Project</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="full counter_section margin_bottom_30">
                        <div class="couter_icon">
                            <div>
                                <i class="fa fa-cogs" style="color: #FFA500;"></i> <!-- Warna oranye -->
                            </div>
                        </div>
                        <div class="counter_no">
                            <div>
                                <p class="total_no">{{ $totalSkill }}</p>
                                <p class="head_couter">Skill</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="full counter_section margin_bottom_30">
                        <div class="couter_icon">
                            <div>
                                <i class="fa fa-comments-o red_color"></i> <!-- Tidak diganti -->
                            </div>
                        </div>
                        <div class="counter_no">
                            <div>
                                <p class="total_no">10</p>
                                <p class="head_couter">Testimoni</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- end dashboard inner -->
@endsection
