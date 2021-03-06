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
					<h2>Daftar Tempat Wisata</h2>
				</div>
				<div class="col-sm my-3"> 
					<!-- <form method="GET" action="{{route('form')}}">
						<button type="submit" class="btn btn-primary pull-right">
							Tambah
						</button>
					</form>	 -->				
					<button type="button" class="btn btn-primary pull-right btnTambahTempatWisata" data-bs-toggle="modal" data-bs-target="#formTempatWisataModal">
						Tambah
					</button>
				</div>
			</div>
			@if (session('status'))
			<div class="alert alert-success">
				{{ session('status') }}
			</div>
			@endif			
			@foreach ($tempatWisataArrays as $tempatWisataArray)
			<div class="card my-1">
				<div class="card-body">
					<div class="row">
						<div class="col-sm align-items-center d-flex">			
							<!-- <h4>{{$tempatWisataArray['nama_tempat_wisata']}}</h4> -->
							<h4>{{$tempatWisataArray->nama_tempat_wisata}}</h4>
						</div>
						<div class="col-sm">
							<div class="clearfix">									
								<button type="button" class="btn btn-default btn-danger btn-sm pull-right mx-2" data-bs-toggle="modal" data-bs-target="#deleteTempatWisata">
									Hapus
								</button>								
								<a href="/tempat-wisata/{{$tempatWisataArray['id']}}" class="btn btn-default btn-success btn-sm pull-right mx-2">Detail</a>								
								<button type="button" class="btn btn-default btn-sm btn-primary pull-right mx-2 tempatWisataModalEdit" data-bs-toggle="modal" data-bs-target="#formTempatWisataModal" data-id="{{$tempatWisataArray['id']}}">
									Edit
								</button>							
							</div>													
						</div>
					</div>										
				</div>
			</div>

			@endforeach
		</div>
		<div class="col-sm">
			
		</div>
	</div>
	<div class="modal fade" id="formTempatWisataModal" tabindex="-1" aria-labelledby="formModalTitle" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<form action="{{route('tambah-tempat-wisata')}}" method="post" id="form_tempat_wisata">	
					<input type="hidden" name="id" id="id">
					<div class="modal-header">
						<h5 class="modal-title text-primary" id="formModalTitle">Tambah Tempat Wisata</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">

						@csrf
						<div class="form-group">
							<label for="nama_tempat_wisata">Nama Tempat Wisata</label>
							<input type="text" class="form-control" id="nama_tempat_wisata" name="nama_tempat_wisata" required>
						</div>


					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
						<button type="submit" class="btn btn-primary">Simpan</button>						
					</div>
				</form>
			</div>
		</div>
	</div>

	<div class="modal fade" id="deleteTempatWisata" tabindex="-1" aria-labelledby="modalTitleDelete" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title text-primary" id="modalTitleDelete">Hapus Tempat Wisata</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<h5>Apakah Anda yakin ingin menghapus?</h5>					
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
					<form method="post" action="/tempat-wisata/{{$tempatWisataArray['id']}}">
						@method('delete')
						@csrf
						<button type="submit" class="btn btn-danger">
							Hapus
						</button>
					</form>						
				</div>
			</div>
		</div>
	</div>

	

</div>



@endsection
