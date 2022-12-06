@extends('layouts.main')
@include('partials.nav-info')
@section('content')  

<div class="page-header align-items-start min-vh-100" style="background-image: url('../assets/img/login.jpg');" loading="lazy">
    <span class="mask bg-gradient-dark opacity-6"></span>
    <div class="container my-auto">
        <div class="col-lg-6 mx-auto d-flex justify-content-center flex-column">
            <div class="card z-index-0 fadeIn3 fadeInBottom">
              <div class="card-body">
                <div class="row">
                    <h3 class="text-center">Edit Profil</h3>
                    <form role="form" id="contact-form" method="post" autocomplete="off">
                        <div class="card-body">
                        <div class="mb-2">
                            <div class="input-group input-group-dynamic">
                            <label class="form-label">Nama</label>
                            <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="mb-2">
                            <div class="input-group input-group-dynamic">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control">
                            </div>
                        </div>
                        <div class="mb-2">
                            <div class="input-group input-group-dynamic">
                            <label class="form-label">Kata Sandi</label>
                            <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12 mt-4">
                            <button type="submit" class="btn bg-gradient-dark w-100">Perbarui</button>
                        </div>
                        </div>
                    </form>
                  </div>
              </div>
            </div>
        </div>
    </div>
</div>
@endsection