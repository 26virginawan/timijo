@extends('layouts/app')

@section('content')

<div class="card">
    <div class="card-header">
         <form method="POST" action="{{ route('area.update', $area->id)}}"
                    enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{ method_field('put') }}
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label for="name">NAMA AREA:</label>
                                <input required="" type="text" name="name" id="name"
                                    class="form-control" value="{{$area->name}}">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary"><a"
                                href="{{ route('area.index')  }}"><i class="fas fa-caret-left fa-fw"></i>
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