@extends('layouts/web.main')

@section('index')
    <section class="hero" id="hero">
        <div class="wrapper">
            @if (session()->has('success'))
                <div class="alert success">
                    <p class="alert_msg">{{ session('success') }}</p>
                    <i class="fa-solid fa-xmark alert_toggle"></i>
                </div>
            @endif
            @if (session()->has('error'))
                <div class="alert error">
                    <p class="alert_msg">{{ session('error') }}</p>
                    <i class="fa-solid fa-xmark alert_toggle"></i>
                </div>
            @endif
            <div class="wrapper-opcer">
                @if (session()->has('success'))
                    <div class="alert success">
                        <p class="alert_msg">{{ session('success') }}</p>
                        <i class="fa-solid fa-xmark alert_toggle"></i>
                    </div>
                @endif
                @if (session()->has('error'))
                    <div class="alert error">
                        <p class="alert_msg">{{ session('error') }}</p>
                        <i class="fa-solid fa-xmark alert_toggle"></i>
                    </div>
                @endif
                <div class="container-opcer">

                    <a href="#IMG2" class="container-img-opcer" id="IMG1">
                        <div class="img">
                            <img src="{{ asset('assets/img/opcer/pulau1.png') }}" alt="" />
                        </div>
                    </a>
                    <a href="#IMG3" class="container-img-opcer" id="IMG2">
                        <div class="img">
                            <img src="{{ asset('assets/img/opcer/pulau2.png') }}" alt="" />
                        </div>
                    </a>
                    <a href="#IMG4" class="container-img-opcer" id="IMG3">
                        <div class="img">
                            <img src="{{ asset('assets/img/opcer/pulau3.png') }}" alt="" />
                        </div>
                    </a>
                    <a href="#IMG5" class="container-img-opcer" id="IMG4">
                        <div class="img">
                            <img src="{{ asset('assets/img/opcer/pulau4.png') }}" alt="" />
                        </div>
                    </a>
                    <a href="#IMG6" class="container-img-opcer" id="IMG5">
                        <div class="img">
                            <img src="{{ asset('assets/img/opcer/pulau5.png') }}" alt="" />
                        </div>
                    </a>
                    <a href="#IMG7" class="container-img-opcer" id="IMG6">
                        <div class="img">
                            <img src="{{ asset('assets/img/opcer/pulau6.png') }}" alt="" />
                        </div>
                    </a>
                    <a href="#IMG8" class="container-img-opcer" id="IMG7">
                        <div class="img">
                            <img src="{{ asset('assets/img/opcer/pulau7.png') }}" alt="" />
                        </div>
                    </a>
                    <a href="#IMG9" class="container-img-opcer" id="IMG8">
                        <div class="img">
                            <img src="{{ asset('assets/img/opcer/pulau8.png') }}" alt="" />
                        </div>
                    </a>

                    <a href="#" class="main-img-opcer" id="IMG9">
                        <div class="img">
                            <img src="{{ asset('assets/img/opcer/pulauterakhir.png') }}" alt="" />
                        </div>
                    </a>

                    <div class="peng-img-opcer-awal">
                        <img src="{{ asset('assets/img/opcer/meteor.png') }}" alt="Meteror" />
                    </div>
                    <div class="peng-img-opcer">
                        <img src="{{ asset('assets/img/opcer/meteor1.png') }}" alt="Meteror" />
                    </div>
                    <div class="peng-img-opcer2">
                        <img src="{{ asset('assets/img/opcer/meteor2.png') }}" alt="Meteror" />
                    </div>
                    <div class="peng-img-opcer3">
                        <img src="{{ asset('assets/img/opcer/meteor3.png') }}" alt="Meteror" />
                    </div>
                    <div class="peng-img-opcer4">
                        <img src="{{ asset('assets/img/opcer/meteor4.png') }}" alt="Meteror" />
                    </div>
                    <div class="peng-img-opcer5">
                        <img src="{{ asset('assets/img/opcer/meteor5.png') }}" alt="Meteror" />
                    </div>
                </div>
                <div class="img-opcer">
                    <img src="{{ asset('assets/img/opcer/Paketbintang.png') }}" alt="Bintang" />
                </div>
            </div>
        @endsection
