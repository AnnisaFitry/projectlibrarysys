@extends('layouts.main')
@include('partials.nav-info')
@section('content')  

<div class="page-header align-items-start min-vh-100" style="background-image: url('https://images.unsplash.com/photo-1497294815431-9365093b7331?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1950&q=80');" loading="lazy">
    <span class="mask bg-gradient-dark opacity-6"></span>
    <div class="container my-auto">
        <div class="col-lg-7 mx-auto d-flex justify-content-center flex-column">
            <div class="card z-index-0 fadeIn3 fadeInBottom">
              <div class="card-body">
                <div class="row">
                    <h3 class="text-center">Daftar</h3>
                    <form role="form" id="contact-form" method="post" autocomplete="off">
                        <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                            <div class="input-group input-group-dynamic">
                                <label class="form-label">First Name</label>
                                <input class="form-control" aria-label="First Name..." type="text" >
                            </div>
                            </div>
                            <div class="col-md-6">
                            <div class="input-group input-group-dynamic">
                                <label class="form-label">Last Name</label>
                                <input type="text" class="form-control" placeholder="" aria-label="Last Name..." >
                            </div>
                            </div>
                        </div>
                        <div class="mb-4">
                            <div class="input-group input-group-dynamic">
                            <label class="form-label">Email Address</label>
                            <input type="email" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="btn bg-gradient-dark w-100">Send Message</button>
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