@extends('layouts.main')
@include('partials.nav-index')
@section('content')  
  <header class="header-2">
    <div class="page-header min-vh-75 relative" style="background-image: url('./assets/img/bg2.jpg')">
      <span class="mask bg-gradient-primary opacity-4"></span>
      <div class="container">
        <div class="row">
          <div class="col-lg-7 text-center mx-auto">
            <h1 class="text-white pt-3 mt-n5">Material Kit 2</h1>
            <p class="lead text-white mt-3">Free & Open Source Web UI Kit built over Bootstrap 5. <br/> Join over 1.6 million developers around the world. </p>
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
                <h1 class="text-gradient text-primary"><span id="state1" countTo="70">0</span>+</h1>
                <h5 class="mt-3">Coded Elements</h5>
                <p class="text-sm font-weight-normal">From buttons, to inputs, navbars, alerts or cards, you are covered</p>
              </div>
              <hr class="vertical dark">
            </div>
            <div class="col-md-4 position-relative">
              <div class="p-3 text-center">
                <h1 class="text-gradient text-primary"> <span id="state2" countTo="15">0</span>+</h1>
                <h5 class="mt-3">Design Blocks</h5>
                <p class="text-sm font-weight-normal">Mix the sections, change the colors and unleash your creativity</p>
              </div>
              <hr class="vertical dark">
            </div>
            <div class="col-md-4">
              <div class="p-3 text-center">
                <h1 class="text-gradient text-primary" id="state3" countTo="4">0</h1>
                <h5 class="mt-3">Pages</h5>
                <p class="text-sm font-weight-normal">Save 3-4 weeks of work when you use our pre-made pages for your website</p>
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
              <div class="front front-background" style="background-image: url(https://images.unsplash.com/photo-1569683795645-b62e50fbf103?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=987&q=80); background-size: cover;">
                <div class="card-body py-7 text-center">
                  <i class="material-icons text-white text-4xl my-3">touch_app</i>
                  <h3 class="text-white">Feel the <br/> Material Kit</h3>
                  <p class="text-white opacity-8">All the Bootstrap components that you need in a development have been re-design with the new look.</p>
                </div>
              </div>
              <div class="back back-background" style="background-image: url(https://images.unsplash.com/photo-1498889444388-e67ea62c464b?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1365&q=80); background-size: cover;">
                <div class="card-body pt-7 text-center">
                  <h3 class="text-white">Discover More</h3>
                  <p class="text-white opacity-8"> You will save a lot of time going from prototyping to full-functional code because all elements are implemented.</p>
                  <a href=".//sections/page-sections/hero-sections.html" target="_blank" class="btn btn-white btn-sm w-50 mx-auto mt-3">Start with Headers</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 ms-auto mt-5">
          <div class="row justify-content-start">
            <div class="col-md-6">
              <div class="info">
                <i class="material-icons text-gradient text-primary text-3xl">content_copy</i>
                <h5 class="font-weight-bolder mt-3">Full Documentation</h5>
                <p class="pe-5">Built by developers for developers. Check the foundation and you will find everything inside our documentation.</p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="info">
                <i class="material-icons text-gradient text-primary text-3xl">flip_to_front</i>
                <h5 class="font-weight-bolder mt-3">Bootstrap 5 Ready</h5>
                <p class="pe-3">The world’s most popular front-end open source toolkit, featuring Sass variables and mixins.</p>
              </div>
            </div>
          </div>
          <div class="row justify-content-start mt-5">
            <div class="col-md-6 mt-3">
              <i class="material-icons text-gradient text-primary text-3xl">price_change</i>
              <h5 class="font-weight-bolder mt-3">Save Time & Money</h5>
              <p class="pe-5">Creating your design from scratch with dedicated designers can be very expensive. Start with our Design System.</p>
            </div>
            <div class="col-md-6 mt-3">
              <div class="info">
                <i class="material-icons text-gradient text-primary text-3xl">devices</i>
                <h5 class="font-weight-bolder mt-3">Fully Responsive</h5>
                <p class="pe-3">Regardless of the screen size, the website content will naturally fit the given resolution.</p>
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
            <span class="badge bg-primary mb-3">Infinite combinations</span>
            <h2 class="text-dark mb-0">Huge collection of sections</h2>
            <p class="lead">We have created multiple options for you to put together and customise into pixel perfect pages. </p>
          </div>
        </div>
      </div>
    </div>
  <section class="py-5">
    <div class="container">
      <div class="row">
        <div class="row text-center my-sm-5 mt-5">
          <div class="col-lg-6 mx-auto">
            <span class="badge bg-primary mb-3">Boost creativity</span>
            <h2 class="">With our coded pages</h2>
            <p class="lead">The easiest way to get started is to use one of our <br /> pre-built example pages. </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="py-7">
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
      <hr class="horizontal dark my-5">
      <div class="row">
        <div class="col-lg-2 col-md-4 col-6 ms-auto">
          <img class="w-100 opacity-6" src="./assets/img/logos/gray-logos/logo-apple.svg" alt="Logo">
        </div>
        <div class="col-lg-2 col-md-4 col-6">
          <img class="w-100 opacity-6" src="./assets/img/logos/gray-logos/logo-facebook.svg" alt="Logo">
        </div>
        <div class="col-lg-2 col-md-4 col-6">
          <img class="w-100 opacity-6" src="./assets/img/logos/gray-logos/logo-nasa.svg" alt="Logo">
        </div>
        <div class="col-lg-2 col-md-4 col-6 ms-lg-0 ms-md-auto">
          <img class="w-100 opacity-6" src="./assets/img/logos/gray-logos/logo-vodafone.svg" alt="Logo">
        </div>
        <div class="col-lg-2 col-md-4 col-6 me-md-auto mx-md-0 mx-auto">
          <img class="w-100 opacity-6" src="./assets/img/logos/gray-logos/logo-digitalocean.svg" alt="Logo">
        </div>
      </div>
    </div>
  </section>
  </div>
@endsection