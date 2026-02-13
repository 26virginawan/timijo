@extends('layouts.app')

@section('content')

<div class="card">
    <div class="card-header">

    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Posisi</th>
                        <th>Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Koirul</td>
                        <td>Area 1</td>
                        <td class="text-center">
                            <a href="#" class="btn btn-warning btn-sm"> <i class="fas fa-edit"></i></a>
                            <a href="#" class="btn btn-danger btn-sm"> <i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection