@extends('layouts/web.main')

@section('index')

<section class="form_section register_valorant">
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
                <p class="text_big fc_white">Valorant Registration</p>
                <p class="fc_bluegly">Daftar sekarang, sebelum pendaftaran ditutup</p>
            </div>

            <div class="form_wrapper_grid box_lt_rb_side p6" style="max-width: 1000px; margin:auto">
                <i class="box_lt_rb_side_design"></i>

                <div class="type_navs d-flex content_center py4" id="type_navs">
                    <button class="type_nav px8 {{ $slot['team'] == 0 ? "" : "active" }}" data-id="1" {{ $slot['team'] == 0 ? "Disabled" : "" }}>Team {{ $slot['team'] == 0 ? "(Full Slot)" : "" }}</button>
                    <button class="type_nav px8 {{ ($slot['solo'] == 0 ? "" : $slot['team']) == 0 ? "active" : "" }}" data-id="2" {{ $slot['solo'] == 0 ? "Disabled" : "" }}>Solo {{ $slot['solo'] == 0 ? "(Full Slot)" : "" }}</button>
                </div>

                <div class="type_tabs">
                    <div class="type_tab {{ $slot['team'] == 0 ? "" : "active" }}" type-content="1">
                        <form action="{{ route('registration.valorant.team') }}" method="post" autocomplete="off" enctype="multipart/form-data">
                            @csrf
                            <div class="form_container pb2">
                                <div class="form_group">
                                    <p class="title_font text_h3 mt4 mb4">
                                        Participant Data
                                    </p>

                                    <div class="form_navs mb6" id="form_navs">
                                        <button class="form_nav active" type="button" data-id="1">1</button>
                                        <button class="form_nav" type="button" data-id="2">2</button>
                                        <button class="form_nav" type="button" data-id="3">3</button>
                                        <button class="form_nav" type="button" data-id="4">4</button>
                                        <button class="form_nav" type="button" data-id="5">5</button>
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
                                                        <input type="text" name="name1" id="name1" value="{{ Auth::user()->name }}" class="input" required readonly>
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
                                                        <input type="tel"
                                                            pattern="62\d+" minlength="11" maxlength="15"
                                                            name="phone_number1" id="phone_number1" class="input phone_number"
                                                            value="{{ Auth::user()->phone_number }}"
                                                            required readonly>
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
                                                        <input type="text" name="line1" id="line1" value="{{ Auth::user()->line }}" class="input" required readonly>
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
                                                        <input type="text" name="institution1" id="institution1" value="{{ Auth::user()->institution }}" class="input" required readonly>
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
                                                        <p class="input_title title_font">ID card (KPM)</p>
                                                        <input type="file" accept="image/*" name="idcard1" id="idcard1" value="" required>
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
                                            <div class="input_grid_wrapper">
                                                <div class="input_container">
                                                    <div class="icon">
                                                        <i class="fa-solid fa-id-badge"></i>
                                                    </div>
                                                    <div class="input_div">
                                                        <p class="input_title title_font">ID Riot</p>
                                                        <input type="text" name="id_riot1" id="id_riot1" value="{{ old("id_riot1") }}" class="input" required>
                                                    </div>
                                                </div>
                                                @error('id_riot1')
                                                    <div class="error_msg">
                                                        <p class="text_xsm fc_bluegly">
                                                            {{ $message }}
                                                        </p>
                                                    </div>
                                                @enderror
                                                <div class="input_container">
                                                    <div class="icon">
                                                        <i class="fa-solid fa-globe"></i>
                                                    </div>
                                                    <div class="input_div">
                                                        <p class="input_title title_font">Tag</p>
                                                        <input type="text" name="tag_riot1" id="tag_riot1" value="{{ old("tag_riot1") }}" class="input" maxlength="6" required>
                                                    </div>
                                                </div>
                                                @error('tag_riot1')
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
                                                        <i class="fa-solid fa-ranking-star"></i>
                                                    </div>
                                                    <div class="input_div">
                                                        <p class="input_title title_font">Rank Valo</p>
                                                        <select name="rank1" id="rank1" class="input" required>
                                                            <option selected value="" hidden disabled></option>
                                                            <option {{ old("rank1") === "Iron" ? "selected" : "" }} value="Iron">Iron</option>
                                                            <option {{ old("rank1") === "Bronze" ? "selected" : "" }} value="Bronze">Bronze</option>
                                                            <option {{ old("rank1") === "Silver" ? "selected" : "" }} value="Silver">Silver</option>
                                                            <option {{ old("rank1") === "Gold" ? "selected" : "" }} value="Gold">Gold</option>
                                                            <option {{ old("rank1") === "Platinum" ? "selected" : "" }} value="Platinum">Platinum</option>
                                                            <option {{ old("rank1") === "Diamond" ? "selected" : "" }} value="Diamond">Diamond</option>
                                                            <option {{ old("rank1") === "Ascendant" ? "selected" : "" }} value="Ascendant">Ascendant</option>
                                                            <option {{ old("rank1") === "Immortal" ? "selected" : "" }} value="Immortal">Immortal</option>
                                                            <option {{ old("rank1") === "Radiant" ? "selected" : "" }} value="Radiant">Radiant</option>
                                                        </select>
                                                    </div>
                                                    @error('rank1')
                                                        <div class="error_msg">
                                                            <p class="text_xsm fc_bluegly">
                                                                {{ $message }}
                                                            </p>
                                                        </div>
                                                    @enderror
                                                </div>
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
                                                        <input type="text" name="name2" id="name2" value="{{ old('name2') }}" class="input" required>
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
                                                        <input type="tel"
                                                            pattern="62\d+" minlength="11" maxlength="15"
                                                            name="phone_number2" id="phone_number2" class="input phone_number"
                                                            value="{{ old('phone_number2') }}"
                                                            required
                                                        >
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
                                                        <input type="text" name="line2" id="line2" value="{{ old('line2') }}" class="input" required>
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
                                                        <input type="text" name="institution2" id="institution2" value="{{ old('institution2') }}" class="input" required>
                                                    </div>
                                                </div>
                                                @error('institution2')
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
                                                        <p class="input_title title_font">ID card (KPM)</p>
                                                        <input type="file" accept="image/*" name="idcard2" id="idcard2" value="" required>
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
                                            <div class="input_grid_wrapper">
                                                <div class="input_container">
                                                    <div class="icon">
                                                        <i class="fa-solid fa-id-badge"></i>
                                                    </div>
                                                    <div class="input_div">
                                                        <p class="input_title title_font">ID Riot</p>
                                                        <input type="text" name="id_riot2" id="id_riot2" value="{{ old("id_riot2") }}" class="input" required>
                                                    </div>
                                                </div>
                                                @error('id_riot2')
                                                    <div class="error_msg">
                                                        <p class="text_xsm fc_bluegly">
                                                            {{ $message }}
                                                        </p>
                                                    </div>
                                                @enderror
                                                <div class="input_container">
                                                    <div class="icon">
                                                        <i class="fa-solid fa-globe"></i>
                                                    </div>
                                                    <div class="input_div">
                                                        <p class="input_title title_font">Tag</p>
                                                        <input type="text" name="tag_riot2" id="tag_riot2" value="{{ old("tag_riot2") }}" class="input" maxlength="6" required>
                                                    </div>
                                                </div>
                                                @error('tag_riot2')
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
                                                        <i class="fa-solid fa-ranking-star"></i>
                                                    </div>
                                                    <div class="input_div">
                                                        <p class="input_title title_font">Rank Valo</p>
                                                        <select name="rank2" id="rank2" class="input" required>
                                                            <option selected value="" hidden disabled></option>
                                                            <option {{ old("rank2") === "Iron" ? "selected" : "" }} value="Iron">Iron</option>
                                                            <option {{ old("rank2") === "Bronze" ? "selected" : "" }} value="Bronze">Bronze</option>
                                                            <option {{ old("rank2") === "Silver" ? "selected" : "" }} value="Silver">Silver</option>
                                                            <option {{ old("rank2") === "Gold" ? "selected" : "" }} value="Gold">Gold</option>
                                                            <option {{ old("rank2") === "Platinum" ? "selected" : "" }} value="Platinum">Platinum</option>
                                                            <option {{ old("rank2") === "Diamond" ? "selected" : "" }} value="Diamond">Diamond</option>
                                                            <option {{ old("rank2") === "Ascendant" ? "selected" : "" }} value="Ascendant">Ascendant</option>
                                                            <option {{ old("rank2") === "Immortal" ? "selected" : "" }} value="Immortal">Immortal</option>
                                                            <option {{ old("rank2") === "Radiant" ? "selected" : "" }} value="Radiant">Radiant</option>
                                                        </select>
                                                    </div>
                                                    @error('rank2')
                                                        <div class="error_msg">
                                                            <p class="text_xsm fc_bluegly">
                                                                {{ $message }}
                                                            </p>
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form_tab" data-content="3">
                                            <div class="input_wrapper">
                                                <div class="input_container">
                                                    <div class="icon">
                                                        <i class="fa-solid fa-user"></i>
                                                    </div>
                                                    <div class="input_div">
                                                        <p class="input_title title_font">Full Name</p>
                                                        <input type="text" name="name3" id="name3" value="{{ old('name3') }}" class="input" required>
                                                    </div>
                                                </div>
                                                @error('name3')
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
                                                        <input type="tel"
                                                            pattern="62\d+" minlength="11" maxlength="15"
                                                            name="phone_number3" id="phone_number3" class="input phone_number"
                                                            value="{{ old('phone_number3') }}"
                                                            required
                                                        >
                                                    </div>
                                                </div>
                                                <div class="error_msg">
                                                    <p class="text_xsm fc_bluegly">
                                                        @error('phone_number3')
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
                                                        <input type="text" name="line3" id="line3" value="{{ old('line3') }}" class="input" required>
                                                    </div>
                                                </div>
                                                @error('line3')
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
                                                        <input type="text" name="institution3" id="institution3" value="{{ old('institution3') }}" class="input" required>
                                                    </div>
                                                </div>
                                                @error('institution3')
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
                                                        <p class="input_title title_font">ID card (KPM)</p>
                                                        <input type="file" accept="image/*" name="idcard3" id="idcard3" value="" required>
                                                    </div>
                                                </div>
                                                @error('idcard3')
                                                    <div class="error_msg">
                                                        <p class="text_xsm fc_bluegly">
                                                            {{ $message }}
                                                        </p>
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="input_grid_wrapper">
                                                <div class="input_container">
                                                    <div class="icon">
                                                        <i class="fa-solid fa-id-badge"></i>
                                                    </div>
                                                    <div class="input_div">
                                                        <p class="input_title title_font">ID Riot</p>
                                                        <input type="text" name="id_riot3" id="id_riot3" value="{{ old("id_riot3") }}" class="input" required>
                                                    </div>
                                                </div>
                                                @error('id_riot3')
                                                    <div class="error_msg">
                                                        <p class="text_xsm fc_bluegly">
                                                            {{ $message }}
                                                        </p>
                                                    </div>
                                                @enderror
                                                <div class="input_container">
                                                    <div class="icon">
                                                        <i class="fa-solid fa-globe"></i>
                                                    </div>
                                                    <div class="input_div">
                                                        <p class="input_title title_font">Tag</p>
                                                        <input type="text" name="tag_riot3" id="tag_riot3" value="{{ old("tag_riot3") }}" class="input" maxlength="6" required>
                                                    </div>
                                                </div>
                                                @error('tag_riot3')
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
                                                        <i class="fa-solid fa-ranking-star"></i>
                                                    </div>
                                                    <div class="input_div">
                                                        <p class="input_title title_font">Rank Valo</p>
                                                        <select name="rank3" id="rank3" class="input" required>
                                                            <option selected value="" hidden disabled></option>
                                                            <option {{ old("rank3") === "Iron" ? "selected" : "" }} value="Iron">Iron</option>
                                                            <option {{ old("rank3") === "Bronze" ? "selected" : "" }} value="Bronze">Bronze</option>
                                                            <option {{ old("rank3") === "Silver" ? "selected" : "" }} value="Silver">Silver</option>
                                                            <option {{ old("rank3") === "Gold" ? "selected" : "" }} value="Gold">Gold</option>
                                                            <option {{ old("rank3") === "Platinum" ? "selected" : "" }} value="Platinum">Platinum</option>
                                                            <option {{ old("rank3") === "Diamond" ? "selected" : "" }} value="Diamond">Diamond</option>
                                                            <option {{ old("rank3") === "Ascendant" ? "selected" : "" }} value="Ascendant">Ascendant</option>
                                                            <option {{ old("rank3") === "Immortal" ? "selected" : "" }} value="Immortal">Immortal</option>
                                                            <option {{ old("rank3") === "Radiant" ? "selected" : "" }} value="Radiant">Radiant</option>
                                                        </select>
                                                    </div>
                                                    @error('rank3')
                                                        <div class="error_msg">
                                                            <p class="text_xsm fc_bluegly">
                                                                {{ $message }}
                                                            </p>
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form_tab" data-content="4">
                                            <div class="input_wrapper">
                                                <div class="input_container">
                                                    <div class="icon">
                                                        <i class="fa-solid fa-user"></i>
                                                    </div>
                                                    <div class="input_div">
                                                        <p class="input_title title_font">Full Name</p>
                                                        <input type="text" name="name4" id="name4" value="{{ old('name4') }}" class="input" required>
                                                    </div>
                                                </div>
                                                @error('name4')
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
                                                        <input type="tel"
                                                            pattern="62\d+" minlength="11" maxlength="15"
                                                            name="phone_number4" id="phone_number4" class="input phone_number"
                                                            value="{{ old('phone_number4') }}"
                                                            required
                                                        >
                                                    </div>
                                                </div>
                                                <div class="error_msg">
                                                    <p class="text_xsm fc_bluegly">
                                                        @error('phone_number4')
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
                                                        <input type="text" name="line4" id="line4" value="{{ old('line4') }}" class="input" required>
                                                    </div>
                                                </div>
                                                @error('line4')
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
                                                        <input type="text" name="institution4" id="institution4" value="{{ old('institution4') }}" class="input" required>
                                                    </div>
                                                </div>
                                                @error('institution4')
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
                                                        <p class="input_title title_font">ID card (KPM)</p>
                                                        <input type="file" accept="image/*" name="idcard4" id="idcard4" value="" required>
                                                    </div>
                                                </div>
                                                @error('idcard4')
                                                    <div class="error_msg">
                                                        <p class="text_xsm fc_bluegly">
                                                            {{ $message }}
                                                        </p>
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="input_grid_wrapper">
                                                <div class="input_container">
                                                    <div class="icon">
                                                        <i class="fa-solid fa-id-badge"></i>
                                                    </div>
                                                    <div class="input_div">
                                                        <p class="input_title title_font">ID Riot</p>
                                                        <input type="text" name="id_riot4" id="id_riot4" value="{{ old("id_riot4") }}" class="input" required>
                                                    </div>
                                                </div>
                                                @error('id_riot4')
                                                    <div class="error_msg">
                                                        <p class="text_xsm fc_bluegly">
                                                            {{ $message }}
                                                        </p>
                                                    </div>
                                                @enderror
                                                <div class="input_container">
                                                    <div class="icon">
                                                        <i class="fa-solid fa-globe"></i>
                                                    </div>
                                                    <div class="input_div">
                                                        <p class="input_title title_font">Tag</p>
                                                        <input type="text" name="tag_riot4" id="tag_riot4" value="{{ old("tag_riot4") }}" class="input" maxlength="6" required>
                                                    </div>
                                                </div>
                                                @error('tag_riot4')
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
                                                        <i class="fa-solid fa-ranking-star"></i>
                                                    </div>
                                                    <div class="input_div">
                                                        <p class="input_title title_font">Rank Valo</p>
                                                        <select name="rank4" id="rank4" class="input" required>
                                                            <option selected value="" hidden disabled></option>
                                                            <option {{ old("rank4") === "Iron" ? "selected" : "" }} value="Iron">Iron</option>
                                                            <option {{ old("rank4") === "Bronze" ? "selected" : "" }} value="Bronze">Bronze</option>
                                                            <option {{ old("rank4") === "Silver" ? "selected" : "" }} value="Silver">Silver</option>
                                                            <option {{ old("rank4") === "Gold" ? "selected" : "" }} value="Gold">Gold</option>
                                                            <option {{ old("rank4") === "Platinum" ? "selected" : "" }} value="Platinum">Platinum</option>
                                                            <option {{ old("rank4") === "Diamond" ? "selected" : "" }} value="Diamond">Diamond</option>
                                                            <option {{ old("rank4") === "Ascendant" ? "selected" : "" }} value="Ascendant">Ascendant</option>
                                                            <option {{ old("rank4") === "Immortal" ? "selected" : "" }} value="Immortal">Immortal</option>
                                                            <option {{ old("rank4") === "Radiant" ? "selected" : "" }} value="Radiant">Radiant</option>
                                                        </select>
                                                    </div>
                                                    @error('rank4')
                                                        <div class="error_msg">
                                                            <p class="text_xsm fc_bluegly">
                                                                {{ $message }}
                                                            </p>
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form_tab" data-content="5">
                                            <div class="input_wrapper">
                                                <div class="input_container">
                                                    <div class="icon">
                                                        <i class="fa-solid fa-user"></i>
                                                    </div>
                                                    <div class="input_div">
                                                        <p class="input_title title_font">Full Name</p>
                                                        <input type="text" name="name5" id="name5" value="{{ old('name5') }}" class="input" required>
                                                    </div>
                                                </div>
                                                @error('name5')
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
                                                        <input type="tel"
                                                            pattern="62\d+" minlength="11" maxlength="15"
                                                            name="phone_number5" id="phone_number5" class="input phone_number"
                                                            value="{{ old('phone_number5') }}"
                                                            required
                                                        >
                                                    </div>
                                                </div>
                                                <div class="error_msg">
                                                    <p class="text_xsm fc_bluegly">
                                                        @error('phone_number5')
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
                                                        <input type="text" name="line5" id="line5" value="{{ old('line5') }}" class="input" required>
                                                    </div>
                                                </div>
                                                @error('line5')
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
                                                        <input type="text" name="institution5" id="institution5" value="{{ old('institution5') }}" class="input" required>
                                                    </div>
                                                </div>
                                                @error('institution5')
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
                                                        <p class="input_title title_font">ID card (KPM)</p>
                                                        <input type="file" accept="image/*" name="idcard5" id="idcard5" value="" required>
                                                    </div>
                                                </div>
                                                @error('idcard5')
                                                    <div class="error_msg">
                                                        <p class="text_xsm fc_bluegly">
                                                            {{ $message }}
                                                        </p>
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="input_grid_wrapper">
                                                <div class="input_container">
                                                    <div class="icon">
                                                        <i class="fa-solid fa-id-badge"></i>
                                                    </div>
                                                    <div class="input_div">
                                                        <p class="input_title title_font">ID Riot</p>
                                                        <input type="text" name="id_riot5" id="id_riot5" value="{{ old("id_riot5") }}" class="input" required>
                                                    </div>
                                                </div>
                                                @error('id_riot5')
                                                    <div class="error_msg">
                                                        <p class="text_xsm fc_bluegly">
                                                            {{ $message }}
                                                        </p>
                                                    </div>
                                                @enderror
                                                <div class="input_container">
                                                    <div class="icon">
                                                        <i class="fa-solid fa-globe"></i>
                                                    </div>
                                                    <div class="input_div">
                                                        <p class="input_title title_font">Tag</p>
                                                        <input type="text" name="tag_riot5" id="tag_riot5" value="{{ old("tag_riot5") }}" class="input" maxlength="6" required>
                                                    </div>
                                                </div>
                                                @error('tag_riot5')
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
                                                        <i class="fa-solid fa-ranking-star"></i>
                                                    </div>
                                                    <div class="input_div">
                                                        <p class="input_title title_font">Rank Valo</p>
                                                        <select name="rank5" id="rank5" class="input" required>
                                                            <option selected value="" hidden disabled></option>
                                                            <option {{ old("rank5") === "Iron" ? "selected" : "" }} value="Iron">Iron</option>
                                                            <option {{ old("rank5") === "Bronze" ? "selected" : "" }} value="Bronze">Bronze</option>
                                                            <option {{ old("rank5") === "Silver" ? "selected" : "" }} value="Silver">Silver</option>
                                                            <option {{ old("rank5") === "Gold" ? "selected" : "" }} value="Gold">Gold</option>
                                                            <option {{ old("rank5") === "Platinum" ? "selected" : "" }} value="Platinum">Platinum</option>
                                                            <option {{ old("rank5") === "Diamond" ? "selected" : "" }} value="Diamond">Diamond</option>
                                                            <option {{ old("rank5") === "Ascendant" ? "selected" : "" }} value="Ascendant">Ascendant</option>
                                                            <option {{ old("rank5") === "Immortal" ? "selected" : "" }} value="Immortal">Immortal</option>
                                                            <option {{ old("rank5") === "Radiant" ? "selected" : "" }} value="Radiant">Radiant</option>
                                                        </select>
                                                    </div>
                                                    @error('rank5')
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
                                </div>

                                <div class="form_group">
                                    <p class="title_font text_h3 mt4 mb2">
                                        Team Data
                                    </p>
                                    <div class="input_wrapper">
                                        <div class="input_container">
                                            <div class="icon">
                                                <i class="fa-solid fa-envelope"></i>
                                            </div>
                                            <div class="input_div">
                                                <p class="input_title title_font">Email</p>
                                                <input type="email" name="email" id="email" value="{{ Auth::user()->email }}" class="input" required readonly>
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
                                                <p class="input_title title_font">Team Name</p>
                                                <input type="text" name="team_name" id="team_name" value="{{ old("team_name") }}" class="input" required>
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

                                    <p class="title_font text_h3 mt4 mb2">
                                        Registration Fee
                                    </p>
                                    <div class="input_wrapper">
                                        <div class="input_info mb6">
                                            <p>
                                                <p>Calon peserta dikenakan fee registrasi sebesar :</p>
                                                <p class="fc_red fw_bold">-> Rp65.000/Slot</p>
                                                <p class="fc_red fw_bold">-> Rp125.000/ 2 Slot</p>
                                                <p class="fc_red fw_bold">-> Rp15.000/solo</p>
                                                <p>Peserta dapat melakukan proses pembayaran melalui beberapa opsi : </p>
                                                <ul style="list-style: circle !important" class="ml4">
                                                    <li>Bank BRI <span class="fc_bluegly fw_bold">339301052600539 </span> a.n. Merizka Azzahra</li>
                                                    <li>GOPAY/DANA <span class="fc_bluegly fw_bold">081369016729 </span> a.n. Merizka Azzahra</li>
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
                                <button type="submit" class="btn_left form_btn" name="submit_team">
                                    <i class="btn_left_design"></i>
                                    Register
                                </button>
                            </div>
                        </form>
                    </div>

                    <div class="type_tab {{ ($slot['solo'] == 0 ? "" : $slot['team']) == 0 ? "active" : "" }}" type-content="2">
                        <form action="{{ route('registration.valorant.solo') }}" method="post" autocomplete="off" enctype="multipart/form-data">
                            @csrf
                            <div class="form_container pb2">
                                <div class="form_group">
                                    <p class="title_font text_h3 mt4 mb4">
                                        Participant Data
                                    </p>

                                    <div class="form_tabs">
                                        <div class="form_tab active" data-content="1">
                                            <div class="input_wrapper">
                                                <div class="input_container">
                                                    <div class="icon">
                                                        <i class="fa-solid fa-user"></i>
                                                    </div>
                                                    <div class="input_div">
                                                        <p class="input_title title_font">Full Name</p>
                                                        <input type="text" name="name" id="name" value="{{ Auth::user()->name }}" class="input" required readonly>
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
                                                        <input type="email" name="email" id="email" value="{{ Auth::user()->email }}" class="input" required readonly>
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
                                                        <p class="input_title title_font">Phone Number (WA)</p>
                                                        <input type="tel"
                                                            pattern="62\d+" minlength="11" maxlength="15"
                                                            name="phone_number" id="phone_number" class="input phone_number"
                                                            value="{{ Auth::user()->phone_number }}"
                                                            required readonly>
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
                                                <div class="input_container">
                                                    <div class="icon">
                                                        <i class="fa-brands fa-line"></i>
                                                    </div>
                                                    <div class="input_div">
                                                        <p class="input_title title_font">Line</p>
                                                        <input type="text" name="line" id="line" value="{{ Auth::user()->line }}" class="input" required readonly>
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
                                                <div class="input_container">
                                                    <div class="icon">
                                                        <i class="fa-solid fa-building-columns"></i>
                                                    </div>
                                                    <div class="input_div">
                                                        <p class="input_title title_font">Institution</p>
                                                        <input type="text" name="institution" id="institution" value="{{ Auth::user()->institution }}" class="input" required readonly>
                                                    </div>
                                                </div>
                                                @error('institution')
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
                                                        <p class="input_title title_font">ID card (KPM)</p>
                                                        <input type="file" accept="image/*" name="idcard" id="idcard" value="" required>
                                                    </div>
                                                </div>
                                                @error('idcard')
                                                    <div class="error_msg">
                                                        <p class="text_xsm fc_bluegly">
                                                            {{ $message }}
                                                        </p>
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="input_grid_wrapper">
                                                <div class="input_container">
                                                    <div class="icon">
                                                        <i class="fa-solid fa-id-badge"></i>
                                                    </div>
                                                    <div class="input_div">
                                                        <p class="input_title title_font">ID Riot</p>
                                                        <input type="text" name="id_riot" id="id_riot" value="{{ old("id_riot") }}" class="input" required>
                                                    </div>
                                                </div>
                                                @error('id_riot')
                                                    <div class="error_msg">
                                                        <p class="text_xsm fc_bluegly">
                                                            {{ $message }}
                                                        </p>
                                                    </div>
                                                @enderror
                                                <div class="input_container">
                                                    <div class="icon">
                                                        <i class="fa-solid fa-globe"></i>
                                                    </div>
                                                    <div class="input_div">
                                                        <p class="input_title title_font">Tag</p>
                                                        <input type="text" name="tag_riot" id="tag_riot" value="{{ old("tag_riot") }}" class="input" maxlength="6" required>
                                                    </div>
                                                </div>
                                                @error('tag_riot')
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
                                                        <i class="fa-solid fa-ranking-star"></i>
                                                    </div>
                                                    <div class="input_div">
                                                        <p class="input_title title_font">Rank Valo</p>
                                                        <select name="rank" id="rank" class="input" required>
                                                            <option selected value="" hidden disabled></option>
                                                            <option {{ old("rank") === "Iron" ? "selected" : "" }} value="Iron">Iron</option>
                                                            <option {{ old("rank") === "Bronze" ? "selected" : "" }} value="Bronze">Bronze</option>
                                                            <option {{ old("rank") === "Silver" ? "selected" : "" }} value="Silver">Silver</option>
                                                            <option {{ old("rank") === "Gold" ? "selected" : "" }} value="Gold">Gold</option>
                                                            <option {{ old("rank") === "Platinum" ? "selected" : "" }} value="Platinum">Platinum</option>
                                                            <option {{ old("rank") === "Diamond" ? "selected" : "" }} value="Diamond">Diamond</option>
                                                            <option {{ old("rank") === "Ascendant" ? "selected" : "" }} value="Ascendant">Ascendant</option>
                                                            <option {{ old("rank") === "Immortal" ? "selected" : "" }} value="Immortal">Immortal</option>
                                                            <option {{ old("rank") === "Radiant" ? "selected" : "" }} value="Radiant">Radiant</option>
                                                        </select>
                                                    </div>
                                                    @error('rank')
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
                                </div>

                                <div class="form_group">
                                    <p class="title_font text_h3 mt4 mb2">
                                        Registration Fee
                                    </p>
                                    <div class="input_wrapper">
                                        <div class="input_info mb6">
                                            <p>
                                                <p>Calon peserta dikenakan fee registrasi sebesar :</p>
                                                <p class="fc_red fw_bold">-> Rp65.000/Slot</p>
                                                <p class="fc_red fw_bold">-> Rp125.000/ 2 Slot</p>
                                                <p class="fc_red fw_bold">-> Rp15.000/solo</p>
                                                <p>Peserta dapat melakukan proses pembayaran melalui beberapa opsi : </p>
                                                <ul style="list-style: circle !important" class="ml4">
                                                    <li>Bank BRI <span class="fc_bluegly fw_bold">339301052600539 </span> a.n. Merizka Azzahra</li>
                                                    <li>GOPAY/DANA <span class="fc_bluegly fw_bold">081369016729 </span> a.n. Merizka Azzahra</li>
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
                                <button type="submit" class="btn_left form_btn" name="submit_solo">
                                    <i class="btn_left_design"></i>
                                    Register
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

