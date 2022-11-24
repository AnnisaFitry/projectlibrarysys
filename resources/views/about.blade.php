@extends('layouts.main')
@include('partials.nav-info')
@section('content')  
<header class="bg-gradient-dark">
    <div class="page-header min-vh-75" style="background-image: url('../assets/img/about.jpg');">
      <span class="mask bg-gradient-dark opacity-6"></span>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8 text-center mx-auto my-auto">
            <h1 class="text-white">Library Sys</h1>
            <p class="lead mb-4 text-white opacity-8">Platform pendataan data buku perpustakaan, pendataan anggota perpustakaan, serta pendataan pinjam-meminjam buku perpustakaan.</p>
          </div>
        </div>
      </div>
    </div>
  </header>
<!-- -------- END HEADER 7 w/ text and video ------- -->
<div class="card card-body shadow-xl mx-3 mx-md-4 mt-n6">
    <!-- Section with four info areas left & one card right with image and waves -->
    <section class="py-7">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6">
            <div class="row justify-content-start">
              <div class="col-md-6">
                <div class="info">
                  <i class="material-icons text-3xl text-gradient text-primary mb-3">all_inclusive</i>
                  <h5>Ruang dan Waktu Tanpa Batas</h5>
                  <p>Perpustakaan digital dapat diakses dari mana saja dan kapan saja dengan catatan ada jaringan komputer</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info">
                  <i class="material-icons text-3xl text-gradient text-primary mb-3">travel_explore</i>
                  <h5>Intuitif</h5>
                  <p>Perpustakaan digital telah mengembangkan berbagai fitur pencarian yang memfasilitasi akses ke informasi dan koleksi data</p>
                </div>
              </div>
            </div>
            <div class="row justify-content-start mt-4">
              <div class="col-md-6">
                <div class="info">
                  <i class="material-icons text-3xl text-gradient text-primary mb-3">accessibility</i>
                  <h5>Aksesibilitas</h5>
                  <p>Pustakawan dapat selalu memantau ketersediaan atau keberadaan koleksinya serta dengan mudah mengetahui daftar koleksi perpustakaan yang baru.</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info">
                  <i class="material-icons text-3xl text-gradient text-primary mb-3">devices</i>
                  <h5>Responsif</h5>
                  <p>Terlepas dari ukuran layarnya, konten platform secara alami akan sesuai dengan resolusi yang diberikan.</p>
                </div>
              </div>
            </div>
          </div>
          
          <div class="col-lg-4 ms-auto mt-lg-0 mt-4">
            <div class="card">
              <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <a class="d-block blur-shadow-image">
                  <img src="../assets/img/book.jpg" alt="img-colored-shadow" class="img-fluid border-radius-lg max-width-40 w-100">
                  
                </a>
              </div>
              <div class="card-body text-center">
                <h5 class="font-weight-normal">
                  <a href="javascript:;">Temukan Lebih Banyak</a>
                </h5>
                <p class="mb-0">
                Daftarkan perpustakaan untuk memperoleh fitur-fitur pustakawan di platform ini
                </p>
                <a href="{{ route('cari-perpus') }}" class="btn bg-gradient-primary btn-sm mb-0 mt-3">Daftar</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- END Section with four info areas left & one card right with image and waves -->
    <!-- -------- START Features w/ pattern background & stats & rocket -------- -->
    <section class="pb-5 position-relative bg-gradient-dark mx-n3">
      <div class="container">
        <div class="row">
          <div class="col-md-8 text-start mb-5 mt-5">
            <h3 class="text-white z-index-1 position-relative">Tim Proyek</h3>
            <p class="text-white opacity-8 mb-0">Platfrom Digitalisasi Perpustakaan Library Sys</p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6 col-12">
            <div class="card card-profile mt-4">
              <div class="row">
                <div class="col-lg-4 col-md-6 col-12 mt-n5">
                  <a href="javascript:;">
                    <div class="p-3 pe-md-0">
                      <img class="w-100 border-radius-md shadow-lg" src="../assets/img/team-3.jpg" alt="image">
                    </div>
                  </a>
                </div>
                <div class="col-lg-8 col-md-6 col-12 my-auto">
                  <div class="card-body ps-lg-0">
                    <h5 class="mb-0">Annisa Fitri Yuliandra</h5>
                    <h6 class="text-primary">Manajer Proyek</h6>
                    <p class="mb-0">D-IV Teknik Informatika </br>Politeknik Negeri Malang</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-12">
            <div class="card card-profile mt-lg-4 mt-5">
              <div class="row">
                <div class="col-lg-4 col-md-6 col-12 mt-n5">
                  <a href="javascript:;">
                    <div class="p-3 pe-md-0">
                      <img class="w-100 border-radius-md shadow-lg" src="../assets/img/team-5.jpg" alt="image">
                    </div>
                  </a>
                </div>
                <div class="col-lg-8 col-md-6 col-12 my-auto">
                  <div class="card-body ps-lg-0">
                    <h5 class="mb-0">Rofika Nur 'Aini</h5>
                    <h6 class="text-primary">Pengembang</h6>
                    <p class="mb-0">D-IV Teknik Informatika </br>Politeknik Negeri Malang</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        
      </div>
    </section>
    <!-- -------- END Features w/ pattern background & stats & rocket -------- -->
    <section class="pt-1 pb-3" id="count-stats">
      <div class="container">
        <div class="row justify-content-center text-center mt-7">
          <div class="col-md-3">
            <h1 class="text-gradient text-primary" id="state1" countTo="313">0</h1>
            <h5>Anggota</h5>
            <p>dari berbagai daerah di Indonesia</p>
          </div>
          <div class="col-md-3">
            <h1 class="text-gradient text-primary"><span id="state2" countTo="15">0</span>+</h1>
            <h5>Perpustakaan</h5>
            <p>yang tersebar di beberapa daerah di Indonesia</p>
          </div>
          <div class="col-md-3">
            <h1 class="text-gradient text-primary"><span id="state3" countTo="3300">0</span>+</h1>
            <h5>Buku</h5>
            <p>dengan berbagai kategori dan pengarang</p>
          </div>
        </div>
      </div>
    </section>
    <!-- -------- START PRE-FOOTER 1 w/ SUBSCRIBE BUTTON AND IMAGE ------- -->
    <section class="my-5 pt-3">
      <div class="container">
        <div class="row">
          <div class="col-md-6 m-auto">
            <h4>Daftarkan Perpustakaan Anda</h4>
            <p class="mb-4">
            Mari sama-sama daftarkan perpustakaan kita untuk mewujudkan digitalisasi perpustakaan dengan Library Sys
            </p>
            
          </div>
          <div class="col-md-5 ms-auto">
            <div class="position-relative">
              <img class="max-width-40 w-70 position-relative z-index-2" src="../assets/img/gambar_about.png" alt="image">
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- -------- END PRE-FOOTER 1 w/ SUBSCRIBE BUTTON AND IMAGE ------- -->
  </div>
  @include('partials.footer')
@endsection