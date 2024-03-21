<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="viewport" content="initial-scale=1, maximum-scale=1" />
    <!-- site metas -->
    <title>Portofolio - Kurnia Shandi</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--favicon-->
    <link rel="icon" href="{{ asset('template/frontend_ndi/images/favicon.ico') }}" type="image/x-icon" />
    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{ asset('template/admin/css/bootstrap.min.css') }}" />
    <!-- site css -->
    <link rel="stylesheet" href="{{ asset('template/admin/style.css') }}" />
    <!-- responsive css -->
    <link rel="stylesheet" href="{{ asset('template/admin/css/responsive.css') }}" />
    <!-- color css -->
    <link rel="stylesheet" href="{{ asset('template/admin/css/colors.css') }}" />
    <!-- select bootstrap -->
    <link rel="stylesheet" href="{{ asset('template/admin/css/bootstrap-select.css') }}" />
    <!-- scrollbar css -->
    <link rel="stylesheet" href="{{ asset('template/admin/css/perfect-scrollbar.css') }}" />
    <!-- custom css -->
    <link rel="stylesheet" href="{{ asset('template/admin/css/custom.css') }}" />
    <!-- calendar file css -->
    <link rel="stylesheet" href="{{ asset('template/admin/js/semantic.min.css') }}" />
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link rel="stylesheet" href="{{ asset('template/backend') }}/css/styles.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    {{-- data table  --}}
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">

    {{-- select 2 --}}
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <style>
        #content {
            margin-top: 20px;
        }

        .topbar {
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <!-- Sidebar Start -->
        <nav id="sidebar">
            <div class="sidebar_blog_1">
                <div class="sidebar-header">
                    <div class="logo_section">
                        <a href="index.html"><img class="logo_icon img-responsive"
                                src="{{ asset('template/admin/images/logo/logo_icon.png') }}" alt="#" /></a>
                    </div>
                </div>
                <div class="sidebar_user_info">
                    <div class="icon_setting"></div>
                    <div class="user_profle_side">
                        <div class="user_img">
                            <img class="img-responsive"
                                src="{{ asset('template/admin/images/layout_img/user_img.jpg') }}" alt="#" />
                        </div>
                        <div class="user_info">
                            <h6>Kurnia Shandi</h6>
                            <p><span class="online_animation"></span> Online</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sidebar_blog_2">
                <h4>General</h4>
                <ul class="list-unstyled components">
                    <li class="active">
                        <a href="{{ route('home') }}"><i class="fa fa-dashboard yellow_color"></i>
                            <span>Dashboard</span></a>
                    </li>
                    <li>
                        <a href="{{ route('biodata.index') }}"><i class="fa fa-user orange_color"></i>
                            <span>Profile</span></a>
                    </li>
                    <li>
                        <a href="{{ route('skill.index') }}"><i class="fa fa-star purple_color"></i>
                            <span>Skill</span></a>
                    </li>
                    <li>
                        <a href="{{ route('pendidikan.index') }}"><i class="fa fa-graduation-cap purple_color2"></i>
                            <span>Pendidikan</span></a>
                    </li>
                    <li>
                        <a href="{{ route('pengalaman.index') }}"><i class="fa fa-suitcase yellow_color"></i>
                            <span>Pengalaman</span></a>
                    </li>
                    <li>
                        <a href="{{ route('project.index') }}"><i class="fa fa-briefcase blue2_color"></i>
                            <span>Project</span></a>
                    </li>
                </ul>
            </div>
        </nav>
        <!--  Sidebar End -->
        <!--  Main wrapper -->
        <div id="content">
            <!-- topbar -->
            <div class="topbar">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <div class="full">
                        <button type="button" id="sidebarCollapse" class="sidebar_toggle">
                            <i class="fa fa-bars"></i>
                        </button>
                        <div class="logo_section">
                            <a href="index.html"><img class="img-responsive"
                                    src="{{ asset('template/admin/images/logo/logo.png') }}" alt="#" /></a>
                        </div>
                        <div class="right_topbar">
                            <div class="icon_info">
                                <ul>
                                    <li>
                                        <a href="#"><i class="fa fa-bell-o"></i><span class="badge">2</span></a>
                                    </li>
                                </ul>
                                <ul class="user_profile_dd">
                                    <li>
                                        <a class="dropdown-toggle" data-toggle="dropdown"><img
                                                class="img-responsive rounded-circle"
                                                src="{{ asset('template/admin/images/layout_img/user_img.jpg') }}"
                                                alt="#" /><span
                                                class="name_user">{{ Auth::user()->name }}</span></a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="{{ route('biodata.index') }}">Profile</a>
                                            <a class="dropdown-item" href="#"
                                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                <span>Log Out</span> <i class="fa fa-sign-out"></i>
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                style="display: none;">
                                                @method('POST')
                                                @csrf
                                            </form>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>

            <!-- end topbar -->
            @yield('content')
        </div>
    </div>

    <!-- jQuery -->
    <script src="{{ asset('template/admin/js/jquery.min.js') }}"></script>
    <script src="{{ asset('template/admin/js/popper.min.js') }}"></script>
    <script src="{{ asset('template/admin/js/bootstrap.min.js') }}"></script>
    <!-- wow animation -->
    <script src="{{ asset('template/admin/js/animate.js') }}"></script>
    <!-- select country -->
    <script src="{{ asset('template/admin/js/bootstrap-select.js') }}"></script>
    <!-- owl carousel -->
    <script src="{{ asset('template/admin/js/owl.carousel.js') }}"></script>
    <!-- chart js -->
    <script src="{{ asset('template/admin/js/Chart.min.js') }}"></script>
    <script src="{{ asset('template/admin/js/Chart.bundle.min.js') }}"></script>
    <script src="{{ asset('template/admin/js/utils.js') }}"></script>
    <script src="{{ asset('template/admin/js/analyser.js') }}"></script>
    <!-- nice scrollbar -->
    <script src="{{ asset('template/admin/js/perfect-scrollbar.min.js') }}"></script>
    <script>
        var ps = new PerfectScrollbar("#sidebar");
    </script>
    <!-- custom js -->
    <script src="{{ asset('template/admin/js/custom.js') }}"></script>
    <!-- calendar file css -->
    <script src="{{ asset('template/admin/js/semantic.min.js') }}"></script>
    <script src="{{ asset('template/admin/js/chart_custom_style1.js') }}"></script>

    <script src="{{ asset('template/backend') }}/libs/jquery/dist/jquery.min.js"></script>
    <script src="{{ asset('template/backend') }}/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('template/backend') }}/js/sidebarmenu.js"></script>
    <script src="{{ asset('template/backend') }}/js/app.min.js"></script>
    <script src="{{ asset('template/backend') }}/libs/apexcharts/dist/apexcharts.min.js"></script>
    <script src="{{ asset('template/backend') }}/libs/simplebar/dist/simplebar.js"></script>
    <script src="{{ asset('template/backend') }}/js/dashboard.js"></script>
    {{-- data table --}}
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
    <script>
        new DataTable('#example');
    </script>
    {{-- select 2 --}}
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.select2').select2({

            });
        });
    </script>

</body>

</html>
