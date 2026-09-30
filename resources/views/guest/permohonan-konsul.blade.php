@extends('layouts.base-guest')


@section('title')
    <title>Permohonan Konsul | Biro Katalion</title>
@endsection

@section('content')
    <!-- Appointmnet Section -->
    <section id="appointmnet" class="appointmnet section light-background">

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="booking-wrapper">
                        <div class="booking-header text-center" data-aos="fade-up" data-aos-delay="200">
                            <h2>Mulai Konsultasi Bersama Kami</h2>
                            <p>
                                Sampaikan kebutuhan Anda dan tim Biro Katalion akan membantu menentukan langkah pendampingan
                                yang sesuai.
                            </p>
                        </div>

                        <div class="booking-steps" data-aos="fade-up" data-aos-delay="300">
                            <div class="step">
                                <div class="step-icon">
                                    <i class="bi bi-calendar-check"></i>
                                </div>
                                <div class="step-content">
                                    <h4>Pilih Layanan</h4>
                                    <p>Pilih Layanan yang Anda Perlukan</p>
                                </div>
                            </div>
                            <div class="step">
                                <div class="step-icon">
                                    <i class="bi bi-clock"></i>
                                </div>
                                <div class="step-content">
                                    <h4>Tanggal &amp; Waktu</h4>
                                    <p>Pilih Waktu Konsultasi yang Anda Inginkan</p>
                                </div>
                            </div>
                            <div class="step">
                                <div class="step-icon">
                                    <i class="bi bi-person-check"></i>
                                </div>
                                <div class="step-content">
                                    <h4>Konfirmasi Jadwal</h4>
                                    <p>Konfirmasi Jadwal Bersama Kami</p>
                                </div>
                            </div>
                        </div>

                        {{-- form permohonan konsul --}}
                        <div class="appointment-form" data-aos="fade-up" data-aos-delay="400">
                            <form action="forms/book-appointment.php" method="post" class="php-email-form">
                                <div class="row gy-4">
                                    <div class="col-md-6">
                                        <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                                        <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control"
                                            placeholder="Nama Lengkap Orang Tua / Klien" required="">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="nama_lengkap_anak" class="form-label">Nama Lengkap Anak</label>
                                        <input type="text" name="nama_lengkap_anak" id="nama_lengkap_anak"
                                            class="form-control" placeholder="Nama Lengkap Anak" required="">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="nama_panggilan_anak" class="form-label">Nama Panggilan Anak</label>
                                        <input type="text" name="nama_panggilan_anak" id="nama_panggilan_anak"
                                            class="form-control" placeholder="Nama Panggilan Anak" required="">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="agama" class="form-label">Agama</label>
                                        <select name="agama" id="agama" class="form-select" required="">
                                            <option value="">Pilih Agama</option>
                                            @foreach ($agamas as $item)
                                                <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="tempat_lahir_anak" class="form-label">Tempat Lahir Anak</label>
                                        <input type="text" name="tempat_lahir_anak" id="tempat_lahir_anak"
                                            class="form-control" placeholder="Tempat Lahir Anak" required="">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="tanggal_lahir" class="form-label">Tempat Lahir Anak / Klien</label>
                                        <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control"
                                            required="">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="nomor_telp" class="form-label">Nomor Telepon</label>
                                        <input type="text" name="nomor_telp" id="nomor_telp" class="form-control"
                                            placeholder="Nomor Telepon" required="">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="alamat" class="form-label">Alamat Lengkap</label>
                                        <textarea name="alamat" id="alamat" class="form-control" cols="30" rows="3"
                                            placeholder="Alamat Lengkap Klien"></textarea>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="paket_konsultasi" class="form-label">Paket Konsultasi</label>
                                        <select name="paket_konsultasi" id="paket_konsultasi" class="form-select"
                                            required="">
                                            <option value="">Pilih Paket Konsultasi</option>
                                            <option value="Anak">Anak</option>
                                            <option value="Remaja">Remaja</option>
                                            <option value="Dewasa">Dewasa</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="paket_terapi" class="form-label">Paket Terapi</label>
                                        <select name="paket_terapi" id="paket_terapi" class="form-select"
                                            required="">
                                            <option value="">Pilih Paket Terapi</option>
                                            <option value="1">1x Pertemuan</option>
                                            <option value="2">2x Pertemuan</option>
                                            <option value="3">3x Pertemuan</option>
                                            <option value="4">4x Pertemuan</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="tes_iq" class="form-label">Tes IQ</label>
                                        <select name="tes_iq" id="tes_iq" class="form-select" required="">
                                            <option value="">Pilih Jenis Tes IQ</option>
                                            @foreach ($jenis_layanan_tes as $item)
                                                <option value="{{ $item->id }}">{{ $item->nama }}
                                                    ({{ formatRupiah($item->harga) }})
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="keluhan" class="form-label">Keluhan</label>
                                        <textarea name="keluhan" id="keluhan" class="form-control" rows="3" placeholder="Keluhan Anak / Klien"></textarea>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn-book">Kirim</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="emergency-info" data-aos="fade-up" data-aos-delay="500">
                            <p><strong>*Note</strong>
                                Jika Konsultasi Pribadi isi form (nama lengkap, panggilan anak dan tanggal lahir anak)
                                dengan tanda (strip) <strong>-</strong>
                            </p>
                        </div>

                    </div>
                </div>
            </div>

        </div>

    </section><!-- /Appointmnet Section -->
@endsection
