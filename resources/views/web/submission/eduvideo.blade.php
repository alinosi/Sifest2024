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
                <p class="text_big fc_white">Submission</p>
                <p class="fc_red">Educational Video Competition</p>
            </div>
            <div class="form_wrapper box_lt_rb_side p6">
                <i class="box_lt_rb_side_design"></i>
                <form action="{{ route("submission.edu.video") }}" method="post" autocomplete="off" enctype="multipart/form-data">
                    @csrf
                    <div class="form_container pb2">
                        <div class="form_group">
                            <div class="input_wrapper">
                                <div class="input_container focus">
                                    <div class="icon">
                                        <i class="fa-solid fa-id-card"></i>
                                    </div> 
                                    <div class="input_div">
                                        <p class="input_title title_font">Submission</p>
                                        <input type="file" accept="application/pdf" name="submission" id="submission" value="" required>
                                    </div>
                                </div>
                                <div class="error_msg">
                                    <p class="text_xsm fc_red">
                                        Submission yang dikirim dalam bentuk PDF (max 10mb) dengan format <br>
                                        <b>PDCSIFEST_Nama Tim_Judul Poster</b>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="btn_container">
                        <button type="submit" class="btn_left form_btn" name="submit">
                            <i class="btn_left_design"></i>
                            Submit
                        </button>
                    </div>
                    @if ($user['submission'])
                        <div class="separator text_sm mt4 mb2 fc_white">File submission yang telah terkirim</div>
                        <a href="{{ asset('EduVideo/'.$user['submission']) }}" class="fw_bold fc_red" target="_blank" style="text-decoration: underline !important">{{ $user['submission'] }}</a>
                    @endif
                </form>
            </div>
        </div>
    </div>
</section>

@endsection

