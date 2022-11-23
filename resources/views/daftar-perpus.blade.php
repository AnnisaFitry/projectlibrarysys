@extends('layouts.main')
@include('partials.nav-info')
@section('content')  

{{-- <div class="page-header align-items-start min-vh-100" style="background-image: url('https://images.unsplash.com/photo-1497294815431-9365093b7331?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1950&q=80');" loading="lazy">
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
</div> --}}
<div class = "mt-5">
    <section class="py-lg-5">
        <div class="container">
          <div class="row">
            <div class="col">
              <div class="card box-shadow-xl overflow-hidden">
                <div class="row">
                  <div class="col-lg-5 position-relative bg-cover px-0" style="background-image: url('../assets/img/examples/blog2.jpg')" loading="lazy">
                    <div class="z-index-2 text-center d-flex h-100 w-100 d-flex m-auto justify-content-center">
                      <div class="mask bg-gradient-dark opacity-8"></div>
                      <div class="p-5 ps-sm-8 position-relative text-start my-auto z-index-2">
                        <h3 class="text-white">Contact Information</h3>
                        <p class="text-white opacity-8 mb-4">Fill up the form and our Team will get back to you within 24 hours.</p>
                        <div class="d-flex p-2 text-white">
                          <div>
                            <i class="fas fa-phone text-sm"></i>
                          </div>
                          <div class="ps-3">
                            <span class="text-sm opacity-8">(+40) 772 100 200</span>
                          </div>
                        </div>
                        <div class="d-flex p-2 text-white">
                          <div>
                            <i class="fas fa-envelope text-sm"></i>
                          </div>
                          <div class="ps-3">
                            <span class="text-sm opacity-8">hello@creative-tim.com</span>
                          </div>
                        </div>
                        <div class="d-flex p-2 text-white">
                          <div>
                            <i class="fas fa-map-marker-alt text-sm"></i>
                          </div>
                          <div class="ps-3">
                            <span class="text-sm opacity-8">Dyonisie Wolf Bucharest, RO 010458</span>
                          </div>
                        </div>
                        <div class="mt-4">
                          <button type="button" class="btn btn-icon-only btn-link text-white btn-lg mb-0" data-toggle="tooltip" data-placement="bottom" data-original-title="Log in with Facebook">
                            <i class="fab fa-facebook"></i>
                          </button>
                          <button type="button" class="btn btn-icon-only btn-link text-white btn-lg mb-0" data-toggle="tooltip" data-placement="bottom" data-original-title="Log in with Twitter">
                            <i class="fab fa-twitter"></i>
                          </button>
                          <button type="button" class="btn btn-icon-only btn-link text-white btn-lg mb-0" data-toggle="tooltip" data-placement="bottom" data-original-title="Log in with Dribbble">
                            <i class="fab fa-dribbble"></i>
                          </button>
                          <button type="button" class="btn btn-icon-only btn-link text-white btn-lg mb-0" data-toggle="tooltip" data-placement="bottom" data-original-title="Log in with Instagram">
                            <i class="fab fa-instagram"></i>
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-7">
                    <form class="p-3" id="contact-form" method="post">
                      <div class="card-header px-4 py-sm-5 py-3">
                        <h2>Say Hi!</h2>
                        <p class="lead"> We'd like to talk with you.</p>
                      </div>
                      <div class="card-body pt-1">
                        <div class="row">
                          <div class="col-md-12 pe-2 mb-3">
                            <div class="input-group input-group-static mb-4">
                              <label>My name is</label>
                              <input type="text" class="form-control" placeholder="Full Name">
                            </div>
                          </div>
                          <div class="col-md-12 pe-2 mb-3">
                            <div class="input-group input-group-static mb-4">
                              <label>I'm looking for</label>
                              <input type="text" class="form-control" placeholder="What you love">
                            </div>
                          </div>
                          <div class="col-md-12 pe-2 mb-3">
                            <div class="input-group input-group-static mb-4">
                              <label>Your message</label>
                              <textarea name="message" class="form-control" id="message" rows="6" placeholder="I want to say that..."></textarea>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6 text-end ms-auto">
                            <button type="submit" class="btn bg-gradient-info mb-0">Send Message</button>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
</div>
@endsection