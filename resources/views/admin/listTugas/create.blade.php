@extends('layouts/app')

@section('content')

<div class="card">
    <div class="card-header">
         <form method="POST" action="{{ route('ListTugas.store')  }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label for="name">Nama List</label>
                                <input required="" type="text" name="name" id="name"
                                    class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary"><a"
                                href="{{ route('ListTugas.index')  }}"><i class="fas fa-caret-left fa-fw"></i>
                                CLOSE
                            </a></button>
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-save fa-fw"></i> SIMPAN
                        </button>
                    </div>
         </form>
    </div>
</div>

@endsection