@extends('layouts.base-guest')

@section('title')
    <title>Terapis Katalion | Biro Katalion</title>
@endsection

@section('content')
    <!-- Terapis Section -->
    <section id="doctors" class="doctors section light-background">

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-4">

                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="doctor-card">
                        <div class="doctor-image">
                            <img src="{{ asset('images/terapis/miss-febri.png') }}" alt="Febri Nur Primadewi"
                                class="img-fluid">
                        </div>
                        <div class="doctor-content">
                            <h4>Febri Nur Primadewi</h4>
                            <span class="specialty">Kepala Biro</span>
                            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                commodo
                                consequat.</p>
                            <div class="doctor-meta">
                                <div class="department">
                                    <i class="bi bi-building"></i>
                                    <span>Cabang Alasmalang</span>
                                </div>
                                <div class="experience">
                                    <i class="fa-brands fa-instagram"></i>
                                    <span>@febri</span>
                                </div>
                            </div>
                            <a href="#" class="btn-appointment">Miss Febri</a>
                        </div>
                    </div>
                </div><!-- End Doctor Card -->

            </div>

        </div>

    </section><!-- /Terapis Section -->
@endsection
