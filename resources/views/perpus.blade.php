@extends('layouts.main')
@section('content')  
<!-- -------- START HEADER 4 w/ search book a ticket form ------- -->
<header>
    <div class="page-header min-height-400" style="background-image: url('{{ asset('/assets/img/sampul.jpg') }}');" loading="lazy">
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
              <img class="avatar avatar-xxl shadow-xl position-relative z-index-2" src="{{asset('storage/' . $perpus->foto_perpus)}}" alt="bruce" loading="lazy">
            </div>
            <div class="row py-5">
              <div class="col-lg-7 col-md-7 z-index-2 position-relative px-md-2 px-sm-5 mx-auto">
                <div class="d-flex justify-content-between align-items-center mb-2">
                  <h3 class="mb-0">{{ $perpus->nama_perpus }}</h3>
                  <div class="d-block">
                    @guest
                      <a class="btn btn-sm btn-outline-info text-nowrap mb-0" href="{{ route('login')}}">Follow</a>
                    @else
                      @if(Auth::user()->role == 3)
                        <button type="submit" class="btn btn-sm btn-outline-info text-nowrap mb-0"><a href="">Follow</a></button>
                      @endif
                    @endguest
                  </div>
                </div>
                <div class="row mb-4">
                  <div class="col-auto">
                    <span class="h6">{{ $jum_buku }}</span>
                    <span>Buku</span>
                  </div>
                  <div class="col-auto">
                    <span class="h6">{{ $jum_user }}</span>
                    <span>Anggota</span>
                  </div>
                </div>
                <p class="text-lg mb-0">
                  {{ $perpus->alamat_perpus }}, {{ $perpus->nama_kota }}<br>
                  Hubungi : {{ $perpus->telp }} <br>
                  Deskripsi : {{ $perpus->bio }} <br>
                    @guest
                      
                    @else
                      @if(Auth::user()->role == 2)
                        <a href="" class="text-info icon-move-right">Edit Profile
                          <i class="fas fa-arrow-right text-sm ms-1"></i>
                        </a>
                      @endif
                    @endguest
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
            <form action="{{ route('carikat', $perpus->id) }}" method="GET">
              <div class="row">
                <div class="col-auto">
                  <select style="background-color:#f0f2f5; padding:5px;" class="form-control bg-linier-primary" name="carikat" id="carikat">
                    <option value="">Pilih Ketegori</option>
                    @if(!empty($kategori))
                      @foreach($kategori as $kategori) 
                      <option value="{{ $kategori->nama_kategori }}">{{ $kategori->nama_kategori }}</option>
                      @endforeach
                    @endif  
                  </select>
                </div>
                <div class="col-auto">
                  <button type="submit" value="carikat" class="btn btn-sm bg-gradient-primary">Cari</button>
                </div>
              </div>
            </form>
          </div>
          <div class="col">
              <div class="container">
                <form action="{{ route('caribuku', $perpus->id) }}" method="GET">
                  <div class="input-group input-group-dynamic mb-4">
                      <span class="input-group-text"><i type="submit" class="fas fa-search" value="caribuku"></i></span>
                      <input class="form-control" name="caribuku" placeholder="Nama Buku" type="text" value="{{ old('caribuku') }}">
                      {{-- <button class="btn bg-gradient-primary" type="submit" value="cari">Cari</button> --}}
                  </div>
                </form>
              </div>
          </div>
        </div>
        <div class="row">
          @if(!empty($buku))
            @foreach($buku as $buku)

              <div class="col-lg-3 col-sm-6">
                <div class="card card-plain">
                  <div class="card-header p-0 position-relative" >
                    <a class="d-block blur-shadow-image">
                      <img style="width:300px;height:400px;object-fit: cover;" src="{{asset('storage/' . $buku->img_buku)}}" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg" loading="lazy">
                    </a>
                  </div>
                  <div class="card-body px-0">
                    <h5 >
                      <p style="margin-bottom: 0; padding-bottom:0;" class="text-dark font-weight-bold">{{ $buku->kode_buku }} | {{ $buku->judul_buku }}</p>
                    </h5>
                    {{-- <a href="{{ route('buku', $buku->id) }}" class="text-info text-sm icon-move-right">Pi Buku
                      <i class="fas fa-arrow-right text-xs ms-1"></i>
                    </a> --}}
                      <p class="text-dark" >Jumlah : {{ $buku->jumlah }}</p>
                    @guest
                      <a class="btn btn-sm btn-outline-primary text-nowrap mb-0" href="{{ route('login')}}">Pinjam</a>
                    @else
                      @if(Auth::user()->role == 3)
                        <button type="submit" class="btn btn-sm btn-outline-primary text-nowrap mb-0"><a href="">Pinjam</a></button>
                      @endif
                    @endguest
                  </div>
                </div>
              </div>
            @endforeach
          @endif

        </div>
      </div>
    </section>
    <!-- END Blogs w/ 4 cards w/ image & text & link -->
  </div>
@endsection