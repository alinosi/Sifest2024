<!DOCTYPE html>
<html lang="en">

<head>

    <!-- ============== Meta tag ================== -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 , shrink-to-fit=no">
    <meta name="description" content="Website SIFEST 2022">
    <meta name="keywords" content="UNSRI, HIMSI, Sistem Informasi, SIFEST 2022, SIFEST">
    <meta name="author" content="Divisi PTI Sifest 2022">
    <meta http-equiv="refresh" content="{{ config('session.lifetime') * 60 }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- ============= Fav Icon ================ -->
    <link rel="icon" href="{{ asset('assets/img/sifest2024/logo-sifest.png') }}" type="image/png" />

    <!-- ============= CSS Link ================= -->
    {{-- <link rel="stylesheet" href="scss/home/home.css"> --}}
    @if ($assets === 'Home')
        <link rel="stylesheet" href="{{ url('assets/scss/home/home.css') }}">
    @elseif($assets === 'Competition')
        <link rel="stylesheet" href="{{ url('assets/scss/competition/competition.css') }}">
    @elseif($assets === 'Seminar')
        <link rel="stylesheet" href="{{ url('assets/scss/seminar/seminar.css') }}">
    @elseif($assets === 'Tiket')
        <link rel="stylesheet" href="{{ url('assets/scss/seminar/seminar.css') }}">
    @elseif($assets === 'Opcer')
        <link rel="stylesheet" href="{{ url('assets/scss/opcer/opcer.css') }}">
    @elseif($assets === 'Bazaar')
        <link rel="stylesheet" href="{{ url('assets/scss/bazaar/bazaar.css') }}">
    @elseif($assets === 'Dashboard')
        <link rel="stylesheet" href="{{ url('assets/scss/dashboard/dashboard.css') }}">
    @elseif($assets === 'Form')
        <link rel="stylesheet" href="{{ url('assets/scss/form/form.css') }}">
    @endif

    <link rel="stylesheet" href="{{ url('assets/scss/template/main.css') }}">

    <!-- ============= Swiper js ================ -->
    <link rel="stylesheet" href="{{ url('vendor/swiperjs/swiper-bundle.min.css') }}">

    <!-- ============= Font Awesome ================ -->
    <link rel="stylesheet" href="{{ url('vendor/fontAwesome/css/all.min.css') }}">

    <!-- =============== Title =================== -->
    <title>{{ $title }}</title>
</head>

<body>
    @include('layouts/web.navbar')

    @yield('index')

    @include('layouts/web.footer')

    <!-- ============= Jquery ================ -->
    <script src="{{ url('vendor/jquery/jquery-3.6.0.js') }}"></script>

    <!-- ============= Swiper js ================ -->
    <script src="{{ url('vendor/swiperjs/swiper-bundle.min.js') }}"></script>

    <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>

    <!-- ================ GSAP ================= -->
    <script src="{{ url('vendor/gsap/gsap.min.js') }}"></script>
    <script src="{{ url('vendor/gsap/ScrollToPlugin.min.js') }}"></script>
    <script src="{{ url('vendor/gsap/ScrollTrigger.min.js') }}"></script>

    <!-- ============= Java Script ================ -->
    @if ($assets === 'Home')
        <script src="{{ url('assets/js/home/home.js') }}"></script>
    @elseif($assets === 'Competition')
        <script src="{{ url('assets/js/competition/competition.js') }}"></script>
    @elseif($assets === 'Seminar')
        <script src="{{ url('assets/js/seminar/seminar.js') }}"></script>
    @elseif($assets === 'Tiket')
        <script src="{{ url('assets/js/seminar/seminar.js') }}"></script>
    @elseif($assets === 'Opcer')
        <script src="{{ url('assets/js/opcer/opcer.js') }}"></script>
    @elseif($assets === 'Bazaar')
        <script src="{{ url('assets/js/bazaar/bazaar.js') }}"></script>
    @elseif($assets === 'Dashboard')
        <script src="{{ url('assets/js/dashboard/dashboard.js') }}"></script>
    @endif

    <script src="{{ url('assets/js/template/form.js') }}"></script>
    <script src="{{ url('assets/js/template/main.js') }}"></script>
    <script src="{{ url('js/template/script_rahmat.js') }}"></script>

</body>

</html>
