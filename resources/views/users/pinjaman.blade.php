@extends('layouts.main')
@section('content')  
@Auth
  <header class="header">
      <div class="container" style="padding: 50px;">
      </div>
  </header>
  <div class="container" style="background:white; padding: 20px;">
    <div class="layout-px-spacing">
      <div class="row mb-4 mt-3">
          <div class="col-sm-3 col-12">
              <div class="nav flex-column nav-pills mb-sm-0 mb-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                  <a class="nav-link active mb-2" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Buku Pinjaman</a>
                  {{-- <a class="nav-link active mb-2" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="true">Pinjaman Buku</a>
                  <a class="nav-link active mb-2" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="true">Selesai Pinjam</a> --}}
              </div>
          </div>
  
          <div class="col-sm-9 col-12">
              <div class="tab-content" id="v-pills-tabContent">
                  <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                      <section class="section">
                          <div class="page-header px-4">
                              <div class="page-title">
                                  <h3>Buku Pinjaman</h3>
                              </div>
                          </div>
  
                          <div class="container-fluid">
                            <div class="row">
                                @foreach($pinjam as $pinjam)
                                  <div class="col-lg-3 col-sm-6">
                                    <div class="card card-plain">
                                      <div class="card-header p-0 position-relative" >
                                        <a class="d-block blur-shadow-image">
                                          <img style="width:300px;height:400px;object-fit: cover;" src="{{asset('storage/' . $pinjam->img_buku)}}" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg" loading="lazy">
                                        </a>
                                      </div>
                                      <div class="card-body px-0">
                                        <h5 >
                                          <p style="margin-bottom: 0; padding-bottom:0;" class="text-dark font-weight-bold">{{ $pinjam->kode_buku }} | {{ $pinjam->judul_buku }}</p>
                                        </h5>
                                          <p class="text-dark" >Jumlah : {{ $pinjam->jumlah }}</p>
                                      </div>
                                    </div>
                                  </div>
                                
                                @endforeach
                            </div>
                          </div>
                      </section>
                  </div>
                  {{-- <div class="tab-pane fade show active" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                    <section class="section">
                        <div class="page-header px-4">
                            <div class="page-title">
                                <h3>Pinjaman</h3>
                            </div>
                        </div>

                        <div class="container-fluid">
                          <div class="row">
                            @if(!empty($pinjam))
                              @foreach($pinjam as $pinjam)
                                @if($pinjam->status_pinjam == 1 && $pinjam->status_kembali == 0)
                                <div class="col-lg-3 col-sm-6">
                                  <div class="card card-plain">
                                    <div class="card-header p-0 position-relative" >
                                      <a class="d-block blur-shadow-image">
                                        <img style="width:300px;height:400px;object-fit: cover;" src="{{asset('storage/' . $pinjam->img_buku)}}" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg" loading="lazy">
                                      </a>
                                    </div>
                                    <div class="card-body px-0">
                                      <h5 >
                                        <p style="margin-bottom: 0; padding-bottom:0;" class="text-dark font-weight-bold">{{ $pinjam->kode_buku }} | {{ $pinjam->judul_buku }}</p>
                                      </h5>
                                        <p class="text-dark" >Jumlah : {{ $pinjam->jumlah }}</p>
                                    </div>
                                  </div>
                                </div>
                                @endif
                              @endforeach
                            @endif
                          </div>
                        </div>
                    </section>
                </div>
                <div class="tab-pane fade show active" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                  <section class="section">
                      <div class="page-header px-4">
                          <div class="page-title">
                              <h3>Kembalikan Buku</h3>
                          </div>
                      </div>

                      <div class="container-fluid">
                        <div class="row">
                          @if(!empty($pinjam))
                            @foreach($pinjam as $pinjam)
                              @if($pinjam->tgl_pinjam == date('Y-m-d H:i:s') )
                              <div class="col-lg-3 col-sm-6">
                                <div class="card card-plain">
                                  <div class="card-header p-0 position-relative" >
                                    <a class="d-block blur-shadow-image">
                                      <img style="width:300px;height:400px;object-fit: cover;" src="{{asset('storage/' . $pinjam->img_buku)}}" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg" loading="lazy">
                                    </a>
                                  </div>
                                  <div class="card-body px-0">
                                    <h5 >
                                      <p style="margin-bottom: 0; padding-bottom:0;" class="text-dark font-weight-bold">{{ $pinjam->kode_buku }} | {{ $pinjam->judul_buku }}</p>
                                    </h5>
                                      <p class="text-dark" >Jumlah : {{ $pinjam->jumlah }}</p>
                                  </div>
                                </div>
                              </div>
                              @endif
                            @endforeach
                          @endif
                        </div>
                      </div>
                  </section>
              </div> --}}
              </div>
          </div>
      </div>
  </div>
@else
@endauth
@endsection
