@extends('template.base')

@push('wrapper')
    <!-- Main wrapper -->
    <div id="main-wrapper">
        <!-- Header -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <!-- Logo -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="{{ route('dashboard') }}">
                        <b>
                            <!-- Dark Logo icon -->
                            <img src="assets/images/logo-icon.png" alt="GatherGuide" class="dark-logo" />
                            <!-- Light Logo icon -->
                            <img src="assets/images/logo-light-icon.png" alt="GatherGuide" class="light-logo" />
                        </b>
                        <span>
                            <!-- Logo text -->
                            <img src="assets/images/logo-text.png" alt="GatherGuide" class="dark-logo" />
                            <!-- Light Logo text -->
                            <img src="assets/images/logo-light-text.png" class="light-logo" alt="GatherGuide" />
                        </span>
                    </a>
                </div>

                <!-- Navbar -->
                @include('template.components.top-navbar')
            </nav>
        </header>

        <!-- Left sidebar -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- User Profile-->
                @include('template.components.user-profile')

                <!-- Sidebar navigation-->
                @include('template.components.sidebar')
            </div>
        </aside>



        <!-- Page wrapper  -->
        <div class="page-wrapper">
            <div class="container-fluid">
                <!-- Page content -->
                @stack('content')
            </div>
        </div>

        <!-- Footer -->
        @include('template.components.footer')
    </div>
@endpush

@push('js')
    <script src="dist/js/perfect-scrollbar.jquery.min.js"></script>
    <script src="dist/js/waves.js"></script>
    <script src="dist/js/sidebarmenu.js"></script>
    <script src="dist/js/custom.min.js"></script>
    <script src="assets/node_modules/skycons/skycons.js"></script>
    <script src="assets/node_modules/raphael/raphael-min.js"></script>
    <script src="dist/js/dashboard4.js"></script>
@endpush
