@extends('layouts.main')
@include('partials.nav-index')
@section('content')  
  <header class="header">
      <div class="container" style="padding: 50px;">
      </div>
  </header>
    <div class="container" style="background:white; padding: 20px;">

        <div class="row mt-3">
          <div class="col-2">
            <!-- Button trigger modal -->
            <button type="button" class="btn bg-gradient-primary" data-bs-toggle="modal" data-bs-target="#tambahbuku">
              Tambah Buku
            </button>
      
            <!-- Modal -->
            <div class="modal fade" id="tambahbuku" tabindex="-1" aria-labelledby="tambahbukuLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="tambahbukuLabel">Tambah Buku</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <form action="" method="post" id="formupdate">
                    <div class="modal-body">
                      <div class="form-group mb-4">
                        <label class="control-label">Cover:</label>

                        <div class="input-group mb-3" >

                            <div class="custom-file">
                                <input type="hidden" name="MAX_FILE_SIZE" value="3000000">

                                <input type="file" class="form-control" name="image_cover" style="background-color:#f0f2f5">
                            </div>
                        </div>
                      </div>

                        <div class="form-group mb-4">
                            <label class="control-label">Kode Buku:</label>
                            <input type="text" name="title" class="form-control" value="" style="background-color:#f0f2f5">
                        </div>
                        <div class="form-group mb-4">
                          <label class="control-label">Judul Buku:</label>
                          <input type="text" name="" value="" class="form-control" style="background-color:#f0f2f5">
                      </div>
                        <div class="form-group mb-4">
                            <label class="control-label">ISBN:</label>
                            <input type="text" name="" value="" class="form-control" style="background-color:#f0f2f5">
                        </div>
                        <div class="form-group mb-4">
                          <label class="control-label">Pengarang:</label>
                          <input type="text" name="" value="" class="form-control" style="background-color:#f0f2f5">
                      </div>
                      <div class="form-group mb-4">
                        <label class="control-label">Penerbit:</label>
                        <input type="text" name="" value="" class="form-control" style="background-color:#f0f2f5">
                      </div>
                      <div class="form-group mb-4">
                        <label class="control-label">Jumlah:</label>
                        <input type="number" name="max_caps" class="form-control" style="background-color:#f0f2f5">
                      </div>
                        <div class="form-group mb-4">
                            <label class="control-label">Kategori:</label>
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
        </div>
        <div class="table-responsive">
            <table class="table table-bordered table-hover mb-4">
                <thead>
                    <tr>
                        <th class="text-center">Buku</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                        <tr>
                            <td>Judul Buku</td>
                            <td class="text-center">
                                <button type="button" class="btn bg-gradient-info">Detail</button>
                                <button type="button" class="btn bg-gradient-primary" data-bs-toggle="modal" data-bs-target="#updatebuku">Update</button>
                                <button type="button" class="btn bg-gradient-danger">Delete</button>
                              </td>
                        </tr>
                </tbody>
            </table>
        </div>
        <div class="modal fade" id="updatebuku" tabindex="-1" aria-labelledby="updatebukuLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <<div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="updatebukuLabel">Detail</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <form action="" method="post" id="formupdate">
                        <div class="modal-body">
                            <div class="text-center user-info">
                                <img src="../assets/img/buku.jpg" alt="avatar" style="width: 300px; object-fit: cover;">
                            </div>
                            <input type="text" name="id_webinar" class="form-control" value="" hidden>
                            <div class="form-group mb-4">
                              <label class="control-label">Cover:</label>
      
                              <div class="input-group mb-3">
      
                                  <div class="custom-file">
                                      <input type="hidden" name="MAX_FILE_SIZE" value="3000000">
      
                                      <input type="file" class="form-control" name="image_cover" style="background-color:#f0f2f5">
      
                                      <!-- <input type="file" class="custom-file-input" name="cover_image">
                                      <label class="custom-file-label" for="inputGroupFile01">Choose file</label> -->
                                  </div>
                              </div>
                            </div>
                            <div class="form-group mb-4">
                                <label class="control-label">Kode Buku:</label>
                                <input type="text" name="title" class="form-control" value="" style="background-color:#f0f2f5">
                            </div>
                            <div class="form-group mb-4">
                              <label class="control-label">Judul Buku:</label>
                              <input type="text" name="" value="" class="form-control" style="background-color:#f0f2f5">
                          </div>
                            <div class="form-group mb-4">
                                <label class="control-label">ISBN:</label>
                                <input type="text" name="" value="" class="form-control" style="background-color:#f0f2f5">
                            </div>
                            <div class="form-group mb-4">
                              <label class="control-label">Pengarang:</label>
                              <input type="text" name="" value="" class="form-control" style="background-color:#f0f2f5">
                          </div>
                          <div class="form-group mb-4">
                            <label class="control-label">Penerbit:</label>
                            <input type="text" name="" value="" class="form-control" style="background-color:#f0f2f5">
                          </div>
                          <div class="form-group mb-4">
                            <label class="control-label">Jumlah:</label>
                            <input type="number" name="max_caps" class="form-control" style="background-color:#f0f2f5">
                          </div>
                            <div class="form-group mb-4">
                                <label class="control-label">Kategori:</label>
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
  </div>
@endsection
