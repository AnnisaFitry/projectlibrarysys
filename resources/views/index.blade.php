@extends('layouts.main')
@include('partials.nav-index')
@section('content')  
  <header class="header-2">
    <div class="page-header min-vh-75 relative" style="background-image: url('./assets/img/sign-in.jpg')">
      <span class="mask bg-gradient-primary opacity-4"></span>
      <div class="container">
        <div class="row">
          <div class="col-lg-7 text-center mx-auto">
            <h1 class="text-white pt-3 mt-n5">Library Sys</h1>
            <p class="lead text-white mt-3">Platform Digitalisasi Perpustakaan Indonesia<br/></p>
          </div>
        </div>
      </div>
    </div>
  </header>
  <div class="card card-body blur shadow-blur mx-3 mx-md-4 mt-n6">
  <section class="pt-3 pb-4" id="count-stats">
    <div class="container">
      <div class="row">
        <div class="col-lg-9 mx-auto py-3">
          <div class="row">
            <div class="col-md-4 position-relative">
              <div class="p-3 text-center">
                <h1 class="text-gradient text-primary"><span id="state1" countTo="313">0</span>+</h1>
                <h5 class="mt-3">Anggota</h5>
                <p class="text-sm font-weight-normal">dari berbagai daerah di Indonesia</p>
              </div>
              <hr class="vertical dark">
            </div>
            <div class="col-md-4 position-relative">
              <div class="p-3 text-center">
                <h1 class="text-gradient text-primary"> <span id="state2" countTo="15">0</span>+</h1>
                <h5 class="mt-3">Perpustakaan</h5>
                <p class="text-sm font-weight-normal">yang tersebar di beberapa daerah di Indonesia</p>
              </div>
              <hr class="vertical dark">
            </div>
            <div class="col-md-4">
              <div class="p-3 text-center">
              <h1 class="text-gradient text-primary"> <span id="state3" countTo="3300">0</span>+</h1>
                <h5 class="mt-3">Buku</h5>
                <p class="text-sm font-weight-normal">dengan berbagai kategori dan pengarang</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="my-5 py-5">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-4 ms-auto me-auto p-lg-4 mt-lg-0 mt-4">
          <div class="rotating-card-container">
            <div class="card card-rotate card-background card-background-mask-primary shadow-primary mt-md-0 mt-5">
              <div class="front front-background" style="background-image: url(../assets/img/index_card1.jpg); background-size: cover;">
                <div class="card-body py-7 text-center">
                  <i class="material-icons text-white text-4xl my-3">touch_app</i>
                  <h3 class="text-white">Daftarkan Perpustakaan Anda <br/> </h3>
                  <p class="text-white opacity-8">Mari sama-sama daftarkan perpustakaan kita untuk mewujudkan digitalisasi perpustakaan <br/>dengan Library Sys</p>
                </div>
              </div>
              <div class="back back-background" style="background-image: url(../assets/img/index_card2.jpg); background-size: cover;">
                <div class="card-body pt-7 text-center">
                  <h3 class="text-white">Temukan Lebih Banyak</h3>
                  <p class="text-white opacity-8"> Daftarkan perpustakaan untuk memperoleh fitur-fitur <br/>pustakawan di platform ini</p>
                  <a href="{{ route('cari-perpus') }}" class="btn btn-white btn-sm w-50 mx-auto mt-3">Daftar</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 ms-auto mt-5">
          <div class="row justify-content-start">
            <div class="col-md-6">
              <div class="info">
                <i class="material-icons text-gradient text-primary text-3xl">all_inclusive</i>
                <h5 class="font-weight-bolder mt-3">Ruang dan Waktu Tanpa Batas</h5>
                <p class="pe-5">Perpustakaan digital dapat diakses dari mana saja dan kapan saja dengan catatan ada jaringan komputer</p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="info">
                <i class="material-icons text-gradient text-primary text-3xl">travel_explore</i>
                <h5 class="font-weight-bolder mt-3">Intuitif</h5>
                <p class="pe-3">Perpustakaan digital telah mengembangkan berbagai fitur pencarian yang memfasilitasi akses ke informasi dan koleksi data</p>
              </div>
            </div>
          </div>
          <div class="row justify-content-start mt-1">
            <div class="col-md-6 mt-3">
              <i class="material-icons text-gradient text-primary text-3xl">accessibility</i>
              <h5 class="font-weight-bolder mt-3">Aksesibilitas</h5>
              <p class="pe-5">Pustakawan dapat selalu memantau ketersediaan atau keberadaan koleksinya serta dengan mudah mengetahui daftar koleksi perpustakaan yang baru.</p>
            </div>
            <div class="col-md-6 mt-3">
              <div class="info">
                <i class="material-icons text-gradient text-primary text-3xl">devices</i>
                <h5 class="font-weight-bolder mt-3">Responsif</h5>
                <p class="pe-3">Terlepas dari ukuran layarnya, konten platform secara alami akan sesuai dengan resolusi yang diberikan.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="my-5 py-5">
    <div class="container">
      <div class="row">
        <div class="row justify-content-center text-center my-sm-5">
          <div class="col-lg-6">
            <span class="badge bg-primary mb-3">Fitur Anggota</span>
            <h2 class="text-dark mb-0">Kartu Digital Keanggotaan</h2>
            <p class="lead">Kami memberikan tampilan menarik serta terdapat notifikasi pengembalian untuk Anggota yang meminjam. </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="py-5">
    <div class="container">
      <div class="row">
        <div class="row text-center my-sm-5 mt-5">
          <div class="col-lg-6 mx-auto">
            <span class="badge bg-primary mb-3">Fitur Pustakawan</span>
            <h2 class="">Penyimpanan Digital</h2>
            <p class="lead">Kami menyediakan penyimpanan dan pelaporan data <br /> perpustakaan berbasis website. </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  {{-- <section class="py-7">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 mx-auto text-center">
          <h2 class="mb-0">Trusted by over</h2>
          <h2 class="text-gradient text-primary mb-3">1,679,477+ web developers</h2>
          <p class="lead">Many Fortune 500 companies, startups, universities and governmental institutions love Creative Tim's products. </p>
        </div>
      </div>
      <div class="row mt-6">
        <div class="col-lg-4 col-md-8">
          <div class="card card-plain">
            <div class="card-body">
              <div class="author">
                <div class="name">
                  <h6 class="mb-0 font-weight-bolder">Nick Willever</h6>
                  <div class="stats">
                    <i class="far fa-clock"></i> 1 day ago
                  </div>
                </div>
              </div>
              <p class="mt-4">"This is an excellent product, the documentation is excellent and helped me get things done more efficiently."</p>
              <div class="rating mt-3">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-8 ms-md-auto">
          <div class="card bg-gradient-primary">
            <div class="card-body">
              <div class="author align-items-center">
                <div class="name">
                  <h6 class="text-white mb-0 font-weight-bolder">Shailesh Kushwaha</h6>
                  <div class="stats text-white">
                    <i class="far fa-clock"></i> 1 week ago
                  </div>
                </div>
              </div>
              <p class="mt-4 text-white">"I found solution to all my design needs from Creative Tim. I use them as a freelancer in my hobby projects for fun! And its really affordable, very humble guys !!!"</p>
              <div class="rating mt-3">
                <i class="fas fa-star text-white"></i>
                <i class="fas fa-star text-white"></i>
                <i class="fas fa-star text-white"></i>
                <i class="fas fa-star text-white"></i>
                <i class="fas fa-star text-white"></i>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-8">
          <div class="card card-plain">
            <div class="card-body">
              <div class="author">
                <div class="name">
                  <h6 class="mb-0 font-weight-bolder">Samuel Kamuli</h6>
                  <div class="stats">
                    <i class="far fa-clock"></i> 3 weeks ago
                  </div>
                </div>
              </div>
              <p class="mt-4">"Great product. Helped me cut the time to set up a site. I used the components within instead of starting from scratch. I highly recommend for developers who want to spend more time on the backend!."</p>
              <div class="rating mt-3">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      
    </div>
  </section> --}}
  </div>
  @include('partials.footer')
@endsection
