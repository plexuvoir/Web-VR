$(function(){


	$('.btnTambahTempatWisata').on('click', function(){

		$('#formModalTitle').html('Tambah Tempat Wisata');
		$('#nama_tempat_wisata').val('');		


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
});