@extends('layouts/web.main')

@section('index')

<section class="form_section seminar box_gradient">
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
                <p class="text_big">Seminar Registration</p>
                <p class="fc_bluegly">Daftar sekarang, sebelum pendaftaran ditutup</p>
            </div>

            <div class="form_wrapper_grid box_lt_rb_side p6" style="max-width: 1000px; margin:auto">
                <i class="box_lt_rb_side_design"></i>

                <div class="type_navs d-flex content_center py4" id="type_navs">
                    <button class="type_nav px8 {{ $slot['nebula'] == 0 ? "" : "active" }}" data-id="1" {{ $slot['nebula'] == 0 ? "Disabled" : "" }}>
                        Nebula (Regular) {{ $slot['nebula'] == 0 ? "(Pre Sale Sold Out)" : ""}}
                    </button>
                    <!--<button class="type_nav px8 {{ ($slot['supernova'] == 0 ? "" : $slot['nebula']) == 0 ? "active" : "" }}" data-id="2" {{ $slot['supernova'] == 0 ? "Disabled" : "" }}>-->
                    <!--    Supernova (VIP) {{ $slot['supernova'] == 0 ? "(Pre Sale Sold Out)" : ""}}-->
                    <!--</button>-->
                </div>

                <div class="type_tabs">
                    <div class="type_tab {{ $slot['nebula'] == 0 ? "" : "active" }}" type-content="1">
                        <form action="{{ route("registration.seminar") }}" method="post" autocomplete="off" enctype="multipart/form-data">
                            @csrf
                            <div class="form_container seminar pb2">
                                <div class="form_group">
                                    <p class="title_font text_h3 mt4 mb2">
                                        Participant Data
                                    </p>
                                    <input type="text" name="type" value="Nebula" hidden>
                                    <input type="text" name="metode" value="Online" hidden>
                                    <div class="input_wrapper">
                                        <div class="input_container">
                                            <div class="icon">
                                                <i class="fa-solid fa-user"></i>
                                            </div>
                                            <div class="input_div">
                                                <p class="input_title title_font">Full Name</p>
                                                <input type="text" name="name" id="name" value="{{ Auth::user()->name }}" class="input">
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
                                        <div class="input_container">
                                            <div class="icon">
                                                <i class="fa-solid fa-envelope"></i>
                                            </div>
                                            <div class="input_div">
                                                <p class="input_title title_font">Email</p>
                                                <input type="email" name="email" id="email" value="{{ Auth::user()->email }}" class="input">
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
                                                <i class="fa-brands fa-whatsapp"></i>
                                            </div>
                                            <div class="input_div">
                                                <p class="input_title title_font">Phone Number</p>
                                                <input type="text" name="phone_number" id="phone_number" value="{{ Auth::user()->phone_number }}"" class="input">
                                            </div>
                                        </div>
                                        @error('phone_number')
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
                                                <i class="fa-brands fa-line"></i>
                                            </div>
                                            <div class="input_div">
                                                <p class="input_title title_font">Line</p>
                                                <input type="text" name="line" id="line" value="{{ Auth::user()->line }}" class="input" required>
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
                                </div>

                                <div class="form_group fc_white">
                                    <p class="title_font text_h3 mt4 mb2">
                                        Registration Fee
                                    </p>
                                        <div class="input_container focus mt4">
                                            <div class="icon">
                                                <i class="fa-solid fa-ticket"></i>
                                            </div>
                                            <div class="input_div">
                                                <p class="input_title title_font">Ticket Quantity</p>
                                                <select name="jumlahData" class="form_navs" id="jumlahData form_navs" required>
                                                    <option value="1" class="form_nav"  data-id="1">1 Ticket</option>
                                                    <option value="2" class="form_nav" data-id="2">2 Ticket</option>
                                                    <option value="3" class="form_nav" data-id="3">3 Ticket</option>
                                                    <option value="4" class="form_nav" data-id="4">4 Ticket</option>
                                                    <option value="5" class="form_nav" data-id="5">5 Ticket</option>
                                                </select>
                                            </div>
                                        </div>

                                        <!-- <div class="price_list mt3">
                                            <p class="fc_blue title_font input_title">Price List - Presale</p>
                                            <p class="fc_bluegly title_font mt3">1 Ticket = <span class="fc_white">RP 45.000</span></p>
                                            <p class="fc_bluegly title_font mt3">2 Ticket = <span class="fc_white">RP 90.000</span></p>
                                            <p class="fc_bluegly title_font mt3">3 Ticket = <span class="fc_white">RP 135.000</span></p>
                                            <p class="fc_bluegly title_font mt3">4 Ticket = <span class="fc_white">RP 180.000</span></p>
                                            <p class="fc_bluegly title_font mt3">5 Ticket = <span class="fc_white">RP 225.000</span></p>
                                        </div> -->
                                        <div class="price_list mt3">
                                            <p class="fc_blue title_font input_title">Price List - Presale</p>
                                            <p class="fc_bluegly title_font mt3">1 Ticket = <span class="fc_white">RP 60.000</span></p>
                                            <p class="fc_bluegly title_font mt3">2 Ticket = <span class="fc_white">RP 120.000</span></p>
                                            <p class="fc_bluegly title_font mt3">3 Ticket = <span class="fc_white">RP 165.000</span> <span class="fc_blue"> ( 15k off )</span></p>
                                            <p class="fc_bluegly title_font mt3">4 Ticket = <span class="fc_white">RP 240.000</span></p>
                                            <p class="fc_bluegly title_font mt3">5 Ticket = <span class="fc_white">RP 275.000</span> <span class="fc_blue"> ( 25k off )</span></p>
                                        </div>

                                    <div class="input_wrapper">
                                        <div class="input_info mb6">
                                            <p>
                                                {{-- Calon peserta dikenakan fee registrasi sebesar <span class="fc_bluegly fw_bold">Rp 100.000</span>, --}}
                                                Calon peserta dapat melakukan proses pembayaran melalui beberapa opsi :
                                                <ul style="list-style: circle !important" class="ml4">
                                                    <li>Bank BRI <span class="fc_bluegly fw_bold">339301052600539 </span> a.n. Merizka Azzahra</li>
                                                    <li>GOPAY/DANA<span class="fc_bluegly fw_bold">081369016729 </span> a.n. Merizka Azzahra</li>
                                                    <li>OVO <span class="fc_bluegly fw_bold">088286324461 </span> a.n. Merizka Azzahra</li>
                                                </ul>
                                            </p>
                                        </div>
                                        <div class="input_container focus">
                                            <div class="icon">
                                                <i class="fa-solid fa-file-invoice-dollar"></i>
                                            </div>
                                            <div class="input_div">
                                                <p class="input_title title_font">Proof Of Payment</p>
                                                <input type="file" accept="image/*" name="payment" id="payment" value="" required>
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
                                            <span class="text_sm ml2">Saya menyatakan bahwa bukti pembayaran dan data yang saya kirimkan benar, tanpa rekayasa</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="btn_container pb4">
                                <button type="submit" class="btn_left form_btn" name="submit_nebula">
                                    <i class="btn_left_design"></i>
                                    Register
                                </button>
                            </div>
                        </form>
                    </div>

                    <!--<div class="type_tab {{ ($slot['supernova'] == 0 ? "" : $slot['nebula']) == 0 ? "active" : "" }}" type-content="2">-->
                        <!--<h1 style="text-align:center;"> COMING SOON! </h1>-->
                    <!--    <form action="{{ route("registration.seminar") }}" method="post" autocomplete="off" enctype="multipart/form-data">-->
                    <!--        @csrf-->
                    <!--        <div class="form_container seminar pb2">-->
                    <!--            <div class="form_group">-->
                    <!--                <p class="title_font text_h3 mt4 mb2">-->
                    <!--                    Participant Data-->
                    <!--                </p>-->
                    <!--                <input type="text" name="type" value="Supernova" hidden>-->
                    <!--                <input type="text" name="metode" value="Online" hidden>-->
                    <!--                <div class="input_wrapper">-->
                    <!--                    <div class="input_container">-->
                    <!--                        <div class="icon">-->
                    <!--                            <i class="fa-solid fa-user"></i>-->
                    <!--                        </div>-->
                    <!--                        <div class="input_div">-->
                    <!--                            <p class="input_title title_font">Full Name</p>-->
                    <!--                            <input type="text" name="name" id="name" value="{{ Auth::user()->name }}" class="input">-->
                    <!--                        </div>-->
                    <!--                    </div>-->
                    <!--                    @error('name')-->
                    <!--                        <div class="error_msg">-->
                    <!--                            <p class="text_xsm fc_bluegly">-->
                    <!--                                {{ $message }}-->
                    <!--                            </p>-->
                    <!--                        </div>-->
                    <!--                    @enderror-->
                    <!--                </div>-->
                    <!--                <div class="input_wrapper">-->
                    <!--                    <div class="input_container">-->
                    <!--                        <div class="icon">-->
                    <!--                            <i class="fa-solid fa-envelope"></i>-->
                    <!--                        </div>-->
                    <!--                        <div class="input_div">-->
                    <!--                            <p class="input_title title_font">Email</p>-->
                    <!--                            <input type="email" name="email" id="email" value="{{ Auth::user()->email }}" class="input">-->
                    <!--                        </div>-->
                    <!--                    </div>-->
                    <!--                    @error('email')-->
                    <!--                        <div class="error_msg">-->
                    <!--                            <p class="text_xsm fc_bluegly">-->
                    <!--                                {{ $message }}-->
                    <!--                            </p>-->
                    <!--                        </div>-->
                    <!--                    @enderror-->
                    <!--                </div>-->
                    <!--                <div class="input_wrapper">-->
                    <!--                    <div class="input_container">-->
                    <!--                        <div class="icon">-->
                    <!--                            <i class="fa-brands fa-whatsapp"></i>-->
                    <!--                        </div>-->
                    <!--                        <div class="input_div">-->
                    <!--                            <p class="input_title title_font">Phone Number</p>-->
                    <!--                            <input type="text" name="phone_number" id="phone_number" value="{{ Auth::user()->phone_number }}"" class="input">-->
                    <!--                        </div>-->
                    <!--                    </div>-->
                    <!--                    @error('phone_number')-->
                    <!--                        <div class="error_msg">-->
                    <!--                            <p class="text_xsm fc_bluegly">-->
                    <!--                                {{ $message }}-->
                    <!--                            </p>-->
                    <!--                        </div>-->
                    <!--                    @enderror-->
                    <!--                </div>-->
                    <!--                <div class="input_wrapper">-->
                    <!--                    <div class="input_container">-->
                    <!--                        <div class="icon">-->
                    <!--                            <i class="fa-brands fa-line"></i>-->
                    <!--                        </div>-->
                    <!--                        <div class="input_div">-->
                    <!--                            <p class="input_title title_font">Line</p>-->
                    <!--                            <input type="text" name="line" id="line" value="{{ Auth::user()->line }}" class="input" required readonly>-->
                    <!--                        </div>-->
                    <!--                    </div>-->
                    <!--                    @error('line')-->
                    <!--                        <div class="error_msg">-->
                    <!--                            <p class="text_xsm fc_bluegly">-->
                    <!--                                {{ $message }}-->
                    <!--                            </p>-->
                    <!--                        </div>-->
                    <!--                    @enderror-->
                    <!--                </div>-->
                    <!--            </div>-->

                    <!--            <div class="form_group">-->
                    <!--                <p class="title_font text_h3 mt4 mb2">-->
                    <!--                    Registration Fee-->
                    <!--                </p>-->

                    <!--                <div class="input_container focus mt4">-->
                    <!--                    <div class="icon">-->
                    <!--                        <i class="fa-solid fa-ticket"></i>-->
                    <!--                    </div>-->
                    <!--                    <div class="input_div">-->
                    <!--                        <p class="input_title title_font">Ticket Quantity</p>-->
                    <!--                        <select name="jumlahData" class="form_navs" id="jumlahData form_navs" required>-->
                    <!--                            <option value="1" class="form_nav"  data-id="1">1 Ticket</option>-->
                    <!--                        </select>-->
                    <!--                    </div>-->
                    <!--                </div>-->

                    <!--                <div class="price_list mt3">-->
                    <!--                    <p class="fc_blue title_font input_title">Price List - Normal</p>-->
                    <!--                    <p class="fc_bluegly title_font mt3">1 Ticket = <span class="fc_white">  RP 90.000</span></p>-->
                    <!--                </div>-->

                    <!--                <div class="input_wrapper">-->
                    <!--                    <div class="input_info mb6">-->
                    <!--                        <p>-->
                    <!--                            Calon peserta dapat melakukan proses pembayaran melalui beberapa opsi :-->
                    <!--                            <ul style="list-style: circle !important" class="ml4">-->
                    <!--                                <li>Bank BRI <span class="fc_bluegly fw_bold">339301052600539 </span> a.n. Merizka Azzahra</li>-->
                    <!--                                <li>GOPAY/DANA<span class="fc_bluegly fw_bold">081369016729 </span> a.n. Merizka Azzahra</li>-->
                    <!--                                <li>OVO <span class="fc_bluegly fw_bold">088286324461 </span> a.n. Merizka Azzahra</li>-->
                    <!--                            </ul>-->
                    <!--                        </p>-->
                    <!--                    </div>-->
                    <!--                    <div class="input_container focus">-->
                    <!--                        <div class="icon">-->
                    <!--                            <i class="fa-solid fa-file-invoice-dollar"></i>-->
                    <!--                        </div>-->
                    <!--                        <div class="input_div">-->
                    <!--                            <p class="input_title title_font">Proof Of Payment</p>-->
                    <!--                            <input type="file" accept="image/*" name="payment" id="payment" value="" required>-->
                    <!--                        </div>-->
                    <!--                    </div>-->
                    <!--                    @error('payment')-->
                    <!--                        <div class="error_msg">-->
                    <!--                            <p class="text_xsm fc_bluegly">-->
                    <!--                                {{ $message }}-->
                    <!--                            </p>-->
                    <!--                        </div>-->
                    <!--                    @enderror-->
                    <!--                    <label for="verify_data" class="d_flex mt4">-->
                    <!--                        <input id="verify_data" type="checkbox" required>-->
                    <!--                        <span class="text_sm ml2">Saya menyatakan bahwa bukti pembayaran dan data yang saya kirimkan benar, tanpa rekayasa</span>-->
                    <!--                    </label>-->
                    <!--                </div>-->
                    <!--            </div>-->
                    <!--        </div>-->
                    <!--        <div class="btn_container pb4">-->
                    <!--            <button type="submit" class="btn_left form_btn" name="submit_supernova">-->
                    <!--                <i class="btn_left_design"></i>-->
                    <!--                Register-->
                    <!--            </button>-->
                    <!--        </div>-->
                    <!--    </form>-->
                    <!--</div>-->
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
