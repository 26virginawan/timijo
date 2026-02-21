@extends('layouts/app')

@section('content')

<div class="card">
	<div class="card-header">
		<a href="{{ route('ListOB.create', $zona->id)  }}" class="btn btn-primary btn-sm">
			<i class="fas fa-plus fa-fw"></i> Tambah Data
		</a>
	</div>
	<div class="card-body">
		@forelse ($list_ob as $List)
		<ul>
			<!-- Nav Item - Pages Collapse Menu -->
			<li>
				<div class="row">
					<div class="col-lg-6">
						<label for="image">
							<a href="{{ route('imgOB.create')  }}">
							{{$List->name}} - ({{$List->keterangan}})</a>
						</label>
						<div class="img-holder"> </div>
						<div class="custom-file">
							<input type="file" class="custom-file-input" id="image" name="image"
								accept=".jpg, .png, .jpeg" required>
							<label class="custom-file-label" for="contohupload2">Choose file</label>
						</div>
					</div>
				</div>
			</li>
		</ul>
		@empty
		<tr>
			<td class="text-center text-sm text-gray-900 px-6 py-4 whitespace-nowrap" colspan="6">
				Data Empty
			</td>
		</tr>
		@endforelse
	</div>
</div>

@endsection