<!-- Navbar -->
<div class="container position-sticky z-index-sticky top-0">
  <div class="row">
    <div class="col-12">
      <nav class="navbar navbar-expand-lg  blur border-radius-xl top-0 z-index-fixed shadow position-absolute my-3 py-2 start-0 end-0 mx-4">
        <div class="container-fluid px-0">
          <a class="navbar-brand font-weight-bolder ms-sm-3" href="{{ route('index')}}" rel="tooltip" title="Designed and Coded by Creative Tim" data-placement="bottom">
            Library Sys
          </a>
          <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon mt-2">
              <span class="navbar-toggler-bar bar1"></span>
              <span class="navbar-toggler-bar bar2"></span>
              <span class="navbar-toggler-bar bar3"></span>
            </span>
          </button>
          <div class="collapse navbar-collapse pt-3 pb-2 py-lg-0 w-100" id="navigation">
            <ul class="navbar-nav navbar-nav-hover ms-auto">
            @guest
              
              <li class="nav-item ms-lg-auto">
                <a class="nav-link nav-link-icon me-2" href="{{ route('cari-perpus')}}">
                  <p class="d-inline text-sm z-index-1 font-weight-bold" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Cari Perpustakaan Terdekat">Perpustakaan</p>
                </a>
              </li>
              @if (Route::has('login'))
              <li class="nav-item my-auto ms-3 ms-lg-0">
                <a href="{{ route('login')}}" class="btn btn-sm  bg-gradient-primary  mb-0 me-1 mt-2 mt-md-0">Masuk</a>
              </li>
              @endif
              @if (Route::has('register'))
              <li class="nav-item my-auto ms-3 ms-lg-0">
                <a href="{{ route('register')}}" class="btn btn-sm btn-outline-primary  mb-0 me-1 mt-2 mt-md-0">Daftar</a>
              </li>
              @endif
            @else
              @if(Auth::user()->role == 2)
              <li class="nav-item ms-lg-auto">
                <a class="nav-link nav-link-icon me-2" href="{{ route('cari-perpus')}}">
                  <p class="d-inline text-sm z-index-1 font-weight-bold" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Cari Perpustakaan Terdekat">Perpustakaan</p>
                </a>
              </li>
              <li class="nav-item ms-lg-auto">
                <a class="nav-link nav-link-icon me-2" href="{{ route('pengikut')}}">
                  <p class="d-inline text-sm z-index-1 font-weight-bold" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Notifikasi">Pengikut</p>
                </a>
              </li>
              <li class="nav-item ms-lg-auto">
                <a class="nav-link nav-link-icon me-2" href="{{ route('peminjaman')}}">
                  <p class="d-inline text-sm z-index-1 font-weight-bold" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Pinjam Buku">Peminjaman</p>
                </a>
              </li>
              <li class="nav-item ms-lg-auto">
                <a class="nav-link nav-link-icon me-2" href="{{ route('bukuku')}}">
                  <p class="d-inline text-sm z-index-1 font-weight-bold" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Akun Saya">Buku Ku</p>
                </a>
              </li>
              @endif
              @if(Auth::user()->role == 3)
              <li class="nav-item ms-lg-auto">
                <a class="nav-link nav-link-icon me-2" href="{{ route('cari-perpus')}}">
                  <p class="d-inline text-sm z-index-1 font-weight-bold" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Cari Perpustakaan Terdekat">Perpustakaan</p>
                </a>
              </li>
              <li class="nav-item ms-lg-auto">
                <a class="nav-link nav-link-icon me-2" href="{{ route('pinjaman')}}">
                  <p class="d-inline text-sm z-index-1 font-weight-bold" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Pinjam Buku">Pinjaman</p>
                </a>
              </li>
              <li class="nav-item ms-lg-auto">
                <a class="nav-link nav-link-icon me-2" href="{{ route('notif')}}">
                  <p class="d-inline text-sm z-index-1 font-weight-bold" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Notifikasi">Pemberitahuan</p>
                </a>
              </li>
              @endif

              @if(Auth::user()->role == 1)
              
              @endif

              <li class="nav-item my-auto ms-3 ms-lg-0">
                <a href="{{ route('logout')}}"  onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" class="btn btn-sm  bg-gradient-primary  mb-0 me-1 mt-2 mt-md-0">Keluar</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
              </form>
              </li>
              @endguest
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </div>
</div>
