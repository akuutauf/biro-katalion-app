<header id="header" class="header fixed-top">

    <div class="branding d-flex align-items-cente">

        <div class="container position-relative d-flex align-items-center justify-content-between">
            <a href="{{ route('landing.page') }}" class="logo d-flex align-items-center">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <!-- <img src="assets/img/logo.webp" alt=""> -->
                <img src="{{ asset('images/logo-biro-katalion-no-bg.png') }}" alt="Logo Biro Katalion">
                <h1 class="sitename">Biro Katalion</h1>
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="{{ route('landing.page') }}#hero" class="active">Beranda</a></li>
                    <li><a href="{{ route('landing.page') }}#tentang">Tentang</a></li>
                    <li><a href="{{ route('landing.page') }}#terapi">Terapi</a></li>
                    <li><a href="{{ route('landing.page') }}#asesmen">Asesmen</a></li>
                    <li><a href="{{ route('landing.page') }}#sekolahInklusi">Sekolah Inklusi</a></li>
                    <li class="dropdown"><a href="#"><span>Menu Lain</span> <i
                                class="bi bi-chevron-down toggle-dropdown"></i></a>
                        <ul>
                            <li><a href="#">Permohonan Konsul</a></li>
                            <li><a href="#">Fasilitas Katalion</a></li>
                            <li><a href="#">Terapis Katalion</a></li>
                            <li><a href="#">Shadow Teacher</a></li>
                            <li><a href="#">Galeri Katalion</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Login</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

        </div>

    </div>

</header>
