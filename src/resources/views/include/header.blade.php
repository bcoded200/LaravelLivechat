<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="Description" content="Xino - Laravel Admin & Dashboard Template">
    <meta name="Author" content="Spruko Technologies Private Limited">
    <meta name="Keywords" content="cryptocurrency, dashboard, admin, crypto, ico, bootstrap admin template, admin template, bootstrap dashboard template, crypto dashboard, cryptocurrency dashboard, ico dashboard, crypto admin, dashboard cryptocurrency, cryptocurrency trading dashboard, crypto dashboard template "
    />

    <!-- Title -->
    <title> @section('title',strtoupper(ucfirst(config('app.name')))) @yield('title')  </title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('userdashassets/img/brand/favicon.png') }}" type="image/x-icon" />

    <!-- Icons css -->
    <link href="{{ asset('userdashassets/plugins/icons/icons.css') }}" rel="stylesheet">

    <!--  Right-sidemenu css -->
    <link href="{{ asset('userdashassets/plugins/sidebar/sidebar.css') }}" rel="stylesheet">

    <!--- Animations css-->
    <link href="{{ asset('userdashassets/css/animate.css') }}" rel="stylesheet">

    <!--  Custom Scroll bar-->
    <link href="{{ asset('userdashassets/plugins/custom-scroll/jquery.mCustomScrollbar.css') }}" rel="stylesheet" />

    <!--  Left-Sidebar css -->
    <link href="{{ asset('userdashassets/css/sidemenu.css') }}" rel="stylesheet">


    <!-- Internal Chart-Morris css-->
    <link href="{{ asset('userdashassets/plugins/morris.js/morris.css') }}" rel="stylesheet">

    <!-- Internal Nice-select css  -->
    <link href="{{ asset('userdashassets/plugins/jquery-nice-select/css/nice-select.css') }}" rel="stylesheet" />

    <!-- Internal News-Ticker css-->
    <link href="{{ asset('userdashassets/plugins/flag-icon-css/css/flag-icon.min.css') }}" rel="stylesheet">

    <!-- Jquery-countdown css-->
    <link href="{{ asset('userdashassets/plugins/jquery-countdown/countdown.css') }}" rel="stylesheet">

    <!-- Internal News-Ticker css-->
    <link href="{{ asset('userdashassets/plugins/newsticker/jquery.jConveyorTicker.css') }}" rel="stylesheet" />


    <!-- style css-->
    <link href="{{ asset('userdashassets/css/style.css') }}" rel="stylesheet">

    <!-- skin css-->
    <link href="{{ asset('userdashassets/css/skin-modes.css') }}" rel="stylesheet">

    <!-- dark-theme css-->
    <link href="{{ asset('userdashassets/css/style-dark.css') }}" rel="stylesheet">

    <!--- Internal Sweet-Alert css-->
		<link href="{{ asset('userdashassets/css/sweetalert.css') }}" rel="stylesheet">

    <!-- Switcher css -->
    <link href="{{ asset('userdashassets/switcher/css/switcher.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('userdashassets/switcher/demo.css') }}">


    	<!-- Internal Quill css -->
		<link href="{{ asset('userdashassets/plugins/quill/quill.snow.css') }}" rel="stylesheet">
		<link href="{{ asset('userdashassets/plugins/quill/quill.bubble.css') }}" rel="stylesheet">

    <!-- Internal  Data table css -->
		<link href="{{ asset('userdashassets/plugins/datatable/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" />
		<link href="{{ asset('userdashassets/plugins/datatable/css/buttons.bootstrap4.min.css') }}" rel="stylesheet">
		<link href="{{ asset('userdashassets/plugins/datatable/css/responsive.bootstrap4.min.css') }}" rel="stylesheet" />
		<link href="{{ asset('userdashassets/plugins/datatable/css/jquery.dataTables.min.css') }}" rel="stylesheet">
		<link href="{{ asset('userdashassets/plugins/datatable/css/responsive.dataTables.min.css') }}" rel="stylesheet">
		<link href="{{ asset('userdashassets/plugins/jquery-nice-select/css/nice-select.css') }}" rel="stylesheet">

</head>

<body class="main-body app sidebar-mini Light-mode">





    <!-- Page -->
    <div class="page">
        <!-- main-sidebar opened -->
        <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
        <aside class="app-sidebar sidebar-scroll ">
            <div class="main-sidebar-header">
                <a class="desktop-logo logo-light" href="{{ route('livechat.index') }}">

                    <img src="{{ asset('logo/logo.png') }}" class="main-logo" alt="logo"></a>
                <a class="desktop-logo logo-dark" href="{{ route('livechat.index') }}"><img src="{{ asset('logo/logo.png') }}" class="main-logo dark-theme" alt="logo"></a>
                <a class="logo-icon mobile-logo icon-light" href="{{ route('livechat.index') }}"><img src="{{ asset('logo/logo.png') }}" class="logo-icon" alt="logo"></a>
                <a class="logo-icon mobile-logo icon-dark" href="{{ route('livechat.index') }}"><img src="{{ asset('logo/logo.png') }}" class="logo-icon dark-theme" alt="logo"></a>
            </div>
            <div class="main-sidebar-body circle-animation ">

                <ul class="side-menu circle">
                    <li>
                        <h3 class="">Back To Dashboard</h3>
                    </li>
                    <li class="slide">
                        <a class="side-menu__item" href="/dashboard"><i class="side-menu__icon ti-palette"></i><span class="side-menu__label">Back To Dashboard</span></a>
                    </li>
                    <li class="slide">
                        <a class="side-menu__item" href="{{ route('livechat.index') }}"><i class="side-menu__icon ti-settings"></i><span class="side-menu__label">Tickets</span></a>
                    </li>









                </ul>
            </div>

            <form id="logout-form" action="/logout"
            method="POST" style="display: none;">
            @csrf
           </form>
        </aside>
        <!-- main-sidebar -->
