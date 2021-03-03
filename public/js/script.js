$(function(){


	$('.btnTambahTempatWisata').on('click', function(){

		$('#formModalTitle').html('Tambah Tempat Wisata');

	});

	$('.tempatWisataModalEdit').on('click', function(){

		$('#formModalTitle').html('Edit Tempat Wisata');
		const id = $(this).data('id');
		$.ajax({		
			url: '/tempat-wisata/edit/' + id,			
			method: 'get',
			dataType: json,			
			success: function(data){
				console.log(data);

			}

		});

	});


});