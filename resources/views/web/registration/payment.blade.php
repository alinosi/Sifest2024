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
                <p class="text_big">Seminar Registration</p>
                <p class="fc_red">Daftar sekarang, sebelum pendaftaran ditutup</p>
            </div>
            
            <div class="form_wrapper box_lt_rb_side p6">
                <i class="box_lt_rb_side_design"></i>
                <form action="" method="post" autocomplete="off">
                    @csrf
                    <div class="form_container pb2">
                        <div class="form_group">
                            <p class="title_font text_h3 mt4 mb2">
                                Registration Fee
                            </p>
                            <div class="input_wrapper">
                                <div class="input_info mb6">
                                    <p>
                                        Calon peserta dikenakan fee registrasi sebesar <s>Rp 60.000</s> <span class="fc_red fw_bold">Rp 50.000</span>, peserta dapat melakukan proses pembayaran melalui beberapa opsi : 
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
                                        <input type="file" accept="image/*" name="payment" id="payment" value="" required>
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
                        <button type="submit" class="btn_left form_btn" name="submit_team">
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

