@extends('layouts/app')

@section('content')

<div class="card">
    <div class="card-header">
         <form method="POST" action="{{ route('imgOB.store')  }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
					<div class="col-lg-6">
						<div class="img-holder"> </div>
						<div class="custom-file">
							<input type="file" class="custom-file-input" id="image" name="image"
								accept=".jpg, .png, .jpeg" required>
							<label class="custom-file-label" for="contohupload2">Choose file</label>
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