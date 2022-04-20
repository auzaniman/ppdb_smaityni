@extends('user_view.layouts.app')

@section('title')
PPDB SMAIT Nurul 'Ilmi Tenggarong
@endsection

@section('content')
<div class="card card-body mx-3 mx-md-4 mt-n6" id="alur">
  <section class="pb-7 pt-6">
    <div class="container">
      <h2 class="text-center mb-6">Alur Penjaringan Peserta Didik Baru</h2>
      <div class="mb-5">
        <div class="row mb-4 justify-content-evenly align-items-center text-center">
          <div class="col-lg-3 d-flex justify-content-center">
            <i class="material-icons text-3xl text-gradient text-info">3p</i>
            <h5 class="mb-0 ms-2">Pendaftaran</h5>
          </div>
          <div class="col-lg-3">
            <h5 class="mb-0 font-weight-normal">Tanggal</h5>
          </div>
          <div class="col-lg-3">
            <button class="btn bg-gradient-info px-4 py-1 mb-0"> <a href="{{ route('formulir') }}" class="text-white">Daftar</a></button>
          </div>
        </div>
        <div class="border-1 border-dashed mb-4"></div>
        <div class="row mb-4 justify-content-evenly align-items-center text-center">
          <div class="col-lg-3 d-flex justify-content-center">
            <i class="material-icons text-3xl text-gradient text-info">info</i>
            <h5 class="mb-0 ms-2">Pengumuman</h5>
          </div>
          <div class="col-lg-3">
            <h5 class="mb-0 font-weight-normal">Tanggal</h5>
          </div>
          <div class="col-lg-3">
            <button class="btn bg-gradient-info px-4 py-1 mb-0">Hasil</button>
          </div>
        </div>
        <div class="border-1 border-dashed mb-4"></div>
        <div class="row mb-4 justify-content-evenly align-items-center text-center">
          <div class="col-lg-3 d-flex justify-content-center">
            <i class="material-icons text-3xl text-gradient text-info">draw</i>
            <h5 class="mb-0 ms-2">Daftar Ulang</h5>
          </div>
          <div class="col-lg-3">
            <h5 class="mb-0 font-weight-normal">Tanggal</h5>
          </div>
          <div class="col-lg-3">
            <h5 class="mb-0 font-weight-normal">Disekolah</h5>
          </div>
        </div>
        <div class="border-1 border-dashed mb-4"></div>
      </div>

      {{-- Informasi --}}
      <div class="row align-items-center justify-content-center">
        <h2 class="text-center mb-5">Persyaratan Daftar Ulang</h2>
        <div class="col-lg-8">
          <div class="row justify-content-start align-items-center">
            <div class="col-md-6">
              <div class="info">
                <h5>1. Menunjukkan Kuitansi/Bukti Pembayaran/Nomor Registrasi</h5>
              </div>
            </div>
            <div class="col-md-6">
              <div class="info">
                <h5>2. Pas Foto Warna</h5>
              </div>
            </div>
          </div>
          <div class="row justify-content-start mt-4 align-items-center">
            <div class="col-md-6">
              <div class="info">                
                <h5>3. Fotokopi Raport</h5>
              </div>
            </div>
            <div class="col-md-6">
              <div class="info">
                <h5>4. Fotokopi Kartu Keluarga</h5>
              </div>
            </div>
          </div>
          <div class="row justify-content-start mt-4 align-items-center">
            <div class="col-md-6">
              <div class="info">                
                <h5>5. Fotokopi Piagam</h5>
              </div>
            </div>
            <div class="col-md-6">
              <div class="info">
                <h5>6. Fotokopi Ijazah</h5>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
@endsection