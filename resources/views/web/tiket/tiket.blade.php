@extends('layouts/web.main')

@section('index')

{{-- <section class="comingsoon" id="comingsoon">
    <div class="wrapper">
        <div class="container p_relative py20">
            <div class="title_font text_center index_min">
                <p class="text_h1 fc_white"><span class="fc_blue">SEMINAR</span> SIFEST 2023</p>
                <p class="text_big fc_white">Coming <span class="fc_red">Soon</span></p>
            </div>
            <div class="img_container">
                <img src='assets/img/sifest2023/pose_vr.png' alt="">
            </div>
        </div>
    </div>
</section> --}}

<section class="hero seminar" id="hero">
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
            <div class="title_font text_center my20 t">
                <p class="text_big">Seminar</p>
                <p class="fc_red">SIFEST 2023 HIMSI FASILKOM UNSRI</p>
            </div>
            <div class="grid_container_40_50">
                <div class="grid_box_left ease2 l">
                    <!-- About Section Img -->
                    <div class="img_container">
                        <img src="assets/img/icon/seminar.png" alt="" style="max-width: 400px; width:100%;">
                    </div>
                </div>
                <div class="grid_box_right box_rt_lb_side ease2 r">
                    <i class="box_rt_lb_side_design"></i>
                    <div class="title_in_section text_nm text_design_bot">
                        <span class="title_desc">
                            Artificial Intelligence, Is it a good thing or a bad thing?
                        </span>
                    </div>
                    <p class="main_content mt6">
                        Seminar IT Nasional Seminar dengan tema "AI: Is It a Good Thing or a Bad Thing?" merupakan kegiatan yang ditunjukan untuk umum, yaitu Siswa/I SMA/SMK, Mahasiswa/I Perguruan Tinggi, dan masyarakat umum se-Indonesia. Acara ini bertujuan untuk mendiskusikan secara mendalam tentang perdebatan yang muncul seputar AI, yang diharapkan dapat menjadi wadah untuk generasi muda dalam mengembangkan pengetahuan serta memperluas pemahaman kita tentang dampak positif dan negatif yang ditimbulkan oleh teknologi ini. Dengan pemahaman yang lebih dalam tentang AI, peserta diharapkan dapat memanfaatkan kecerdasan buatan secara efektif dan bertanggung jawab dalam menghadapi masa depan yang semakin terhubung dan diperkaya oleh teknologi AI.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="speaker" id="speaker">
    <div class="break_section_top"></div>
    <div class="wrapper">
        <div class="container p_relative py20">
            <div class="title_feature text_center t mb20 fc_white">
                Meet Our Speakers
            </div>
            <div class="flex_container">
                <div class="flex_box p2 l">
                    <div class="img_container">
                        <img src='assets/img/sifest2022/speaker_aka.png' alt="">
                    </div>
                    <div class="main_content px2">
                        <p class="text_nm desc">
                            Farhan merupakan konten kreator muda yang kerap membagikan konten seputar Matematika dan juga Fisika di dalam sosial medianya.
                            Melalui kecerdasan dan konten bermanfaat Farhan membuatnya kini diidolakan oleh banyak orang.
                        </p>
                    </div>
                </div>
                <div class="flex_box p2 r">
                    <div class="img_container">
                        <img src='assets/img/sifest2022/speaker_nonaka.png' alt="">
                    </div>
                    <div class="main_content px2">
                        <p class="text_nm desc">
                            Joy Gabriel merupakan seorang data scientist, software developer, consultant, tech leader, dan innovator.
                            Joy Gabriel telah mengembangkan berbagai Sistem Informasi yang bermanfaat bagi Indonesia
                            di bidang kesehatan. Beberapa diantaranya adalah Satu Pintu, Tele Sehat Desa, dan Tele Detection.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container p_relative pb20">
            <div class="title_feature text_center t mb20 fc_white">
                Our Moderator
            </div>
            <div class="flex_container">
                <div class="flex_box p2 b">
                    <div class="img_container">
                        <img src='assets/img/sifest2022/moderator.png' alt="">
                    </div>
                    <div class="main_content px2">
                        <p class="text_nm desc">
                            Allya merupakan seorang content creator yang berasal dari palembang. Melalui kemampuan public speaking dan prestasi yang dimiliki,
                            membuat Allya sudah sering menjadi narasumber dan moderator di berbagai event yang ada di Palembang loh.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="timeline" id="timeline">
        <div class="break_section_bot"></div>
    <div class="wrapper">
        <div class="container p_relative pb25">
            <div class="title_feature text_center t mb20 mt20">
                Timeline
            </div>
            <div class="timeline_container fc_white">
                <div class="timeline_item">
                    <div class="timeline_dot"></div>
                    <div class="timeline_date fc_red b">20 - 22 Oct 2023</div>
                    <div class="timeline_content box_lt_rb_side">
                        <i class="box_lt_rb_side_design"></i>
                        <span class="title_font">Open Presale Registration</span>
                        <p class="text_sm">Pembukaan perdana pendaftaran seminar SI FEST 2023, dapatkan potongan harga. Segera lakukan registrasi sebelum kehabisan slot pre sale</p>
                    </div>
                </div>
                <div class="timeline_item">
                    <div class="timeline_dot"></div>
                    <div class="timeline_date fc_red b">23 Oct - 09 Nov 2023</div>
                    <div class="timeline_content box_lt_rb_side">
                        <i class="box_lt_rb_side_design"></i>
                        <span class="title_font">Open Sale Registration</span>
                        <p class="text_sm">Pendaftaran seminar SI FEST 2023, dengan harga normal. Pastikan untuk mendaftar sesegera mungkin sebelum kehabisan slot peserta</p>
                    </div>
                </div>
                <div class="timeline_item">
                    <div class="timeline_dot"></div>
                    <div class="timeline_date fc_red b">12 Nov 2023</div>
                    <div class="timeline_content box_lt_rb_side">
                        <i class="box_lt_rb_side_design"></i>
                        <span class="title_font">Puncak SI FEST, Seminar</span>
                        <p class="text_sm">Seminar diadakan dengan mengundang para pembicara yang berpengalaman</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="register" id="register">
    <div class="wrapper">
        <div class="container p_relative py20">
            <div class="title_feature text_center mb20 t fc_white">
                Register Now
            </div>
            <div class="content_box p_relative box_event px6 py6">
                <i class="box_event_design"></i>
                <i class="box_event_design2"></i>
                <div class="grid_container_40_50">
                    <div class="grid_box_left ease2 l">
                        <div class="img_container">
                            <img src='assets/img/icon/seminar.png' alt="">
                        </div>
                    </div>
                    <div class="grid_box_right p_unset ease2 r fc_white">
                        <div class="title_font text_h3">
                            Improve Your Intelectuallity With Our Seminar
                        </div>
                        <p class="main_content mt2 mb4">
                            SI FEST 2023 menghadirkan pembicara yang tentunya berpengalaman di bidangnnya baik akademik maupun non akademik.
                            Tunggu apa lagi daftar sekarang sebelum masa pendaftaran ditutup dan slot peserta habis!
                        </p>
                        <div class="btn_container">
                            <button onclick="location.href='/registration/tiket'" class="btn_right text_center">
                                <i class="btn_right_design"></i>
                                Register
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="contact" id="contact">
    <div class="wrapper">
        <div class="container p_relative pb20">
            <div class="title_feature text_center mb20 t fc_white">
                Contact Person
            </div>
            <div class="flex_container">
                <div class="flex_box l box_event">
                    <p class="title_font text_h3 text_center fc_white pt3">M. Fakhri Nadrota Acta</p>
                    <a href="https://line.me/R/ti/p/nadrotafakhri" class="fc_red"><i class="fa-brands fa-line"></i> nadrotafakhri </a>
                    <a href="https://wa.me/6285273716094" target="_blank" class="fc_red pb3"><i class="fa-brands fa-whatsapp"></i> 6285273716094 </a>
                </div>
                <div class="flex_box r box_event">
                    <p class="title_font text_h3 text_center fc_white pt3">Fadia Rizka Mumtaz</p>
                    <a href="https://line.me/R/ti/p/gldnrozez" class="fc_red"><i class="fa-brands fa-line"></i> gldnrozez </a>
                    <a href="https://wa.me/62819690069" target="_blank" class="fc_red pb3"><i class="fa-brands fa-whatsapp"></i> 62819690069 </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="faq" id="faq">
    <div class="break_section_top"></div>
    <div class="wrapper">
        <div class="container p_relative py20">
            <div class="title_feature text_center mb20 t fc_white">
                FAQ
                <p class="text_nm fc_red">Seminar SI FEST 2023</p>
            </div>
            <div class="grid_container_space_between">
                <div class="grid_box question_box">
                    <div class="card box_lt_rb_side text_right p4 l">
                        <i class="box_lt_rb_side_design"></i>
                        <div class="card_header d_flex flex_row_reverse fw_bold">
                            <i class="fa-solid fa-plus ml2 mt1"></i>
                            <span>Apakah ada Batasan usia untuk mendaftar seminar sifest?</span>
                        </div>
                        <div class="card_body text_sm pt2 pr5">
                            Selama kalian adalah seorang berjiwa muda berapapun usia kalian, kalian tetap boleh mendaftar kok.
                        </div>
                    </div>
                    <div class="card box_lt_rb_side text_right p4 l">
                        <i class="box_lt_rb_side_design"></i>
                        <div class="card_header d_flex flex_row_reverse fw_bold">
                            <i class="fa-solid fa-plus ml2 mt1"></i>
                            <span>Apa saja benefit yang didapatkan ketika mengikuti seminar SIFEST 2023?</span>
                        </div>
                        <div class="card_body text_sm pt2 pr5">
                            Untuk benefit yang bisa didapatkan tentu saja adalah ilmu yang super keren dari para pembicara nanti, free snack dan lunch, doorprize bagi yang beruntung, dan tentu saja kalian juga akan mendapatkan sertifikat nasional, mantap kann, jangan lupa join yaa.
                        </div>
                    </div>
                    <div class="card box_lt_rb_side text_right p4 l">
                        <i class="box_lt_rb_side_design"></i>
                        <div class="card_header d_flex flex_row_reverse fw_bold">
                            <i class="fa-solid fa-plus ml2 mt1"></i>
                            <span>Apa Perbedaan Benefit Tiket Malware dan Spyware?</span>
                        </div>
                        <div class="card_body text_sm pt2 pr5">
                            Yang pastinya benefit tiket Malware (VIP) akan lebih banyak di banding tiket Spyware (Reguler).
                            Salah satunya bagi peserta yang memiliki tiket Malware akan berkesempatan untuk dapat foto bersama secara eksklusif bersama guest star kita yang keren.
                        </div>
                    </div>
                </div>
                <div class="grid_box question_box">
                    <div class="card box_rt_lb_side p4 r">
                        <i class="box_rt_lb_side_design"></i>
                        <div class="card_header d_flex fw_bold">
                            <i class="fa-solid fa-plus mr2 mt1"></i>
                            <span>Apa ada syarat syarat khusus untuk mengikuti seminar ini?</span>
                        </div>
                        <div class="card_body text_sm pt2 pl5">
                            Untuk syarat sendiri para peserta wajib membeli tiket secara online maupun offline.
                            Selain itu, jangan lupa mengambil tiket fisikmu apabila mendaftar secara online saat menghadiri acara seminar.
                            Tunjukan bukti bahwa anda sudah terdaftar melalui laman dashboard anda di web SI FEST saat penurakan tiket fisik.
                        </div>
                    </div>
                    <div class="card box_rt_lb_side p4 r">
                        <i class="box_rt_lb_side_design"></i>
                        <div class="card_header d_flex fw_bold">
                            <i class="fa-solid fa-plus mr2 mt1"></i>
                            <span>Untuk informasi tambahan mengenai seminar dan sifest dapat dicari dimana ya?</span>
                        </div>
                        <div class="card_body text_sm pt2 pl5">
                            Untuk informasi seminar dan sifest dapat di check di Instagram dengan username <a href="http://intagram.com/sifest.unsri" target="_blank" class="fc_red fw_bold">@sifest.unsri</a>
                            , atau langsung hubungi contact person yang telah tertera di dalam website.
                        </div>
                    </div>
                    <div class="card box_rt_lb_side p4 r">
                        <i class="box_rt_lb_side_design"></i>
                        <div class="card_header d_flex fw_bold">
                            <i class="fa-solid fa-plus mr2 mt1"></i>
                            <span>Bagaimana cara membeli tiket Seminar sifest?</span>
                        </div>
                        <div class="card_body text_sm pt2 pl5">
                            Kita ada dua cara pembelian tiket seminar ini. yang pertama pembelian secara online dengan mendaftarkan diri dan membuat akun pada web SI FEST
                            lalu membeli tiket pada menu seminar, setelah itu melakukan penukaran tiket fisik secara offline.
                            Yang kedua pembelian secara offline dengan datang ke tempat penjualan yang akan kita sediakan. gampang kann, ayo sebelum kehabisann.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
