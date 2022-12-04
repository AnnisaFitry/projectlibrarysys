@extends('layouts.main')
@include('partials.nav-info')
@section('content')  

<div class="page-header align-items-start min-vh-100" style="background-image: url('../assets/img/login.jpg');" loading="lazy">
    <span class="mask bg-gradient-dark opacity-6"></span>
    <div class="container my-auto">
        <div class="col-lg-7 mx-auto d-flex justify-content-center flex-column">
            <div class="card z-index-0 fadeIn3 fadeInBottom">
              <div class="card-body">
                <div class="row">
                    <h3 class="text-center">Daftar Perpustakaan</h3>
                    <form role="form" id="contact-form" method="post" autocomplete="off">
                        <div class="card-body">
                        <div class="row">
                            <div class="mb-4">
                                <div class="input-group input-group-dynamic">
                                <label class="form-label">Nama Perpustakaan</label>
                                <input type="email" class="form-control">
                                </div>
                            </div>
                            <div class="mb-4">
                                <div class="input-group input-group-dynamic">
                                <label class="form-label">Email Perpustakaan</label>
                                <input type="email" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                            <div class="input-group input-group-dynamic">
                                <label class="form-label">Password</label>
                                <input id="password" type="password" class="form-control" name="password" >
                            </div>
                            </div>
                            <div class="col-md-6">
                            <div class="input-group input-group-dynamic">
                                <label class="form-label">Confirm Password</label>
                                <input id="confirm-password" type="password" class="form-control" name="confirm-password" >
                            </div>
                            </div>
                        </div>
                        
                        <div class="col-md-12 mt-5">
                            <button type="submit" class="btn bg-gradient-dark w-100">Daftar</button>
                        </div>
                        </div>
                        <p class="mt-4 text-sm text-center">
                            Sudah memiliki akun? <a href="{{ route('sign-in') }}">Masuk</a>
                        </p>
                    </form>
                  </div>
              </div>
            </div>
        </div>
    </div>
</div>
@endsection