$(document).ready(function(){


     $('#register-form').on('submit',function(event){

            console.log('GAGANA');

            event.preventDefault();
            let data = $(this).serialize();

            $.ajax(
            {
                url: location.origin+"/clprofiling/Main/register",
                method: "POST",
                data: data,
                success:function(response){
                    if(response == 'success'){
                            swal({
                             title: "Registered Successfully",
                             text: "",
                             type: "success",
                             timer: 600,
                             showConfirmButton:false
                             }).then(function(){
                                location.href = location.origin+"/clprofiling";
                            });
                        }
                        else if(response=='exists'){
                            swal({  
                             title: "Account already exist!",
                             text: "",
                             type: "warning",
                             timer: 700,
                             showConfirmButton:false
                             });
                        }

                }
            })

        });

});