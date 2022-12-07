@extends('layouts.main')
@section('content')
@if (session('status')) 
    {{ session('status') }} 
@endif
@include('partials.nav-admin')
<header class="header-2">
    <div class="page-header min-vh-75 relative" style="background-image: url('./assets/img/admin.jpg')">
      <span class="mask bg-gradient-primary opacity-4"></span>
      <div class="container">
        <div class="row">
          <div class="col-lg-7 text-center mx-auto">
        
                <h1 class="text-white pt-3 mt-n5">Selamat Datang Admin</h1>
                <p class="lead text-white mt-3">LibrarySys - Platform Digitalisasi Perpustakaan Indonesia</p>
                <div class="card-body">
           
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <div class="container" style="background:white; padding: 20px;">
    <div class="table-responsive">
        <table class="table table-hover mb-4">
            <thead>
                <tr>
                    <th class="text-center">Perpustakaan</th>
                    <th class="text-center">Status</th>
                    <th class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                @if(!empty($acc))
                    @foreach($acc as $acc)
                    <tr>
                        <td>{{ $acc->nama_perpus }}</td>
                        @if( $acc->status == 1)
                        <td class="text-center">
                            <span class="text-secondary">ACCEPTANCE
                            </span>
                        </td>
                        @elseif( $acc->status == 2)
                        <td class="text-center">
                            <span class="text-secondary">DECLINE
                            </span>
                        </td>
                        @else
                        <td class="text-center">
                            <span class="text-secondary">WAITING
                            </span>
                        </td>
                        @endif
                        <td class="text-center">
                            <button type="button" class="btn bg-gradient-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Detail</button>
                        </td>
                    </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <<div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Detail</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <form action="" method="post" id="formupdate">
                    <div class="modal-body">
                        <div class="text-center user-info">
                            <img src="../assets/img/perpus.jpg" alt="avatar" style="width: 200px;height: 200px;object-fit: cover;">
                        </div>
                        <input type="text" name="id_webinar" class="form-control" value="" hidden>

                        <div class="form-group mb-4">
                            <label class="control-label">Nama Perpustakaan:</label>
                            <input type="text" name="title" class="form-control" value="" readonly>
                        </div>
                        <div class="form-group mb-4">
                            <label class="control-label">Bio:</label>
                            <textarea style="height: 150px;" name="description" class="form-control" value="" readonly></textarea>
                        </div>
                        <div class="form-group mb-4">
                            <label class="control-label">Alamat:</label>
                            <input type="text" name="" value="" class="form-control" readonly>
                        </div>
                        <div class="form-group mb-4">
                            <label class="control-label">Kota:</label>
                            <input type="text" name="" value="" class="form-control" readonly>
                        </div>
                        <div class="form-group mb-4">
                            <label class="control-label">No. Telphone:</label>
                            <input type="text" name="" value="" class="form-control" readonly>
                        </div>
                        <div class="form-group mb-4">
                            <label class="control-label">Status:</label>
                            <select name="acceptance" id="" class="selectpicker form-control" form="formupdate" style="margin-left: 0.25rem;">
                                <option value="1">Accept</option>
                                <option value="2">Decline</option>
                            </select>
                        </div>
                        <div class="form-group mb-4">
                            <label class="control-label">Pesan:</label>
                            <textarea style="height: 150px;" name="message" class="form-control"></textarea>
                        </div>


                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn bg-gradient-dark mb-0" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn bg-gradient-primary mb-0">Save changes</button>
                      </div>
                    </form>
                </div>
              </div>
            </div>
        </div>
</div>
@endsection

