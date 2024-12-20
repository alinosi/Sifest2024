@extends('layouts/web.main')

@section('index')
    <section class="form_section register_poster">
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
                    <p class="text_big fc_white">Poster Design Registration</p>
                    <p class="fc_bluegly">Daftar sekarang, sebelum pendaftaran ditutup</p>
                </div>
                <div class="form_wrapper_grid box_lt_rb_side p6" style="max-width: 1000px; margin:auto">
                    <i class="box_lt_rb_side_design"></i>
                    <form action="{{ route('registration.design.poster') }}" method="post" autocomplete="off"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="form_container pb2">
                            <div class="form_group">

                                <div class="input_wrapper">
                                    <div class="input_radio_uiux">
                                        <!--<input id="2_persons" checked type="radio" class="participants_poster"-->
                                        <!--    name="participants_poster" value="2">-->
                                        <!--<label for="2_persons" class="radio_btn">2 Persons</label>-->
                                        <input id="1_persons" type="radio" class="participants_poster"
                                            name="participants_poster" value="1">
                                        <label for="1_persons" class="radio_btn">1 Persons</label>
                                    </div>
                                </div>
                                <p class="title_font text_h3 mt4 mb4 fc_white">
                                    Participant Data
                                </p>

                                <div class="form_navs mb6" id="form_navs">
                                    <button class="form_nav active" type="button" data-id="1">1</button>
                                    <!--<button class="form_nav" type="button" data-id="2">2</button>-->
                                     <!--<button class="form_nav" type="button" data-id="3">3</button> -->
                                </div>

                                <div class="form_tabs">
                                    <div class="form_tab active" data-content="1">
                                        <div class="input_wrapper">
                                            <div class="input_container">
                                                <div class="icon">
                                                    <i class="fa-solid fa-user"></i>
                                                </div>
                                                <div class="input_div">
                                                    <p class="input_title title_font">Full Name</p>
                                                    <input type="text" name="name1" id="name1"
                                                        value="{{ Auth::user()->name }}" class="input" required readonly>
                                                </div>
                                            </div>
                                            @error('name1')
                                                <div class="error_msg">
                                                    <p class="text_xsm fc_bluegly">
                                                        {{ $message }}
                                                    </p>
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="input_wrapper">
                                            <div class="input_container">
                                                <div class="icon">
                                                    <i class="fa-brands fa-whatsapp"></i>
                                                </div>
                                                <div class="input_div">
                                                    <p class="input_title title_font">Phone Number (WA)</p>
                                                    <input type="tel" pattern="62\d+" minlength="11" maxlength="15"
                                                        name="phone_number1" id="phone_number1" class="input phone_number"
                                                        value="{{ Auth::user()->phone_number }}" required readonly>
                                                </div>
                                            </div>
                                            <div class="error_msg">
                                                <p class="text_xsm fc_bluegly">
                                                    @error('phone_number1')
                                                        {{ $message }}
                                                    @enderror
                                                </p>
                                            </div>
                                        </div>
                                        <div class="input_wrapper">
                                            <div class="input_container">
                                                <div class="icon">
                                                    <i class="fa-brands fa-line"></i>
                                                </div>
                                                <div class="input_div">
                                                    <p class="input_title title_font">Line</p>
                                                    <input type="text" name="line1" id="line1"
                                                        value="{{ Auth::user()->line }}" class="input" required readonly>
                                                </div>
                                            </div>
                                            @error('line1')
                                                <div class="error_msg">
                                                    <p class="text_xsm fc_bluegly">
                                                        {{ $message }}
                                                    </p>
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="input_wrapper">
                                            <div class="input_container">
                                                <div class="icon">
                                                    <i class="fa-solid fa-building-columns"></i>
                                                </div>
                                                <div class="input_div">
                                                    <p class="input_title title_font">Institution</p>
                                                    <input type="text" name="institution1" id="institution1"
                                                        value="{{ Auth::user()->institution }}" class="input" required
                                                        readonly>
                                                </div>
                                            </div>
                                            @error('institution1')
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
                                                    <i class="fa-solid fa-id-card"></i>
                                                </div>
                                                <div class="input_div">
                                                    <p class="input_title title_font">ID card/Identifier</p>
                                                    <input type="file" accept="image/*" name="idcard1" id="idcard1"
                                                        value="" required>
                                                </div>
                                            </div>
                                            @error('idcard1')
                                                <div class="error_msg">
                                                    <p class="text_xsm fc_bluegly">
                                                        {{ $message }}
                                                    </p>
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form_tab" data-content="2">
                                        <div class="input_wrapper">
                                            <div class="input_container">
                                                <div class="icon">
                                                    <i class="fa-solid fa-user"></i>
                                                </div>
                                                <div class="input_div">
                                                    <p class="input_title title_font">Full Name</p>
                                                    <input type="text" name="name2" id="name2"
                                                        value="{{ old('name2') }}" class="input" required>
                                                </div>
                                            </div>
                                            @error('name2')
                                                <div class="error_msg">
                                                    <p class="text_xsm fc_bluegly">
                                                        {{ $message }}
                                                    </p>
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="input_wrapper">
                                            <div class="input_container">
                                                <div class="icon">
                                                    <i class="fa-brands fa-whatsapp"></i>
                                                </div>
                                                <div class="input_div">
                                                    <p class="input_title title_font">Phone Number (WA)</p>
                                                    <input type="tel" pattern="62\d+" minlength="11" maxlength="15"
                                                        name="phone_number2" id="phone_number2"
                                                        class="input phone_number" value="{{ old('phone_number2') }}"
                                                        required>
                                                </div>
                                            </div>
                                            <div class="error_msg">
                                                <p class="text_xsm fc_bluegly">
                                                    @error('phone_number2')
                                                        {{ $message }}
                                                    @enderror
                                                </p>
                                            </div>
                                        </div>
                                        <div class="input_wrapper">
                                            <div class="input_container">
                                                <div class="icon">
                                                    <i class="fa-brands fa-line"></i>
                                                </div>
                                                <div class="input_div">
                                                    <p class="input_title title_font">Line</p>
                                                    <input type="text" name="line2" id="line2"
                                                        value="{{ old('line2') }}" class="input" required>
                                                </div>
                                            </div>
                                            @error('line2')
                                                <div class="error_msg">
                                                    <p class="text_xsm fc_bluegly">
                                                        {{ $message }}
                                                    </p>
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="input_wrapper">
                                            <div class="input_container">
                                                <div class="icon">
                                                    <i class="fa-solid fa-building-columns"></i>
                                                </div>
                                                <div class="input_div">
                                                    <p class="input_title title_font">Institution</p>
                                                    <input type="text" name="institution2" id="institution2"
                                                        value="{{ old('institution2') }}" class="input" required>
                                                </div>
                                            </div>
                                            <div class="error_msg">
                                                <p class="text_xsm fc_bluegly">
                                                    Jika tidak sedang menempuh pendidikan isi "Umum"
                                                    @error('institution2')
                                                        {{ $message }}
                                                    @enderror
                                                </p>
                                            </div>
                                        </div>
                                        <div class="input_wrapper">
                                            <div class="input_container focus">
                                                <div class="icon">
                                                    <i class="fa-solid fa-id-card"></i>
                                                </div>
                                                <div class="input_div">
                                                    <p class="input_title title_font">ID card/Identifier</p>
                                                    <input type="file" accept="image/*" name="idcard2" id="idcard2"
                                                        value="" required>
                                                </div>
                                            </div>
                                            @error('idcard2')
                                                <div class="error_msg">
                                                    <p class="text_xsm fc_bluegly">
                                                        {{ $message }}
                                                    </p>
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>


                            </div>

                            <div class="form_group">
                                <p class="title_font text_h3 mt4 mb2 fc_white">
                                    Participant Data
                                </p>
                                <div class="input_wrapper">
                                    <div class="input_container">
                                        <div class="icon">
                                            <i class="fa-solid fa-envelope"></i>
                                        </div>
                                        <div class="input_div">
                                            <p class="input_title title_font">Email</p>
                                            <input type="email" name="email" id="email"
                                                value="{{ Auth::user()->email }}" class="input" required readonly>
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

                                <div class="input_wrapper">
                                    <div class="input_container">
                                        <div class="icon">
                                            <i class="fa-solid fa-people-group"></i>
                                        </div>
                                        <div class="input_div">
                                            <p class="input_title title_font">Participant Name</p>
                                            <input type="text" name="team_name" id="team_name"
                                                value="{{ Auth::user()->name }}" class="input" required readonly>
                                        </div>
                                    </div>
                                    @error('team_name')
                                        <div class="error_msg">
                                            <p class="text_xsm fc_bluegly">
                                                {{ $message }}
                                            </p>
                                        </div>
                                    @enderror
                                </div>

                                <p class="title_font text_h3 mt4 mb2 fc_white">
                                    Registration Fee
                                </p>
                                <div class="input_wrapper">
                                    <div class="input_info mb6">
                                        <p class="fc_white">
                                            Calon peserta dikenakan fee registrasi sebesar <span class="fc_bluegly fw_bold">Rp25.000</span>, peserta dapat melakukan proses pembayaran melalui beberapa
                                            opsi :
                                        <ul style="list-style: circle !important" class="ml4 fc_white">
                                            <li>Bank BRI <span class="fc_bluegly fw_bold">339301052600539 </span> a.n. Merizka Azzahra
</li>
                                            <li>GOPAY/DANA<span class="fc_bluegly fw_bold">081369016729  </span> a.n. Merizka Azzahra
</li>
                                            <li>OVO<span class="fc_bluegly fw_bold">088286324461  </span> a.n. Merizka Azzahra
</li>
                                        </ul>
                                        </p>
                                    </div>
                                    <div class="input_container focus">
                                        <div class="icon">
                                            <i class="fa-solid fa-file-invoice-dollar"></i>
                                        </div>
                                        <div class="input_div">
                                            <p class="input_title title_font">Proof Of Payment</p>
                                            <input type="file" accept="image/*" name="payment" id="payment"
                                                value="" required>
                                        </div>
                                    </div>
                                    @error('payment')
                                        <div class="error_msg">
                                            <p class="text_xsm fc_bluegly">
                                                {{ $message }}
                                            </p>
                                        </div>
                                    @enderror
                                    <label for="verify_data" class="d_flex mt4">
                                        <input id="verify_data" type="checkbox" required>
                                        <span class="text_sm ml2 fc_white">Saya menyatakan bahwa bukti pembayaran dan data
                                            yang saya kirim adalah benar dan tanpa rekayasa.</span>
                                    </label>
                                </div>

                            </div>
                        </div>
                        
                        <div class="btn_container pb4">
                            <button type="submit" class="btn_left form_btn" name="submit">
                                <i class="btn_left_design"></i>
                                Register
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
