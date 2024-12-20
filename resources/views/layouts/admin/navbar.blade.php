<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="" class="app-brand-link">
            <span class="app-brand-logo demo">
                <img src="{{ url("assets/img/logo_sifest.png") }}" alt="" style="width: 40px">
            </span>
            <span class="app-brand-text demo menu-text fw-bolder ms-2">SI FEST</span>
        </a>

        <a
            href="javascript:void(0);"
            class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none"
        >
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Dashboard -->
        <li class="menu-item {{ $nav["active"] != "ValorantSolo" ? "active" : "" }}">
            <a href="{{ $nav["active"] == "ValorantSolo" ? route('admin.valorant', 'team') : "" }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard {{ $nav["active"] == "ValorantTeam" || $nav["active"] == "ValorantSolo" ? "Team" : "" }}</div>
            </a>
        </li>
        @if ($nav["active"] == "ValorantTeam" || $nav["active"] == "ValorantSolo")
            <li class="menu-item {{ $nav["active"] == "ValorantSolo" ? "active" : "" }}">
                <a href="{{ route('admin.valorant', 'solo') }}" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-home-circle"></i>
                    <div data-i18n="Analytics">Dashboard Solo</div>
                </a>
            </li>
        @endif
    </ul>
</aside>
<!-- / Menu -->
