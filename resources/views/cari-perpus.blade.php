
@extends('layouts.main')
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
           
          <form action="{{ route('perkota') }}" method="GET">
            <div class="row">
              <div class="col-auto">
                <select style="background-color:#f0f2f5; padding:5px;" class="form-control bg-linier-primary" name="cari" id="cari">
                  <option value="">Pilih Kota</option>
                  @if(!empty($kota))
                    @foreach($kota as $k) 
                    <option value="{{ $k->nama_kota }}">{{ $k->nama_kota }}</option>
                    @endforeach
                  @endif  
                </select>
              </div>
              <div class="col-auto">
                <button type="submit" value="cari" class="btn btn-sm bg-gradient-primary">Cari</button>
              </div>
            </div>
          </form>

        </div>
        <div class="col">
            <div class="container">
              <form action="{{ route('search') }}" method="GET">
                <div class="input-group input-group-dynamic mb-4">
                    <span class="input-group-text"><i type="submit" class="fas fa-search" value="search"></i></span>
                    <input class="form-control" name="search" placeholder="Nama Perpustakaan" type="text" value="{{ old('search') }}">
                    {{-- <button class="btn bg-gradient-primary" type="submit" value="cari">Cari</button> --}}
                </div>
              </form>
            </div>
        </div>
      
      </div>
      
  @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
  @endif
  @if(!empty($perpus))
    @foreach($perpus as $p)
      <ul class="list-unstyled">
        <li class="media">
            <a href="{{ route('perpus',$p->id) }}">
            <div class="card card-profile mt-4">
                <div class="row justify-content-start" style="padding-left: 5mm; padding-right: 5mm">
                  <div class="col-auto p-3">
                        <img class="rounded-circle" src="{{asset('storage/' . $p->foto_perpus)}}" alt="image" style="width: 5rem; height: 5rem; object-fit: cover;">
                  </div>
                  <div class="col-auto">
                    <div class="card-body ps-lg-0">
                      <h5 class="mb-0">{{ $p->nama_perpus }}</h5>
                      <h6 class="text-info">{{ $p->nama_kota}}</h6>
                    </div>
                  </div>
                </div>
            </div>
            </a>
        </li>
      </ul>
    @endforeach
  @endif
    </div>
  </section>
@endsection