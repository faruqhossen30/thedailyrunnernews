<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>@yield('title','Laravel Role Admin')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
    <!-- App css -->
    <link href="{{ asset('backend/assets/css/material/bootstrap-material.min.css') }}" rel="stylesheet" type="text/css"
        id="bs-default-stylesheet" />
    <link href="{{ asset('backend/assets/css/material/app-material.min.css') }}" rel="stylesheet" type="text/css"
        id="app-default-stylesheet" />
    <link href="{{ asset('backend/assets/libs/quill/quill.snow.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend/assets/libs/quill/quill.bubble.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend/assets/libs/quill/quill.core.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend/assets/css/material/bootstrap-material-dark.min.css') }}" rel="stylesheet"
        type="text/css" id="bs-dark-stylesheet"/>
    <link href="{{ asset('backend/assets/css/material/app-material-dark.min.css') }}" rel="stylesheet" type="text/css"
        id="app-dark-stylesheet" />
    <!-- icons -->
    <link href="{{ asset('backend') }}/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/@mdi/font@6.5.95/css/materialdesignicons.min.css">

    @stack('style')
</head>

<body class="loading">
    <!-- Begin page -->
    <div id="wrapper">
        <!-- Topbar Start -->
        @include('backend.layout.topbar')
        <!-- end Topbar -->
        <!-- ========== Left Sidebar Start ========== -->
        @include('backend.layout.leftsidebar')
        <!-- Left Sidebar End -->
        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->
        <div class="content-page">
            <div class="content">
                <!-- Start Content-->
                <div class="container-fluid">
                    <!-- start page title -->
                    @yield('content')
                    <!-- end page title -->
                </div> <!-- container -->
            </div> <!-- content -->
            <!-- Footer Start -->
            @include('backend.layout.footer')
            <!-- end Footer -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->

    </div>
    <!-- END wrapper -->
    <!-- Right Sidebar -->
    @include('backend.layout.rightsidebar')
    <!-- /Right-bar -->
    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>
    <!-- Vendor js -->
    <script src="{{ asset('backend/assets/js/vendor.min.js') }}"></script>
    <!-- App js -->
    <script src="{{ asset('backend/assets/js/app.min.js') }}"></script>

    <!-- Plugins js -->
    <script src="{{ asset('backend/assets/libs/quill/quill.min.js') }}"></script>

    <!-- Init js-->
    <script src="{{ asset('backend/assets/js/pages/form-quilljs.init.js') }}"></script>
    <script src="{{asset('font')}}/assets/js/pages/fontawesome.init.js"></script>
    @stack('script')

</body>

</html>
