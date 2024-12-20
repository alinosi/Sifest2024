@extends('layouts/web.main')

@section('index')
    <section class="form_section box_gradient">
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
            <div class="container p_relative py20">
                <div class="title_font text_center mt20 mb12">
                    <p class="text_big fc_white">Forgot Password</p>
                    <p class="fc_bluegly">Enter Your Email For Verification</p>
                </div>
                <div class="form_wrapper box_lt_rb_side p6">
                    <i class="box_lt_rb_side_design"></i>
                    <form action="{{ route('password.email') }}" method="post" autocomplete="off">
                        @csrf
                        <div class="form_container pb2">
                            <div class="form_group">
                                <div class="input_wrapper">
                                    <div class="input_container">
                                        <div class="icon">
                                            <i class="fa-solid fa-envelope"></i>
                                        </div>
                                        <div class="input_div">
                                            <p class="input_title title_font">Email</p>
                                            <input type="email" name="email" id="email" value="{{ old('email') }}"
                                                class="input" required>
                                        </div>
                                    </div>
                                    @error('email')
                                        <div class="error_msg">
                                            <p class="text_xsm fc_bluegly">
                                                {{ $message }}
                                            </p>
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="btn_container">
                            <button type="submit" class="btn_left form_btn" name="submit">
                                <i class="btn_left_design"></i>
                                Send Verification
                            </button>
                            <p class="text_sm fc_white">Back? <a href="{{ route('login') }}"><span
                                        class="fw_bold fc_bluegly">Login</span></a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
