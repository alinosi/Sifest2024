@extends('layouts/web.main')

@section('index')
    {{-- <section class="comingsoon" id="comingsoon">
        <div class="wrapper">
            <div class="container p_relative py20">
                <div class="title_font text_center index_min">
                    <p class="text_h1 fc_white"><span class="fc_blue">BAZAAR</span> SI FEST 2024</p>
                    <p class="text_big fc_white">Coming <span class="fc_bluegly">Soon</span></p>
                </div>
                <div class="img_container">
                    <img src='assets/img/sifest2024/pose_win.svg' alt="">
                </div>
            </div>
        </div>
    </section> --}}

    <section class="hero" id="hero">
        <div class="wrapper">
            <div class="container p_relative py20">
                <div class="title_font text_center my20 t">
                    <p class="text_big fc_white">Bazaar</p>
                    <p class="fc_bluegly">SI FEST 2024 HIMSI FASILKOM UNSRI</p>
                </div>
                <div class="grid_container_40_50">
                    <div class="grid_box_left ease2 l">
                        {{-- About Section Img  --}}
                        <div class="img_container">
                            <img src="{{ asset('assets/img/icon/sifest2024/bazaar.png') }}" alt=""
                                style="max-width: 380px; width:100%;">
                        </div>
                    </div>
                    <div class="grid_box_right box_rt_lb_side ease2 r">
                        <i class="box_rt_lb_side_design"></i>
                        {{-- About Text Content   --}}
                        <div class="title_in_section text_design_bot">
                            <span class="text_border text_h2">Bazaar</span>
                        </div>
                        <p class="main_content mt6 fc_white">
                            Bazaar adalah salah satu kegiatan dari acara SI FEST 2024
                            yang akan dilaksanakan secara offline. Bazaar SI FEST tahun
                            ini akan menjual sejumlah makanan dan minuman, serta merchandise
                            lucu, <b class="fc_bluegly">catat tanggalnya dan jangan lupa hadir</b>.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <section class="timeline" id="timeline">
        <div class="break_section_top"></div>
        <div class="break_section_bot"></div>
        <div class="wrapper">
            <div class="container p_relative py20">
                <div class="title_font text_center mb20 t">
                    <p class="text_big fc_white">Meet Us Here</p>
                </div>
                <div class="flex_container">
                    {{-- <div class="flex_box p2 l">
                        <div class="img_container">
                            <img src="{{ asset('assets/img/icon/bazaar2023/bazaar.png') }}" alt="">
                        </div>
                    </div> --}}
                    <div class="flex_box map_bazar p2 r">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15937.544350611939!2d104.7471067!3d-2.9901952!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x476edb23622568df!2sTaman%20Kambang%20Iwak%20Besak!5e0!3m2!1sid!2sid!4v1659494013238!5m2!1sid!2sid"
                            style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <div class="main_content p6">
                            <h3 class="title_font mb4">
                                <i class="fa-solid fa-location-dot"></i> Taman Kambang Iwak
                            </h3>
                            <table>
                                <!-- Rocket Launch Section -->
                                <tr>
                                    <td colspan="4">
                                        <h4>Rocket Launch!!!</h4>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="pr1"><i class="fa-regular fa-calendar"></i></td>
                                    <td class="pr1">Sabtu, 12 Oktober 2024</td>
                                    <td class="pr1"><i class="fa-regular fa-clock"></i></td>
                                    <td class="pr1">16.00 WIB</td>
                                </tr>
                                <tr>
                                    <td class="pr1"><i class="fa-regular fa-calendar"></i></td>
                                    <td class="pr1">Minggu, 13 Oktober 2024</td>
                                    <td class="pr1"><i class="fa-regular fa-clock"></i></td>
                                    <td class="pr1">08.00 WIB </td>
                                </tr>

                                
                                
                                
                                <!-- Space Traveling Section -->
                                <tr>
                                    <td colspan="4">
                                        <h4>Space Traveling</h4>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="pr1"><i class="fa-regular fa-calendar"></i></td>
                                    <td class="pr1">Sabtu, 19 Oktober 2024</td>
                                    <td class="pr1"><i class="fa-regular fa-clock"></i></td>
                                    <td class="pr1">16.00 WIB</td>
                                </tr>
                                <tr>
                                    <td class="pr1"><i class="fa-regular fa-calendar"></i></td>
                                    <td class="pr1">Minggu, 20 Oktober 2024</td>
                                    <td class="pr1"><i class="fa-regular fa-clock"></i></td>
                                    <td class="pr1">08.00 WIB</td>
                                </tr>
                                
                                <!-- Moon Fest Section -->
                                <tr>
                                    <td colspan="4">
                                        <h4>Moon Fest</h4>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="pr1"><i class="fa-regular fa-calendar"></i></td>
                                    <td class="pr1">Sabtu, 27 Oktober 2024</td>
                                    <td class="pr1"><i class="fa-regular fa-clock"></i></td>
                                    <td class="pr1">16.00 WIB</td>
                                </tr>
                                <tr>
                                    <td class="pr1"><i class="fa-regular fa-calendar"></i></td>
                                    <td class="pr1">Minggu, 27 Oktober 2024</td>
                                    <td class="pr1"><i class="fa-regular fa-clock"></i></td>
                                    <td class="pr1">08.00 WIB</td>
                                </tr>
                            </table>
                            

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact" id="contact">
        <div class="wrapper">
            <div class="container p_relative py20">
                <div class="title_feature text_center t mb20 fc_white">
                    Online Purchase
                </div>
                <div class="flex_container">
                    <div class="flex_box l box_event">
                        <i class="fa-brands fa-whatsapp text_h1 fc_bluegly pt3"></i>
                        <p class="title_font text_h3 text_center fc_white">Rafa</p>
                        <a href="https://wa.me/6285758347838" target="_blank" class="fc_bluegly pb3">+6285758347838 </a>
                    </div>
                </div>
            </div>
            <div class="img_container_bazaar">
                <img src="{{ asset('assets/img/sifest2024/bazaar/p_biru.svg') }}" alt="planet" id="p_bazaar" >
            </div>
        </div>
    </section>
@endsection
