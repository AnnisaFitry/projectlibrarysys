@extends('layouts.main')
@include('partials.nav-index')
@section('content')  
<!-- -------- START HEADER 4 w/ search book a ticket form ------- -->
<header>
    <div class="page-header min-height-400" style="background-image: url('../assets/img/sampul.jpg');" loading="lazy">
      <span class="mask bg-gradient-dark opacity-8"></span>
    </div>
  </header>
  <!-- -------- END HEADER 4 w/ search book a ticket form ------- -->
  <div class="card card-body blur shadow-blur mx-3 mx-md-4 mt-n6 mb-4">
    <!-- START Testimonials w/ user image & text & info -->
    <section class="py-sm-7 py-5 position-relative">
      <div class="container">
        <div class="row">
          <div class="col-12 mx-auto">
            <div class="mt-n8 mt-md-n9 text-center">
              <img class="avatar avatar-xxl shadow-xl position-relative z-index-2" src="../assets/img/perpus.jpg" alt="bruce" loading="lazy">
            </div>
            <div class="row py-5">
              <div class="col-lg-7 col-md-7 z-index-2 position-relative px-md-2 px-sm-5 mx-auto">
                <div class="d-flex justify-content-between align-items-center mb-2">
                  <h3 class="mb-0">Nama Perpustakaan</h3>
                  <div class="d-block">
                    <button type="button" class="btn btn-sm btn-outline-info text-nowrap mb-0">Follow</button>
                  </div>
                </div>
                <div class="row mb-4">
                  <div class="col-auto">
                    <span class="h6">323</span>
                    <span>Buku</span>
                  </div>
                  <div class="col-auto">
                    <span class="h6">3.5k</span>
                    <span>Anggota</span>
                  </div>
                </div>
                <p class="text-lg mb-0">
                  Decisions: If you can’t decide, the answer is no.
                  If two equally difficult paths, choose the one more
                  painful in the short term (pain avoidance is creating
                  an illusion of equality). Choose the path that leaves
                  you more equanimous. <br><a href="javascript:;" class="text-info icon-move-right">More about me
                    <i class="fas fa-arrow-right text-sm ms-1"></i>
                  </a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- END Testimonials w/ user image & text & info -->
    <!-- START Blogs w/ 4 cards w/ image & text & link -->
    <section class="py-3">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <h3 class="mb-5">Buku yang tersedia di Perpustakaan</h3>
          </div>
        </div>
        <div class="row justify-content-between mb-4">
          <div class="col">
              <div class="d-flex">
                  <div class="dropdown">
                    <button class="btn bg-gradient-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                      Kategori
                    </button>
                    <ul class="dropdown-menu px-2 py-3" aria-labelledby="dropdownMenuButton">
                      <li><a class="dropdown-item border-radius-md" href="javascript:;">Novel</a></li>
                      <li><a class="dropdown-item border-radius-md" href="javascript:;">Buku Pelajaran</a></li>
                      <li><a class="dropdown-item border-radius-md" href="javascript:;">Buku Ilmiah</a></li>
                    </ul>
                  </div>
              </div>
          </div>
          <div class="col">
              <div class="container">
                  <div class="input-group input-group-dynamic mb-4">
                      <span class="input-group-text"><i class="fas fa-search" aria-hidden="true"></i></span>
                      <input class="form-control" placeholder="Search" type="text" >
                  </div>
              </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-3 col-sm-6">
            <div class="card card-plain">
              <div class="card-header p-0 position-relative" >
                <a class="d-block blur-shadow-image">
                  <img style="width:300;object-fit: cover;" src="../assets/img/buku.jpg" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg" loading="lazy">
                </a>
              </div>
              <div class="card-body px-0">
                <h5>
                  <a href="{{ route('buku') }}" class="text-dark font-weight-bold">Judul Buku</a>
                </h5>
                <a href="{{ route('buku') }}" class="text-info text-sm icon-move-right">Detail Buku
                  <i class="fas fa-arrow-right text-xs ms-1"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- END Blogs w/ 4 cards w/ image & text & link -->
  </div>
@endsection