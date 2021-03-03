@extends('app')

@section('content')
<nav class="navbar navbar-expand-lg navbar-dark bg-dark py-2">
	<div class="container-fluid">
		<a class="navbar-brand" href="#">Home</a>		
		<form method="GET" action="{{route('logout')}}">
			<button type="submit" class="btn btn-danger">Logout</button>
		</form>		
	</div>
</nav>
<div class="container-fluid p-3">
	<div class="row align-items-center d-flex">
		<div class="col-sm">
			<div class="row">
				<div class="col-sm my-3">
					<h2>Daftar Spot</h2>
				</div>
				<div class="col-sm my-3">
					<button type="button" class="btn btn-primary pull-right" data-bs-toggle="modal" data-bs-target="#formSpotModal">
						Tambah
					</button>
				</div>
			</div>			
			@foreach ($spotArrays as $spotArray)
			<div class="card my-1">
				<div class="card-body">
					<div class="row">
						<div class="col-sm align-items-center d-flex">			
							<h4>{{$spotArray['nama_spot']}}</h4>
						</div>
						<div class="col-sm">
							<div class="clearfix">	
								<a href="" class="btn btn-default btn-danger btn-sm pull-right mx-2"> Hapus </a>
								<a href="" class="btn btn-default btn-primary btn-sm pull-right mx-2"> Edit </a>
							</div>							
						</div>
					</div>										
				</div>
			</div>

			@endforeach

			<div class="row mt-5">
				<div class="col-sm my-3">
					<h4>Tombol Spot</h4>
				</div>
				<div class="col-sm my-3">
					<form method="GET" action="{{route('form')}}">
						<button type="submit" class="btn btn-primary pull-right">
							Tambah
						</button>
					</form>					
				</div>
			</div>
		</div>
		<div class="col-sm">			

		</div>
	</div>
	<!-- <div class="modal fade" id="formSpotModal" tabindex="-1" aria-labelledby="modalTitle" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="modalTitle">Tambah Spot</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<form action="{{route('tambah-tempat-wisata')}}" method="post">	
						@csrf
						<div class="form-group">
							<label for="nama_tempat_wisata">Nama Spot</label>
							<input type="text" class="form-control" id="nama_tempat_wisata" name="nama_tempat_wisata" required>
						</div>


					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
						<button type="submit" class="btn btn-primary">Simpan</button>
					</form>
				</div>
			</div>
		</div>
	</div> -->
</div>

@endsection
