@extends('layouts.base-auth')

@section('title')
    <title>Log In | Biro Katalion</title>
@endsection

@section('content')
    <!-- Log In page -->
    <div class="row py-5">
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
                                <h4 class="mt-0 mb-3 mt-5">Selamat Datang di Biro Katalion</h4>
                                <p class="text-muted mb-0">Yuk, buat akunmu sekarang! 😉</p>
                            </div> <!--end auth-logo-text-->


                            <form class="form-horizontal auth-form my-4" action="{{ route('auth.do.register') }}"
                                method="POST">
                                @csrf

                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <div class="input-group mb-3">
                                        <span class="auth-form-icon">
                                            <i class="dripicons-user"></i>
                                        </span>
                                        <input type="email" class="form-control" id="email" name="email"
                                            placeholder="Masukkan email" value="{{ old('email') }}">
                                    </div>
                                    @error('email')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div><!--end form-group-->

                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <div class="input-group mb-3">
                                        <span class="auth-form-icon">
                                            <i class="dripicons-user"></i>
                                        </span>
                                        <input type="text" class="form-control" id="username" name="username"
                                            placeholder="Masukkan username" value="{{ old('username') }}">
                                    </div>
                                    @error('username')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div><!--end form-group-->

                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <div class="input-group mb-3">
                                        <span class="auth-form-icon">
                                            <i class="dripicons-lock"></i>
                                        </span>
                                        <input type="password" class="form-control" id="password"
                                            placeholder="Masukkan password" name="password" min="8">
                                    </div>
                                    @error('password')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div><!--end form-group-->

                                <div class="form-group">
                                    <label for="password_confirmation">Konfirmasi Password</label>
                                    <div class="input-group mb-3">
                                        <span class="auth-form-icon">
                                            <i class="dripicons-lock"></i>
                                        </span>
                                        <input type="password" class="form-control" id="password_confirmation"
                                            placeholder="Masukkan password" name="password_confirmation" min="8">
                                    </div>
                                    @error('password_confirmation')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div><!--end form-group-->

                                <div class="form-group mb-0 row">
                                    <div class="col-12 mt-2">
                                        <button class="btn btn-primary btn-round btn-block waves-effect waves-light"
                                            type="submit">Daftar <i class="fas fa-sign-in-alt ml-1"></i></button>
                                    </div><!--end col-->
                                </div> <!--end form-group-->
                            </form><!--end form-->
                        </div><!--end /div-->

                        <div class="m-3 text-center text-muted">
                            <p class="fw-bold">Sudah punya akun ? <a href="{{ route('auth.login.page') }}"
                                    class="text-primary ml-2">Login
                                    Sekarang</a></p>
                        </div>
                    </div><!--end card-body-->
                </div><!--end card-->

            </div><!--end auth-page-->
        </div><!--end col-->
    </div><!--end row-->
    <!-- End Log In page -->
@endsection
