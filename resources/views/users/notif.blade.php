@extends('layouts.main')
@section('content')  
@Auth
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
                    @if(!empty($pinjam))
                    @foreach($pinjam as $pinjam)
                        <tr>
                            <td>{{ $pinjam->nama_pemberitahuan }}</td>
                            <td>{{ $pinjam->judul_buku }}</td>
                        </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>
  </div>
@endauth
@endsection
