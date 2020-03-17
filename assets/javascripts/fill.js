$(document).ready(function(){

	$('#_childidno').prop("readonly",true);

  	get_fo_code();
  	get_gender();
	display_child_id_no();

	$('#childcontrolno').on("keyup", function(){
		display_child_id_no();
	});
	$('#year').on("keyup", function(){
		display_child_id_no();
	});

	$('#regionaloffice').change(function(){
		display_child_id_no();
	});

	$('#fieldoffice').change(function(){
		display_child_id_no();
	});

	$('#sex').change(function(){
		display_child_id_no();
	});

});



function display_child_id_no()
{

	$('#_childidno').val("CL-"+$('#year').val()+"-"+$('#regionaloffice').val()+"-"+$('#_focode').val()+"-"+$('#childcontrolno').val()+"-"+$('#_sex').val());

}

function get_fo_code()
{
	$('#fieldoffice').change(function() {
	    if($(this).val()=="Bukidnon"){ 
	    	$('#_focode').val("1");
	    }	  
	    else if ($(this).val()=="Camiguin")
	    {
	    	$('#_focode').val("2");
	    }
	    else if ($(this).val()=="Eastern Misamis Oriental")
	    {
	    	$('#_focode').val("3");
	    }
	    else if ($(this).val()=="Lanao del Norte")
	    {
	    	$('#_focode').val("4");
	    }
	    else if ($(this).val()=="Misamis Occidental")
	    {
	    	$('#_focode').val("5");
	    }	
	    else if ($(this).val()=="Western Misamis Oriental")
	    {
	    	$('#_focode').val("6");
	    }
	    else
	    {
	    	$('#_focode').val("FO Code");
	    }
	});
	
}

function get_gender()
{
	$('#_sex').val($('#sex').val() == "Male" ? "M" : "F");

	$('#sex').change(function(){
		if($(this).val()=="Male")
		{
			$('#_sex').val("M");	
		}
		else if($(this).val()=="Female")
		{
			$('#_sex').val("F");	
		}
	});
}