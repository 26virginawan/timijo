@extends('layouts/app')

@section('content')

<div class="card">
	<div class="card-header">
		<div>
			<a href="#" class="btn btn-sm btn-primary"> <i class="fas fa-plus"></i> Tambah Data</a>
		</div>
	</div>
	<div class="card-body">

		<ul>
			<!-- Nav Item - Pages Collapse Menu -->
			<li class="nav-item">
				<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsetree"
					aria-expanded="true" aria-controls="collapsetree">
					<span>AREA 1</span>
				</a>
				<div id="collapsetree" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
					<ol class="list-group list-group-numbered">
						<div class="bg-white py-2 collapse-inner rounded">
							<a class="collapse-item" href="{{Route('area1')}}">Menyapu</a>
						</div>
					</ol>
					<ol class="list-group list-group-numbered">
						<div class="bg-white py-2 collapse-inner rounded">
							<a class="collapse-item" href="buttons.html">Membuang Sampah</a>
						</div>
					</ol>
				</div>
			</li>

			<!-- Nav Item - Utilities Collapse Menu -->
			<li class="nav-item">
				<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
					aria-expanded="true" aria-controls="collapseUtilities">
					<span>AREA 2</span>
				</a>
				<div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
					data-parent="#accordionSidebar">
					<div class="bg-white py-2 collapse-inner rounded">
						<a class="collapse-item" href="utilities-color.html">Colors</a>
						<a class="collapse-item" href="utilities-border.html">Borders</a>
						<a class="collapse-item" href="utilities-animation.html">Animations</a>
						<a class="collapse-item" href="utilities-other.html">Other</a>
					</div>
				</div>
			</li>
		</ul>
	</div>
</div>

@endsection