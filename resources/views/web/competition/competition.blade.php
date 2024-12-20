@extends('layouts/web.main')

@section('index')
    <section class="hero" id="hero">
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
            <div class="container">
                <section class="circular-slider">
                    <div class="container">
                        <div class="text">

                            <div class="title_font text_center my20">
                                <p class="text_big fc_white">Competition</p>
                                <p class="fc_bluegly">SI FEST 2024 HIMSI FASILKOM UNSRI <br><br> <span class="text_big">UI/UX
                                        DESIGN</span></p>
                                <p class="main_content mt1 mb1 fc_white py2 px" style="text-align: justify;">
                                    Lomba UI/UX design adalah ajang kompetisi di mana peserta bersaing dalam merancang
                                    antarmuka pengguna (UI) dan pengalaman pengguna (UX) yang optimal untuk aplikasi atau
                                    produk digital. Peserta harus menggabungkan desain estetis yang menarik dengan
                                    fungsionalitas yang intuitif untuk memberikan pengalaman pengguna yang luar biasa. 
                                </p>

                                <div class="btn_container">
                                    <a href="{{ url('/registration/uiuxdesign') }}" id="btn_regis" class="btn_right">
                                        <i class="btn_right_design"></i>
                                        Register
                                    </a>
                                    <a href="{{ url('/competition/uiuxdesign') }}" id="btn_compe" class="btn_left btn_red">
                                        <i class="btn_left_design"></i>
                                        More Info
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="text">

                            <div class="title_font text_center my20">
                                <p class="text_big fc_white">Competition</p>
                                <p class="fc_bluegly">SI FEST 2024 HIMSI FASILKOM UNSRI <br><br> <span
                                        class="text_big">ESSAY</span></p>
                                <p class="main_content mt1 mb1 fc_white py2 px" style="text-align: justify;">
                                    Lomba esai merupakan sebuah ajang kompetisi di mana peserta diharapkan untuk menulis
                                    esai dengan mengangkat tema atau topik tertentu. Melalui esai ini, peserta diharapkan
                                    dapat mengidentifikasi tantangan dan peluang yang muncul dari integrasi kreativitas dan
                                    teknologi dalam konteks pendidikan.
                                </p>

                                <div class="btn_container">
                                    <a href="{{ url('/registration/essaycompe') }}" id="btn_regis" class="btn_right">
                                        <i class="btn_right_design"></i>
                                        Register
                                    </a>
                                    <a href="{{ url('/competition/essaycompe') }}" id="btn_compe" class="btn_left btn_red">
                                        <i class="btn_left_design"></i>
                                        More Info
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="text">

                            <div class="title_font text_center my20">
                                <p class="text_big fc_white">Competition</p>
                                <p class="fc_bluegly">SIFEST 2024 HIMSI FASILKOM UNSRI <br><br> <span
                                        class="text_big">POSTER
                                        DESIGN</span></p>
                                <p class="main_content mt1 mb1 fc_white py2 px" style="text-align: justify;">
                                    Lomba desain poster adalah kompetisi di mana peserta berlomba untuk menciptakan poster
                                    kreatif yang mengkomunikasikan pesan atau tema tertentu dalam sebuah gambar. Para
                                    peserta berusaha memadukan desain visual yang menarik dengan pesan yang kuat untuk
                                    memenangkan perlombaan. 
                                </p>

                                <div class="btn_container">
                                    <a href="{{ url('/registration/designposter') }}" id="btn_regis" class="btn_right">
                                        <i class="btn_right_design"></i>
                                        Register
                                    </a>
                                    <a href="{{ url('/competition/designposter') }}" id="btn_compe"
                                        class="btn_left btn_red">
                                        <i class="btn_left_design"></i>
                                        More Info
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="text">

                            <div class="title_font text_center my20">
                                <p class="text_big fc_white">Competition</p>
                                <p class="fc_bluegly">SIFEST 2024 HIMSI FASILKOM UNSRI <br><br> <span
                                        class="text_big">MOBILE
                                        LEGENDS</span></p>
                                <p class="main_content mt1 mb1 fc_white py2 px" style="text-align: justify;">
                                    Mobile Legends Competition merupakan kompetisi dalam bidang E-sport dimana Mobile
                                    Legends sebagai game multiplayer online battle arena dikompetisikan, tim yang dapat
                                    menghacurkan base musuh lainnya menjadi pemenangnya.
                                </p>

                                <div class="btn_container">
                                    <a href="{{ url('/registration/mobilelegends') }}" id="btn_regis" class="btn_right">
                                        <i class="btn_right_design"></i>
                                        Register
                                    </a>
                                    <a href="{{ url('/competition/mobilelegends') }}" id="btn_compe"
                                        class="btn_left btn_red">
                                        <i class="btn_left_design"></i>
                                        More Info
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="text">

                            <div class="title_font text_center my20">
                                <p class="text_big fc_white">Competition</p>
                                <p class="fc_bluegly">SIFEST 2024 HIMSI FASILKOM UNSRI <br><br> <span
                                        class="text_big">VALORANT</span></p>
                                <p class="main_content mt1 mb1 fc_white py2 px" style="text-align: justify;">
                                    Valorant Competition merupakan kompetisi dalam bidang E-sport dimana Valorant sebagai
                                    game FPS 5v5 dikompetisikan untuk mendapatkan tim yang mampu mengalahkan tim lainnya.
                                    Tim yang mencapai poin kemenangan terlebih dahulu menjadi pemenangnya
                                </p>

                                <div class="btn_container">
                                    <a href="{{ url('/registration/valorant') }}" id="btn_regis" class="btn_right">
                                        <i class="btn_right_design"></i>
                                        Register
                                    </a>
                                    <a href="{{ url('/competition/valorant') }}" id="btn_compe" class="btn_left btn_red">
                                        <i class="btn_left_design"></i>
                                        More Info
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="slider">
                            <div class="indicator"></div>
                            <div class="menu">
                                <div>
                                    <span>UI/UX DESIGN</span>
                                </div>
                                <div>
                                    <span>ESSAY</span>
                                </div>
                                <div>
                                    <span>POSTER DESIGN</span>
                                </div>
                                <div>
                                    <span>MOBILE LEGENDS</span>
                                </div>
                                <div>
                                    <span>VALORANT</span>
                                </div>
                            </div>
                            <div class="img"></div>
                        </div>

                    </div>
                </section>
            </div>
        </div>
    </section>
@endsection
