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
					<button type="button" class="btn btn-primary pull-right btnTambahSpot" data-bs-toggle="modal" data-bs-target="#formSpotModal">
						Tambah
					</button>
				</div>
			</div>			
			@if (session('status'))
			<div class="alert alert-success">
				{{ session('status') }}
			</div>
			@endif		
			@foreach ($spotArrays as $spotArray)
			<div class="card my-1">
				<div class="card-body">
					<div class="row">
						<div class="col-sm align-items-center d-flex">			
							<h4>{{$spotArray['nama_spot']}}</h4>
						</div>
						<div class="col-sm">
							<div class="clearfix">	
								<button type="button" class="btn btn-default btn-danger btn-sm pull-right mx-2 spotModalHapus" data-bs-toggle="modal" data-bs-target="#deleteSpot" data-id="{{$tempatWisataArray['id']}}">
									Hapus
								</button>	
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

	<div class="modal fade" id="formSpotModal" tabindex="-1" aria-labelledby="formModalTitle" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<form action="{{route('tambah-spot')}}" method="post" id="form_spot">	
					<input type="hidden" name="id_tempat_wisata" id="id_tempat_wisata" value={{$id_req}}>
					<div class="modal-header">
						<h5 class="modal-title text-primary" id="formModalTitle">Tambah Spot</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">

						@csrf
						<div class="form-group">
							<label for="nama_spot">Nama Spot</label>
							<input type="text" class="form-control" id="nama_spot" name="nama_spot" required>
							<label for="link_vid_pagi">Link Video Pagi</label>
							<input type="text" class="form-control" id="link_vid_pagi" name="link_vid_pagi" required>
							<label for="link_aud_pagi">Link Suara Pagi</label>
							<input type="text" class="form-control" id="link_aud_pagi" name="link_aud_pagi" required>
							<label for="angin_pagi">Angin Pagi</label>
							<input type="text" class="form-control" id="angin_pagi" name="angin_pagi" required>
							<label for="suhu_pagi">Suhu Pagi</label>
							<input type="text" class="form-control" id="suhu_pagi" name="suhu_pagi" required>
							<label for="permukaan_pagi">Permukaan Pagi</label>
							<input type="text" class="form-control" id="permukaan_pagi" name="permukaan_pagi" required>
							<label for="link_vid_sore">Link Video Sore</label>
							<input type="text" class="form-control" id="link_vid_sore" name="link_vid_sore" required>
							<label for="link_aud_sore">Link Suara Sore</label>
							<input type="text" class="form-control" id="link_aud_sore" name="link_aud_sore" required>
							<label for="angin_sore">Angin Sore</label>
							<input type="text" class="form-control" id="angin_sore" name="angin_sore" required>
							<label for="suhu_sore">Suhu Sore</label>
							<input type="text" class="form-control" id="suhu_sore" name="suhu_sore" required>
							<label for="permukaan_sore">Permukaan Sore</label>
							<input type="text" class="form-control" id="permukaan_sore" name="permukaan_sore" required>
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
	<div class="modal fade" id="deleteSpot" tabindex="-1" aria-labelledby="modalTitleDelete" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<form method="post" action="/delete-spot/{{$spotArray['id']}}">						
					<input type="hidden" class="form-control" id="id_hapus" name="id_hapus">
					<div class="modal-header">
						<h5 class="modal-title text-primary" id="modalTitleDelete">Hapus Spot</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						@csrf
						<h5>Apakah Anda yakin ingin menghapus?</h5>					
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>	
						<button type="submit" class="btn btn-danger">
							Hapus
						</button>
					</div>
				</form>						
			</div>
		</div>
	</div>



</div>

@endsection
