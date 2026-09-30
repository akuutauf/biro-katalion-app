@extends('layouts.base-guest')

@section('title')
    <title>Selamat Datang | Biro Katalion</title>
@endsection

@section('content')
    <!-- Hero Section -->
    <section id="hero" class="hero section">

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="hero-content">
                        <div class="trust-badges mb-4" data-aos="fade-right" data-aos-delay="200">
                            <div class="badge-item">
                                <i class="bi bi-shield-check"></i>
                                <span>Terpercaya</span>
                            </div>
                            <div class="badge-item">
                                <i class="bi bi-clock"></i>
                                <span>08.00 - 16.00 WIB</span>
                            </div>
                            <div class="badge-item">
                                <i class="bi bi-geo-alt"></i>
                                <span>Alasmalang & Banyuwangi</span>
                            </div>
                        </div>

                        <h1 data-aos="fade-right" data-aos-delay="300">
                            Selamat Datang di <span class="highlight">Biro Katalion</span>
                        </h1>

                        <p class="hero-description text-justify" data-aos="fade-right" data-aos-delay="400">
                            Sebuah pusat layanan psikologi dan pusat terapi yang berfokus pada tumbuh kembang serta
                            pendampingan anak-anak berkebutuhan khusus.
                        </p>

                        <div class="hero-stats mb-4" data-aos="fade-right" data-aos-delay="500">
                            <div class="stat-item">
                                <h3><span data-purecounter-start="0" data-purecounter-end="3" data-purecounter-duration="2"
                                        class="purecounter"></span>+</h3>
                                <p>Years Experience</p>
                            </div>
                            <div class="stat-item">
                                <h3><span data-purecounter-start="0" data-purecounter-end="50" data-purecounter-duration="2"
                                        class="purecounter"></span>+</h3>
                                <p>Clients</p>
                            </div>
                            <div class="stat-item">
                                <h3><span data-purecounter-start="0" data-purecounter-end="25" data-purecounter-duration="2"
                                        class="purecounter"></span>+</h3>
                                <p>School Partners</p>
                            </div>
                        </div>

                        <div class="hero-actions" data-aos="fade-right" data-aos-delay="600">
                            <a href="{{ route('permohonan.konsul.page') }}" class="btn btn-primary">Mulai Konsultasi</a>
                            <a href="https://www.instagram.com/biro_katalion/" target="_blank"
                                class="btn btn-outline glightbox">
                                <i class="bi bi-play-circle me-2"></i>
                                Tentang Katalion
                            </a>
                        </div>

                        <div class="emergency-contact" data-aos="fade-right" data-aos-delay="700">
                            <div class="emergency-icon">
                                <i class="bi bi-telephone-fill"></i>
                            </div>
                            <div class="emergency-info">
                                <small> Admin Biro Katalion</small>
                                <strong>0812-3302-4044</strong>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="hero-visual" data-aos="fade-left" data-aos-delay="400">
                        <div class="main-image">
                            <img src="{{ asset('images/andhika-chandra-ajie-firmansyah.png') }}"
                                alt="Modern Healthcare Facility" class="img-fluid">
                            <div class="floating-card appointment-card">
                                <div class="card-icon">
                                    <i class="bi bi-calendar-check"></i>
                                </div>
                                <div class="card-content">
                                    <h6>Next Available</h6>
                                    <p>Hari Ini 13:00</p>
                                </div>
                            </div>
                            <div class="floating-card rating-card">
                                <div class="card-content">
                                    <h6>Andhika Chandra Ajie Firmansyah, M.Psi. Psikolog</h6>
                                    <small>Ketua & Psikolog Biro Katalion</small>
                                </div>
                            </div>
                        </div>
                        <div class="background-elements">
                            <div class="element element-1"></div>
                            <div class="element element-2"></div>
                            <div class="element element-3"></div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section><!-- /Hero Section -->

    <!-- Tentang Section -->
    <section id="tentang" class="home-about section">

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0" data-aos="fade-right" data-aos-delay="200">
                    <div class="about-content">
                        <h2 class="section-heading">Tentang Biro Katalion</h2>
                        <p class="lead-text text-justify">
                            Biro Katalion merupakan pusat layanan psikologi, terapi, dan tumbuh kembang anak yang hadir
                            untuk mendampingi anak dan keluarga dalam memahami serta mengoptimalkan setiap tahap
                            perkembangan. Berlokasi di Alasmalang, Kecamatan Singojuruh, Kabupaten Banyuwangi, Biro Katalion
                            menyediakan berbagai layanan yang berfokus pada pemahaman kebutuhan, potensi, dan karakteristik
                            anak secara menyeluruh.
                        </p>

                        <p>
                            Dengan mengedepankan pendekatan yang profesional, hangat, dan kolaboratif, Biro Katalion
                            berkomitmen untuk memberikan pendampingan yang tepat bagi anak, orang tua, maupun lingkungan
                            pendidikan. Melalui sinergi antara berbagai pihak, kami mendukung terciptanya proses tumbuh,
                            belajar, dan berkembang yang lebih optimal sesuai dengan kebutuhan setiap anak.
                        </p>

                        <div class="cta-section">
                            <a href="#" class="btn-primary text-justify">Tentang Kami</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6" data-aos="fade-left" data-aos-delay="300">
                    <div class="about-visual">
                        <div class="main-image">
                            <img src="{{ asset('images/biro_katalion_office.jpeg') }}" alt="Biro Katalion Office"
                                class="img-fluid">
                        </div>
                        <div class="floating-card">
                            <div class="card-content">
                                <div class="icon">
                                    <i class="bi bi-geo-alt-fill"></i>
                                </div>
                                <div class="card-text">
                                    <h4>Dsn Wonorekso, Alasmalang, Kec. Singojuruh</h4>
                                    <p>Biro Katalion - Alasmalang</p>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="experience-badge">
                            <div class="badge-content">
                                <span class="years">25+</span>
                                <span class="text">Years of Trusted Care</span>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>

        </div>

    </section><!-- /Tentang Section -->

    <!-- Layanan Terapi Section -->
    <section id="terapi" class="featured-departments section light-background">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Layanan Terapi</h2>
            <p>Mendampingi setiap langkah tumbuh kembang anak melalui layanan terapi yang profesional, hangat, dan sesuai
                kebutuhan.</p>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row g-5">

                <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="100">
                    <div class="specialty-card">
                        <div class="specialty-content">
                            <div class="specialty-meta">
                                <span class="specialty-label">Terapi</span>
                            </div>
                            <h3>Terapi Okupasi</h3>
                            <p class="text-justify">
                                Bentuk layanan rehabilitasi kesehatan yang menggunakan aktivitas sehari-hari (okupasi) untuk
                                membantu seseorang dengan keterbatasan fisik, mental, atau kognitif agar bisa mandiri.
                            </p>
                        </div>
                        <div class="specialty-visual">
                            <img src="{{ asset('images/terapi-tumbuh-kembang-anak.jpg') }}" alt="Cardiovascular Medicine"
                                class="img-fluid">
                            <div class="visual-overlay">
                                <i class="fa-solid fa-brain"></i>
                            </div>
                        </div>
                    </div>
                </div><!-- End Specialty Card -->

                <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="200">
                    <div class="specialty-card">
                        <div class="specialty-content">
                            <div class="specialty-meta">
                                <span class="specialty-label">Terapi</span>
                            </div>
                            <h3>Terapi Wicara</h3>
                            <p class="text-justify">
                                Bentuk layanan kesehatan atau rehabilitasi medis yang dirancang untuk mengevaluasi,
                                mendiagnosis, dan mengatasi gangguan komunikasi, bahasa, suara, serta kesulitan menelan.
                            </p>
                        </div>
                        <div class="specialty-visual">
                            <img src="{{ asset('images/terapi-tumbuh-kembang-anak-2.jpg') }}" alt="Neurological Sciences"
                                class="img-fluid">
                            <div class="visual-overlay">
                                <i class="fa-solid fa-microphone-lines"></i>
                            </div>
                        </div>
                    </div>
                </div><!-- End Specialty Card -->

                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="department-highlight">
                        <div class="highlight-icon">
                            <i class="fa-solid fa-person-walking"></i>
                        </div>
                        <h4>Terapi Motorik</h4>
                        <p class="text-center">
                            Bentuk intervensi untuk melatih kekuatan otot, keseimbangan, serta koordinasi gerakan tubuh
                            anak, baik untuk kemampuan motorik kasar maupun motorik halus.
                        </p>
                    </div>
                </div><!-- End Department Highlight -->

                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="department-highlight">
                        <div class="highlight-icon">
                            <i class="fa-solid fa-face-smile"></i>
                        </div>
                        <h4>Terapi Perilaku</h4>
                        <p>
                            Bentuk layanan psikologis yang berfokus untuk membantu anak mengenali, memahami, serta mengubah
                            pola perilaku yang tidak diinginkan atau bermasalah menjadi kebiasaan yang lebih positif.
                        </p>
                    </div>
                </div><!-- End Department Highlight -->

                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="department-highlight">
                        <div class="highlight-icon">
                            <i class="fa-solid fa-hands-holding-child"></i>
                        </div>
                        <h4>Stimulasi Tumbuh Kembang</h4>
                        <p>
                            Segala bentuk rangsangan atau kegiatan yang diberikan oleh orang tua atau pengasuh untuk
                            merangsang kemampuan fisik, mental, emosional, sosial, dan bahasa anak sejak dini.
                        </p>
                    </div>
                </div><!-- End Department Highlight -->

                <div class="find-a-doctor">
                    <div class="text-center mt-5" data-aos="fade-up" data-aos-delay="700">
                        <a href="#" class="btn-view-all">
                            Kenali Terapis Kami
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </section><!-- /Layanan Terapi Section -->

    <!-- Layanan Asesmen Section -->
    <section id="asesmen" class="featured-services section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Layanan Asesmen</h2>
            <p>Membantu memahami potensi, kemampuan, dan kebutuhan anak sebagai dasar pendampingan yang tepat dan sesuai
                perkembangannya.</p>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row g-0">

                <div class="col-lg-8" data-aos="fade-right" data-aos-delay="200">
                    <div class="featured-service-main">
                        <div class="service-image-wrapper">
                            <img src="{{ asset('images/asesmen-psikotes.jpeg') }}" alt="Premier Healthcare Services"
                                class="img-fluid" loading="lazy">
                            <div class="service-overlay">
                                <div class="service-badge">
                                    <i class="bi bi-heart-pulse"></i>
                                    <span>Asesmen Perkembangan Anak Usia Dini </span>
                                </div>
                            </div>
                        </div>
                        <div class="service-details">
                            <h2 class="fw-bold">Asesmen Biro Katalion</h2>
                            <p class="text-justify">
                                Biro Katalion menyediakan layanan asesmen untuk anak usia dini, pelajar, hingga dewasa dan
                                pekerja, sebagai bagian dari upaya memahami potensi, kemampuan, dan kebutuhan setiap
                                individu secara lebih menyeluruh.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4" data-aos="fade-left" data-aos-delay="300">
                    <div class="services-sidebar">

                        <div class="service-item" data-aos="fade-up" data-aos-delay="400">
                            <div class="service-icon-wrapper">
                                <i class="fa-solid fa-people-roof"></i>
                            </div>
                            <div class="service-info">
                                <h4>Parenting</h4>
                                <p class="text-justify">
                                    Pendampingan bagi wali murid untuk memahami pola asuh yang tepat sesuai kebutuhan dan
                                    perkembangan anak.
                                </p>
                            </div>
                        </div>

                        <div class="service-item" data-aos="fade-up" data-aos-delay="500">
                            <div class="service-icon-wrapper">
                                <i class="fa-solid fa-brain"></i>
                            </div>
                            <div class="service-info">
                                <h4>Psikotes & Pembacaan Hasil</h4>
                                <p class="text-justify">
                                    Membantu memahami potensi, kemampuan, dan kebutuhan anak melalui psikotes serta
                                    penjelasan hasil secara menyeluruh.
                                </p>
                            </div>
                        </div>

                        <div class="service-item" data-aos="fade-up" data-aos-delay="600">
                            <div class="service-icon-wrapper">
                                <i class="fa-solid fa-hand-holding-heart"></i>
                            </div>
                            <div class="service-info">
                                <h4>Pendampingan</h4>
                                <p class="text-justify">
                                    Pendampingan lanjutan bagi wali murid untuk mengevaluasi perkembangan anak setelah tiga
                                    bulan dari pembacaan hasil.
                                </p>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>

    </section><!-- /Layanan Asesmen Section -->

    <!-- Sekolah Inklusi Section -->
    <section id="sekolahInklusi" class="call-to-action section light-background">

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="hero-content">
                <div class="row align-items-center">

                    <div class="col-lg-6">
                        <div class="content-wrapper" data-aos="fade-up" data-aos-delay="200">
                            <h1 class="fw-bold">Sekolah Inklusi🌷</h1>
                            <p class="text-justify">
                                Program sekolah inklusi Biro Katalion mendukung anak untuk belajar, berkembang, dan
                                berinteraksi secara optimal melalui pendampingan yang kolaboratif bersama sekolah, guru, dan
                                orang tua.
                            </p>

                            <div class="cta-wrapper">
                                <a href="appointment.html" class="primary-cta">
                                    <span>Kenali Program Kami</span>
                                    <i class="bi bi-arrow-right"></i>
                                </a>
                                <a href="services.html" class="secondary-cta">
                                    <span>Partner Kami</span>
                                    <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="image-container" data-aos="fade-left" data-aos-delay="300">
                            <img src="{{ asset('images/flyer-penerimaan-siswa-baru-sd-new.jpeg') }}"
                                alt="Medical Excellence" class="img-fluid">
                        </div>
                    </div>

                </div>
            </div>

            <div class="features-section">

                <div class="row g-0">

                    <div class="col-lg-4">
                        <div class="feature-block" data-aos="fade-up" data-aos-delay="200">
                            <div class="feature-icon">
                                <i class="fa-solid fa-spa"></i>
                            </div>
                            <h3>Terapi</h3>
                            <p>Mendapatkan layanan terapi sebanyak 2 kali pertemuan setiap minggu.</p>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="feature-block" data-aos="fade-up" data-aos-delay="300">
                            <div class="feature-icon">
                                <i class="fa-solid fa-user-tie"></i>
                            </div>
                            <h3>Shadow Teacher</h3>
                            <p>Mendapatkan pendampingan langsung dari Shadow Teacher selama proses pembelajaran.</p>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="feature-block" data-aos="fade-up" data-aos-delay="400">
                            <div class="feature-icon">
                                <i class="fa-solid fa-utensils"></i>
                            </div>
                            <h3>Katering Sehat</h3>
                            <p>Mendapatkan Program Makan Sehat Ceria (MSC) setiap hari.</p>
                        </div>
                    </div>

                </div>

            </div>

        </div>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const sections = document.querySelectorAll('section[id]');
                const navLinks = document.querySelectorAll('a[href*="#"]');

                function setActiveLink() {
                    let currentSection = '';

                    sections.forEach(section => {
                        const sectionTop = section.offsetTop - 150;

                        if (window.scrollY >= sectionTop) {
                            currentSection = section.getAttribute('id');
                        }
                    });

                    navLinks.forEach(link => {
                        link.classList.remove('active');

                        if (link.getAttribute('href').includes('#' + currentSection)) {
                            link.classList.add('active');
                        }
                    });
                }

                window.addEventListener('scroll', setActiveLink);

                setActiveLink();
            });
        </script>

    </section><!-- /Sekolah Inklusi Section -->
@endsection
