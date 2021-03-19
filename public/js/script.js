$(function(){


	$('.btnTambahTempatWisata').on('click', function(){

		$('#formModalTitle').html('Tambah Tempat Wisata');		
		// $('#nama_tempat_wisata').val('');		
		document.getElementById('form_tempat_wisata').reset();
		$('.modal-content form').attr('action','/tambah-tempat-wisata');

	});

	$('.tempatWisataModalEdit').on('click', function(){

		$('#formModalTitle').html('Edit Tempat Wisata');		
		const id = $(this).data('id');
		$.ajax({		
			url: '/tempat-wisata/edit/' + id,			
			method: 'get',
			// dataType: json,			
			success: function(data){	

				data=JSON.parse(data);			
				// console.log(data);
				$('#nama_tempat_wisata').val(data.nama_tempat_wisata);
				$('#id').val(data.id);
				$('.modal-content form').attr('action','/update-tempat-wisata/'+data.id);
			}

		});

	});


	$('.tempatWisataModalHapus').on('click', function(){

		const id = $(this).data('id');
		$.ajax({		
			url: '/tempat-wisata/edit/' + id,			
			method: 'get',
			// dataType: json,			
			success: function(data){	

				data=JSON.parse(data);			
				$('#id_hapus').val(data.id);				
				$('.modal-content form').attr('action','/delete-tempat-wisata/'+data.id);
			}

		});

	});

	$('.btnTambahSpot').on('click', function(){

		$('#formModalTitle').html('Tambah Spot');		
		// $('#nama_tempat_wisata').val('');		
		document.getElementById('form_spot').reset();
		$('.modal-content form').attr('action','/tambah-spot');

	});

	$('.spotModalEdit').on('click', function(){

		$('#formModalTitle').html('Edit Spot');		
		const id = $(this).data('id');
		// console.log(id);
		$.ajax({		
			url: '/spot/edit/' + id,			
			method: 'get',
			// dataType: json,			
			success: function(data){	

				data=JSON.parse(data);			
				// console.log(data);
				$('#nama_spot').val(data.nama_spot);
				$('#link_vid_pagi').val(data.link_video_pagi);
				$('#link_aud_pagi').val(data.link_suara_pagi);
				$('#angin_pagi').val(data.angin_pagi);
				$('#suhu_pagi').val(data.suhu_pagi);
				$('#permukaan_pagi').val(data.permukaan_pagi);
				$('#link_vid_sore').val(data.link_video_sore);
				$('#link_aud_sore').val(data.link_suara_sore);
				$('#angin_sore').val(data.angin_sore);
				$('#suhu_sore').val(data.suhu_sore);
				$('#permukaan_sore').val(data.permukaan_sore);
				$('#id_spot').val(data.id_spot);
				$('.modal-content form').attr('action','/update-spot/'+data.id_spot);
			}

		});

	});

	$('.spotModalHapus').on('click', function(){

		const id = $(this).data('id');
		// console.log(id);
		$.ajax({		
			url: '/spot/edit/' + id,			
			method: 'get',
			// dataType: json,			
			success: function(data){	

				data=JSON.parse(data);		
				// console.log(data.id_tempat_wisata);
				$('#id_hapus').val(data.id_spot);				
				$('#id_tempat_wisata_hapus').val(data.id_tempat_wisata);	
				$('.modal-content form').attr('action','/delete-spot/'+data.id);
			}

		});

	});

	$('.tombolModalEdit').on('click', function(){

		$('#formTombolTitle').html('Edit Tombol');		
		const id = $(this).data('id');
		// console.log(id);
		$.ajax({		
			url: '/tombol/edit/' + id,			
			method: 'get',
			// dataType: json,			
			success: function(data){	

				data=JSON.parse(data);			
				// console.log(data);
				$('#spot_for').val(data.id_own);
				$('#spot_in').val(data.id_in);
				$('#x_pos').val(data.x_pos);
				$('#y_pos').val(data.y_pos);
				$('#z_pos').val(data.z_pos);
				$('#x_rot').val(data.x_rot);
				$('#y_rot').val(data.y_rot);
				$('#z_rot').val(data.z_rot);
				$('#id_tombol').val(data.id_tombol);
				$('.modal-content form').attr('action','/update-tombol/'+data.id_tombol);
			}

		});

	});
	$('.btnTambahTombol').on('click', function(){

		$('#formTombolTitle').html('Tambah Tombol');		
		// $('#nama_tempat_wisata').val('');		
		document.getElementById('form_tombol').reset();
		$('.modal-content form').attr('action','/tambah-tombol');

	});

	$('.tombolModalHapus').on('click', function(){

		const id = $(this).data('id');
		// console.log(id);
		$.ajax({		
			url: '/tombol/edit/' + id,			
			method: 'get',
			// dataType: json,			
			success: function(data){	

				data=JSON.parse(data);		
				// console.log(data);
				$('#id_tombol_hapus').val(data.id_tombol);	
				// console.log($('#id_tombol_hapus').val());			
				$('#id_tombol_tempat_wisata_hapus').val(data.id_tempat_wisata);	
				// console.log($('#id_tombol_tempat_wisata_hapus').val());			
				$('#form_tombol').attr('action','/delete-tombol/'+data.id_tombol);
			}

		});

	});


});