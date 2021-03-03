@extends('app')

@section('content')
<div class="p-3" container-fluid>
	<form action="/tempat-wisata" method="post" id="tempatWisata_form">
		@csrf
		<div class="row">
			<div class="col-sm">		
				<h5>Nama Tempat Wisata</h5>				
				<div class="form-group">		
					<input type="text" name="nama_tempat_wisata" id="nama_tempat_wisata" class="form-control my-1" />
				</div>				

			</div>
			<div class="col-sm">
			</div>		
		</div>
		<div class="row my-2">
			<div class="col-sm align-items-center d-flex">
				<div style="float:left;">
					<h5 class="my-2">Spot Tempat Wisata</h5>
				</div>
				<div style="float:left; width: 100px;" class="mx-3">					
					<button type="button" class="btn btn-primary btn-sm">
						Tambah
					</button>					
				</div>				
			</div>
		</div>
		<ul class="nav nav-tabs mb-3" id="nav_spot" role="tablist">
			<li class="nav-item" role="presentation">
				<a class="nav-link active" id="spot1-tab" data-bs-toggle="tab" href="#spot_1" role="tab" aria-controls="spot_1" aria-selected="true">Spot 1</a>
			</li>
			<li class="nav-item" role="presentation">
				<a class="nav-link" id="spot2-tab" data-bs-toggle="tab" href="#spot_2" role="tab" aria-controls="spot_2" aria-selected="false">Spot 2</a>
			</li>		
		</ul>
		<div class="tab-content" id="nav_spot">
			<div class="tab-pane fade show active" id="spot_1" role="tabpanel" aria-labelledby="spot1-tab">
				<div class="row">
					<div class="col-sm">						
						<div class="panel-heading my-2 h5">Spot Tempat Wisata Pagi</div>
						<div class="panel-body">						
						</div>
						<div class="form-group my-2">
							<label>Nama Spot Tempat Wisata</label>
							<input type="text" name="nama_spot_pagi" id="nama_spot_pagi" class="form-control" />
						</div>										
						<div class="form-group my-2">
							<label>Link Berkas Video</label>
							<input type="text" name="link_video_pagi" id="link_video_pagi" class="form-control" />
						</div>
						<div class="form-group my-2">
							<label>Link Berkas Suara</label>
							<input type="text" name="link_suara_pagi" id="link_suara_pagi" class="form-control" />
						</div>										
						<div class="form-group my-2">
							<label>Angin</label>
							<input type="text" name="angin_pagi" id="angin_pagi" class="form-control" />
						</div>	
						<div class="form-group my-2">
							<label>Permukaan</label>
							<input type="text" name="permukaan_pagi" id="permukaan_pagi" class="form-control" />
						</div>		
						<div class="form-group my-2">
							<label>Suhu</label>
							<input type="text" name="suhu_pagi" id="suhu_pagi" class="form-control" />
						</div>													
					</div>
					<div class="col-sm">						
						<div class="panel-heading my-2 h5">Spot Tempat Wisata Sore</div>
						<div class="panel-body">						
						</div>
						<div class="form-group my-2">
							<label>Nama Spot Tempat Wisata</label>
							<input type="text" name="nama_spot_sore" id="nama_spot_sore" class="form-control" />
						</div>										
						<div class="form-group my-2">
							<label>Link Berkas Video</label>
							<input type="text" name="link_video_sore" id="link_video_sore" class="form-control" />
						</div>
						<div class="form-group my-2">
							<label>Link Berkas Suara</label>
							<input type="text" name="link_suara_sore" id="link_suara_sore" class="form-control" />
						</div>										
						<div class="form-group my-2">
							<label>Angin</label>
							<input type="text" name="angin_sore" id="angin_sore" class="form-control" />
						</div>	
						<div class="form-group my-2">
							<label>Permukaan</label>
							<input type="text" name="permukaan_sore" id="permukaan_sore" class="form-control" />
						</div>		
						<div class="form-group my-2">
							<label>Suhu</label>
							<input type="text" name="suhu_sore" id="suhu_sore" class="form-control" />
						</div>														
					</div>
					<div class="px-6">
						<hr style="color: #808080;">
					</div>
					
				</div>	
				<div class="row mb-3">
					<div class="col-sm  align-items-center d-flex">
						<div style="float:left;">
							<h5 class="my-2">Tombol Spot</h5>
						</div>
						<div style="float:left; width: 100px;" class="mx-3">							
							<button type="button" class="btn btn-primary btn-sm">
								Tambah
							</button>						
						</div>				
					</div>
				</div>
				<div class="row">
					<div class="row mb-1">
						<div class="col-sm align-items-center d-flex">
							<div style="float:left;">
								Posisi tombol pada spot	
							</div>
							<div style="float:left; width: 70px;" class="mx-3">
								<input type="text" name="spot_in" class="form-control">
							</div>
						</div>						
					</div>					
					<div class="row my-1">
						<div class="col-sm">
							<strong>Posisi</strong>
						</div>
					</div>		
					<div class="row">
						<div class="col-sm align-items-center d-flex">
							<div style="float: left;">
								X
							</div>
							<div style="float: left; width: 70px;" class="mx-3">
								<input type="text" name="x_pos" class="form-control">
							</div>
							<div style="float: left;">
								Y
							</div>
							<div style="float: left; width: 70px;" class="mx-3">
								<input type="text" name="y_pos" class="form-control">
							</div>
							<div style="float: left;">
								Z
							</div>
							<div style="float: left; width: 70px;" class="mx-3">
								<input type="text" name="z_pos" class="form-control">
							</div>
						</div>									
					</div>			
					<div class="row my-1">
						<div class="col-sm">
							<strong>Rotasi</strong>
						</div>
					</div>		
					<div class="row">
						<div class="col-sm align-items-center d-flex">
							<div style="float: left;">
								X
							</div>
							<div style="float: left; width: 70px;" class="mx-3">
								<input type="text" name="x_rot" class="form-control">
							</div>
							<div style="float: left;">
								Y
							</div>
							<div style="float: left; width: 70px;" class="mx-3">
								<input type="text" name="y_rot" class="form-control">
							</div>
							<div style="float: left;">
								Z
							</div>
							<div style="float: left; width: 70px;" class="mx-3">
								<input type="text" name="z_rot" class="form-control">
							</div>
						</div>									
					</div>	
				</div>							
			</div>
			<div class="tab-pane fade" id="spot_2" role="tabpanel" aria-labelledby="spot2-tab">
				b
			</div>		
		</div>
		<div class="col text-center mt-5">
			<button type="submit" style="height: 50px;" class="btn btn-primary w-100">Submit</button>
		</div>									
	</form>
</div>


@endsection
