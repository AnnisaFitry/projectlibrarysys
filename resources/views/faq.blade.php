@extends('layouts.main')
@include('partials.nav-info')
@section('content')  
  <!-- -------- START Content Presentation Docs ------- -->
  <div class="container mt-sm-5">
    <div class="page-header py-6 py-md-5 my-sm-3 mb-3 border-radius-xl" style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/desktop.jpg');" loading="lazy">
      <span class="mask bg-gradient-dark"></span>
      <div class="container">
        <div class="row">
          <div class="col-lg-6 ms-lg-5">
            <h4 class="text-white">Built by developers</h4>
            <h1 class="text-white">Complex Documentation</h1>
            <p class="lead text-white opacity-8">From colors, cards, typography to complex elements, you will find the full documentation. Play with the utility classes and you will create unlimited combinations for our components.</p>
            <a href="https://www.creative-tim.com/learning-lab/bootstrap/overview/material-kit" class="text-white icon-move-right">
              Read docs
              <i class="fas fa-arrow-right text-sm ms-1"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
        <div class="info-horizontal bg-gradient-primary border-radius-xl d-block d-md-flex p-4">
          <i class="material-icons text-white text-3xl">flag</i>
          <div class="ps-0 ps-md-3 mt-3 mt-md-0">
            <h5 class="text-white">Getting Started</h5>
            <p class="text-white">Check the possible ways of working with our product and the necessary files for building your own project.</p>
            <a href="https://www.creative-tim.com/learning-lab/bootstrap/overview/material-kit" class="text-white icon-move-right">
              Let's start
              <i class="fas fa-arrow-right text-sm ms-1"></i>
            </a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 px-lg-1 mt-lg-0 mt-4">
        <div class="info-horizontal bg-gray-100 border-radius-xl d-block d-md-flex p-4 h-100">
          <i class="material-icons text-gradient text-primary text-3xl">precision_manufacturing</i>
          <div class="ps-0 ps-md-3 mt-3 mt-md-0">
            <h5>Plugins</h5>
            <p>Get inspiration and have an overview about the plugins that we used to create the Material Kit.</p>
            <a href="https://www.creative-tim.com/learning-lab/bootstrap/datepicker/material-kit" class="text-primary icon-move-right">
              Read more
              <i class="fas fa-arrow-right text-sm ms-1"></i>
            </a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 mt-lg-0 mt-4">
        <div class="info-horizontal bg-gray-100 border-radius-xl d-block d-md-flex p-4">
          <i class="material-icons text-gradient text-primary text-3xl">receipt_long</i>
          <div class="ps-0 ps-md-3 mt-3 mt-md-0">
            <h5>Utility Classes</h5>
            <p>Material Kit is giving you a lot of pre-made elements. For those who want flexibility, we included many utility classes.</p>
            <a href="https://www.creative-tim.com/learning-lab/bootstrap/utilities/material-kit" class="text-primary icon-move-right">
              Read more
              <i class="fas fa-arrow-right text-sm ms-1"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- -------- END Content Presentation Docs ------- -->
  <section class="py-sm-7" id="download-soft-ui">
    <div class="bg-gradient-dark position-relative m-3 border-radius-xl overflow-hidden">
      <img src="./assets/img/shapes/waves-white.svg" alt="pattern-lines" class="position-absolute start-0 top-md-0 w-100 opacity-2">
      <div class="container py-7 postion-relative z-index-2 position-relative">
        <div class="row">
          <div class="col-md-7 mx-auto text-center">
            <h3 class="text-white mb-0">Do you love this awesome</h3>
            <h3 class="text-white">UI Kit for Bootstrap 5?</h3>
            <p class="text-white mb-5">Cause if you do, it can be yours for FREE. Hit the button below to navigate to Creative Tim where you can find the Design System in HTML. Start a new project or give an old Bootstrap project a new look!</p>
            <a href="https://www.creative-tim.com/product/material-kit" class="btn btn-primary btn-lg mb-3 mb-sm-0">Download HTML</a>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-6 mx-auto">
          <div class="text-center">
            <h3 class="mt-5 mb-4">Available on these technologies</h3>
            <div class="row justify-content-center">
              <div class="col-lg-2 col-4">
                <a href="https://www.creative-tim.com/product/soft-ui-design-system" target="_blank">
                  <img src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/logos/bootstrap5.jpg" class="img-fluid" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Bootstrap 5 - Most popular front-end component library">
                </a>
              </div>
              <div class="col-lg-2 col-4">
                <a href="javascript:;">
                  <img src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/logos/icon-tailwind.jpg" class="img-fluid opacity-6" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Comming soon">
                </a>
              </div>
              <div class="col-lg-2 col-4">
                <a href="javascript:;">
                  <img src="https://s3.amazonaws.com/creativetim_bucket/tim_static_images/presentation-page/vue.jpg" class="img-fluid opacity-6" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Comming soon">
                </a>
              </div>
              <div class="col-lg-2 col-4">
                <a href="javascript:;">
                  <img src="https://s3.amazonaws.com/creativetim_bucket/tim_static_images/presentation-page/angular.jpg" class="img-fluid opacity-6" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Comming soon">
                </a>
              </div>
              <div class="col-lg-2 col-4">
                <a href="javascript:;">
                  <img src="https://s3.amazonaws.com/creativetim_bucket/tim_static_images/presentation-page/react.jpg" class="img-fluid opacity-6" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Comming soon">
                </a>
              </div>
              <div class="col-lg-2 col-4">
                <a href="javascript:;" target="_blank" >
                  <img src="https://s3.amazonaws.com/creativetim_bucket/tim_static_images/presentation-page/sketch.jpg" class="img-fluid opacity-6" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Comming soon">
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="my-5">
    <div class="container">
      <div class="row">
        <div class="col-md-7 col-12 my-auto">
          <h3 class="text-gradient text-primary mb-0">You liked it and</h3>
          <h3>Want more?</h3>
          <p class="pe-md-5 mb-4">
            Most complex and innovative Design System Made by <a href="https://creative-tim.com/" target="_blank">Creative Tim </a> . Check our latest Premium Bootstrap 5 UI Kit.
  
            Designed for those who like bold elements and beautiful websites. Made of hundred of elements, designed blocks and fully coded pages, Material Kit is ready to help you create stunning websites and webapps.
          </p>
          <div class="github-buttons">
            <a href="https://www.creative-tim.com/product/material-kit-pro?ref=index-mk2" target="_blank" class="btn bg-gradient-primary mb-5 mb-sm-0">Upgrade to Pro</a>
            <div class="github-button">
              <span></span>
            </div>
          </div>
        </div>
        <div class="col-md-5 col-12 my-auto">
          <a href="https://www.creative-tim.com/product/material-kit-pro?ref=index-mk2">
            <img class="w-100 border-radius-lg shadow-lg" src="https://s3.amazonaws.com/creativetim_bucket/products/46/original/material-kit-pro.jpg?1632843641" alt="Product Image">
          </a>
        </div>
      </div>
    </div>
  </section>
  <!-- -------   START PRE-FOOTER 2 - simple social line w/ title & 3 buttons    -------- -->
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-5 ms-auto">
          <h4 class="mb-1">Thank you for your support!</h4>
          <p class="lead mb-0">We deliver the best web products</p>
        </div>
        <div class="col-lg-5 me-lg-auto my-lg-auto text-lg-end mt-5">
          <a href="https://twitter.com/intent/tweet?text=Check%20Material%20UI%20Kit%20made%20by%20%40CreativeTim%20%23webdesign%20%23designsystem%20%23bootstrap5&url=https%3A%2F%2Fwww.creative-tim.com%2Fproduct%2Fmaterial-kit" class="btn btn-twitter mb-0 me-2" target="_blank">
            <i class="fab fa-twitter me-1"></i> Tweet
          </a>
          <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.creative-tim.com/product/material-kit" class="btn btn-facebook mb-0 me-2" target="_blank">
            <i class="fab fa-facebook-square me-1"></i> Share
          </a>
          <a href="https://www.pinterest.com/pin/create/button/?url=https://www.creative-tim.com/product/material-kit" class="btn btn-pinterest mb-0 me-2" target="_blank">
            <i class="fab fa-pinterest me-1"></i> Pin it
          </a>
        </div>
      </div>
    </div>
  </div>
@endsection