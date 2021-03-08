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
});