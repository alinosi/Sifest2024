<header id="header">

    <div class="container">
        <nav id="navbar">

            <!-- Nav Logo -->
            <div class="nav_logo">
                <span class="logo_img_sifest">
                    <img src="{{ asset('assets/img/sifest2024/logo-sifest.png') }}" alt="">
                </span>
                <a href="{{ route('home') }}" class="text_h2">
                    <span class="fc_bluegly">SI</span> FEST
                </a>
            </div>

            <!-- Nav Menu -->
            <ul class="nav_list" id="nav_list">
                <li class="nav_item">
                    <a href="{{ route('home') }}" class="nav_link {{ $nav['active'] === 'Home' ? 'active_link' : '' }}"
                        id="nav_link">
                        <i class="fa-solid fa-file-pen"></i>
                        Home
                    </a>
                </li>
                <li class="nav_item">
                    <a href="{{ route('competitions') }}"
                        class="nav_link {{ $nav['active'] === 'Competition' ? 'active_link' : '' }}" id="nav_link">
                        <i class="fa-solid fa-trophy"></i>
                        Competition
                    </a>
                </li>
                <li class="nav_item">
                    <a href="{{ route('bazaar') }}"
                        class="nav_link {{ $nav['active'] === 'Bazaar' ? 'active_link' : '' }}" id="nav_link">
                        <i class="fa-solid fa-store"></i>
                        Bazaar
                    </a>
                </li>
                <li class="nav_item">
                    <a href="{{ route('seminar') }}"
                        class="nav_link {{ $nav['active'] === 'Seminar' ? 'active_link' : '' }}" id="nav_link">
                        <i class="fa-solid fa-users"></i>
                        Seminar
                    </a>
                </li>

                @auth
                    <li class="nav_item">
                        <a href="{{ route('dashboard') }}"
                            class="nav_link {{ $nav['active'] === 'Dashboard' ? 'active_link' : '' }}" id="nav_link">
                            <i class="fa-solid fa-user-gear"></i>
                            Dashboard
                        </a>
                    </li>
                @endauth
            </ul>

            <div class="menu_container">
                @auth
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="btn_left btn_logout">
                            <i class="btn_left_design"></i>
                            Logout
                        </button>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="btn_login">
                        <i class="btn_login_design"></i>
                        Login
                    </a>

                    <!--<a href="{{ route('login.google') }}" class="btn_login">-->
                    <!--    <i class="btn_login_design"></i>-->
                    <!--    Login-->
                    <!--</a>-->

                @endauth
                <div class="nav_toggle" id="nav_toggle">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>

        </nav>
    </div>

</header>
