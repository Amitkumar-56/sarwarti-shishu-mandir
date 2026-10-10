<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">
<head>
    <title>Admin Saraswati Shishu Mandir Play School</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('public/front') }}/images/favicon.png">

    <!-- Custom Colors to match front-end -->
    <style>
        .app-menu, .navbar-menu {
            background-color: #032274 !important;
            border-right: 1px solid #032274 !important;
        }
        .logo-dark, .logo-light {
            background-color: #032274 !important;
        }
        .btn-primary, .btn-success, .btn-info {
            background-color: #032274 !important;
            border-color: #032274 !important;
        }
        .text-primary {
            color: #032274 !important;
        }
        #page-topbar {
            border-bottom: 2px solid #032274;
        }
    </style>
    <!-- jsvectormap css -->
    <link href="{{ asset('public/admin') }}/libs/jsvectormap/css/jsvectormap.min.css" rel="stylesheet" type="text/css" />

    <!--Swiper slider css-->
    <link href="{{ asset('public/admin') }}/libs/swiper/swiper-bundle.min.css" rel="stylesheet" type="text/css" />

    <!-- Layout config Js -->
    <script src="{{ asset('public/admin') }}/js/layout.js"></script>
    <!-- Bootstrap Css -->
    <link href="{{ asset('public/admin') }}/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('public/admin') }}/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('public/admin') }}/css/app.min.css" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="{{ asset('public/admin') }}/css/custom.min.css" rel="stylesheet" type="text/css" />
 <!--datatable css-->
    <link rel="stylesheet" href="{{ asset('public/admin') }}/1.11.5/css/dataTables.bootstrap5.min.css" />
    <!--datatable responsive css-->
    <link rel="stylesheet" href="{{ asset('public/admin') }}/responsive/2.2.9/css/responsive.bootstrap.min.css" />

    <link rel="stylesheet" href="{{ asset('public/admin') }}/buttons/2.2.2/css/buttons.dataTables.min.css">
 

</head>

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">

        <header id="page-topbar">
    <div class="layout-width">
        <div class="navbar-header">
            <div class="d-flex">
                <!-- LOGO -->
                <div class="navbar-brand-box horizontal-logo">
                    <a href="index.html" class="logo logo-dark">
                        <span class="logo-sm">
                            <img src="{{ asset('public/front') }}/images/Electromania-logo.jpg" alt="" height="22">
                        </span>
                        <span class="logo-lg">
                            <img src="{{ asset('public/front') }}/images/Electromania-logo.jpg" alt="" height="50">
                        </span>
                    </a>

                    <a href="index.html" class="logo logo-light">
                        <span class="logo-sm">
                            <img src="{{ asset('public/front') }}/images/Electromania-logo.jpg" alt="" height="22">
                        </span>
                        <span class="logo-lg">
                            <img src="{{ asset('public/front') }}/images/Electromania-logo.jpg" alt="" height="50">
                        </span>
                    </a>
                </div>

                <button type="button" class="btn btn-sm px-3 fs-16 header-item vertical-menu-btn topnav-hamburger shadow-none" id="topnav-hamburger-icon">
                    <span class="hamburger-icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                </button>

             
            </div>

            <div class="d-flex align-items-center">


               

                <div class="dropdown ms-sm-3 header-item topbar-user">
                    <button type="button" class="btn shadow-none" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="d-flex align-items-center">
                            <img class="rounded-circle header-profile-user" src="{{ asset('public/admin') }}/images/users/avatar-1.jpg" alt="Header Avatar">
                            <span class="text-start ms-xl-2">
                                {{--  <span class="d-none d-xl-inline-block ms-1 fw-medium user-name-text">Anna Adame</span>  --}}
                                <span class="d-none d-xl-inline-block ms-1 fw-medium user-name-text">Admin</span>
                            </span>
                        </span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end">
                        <!-- item-->
                        <h6 class="dropdown-header">Welcome Admin!</h6>
                       
                     
                        <a class="dropdown-item" href="{{ url('logout') }}"><i class="mdi mdi-logout text-muted fs-16 align-middle me-1"></i> <span class="align-middle" data-key="t-logout">Logout</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>