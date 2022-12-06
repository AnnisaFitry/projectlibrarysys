@extends('layouts.main')
@include('partials.nav-info')
@section('content')
` <section class="py-sm-5" id="download-soft-ui">
    <div class="bg-gradient-dark position-relative m-3 border-radius-xl overflow-hidden">
      <img src="./assets/img/shapes/waves-white.svg" alt="pattern-lines" class="position-absolute start-0 top-md-0 w-100 opacity-2">
      <div class="container py-7 postion-relative z-index-2 position-relative">
        <div class="row">
          <div class="col-md-7 mx-auto mt-5 text-center">
            <h3 class="text-white mb-0">Kumpulan Pertanyaan</h3>
            <h3 class="text-white">Library Sys</h3>
            <p class="text-white mb-5">Pertanyaan yang sering diajukan oleh para anggota Library Sys</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class="container">
    <div class="row">
      <div class="col-lg-4 pt-3">
        <div class="info-horizontal bg-gradient-primary border-radius-xl d-block d-md-flex p-4">
          <i class="material-icons text-white text-3xl">flag</i>
          <div class="ps-0 ps-md-3 mt-3 mt-md-0">
            <h5 class="text-white">Apa itu Library Sys?</h5>
            <p class="text-white">Platform pendataan data buku perpustakaan, pendataan anggota perpustakaan, serta pendataan pinjam-meminjam buku perpustakaan.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 px-lg-1 mt-lg-0 mt-4 pt-3">
        <div class="info-horizontal bg-gray-100 border-radius-xl d-block d-md-flex p-4 h-100">
          <i class="material-icons text-gradient text-primary text-3xl">precision_manufacturing</i>
          <div class="ps-0 ps-md-3 mt-3 mt-md-0">
            <h5>Siapa saja yang dapat mendigitalisasi perpustakaannya di Library Sys?</h5>
            <p>Perpustakaan di Indonesia yang belum terdigitalisasi.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 pt-3">
        <div class="info-horizontal bg-gradient-primary border-radius-xl d-block d-md-flex p-4">
          <i class="material-icons text-white text-3xl">receipt_long</i>
          <div class="ps-0 ps-md-3 mt-3 mt-md-0">
            <h5 class="text-white">Siapa saja yang dapat menikmati Library Sys?</h5>
            <p class="text-white">Siswa/mahasiswa/karyawan maupun anggota yang telah diberikan akses oleh pelanggan Library Sys.</p>
            {{--<a href="https://www.creative-tim.com/learning-lab/bootstrap/utilities/material-kit" class="text-primary icon-move-right">
              Read more
              <i class="fas fa-arrow-right text-sm ms-1"></i>
            </a>--}}
          </div>
        </div>
      </div>
      <div class="col-lg-4 px-lg-1 mt-lg-0 mt-4 pt-3">
        <div class="info-horizontal bg-gray-100 border-radius-xl d-block d-md-flex p-4">
          <i class="material-icons text-gradient text-primary text-3xl">precision_manufacturing</i>
          <div class="ps-0 ps-md-3 mt-3 mt-md-0">
            <h5>Berapa biaya pendaftaraan perpustakaan di Library Sys?</h5>
            <p>pendaftaraan perpustakaan di Library Sys tidak berbayar.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 pt-3">
        <div class="info-horizontal bg-gradient-primary border-radius-xl d-block d-md-flex p-4">
          <i class="material-icons text-white text-3xl">receipt_long</i>
          <div class="ps-0 ps-md-3 mt-3 mt-md-0">
            <h5 class="text-white">Berapa biaya menjadi anggota Library Sys?</h5>
            <p class="text-white">Untuk menjadi anggota Library Sys, tidak dipungut biaya satu rupiahpun.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 px-lg-1 mt-lg-0 mt-4 pt-3">
        <div class="info-horizontal bg-gray-100 border-radius-xl d-block d-md-flex p-4">
          <i class="material-icons text-gradient text-primary text-3xl">precision_manufacturing</i>
          <div class="ps-0 ps-md-3 mt-3 mt-md-0">
            <h5>Apa yang diperlukan untuk menggunakan Library Sys?</h5>
            <p>Menggunakan browser dengan jaringan yang stabil.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 pt-3">
        <div class="info-horizontal bg-gradient-primary border-radius-xl d-block d-md-flex p-4">
          <i class="material-icons text-white text-3xl">receipt_long</i>
          <div class="ps-0 ps-md-3 mt-3 mt-md-0">
            <h5 class="text-white">Fasilitas apa saja yang akan diperoleh ketika menjadi pustakawan Library Sys?</h5>
            <p class="text-white">Mendata buku dan pengembaliannya, keanggotaan yang masuk, serta validasi persetujuan peminjaman buku.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 px-lg-1 mt-lg-0 mt-4 pt-3">
        <div class="info-horizontal bg-gray-100 border-radius-xl d-block d-md-flex p-4">
          <i class="material-icons text-gradient text-primary text-3xl">precision_manufacturing</i>
          <div class="ps-0 ps-md-3 mt-3 mt-md-0">
            <h5>Fasilitas apa saja yang akan diperoleh ketika menjadi anggota Library Sys?</h5>
            <p>Mengetahui perpustakaan yang dicari atau perpustakaan terdekat, bergabung dengan perpustakaan yang dipilih, mendapat pemberitahuan jadwal pengembalian dan lewat batas pengembalian buku.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 pt-3">
        <div class="info-horizontal bg-gradient-primary border-radius-xl d-block d-md-flex p-4">
          <i class="material-icons text-white text-3xl">receipt_long</i>
          <div class="ps-0 ps-md-3 mt-3 mt-md-0">
            <h5 class="text-white">Bagaimana jika pustakawan saya tertarik dengan Library Sys?</h5>
            <p class="text-white">Pustakwan mengakses Library Sys dan memilih tombol Daftar pada halaman utama. Kemudian, mengisi data-data yang diperlukan dan menekan tombol daftar. Selanjutnya, pustakwan dapat menunggu konfirmasi dari email yang telah didaftarkan.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  @include('partials.footer')
@endsection