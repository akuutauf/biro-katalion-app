@extends('layouts.base-guest')

@section('title')
    <title>Incoming | Biro Katalion</title>
@endsection

@section('content')
    <!-- Ilustrator -->
    <section class="light-background">
        <div class="container-fluid">
            <div class="row d-flex justify-content-center">
                <div class="col-12 col-md-6 d-flex">
                    <img class="mx-auto img-fluid" src="{{ asset('images/incoming-page.png') }}" class="" width="400">
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-6 col-md-12">
                    <h5 align="center" class="py-4">
                        <b>Menuju Layanan yang Lebih Baik
                            <br> Fitur Baru Kami Sedang dalam Perjalanan! 🤗
                        </b>
                    </h5>
                </div>

            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-6 mt-2 d-flex">
                    <a href="{{ route('landing.page') }}" class="btn btn-primary btn-lg text-white mx-auto">
                        Kembali ke Beranda
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
