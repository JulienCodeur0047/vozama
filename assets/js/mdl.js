$(document).ready(function(){
	$('.btn-edit').on('click',function(){
		// get data from button edit
		const id = $(this).data('id');
		const aep_poste = $(this).data('aep_poste');
		const aep_site = $(this).data('aep_site');
		const aep_date = $(this).data('aep_date');
		const aep_description = $(this).data('aep_description');
		// Set data to Form Edit
		$('.id').val(id);
		$('.aep_date').val(aep_date);
		$('.aep_description').val(aep_description);
		// Call Modal Edit
		$('#editaep').show();
	});
   });
