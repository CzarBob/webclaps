$(document).ready(function(){

	$('#presentaddress').click(function(){
		  if($(this).is(':checked')) {
			   let region = $('#region').val();
			   let province = $('#province').val();
			   let district = $('#district').val();
			   let municipality = $('#municipality').val();
			   let barangay = $('#barangay').val();
			   let sitio = $('#sitio').val();


				$('#region1').val(region);
				$('#province1').val(province);
				$('#district1').val(district);
				$('#municipality1').val(municipality);
				$('#barangay1').val(barangay);
				$('#sitio1').val(sitio);

		   } else{
				$('#region1').val("");
				$('#province1').val("");
				$('#district1').val("");
				$('#municipality1').val("");
				$('#barangay1').val("");
				$('#sitio1').val("");
				}
	});

});