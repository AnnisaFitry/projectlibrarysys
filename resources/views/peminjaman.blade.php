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
                        <th class="text-center">Peminjam</th>
                        <th class="text-center">Kota</th>
                        <th class="text-center">Buku</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                        <tr>
                            <td>Nama Anggota</td>
                            <td>Nama Kota</td>
                            <td>Buku</td>
                            <td class="text-center">
                                <button type="button" class="btn bg-gradient-info" data-bs-toggle="modal" data-bs-target="#pinjam">Pinjam</button>
                                <button type="button" class="btn bg-gradient-success" data-bs-toggle="modal" data-bs-target="#kembali">Kembali</button>
                                <button type="button" class="btn bg-gradient-danger">Hapus</button>
                              </td>
                        </tr>
                </tbody>
            </table>
        </div>
        <div class="modal fade" id="pinjam" tabindex="-1" aria-labelledby="pinjamLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <<div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="pinjamLabel">Pinjam</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <form action="" method="post" id="formupdate">
                        <div class="modal-body">
                            <input type="text" name="id_webinar" class="form-control" value="" hidden>
                            <div class="form-group mb-4">
                              <div class="form-group mb-4">
                                <label class="control-label">Tanggal Pinjam:</label>
                                <input type="datetime-local" name="time_start" class="form-control" style="background-color:#f0f2f5">
                            </div>
                            <div class="form-group mb-4">
                              <label class="control-label">Denda:</label>
                              <input type="text" name="" value="" class="form-control" style="background-color:#f0f2f5">
                          </div>
                          <div class="form-group mb-4">
                            <label class="control-label">Status:</label>
                            <select name="acceptance" id="" class="selectpicker form-control" form="formupdate" style="margin-left: 0.25rem;">
                                <option value="1">Accept</option>
                                <option value="2">Decline</option>
                            </select>
                        </div>
                          <div class="form-group mb-4">
                            <label class="control-label">Jumlah Hari:</label>
                            <input type="number" name="max_caps" class="form-control" style="background-color:#f0f2f5">
                          </div>
                            <div class="form-group mb-4">
                                <label class="control-label">Pemberitahuan:</label>
                                <select name="acceptance" id="" class="selectpicker form-control" form="formupdate" style="margin-left: 0.25rem;">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                </select>
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

            <div class="modal fade" id="kembali" tabindex="-1" aria-labelledby="kembaliLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                  <<div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="kembaliLabel">Kembali</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="" method="post" id="formupdate">
                          <div class="modal-body">
                              <input type="text" name="id_webinar" class="form-control" value="" hidden>
                              <div class="form-group mb-4">
                                <div class="form-group mb-4">
                                  <label class="control-label">Tanggal Kembali:</label>
                                  <input type="datetime-local" name="time_start" class="form-control" style="background-color:#f0f2f5">
                              </div>
                              <div class="form-group mb-4">
                                <label class="control-label">Total Denda:</label>
                                <input type="text" name="" value="" class="form-control" style="background-color:#f0f2f5">
                            </div>
                            <div class="form-group mb-4">
                              <label class="control-label">Status:</label>
                              <select name="acceptance" id="" class="selectpicker form-control" form="formupdate" style="margin-left: 0.25rem;">
                                  <option value="1">Accept</option>
                                  <option value="2">Decline</option>
                              </select>
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
