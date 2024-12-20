@extends('layouts/web.main')

@section('index')
    <!--<section class="comingsoon" id="comingsoon">-->
    <!--    <div class="wrapper">-->
    <!--        <div class="container p_relative py20">-->
    <!--            <div class="title_font text_center index_min">-->
    <!--                <p class="text_h1 fc_white"><span class="fc_blue">SEMINAR</span> SIFEST 2024</p>-->
    <!--                <p class="text_big fc_white">Coming <span class="fc_bluegly">Soon</span></p>-->
    <!--            </div>-->
    <!--            <div class="img_container">-->
    <!--                <img src='assets/img/sifest2024/pose_win.svg' alt="">-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</section> -->

    <section class="hero seminar" id="hero">
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
                <div class="title_font text_center my20 t">
                    <p class="text_big">Seminar</p>
                    <p class="fc_bluegly">SIFEST 2024 HIMSI FASILKOM UNSRI</p>
                </div>
                <div class="grid_container_40_50">
                    <div class="grid_box_left ease2 l">
                        <div class="img_container">
                            <img src='assets/img/icon/sifest2024/seminar.png' alt=""
                                style="max-width: 400px; width:100%;">
                        </div>
                    </div>
                    <div class="grid_box_right box_rt_lb_side ease2 r">
                        <i class="box_rt_lb_side_design"></i>
                        <div class="title_in_section text_nm text_design_bot">
                            <span class="title_desc">
                                THE RISE OF SOCIAL MEDIA: A DOUBLE-EDGED SWORD
                            </span>
                        </div>
                        <p class="main_content mt6">
                            Seminar IT Nasional dengan tema "The Rise of Social Media: A Double-Edged Sword" merupakan
                            kegiatan yang ditujukan untuk umum, yaitu Siswa/i SMA/SMK, Mahasiswa/i Perguruan Tinggi, dan
                            masyarakat umum se-Indonesia. Acara ini bertujuan untuk membahas pentingnya membangun personal
                            branding yang kuat dan aman di dunia digital. Di era yang serba online ini, personal branding di
                            media sosial memiliki peran besar dalam membentuk persepsi publik terhadap diri kita, namun juga
                            membawa tantangan tersendiri, seperti risiko kebocoran data dan ancaman privasi. Dengan
                            pemahaman yang lebih dalam tentang personal branding dan keamanan di media sosial, peserta
                            diharapkan dapat memahami manfaat dan risiko dalam media sosial, serta menjadi lebih bijak dalam
                            mengelola aktivitas mereka di ranah digital.
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
                            <img src='assets/img/sifest2024/seminar/foto_akademik.png' alt="">
                        </div>
                        <div class="main_content px2 pt5">
                            <p class="title_font text_h3 fc_white">M. Isha Hany</p>
                            <p class="title_font text_h3 fc_bluegly">( Offensive Security Consultant )</p>
                            <p class="text_nm desc">
                                M. Isfa Hany merupakan profesional keamanan siber yang fokus pada offensive security dan
                                reverse engineering. Saat ini, beliau menjabat sebagai Senior Team Lead di SecLab, ia
                                memiliki pengalaman mendalam pengujian penetrasi dan pelatihan keamanan. Selain menjadi
                                lulusan Universitas Brawijaya dengan fokus pada Cyber Security, ia juga aktif di berbagai
                                konferensi dan organisasi keamanan.
                            </p>
                        </div>
                    </div>
                    <div class="flex_box p2 r">
                        <div class="img_container">
                            <img src='assets/img/sifest2024/seminar/foto_gs.png' alt="">
                        </div>
                        <div class="main_content px2 pt5">
                            <p class="title_font text_h3 fc_white">Meisya Sallwa</p>
                            <p class="title_font text_h3 fc_bluegly pb5">( Book Author, Public Speaker & Influencer)</p>
                            <p class="text_nm desc">
                                Meisya Sallwa merupakan seorang influencer dengan total pengikut lebih dari 700 ribu di
                                TikTok. Meisya Sallwa sendiri merupakan seorang penulis buku "Creating a New Life: Ingat,
                                kita perintis bukan pewaris" dan pembicara di 400+ events & TEDx. Beliau juga adalah pemilik
                                Kedai Kopi Tashi di Palembang. Tak hanya itu, ia juga bekerja sebagai News Anchor di iNews
                                TV sejak September 2020. Kak Meisya juga memiliki pengalaman yang luas, mulai dari bergabung
                                dengan Team Media Center Dinas Komunikasi dan Informatika pada 2021 hingga menjadi penyiar
                                di Global Radio Palembang pada 2020
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
                            <img src='assets/img/sifest2024/seminar/foto_moderator.png' alt="">
                        </div>
                        <div class="main_content px2 pt5">
                            <p class="title_font text_h3 fc_white">Salsabila Nanda Fadya</p>
                            <p class="title_font text_h3 fc_bluegly">( MODERATOR )</p>
                            <p class="text_nm desc">
                                Salsabila Nanda Fadya merupakan seorang mahasiswi Sosiologi di Universitas Sriwijaya yang berpengalaman sebagai MC dan moderator di lebih dari 20 acara. Saat ini, ia juga menjabat sebagai Project Manager Podcast Pojok Pandang yang didukung oleh Program Mahasiswa Wirausaha (PMW) di Universitas Sriwijaya.
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
                <div class="title_feature text_center t mb20 mt20 fc_white" id="title-time">
                    Timeline
                </div>
                <div class="timeline_container fc_white">
                    <div class="timeline_item">
                        <div class="timeline_dot"></div>
                        <div class="timeline_date fc_bluegly b">23 - 24 Oct 2024</div>
                        <div class="timeline_content box_lt_rb_side">
                            <i class="box_lt_rb_side_design"></i>
                            <span class="title_font">Open Presale Registration</span>
                            <p class="text_sm">Pembukaan perdana pendaftaran seminar SI FEST 2024, dapatkan potongan harga.
                                Segera lakukan registrasi sebelum kehabisan slot pre sale</p>
                        </div>
                    </div>
                    <div class="timeline_item">
                        <div class="timeline_dot"></div>
                        <div class="timeline_date fc_bluegly b">24 Oct - 08 Nov 2024</div>
                        <div class="timeline_content box_lt_rb_side">
                            <i class="box_lt_rb_side_design"></i>
                            <span class="title_font">Open Sale Registration</span>
                            <p class="text_sm">Pendaftaran seminar SI FEST 2024, dengan harga normal. Pastikan untuk
                                mendaftar sesegera mungkin sebelum kehabisan slot peserta</p>
                        </div>
                    </div>
                    <div class="timeline_item">
                        <div class="timeline_dot"></div>
                        <div class="timeline_date fc_bluegly b">9 Nov 2024</div>
                        <div class="timeline_content box_lt_rb_side">
                            <i class="box_lt_rb_side_design"></i>
                            <span class="title_font">D-Day Seminar</span>
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
                                <img src='assets/img/icon/sifest2024/seminar.png' alt="">
                            </div>
                        </div>
                        <div class="grid_box_right p_unset ease2 r fc_white">
                            <div class="title_font text_h3 fc_bluegly">
                                Seminar Nebula / Reguler
                            </div>
                            <p class="main_content mt2 mb4">
                                SI FEST 2024 menghadirkan pembicara yang tentunya berpengalaman di bidangnnya baik akademik
                                maupun non akademik. <br><br>
                                <span class="fw_bold">Nebula / Reguler Benefits : </span><br>
                                1. Seminar Kit <br>
                                2. Sertifikat Nasional <br>
                                3. Ilmu yang bermanfaat <br>
                                4. Menambah relasi <br>
                                5. Makan siang
                            </p>
                            <div class="btn_container">
                                <button onclick="location.href='/registration/seminar'" class="btn_right text_center">
                                    <i class="btn_right_design"></i>
                                    Register
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                VIP

                <div class="title_feature text_center mb20 t fc_white">

                </div>
                <div class="content_box p_relative box_event px6 py10">
                    <i class="box_event_design"></i>
                    <i class="box_event_design2"></i>
                    <div class="grid_container_40_50">
                        <div class="grid_box_left ease2 l">
                            <div class="img_container">
                                <img src='assets/img/icon/sifest2024/seminar.png' alt="">
                            </div>
                        </div>
                        <div class="grid_box_right p_unset ease2 r fc_white">
                            <div class="title_font text_h3 fc_bluegly">
                                Seminar Supernova / VIP
                            </div>
                            <p class="main_content mt2 mb4">
                                SI FEST 2024 menghadirkan pembicara yang tentunya berpengalaman di bidangnnya baik akademik
                                maupun non akademik. <br><br>
                                <span class="fw_bold">Supernova / VIP Benefits : </span><br>
                                1. Meet N Greet bersama 2 Pembicara <br>
                                2. Special Seminar Kit <br>
                                3. Tempat duduk dan Entry Prioritas<br>
                                4. Semua Benefit Tiket Nebula
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
                        <p class="title_font text_h3 text_center fc_white pt3">M. Riswandifa
                        </p>
                        <a href="https://line.me/R/ti/p/rizz1.fa" class="fc_bluegly"><i class="fa-brands fa-line"></i>
                            rizz1.fa </a>
                        <a href="https://wa.me/62895320841312" target="_blank" class="fc_bluegly pb3"><i
                                class="fa-brands fa-whatsapp"></i> 62895320841312 </a>
                    </div>
                    <div class="flex_box r box_event">
                        <p class="title_font text_h3 text_center fc_white pt3">Aisyah Ghaidah
                        </p>
                        <a class="fc_bluegly"><i class="fa-brands fa-line"></i>
                            6281294931792 </a>
                        <a href="https://wa.me/6281294931792" target="_blank" class="fc_bluegly pb3"><i
                                class="fa-brands fa-whatsapp"></i> 6281294931792 </a>
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
                    <p class="text_nm fc_bluegly">Seminar SI FEST 2024</p>
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
                                Selama kalian adalah seorang berjiwa muda berapapun usia kalian, kalian tetap boleh
                                mendaftar kok.
                            </div>
                        </div>
                        <div class="card box_lt_rb_side text_right p4 l">
                            <i class="box_lt_rb_side_design"></i>
                            <div class="card_header d_flex flex_row_reverse fw_bold">
                                <i class="fa-solid fa-plus ml2 mt1"></i>
                                <span>Apa saja benefit yang didapatkan ketika mengikuti seminar SIFEST 2024?</span>
                            </div>
                            <div class="card_body text_sm pt2 pr5">
                                Untuk benefit yang bisa didapatkan tentu saja adalah ilmu yang super keren dari para
                                pembicara nanti, free snack dan lunch, doorprize bagi yang beruntung, dan tentu saja kalian
                                juga akan mendapatkan sertifikat nasional, mantap kann, jangan lupa join yaa.
                            </div>
                        </div>
                        <div class="card box_lt_rb_side text_right p4 l">
                            <i class="box_lt_rb_side_design"></i>
                            <div class="card_header d_flex flex_row_reverse fw_bold">
                                <i class="fa-solid fa-plus ml2 mt1"></i>
                                <span>Apa Perbedaan Benefit Tiket Nebula dan Supernova?</span>
                            </div>
                            <div class="card_body text_sm pt2 pr5">
                                Yang pastinya benefit tiket Supernova (VIP) akan lebih banyak di banding tiket Nebula
                                (Reguler).
                                Salah satunya bagi peserta yang memiliki tiket Supernova akan berkesempatan untuk dapat foto
                                bersama secara eksklusif bersama guest star kita yang keren.
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
                                Selain itu, jangan lupa mengambil tiket fisikmu apabila mendaftar secara online saat
                                menghadiri acara seminar.
                                Tunjukan bukti bahwa anda sudah terdaftar melalui laman dashboard anda di web SI FEST saat
                                penurakan tiket fisik.
                            </div>
                        </div>
                        <div class="card box_rt_lb_side p4 r">
                            <i class="box_rt_lb_side_design"></i>
                            <div class="card_header d_flex fw_bold">
                                <i class="fa-solid fa-plus mr2 mt1"></i>
                                <span>Untuk informasi tambahan mengenai seminar dan sifest dapat dicari dimana ya?</span>
                            </div>
                            <div class="card_body text_sm pt2 pl5">
                                Untuk informasi seminar dan sifest dapat di check di Instagram dengan username <a
                                    href="http://intagram.com/sifest.unsri" target="_blank"
                                    class="fc_bluegly fw_bold">@sifest.unsri</a>
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
                                Kita ada dua cara pembelian tiket seminar ini. yang pertama pembelian secara online dengan
                                mendaftarkan diri dan membuat akun pada web SI FEST
                                lalu membeli tiket pada menu seminar, setelah itu melakukan penukaran tiket fisik secara
                                offline.
                                Yang kedua pembelian secara offline dengan datang ke tempat penjualan yang akan kita
                                sediakan. gampang kann, ayo sebelum kehabisann.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
