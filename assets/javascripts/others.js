$(document).ready(function(){
	$('#others-religion').addClass('hidden');
	$('#others-dropout').addClass('hidden');
	$('#relative-body').addClass('hidden');
	$('#others-highest-grade').addClass('hidden');
	$('#others-disability').addClass('hidden');

	$('#skin-disease-body').addClass('hidden');
	$('#allergies-body').addClass('hidden');
	$('#others-ailments').addClass('hidden');
	$('#others-family-ailments').addClass('hidden');

	$('#others-mining').addClass('hidden');
	$('#others-quarrying').addClass('hidden');
	$('#others-construction').addClass('hidden');
	$('#others-transportation').addClass('hidden');
	$('#others-waste').addClass('hidden');
	$('#others-forestry').addClass('hidden');
	$('#others-fishing').addClass('hidden');
	$('#others-farming').addClass('hidden');
	$('#others-domestic').addClass('hidden');
	$('#others-manufacturing').addClass('hidden');
	$('#others-pyro').addClass('hidden');
	$('#others-osec').addClass('hidden');
	$('#others-prosti').addClass('hidden');
	$('#others-task').addClass('hidden');

	$('#others-work-arrangement').addClass('hidden');
	$('#others-hazards').addClass('hidden');
	$('#others-payment').addClass('hidden');
	$('#others-earnings').addClass('hidden');

	$('.others-attainment-1').addClass('hidden');
	$('.others-skills-1').addClass('hidden');

	$('input[id=mining][placeholder=Task]').prop("disabled", true);
    $('input[id=mining][placeholder=Month]').prop("disabled", true);
    $('input[id=mining][placeholder=specify]').prop("disabled", true);

    $('input[id=quarrying][placeholder=Task]').prop("disabled", true);
    $('input[id=quarrying][placeholder=Month]').prop("disabled", true);
    $('input[id=quarrying][placeholder=specify]').prop("disabled", true);

    $('input[id=construction][placeholder=Task]').prop("disabled", true);
    $('input[id=construction][placeholder=Month]').prop("disabled", true);
    $('input[id=construction][placeholder=specify]').prop("disabled", true);
	
	$('input[id=transportation][placeholder=Task]').prop("disabled", true);
    $('input[id=transportation][placeholder=Month]').prop("disabled", true);
    $('input[id=transportation][placeholder=specify]').prop("disabled", true);

    $('input[id=waste][placeholder=Task]').prop("disabled", true);
    $('input[id=waste][placeholder=Month]').prop("disabled", true);
    $('input[id=waste][placeholder=specify]').prop("disabled", true);

    $('input[id=forestry][placeholder=Task]').prop("disabled", true);
    $('input[id=forestry][placeholder=Month]').prop("disabled", true);
    $('input[id=forestry][placeholder=specify]').prop("disabled", true);

    $('input[id=fishing][placeholder=Task]').prop("disabled", true);
    $('input[id=fishing][placeholder=Month]').prop("disabled", true);
    $('input[id=fishing][placeholder=specify]').prop("disabled", true);

    $('input[id=farming][placeholder=Task]').prop("disabled", true);
    $('input[id=farming][placeholder=Month]').prop("disabled", true);
    $('input[id=farming][placeholder=specify]').prop("disabled", true);

    $('input[id=domestic][placeholder=Task]').prop("disabled", true);
    $('input[id=domestic][placeholder=Month]').prop("disabled", true);
    $('input[id=domestic][placeholder=specify]').prop("disabled", true);

    $('input[id=manufacturing][placeholder=Task]').prop("disabled", true);
    $('input[id=manufacturing][placeholder=Month]').prop("disabled", true);
    $('input[id=manufacturing][placeholder=specify]').prop("disabled", true);

    $('input[id=pyro][placeholder=Task]').prop("disabled", true);
    $('input[id=pyro][placeholder=Month]').prop("disabled", true);
    $('input[id=pyro][placeholder=specify]').prop("disabled", true);

    $('input[id=osec][placeholder=Task]').prop("disabled", true);
    $('input[id=osec][placeholder=Month]').prop("disabled", true);
    $('input[id=osec][placeholder=specify]').prop("disabled", true);

    $('input[id=prosti][placeholder=Task]').prop("disabled", true);
    $('input[id=prosti][placeholder=Month]').prop("disabled", true);
    $('input[id=prosti][placeholder=specify]').prop("disabled", true);

    $('input[id=others][placeholder=Task]').prop("disabled", true);
    $('input[id=others][placeholder=Month]').prop("disabled", true);
    $('input[id=others][placeholder=specify]').prop("disabled", true);

    $('#task-1').prop("disabled", true);
    $('#task-2').prop("disabled", true);
    $('#task-3').prop("disabled", true);
    $('#task-4').prop("disabled", true);
    $('#task-5').prop("disabled", true);
    $('#task-6').prop("disabled", true);
    $('#task-7').prop("disabled", true);
    $('#task-8').prop("disabled", true);
    $('#task-9').prop("disabled", true);
    $('#task-10').prop("disabled", true);
    $('#task-11').prop("disabled", true);
    $('#task-12').prop("disabled", true);
    $('#task-13').prop("disabled", true);
    $('#task-14').prop("disabled", true);

    $('#task-1').val("");
    $('#task-2').val("");
    $('#task-3').val("");
    $('#task-4').val("");
    $('#task-5').val("");
    $('#task-6').val("");
    $('#task-7').val("");
    $('#task-8').val("");
    $('#task-9').val("");
    $('#task-10').val("");
    $('#task-11').val("");
    $('#task-12').val("");
    $('#task-13').val("");
    $('#task-14').val("");
	
	$('#supervisename-1').prop("disabled", true);
    $('#supervisename-2').prop("disabled", true);
    $('#supervisename-3').prop("disabled", true);
    $('#supervisename-4').prop("disabled", true);
    $('#supervisename-5').prop("disabled", true);
    $('#supervisename-6').prop("disabled", true);
    $('#supervisename-others').prop("disabled", true);

    $('#supervisename-1').val("");
    $('#supervisename-2').val("");
    $('#supervisename-3').val("");
    $('#supervisename-4').val("");
    $('#supervisename-5').val("");
    $('#supervisename-6').val("");
    $('#supervisename-others').val("");

	
	$('#religion').change(function() {
	    if($(this).val()=="Others"){ 
	    	$('#others-religion').removeClass('hidden');
	    	$('#religion').removeAttr('name');
	    	$('input[id=others-religion-value]').attr('name', 'others-religion-value');
	    }	  
	    else{
	    	$('#others-religion').addClass('hidden');
	    	$('#religion').attr('name', 'religion');
	    	$('input[id=others-religion-value]').removeAttr('name');
	    	$('input[id=others-religion-value]').val("");
	    }  
	});



	$('#livingwith').change(function() {
	    if($(this).val()=="Relatives" || $(this).val()=="Non-relatives"){ 
	    	$('#relative-body').removeClass('hidden');
	    }	  
	    else{
	    	$('#relative-body').addClass('hidden');
	    	$('input[id=relativelastname]').val("");
	    	$('input[id=relativefirstname]').val("");
	    	$('input[id=relativemiddlename]').val("");
	    	$('input[id=relativesuffix]').val("");
	    	$('input[id=relativerelationship]').val("");
	    	$('input[id=livingwithreason]').val("");
	    }  
	});




	$('#highestgrade').change(function() {
	    if($(this).val()=="Others"){ 
	    	$('#others-highest-grade').removeClass('hidden');
	    	$('#highestgrade').removeAttr('name');
	    	$('input[id=others-highest-grade]').attr('name', 'others-highest-grade');
	    }	  
	    else{
	    	$('#others-highest-grade').addClass('hidden');
	    	$('#highestgrade').attr('name', 'highestgrade');
	    	$('input[id=others-highest-grade]').removeAttr('name');
	    	$('input[id=others-highest-grade-value]').val("");
	    }  
	});



	$('#others-drop-check').click(function(){
		  if($(this).is(':checked')) {
			   $('#others-dropout').removeClass('hidden');
			   $('input[id=others-dropout-value]').attr('name', 'drop-reason[]');

		   } 
		   else{
		   		$('#others-dropout').addClass('hidden');
		   		$('input[id=others-dropout-value]').removeAttr('name', 'drop-reason[]');
		   }
	});



	$('#attendingschool').change(function() {
	    if($(this).val()=="Yes"){ 
	    	$('#reference-no-body').removeClass('hidden');
	    }	  
	    else{
	    	$('#reference-no-body').addClass('hidden');
	    	$('input[id=learningreferenceno]').val("");

	    }  
	});

	$('#havedisability').change(function() {
	    if($(this).val()=="Yes"){ 
	    	$('#disability-checkbox').removeClass('hidden');
	    }	  
	    else{
	    	$('#disability-checkbox').addClass('hidden');
	    }  
	});


	$('#disability-check').click(function(){
		  if($(this).is(':checked')) {
			   $('#others-disability').removeClass('hidden');
			   $('input[id=others-disability-value]').attr('name', 'disability[]');

		   } 
		   else{
		   		$('#others-disability').addClass('hidden');
		   		$('input[id=others-disability-value]').removeAttr('name', 'disability[]');
		   }
	});



	$('#skin-disease-check').click(function(){
		  if($(this).is(':checked')) {
			   $('#skin-disease-body').removeClass('hidden');

		   } 
		   else{
		   		$('#skin-disease-body').addClass('hidden');
		   		$('#skin-disease-value').val("");
		   }
	});

	$('#allergy-check').click(function(){
		  if($(this).is(':checked')) {
			   $('#allergies-body').removeClass('hidden');
		   } 
		   else{
		   		$('#allergies-body').addClass('hidden');
		   		$('#allergies-value').val("");
		   }
	});

	$('#ailment-check').click(function(){
		  if($(this).is(':checked')) {
			   $('#others-ailments').removeClass('hidden');
		   } 
		   else{
		   		$('#others-ailments').addClass('hidden');
		   		$('#others-ailments-value').val("");
		   }
	});

	$('#none-check').click(function(){
		  if($(this).is(':checked')){
				$('#ailment-1').prop('checked', false);
				$('#ailment-2').prop('checked', false);
				$('#ailment-3').prop('checked', false);
				$('#ailment-4').prop('checked', false);
				$('#ailment-5').prop('checked', false);
				$('#ailment-6').prop('checked', false);
				$('#ailment-7').prop('checked', false);
				$('#ailment-8').prop('checked', false);
				$('#ailment-9').prop('checked', false);

				$('#skin-disease-check').prop('checked', false);
				$('#skin-disease-body').addClass('hidden');
				$('#skin-disease-value').val("");

				$('#allergy-check').prop('checked', false);
				$('#allergies-body').addClass('hidden');
				$('#allergies-value').val("");

				$('#ailment-check').prop('checked', false);
				$('#others-ailments').addClass('hidden');
				$('#others-ailments-value').val("");
		   } 
	});

	$('#none-check-history').click(function(){
			if($(this).is(':checked')){
				$('#family-ailment-1').prop('checked', false);
				$('#family-ailment-2').prop('checked', false);
				$('#family-ailment-3').prop('checked', false);
				$('#family-ailment-4').prop('checked', false);
				$('#family-ailment-5').prop('checked', false);
				$('#family-ailment-6').prop('checked', false);
				$('#family-ailment-7').prop('checked', false);
				$('#family-ailment-8').prop('checked', false);
				
				$('#family-ailments-check').prop('checked', false);
				$('#others-family-ailments').addClass('hidden');
				$('#others-family-ailments-value').val("");

			}
	});

	$('#family-ailments-check').click(function(){
		  if($(this).is(':checked')) {
			   $('#others-family-ailments').removeClass('hidden');
		   } 
		   else{
		   		$('#others-family-ailments').addClass('hidden');
		   }
	});


	$('#havedisability').change(function() {
	    if($(this).val()=="Yes"){ 
	    	$('#disability-checkbox').removeClass('hidden');
	    }	  
	    else{
	    	$('#disability-checkbox').addClass('hidden');
	    }  
	});


	$('#work-1').click(function(){
		  if($(this).is(':checked')) {
			   $('input[id=mining][placeholder=Task]').prop("disabled", false);
			   $('input[id=mining][placeholder=Month]').prop("disabled", false);
			   $('input[id=mining][placeholder=specify]').prop("disabled", false);
			   $('#task-1').prop("disabled", false);
		   } 
		   else{
		   		$('input[id=mining][placeholder=Task]').prop("disabled", true);
		   		$('input[id=mining][placeholder=Month]').prop("disabled", true);
		   		$('input[id=mining][placeholder=specify]').prop("disabled", true);
		   		$('input[id=mining][placeholder=Task]').val("");
		   		$('input[id=mining][placeholder=Month]').val("");
		   		$('input[id=mining][placeholder=specify]').val("");
		   		$('#task-1').val("");
		   		$('#others-mining').addClass('hidden');
		   		$('#task-1').prop("disabled", true);
		   }
	});

	$('#work-2').click(function(){
		  if($(this).is(':checked')) {
			   $('input[id=quarrying][placeholder=Task]').prop("disabled", false);
			   $('input[id=quarrying][placeholder=Month]').prop("disabled", false);
			   $('input[id=quarrying][placeholder=specify]').prop("disabled", false);
			   $('#task-2').prop("disabled", false);
		   } 
		   else{
		   		$('input[id=quarrying][placeholder=Task]').prop("disabled", true);
		   		$('input[id=quarrying][placeholder=Month]').prop("disabled", true);
		   		$('input[id=quarrying][placeholder=specify]').prop("disabled", true);
		   		$('input[id=quarrying][placeholder=Task]').val("");
		   		$('input[id=quarrying][placeholder=Month]').val("");
		   		$('input[id=quarrying][placeholder=specify]').val("");
		   		$('#task-2').val("");
		   		$('#others-quarrying').addClass('hidden');
		   		$('#task-2').prop("disabled", true);
		   }
	});
	$('#work-3').click(function(){
		  if($(this).is(':checked')) {
			   $('input[id=construction][placeholder=Task]').prop("disabled", false);
			   $('input[id=construction][placeholder=Month]').prop("disabled", false);
			   $('input[id=construction][placeholder=specify]').prop("disabled", false);
			   $('#task-3').prop("disabled", false);
		   } 
		   else{
		   		$('input[id=construction][placeholder=Task]').prop("disabled", true);
		   		$('input[id=construction][placeholder=Month]').prop("disabled", true);
		   		$('input[id=construction][placeholder=specify]').prop("disabled", true);
		   		$('input[id=construction][placeholder=Task]').val("");
		   		$('input[id=construction][placeholder=Month]').val("");
		   		$('input[id=construction][placeholder=specify]').val("");
		   		$('#task-3').val("");
		   		$('#others-construction').addClass('hidden');
		   		$('#task-3').prop("disabled", true);
		   }
	});
	$('#work-4').click(function(){
		  if($(this).is(':checked')) {
			   $('input[id=transportation][placeholder=Task]').prop("disabled", false);
			   $('input[id=transportation][placeholder=Month]').prop("disabled", false);
			   $('input[id=transportation][placeholder=specify]').prop("disabled", false);
			   $('#task-4').prop("disabled", false);
		   } 
		   else{
		   		$('input[id=transportation][placeholder=Task]').prop("disabled", true);
		   		$('input[id=transportation][placeholder=Month]').prop("disabled", true);
		   		$('input[id=transportation][placeholder=specify]').prop("disabled", true);
		   		$('input[id=transportation][placeholder=Task]').val("");
		   		$('input[id=transportation][placeholder=Month]').val("");
		   		$('input[id=transportation][placeholder=specify]').val("");
			    $('#task-4').val("");
		   		$('#others-transportation').addClass('hidden');
		   		$('#task-4').prop("disabled", true);
		   }
	});
	$('#work-5').click(function(){
		  if($(this).is(':checked')) {
			   $('input[id=waste][placeholder=Task]').prop("disabled", false);
			   $('input[id=waste][placeholder=Month]').prop("disabled", false);
			   $('input[id=waste][placeholder=specify]').prop("disabled", false);
			   $('#task-5').prop("disabled", false);
		   } 
		   else{
		   		$('input[id=waste][placeholder=Task]').prop("disabled", true);
		   		$('input[id=waste][placeholder=Month]').prop("disabled", true);
		   		$('input[id=waste][placeholder=specify]').prop("disabled", true);
		   		$('input[id=waste][placeholder=Task]').val("");
		   		$('input[id=waste][placeholder=Month]').val("");
		   		$('input[id=waste][placeholder=specify]').val("");
		   		$('#task-5').val("");
		   		$('#others-waste').addClass('hidden');
		   		$('#task-5').prop("disabled", true);
		   }
	});
	$('#work-6').click(function(){
		  if($(this).is(':checked')) {
			   $('input[id=forestry][placeholder=Task]').prop("disabled", false);
			   $('input[id=forestry][placeholder=Month]').prop("disabled", false);
			   $('input[id=forestry][placeholder=specify]').prop("disabled", false);
			   $('#task-6').prop("disabled", false);
		   } 
		   else{
		   		$('input[id=forestry][placeholder=Task]').prop("disabled", true);
		   		$('input[id=forestry][placeholder=Month]').prop("disabled", true);
		   		$('input[id=forestry][placeholder=specify]').prop("disabled", true);
		   		$('input[id=forestry][placeholder=Task]').val("");
		   		$('input[id=forestry][placeholder=Month]').val("");
		   		$('input[id=forestry][placeholder=specify]').val("");
		   		$('#task-6').val("");
		   		$('#others-forestry').addClass('hidden');
		   		$('#task-6').prop("disabled", true);
		   }
	});
	$('#work-7').click(function(){
		  if($(this).is(':checked')) {
			   $('input[id=fishing][placeholder=Task]').prop("disabled", false);
			   $('input[id=fishing][placeholder=Month]').prop("disabled", false);
			   $('input[id=fishing][placeholder=specify]').prop("disabled", false);
			   $('#task-7').prop("disabled", false);
		   } 
		   else{
		   		$('input[id=fishing][placeholder=Task]').prop("disabled", true);
		   		$('input[id=fishing][placeholder=Month]').prop("disabled", true);
		   		$('input[id=fishing][placeholder=specify]').prop("disabled", true);
		   		$('input[id=fishing][placeholder=Task]').val("");
		   		$('input[id=fishing][placeholder=Month]').val("");
		   		$('input[id=fishing][placeholder=specify]').val("");
		   		$('#task-7').val("");
		   		$('#others-fishing').addClass('hidden');
		   		$('#task-7').prop("disabled", true);
		   }
	});
	$('#work-8').click(function(){
		  if($(this).is(':checked')) {
			   $('input[id=farming][placeholder=Task]').prop("disabled", false);
			   $('input[id=farming][placeholder=Month]').prop("disabled", false);
			   $('input[id=farming][placeholder=specify]').prop("disabled", false);
			   $('#task-8').prop("disabled", false);
		   } 
		   else{
		   		$('input[id=farming][placeholder=Task]').prop("disabled", true);
		   		$('input[id=farming][placeholder=Month]').prop("disabled", true);
		   		$('input[id=farming][placeholder=specify]').prop("disabled", true);
		   		$('input[id=farming][placeholder=Task]').val("");
		   		$('input[id=farming][placeholder=Month]').val("");
		   		$('input[id=farming][placeholder=specify]').val("");
		   		$('#task-8').val("");
		   		$('#others-farming').addClass('hidden');
		   		$('#task-8').prop("disabled", true);
		   }
	});
	$('#work-9').click(function(){
		  if($(this).is(':checked')) {
			   $('input[id=domestic][placeholder=Task]').prop("disabled", false);
			   $('input[id=domestic][placeholder=Month]').prop("disabled", false);
			   $('input[id=domestic][placeholder=specify]').prop("disabled", false);
			   $('#task-9').prop("disabled", false);
		   } 
		   else{
		   		$('input[id=domestic][placeholder=Task]').prop("disabled", true);
		   		$('input[id=domestic][placeholder=Month]').prop("disabled", true);
		   		$('input[id=domestic][placeholder=specify]').prop("disabled", true);
		   		$('input[id=domestic][placeholder=Task]').val("");
		   		$('input[id=domestic][placeholder=Month]').val("");
		   		$('input[id=domestic][placeholder=specify]').val("");
		   		$('#task-9').val("");
		   		$('#others-domestic').addClass('hidden');
		   		$('#task-9').prop("disabled", true);
		   }
	});
	$('#work-10').click(function(){
		  if($(this).is(':checked')) {
			   $('input[id=manufacturing][placeholder=Task]').prop("disabled", false);
			   $('input[id=manufacturing][placeholder=Month]').prop("disabled", false);
			   $('input[id=manufacturing][placeholder=specify]').prop("disabled", false);
			   $('#task-10').prop("disabled", false);
		   } 
		   else{
		   		$('input[id=manufacturing][placeholder=Task]').prop("disabled", true);
		   		$('input[id=manufacturing][placeholder=Month]').prop("disabled", true);
		   		$('input[id=manufacturing][placeholder=specify]').prop("disabled", true);
		   		$('input[id=manufacturing][placeholder=Task]').val("");
		   		$('input[id=manufacturing][placeholder=Month]').val("");
		   		$('input[id=manufacturing][placeholder=specify]').val("");
		   		$('#task-10').val("");
		   		$('#others-manufacturing').addClass('hidden');
		   		$('#task-10').prop("disabled", true);
		   }
	});
	$('#work-11').click(function(){
		  if($(this).is(':checked')) {
			   $('input[id=pyro][placeholder=Task]').prop("disabled", false);
			   $('input[id=pyro][placeholder=Month]').prop("disabled", false);
			   $('input[id=pyro][placeholder=specify]').prop("disabled", false);
			   $('#task-11').prop("disabled", false);
		   } 
		   else{
		   		$('input[id=pyro][placeholder=Task]').prop("disabled", true);
		   		$('input[id=pyro][placeholder=Month]').prop("disabled", true);
		   		$('input[id=pyro][placeholder=specify]').prop("disabled", true);
		   		$('input[id=pyro][placeholder=Task]').val("");
		   		$('input[id=pyro][placeholder=Month]').val("");
		   		$('input[id=pyro][placeholder=specify]').val("");
		   		$('#task-11').val("");
		   		$('#others-pyro').addClass('hidden');
		   		$('#task-11').prop("disabled", true);
		   }
	});
	$('#work-12').click(function(){
		  if($(this).is(':checked')) {
			   $('input[id=osec][placeholder=Task]').prop("disabled", false);
			   $('input[id=osec][placeholder=Month]').prop("disabled", false);
			   $('input[id=osec][placeholder=specify]').prop("disabled", false);
			   $('#task-12').prop("disabled", false);
		   } 
		   else{
		   		$('input[id=osec][placeholder=Task]').prop("disabled", true);
		   		$('input[id=osec][placeholder=Month]').prop("disabled", true);
		   		$('input[id=osec][placeholder=specify]').prop("disabled", true);
		   		$('input[id=osec][placeholder=Task]').val("");
		   		$('input[id=osec][placeholder=Month]').val("");
		   		$('input[id=osec][placeholder=specify]').val("");
		   		$('#task-12').val("");
		   		$('#others-osec').addClass('hidden');
		   		$('#task-12').prop("disabled", true);
		   }
	});
	$('#work-13').click(function(){
		  if($(this).is(':checked')) {
			   $('input[id=prosti][placeholder=Task]').prop("disabled", false);
			   $('input[id=prosti][placeholder=Month]').prop("disabled", false);
			   $('input[id=prosti][placeholder=specify]').prop("disabled", false);
			   $('#task-13').prop("disabled", false);
		   } 
		   else{
		   		$('input[id=prosti][placeholder=Task]').prop("disabled", true);
		   		$('input[id=prosti][placeholder=Month]').prop("disabled", true);
		   		$('input[id=prosti][placeholder=specify]').prop("disabled", true);
		   		$('input[id=prosti][placeholder=Task]').val("");
		   		$('input[id=prosti][placeholder=Month]').val("");
		   		$('input[id=prosti][placeholder=specify]').val("");
		   		$('#task-13').val("");
		   		$('#others-prosti').addClass('hidden');
		   		$('#task-13').prop("disabled", true);
		   }
	});
	$('#work-14').click(function(){
		  if($(this).is(':checked')) {
			   $('input[id=others][placeholder=Task]').prop("disabled", false);
			   $('input[id=others][placeholder=Month]').prop("disabled", false);
			   $('input[id=others][placeholder=specify]').prop("disabled", false);
			   $('#task-14').prop("disabled", false);
		   } 
		   else{
		   		$('input[id=others][placeholder=Task]').prop("disabled", true);
		   		$('input[id=others][placeholder=Month]').prop("disabled", true);
		   		$('input[id=others][placeholder=specify]').prop("disabled", true);
		   		$('input[id=others][placeholder=Task]').val("");
		   		$('input[id=others][placeholder=Month]').val("");
		   		$('input[id=others][placeholder=specify]').val("");
		   		$('#task-14').val("");
		   		$('#others-task').addClass('hidden');
		   		$('#task-14').prop("disabled", true);
		   }
	});





	$('#task-1').change(function() {
	    if($(this).val()=="13 – Others"){ 
	    	$('#others-mining').removeClass('hidden');
	    	$('input[id=mining][placeholder=specify]').attr('name','task-location[]');
	    	$(this).removeAttr('name');
	    }	  
	    else{
	    	$('#others-mining').addClass('hidden');
	    	$('input[id=mining][placeholder=specify]').removeAttr('name');
	    	$(this).attr('name', 'task-location[]');

	    }  
	});
	$('#task-2').change(function() {
	    if($(this).val()=="13 – Others"){ 
	    	$('#others-quarrying').removeClass('hidden');
	    	$('input[id=quarrying][placeholder=specify]').attr('name','task-location[]');
	    	$(this).removeAttr('name');
	    }	  
	    else{
	    	$('#others-quarrying').addClass('hidden');
	    	$('input[id=quarrying][placeholder=specify]').removeAttr('name');
	    	$(this).attr('name', 'task-location[]');
	    }  
	});
	$('#task-3').change(function() {
	    if($(this).val()=="13 – Others"){ 
	    	$('#others-construction').removeClass('hidden');
	    	$('input[id=construction][placeholder=specify]').attr('name','task-location[]');
	    	$(this).removeAttr('name');
	    }	  
	    else{
	    	$('#others-construction').addClass('hidden');
	    	$('input[id=construction][placeholder=specify]').removeAttr('name');
	    	$(this).attr('name', 'task-location[]');
	    }  
	});
	$('#task-4').change(function() {
	    if($(this).val()=="13 – Others"){ 
	    	$('#others-transportation').removeClass('hidden');
	    	$('input[id=transportation][placeholder=specify]').attr('name','task-location[]');
	    	$(this).removeAttr('name');
	    }	  
	    else{
	    	$('#others-transportation').addClass('hidden');
	    	$('input[id=transportation][placeholder=specify]').removeAttr('name');
	    	$(this).attr('name', 'task-location[]');
	    }  
	});
	$('#task-5').change(function() {
	    if($(this).val()=="13 – Others"){ 
	    	$('#others-waste').removeClass('hidden');
	    	$('input[id=waste][placeholder=specify]').attr('name','task-location[]');
	    	$(this).removeAttr('name');
	    }	  
	    else{
	    	$('#others-waste').addClass('hidden');
	    	$('input[id=waste][placeholder=specify]').removeAttr('name');
	    	$(this).attr('name', 'task-location[]');
	    }  
	});
	$('#task-6').change(function() {
	    if($(this).val()=="13 – Others"){ 
	    	$('#others-forestry').removeClass('hidden');
	    	$('input[id=forestry][placeholder=specify]').attr('name','task-location[]');
	    	$(this).removeAttr('name');
	    }	  
	    else{
	    	$('#others-forestry').addClass('hidden');
	    	$('input[id=forestry][placeholder=specify]').removeAttr('name');
	    	$(this).attr('name', 'task-location[]');
	    }  
	});
	$('#task-7').change(function() {
	    if($(this).val()=="13 – Others"){ 
	    	$('#others-fishing').removeClass('hidden');
	    	$('input[id=fishing][placeholder=specify]').attr('name','task-location[]');
	    	$(this).removeAttr('name');
	    }	  
	    else{
	    	$('#others-fishing').addClass('hidden');
	    	$('input[id=fishing][placeholder=specify]').removeAttr('name');
	    	$(this).attr('name', 'task-location[]');
	    }  
	});
	$('#task-8').change(function() {
	    if($(this).val()=="13 – Others"){ 
	    	$('#others-farming').removeClass('hidden');
	    	$('input[id=farming][placeholder=specify]').attr('name','task-location[]');
	    	$(this).removeAttr('name');
	    }	  
	    else{
	    	$('#others-farming').addClass('hidden');
	    	$('input[id=farming][placeholder=specify]').removeAttr('name');
	    	$(this).attr('name', 'task-location[]');
	    }  
	});
	$('#task-9').change(function() {
	    if($(this).val()=="13 – Others"){ 
	    	$('#others-domestic').removeClass('hidden');
	    	$('input[id=domestic][placeholder=specify]').attr('name','task-location[]');
	    	$(this).removeAttr('name');
	    }	  
	    else{
	    	$('#others-domestic').addClass('hidden');
	    	$('input[id=domestic][placeholder=specify]').removeAttr('name');
	    	$(this).attr('name', 'task-location[]');
	    }  
	});
	$('#task-10').change(function() {
	    if($(this).val()=="13 – Others"){ 
	    	$('#others-manufacturing').removeClass('hidden');
	    	$('input[id=manufacturing][placeholder=specify]').attr('name','task-location[]');
	    	$(this).removeAttr('name');
	    }	  
	    else{
	    	$('#others-manufacturing').addClass('hidden');
	    	$('input[id=manufacturing][placeholder=specify]').removeAttr('name');
	    	$(this).attr('name', 'task-location[]');
	    }  
	});
	$('#task-11').change(function() {
	    if($(this).val()=="13 – Others"){ 
	    	$('#others-pyro').removeClass('hidden');
	    	$('input[id=pyro][placeholder=specify]').attr('name','task-location[]');
	    	$(this).removeAttr('name');
	    }	  
	    else{
	    	$('#others-pyro').addClass('hidden');
	    	$('input[id=pyro][placeholder=specify]').removeAttr('name');
	    	$(this).attr('name', 'task-location[]');
	    }  
	});
	$('#task-12').change(function() {
	    if($(this).val()=="13 – Others"){ 
	    	$('#others-osec').removeClass('hidden');
	    	$('input[id=osec][placeholder=specify]').attr('name','task-location[]');
	    	$(this).removeAttr('name');
	    }	  
	    else{
	    	$('#others-osec').addClass('hidden');
	    	$('input[id=osec][placeholder=specify]').removeAttr('name');
	    	$(this).attr('name', 'task-location[]');
	    }  
	});
	$('#task-13').change(function() {
	    if($(this).val()=="13 – Others"){ 
	    	$('#others-prosti').removeClass('hidden');
	    	$('input[id=prosti][placeholder=specify]').attr('name','task-location[]');
	    	$(this).removeAttr('name');
	    }	  
	    else{
	    	$('#others-prosti').addClass('hidden');
	    	$('input[id=prosti][placeholder=specify]').removeAttr('name');
	    	$(this).attr('name', 'task-location[]');
	    }  
	});
	$('#task-14').change(function() {
	    if($(this).val()=="13 – Others"){ 
	    	$('#others-task').removeClass('hidden');
	    	$('input[id=others][placeholder=specify]').attr('name','task-location[]');
	    	$(this).removeAttr('name');
	    }	  
	    else{
	    	$('#others-task').addClass('hidden');
	    	$('input[id=others][placeholder=specify]').removeAttr('name');
	    	$(this).attr('name', 'task-location[]');
	    }  
	});


	$('#supervise-1').click(function(){
		  if($(this).is(':checked')) {
			   $('#supervisename-1').prop("disabled", false);
		   } 
		   else{
		   		$('#supervisename-1').prop("disabled", true);
		   		$('#supervisename-1').val("");
		   	}
		   		
	});

	$('#supervise-2').click(function(){
		  if($(this).is(':checked')) {
			   $('#supervisename-2').prop("disabled", false);
		   } 
		   else{
		   		$('#supervisename-2').prop("disabled", true);
		   		$('#supervisename-2').val("");
		   	}
		   		
	});

	$('#supervise-3').click(function(){
		  if($(this).is(':checked')) {
			   $('#supervisename-3').prop("disabled", false);
		   } 
		   else{
		   		$('#supervisename-3').prop("disabled", true);
		   		$('#supervisename-3').val("");
		   	}
		   		
	});

	$('#supervise-4').click(function(){
		  if($(this).is(':checked')) {
			   $('#supervisename-4').prop("disabled", false);
		   } 
		   else{
		   		$('#supervisename-4').prop("disabled", true);
		   		$('#supervisename-4').val("");
		   	}
		   		
	});

	$('#supervise-5').click(function(){
		  if($(this).is(':checked')) {
			   $('#supervisename-5').prop("disabled", false);
		   } 
		   else{
		   		$('#supervisename-5').prop("disabled", true);
		   		$('#supervisename-5').val("");
		   	}
		   		
	});

	$('#supervise-6').click(function(){
		  if($(this).is(':checked')) {
			   $('#supervisename-6').prop("disabled", false);
			    $('#supervisename-others').prop("disabled", false);
		   } 
		   else{
		   		$('#supervisename-6').prop("disabled", true);
		   		$('#supervisename-others').prop("disabled", true);
		   		$('#supervisename-6').val("");
		   		$('#supervisename-others').val("");
		   	}
		   		
	});	


	$('#workarrangement').change(function() {
	    if($(this).val()=="5 – Others"){ 
	    	$('#others-work-arrangement').removeClass('hidden');
	    }	  
	    else{
	    	$('#others-work-arrangement').addClass('hidden');
	    	$('#others-work-arrangement-value').val("");

	    }  
	});

	$('#hazard-check').click(function(){
		  if($(this).is(':checked')) {
			   $('#others-hazards').removeClass('hidden');
		   } 
		   else{
		   		$('#others-hazards').addClass('hidden');
		   		$('#others-hazards-value').val("");
		   }
	});

	$('#payment-check').click(function(){
		  if($(this).is(':checked')) {
			   $('#others-payment').removeClass('hidden');
		   } 
		   else{
		   		$('#others-payment').addClass('hidden');
		   		$('#others-payment-value').val("");
		   }
	});


	$('#earnings-check').click(function(){
		  if($(this).is(':checked')) {
			   $('#others-earnings').removeClass('hidden');
		   } 
		   else{
		   		$('#others-earnings').addClass('hidden');
		   		$('#others-earnings-value').val("");
		   }
	});

	$('#highestattainment-1').change(function(){
		  if($(this).val()=="Others"){ 
	    	$('.others-attainment-1').removeClass('hidden');	
	    	$('#others-attainment-value-1').attr('name', 'highestattainment[]');
	    	$(this).removeAttr('name');
	    }	  
	    else{
	    	$('.others-attainment-1').addClass('hidden');
	    	$('#others-attainment-value-1').attr('name', 'highestattainment[]');
	    	$(this).attr('name', 'highestattainment[]');
	    	$('#others-attainment-value-1').val("");
	    }  
	});

	$('#skills-1').change(function(){
		  if($(this).val()=="Others-Skills"){ 
	    	$('.others-skills-1').removeClass('hidden');	
	    	$('#others-skills-value-1').attr('name', 'skills[]');
	    	$(this).removeAttr('name');
	    }	  
	    else{
	    	$('.others-skills-1').addClass('hidden');
	    	$('#others-skills-value-1').attr('name', 'skills[]');
	    	$(this).attr('name', 'skills[]');
	    	$('#others-skills-value-1').val("");
	    }  
	});





});