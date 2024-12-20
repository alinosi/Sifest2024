@extends('layouts/web.main')

@section('index')
    <section class="hero_self" id="hero_self">
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
                <div class="title_font text_center my20 t fc_white">
                    <p class="text_big">
                        @if ($competition['competition'] === 'EssayCompe')
                            Essay Competition
                        @elseif ($competition['competition'] === 'DesignPoster')
                            Poster Design
                        @elseif ($competition['competition'] === 'UIUXDesign')
                            UIUX Design
                        @elseif ($competition['competition'] === 'EduVideo')
                            Educational Video
                        @elseif ($competition['competition'] === 'Valorant')
                            Valorant
                        @elseif ($competition['competition'] === 'MobileLegends')
                            Mobile Legends
                        @endif
                    </p>
                    <p class="fc_bluegly">SI FEST 2024 Competition</p>
                </div>
                <div class="grid_container_40_50">
                    <div class="grid_box_left ease2 l">
                        @if ($competition['competition'] === 'EssayCompe')
                            <div class="img_container">
                                <img src="{{ asset('assets/img/icon/sifest2024/ESSAY.png') }}" alt=""
                                    style="max-width: 400px; width:100%">
                            </div>
                        @elseif ($competition['competition'] === 'DesignPoster')
                            <div class="img_container">
                                <img src="{{ asset('assets/img/icon/sifest2024/POSTER.png') }}" alt=""
                                    style="max-width: 400px; width:100%">
                            </div>
                        @elseif ($competition['competition'] === 'UIUXDesign')
                            <div class="img_container">
                                <img src="{{ asset('assets/img/icon/sifest2024/UI UX.png') }}" alt=""
                                    style="max-width: 400px; width:100%">
                            </div>
                        @elseif ($competition['competition'] === 'Valorant')
                            <div class="img_container">
                                <img src="{{ asset('assets/img/icon/sifest2024/VALORANT.png') }}" alt=""
                                    style="max-width: 400px; width:100%">
                            </div>
                        @elseif ($competition['competition'] === 'MobileLegends')
                            <div class="img_container">
                                <img src="{{ asset('assets/img/icon/sifest2024/ML.png') }}" alt=""
                                    style="max-width: 400px; width:100%">
                            </div>
                        @endif
                    </div>
                    <div class="grid_box_right box_rt_lb_side ease2 r">
                        <i class="box_rt_lb_side_design"></i>
                        <div class="title_in_section text_nm text_design_bot fc_blue">
                            <span class="title_desc">
                                @if ($competition['competition'] === 'EssayCompe')
                                    “EDTECH (Education Technology: Closing the Gap in the 21st Century)”
                                @elseif ($competition['competition'] === 'DesignPoster')
                                    "Visualizing the Future of Technology in Education"
                                @elseif ($competition['competition'] === 'UIUXDesign')
                                    "Transforming Daily Life with Smart Technology"
                                @elseif ($competition['competition'] === 'Valorant')
                                    "Team Dynamics in Competitive Gaming, Building Strategies for Success"
                                @elseif ($competition['competition'] === 'MobileLegends')
                                    "Team Dynamics in Competitive Gaming, Building Strategies for Success"
                                @endif
                            </span>
                        </div>
                        <p class="main_content mt6 fc_white">
                            @if ($competition['competition'] === 'EssayCompe')
                                Lomba Essay adalah kompetisi atau perlombaan di mana peserta diminta untuk menulis sebuah
                                essay berdasarkan tema atau topik tertentu. Lomba essay ini mengajak para peserta untuk
                                berfokus pada bagaimana kreativitas dan teknologi dapat mempengaruhi dan mengubah dunia
                                pendidikan dalam era digital. Perkembangan teknologi informasi dan komunikasi telah membuka
                                peluang baru untuk memperluas akses pendidikan, meningkatkan metode pembelajaran, dan
                                menginspirasi inovasi dalam pengajaran dan pembelajaran. Melalui essay ini, peserta
                                diharapkan dapat mengidentifikasi tantangan dan peluang yang muncul dari integrasi
                                kreativitas dan teknologi dalam konteks pendidikan. Kompetisi ini terbuka untuk umum namun
                                dibatasi untuk umur diatas 25 tahun.
                            @elseif ($competition['competition'] === 'DesignPoster')
                                Lomba Poster Design merupakan salah satu cabang kompetisi bidang akademik pada SI FEST 2024 yang diselenggarakan oleh Himpunan Mahasiswa Sistem Informasi Fasilkom Universitas Sriwijaya Palembang yang mengusung tema "Visualizing the Future of Technology in Education". Perlombaan ini bertujuan untuk memberikan wadah bagi para desainer muda untuk menyalurkan ide dan kreativitasnya dalam memberikan informasi yang dikemas dengan menarik. Peserta dalam lomba ini dapat berupa perorangan (individu). Lomba ini terbuka untuk masyarakat umum dan dibatasi untuk maksimal umur 25 tahun.
                            @elseif ($competition['competition'] === 'UIUXDesign')
                                UI/UX (User Interface/User Experience) Competition adalah kompetisi yang menguji
                                keterampilan desain dan pengalaman pengguna dalam menciptakan antarmuka yang intuitif,
                                menarik, dan mudah digunakan untuk aplikasi, situs web, atau produk digital lainnya. Peserta
                                akan merancang sesuai tema yang telah ditentukan panitia. Kemudian peserta membuat proposal
                                berisikan hasil UI/UX Design yang telah dibuat dengan menunjukkan keunggulan masing-masing.
                                Tujuannya adalah untuk mengasah skill peserta di bidang UI/UX Design. Kompetisi ini terbuka
                                untuk umum namun dibatasi untuk umur diatas 25 tahun.
                            @elseif ($competition['competition'] === 'EduVideo')
                                Lomba video edukasi merupakan salah satu cabang lomba yang diselenggarakan dalam acara
                                SI FEST 2024. Lomba ini bertujuan untuk mendorong kreativitas dalam memanfaatkan teknologi
                                informasi untuk meningkatkan pendidikan, dan juga memberikan kesempatan kepada peserta untuk
                                berkreasi dan mempromosikan ide-ide inovatif mereka dalam memajukan sektor pendidikan
                                melalui teknologi informasi. Peserta diharapkan dapat membuat video pendidikan yang
                                menggunakan teknologi secara efektif guna meningkatkan pembelajaran, serta menghasilkan
                                video yang menggabungkan konsep inovatif dan teknologi yang relevan, untuk memberikan dampak
                                positif dalam sektor pendidikan. Ajang kompetisi ini terbuka untuk masyarakat umum namun
                                dibatasi untuk umur diatas 25 tahun.
                            @elseif ($competition['competition'] === 'Valorant')
                                Lomba Valorant adalah kompetisi E-Sport yang menampilkan permainan tim taktis yang sangat
                                populer, yaitu Valorant. Dikembangkan oleh Riot Games, Valorant adalah game tembak-menembak
                                taktis yang memadukan elemen-elemen dari game tembak-menembak orang pertama (FPS) dengan
                                elemen strategi tim. Pemain dalam lomba Valorant berpartisipasi dalam tim, yang terdiri dari
                                lima pemain, untuk bersaing dalam pertandingan dengan tujuan utama mengalahkan tim lawan.
                                Kompetisi ini terbuka untuk umum namun dibatasi untuk umur diatas 25 tahun.
                            @elseif ($competition['competition'] === 'MobileLegends')
                                Lomba Mobile Legends adalah sebuah ajang kompetisi di mana pemain dari seluruh dunia
                                berkumpul untuk bersaing dalam permainan Multiplayer Online Battle Arena (MOBA) yang disebut
                                Mobile Legends: Bang Bang. Pemain berpartisipasi dalam tim, yang terdiri dari lima orang,
                                untuk bertarung melawan tim lawan dalam sebuah pertandingan yang intens. Tujuan utama dari
                                lomba ini adalah untuk mengalahkan tim lawan dan menghancurkan turret serta menara musuh
                                untuk mencapai Nexus lawan. Kompetisi ini terbuka untuk umum namun dibatasi untuk umur
                                diatas 25 tahun.
                            @endif
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="timeline" id="timeline">
        <div class="break_section_top"></div>
        <div class="break_section_bot"></div>
        <div class="wrapper">
            <div class="container p_relative py30">
                <div class="title_feature text_center mb20 t fc_bluegly">
                    Timeline
                </div>
                <div class="timeline_container">
                    <!-- Essay Competition -->
                    @if ($competition['competition'] === 'EssayCompe')
                        <div class="timeline_item">
                            <div class="timeline_dot"></div>
                            <div class="timeline_date fc_bluegly b">21 September 2024 - 23 Oktober 2024</div>
                            <div class="timeline_content box_lt_rb_side">
                                <i class="box_lt_rb_side_design"></i>
                                <span class="title_font fc_white">Pendaftaran & pengumpulan</span>
                                <p class="text_sm fc_white">Bagi para calon peserta yang memiliki minat dalam kompetisi
                                    Essay dapat melakukan registrasi pendaftaran dan segera mengumpulkan karyanya sebelum
                                    tenggat waktunya habis.</p>
                            </div>
                        </div>
                        <div class="timeline_item">
                            <div class="timeline_dot"></div>
                            <div class="timeline_date fc_bluegly b">24 Oktober - 28 Oktober 2024</div>
                            <div class="timeline_content box_lt_rb_side">
                                <i class="box_lt_rb_side_design"></i>
                                <span class="title_font fc_white">Submission Review</span>
                                <p class="text_sm fc_white">Karya yang telah dikirimkan oleh peserta akan diproses untuk
                                    dinilai oleh para juri yang telah berpengalaman di bidangnya.</p>
                            </div>
                        </div>
                        <div class="timeline_item">
                            <div class="timeline_dot"></div>
                            <div class="timeline_date fc_bluegly b">2 November 2024</div>
                            <div class="timeline_content box_lt_rb_side">
                                <i class="box_lt_rb_side_design"></i>
                                <span class="title_font fc_white">Final Presentation</span>
                                <p class="text_sm fc_white">Finalis akan mempresentasikan hasil yang telah dibuat.</p>
                                {{-- <p class="text_sm fc_white">Finalis akan mempresentasikan hasil yang telah dibuat dan dimuat kembali dalam bentuk PPT/slide.</p> --}}
                            </div>
                        </div>
                        <div class="timeline_item">
                            <div class="timeline_dot"></div>
                            <div class="timeline_date fc_bluegly b">10 November 2024</div>
                            <div class="timeline_content box_lt_rb_side">
                                <i class="box_lt_rb_side_design"></i>
                                <span class="title_font fc_white">Winner Announcement</span>
                                <p class="text_sm fc_white">Nantikan pengumuman juara pemenang kompetisi yang anda ikuti
                                    pada puncak acara SI FEST 2024.</p>
                            </div>
                        </div>
                        <!-- Poster Design  -->
                    @elseif ($competition['competition'] === 'DesignPoster')
                        <div class="timeline_item">
                            <div class="timeline_dot"></div>
                            <div class="timeline_date fc_bluegly b">21 September 2024 - 29 October 2024</div>
                            <div class="timeline_content box_lt_rb_side">
                                <i class="box_lt_rb_side_design"></i>
                                <span class="title_font fc_white">Registration & Submission</span>
                                <p class="text_sm fc_white">Bagi para calon peserta yang memiliki minat dalam kompetisi
                                    Poster Design dapat melakukan registrasi pendaftaran dan segera mengumpulkan karyanya
                                    sebelum tenggat waktunya habis.</p>
                            </div>
                        </div>
                        <div class="timeline_item">
                            <div class="timeline_dot"></div>
                            <div class="timeline_date fc_bluegly b">30 Oktober - 3 November 2024</div>
                            <div class="timeline_content box_lt_rb_side">
                                <i class="box_lt_rb_side_design"></i>
                                <span class="title_font fc_white">Submission Review</span>
                                <p class="text_sm fc_white">Karya yang telah dikirimkan oleh peserta akan diproses untuk
                                    dinilai oleh para juri yang telah berpengalaman di bidangnya.</p>
                            </div>
                        </div>

                        <div class="timeline_item">
                            <div class="timeline_dot"></div>
                            <div class="timeline_date fc_bluegly b">10 November 2024</div>
                            <div class="timeline_content box_lt_rb_side">
                                <i class="box_lt_rb_side_design"></i>
                                <span class="title_font fc_white">Winner Announcement</span>
                                <p class="text_sm fc_white">Nantikan pengumuman juara pemenang kompetisi yang anda ikuti
                                    pada puncak acara SI FEST 2024.</p>
                            </div>
                        </div>


                        <!-- UIUX/ Design -->
                    @elseif ($competition['competition'] === 'UIUXDesign')
                        <div class="timeline_item">
                            <div class="timeline_dot"></div>
                            <div class="timeline_date fc_bluegly b">21 September 2024 - 26 Oktober 2024</div>
                            <div class="timeline_content box_lt_rb_side">
                                <i class="box_lt_rb_side_design"></i>
                                <span class="title_font fc_white">Registration & Submission</span>
                                <p class="text_sm fc_white">Bagi para calon peserta yang memiliki minat dalam kompetisi
                                    UIUX Design dapat melakukan registrasi pendaftaran dan segera mengumpulkan proposal
                                    sebelum tenggat waktunya habis.</p>
                            </div>
                        </div>
                        <div class="timeline_item">
                            <div class="timeline_dot"></div>
                            <div class="timeline_date fc_bluegly b"> 24 Oktober - 28 Oktober 2024</div>
                            <div class="timeline_content box_lt_rb_side">
                                <i class="box_lt_rb_side_design"></i>
                                <span class="title_font fc_white">Submission Review</span>
                                <p class="text_sm fc_white">Proposal yang telah dikirimkan oleh peserta akan diproses untuk
                                    dinilai oleh para juri yang telah berpengalaman di bidangnya.</p>
                            </div>
                        </div>
                        <div class="timeline_item">
                            <div class="timeline_dot"></div>
                            <div class="timeline_date fc_bluegly b">2 November 2024</div>
                            <div class="timeline_content box_lt_rb_side">
                                <i class="box_lt_rb_side_design"></i>
                                <span class="title_font fc_white">Final Presentation</span>
                                <p class="text_sm fc_white">Finalis akan mempresentasikan hasil yang telah dibuat dan
                                    dimuat kembali dalam bentuk PPT/slide.</p>
                            </div>
                        </div>
                        <div class="timeline_item">
                            <div class="timeline_dot"></div>
                            <div class="timeline_date fc_bluegly b">10 November 2024</div>
                            <div class="timeline_content box_lt_rb_side">
                                <i class="box_lt_rb_side_design"></i>
                                <span class="title_font fc_white">Winner Announcement</span>
                                <p class="text_sm fc_white">Nantikan pengumuman juara pemenang kompetisi yang anda ikuti
                                    pada puncak acara SI FEST 2024.</p>
                            </div>
                        </div>

                        <!-- Valorant -->
                    @elseif ($competition['competition'] === 'Valorant')
                        <div class="timeline_item">
                            <div class="timeline_dot"></div>
                            <div class="timeline_date fc_bluegly b">21 September 2024 - 29 October 2024</div>
                            <div class="timeline_content box_lt_rb_side">
                                <i class="box_lt_rb_side_design"></i>
                                <span class="title_font fc_white">Registration </span>
                                <p class="text_sm fc_white">Bagi para calon peserta yang memiliki minat dalam kompetisi
                                    Valorant dapat melakukan registrasi pendaftaran sebelum tenggat waktunya habis.</p>
                            </div>
                        </div>
                        <div class="timeline_item">
                            <div class="timeline_dot"></div>
                            <div class="timeline_date fc_bluegly b">31 October 2024</div>
                            <div class="timeline_content box_lt_rb_side">
                                <i class="box_lt_rb_side_design"></i>
                                <span class="title_font fc_white">Technical meeting</span>
                                <p class="text_sm fc_white">Technical meeting dilakukan sebelum pertandingan berlangsung,
                                    technical meeting akan dilakukan secara online.</p>
                            </div>
                        </div>
                        <div class="timeline_item">
                            <div class="timeline_dot"></div>
                            <div class="timeline_date fc_bluegly b">2 November 2024</div>
                            <div class="timeline_content box_lt_rb_side">
                                <i class="box_lt_rb_side_design"></i>
                                <span class="title_font fc_white">Match Day</span>
                                <p class="text_sm fc_white">Pertandingan akan dilaksanakan secara online dan diawasi oleh
                                    panitia pelaksana.</p>
                            </div>
                        </div>
                        <div class="timeline_item">
                            <div class="timeline_dot"></div>
                            <div class="timeline_date fc_bluegly b">10 November 2024</div>
                            <div class="timeline_content box_lt_rb_side">
                                <i class="box_lt_rb_side_design"></i>
                                <span class="title_font fc_white">Winner Announcement</span>
                                <p class="text_sm fc_white">Nantikan pengumuman juara pemenang kompetisi yang anda ikuti
                                    pada puncak acara SI FEST 2024.</p>
                            </div>
                        </div>

                        <!-- Mobile Legends -->
                    @elseif ($competition['competition'] === 'MobileLegends')
                        <div class="timeline_item">
                            <div class="timeline_dot"></div>
                            <div class="timeline_date fc_bluegly b">21 September 2024 - 29 October 2024</div>
                            <div class="timeline_content box_lt_rb_side">
                                <i class="box_lt_rb_side_design"></i>
                                <span class="title_font fc_white">Registration </span>
                                <p class="text_sm fc_white">Bagi para calon peserta yang memiliki minat dalam kompetisi
                                    Valorant dapat melakukan registrasi pendaftaran sebelum tenggat waktunya habis.</p>
                            </div>
                        </div>
                        <div class="timeline_item">
                            <div class="timeline_dot"></div>
                            <div class="timeline_date fc_bluegly b">31 October 2024</div>
                            <div class="timeline_content box_lt_rb_side">
                                <i class="box_lt_rb_side_design"></i>
                                <span class="title_font fc_white">Technical meeting</span>
                                <p class="text_sm fc_white">Technical meeting dilakukan sebelum pertandingan berlangsung,
                                    technical meeting akan dilakukan secara online.</p>
                            </div>
                        </div>
                        <div class="timeline_item">
                            <div class="timeline_dot"></div>
                            <div class="timeline_date fc_bluegly b">3 November 2024</div>
                            <div class="timeline_content box_lt_rb_side">
                                <i class="box_lt_rb_side_design"></i>
                                <span class="title_font fc_white">Match Day</span>
                                <p class="text_sm fc_white">Pertandingan akan dilaksanakan secara offline di kota palembang, Detail tempat pertandingan akan diberitahu lebih lanjut nanti.</p>
                            </div>
                        </div>
                        <div class="timeline_item">
                            <div class="timeline_dot"></div>
                            <div class="timeline_date fc_bluegly b">10 November 2024</div>
                            <div class="timeline_content box_lt_rb_side">
                                <i class="box_lt_rb_side_design"></i>
                                <span class="title_font fc_white">Winner Announcement</span>
                                <p class="text_sm fc_white">Nantikan pengumuman juara pemenang kompetisi yang anda ikuti
                                    pada puncak acara SI FEST 2024.</p>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>

    <section class="register" id="register">
        <div class="wrapper">
            <div class="container p_relative  py20">
                <div class="title_feature text_center mb20 t fc_white">
                    Register Now
                </div>
                <div class="content_box p_relative box_event px6 py6">
                    <i class="box_event_design"></i>
                    <i class="box_event_design2"></i>
                    <div class="grid_container_40_50">
                        <div class="grid_box_left ease2 l">
                            @if ($competition['competition'] === 'EssayCompe')
                                <div class="img_container">
                                    <img src="{{ asset('assets/img/icon/sifest2024/ESSAY.png') }}" alt="">
                                </div>
                            @elseif ($competition['competition'] === 'DesignPoster')
                                <div class="img_container">
                                    <img src="{{ asset('assets/img/icon/sifest2024/POSTER.png') }}" alt="">
                                </div>
                            @elseif ($competition['competition'] === 'UIUXDesign')
                                <div class="img_container">
                                    <img src="{{ asset('assets/img/icon/sifest2024/UI UX.png') }}" alt="">
                                </div>
                            @elseif ($competition['competition'] === 'Valorant')
                                <div class="img_container">
                                    <img src="{{ asset('assets/img/icon/sifest2024/VALORANT.png') }}" alt="">
                                </div>
                            @elseif ($competition['competition'] === 'MobileLegends')
                                <div class="img_container">
                                    <img src="{{ asset('assets/img/icon/sifest2024/ML.png') }}" alt="">
                                </div>
                            @endif
                        </div>
                        <div class="grid_box_right p_unset ease2 r">
                            <div class="title_font text_h3 fc_white text_design_bot">
                                Register and Win The Prize
                            </div>
                            <p class="main_content pt5 mb4 fc_white">
                                Raih pengalamanmu bersama SI FEST 2024 dan menangkan hadiah berupa uang tunai pembinaan dan
                                sertifikat pemenang. Tunggu apalagi daftar sekarang sebelum masa pendaftaran ditutup dan
                                slot peserta habis!
                            </p>
                            <div class="btn_container">
                                <button
                                    onclick="location.href='/registration/{{ strtolower($competition['competition']) }}'"
                                    class="btn_right text_center">
                                    <i class="btn_right_design"></i>
                                    Register
                                </button>

                                @if ($competition['competition'] === 'EssayCompe')
                                    <a href="https://drive.google.com/file/d/1nmjqLHZKpA7zCIimUJi9QQSiUZLts1vh/view?usp=sharing" target="_blank"
                                        class="btn_left text_center">
                                        <i class="btn_left_design"></i>
                                        Guide Book
                                    </a>
                                @elseif ($competition['competition'] === 'DesignPoster')
                                    <a href="https://drive.google.com/file/d/1nmjqLHZKpA7zCIimUJi9QQSiUZLts1vh/view?usp=sharing" target="_blank"
                                        class="btn_left text_center">
                                        <i class="btn_left_design"></i>
                                        Guide Book
                                    </a>
                                @elseif ($competition['competition'] === 'UIUXDesign')
                                    <a href="https://drive.google.com/file/d/1nmjqLHZKpA7zCIimUJi9QQSiUZLts1vh/view?usp=sharing" target="_blank"
                                        class="btn_left text_center">
                                        <i class="btn_left_design"></i>
                                        Guide Book
                                    </a>
                                @elseif ($competition['competition'] === 'EduVideo')
                                    <a href="https://drive.google.com/file/d/1nmjqLHZKpA7zCIimUJi9QQSiUZLts1vh/view?usp=sharing" target="_blank"
                                        class="btn_left text_center">
                                        <i class="btn_left_design"></i>
                                        Guide Book
                                    </a>
                                @elseif ($competition['competition'] === 'Valorant')
                                    <a href="https://drive.google.com/file/d/1nmjqLHZKpA7zCIimUJi9QQSiUZLts1vh/view?usp=sharing" target="_blank"
                                        class="btn_left text_center">
                                        <i class="btn_left_design"></i>
                                        Guide Book
                                    </a>
                                @elseif ($competition['competition'] === 'MobileLegends')
                                    <a href="https://drive.google.com/file/d/1nmjqLHZKpA7zCIimUJi9QQSiUZLts1vh/view?usp=sharing" target="_blank"
                                        class="btn_left text_center">
                                        <i class="btn_left_design"></i>
                                        Guide Book
                                    </a>
                                @endif

                                {{-- <a href="https://drive.google.com/file/d/1nmjqLHZKpA7zCIimUJi9QQSiUZLts1vh/view?usp=sharing" target="_blank" class="btn_left text_center">
                                    <i class="btn_left_design"></i>
                                    Guide Book
                            </a> --}}
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
                        <p class="title_font text_h3 text_center">{{ $competition['cp1'] }}</p>
                        <a href="https://line.me/R/ti/p/{{ $competition['cp1_line'] }}" class="fc_bluegly"><i
                                class="fa-brands fa-line"></i> {{ $competition['cp1_line'] }} </a>
                        <a href="https://wa.me/{{ $competition['cp1_wa'] }}" target="_blank" class="fc_bluegly"><i
                                class="fa-brands fa-whatsapp"></i> {{ $competition['cp1_wa'] }} </a>
                    </div>
                    @if ($competition['cp2'])
                        <div class="flex_box r box_event">
                            <p class="title_font text_h3 text_center">{{ $competition['cp2'] }}</p>
                            <a href="https://line.me/R/ti/p/{{ $competition['cp2_line'] }}" class="fc_bluegly"><i
                                    class="fa-brands fa-line"></i> {{ $competition['cp2_line'] }} </a>
                            <a href="https://wa.me/{{ $competition['cp2_wa'] }}" target="_blank" class="fc_bluegly"><i
                                    class="fa-brands fa-whatsapp"></i> {{ $competition['cp2_wa'] }} </a>
                        </div>
                    @endif
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
                    <p class="text_nm fc_bluegly">Competition SI FEST 2024</p>
                </div>
                <div class="grid_container_space_between">
                    <div class="grid_box question_box">
                        <div class="card box_lt_rb_side text_right p4 l">
                            <i class="box_lt_rb_side_design"></i>
                            <div class="card_header d_flex flex_row_reverse fw_bold">
                                <i class="fa-solid fa-plus ml2 mt1"></i>
                                <span>Apakah boleh mengikuti lebih dari satu kompetisi secara bersamaan?</span>
                            </div>
                            <div class="card_body text_sm pt2 pr5">
                                Boleh-boleh saja, yang terpenting dapat bertanggung jawab atas keputusan yang diambil.
                            </div>
                        </div>
                        <div class="card box_lt_rb_side text_right p4 l">
                            <i class="box_lt_rb_side_design"></i>
                            <div class="card_header d_flex flex_row_reverse fw_bold">
                                <i class="fa-solid fa-plus ml2 mt1"></i>
                                <span>Apakah saya bisa membatalkan pendaftaran dan meminta refund biaya pendaftaran?</span>
                            </div>
                            <div class="card_body text_sm pt2 pr5">
                                Tidak bisa, jadi pastikan keputusan yang diambil ketika melakukan pendaftaran telah mutlak.
                            </div>
                        </div>
                        <div class="card box_lt_rb_side text_right p4 l">
                            <i class="box_lt_rb_side_design"></i>
                            <div class="card_header d_flex flex_row_reverse fw_bold">
                                <i class="fa-solid fa-plus ml2 mt1"></i>
                                <span>Apakah kompetisi pada SI FEST 2024 tidak dipungut biaya pendaftaran?</span>
                            </div>
                            <div class="card_body text_sm pt2 pr5">
                                Sayangnya saat ini untuk berpatisipasi dalam kompetisi SI FEST 2024 ada biaya pendaftaran
                                yang harus dibayarkan.
                            </div>
                        </div>
                    </div>
                    <div class="grid_box question_box">
                        <div class="card box_rt_lb_side p4 r">
                            <i class="box_rt_lb_side_design"></i>
                            <div class="card_header d_flex fw_bold">
                                <i class="fa-solid fa-plus mr2 mt1"></i>
                                <span>Apakah semua kompetisi dilaksanakan secara offline?</span>
                            </div>
                            <div class="card_body text_sm pt2 pl5">
                                tidak, mobile legends akan dilaksanakan secara offline di Palembang namun lomba lain akan diselenggarakan secara online. untuk info lebih lanjut kamu dapat membuka <a href="https://drive.google.com/file/d/1nmjqLHZKpA7zCIimUJi9QQSiUZLts1vh/view?usp=sharing" target="_blank"
                                    class="fc_bluegly fw_bold">Guide Book</a> sebelum melakukan pendaftaran.
                            </div>
                        </div>
                        <div class="card box_rt_lb_side p4 r">
                            <i class="box_rt_lb_side_design"></i>
                            <div class="card_header d_flex fw_bold">
                                <i class="fa-solid fa-plus mr2 mt1"></i>
                                <span>Mengapa saya tidak bisa mendaftar kompetisi padahal masa pendaftaran masih
                                    dibuka?</span>
                            </div>
                            <div class="card_body text_sm pt2 pl5">
                                Kemungkinan slot peserta dari kompetisi yang didaftar telah terpenuhi.
                            </div>
                        </div>
                        <div class="card box_rt_lb_side p4 r">
                            <i class="box_rt_lb_side_design"></i>
                            <div class="card_header d_flex fw_bold">
                                <i class="fa-solid fa-plus mr2 mt1"></i>
                                <span>Saya mengalami kendala ketika melakukan pendaftaran kompetisi, apa solusinya?</span>
                            </div>
                            <div class="card_body text_sm pt2 pl5">
                                Silahkan hubungi contact person yang tertera, pastikan kamu screenshot masalah yang kamu
                                alami ya.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
