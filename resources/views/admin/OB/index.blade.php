@extends('layouts/app')

@section('content')

<div class="card">
    <div class="card-header">
        <a href="{{ route('zonaOB.create')  }}" class="btn btn-primary btn-sm">
            <i class="fas fa-plus fa-fw"></i> Tambah Data
        </a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($zona as $dt)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>
                            <a href="{{Route('ListOB',$dt->id)}}">{{$dt->name}}</td></a>
                        <td>
                            <div class="row">
                                <a href="{{route('zonaOB.edit', $dt->id)}}"
                                    class="btn btn-primary btn-sm ml-2">Edit</a>
                                <form action="{{ route('zonaOB.destroy', $dt->id) }}"
                                    class="pull-left" method="post">
                                    {{ csrf_field() }}
                                    {{ method_field('delete') }}
                                    <button class="btn btn-danger btn-sm ml-2"
                                        onclick="return confirm('Anda yakin ingin menghapus data ini?')">
                                        Delete
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td class="text-center text-sm text-gray-900 px-6 py-4 whitespace-nowrap" colspan="6">
                            Data Empty
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection