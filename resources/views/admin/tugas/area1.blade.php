@extends('layouts/app')

@section('content')

<!-- <div class="row">
    <div class="col-12"> -->
<div class="card mb-2">

    <!-- /.card-header -->
    <div class="card-body">
        <form method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-lg-6">
                    <label for="image">
                        Photo
                    </label>
                    <div class="img-holder"> </div>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="image" name="image"
                            accept=".jpg, .png, .jpeg" required>
                        <label class="custom-file-label" for="contohupload2">Choose file</label>
                    </div>
                </div>
            </div>
            <br>
    </div>
    <div class="modal-footer justify-content-left">
        <button type="button" class="btn btn-secondary"><a style="color:white;"
                href="{{Route('tugas')}}"><i class="fas fa-caret-left fa-fw"></i>
                BACK
            </a></button>
        <button type="submit" class="btn btn-primary">
            <i class="fas fa-save fa-fw"></i> SIMPAN
        </button>
    </div>
    </form>
</div>

<!-- /.card-body -->
<!-- </div> -->
<!-- /.card -->
<!-- </div> -->
<!-- /.col -->
<!-- </div> -->

<div class="card">
    <div class="card-header mt-4">
        <h3>Daftar Area 1</h3>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Kategori</th>
                        <th>Keterangan</th>
                        <th>Waktu</th>
                        <th>Foto</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Nama</td>
                        <td>Area 1</td>
                        <td>Koirul</td>
                        <td>09:10 12-2-2026</td>
                        <td>
                            <div class="flex-shrink-0 h-10 w-10">
                                <img class="h-10 w-10 rounded-full"
                                    src="sbadmin2/img/1.jpeg" alt="" style="width:80px;">
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection