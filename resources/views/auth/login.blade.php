@extends('layouts.base-auth')

@section('title')
    <title>Log In | Biro Katalion</title>
@endsection

@section('content')
    <!-- Log In page -->
    <div class="row vh-100 ">
        <div class="col-12 align-self-center">
            <div class="auth-page">
                <div class="card auth-card shadow-lg">
                    <div class="card-body">
                        <div class="px-3">
                            <div class="auth-logo-box">
                                <a href="#" class="logo logo-admin"><img
                                        src="{{ asset('images/logo-biro-katalion-no-bg.png') }}" height="75"
                                        alt="logo" class="auth-logo"></a>
                            </div><!--end auth-logo-box-->

                            <div class="text-center auth-logo-text">
                                <h4 class="mt-0 mb-3 mt-5">Masuk ke Akun Anda</h4>
                                <p class="text-muted mb-0">Halo, selamat datang kembali! 😊</p>
                            </div> <!--end auth-logo-text-->


                            <form class="form-horizontal auth-form my-4" action="#">

                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <div class="input-group mb-3">
                                        <span class="auth-form-icon">
                                            <i class="dripicons-user"></i>
                                        </span>
                                        <input type="text" class="form-control" id="username" name="username"
                                            placeholder="Masukkan username">
                                    </div>
                                </div><!--end form-group-->

                                <div class="form-group">
                                    <label for="userpassword">Password</label>
                                    <div class="input-group mb-3">
                                        <span class="auth-form-icon">
                                            <i class="dripicons-lock"></i>
                                        </span>
                                        <input type="password" class="form-control" id="userpassword"
                                            placeholder="Masukkan password" name="password">
                                    </div>
                                </div><!--end form-group-->

                                <div class="form-group mb-0 row">
                                    <div class="col-12 mt-2">
                                        <button class="btn btn-primary btn-round btn-block waves-effect waves-light"
                                            type="submit">Log In <i class="fas fa-sign-in-alt ml-1"></i></button>
                                    </div><!--end col-->
                                </div> <!--end form-group-->
                            </form><!--end form-->
                        </div><!--end /div-->

                        <div class="m-3 text-center text-muted">
                            <p class="fw-bold">Tidak punya akun ? <a href="{{ route('auth.register.page') }}"
                                    class="text-primary ml-2">Daftar
                                    Sekarang</a></p>
                        </div>
                    </div><!--end card-body-->
                </div><!--end card-->

            </div><!--end auth-page-->
        </div><!--end col-->
    </div><!--end row-->
    <!-- End Log In page -->
@endsection
