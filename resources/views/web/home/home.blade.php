@extends('layouts/web.main')

@section('index')
    <!-- Hero section  -->
    <section class="hollow_purple">
        <section class="hero" id="hero">
            <img src="{{ asset('assets/img/sifest2024/home/planet-bg-purple.svg') }}" alt="Planet">
            <div class="wrapper">
                <div class="container p_relative">
                    <div class="content_box path_rt_lb_side ease2 px2">
                        <div class="title_font fw-bold mb7">
                            <p class="text_big mb4 fc_white">SI FEST 2024</p>
                            <p class="text_h2 fc_white">HIMSI FASILKOM UNSRI</p>
                        </div>
                        <a href="#about" class="btn_right">
                            <i class="btn_right_design"></i>
                            More about SI FEST
                        </a>
                    </div>
                    <!-- <div class="img_container ease2">
                                                                                                                                                                                                <img src="{{ asset('assets/img/sifest2024/home/purple-hollow.svg') }}" alt="Planet">
                                                                                                                                                                                            </div> -->
                </div>
            </div>
        </section>

        <!-- About Section  -->
        <section class="about" id="about">
            <div class="wrapper">
                <div class="container p_relative pt20">
                    <div class="grid_container_40_50">
                        <div class="grid_box_left ease2 l">
                            <!-- About Section Img -->
                            <img src="{{ asset('assets/img/sifest2024/home/orby-melayang.svg') }}" alt="">
                        </div>
                        <div class="grid_box_right box_rt_lb_side ease2 r">
                            <i class="box_rt_lb_side_design"></i>
                            <!-- About Text Content  -->
                            <div class="title_in_section text_design_bot">
                                <p class="fc_white text_h2">SI FEST</p>
                                {{-- <p class="title_desc text_nm fc_blue">"HACKS-Tech"</p> --}}
                                <!--<span class="fc_white text_h2">SI FEST</span>-->
                                <!--<span class="title_desc text_nm fc_white">"HACKS-Tech"</span>-->
                            </div>

                            <p class="main_content mt6 fc_white">
                                <span class="fc_bluegly fw_bold">Sistem Informasi Festival</span> atau <span
                                    class="fc_bluegly fw_bold">SI FEST</span> merupakan
                                event terbesar berbasis nasional yang diselenggarakan oleh <span
                                    class="fc_bluegly fw_bold">HIMSI FASILKOM UNSRI</span>. Event ini bertujuan untuk
                                memberikan
                                insight mengenai teknologi di generasi 5.0 secara luas. <span class="fc_bluegly fw_bold">SI
                                    FEST</span>
                                memiliki beberapa rangkaian acara, yaitu Opening ceremony, Bazaar, Competition, dan Seminar
                                Nasional.

                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="events" id="events">
            <div class="break_section_bot"></div>
            <div class="wrapper">
                <div class="container p_relative py20">
                    <div class="title_feature text_center mb20 ">
                        <span class="text_h2 fc_white">Annual HIMSI UNSRI Event</span>
                    </div>

                    <div id="event_tabs" class="event_tabs">

                        <div class="event_tab active" data-content="1">
                            <div class="grid_container_40_50 p_relative">

                                <div class="grid_box_left p_unset ease2">
                                    <div class="img_container">
                                        <img src="{{ asset('assets/img/icon/sifest2024/opcer.png') }}" alt=""
                                            style="max-width: 400px; width:100%;">
                                    </div>
                                </div>
                                <div class="grid_box_right box_lt_rb_side ease2">
                                    <i class="box_lt_rb_side_design"></i>
                                    <div class="title_in_section text_design_bot">
                                        <span class="fc_white text_h2">Opening Ceremony</span>
                                    </div>
                                    <p class="main_content mt6 mb4 fc_white py3 px ">
                                        Acara Opening Ceremony merupakan bagian internal dari rangkaian kegiatan <span
                                            class="fc_bluegly fw_bold">SI FEST 2024</span> yang diadakan oleh <span
                                            class="fc_bluegly fw_bold">Himpunan Mahasiswa Sistem Informasi Universitas
                                            Sriwijaya</span>. Sebagai acara pembukaan dan peresmian dari rangkaian kegiatan
                                        <span class="fc_bluegly fw_bold">SI FEST 2024</span> serta sebagai sarana
                                        silaturahmi
                                        dan
                                        puncak kegembiraan untuk menyambut rangkaian kegiatan yang mengesankan pada <span
                                            class="fc_bluegly fw_bold">SI FEST 2024</span>.
                                    </p>
                                    <a href="{{ route('opcer') }}" class="btn_right">
                                        <i class="btn_right_design"></i>
                                        Show More
                                    </a>
                                </div>

                            </div>
                        </div>

                        <div class="event_tab " data-content="2">
                            <div class="grid_container_40_50 p_relative">

                                <div class="grid_box_left p_unset ease2">
                                    <div class="img_container path_lt_rb_side">
                                        <img src="{{ asset('assets/img/icon/sifest2024/bazaar.png') }}" alt=""
                                            style="max-width: 400px; width:100%;">
                                    </div>
                                </div>
                                <div class="grid_box_right box_lt_rb_side ease2">
                                    <i class="box_lt_rb_side_design"></i>
                                    <div class="title_in_section text_design_bot">
                                        <span class="fc_white text_h2">Bazaar</span>
                                    </div>
                                    <p class="main_content mt6 mb4 fc_white py3 px">
                                        Bazaar menjadi sarana <span class="fc_bluegly fw_bold">SI FEST</span> untuk menjual
                                        merchandise-merchandise terkait pelaksanaan <span class="fc_bluegly fw_bold">SI FEST
                                            2024</span> agar acara tahunan <span class="fc_bluegly fw_bold">SI FEST</span>
                                        dapat
                                        selalu dikenang, selain itu Bazaar juga memiliki berbagai macam produk selain
                                        merchandise seperti makanan dan minuman. Nantikan dan jangan lupa hadir !
                                    </p>
                                    <a href="{{ route('bazaar') }}" class="btn_right">
                                        <i class="btn_right_design"></i>
                                        More about Bazaar
                                    </a>
                                </div>

                            </div>
                        </div>

                        <div class="event_tab " data-content="3">
                            <div class="grid_container_40_50 p_relative">

                                <div class="grid_box_left p_unset ease2">
                                    <div class="img_container path_lt_rb_side">
                                        <img src="{{ asset('assets/img/icon/sifest2024/compe.png') }}" alt=""
                                            style="max-width: 400px; width:100%;">
                                    </div>
                                </div>
                                <div class="grid_box_right box_lt_rb_side ease2">
                                    <i class="box_lt_rb_side_design"></i>
                                    <div class="title_in_section text_design_bot">
                                        <span class="fc_white text_h2">Competition</span>
                                    </div>
                                    <p class="main_content mt6 mb4 fc_white py3 px">
                                        Competition menjadi kegiatan yang mewadahi <span
                                            class="fc_bluegly fw_bold">semangat</span>
                                        serta <span class="fc_bluegly fw_bold">jiwa kompetensi</span> mahasiswa untuk
                                        bersaing
                                        meraih pengalamannya di bidangnya. Sehingga terbentuk mahasiswa yang inovatif,
                                        solutif,
                                        dan dapat bersaing.
                                    </p>
                                    <a href="{{ route('competitions') }}" class="btn_right">
                                        <i class="btn_right_design"></i>
                                        More about Competition
                                    </a>
                                </div>

                            </div>
                        </div>

                        <div class="event_tab" data-content="4">
                            <div class="grid_container_40_50 p_relative">

                                <div class="grid_box_left p_unset ease2">
                                    <div class="img_container">
                                        <img src="{{ asset('assets/img/icon/sifest2024/seminar.png') }}" alt=""
                                            style="max-width: 400px; width:100%;">
                                    </div>
                                </div>
                                <div class="grid_box_right box_lt_rb_side ease2">
                                    <i class="box_lt_rb_side_design"></i>
                                    <div class="title_in_section text_design_bot">
                                        <span class="fc_white text_h2">Seminar</span>
                                    </div>
                                    <p class="main_content mt6 mb4 fc_white py3 px ">
                                        Seminar menjadi puncak <span class="fc_bluegly fw_bold">SI FEST 2024</span>, selain
                                        itu
                                        seminar menjadi kegiatan umum yang bertujuan untuk memberikan wawasan dan ilmu baru
                                        kepada para masyarakat. Melalui seminar, <span class="fc_bluegly fw_bold">SI
                                            FEST</span>
                                        telah ikut berpatisipasi untuk mengedukasi masyarakat Indonesia.
                                    </p>
                                    <a href="{{ route('seminar') }}" class="btn_right">
                                        <i class="btn_right_design"></i>
                                        More about Seminar
                                    </a>
                                </div>

                            </div>
                        </div>


                    </div>

                    <div class="event_navs mt20 " id="event_navs">
                        <button class="event_nav fw_sbold active box_event_tab fc_white" data-id="1">
                            <span class="title_font pt2">Opening Ceremony</span>
                            <span class="text_center event_date">20 September</span>
                        </button>
                        <button class="event_nav fw_sbold box_event_tab fc_white" data-id="2">
                            <span class="title_font pt2">Bazaar</span>
                            <span class="text_center event_date">On Going</span>
                            {{-- <span class="text_center event_date">14 Oct - 28 Oct</span> --}}
                        </button>
                        <button class="event_nav fw_sbold box_event_tab fc_white" data-id="3">
                            <span class="title_font pt2">Competition</span>
                            <span class="text_center event_date">21 sept - 29 oct</span>
                        </button>
                        <button class="event_nav fw_sbold box_event_tab fc_white" data-id="4">
                            <span class="title_font pt2">Seminar</span>
                            {{-- <span class="text_center event_date">Coming Soon!</span> --}}
                            <span class="text_center event_date">9 Nov</span>

                        </button>

                    </div>
                </div>
            </div>

        </section>

        <section class="documentation" id="documentation">
            <div class="py20">
                <div class="title_feature text_center pt15">
                    <span class="text_h1">Last year SIFEST Documentation</span>
                </div>

                <div class="swiper_container p_relative">
                    <div class="swiper coverflow_swiper pb25 pt10">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide box_all_side">
                                <img src="{{ asset('assets/img/sifest_old_2023/sifest1.JPG') }}" alt="">
                                <i class="box_all_side_design"></i>
                                <i class="box_all_side_design2"></i>
                            </div>
                            <div class="swiper-slide box_all_side">
                                <img src="{{ asset('assets/img/sifest_old_2023/sifest2.JPG') }}" alt="">
                                <i class="box_all_side_design"></i>
                                <i class="box_all_side_design2"></i>
                            </div>
                            <div class="swiper-slide box_all_side">
                                <img src="{{ asset('assets/img/sifest_old_2023/sifest3.JPG') }}" alt="">
                                <i class="box_all_side_design"></i>
                                <i class="box_all_side_design2"></i>
                            </div>
                            <div class="swiper-slide box_all_side">
                                <img src="{{ asset('assets/img/sifest_old_2023/sifest4.JPG') }}" alt="">
                                <i class="box_all_side_design"></i>
                                <i class="box_all_side_design2"></i>
                            </div>
                            <div class="swiper-slide box_all_side">
                                <img src="{{ asset('assets/img/sifest_old_2023/sifest5.JPG') }}" alt="">
                                <i class="box_all_side_design"></i>
                                <i class="box_all_side_design2"></i>
                            </div>
                            <div class="swiper-slide box_all_side">
                                <img src="{{ asset('assets/img/sifest_old_2023/sifest6.JPG') }}" alt="">
                                <i class="box_all_side_design"></i>
                                <i class="box_all_side_design2"></i>
                            </div>
                            <div class="swiper-slide box_all_side">
                                <img src="{{ asset('assets/img/sifest_old_2023/sifest7.JPG') }}" alt="">
                                <i class="box_all_side_design"></i>
                                <i class="box_all_side_design2"></i>
                            </div>
                        </div>
                    </div>
                    <div class="swiper_title title_in_section text_center text_border text_big p_absolute index_min">
                        SI FEST
                    </div>
                </div>
            </div>


        </section>

        <section class="faq" id="faq">
            <div class="break_section_bot"></div>
            <div class="wrapper">
                <div class="container p_relative py20">
                    <div class="title_feature text_center mb20 fc_white">
                        FAQ
                        <p class="text_nm fc_bluegly">SI FEST 2024</p>
                    </div>
                    <div class="grid_container_space_between ease1">
                        <div class="grid_box question_box ease1">
                            <div class="card box_lt_rb_side text_right p4">
                                <i class="box_lt_rb_side_design"></i>
                                <div class="card_header d_flex flex_row_reverse fw_bold">
                                    <i class="fa-solid fa-plus ml2 mt1"></i>
                                    <span>Apa saja rangkaian kegiatan yang akan dilaksanakan pada SI FEST 2024
                                        nantinya?</span>
                                </div>
                                <div class="card_body text_sm pt2 pr5">
                                    SI FEST 2024 dibuka dengan kegiatan Opening Ceremony, lalu kemudian SI FEST 2024
                                    memiliki 3
                                    event utama, yaitu Bazaar, Competition, dan Seminar. Ketiga kegiatan tersebut tidak lama
                                    lagi akan dilaksanakan secara berurutan nih, so stay tune yaa..
                                </div>
                            </div>
                            <div class="card box_lt_rb_side text_right p4 ">
                                <i class="box_lt_rb_side_design"></i>
                                <div class="card_header d_flex flex_row_reverse fw_bold">
                                    <i class="fa-solid fa-plus ml2 mt1"></i>
                                    <span>Kompetisi apa saja yang dilaksanakan pada SI FEST 2024?</span>
                                </div>
                                <div class="card_body text_sm pt2 pr5">
                                    Terdapat 6 Jenis kompetisi dari berbagai bidang yang diadakan oleh SI FEST, mulai dari
                                    Essay
                                    Competition, Poster Design, UI/UX Design, Mobile Legends, dan
                                    Valorant.
                                </div>
                            </div>
                        </div>
                        <div class="grid_box question_box ease1">
                            <div class="card box_rt_lb_side p4 ">
                                <i class="box_rt_lb_side_design"></i>
                                <div class="card_header d_flex fw_bold">
                                    <i class="fa-solid fa-plus mr2 mt1"></i>
                                    <span>Apakah boleh berpartisipasi lebih dari satu kegiatan secara bersamaan?</span>
                                </div>
                                <div class="card_body text_sm pt2 pl5">
                                    Boleh-boleh saja, baik mengikuti lebih dari satu perlombaan ataupun mengikuti kompetisi
                                    dan
                                    seminar, yang terpenting dapat bertanggung jawab atas keputusan yang diambil.
                                </div>
                            </div>
                            <div class="card box_rt_lb_side p4">
                                <i class="box_rt_lb_side_design"></i>
                                <div class="card_header d_flex fw_bold">
                                    <i class="fa-solid fa-plus mr2 mt1"></i>
                                    <span>Apakah seluruh kegiatan SI FEST 2024 dibuka untuk umum?</span>
                                </div>
                                <div class="card_body text_sm pt2 pl5">
                                    Yaps, seluruh rangkaian kegiatan pada SI FEST 2024 terbuka untuk umum yaa, so this is
                                    the
                                    time for you all to shine !!
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="sponsor" id="sponsor">
            <div class="wrapper">
                <div class="container pt20">
                    <div class="title_feature text_center mb20 fc_white">
                        Sponsor
                    </div>
                    <div class="flex_container">
                        <div class="flex_box box_all_side ">
                            <i class="box_all_side_design"></i>
                            <i class="box_all_side_design2"></i>
                            <div class="img_container">
                                <img src="{{ asset('assets/img/sifest2024/home/sponsor/Sponsor1.png') }}" alt="">
                            </div>
                        </div>
                        <div class="flex_box box_all_side ">
                            <i class="box_all_side_design"></i>
                            <i class="box_all_side_design2"></i>
                            <div class="img_container">
                                <img src="{{ asset('assets/img/sifest2024/home/sponsor/sponsor2fix.png') }}"
                                    alt="">
                            </div>
                        </div>
                        <div class="flex_box box_all_side ">
                            <i class="box_all_side_design"></i>
                            <i class="box_all_side_design2"></i>
                            <div class="img_container">
                                <img src="{{ asset('assets/img/sifest2024/home/sponsor/sponsor3.png') }}" alt="">
                            </div>
                        </div>
                        <div class="flex_box box_all_side ">
                            <i class="box_all_side_design"></i>
                            <i class="box_all_side_design2"></i>
                            <div class="img_container">
                                <img src="{{ asset('assets/img/sifest2024/home/sponsor/sponsor4fix.png') }}"
                                    alt="">
                            </div>
                        </div>
                        <div class="flex_box box_all_side ">
                            <i class="box_all_side_design"></i>
                            <i class="box_all_side_design2"></i>
                            <div class="img_container">
                                <img src="{{ asset('assets/img/sifest2024/home/sponsor/mamin.png') }}" alt="">
                            </div>
                        </div>
                        <div class="flex_box box_all_side ">
                            <i class="box_all_side_design"></i>
                            <i class="box_all_side_design2"></i>
                            <div class="img_container">
                                <img src="{{ asset('assets/img/sifest2024/home/sponsor/sponsor5.png') }}"
                                    alt="">
                            </div>
                        </div>
                        <div class="flex_box box_all_side ">
                            <i class="box_all_side_design"></i>
                            <i class="box_all_side_design2"></i>
                            <div class="img_container">
                                <img src="{{ asset('assets/img/sifest2024/home/sponsor/sponsor6.jpeg') }}"
                                    alt="">
                            </div>
                        </div>
                        <div class="flex_box box_all_side ">
                            <i class="box_all_side_design"></i>
                            <i class="box_all_side_design2"></i>
                            <div class="img_container">
                                <img src="{{ asset('assets/img/sifest2024/home/sponsor/sponsor7.png') }}"
                                    alt="">
                            </div>
                        </div>
                        <div class="flex_box box_all_side ">
                            <i class="box_all_side_design"></i>
                            <i class="box_all_side_design2"></i>
                            <div class="img_container">
                                <img src="{{ asset('assets/img/sifest2024/home/sponsor/sponsor8.png') }}"
                                    alt="">
                            </div>
                        </div>
                        <div class="flex_box box_all_side ">
                            <i class="box_all_side_design"></i>
                            <i class="box_all_side_design2"></i>
                            <div class="img_container">
                                <img src="{{ asset('assets/img/sifest2024/home/sponsor/sponsor9.webp') }}"
                                    alt="">
                            </div>
                        </div>
                        <div class="flex_box box_all_side ">
                            <i class="box_all_side_design"></i>
                            <i class="box_all_side_design2"></i>
                            <div class="img_container">
                                <img src="{{ asset('assets/img/sifest2024/home/sponsor/sponsor10.jpg') }}"
                                    alt="">
                            </div>
                        </div>
                        <div class="flex_box box_all_side ">
                            <i class="box_all_side_design"></i>
                            <i class="box_all_side_design2"></i>
                            <div class="img_container">
                                <img src="{{ asset('assets/img/sifest2024/home/sponsor/sponsor11.jpg') }}"
                                    alt="">
                            </div>
                        </div>
                        <div class="flex_box box_all_side ">
                            <i class="box_all_side_design"></i>
                            <i class="box_all_side_design2"></i>
                            <div class="img_container">
                                <img src="{{ asset('assets/img/sifest2024/home/sponsor/sponsor12.jpg') }}"
                                    alt="">
                            </div>
                        </div>
                        <div class="flex_box box_all_side ">
                            <i class="box_all_side_design"></i>
                            <i class="box_all_side_design2"></i>
                            <div class="img_container">
                                <img src="{{ asset('assets/img/sifest2024/home/sponsor/sponsor13.jpg') }}"
                                    alt="">
                            </div>
                        </div>
                        <div class="flex_box box_all_side ">
                            <i class="box_all_side_design"></i>
                            <i class="box_all_side_design2"></i>
                            <div class="img_container">
                                <img src="{{ asset('assets/img/sifest2024/home/sponsor/sponsor14.jpg') }}"
                                    alt="">
                            </div>
                        </div>
                    </div>
                </div>
        </section>

        <section class="medpar" id="medpar">
            <div class="wrapper">
                <div class="container pt20 pb24">
                    <div class="title_feature text_center mb20  fc_white">
                        Medpar
                    </div>
                    <div class="flex_container">
                        <div class="flex_box box_all_side ">
                            <i class="box_all_side_design"></i>
                            <i class="box_all_side_design2"></i>
                            <div class="img_container">
                                <img src="{{ asset('assets/img/sifest2024/home/medpar/InfoTerkini/Eventhunter.id.jpg') }}"
                                    alt="">
                            </div>
                        </div>
                        <div class="flex_box box_all_side ">
                            <i class="box_all_side_design"></i>
                            <i class="box_all_side_design2"></i>
                            <div class="img_container">
                                <img src="{{ asset('assets/img/sifest2024/home/medpar/InfoTerkini/instapalembanggram.jpg') }}"
                                    alt="">
                            </div>
                        </div>
                        <div class="flex_box box_all_side ">
                            <i class="box_all_side_design"></i>
                            <i class="box_all_side_design2"></i>
                            <div class="img_container">
                                <img src="{{ asset('assets/img/sifest2024/home/medpar/InfoTerkini/miminsekayu.jpg') }}"
                                    alt="">
                            </div>
                        </div>
                        <div class="flex_box box_all_side ">
                            <i class="box_all_side_design"></i>
                            <i class="box_all_side_design2"></i>
                            <div class="img_container">
                                <img src="{{ asset('assets/img/sifest2024/home/medpar/InfoTerkini/palembangevents.jpg') }}"
                                    alt="">
                            </div>
                        </div>
                        <div class="flex_box box_all_side ">
                            <i class="box_all_side_design"></i>
                            <i class="box_all_side_design2"></i>
                            <div class="img_container">
                                <img src="{{ asset('assets/img/sifest2024/home/medpar/InfoTerkini/plgfest.jpg') }}"
                                    alt="">
                            </div>
                        </div>
                        <div class="flex_box box_all_side ">
                            <i class="box_all_side_design"></i>
                            <i class="box_all_side_design2"></i>
                            <div class="img_container">
                                <img src="{{ asset('assets/img/sifest2024/home/medpar/InfoTerkini/sumseltalks.jpg') }}"
                                    alt="">
                            </div>
                        </div>
                        <div class="flex_box box_all_side ">
                            <i class="box_all_side_design"></i>
                            <i class="box_all_side_design2"></i>
                            <div class="img_container">
                                <img src="{{ asset('assets/img/sifest2024/home/medpar/InfoTerkini/updaterkini.id.jpg') }}"
                                    alt="">
                            </div>
                        </div>
                        <div class="flex_box box_all_side ">
                            <i class="box_all_side_design"></i>
                            <i class="box_all_side_design2"></i>
                            <div class="img_container">
                                <img src="{{ asset('assets/img/sifest2024/home/medpar/JurnalistikEksternalUNSRI/LPMUMP.jpg') }}"
                                    alt="">
                            </div>
                        </div>
                        <div class="flex_box box_all_side ">
                            <i class="box_all_side_design"></i>
                            <i class="box_all_side_design2"></i>
                            <div class="img_container">
                                <img src="{{ asset('assets/img/sifest2024/home/medpar/JurnalistikInternalUnsri/LIMASFISIP.jpg') }}"
                                    alt="">
                            </div>
                        </div>
                        <div class="flex_box box_all_side ">
                            <i class="box_all_side_design"></i>
                            <i class="box_all_side_design2"></i>
                            <div class="img_container">
                                <img src="{{ asset('assets/img/sifest2024/home/medpar/JurnalistikInternalUnsri/LOGOPHOBE.png') }}"
                                    alt="">
                            </div>
                        </div>
                        <div class="flex_box box_all_side ">
                            <i class="box_all_side_design"></i>
                            <i class="box_all_side_design2"></i>
                            <div class="img_container">
                                <img src="{{ asset('assets/img/sifest2024/home/medpar/JurnalistikInternalUnsri/LPMGS.png') }}"
                                    alt="">
                            </div>
                        </div>
                        <div class="flex_box box_all_side ">
                            <i class="box_all_side_design"></i>
                            <i class="box_all_side_design2"></i>
                            <div class="img_container">
                                <img src="{{ asset('assets/img/sifest2024/home/medpar/JurnalistikInternalUnsri/LPMKINERJAFE.png') }}"
                                    alt="">
                            </div>
                        </div>
                        <div class="flex_box box_all_side ">
                            <i class="box_all_side_design"></i>
                            <i class="box_all_side_design2"></i>
                            <div class="img_container">
                                <img src="{{ asset('assets/img/sifest2024/home/medpar/JurnalistikInternalUnsri/MadaniFKIP.png') }}"
                                    alt="">
                            </div>
                        </div>
                        <div class="flex_box box_all_side ">
                            <i class="box_all_side_design"></i>
                            <i class="box_all_side_design2"></i>
                            <div class="img_container">
                                <img src="{{ asset('assets/img/sifest2024/home/medpar/JurnalistikInternalUnsri/MediaSI.png') }}"
                                    alt="">
                            </div>
                        </div>
                        <div class="flex_box box_all_side ">
                            <i class="box_all_side_design"></i>
                            <i class="box_all_side_design2"></i>
                            <div class="img_container">
                                <img src="{{ asset('assets/img/sifest2024/home/medpar/JurnalistikSMA/Jurnalistik MAN 2 PLG.jpg') }}"
                                    alt="">
                            </div>
                        </div>
                        <div class="flex_box box_all_side ">
                            <i class="box_all_side_design"></i>
                            <i class="box_all_side_design2"></i>
                            <div class="img_container">
                                <img src="{{ asset('assets/img/sifest2024/home/medpar/JurnalistikSMA/SMA 11.png') }}"
                                    alt="">
                            </div>
                        </div>
                        <div class="flex_box box_all_side ">
                            <i class="box_all_side_design"></i>
                            <i class="box_all_side_design2"></i>
                            <div class="img_container">
                                <img src="{{ asset('assets/img/sifest2024/home/medpar/JurnalistikSMA/SMA 15.png') }}"
                                    alt="">
                            </div>
                        </div>
                        <div class="flex_box box_all_side ">
                            <i class="box_all_side_design"></i>
                            <i class="box_all_side_design2"></i>
                            <div class="img_container">
                                <img src="{{ asset('assets/img/sifest2024/home/medpar/JurnalistikSMA/SMAN 4.jpg') }}"
                                    alt="">
                            </div>
                        </div>
                        <div class="flex_box box_all_side ">
                            <i class="box_all_side_design"></i>
                            <i class="box_all_side_design2"></i>
                            <div class="img_container">
                                <img src="{{ asset('assets/img/sifest2024/home/medpar/JurnalistikSMA/SMKN 5.jpg') }}"
                                    alt="">
                            </div>
                        </div>
                        <div class="flex_box box_all_side ">
                            <i class="box_all_side_design"></i>
                            <i class="box_all_side_design2"></i>
                            <div class="img_container">
                                <img src="{{ asset('assets/img/sifest2024/home/medpar/Koran/SRIPOKU.jpg') }}"
                                    alt="">
                            </div>
                        </div>
                        <div class="flex_box box_all_side ">
                            <i class="box_all_side_design"></i>
                            <i class="box_all_side_design2"></i>
                            <div class="img_container">
                                <img src="{{ asset('assets/img/sifest2024/home/medpar/Koran/TRIBUN.jpg') }}"
                                    alt="">
                            </div>
                        </div>
                        <div class="flex_box box_all_side ">
                            <i class="box_all_side_design"></i>
                            <i class="box_all_side_design2"></i>
                            <div class="img_container">
                                <img src="{{ asset('assets/img/sifest2024/home/medpar/infolomba/@berita_lomba.jpg') }}"
                                    alt="">
                            </div>
                        </div>
                        <div class="flex_box box_all_side ">
                            <i class="box_all_side_design"></i>
                            <i class="box_all_side_design2"></i>
                            <div class="img_container">
                                <img src="{{ asset('assets/img/sifest2024/home/medpar/infolomba/@infolombait.jpg') }}"
                                    alt="">
                            </div>
                        </div>
                        <div class="flex_box box_all_side ">
                            <i class="box_all_side_design"></i>
                            <i class="box_all_side_design2"></i>
                            <div class="img_container">
                                <img src="{{ asset('assets/img/sifest2024/home/medpar/infolomba/@kompetisimahasiswa.jpg') }}"
                                    alt="">
                            </div>
                        </div>
                        <div class="flex_box box_all_side ">
                            <i class="box_all_side_design"></i>
                            <i class="box_all_side_design2"></i>
                            <div class="img_container">
                                <img src="{{ asset('assets/img/sifest2024/home/medpar/infolomba/@gudanglomba.ind.jpg') }}"
                                    alt="">
                            </div>
                        </div>
                        <div class="flex_box box_all_side ">
                            <i class="box_all_side_design"></i>
                            <i class="box_all_side_design2"></i>
                            <div class="img_container">
                                <img src="{{ asset('assets/img/sifest2024/home/medpar/infolomba/@pustinfolomba.png') }}"
                                    alt="">
                            </div>
                        </div>
                        <div class="flex_box box_all_side ">
                            <i class="box_all_side_design"></i>
                            <i class="box_all_side_design2"></i>
                            <div class="img_container">
                                <img src="{{ asset('assets/img/sifest2024/home/medpar/infolomba/@infolomba.sch.png') }}"
                                    alt="">
                            </div>
                        </div>
                        <div class="flex_box box_all_side ">
                            <i class="box_all_side_design"></i>
                            <i class="box_all_side_design2"></i>
                            <div class="img_container">
                                <img src="{{ asset('assets/img/sifest2024/home/medpar/radio/eljohn.jpg') }}"
                                    alt="">
                            </div>
                        </div>
                        <div class="flex_box box_all_side ">
                            <i class="box_all_side_design"></i>
                            <i class="box_all_side_design2"></i>
                            <div class="img_container">
                                <img src="{{ asset('assets/img/sifest2024/home/medpar/radio/Global101.jpg') }}"
                                    alt="">
                            </div>
                        </div>
                        <div class="flex_box box_all_side ">
                            <i class="box_all_side_design"></i>
                            <i class="box_all_side_design2"></i>
                            <div class="img_container">
                                <img src="{{ asset('assets/img/sifest2024/home/medpar/radio/Lanugraha.png') }}"
                                    alt="">
                            </div>
                        </div>
                        <div class="flex_box box_all_side ">
                            <i class="box_all_side_design"></i>
                            <i class="box_all_side_design2"></i>
                            <div class="img_container">
                                <img src="{{ asset('assets/img/sifest2024/home/medpar/radio/LogoTRAXFMPalembang.png') }}"
                                    alt="">
                            </div>
                        </div>
                        <div class="flex_box box_all_side ">
                            <i class="box_all_side_design"></i>
                            <i class="box_all_side_design2"></i>
                            <div class="img_container">
                                <img src="{{ asset('assets/img/sifest2024/home/medpar/radio/orban.jpg') }}"
                                    alt="">
                            </div>
                        </div>
                        <div class="flex_box box_all_side ">
                            <i class="box_all_side_design"></i>
                            <i class="box_all_side_design2"></i>
                            <div class="img_container">
                                <img src="{{ asset('assets/img/sifest2024/home/medpar/radio/SriwijayaRadio.jpg') }}"
                                    alt="">
                            </div>
                        </div>
                        <div class="flex_box box_all_side ">
                            <i class="box_all_side_design"></i>
                            <i class="box_all_side_design2"></i>
                            <div class="img_container">
                                <img src="{{ asset('assets/img/sifest2024/home/medpar/ukm/Logo Fasco..png') }}"
                                    alt="">
                            </div>
                        </div>
                        <div class="flex_box box_all_side ">
                            <i class="box_all_side_design"></i>
                            <i class="box_all_side_design2"></i>
                            <div class="img_container">
                                <img src="{{ asset('assets/img/sifest2024/home/medpar/ukm/Logo WIFI Fasilkom Unsri.png') }}"
                                    alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
@endsection
