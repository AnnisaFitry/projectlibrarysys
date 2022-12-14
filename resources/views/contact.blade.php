@extends('layouts.main')
@include('partials.nav-info')
@section('content')  
<section>
    <div class="page-header min-vh-100 mt-5">
      <div class="container">
        <div class="row">
          <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 start-0 text-center justify-content-center flex-column">
            <div id="basic_map1" class="position-relative h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center" loading="lazy">
            </div>
          </div>
          <div class="col-xl-5 col-lg-6 col-md-7 d-flex flex-column ms-auto me-auto ms-lg-auto me-lg-5">
            <div class="card d-flex blur justify-content-center shadow-lg my-sm-0 my-sm-6 mt-8 mb-5">
              <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
                <div class="bg-gradient-primary shadow-primary border-radius-lg p-3">
                  <h3 class="text-white text-primary mb-0">Kontak Kami</h3>
                </div>
              </div>
              <div class="card-body">
                <p class="">
                  <b>Library Sys</b></br>
                  Politeknik Negeri Malang</br>
                  Gedung Teknik Sipil lt.6</br>
                  Jl. Soekarno Hatta No. 9, Jatimulyo,</br>
                  Lowokwaru, Malang, Jawa Timur 65141</br></br>
                  Hubungi Kami: </br>
                  (0341) 404424</br>
                  +62 822 6455 9239 (Annisa)</br>
                  +62 821 4534 5250 (Rofika)
                </br>
                </br>
                </br>
                </br>
                </br>
                </br>
                </br>
                </br>
                </br>
                </br>
                </br>
                </br>
                </br>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  @include('partials.footer')
@endsection