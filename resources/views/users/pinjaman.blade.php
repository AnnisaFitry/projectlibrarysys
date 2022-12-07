@extends('layouts.main')
@include('partials.nav-index')
@section('content')  
  <header class="header">
      <div class="container" style="padding: 50px;">
      </div>
  </header>
  <div class="container" style="background:white; padding: 20px;">
    <div class="layout-px-spacing">
      <div class="row mb-4 mt-3">
          <div class="col-sm-3 col-12">
              <div class="nav flex-column nav-pills mb-sm-0 mb-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                  <a class="nav-link active mb-2" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Dalam pinjaman</a>
                  <a class="nav-link active mb-2" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile">Harus dikembalikan</a>
                  <a class="nav-link active mb-2" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages">Terlambat mengembalikan</a>
              </div>
          </div>
  
          <div class="col-sm-9 col-12">
              <div class="tab-content" id="v-pills-tabContent">
                  <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                      <section class="section">
                          <div class="page-header px-4">
                              <div class="page-title">
                                  <h3>Dalam Pinjaman</h3>
                              </div>
                          </div>
  
                          <div class="container-fluid">
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
                  </div>
                  <div class="tab-pane fade show active" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                      <section class="section">
                          <div class="page-header px-4">
                              <div class="page-title">
                                  <h3>Harus dikembalikan</h3>
                              </div>
                          </div>
  
                          <div class="container-fluid">
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
                  </div>
                  <div class="tab-pane fade show active" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                      <section class="section">
                          <div class="page-header px-4">
                              <div class="page-title">
                                  <h3>Terlambat mengembalikan</h3>
                              </div>
                          </div>
  
                          <div class="container-fluid">
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
                  </div>
              </div>
          </div>
      </div>
  </div>
@endsection
