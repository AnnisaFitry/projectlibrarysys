@extends('layouts.main')
@include('partials.nav-index')
@section('content')  
  <header class="header">
      <div class="container" style="padding: 50px;">
      </div>
  </header>
    <div class="container" style="background:white; padding: 20px;">
        <div class="table-responsive">
            <table class="table table-bordered table-hover mb-4">
                <thead>
                    <tr>
                        <th class="text-center">Pesan</th>
                        <th class="text-center">Buku</th>
                    </tr>
                </thead>
                <tbody>
                        <tr>
                            <td>Pemberitahuan</td>
                            <td>Judul Buku</td>
                        </tr>
                </tbody>
            </table>
        </div>
  </div>
@endsection
