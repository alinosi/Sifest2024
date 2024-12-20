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
            <div class="container p_relative pt40 py20">
                <div class="grid_container_40_50">
                    <div class="grid_box_left p_unset ease2">
                        <div class="text_center title_font mb10">
                            <p class="text_big fc_white">Complete your data</p>
                            <p class="fc_bluegly">To participate in our events</p>
                        </div>
                        <div class="img_container">
                            <img src='assets/img/sifest2024/pose_win.svg' alt="">
                        </div>
                    </div>
                    <div class="grid_box_right box_lt_rb_side p6">
                        <i class="box_lt_rb_side_design"></i>
                        <p class="mb8 title_font text_h3 text_center fc_white">Your Data</p>
                        <form action="{{ route('dashboard') }}" method="post" autocomplete="off">
                            @csrf
                            <div class="form_container pb2">
                                <div class="form_group">
                                    <div class="input_wrapper">
                                        <div class="input_container focus">
                                            <div class="icon">
                                                <i class="fa-solid fa-user"></i>
                                            </div>
                                            <div class="input_div">
                                                <p class="input_title title_font">Full Name</p>
                                                <input type="text" name="name" id="name" placeholder="-"
                                                    value="{{ ucwords(strtolower(Auth::user()->name)) }}" required>
                                            </div>
                                        </div>
                                        @error('name')
                                            <div class="error_msg">
                                                <p class="text_xsm fc_bluegly">
                                                    {{ $message }}
                                                </p>
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="input_wrapper">
                                        <div class="input_container focus">
                                            <div class="icon">
                                                <i class="fa-solid fa-envelope"></i>
                                            </div>
                                            <div class="input_div">
                                                <p class="input_title title_font">Email</p>
                                                <input type="text" name="email" id="email" placeholder="-"
                                                    value="{{ Auth::user()->email }}" readonly required>
                                            </div>
                                        </div>
                                        @error('email')
                                            <div class="error_msg">
                                                <p class="text_xsm fc_bluegly">
                                                    {{ $message }}\
                                                </p>
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="input_wrapper">
                                        <div class="input_container focus">
                                            <div class="icon">
                                                <i class="fa-brands fa-whatsapp"></i>
                                            </div>
                                            <div class="input_div">
                                                <p class="input_title title_font">Phone Number (WA)</p>
                                                <input type="tel" pattern="62\d+" minlength="11" maxlength="15"
                                                    name="phone_number" id="phone_number" class="phone_number"
                                                    placeholder="628xxxxxxxxxx" value="{{ Auth::user()->phone_number }}"
                                                    required>
                                            </div>
                                        </div>
                                        <div class="error_msg">
                                            <p class="text_xsm fc_bluegly">
                                                @error('phone_number')
                                                    {{ $message }}
                                                @enderror
                                            </p>
                                        </div>
                                    </div>
                                    <div class="input_wrapper">
                                        <div class="input_container focus">
                                            <div class="icon">
                                                <i class="fa-brands fa-line"></i>
                                            </div>
                                            <div class="input_div">
                                                <p class="input_title title_font">Line</p>
                                                <input type="text" name="line" id="line" placeholder="idxxxx"
                                                    value="{{ Auth::user()->line }}" required>
                                            </div>
                                        </div>
                                        @error('line')
                                            <div class="error_msg">
                                                <p class="text_xsm fc_bluegly">
                                                    {{ $message }}
                                                </p>
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="input_wrapper">
                                        <div class="input_container focus">
                                            <div class="icon">
                                                <i class="fa-solid fa-building-columns"></i>
                                            </div>
                                            <div class="input_div">
                                                <p class="input_title title_font">institution</p>
                                                <input type="text" name="institution" id="institution"
                                                    placeholder="Universitas Sriwijaya"
                                                    value="{{ Auth::user()->institution }}" required>
                                            </div>
                                        </div>
                                        <div class="error_msg">
                                            <p class="text_xsm fc_bluegly">
                                                Jika tidak sedang menempuh pendidikan isi "Umum"
                                                @error('institution')
                                                    {{ $message }}
                                                @enderror
                                            </p>
                                        </div>
                                    </div>
                                    <div class="input_wrapper">
                                        <div class="input_container focus">
                                            <div class="icon">
                                                <i class="fa-solid fa-venus-mars"></i>
                                            </div>
                                            <div class="input_div">
                                                <p class="input_title title_font">Gender</p>
                                                <select name="gender" id="gender" required>
                                                    <option {{ Auth::user()->gender === null ? 'selected' : '' }}
                                                        value="" disabled hidden>-</option>
                                                    <option {{ Auth::user()->gender === 'Laki-laki' ? 'selected' : '' }}
                                                        value="Laki-laki">Laki-laki</option>
                                                    <option {{ Auth::user()->gender === 'Perempuan' ? 'selected' : '' }}
                                                        value="Perempuan">Perempuan</option>
                                                </select>
                                            </div>
                                        </div>
                                        @error('gender')
                                            <div class="error_msg">
                                                <p class="text_xsm fc_bluegly">
                                                    {{ $message }}
                                                </p>
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="input_wrapper">
                                        <div class="input_container focus">
                                            <div class="icon">
                                                <i class="fa-solid fa-user"></i>
                                            </div>
                                            <div class="input_div">
                                                <p class="input_title title_font">Birth Date</p>
                                                <input type="date" name="birth_date"
                                                    value="{{ Auth::user()->birth_date }}" id="birth_date"
                                                    class="birth_date" required>
                                            </div>
                                        </div>
                                        @error('birth_date')
                                            <div class="error_msg">
                                                <p class="text_xsm fc_bluegly">
                                                    {{ $message }}
                                                </p>
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="btn_container pb4">
                                <button type="submit" class="btn_left form_btn" name="submit">
                                    <i class="btn_left_design"></i>
                                    Save Change
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="participate" id="participate">
        <div class="wrapper">
            <div class="container p_relative py20">
                <div class="title_font text_center">
                    <p class="text_big">Your Participation</p>
                </div>
                <div class="dashboard box_register">
                    <i class="box_register_design"></i>
                    <p class="title_font pl3">
                        <span class="text_h1">Competition </span>
                    </p>
                    {{-- <i class="fa-solid fa-arrow-right-long fc_bluegly"></i> --}}
                    <p class="text_h4 pl3"> **swipe if you register more than one competition</p>
                    <div class="swiper-container dashboard_swiper my4">
                        <div class="swiper-wrapper">
                            @if ($competitions['EssayCompe'])
                                <div class="swiper-slide">
                                    <div class="card">
                                        <div class="img_container dashboard_img">
                                            <img src="{{ asset('assets/img/icon/sifest2024/ESSAY.png') }}"
                                                alt="">
                                        </div>
                                        <div class="main_content" style="text-align: center;">
                                            <div class="text_content py2">
                                                <p class="title_font text_h3 my2 fc_bluegly">Essay Competition</p>
                                                <div class="data_peserta mb2">
                                                    <p>
                                                        <span
                                                            class="title_font">{{ $competitions['EssayCompe']['name'] }}</span>
                                                        <br>
                                                        <span>{{ $competitions['EssayCompe']['email'] }}</span>
                                                    </p>
                                                </div>
                                                @if ($competitions['EssayCompe']['verification'] === 'Verified')
                                                    <div class="btn_dashboard">
                                                        <a href="{{ route('submission.essay.compe') }}" class="btn_right btn_red text_center">
                                                            <i class="btn_right_design"></i>
                                                            Submission
                                                        </a>
                                                        <a href="https://chat.whatsapp.com/G5BNA6PXxkn0oganks85Hu"
                                                            target="_blank" class="btn_left text_center">
                                                            <i class="btn_left_design"></i>
                                                            WA Group
                                                        </a>
                                                    </div>
                                                @endif
                                            </div>
                                            <div class="logo">
                                                <div class="img_container">
                                                    <img src="{{ asset('assets/img/sifest2024/logo-sifest.png') }}"
                                                        alt="">
                                                </div>
                                                <p class="title_font">SI Fest</p>
                                            </div>
                                            <p
                                                class="title_font {{ $competitions['EssayCompe']['verification'] === 'Not Verified' ? 'fc_bluegly' : '' }} status">
                                                {{ $competitions['EssayCompe']['verification'] === null ? 'Waiting for payment verification from admin...' : $competitions['EssayCompe']['verification'] }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            @endif
                            @if ($competitions['DesignPoster'])
                                <div class="swiper-slide">
                                    <div class="card">
                                        <div class="img_container dashboard_img">
                                            <img src="{{ asset('assets/img/icon/sifest2024/POSTER.png') }}"
                                                alt="">
                                        </div>
                                        <div class="main_content" style="text-align: center;">
                                            <div class="text_content py2">
                                                <p class="title_font text_h3 my2 fc_bluegly">Poster Design</p>
                                                <div class="data_peserta mb2">
                                                    <p>
                                                        <span
                                                            class="title_font">{{ $competitions['DesignPoster']['team_name'] }}</span>
                                                        <br>
                                                        <span>{{ $competitions['DesignPoster']['email'] }}</span>
                                                    </p>
                                                </div>
                                                <div class="btn_dashboard">
                                                    @if ($competitions['DesignPoster']['verification'] === 'Verified')
                                                        <a href="{{ route('submission.design.poster') }}" class="btn_right btn_red text_center">
                                                            <i class="btn_right_design"></i>
                                                            Submission
                                                        </a>
                                                        <a href="https://chat.whatsapp.com/D1II44Kqu6H0TEqXCw98SH"
                                                            target="_blank" class="btn_left text_center">
                                                            <i class="btn_left_design"></i>
                                                            WA Group
                                                        </a>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="logo">
                                                <div class="img_container">
                                                    <img src="{{ asset('assets/img/sifest2024/logo-sifest.png') }}"
                                                        alt="">
                                                </div>
                                                <p class="title_font">SI Fest</p>
                                            </div>
                                            <p
                                                class="status title_font {{ $competitions['DesignPoster']['verification'] === 'Not Verified' ? 'fc_bluegly' : '' }}">
                                                {{ $competitions['DesignPoster']['verification'] === null ? 'Waiting for payment verification from admin...' : $competitions['DesignPoster']['verification'] }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            @endif
                            @if ($competitions['UIUXDesign'])
                                <div class="swiper-slide">
                                    <div class="card">
                                        <div class="img_container dashboard_img">
                                            <img src="{{ asset('assets/img/icon/sifest2024/UI UX.png') }}"
                                                alt="">
                                        </div>
                                        <div class="main_content" style="text-align: center;">
                                            <div class="text_content py2">
                                                <p class="title_font text_h3 my2 fc_bluegly">UIUX Design</p>
                                                <div class="data_peserta mb2">
                                                    <p>
                                                        <span
                                                            class="title_font">{{ $competitions['UIUXDesign']['team_name'] }}</span>
                                                        <br>
                                                        <span>{{ $competitions['UIUXDesign']['email'] }}</span>
                                                    </p>
                                                </div>
                                                @if ($competitions['UIUXDesign']['verification'] === 'Verified')
                                                    <div class="btn_dashboard">
                                                        <a href="{{ route('submission.uiux.design') }}" class="btn_right btn_red tex_center">
                                                            <i class="btn_right_design"></i>
                                                            Submission
                                                        </a>
                                                        <a href="https://chat.whatsapp.com/JLKdxi6peoOG9bBKbY94js"
                                                            target="_blank" class="btn_left tex_center">
                                                            <i class="btn_left_design"></i>
                                                            WA Group
                                                        </a>
                                                    </div>
                                                @endif
                                            </div>
                                            <div class="logo">
                                                <div class="img_container">
                                                    <img src="{{ asset('assets/img/sifest2024/logo-sifest.png') }}"
                                                        alt="">
                                                </div>
                                                <p class="title_font">SI Fest</p>
                                            </div>
                                            <p
                                                class="title_font {{ $competitions['UIUXDesign']['verification'] === 'Not Verified' ? 'fc_bluegly' : '' }} status">
                                                {{ $competitions['UIUXDesign']['verification'] === null ? 'Waiting for payment verification from admin...' : $competitions['UIUXDesign']['verification'] }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            @endif
                            @if ($competitions['ValorantTeam'])
                                <div class="swiper-slide">
                                    <div class="card">
                                        <div class="img_container dashboard_img">
                                            <img src="{{ asset('assets/img/icon/sifest2024/VALORANT.png') }}"
                                                alt="">
                                        </div>
                                        <div class="main_content" style="text-align: center;">
                                            <div class="text_content py2">
                                                <p class="title_font text_h3 my2 fc_bluegly">Valorant Team</p>
                                                <div class="data_peserta mb2">
                                                    <p>
                                                        <span
                                                            class="title_font">{{ $competitions['ValorantTeam']['team_name'] }}</span>
                                                        <br>
                                                        <span>{{ $competitions['ValorantTeam']['email'] }}</span>
                                                    </p>
                                                </div>
                                                @if ($competitions['ValorantTeam']['verification'] === 'Verified')
                                                    <div class="btn_dashboard">
                                                        <a href="https://chat.whatsapp.com/DvBydb6Ybcd4Qc8up7y4xs"
                                                            target="_blank" class="btn_left text_center">
                                                            <i class="btn_left_design"></i>
                                                            WA Group
                                                        </a>
                                                    </div>
                                                @endif
                                            </div>
                                            <div class="logo">
                                                <div class="img_container">
                                                    <img src="{{ asset('assets/img/sifest2024/logo-sifest.png') }}"
                                                        alt="">
                                                </div>
                                                <p class="title_font">SI Fest</p>
                                            </div>
                                            <p
                                                class="title_font {{ $competitions['ValorantTeam']['verification'] === 'Not Verified' ? 'fc_bluegly' : '' }} status">
                                                {{ $competitions['ValorantTeam']['verification'] === null ? 'Waiting for payment verification from admin...' : $competitions['ValorantTeam']['verification'] }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            @endif
                            @if ($competitions['ValorantSolo'])
                                <div class="swiper-slide">
                                    <div class="card">
                                        <div class="img_container dashboard_img">
                                            <img src="{{ asset('assets/img/icon/sifest2024/VALORANT.png') }}"
                                                alt="">
                                        </div>
                                        <div class="main_content" style="text-align: center;">
                                            <div class="text_content py2">
                                                <p class="title_font text_h3 my2 fc_bluegly">Valorant Solo</p>
                                                <div class="data_peserta mb2">
                                                    <p>
                                                        <span
                                                            class="title_font">{{ $competitions['ValorantSolo']['name'] }}</span>
                                                        <br>
                                                        <span>{{ $competitions['ValorantSolo']['email'] }}</span>
                                                    </p>
                                                </div>
                                                @if ($competitions['ValorantSolo']['verification'] === 'Verified')
                                                    <div class="btn_dashboard">
                                                        <a href="https://chat.whatsapp.com/DvBydb6Ybcd4Qc8up7y4xs"
                                                            target="_blank" class="btn_left text_center">
                                                            <i class="btn_left_design"></i>
                                                            WA Group
                                                        </a>
                                                    </div>
                                                @endif
                                            </div>
                                            <div class="logo">
                                                <div class="img_container">
                                                    <img src="{{ asset('assets/img/sifest2024/logo-sifest.png') }}"
                                                        alt="">
                                                </div>
                                                <p class="title_font">SI Fest</p>
                                            </div>
                                            <p
                                                class="title_font {{ $competitions['ValorantSolo']['verification'] === 'Not Verified' ? 'fc_bluegly' : '' }} status">
                                                {{ $competitions['ValorantSolo']['verification'] === null ? 'Waiting for payment verification from admin...' : $competitions['ValorantSolo']['verification'] }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            @endif
                            @if ($competitions['MobileLegends'])
                                <div class="swiper-slide">
                                    <div class="card">
                                        <div class="img_container dashboard_img">
                                            <img src="{{ asset('assets/img/icon/sifest2024/ML.png') }}" alt="">
                                        </div>
                                        <div class="main_content" style="text-align: center;">
                                            <div class="text_content py2">
                                                <p class="title_font text_h3 my2 fc_bluegly">Mobile Legends</p>
                                                <div class="data_peserta mb2">
                                                    <p>
                                                        <span
                                                            class="title_font">{{ $competitions['MobileLegends']['team_name'] }}</span>
                                                        <br>
                                                        <span>{{ $competitions['MobileLegends']['email'] }}</span>
                                                    </p>
                                                </div>
                                                @if ($competitions['MobileLegends']['verification'] === 'Verified')
                                                    <div class="btn_dashboard">
                                                        <a href="https://chat.whatsapp.com/F9UqKP6ZybzA7bubHDpunJ"
                                                            target="_blank" class="btn_left text_center">
                                                            <i class="btn_left_design"></i>
                                                            WA Group
                                                        </a>
                                                    </div>
                                                @endif
                                            </div>
                                            <div class="logo">
                                                <div class="img_container">
                                                    <img src="{{ asset('assets/img/sifest2024/logo-sifest.png') }}"
                                                        alt="">
                                                </div>
                                                <p class="title_font">SI Fest</p>
                                            </div>
                                            <p
                                                class="title_font {{ $competitions['MobileLegends']['verification'] === 'Not Verified' ? 'fc_bluegly' : '' }} status">
                                                {{ $competitions['MobileLegends']['verification'] === null ? 'Waiting for payment verification from admin...' : $competitions['MobileLegends']['verification'] }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            @endif
                            @if (
                                $competitions['EssayCompe'] == null &&
                                    $competitions['DesignPoster'] == null &&
                                    $competitions['UIUXDesign'] == null &&
                                    $competitions['ValorantTeam'] == null &&
                                    $competitions['ValorantSolo'] == null &&
                                    $competitions['MobileLegends'] == null)
                                <div class="swiper-slide">
                                    <div class="no_participate">
                                        <p class="fc_bluegly mb4 text_center">Anda belum terdaftar di kompetisi SI FEST
                                            2024
                                        </p>
                                        <div class="btn_dashboard">
                                            <a href="{{ route('competitions') }}" class="btn_right text_center btn_red">
                                                <i class="btn_right_design"></i>
                                                Cek Kompetisi
                                            </a>
                                            <a href="https://drive.google.com/file/d/1nmjqLHZKpA7zCIimUJi9QQSiUZLts1vh/view?usp=sharing" target="_blank"
                                                class="btn_left text_center">
                                                <i class="btn_left_design"></i>
                                                Guide Book
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>

                    <div class="dashboard_footer">
                        <div class="btn_dashboard py2">
                            @if (
                                $competitions['EssayCompe'] ||
                                    $competitions['DesignPoster'] ||
                                    $competitions['UIUXDesign'] ||
                                    $competitions['ValorantTeam'] ||
                                    $competitions['ValorantSolo'] ||
                                    $competitions['MobileLegends']
                            )
                                <a href="{{ route('competitions') }}" class="btn_right text_center btn_red">
                                    <i class="btn_right_design"></i>
                                    Cek Kompetisi
                                </a>
                                <a href="https://drive.google.com/file/d/1nmjqLHZKpA7zCIimUJi9QQSiUZLts1vh/view?usp=sharing" target="_blank"
                                    class="btn_left text_center">
                                    <i class="btn_left_design"></i>
                                    Guide Book
                                </a>
                            @endif
                        </div>
                        <p class="title_font text_right text_h3 pt2 pr5">SI FEST 2024</p>
                    </div>
                </div>

                <div class="dashboard box_register">
                    <i class="box_register_design"></i>
                    <p class="title_font text_h1 pl3">Seminar (Nebula / Reguler)</p>
                    <div class="swiper-container dashboard_swiper my4">
                        <div class="swiper-wrapper">
                            @if (!$Seminar)
                                <div class="swiper-slide">
                                    <div class="no_participate">
                                        <p class="fc_bluegly mb4 text_center">Anda belum terdaftar di seminar SI FEST 2024
                                        </p> 
                                        </p>
                                        <div class="btn_dashboard">
                                            <a href="{{ route('seminar') }}" class="btn_right btn_red">
                                                <i class="btn_right_design"></i>
                                                Cek Seminar
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @else
                                <div class="swiper-slide">
                                    <div class="card">
                                        <div class="img_container dashboard_img">
                                            <img src="{{ asset('assets/img/icon/sifest2024/seminar.png') }}"
                                                alt="">
                                        </div>
                                        <div class="main_content" style="text-align: center;">
                                            <div class="text_content py2">
                                                <p class="title_font text_h3 my2 fc_bluegly">Seminar
                                                    ({{ $Seminar['type'] }})
                                                </p>
                                                <div class="data_peserta mb2">
                                                    <p>
                                                        <span class="title_font">{{ $Seminar['name'] }}</span> <br>
                                                        <span>{{ $Seminar['email'] }}</span>
                                                    </p>
                                                </div>
                                                <!--<p class="title_font text_h3 my2 fc_bluegly">ID. {{ $Seminar['id'] }}</p>-->
                                                <!--<p class="title_font text_h3 my2 fc_bluegly">ID. (wait for verification)</p>-->
                                                <p class="title_font text_h3 my2 fc_bluegly">Qty :
                                                    {{ $Seminar['jumlahData'] }}</p>
                                                @if ($Seminar['verification'] === 'Verified')
                                                    <p class="title_font text_h3 my2 fc_bluegly">ID. {{ $Seminar['id'] }}
                                                    </p>
                                                    <div class="btn_dashboard">
                                                        <a href="https://chat.whatsapp.com/DRBsLkii0vBGQCMVlrVI7f" target="_blank" class="btn_left text_center">-->
                                                            <i class="btn_left_design"></i>
                                                            Whatsapp Group
                                                        </a>
                                                    </div>
                                                @endif
                                            </div>
                                            <div class="logo">
                                                <div class="img_container">
                                                    <img src="{{ asset('assets/img/sifest2024/logo-sifest.png') }}"
                                                        alt="">
                                                </div>
                                                <p class="title_font">SI Fest</p>
                                            </div>
                                            <p
                                                class="title_font {{ $Seminar['verification'] === 'Not Verified' ? 'fc_bluegly' : '' }} status">
                                                {{ $Seminar['verification'] === null ? 'Waiting for payment verification from admin...' : $Seminar['verification'] }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                    <p class="title_font text_right text_h3 pt2 pr5">SI FEST 2024</p>
                </div>

                <div class="dashboard box_register">
                    <i class="box_register_design"></i>
                    <p class="title_font text_h1 pl3">Seminar ( Supernova / VIP )</p>
                    <div class="swiper-container dashboard_swiper my4">
                        <div class="swiper-wrapper">
                            @if (!$Tiket)
                                <div class="swiper-slide">
                                    <div class="no_participate">
                                        <p class="fc_bluegly mb4 text_center">Anda belum terdaftar di seminar SI FEST 2024
                                        </p>
                                        <div class="btn_dashboard">
                                            <a href="{{ route('seminar') }}" class="btn_right btn_red">
                                                <i class="btn_right_design"></i>
                                                Cek Seminar
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @else
                                <div class="swiper-slide">
                                    <div class="card">
                                        <div class="img_container dashboard_img">
                                            <img src="{{ asset('assets/img/icon/sifest2024/seminar.png') }}"alt="">
                                        </div>
                                        <div class="main_content">
                                            <div class="text_content py2">
                                                <p class="title_font text_h3 my2 fc_bluegly">Seminar
                                                    ({{ $Tiket['type'] }})
                                                </p>
                                                <div class="data_peserta mb2">
                                                    <p>
                                                        <span class="title_font">{{ $Tiket['name'] }}</span> <br>
                                                        <span>{{ $Tiket['email'] }}</span>
                                                    </p>
                                                </div>
                                                <p class="title_font text_h3 my2 fc_bluegly">ID. {{ $Tiket['id'] }}</p>
                                                <p class="title_font text_h3 my2 fc_bluegly">Qty :
                                                    {{ $Tiket['jumlahData'] }}
                                                </p>
                                                @if ($Tiket['verification'] === 'Verified')
                                                    <div class="btn_dashboard">
                                                        <a href="https://chat.whatsapp.com/JH5mJdAfyWQBH7Dws0UJ3r" target="_blank" class="btn_left text_center">
                                                            <i class="btn_left_design"></i>
                                                            Whatsapp Group
                                                        </a>
                                                    </div>
                                                @endif
                                            </div>
                                            <div class="logo">
                                                <div class="img_container">
                                                    <img src="{{ asset('assets/img/sifest2024/logo-sifest.png') }}"
                                                        alt="">
                                                </div>
                                                <p class="title_font">SI Fest</p>
                                            </div>
                                            <p
                                                class="title_font {{ $Tiket['verification'] === 'Not Verified' ? 'fc_bluegly' : '' }} status">
                                                {{ $Tiket['verification'] === null ? 'Waiting for payment verification from admin...' : $Tiket['verification'] }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                    <p class="title_font text_right text_h3 pt2 pr5">SI FEST 2024</p>
                </div>
            </div>
        </div>
    </section>

@endsection
