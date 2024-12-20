@extends('layouts/web.main')

@section('index')

<section class="form_section">
    <div class="wrapper">
        @if(session()->has("success"))
            <div class="alert success">
                <p class="alert_msg">{{ session("success") }}</p>
                <i class="fa-solid fa-xmark alert_toggle"></i>
            </div>
        @endif
        @if(session()->has("error"))
            <div class="alert error">
                <p class="alert_msg">{{ session("error") }}</p>
                <i class="fa-solid fa-xmark alert_toggle"></i>
            </div>
        @endif
        <div class="container p_relative py20">
            <div class="title_font text_center mt20 mb12">
                <p class="text_big">Photography Registration</p>
                <p class="fc_red">Daftar sekarang, sebelum pendaftaran ditutup</p>
            </div>
            <div class="form_wrapper_grid box_lt_rb_side p6" style="max-width: 1000px; margin:auto">
                <i class="box_lt_rb_side_design"></i>
                <form action="{{ route('registration.photography') }}" method="post" autocomplete="off" enctype="multipart/form-data">
                    @csrf
                    <div class="form_container pb2">
                        <div class="form_group">
                            <p class="title_font text_h3 mt4 mb2">
                                Participant Data
                            </p>

                            <div class="input_wrapper">
                                <div class="input_container">
                                    <div class="icon">
                                        <i class="fa-solid fa-user"></i>
                                    </div>
                                    <div class="input_div">
                                        <p class="input_title title_font">Full Name</p>
                                        <input type="text" name="name" id="name" value="{{ Auth::user()->name }}" class="input" readonly>
                                    </div>
                                </div>
                                @error('name')
                                    <div class="error_msg">
                                        <p class="text_xsm fc_red">
                                            {{ $message }}
                                        </p>
                                    </div>
                                @enderror
                            </div>
                            <div class="input_wrapper">
                                <div class="input_container">
                                    <div class="icon">
                                        <i class="fa-solid fa-envelope"></i>
                                    </div>
                                    <div class="input_div">
                                        <p class="input_title title_font">Email</p>
                                        <input type="email" name="email" id="email" value="{{ Auth::user()->email }}" class="input" readonly>
                                    </div>
                                </div>
                                @error('email')
                                    <div class="error_msg">
                                        <p class="text_xsm fc_red">
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
                                        <input type="tel"
                                            pattern="62\d+" minlength="11" maxlength="15"
                                            name="phone_number" id="phone_number" class="input"
                                            placeholder="628xxxxxxxxxx" value="{{ Auth::user()->phone_number }}"
                                            readonly
                                        >
                                    </div>
                                </div>
                                @error('phone_number')
                                    <div class="error_msg">
                                        <p class="text_xsm fc_red">
                                            {{ $message }}
                                        </p>
                                    </div>
                                @enderror
                            </div>
                            <div class="input_wrapper">
                                <div class="input_container">
                                    <div class="icon">
                                        <i class="fa-brands fa-line"></i>
                                    </div>
                                    <div class="input_div">
                                        <p class="input_title title_font">Line</p>
                                        <input type="text" name="line" id="line" value="{{ Auth::user()->line }}" class="input" readonly>
                                    </div>
                                </div>
                                @error('line')
                                    <div class="error_msg">
                                        <p class="text_xsm fc_red">
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
                                        <input type="text" name="institution" id="institution" value="{{ Auth::user()->institution }}" class="input" readonly>
                                    </div>
                                </div>
                                @error('institution')
                                    <div class="error_msg">
                                        <p class="text_xsm fc_red">
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
                                        <input type="file" accept="image/*" name="idcard" id="idcard" value="">
                                    </div>
                                </div>
                                @error('idcard')
                                    <div class="error_msg">
                                        <p class="text_xsm fc_red">
                                            {{ $message }}
                                        </p>
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form_group">
                            <p class="title_font text_h3 mt4 mb2">
                                Registration Fee
                            </p>

                            <div class="input_wrapper">
                                <div class="input_info mb6">
                                    <p>
                                        Calon peserta dikenakan fee registrasi sebesar <span class="fc_red fw_bold">Rp 20.000</span>, peserta dapat melakukan proses pembayaran melalui beberapa opsi :
                                        <ul style="list-style: circle !important" class="ml4">
                                            <li>Mandiri <span class="fc_red fw_bold">1120019491013 </span> a.n. Dzakiyya Nur Fadhila</li>
                                            <li>Ovo/Dana <span class="fc_red fw_bold">081373626361 </span> a.n. Dzakiyya Nur Fadhila</li>
                                        </ul>
                                    </p>
                                </div>
                                <div class="input_container focus">
                                    <div class="icon">
                                        <i class="fa-solid fa-file-invoice-dollar"></i>
                                    </div>
                                    <div class="input_div">
                                        <p class="input_title title_font">Proof Of Payment</p>
                                        <input type="file" accept="image/*" name="payment" id="payment" value="">
                                    </div>
                                </div>
                                @error('payment')
                                    <div class="error_msg">
                                        <p class="text_xsm fc_red">
                                            {{ $message }}
                                        </p>
                                    </div>
                                @enderror
                                <label for="verify_data" class="d_flex mt4">
                                    <input id="verify_data" type="checkbox" required>
                                    <span class="text_sm ml2">Saya menyatakan bahwa bukti pembayaran dan data yang saya kirimkan benar, tanpa rekayasa</span>
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

