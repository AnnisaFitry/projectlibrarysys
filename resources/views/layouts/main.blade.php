<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="icon" type="image/png" href="{{ asset('assets/img/logo.png') }}" style="border-radius: 50%;">
<title>  
    Library Sys
</title>
<!--     Fonts and icons     -->
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
<!-- Nucleo Icons -->
<link href="{{ asset('assets/css/nucleo-icons.css') }}" rel="stylesheet" />
<link href="{{ asset('assets/css/nucleo-svg.css') }}" rel="stylesheet" />
<!-- Font Awesome Icons -->
<script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
<!-- Material Icons -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
<!-- CSS Files -->
<link id="pagestyle" href="{{ asset('assets/css/material-kit.css?v=3.0.4') }}" rel="stylesheet" />
</head>
<body class="index-page bg-gray-200">
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
              <li class="nav-item ms-lg-auto">
                <a class="nav-link nav-link-icon me-2" href="{{ route('cari-perpus')}}">
                  <p class="d-inline text-sm z-index-1 font-weight-bold" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Cari Perpustakaan Terdekat">Perpustakaan</p>
                </a>
              </li>
            @guest
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
                <a class="nav-link nav-link-icon me-2" href="{{ route('pustakawan.pengikut')}}">
                  <p class="d-inline text-sm z-index-1 font-weight-bold" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Notifikasi">Pengikut</p>
                </a>
              </li>
              <li class="nav-item ms-lg-auto">
                <a class="nav-link nav-link-icon me-2" href="{{ route('pustakawan.peminjaman')}}">
                  <p class="d-inline text-sm z-index-1 font-weight-bold" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Pinjam Buku">Peminjaman</p>
                </a>
              </li>
              <li class="nav-item ms-lg-auto">
                <a class="nav-link nav-link-icon me-2" href="{{ route('pustakawan.bukuku')}}">
                  <p class="d-inline text-sm z-index-1 font-weight-bold" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Akun Saya">Buku Ku</p>
                </a>
              </li>
              @endif
              @Auth
              @if(Auth::user()->role == 3)
              <li class="nav-item ms-lg-auto">
                <a class="nav-link nav-link-icon me-2" href="{{ route('pinjaman.show', Auth::user()->getId())}}">
                  <p class="d-inline text-sm z-index-1 font-weight-bold" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Pinjam Buku">Pinjaman</p>
                </a>
              </li>
              <li class="nav-item ms-lg-auto">
                <a class="nav-link nav-link-icon me-2" href="{{ route('pemberitahuan.show', Auth::user()->getId())}}">
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
              @endauth
              @endguest
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </div>
</div>

    @yield('content')
<!--   Core JS Files   -->
<script src="{{ asset('assets/js/core/popper.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/core/bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
<!--  Plugin for TypedJS, full documentation here: https://github.com/inorganik/CountUp.js -->
<script src="{{ asset('assets/js/plugins/countup.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/choices.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/prism.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/highlight.min.js') }}"></script>
<!--  Plugin for Parallax, full documentation here: https://github.com/dixonandmoe/rellax -->
<script src="{{ asset('assets/js/plugins/rellax.min.js') }}"></script>
<!--  Plugin for TiltJS, full documentation here: https://gijsroge.github.io/tilt.js/ -->
<script src="{{ asset('assets/js/plugins/tilt.min.js') }}"></script>
<!--  Plugin for Selectpicker - ChoicesJS, full documentation here: https://github.com/jshjohnson/Choices -->
<script src="{{ asset('assets/js/plugins/choices.min.js') }}"></script>
<!--  Plugin for Parallax, full documentation here: https://github.com/wagerfield/parallax  -->
<script src="{{ asset('assets/js/plugins/parallax.min.js') }}"></script>
<!-- Control Center for Material UI Kit: parallax effects, scripts for the example pages etc -->
<!--  Google Maps Plugin    -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTTfWur0PDbZWPr7Pmq8K3jiDp0_xUziI"></script>
<script src="{{ asset('assets/js/material-kit.min.js?v=3.0.4') }}" type="text/javascript"></script>
<script type="text/javascript">
  if (document.getElementById('state1')) {
    const countUp = new CountUp('state1', document.getElementById("state1").getAttribute("countTo"));
    if (!countUp.error) {
      countUp.start();
    } else {
      console.error(countUp.error);
    }
  }
  if (document.getElementById('state2')) {
    const countUp1 = new CountUp('state2', document.getElementById("state2").getAttribute("countTo"));
    if (!countUp1.error) {
      countUp1.start();
    } else {
      console.error(countUp1.error);
    }
  }
  if (document.getElementById('state3')) {
    const countUp2 = new CountUp('state3', document.getElementById("state3").getAttribute("countTo"));
    if (!countUp2.error) {
      countUp2.start();
    } else {
      console.error(countUp2.error);
    };
  }
</script>
<script>

  function getHeight() {
      var getMapElement = document.getElementById('basic_map1');
      var getWindowHeight = window.innerHeight;
      var setHeightOfMap = getMapElement.style.height = getWindowHeight + 'px';

  }
  getHeight();

  window.addEventListener('resize', function(event){
    getHeight();
  })

  function initMap() {
      var myLatLng = {lat: -7.9467136, lng: 112.6156684};

      var map = new google.maps.Map(document.getElementById('basic_map1'), {
        center: myLatLng,
        zoom: 15,
        minZoom: 18,
        maxZoom: 20,
        disableDefaultUI: true,
        styles : [
            {
              "elementType": "geometry",
              "stylers": [
                {
                  "color": "#a6c0ff"
                }
              ]
            },
            {
              "elementType": "labels",
              "stylers": [
                {
                  "color": "#6de84f"
                },
                {
                  //"visibility": "off"
                }
              ]
            },
            {
              "elementType": "labels.icon",
              "stylers": [
                {
                  //"visibility": "off"
                }
              ]
            },
            {
              "elementType": "labels.text.fill",
              "stylers": [
                {
                  "color": "#616161"
                }
              ]
            },
            {
              "elementType": "labels.text.stroke",
              "stylers": [
                {
                  "color": "#f1f2f3"
                }
              ]
            },
            {
              "featureType": "administrative",
              "elementType": "geometry",
              "stylers": [
                {
                  //"visibility": "off"
                }
              ]
            },
            {
              "featureType": "administrative.land_parcel",
              "stylers": [
                {
                  //"visibility": "off"
                }
              ]
            },
            {
              "featureType": "administrative.land_parcel",
              "elementType": "labels.text.fill",
              "stylers": [
                {
                  "color": "#bdbdbd"
                }
              ]
            },
            {
              "featureType": "administrative.neighborhood",
              "stylers": [
                {
                  //"visibility": "off"
                }
              ]
            },
            {
              "featureType": "poi",
              "stylers": [
                {
                  //"visibility": "off"
                }
              ]
            },
            {
              "featureType": "poi",
              "elementType": "geometry",
              "stylers": [
                {
                  "color": "#eeeeee"
                }
              ]
            },
            {
              "featureType": "poi",
              "elementType": "labels.text.fill",
              "stylers": [
                {
                  "color": "#757575"
                }
              ]
            },
            {
              "featureType": "poi.park",
              "elementType": "geometry",
              "stylers": [
                {
                  "color": "#e5e5e5"
                }
              ]
            },
            {
              "featureType": "poi.park",
              "elementType": "labels.text.fill",
              "stylers": [
                {
                  "color": "#9e9e9e"
                }
              ]
            },
            {
              "featureType": "road",
              "stylers": [
                {
                  "color": "#fbf7fa"
                }
              ]
            },
            {
              "featureType": "road",
              "elementType": "geometry",
              "stylers": [
                {
                  "color": "#eaf1ff"
                }
              ]
            },
            {
              "featureType": "road",
              "elementType": "labels",
              "stylers": [
                {
                  "color": "#81a0f5"
                }
              ]
            },
            {
              "featureType": "road",
              "elementType": "labels.icon",
              "stylers": [
                {
                  "visibility": "off"
                }
              ]
            },
            {
              "featureType": "road.arterial",
              "elementType": "labels.text.fill",
              "stylers": [
                {
                  "color": "#757575"
                }
              ]
            },
            {
              "featureType": "road.highway",
              "elementType": "geometry",
              "stylers": [
                {
                  "color": "#e9f5f2"
                },
                {
                  "visibility": "on"
                }
              ]
            },
            {
              "featureType": "road.highway",
              "elementType": "geometry.fill",
              "stylers": [
                {
                  "color": "#eaf1ff"
                },
                {
                  "visibility": "on"
                }
              ]
            },
            {
              "featureType": "road.highway",
              "elementType": "labels.text.fill",
              "stylers": [
                {
                  "color": "#616161"
                }
              ]
            },
            {
              "featureType": "road.local",
              "elementType": "labels.text.fill",
              "stylers": [
                {
                  "color": "#9e9e9e"
                }
              ]
            },
            {
              "featureType": "transit",
              "stylers": [
                {
                  "visibility": "off"
                }
              ]
            },
            {
              "featureType": "transit.line",
              "elementType": "geometry",
              "stylers": [
                {
                  "color": "#e5e5e5"
                }
              ]
            },
            {
              "featureType": "transit.station",
              "elementType": "geometry",
              "stylers": [
                {
                  "color": "#eeeeee"
                }
              ]
            },
            {
              "featureType": "water",
              "elementType": "geometry",
              "stylers": [
                {
                  "color": "#3b3f5c"
                }
              ]
            },
            {
              "featureType": "water",
              "elementType": "labels.text.fill",
              "stylers": [
                {
                  "color": "#9e9e9e"
                }
              ]
            }
          ]

      });

      var marker = new google.maps.Marker({
        position: myLatLng,
        map: map,
        title: 'Webion, Inc.',
        animation: google.maps.Animation.BOUNCE
      });
  }

  const contact = new PerfectScrollbar('.contact-form form', {
      wheelSpeed:.5,
      swipeEasing:!0,
      minScrollbarLength:40,
      maxScrollbarLength:300
  });
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDoOlJCERKYB1Cp-C89_sscNkelSfeeBnw&callback=initMap" async defer></script>
</body>
</html>
