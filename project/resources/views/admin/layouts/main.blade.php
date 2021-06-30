
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  @yield('title')
  <!-- Favicon -->
  <link rel="icon" href="{{ asset("assets/admin/img/brand/favicon.png") }}" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="{{ asset('assets/admin/vendor/nucleo/css/nucleo.css') }}" type="text/css">
  <link rel="stylesheet" href="{{ asset("assets/admin/vendor/@fortawesome/fontawesome-free/css/all.min.css") }}" type="text/css">
  <!-- Argon CSS -->

  <link rel="stylesheet" href="{{ asset('assets/admin/css/argon.css?v=1.2.0') }}" type="text/css">
  <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
</head>

<body>
  <!--side Navbar -->
@include('admin.layouts.sidenav')
  <!-- Main content -->
  <div class="main-content" id="panel">

    {{-- Top Navbar --}}
    @include('admin.layouts.topnav')

    <!-- Header -->
 @yield('content')
    <!-- Page content -->

  </div>
  <!-- Footer -->

  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="{{ asset("/assets/admin/vendor/jquery/dist/jquery.min.js") }}"></script>
  <script src="{{ asset("assets/admin/vendor/bootstrap/dist/js/bootstrap.bundle.min.js") }}"></script>
  <script src="{{ asset("assets/admin/vendor/js-cookie/js.cookie.js") }}"></script>
  <script src="{{ asset("assets/admin/vendor/jquery.scrollbar/jquery.scrollbar.min.js") }}"></script>
  <script src="{{ asset("assets/admin/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js") }}"></script>
  <!-- Argon JS -->
  <script src="{{ asset("assets/admin/js/argon.js?v=1.2.0") }}"></script>
<script src="{{ asset("assets/admin/js/main.js") }}"></script>
  <script src="{{ asset('assets/all/js/toastr.min.js') }}"></script>
  {!! Toastr::message() !!}


  @stack('js')



</body>

</html>
