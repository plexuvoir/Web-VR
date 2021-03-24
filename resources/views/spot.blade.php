@extends('app')

@section('content')
<nav class="navbar navbar-expand-lg navbar-dark bg-dark py-2">
	<div class="container-fluid">
		<a class="navbar-brand" href="/admin-home">Home</a>		
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
					@foreach ($namaTempatWisataArrays as $namaTempatWisataArray)
					<h2>{{$namaTempatWisataArray['nama_tempat_wisata']}}</h2>
					@endforeach
				</div>
				<div class="col-sm my-3">					
					<button type="button" class="btn btn-primary pull-right btnTambahSpot" data-bs-toggle="modal" data-bs-target="#formSpotModal">
						Tambah Spot
					</button>
				</div>
			</div>			
			@if (session('status'))
			<div class="alert alert-success">
				{{ session('status') }}
			</div>
			@endif		
			@forelse ($spotArrays as $spotArray)
			<div class="card my-1">
				<div class="card-body">
					<div class="row">
						<div class="col-sm align-items-center d-flex">			
							<h4>{{$spotArray['nama_spot']}}</h4>
						</div>
						<div class="col-sm">
							<div class="clearfix">	
								<button type="button" class="btn btn-default btn-danger btn-sm pull-right mx-2 spotModalHapus" data-bs-toggle="modal" data-bs-target="#deleteSpot" data-id="{{$spotArray['id_spot']}}">
									Hapus
								</button>	
								<button type="button" class="btn btn-default btn-sm btn-primary pull-right mx-2 spotModalEdit" data-bs-toggle="modal" data-bs-target="#formSpotModal" data-id="{{$spotArray['id_spot']}}">
									Edit
								</button>
							</div>							
						</div>
					</div>										
				</div>
			</div>
			<div class="modal fade" id="deleteSpot" tabindex="-1" aria-labelledby="modalTitleDelete" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<form method="post" action="/delete-spot/{{$spotArray['id_spot']}}">
							<input type="hidden" name="id_tempat_wisata_hapus" id="id_tempat_wisata_hapus">		
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

			<div class="modal fade" id="deleteSpot" tabindex="-1" aria-labelledby="modalTitleDelete" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<form method="post" action="/delete-spot/{{$spotArray['id_spot']}}">
							<input type="hidden" name="id_tempat_wisata_hapus" id="id_tempat_wisata_hapus">		
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
			@empty
			<div class="alert alert-secondary">
				Belum ada spot.
			</div>					


			@endforelse

			<div class="row mt-5">
				<div class="col-sm my-3">
					<h4>Tombol Spot</h4>
				</div>
				<div class="col-sm my-3">
					<button type="button" class="btn btn-primary pull-right btnTambahTombol" data-bs-toggle="modal" data-bs-target="#formTombolModal">
						Tambah
					</button>		
				</div>
			</div>
			@if (session('status_tombol'))
			<div class="alert alert-success">
				{{ session('status_tombol') }}
			</div>
			@endif	
			@forelse ($tombolArrays as $tombolArray)			
			<div class="card my-1">
				<div class="card-body">
					<div class="row">
						<div class="col-sm align-items-center d-flex">			
							<h4>{{$tombolArray['nama_own']}} pada {{$tombolArray['nama_in']}}</h4>
						</div>
						<div class="col-sm">
							<div class="clearfix">	
								<button type="button" class="btn btn-default btn-danger btn-sm pull-right mx-2 tombolModalHapus" data-bs-toggle="modal" data-bs-target="#deleteTombol" data-id="{{$tombolArray['id_tombol']}}">
									Hapus
								</button>	
								<button type="button" class="btn btn-default btn-sm btn-primary pull-right mx-2 tombolModalEdit" data-bs-toggle="modal" data-bs-target="#formTombolModal" data-id="{{$tombolArray['id_tombol']}}">
									Edit
								</button>
							</div>							
						</div>
					</div>										
				</div>
			</div>
			<div class="modal fade" id="deleteTombol" tabindex="-1" aria-labelledby="modalTitleDelete" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<form method="post" action="/delete-tombol/{{$tombolArray['id_tombol']}}">
							<input type="hidden" name="id_tombol_tempat_wisata_hapus" id="id_tombol_tempat_wisata_hapus">		
							<input type="hidden" class="form-control" id="id_tombol_hapus" name="id_tombol_hapus">
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
			@empty
			<div class="alert alert-secondary">
				Belum ada tombol.
			</div>	
			@endforelse

		</div>
		<div class="col-sm">			

		</div>
	</div>

	<div class="modal fade" id="formSpotModal" tabindex="-1" aria-labelledby="formModalTitle" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<form action="{{route('tambah-spot')}}" method="post" id="form_spot">	
					<input type="hidden" name="id_tempat_wisata" id="id_tempat_wisata" value={{$id_req}}>
					<input type="hidden" name="id_spot" id="id_spot">
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
							<input type="text" class="form-control" id="link_vid_pagi" name="link_vid_pagi">
							<label for="link_aud_pagi">Link Suara Pagi</label>
							<input type="text" class="form-control" id="link_aud_pagi" name="link_aud_pagi">
							<label for="angin_pagi">Angin Pagi</label>
							<input type="text" class="form-control" id="angin_pagi" name="angin_pagi">
							<label for="suhu_pagi">Suhu Pagi</label>
							<input type="text" class="form-control" id="suhu_pagi" name="suhu_pagi">
							<label for="permukaan_pagi">Permukaan Pagi</label>
							<input type="text" class="form-control" id="permukaan_pagi" name="permukaan_pagi">
							<label for="link_vid_sore">Link Video Sore</label>
							<input type="text" class="form-control" id="link_vid_sore" name="link_vid_sore">
							<label for="link_aud_sore">Link Suara Sore</label>
							<input type="text" class="form-control" id="link_aud_sore" name="link_aud_sore">
							<label for="angin_sore">Angin Sore</label>
							<input type="text" class="form-control" id="angin_sore" name="angin_sore">
							<label for="suhu_sore">Suhu Sore</label>
							<input type="text" class="form-control" id="suhu_sore" name="suhu_sore">
							<label for="permukaan_sore">Permukaan Sore</label>
							<input type="text" class="form-control" id="permukaan_sore" name="permukaan_sore">
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

	<div class="modal fade" id="formTombolModal" tabindex="-1" aria-labelledby="formTombolTitle" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<form action="{{route('tambah-tombol')}}" method="post" id="form_tombol">						
					<input type="hidden" name="id_tempat_wisata" id="id_tempat_wisata" value={{$id_req}}>
					<input type="hidden" name="id_tombol" id="id_tombol">
					<div class="modal-header">
						<h5 class="modal-title text-primary" id="formTombolTitle">Tambah Spot</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						@csrf
						<div class="form-group">
							<label for="spot_for">Tombol untuk Spot</label>
							<select name="spot_for" id="spot_for" class="form-control mb-3" required>
								@foreach ($spotArrays as $spotArray)
								<option value="{{$spotArray['id_spot']}}">
									{{$spotArray['nama_spot']}}
								</option>								
								@endforeach
							</select>	
							<label for="spot_in">Tombol pada Spot</label>
							<select name="spot_in" id="spot_in" class="form-control mb-3" required>
								@foreach ($spotArrays as $spotArray)
								<option value="{{$spotArray['id_spot']}}">
									{{$spotArray['nama_spot']}}
								</option>								
								@endforeach
							</select>	
							<div class="row my-1">
								<div class="col-sm">
									<strong>Posisi</strong>
								</div>
							</div>		
							<div class="row mb-3">
								<div class="col-sm align-items-center d-flex">
									<div style="float: left;">
										X
									</div>
									<div style="float: left; width: 70px;" class="mx-3">
										<input type="text" name="x_pos" id="x_pos" class="form-control" required>
									</div>
									<div style="float: left;">
										Y
									</div>
									<div style="float: left; width: 70px;" class="mx-3">
										<input type="text" name="y_pos" id="y_pos" class="form-control" required>
									</div>
									<div style="float: left;">
										Z
									</div>
									<div style="float: left; width: 70px;" class="mx-3">
										<input type="text" name="z_pos" id="z_pos" class="form-control" required>
									</div>
								</div>									
							</div>			
							<div class="row my-1">
								<div class="col-sm">
									<strong>Rotasi</strong>
								</div>
							</div>		
							<div class="row mb-3">
								<div class="col-sm align-items-center d-flex">
									<div style="float: left;">
										X
									</div>
									<div style="float: left; width: 70px;" class="mx-3">
										<input type="text" name="x_rot" id="x_rot" class="form-control" required>
									</div>
									<div style="float: left;">
										Y
									</div>
									<div style="float: left; width: 70px;" class="mx-3">
										<input type="text" name="y_rot" id="y_rot" class="form-control" required>
									</div>
									<div style="float: left;">
										Z
									</div>
									<div style="float: left; width: 70px;" class="mx-3">
										<input type="text" name="z_rot" id="z_rot" class="form-control" required>
									</div>
								</div>									
							</div>							
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
	



</div>

@endsection
