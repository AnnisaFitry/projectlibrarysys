
@extends('layouts.main')
@include('partials.nav-index')
@section('content') 
<section class="pb-5 position-relative bg-gradient-dark mx-n3">
    <div class="container">
      <div class="row">
        <div class="col-md-8 text-start mb-3" style="margin-top: 3cm">
          <h3 class="text-white z-index-1 position-relative">Cari Perpustakaan Didekatmu!</h3>
        </div>
      </div>
      <div class="row justify-content-between mb-4">
        <div class="col">
            <div class="d-flex">
                <div class="dropdown">
                  <button class="btn bg-gradient-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                    KOTA
                  </button>
                  <ul class="dropdown-menu px-2 py-3" aria-labelledby="dropdownMenuButton">
                    <li><a class="dropdown-item border-radius-md" href="javascript:;">BATU</a></li>
                    <li><a class="dropdown-item border-radius-md" href="javascript:;">MALANG</a></li>
                    <li><a class="dropdown-item border-radius-md" href="javascript:;">SURABAYA</a></li>
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
      <ul class="list-unstyled">
        <li class="media">
            <a href="{{ route('perpus') }}">
            <div class="card card-profile mt-4">
                <div class="row justify-content-start" style="padding-left: 5mm; padding-right: 5mm">
                  <div class="col-auto p-3">
                        <img class="rounded-circle" src="../assets/img/perpus.jpg" alt="image" style="width: 5rem; height: 5rem; object-fit: cover;">
                  </div>
                  <div class="col-auto">
                    <div class="card-body ps-lg-0">
                      <h5 class="mb-0">Nama Perpustakaan</h5>
                      <h6 class="text-info">MALANG</h6>
                    </div>
                  </div>
                </div>
            </div>
            </a>
        </li>
      </ul>
    </div>
  </section>
@endsection