@extends('layouts.main')
@section('content')  
<div class="container">
    <div class="row my-5">
        <div class="card card-outline-secondary my-4">
            <div class="card-header" style="padding: 1rem">
                <h2>Detail Buku</h2>
            </div>
            <div class="card-body" style="padding: 1rem">
                <div class="row">
                    <div class="col-xl-5 col-lg-5 col-md-6">
                        <img style="width:300px;height:400px;object-fit: cover;" src="{{asset('/assets/img/buku.jpg')}}" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg" loading="lazy">
                        
                    </div>
                    <div class="col-xl-7 col-lg-7 col-md-6 mt-5">
                        <div class="row">
                            <div class="col-auto me-auto"><h2></h2></div>
                            <div class="col-auto"><button type="button" class="btn btn-outline-primary mb-0">Pinjam</button></div>
                            
                            <h5>Kode Buku :</h5><h6></h6>
                            <h5>ISBN :</h5><h6></h6>
                            <h5>Pengarang :</h5><h6></h6>
                            <h5>Jumlah :</h5><h6></h6>
                            <h5>Kategori :</h5><h6></h6>
                            <h4>Pemilik :</h4>
                            <p></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection