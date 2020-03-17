(function(){

        let currentYear = (new Date).getFullYear();

        
        $('#year').val(currentYear);

        $("#dateofbirth, #dateofinterview").keyup(function(){
            if ($(this).val().length == 2){
                    $(this).val($(this).val() + "/");
            }else if ($(this).val().length == 5){
                  $(this).val($(this).val() + "/");
            }
        });

        $('#add-record').on('submit',function(){
             event.preventDefault();

            swal({
                  title: 'Submit Already?',
                  text: '',
                  showCancelButton: true,
                  confirmButtonColor: '#0b5478',
                  cancelButtonColor: 'black',
                  confirmButtonText: 'Confirm'    
                }).then((result) => {
                    if(result.value){
                        let data = $(this).serializeArray();
                        $.ajax(
                            {
                                type:"post",
                                url: location.origin+"/Encode/add_record",
                                data: data,
                                success:function(response){
                                    if(response == 'success'){
                                        swal({
                                         title: "Successfully Added",
                                         text: "",
                                         type: "success",
                                         timer: 600,
                                         showConfirmButton:false
                                         }).then(function(){
                                            $("#add-record").trigger("reset");
                                            $('label[id=_nav_active_1]').addClass('active');
                                            $('label[id=_nav_active_2]').removeClass('active');
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

                                            $('#_sex').val("M");

                                            $('#add-family').empty();
                                            $('#add-services').empty();
                                            $('#add-assistance').empty();

                                            window.family_number = 2;
                                            window.services_number = 2;
                                            window.assistance_number = 2;


                                            $('#year').val(currentYear);

                                            $([document.documentElement, document.body]).animate({
                                                    scrollTop: $("#_header").offset().top
                                                }, 300);
                                        });
                                    }
                                    else if(response=='exists'){
                                        swal({  
                                         title: "Record Already Exists!",
                                         text: "",
                                         type: "error",
                                         timer: 700,
                                         showConfirmButton:false
                                         });
                                    }
                                }   
                            });
                    }

                });

        });





        $('#import-excel-form').on('submit',function(event){
            

            $("#overlay").fadeIn(300);　

            event.preventDefault();
            $.ajax(
            {
                url: location.origin+"/Import/import",
                method: "POST",
                data: new FormData(this),
                contentType:false,
                cache:false,
                processData:false,
                success:function(response){
      
                },
                error: function(){
                  $("#overlay").fadeOut(300);
                  swal({  
                       title: "Something went wrong!",
                       text: "",
                       type: "error",
                       timer: 700,
                       showConfirmButton:false
                       });
                }
            }).done(function(response){
                if(response == 'success'){
                  $("#overlay").fadeOut(300);
                            swal({
                             title: "File Uploaded",
                             text: "",
                             type: "success",
                             timer: 600,
                             showConfirmButton:false
                             }).then(function(){
                                $('#file').val(null);

                            });
                        }
                        else if(response=='exists'){
                          $("#overlay").fadeOut(300);
                            swal({  
                             title: "Some records exist!",
                             text: "",
                             type: "error",
                             timer: 700,
                             showConfirmButton:false
                             });
                        }
                        else if(response=='invalid'){
                          $("#overlay").fadeOut(300);
                            swal({  
                             title: "Invalid File Type!",
                             text: "",
                             type: "error",
                             timer: 700,
                             showConfirmButton:false
                             });
                        }
            });

        });

//         $('#addform').submit(function(){
//             event.preventDefault();
//             let $data = $('#addform').serializeArray();
//             $.ajax(
//                 {
//                     type:"post",
//                     url: location.origin+"/clprofiling/location_c/insert_location",
//                     data:$data,
//                     success:function(response){
//                         if(response=="success"){
//                             swal({
//                              title: "Successfully Addded",
//                              text: "",
//                              type: "success",
//                              timer: 2000,
//                              showConfirmButton:false
//                              }).then(function(){
//                                 let myTable = $("#datatable-tabletools").DataTable();
//                                 let last_row = myTable.row(':last').data();
//                                 let id = parseInt($(last_row[0]).text())+1; 
//                                 let row = [];
//                                 row.push(`<p id="id">${id}</p><input type="hidden" id="${id}"/>`);
//                                 row.push(`<p id="description">${$data[1].value}</p>`);
//                                 row.push(`<p id="address">${$data[2].value}</p>`);
//                                 row.push(`<div class="edit-button">
//                                 <button type="button" class="btn btn-dark btnlocedit" data-toggle="modal" data-target="#editModal">Edit</button>
//                                 <button id="btndeleteLocation" type="button" class="btn btn-dark btndel">Delete</button>
//                             </div>`);           
//                                 myTable.row.add(row).draw(false);
//                                 $('#addform')[0].reset(); 
//                             });
//                         }
//                         else if(response=="exists"){
//                             swal({  
//                              title: "Already Exists!",
//                              text: "",
//                              type: "error",
//                              timer: 2000,
//                              showConfirmButton:false
//                              });
//                         }
//                     }   
//                 })
//         });
//         $('#datatable-tabletools').on('click','.btnlocedit',function(){
//         	let id = $(this).closest("tr").children().children("#id").text();
//             let description = $(this).closest("tr").children().children("#description").text();
//             let address = $(this).closest("tr").children().children("#address").text();
//             $('#editModal [name=locationId]').val(id);
//             $('#editModal [name=locationDescription]').val(description);
//             $('#editModal [name=locationAddress]').val(address);
//         }); 
//         $('#updateform').submit(function(){
//             event.preventDefault();
//             let data = $('#updateform').serializeArray();
//             $.ajax(
//                 {
//                     type:"post",
//                     url: location.origin+"/clprofiling/location_c/update_location",
//                     data:data,
//                     success:function(response){
//                         if(response=="success"){
//                             swal({
//                              title: "Successfully Updated",
//                              text: " ",
//                              showConfirmButton:false,
//                              type: "success",
//                              timer: 1000,
//                              }).then(function(){
//                                 $('#'+data[0].value).closest('tr').children().children('#description').text(data[1].value);
//                                 $('#'+data[0].value).closest('tr').children().children('#address').text(data[2].value);
//                              });
//                         }
//                         else if(response=="exists"){
//                             swal({  
//                              title: "Already Exists!",
//                              text: "",
//                              timer: 2000,
//                              showConfirmButton:false,
//                              type: "error",
//                              });
//                         }                            
//                     }   
//                 })
//         });

//         $('#datatable-tabletools').on('click','.btndel',function(){
//             let id = $(this).closest('tr').children().children("#id").text();
//             let row = $(this);
//             $.ajax(
//                 {
//                     type:"post",
//                     url: location.origin+"/clprofiling/location_c/delete_location",
//                     data: {"id":id},
//                     success:function(response){
//                         swal({
//                          title: "Successfully Deleted",
//                          text: "",
//                          showConfirmButton:false,
//                          type: 'warning',
//                          timer: 1000,
//                          }).then(function(){
//                             let myTable = $("#datatable-tabletools").DataTable();
//                             myTable.row(row.parents('tr')).remove().draw(false);
//                          })
//                     }
                     
//                 })
//         })

//       $('#datatable-tabletools').on('click','.update',function(){
//           let id = $(this).closest("tr").children().children("#id").val();
//             let plate_no = $(this).closest("tr").children().children("#plate_no").text();
//             let desc = $(this).closest("tr").children().children("#desc").text();
//             let item_type = $(this).closest("tr").children().children("#item_type").text();
//             let unit = $(this).closest("tr").children().children("#unit").text();
//             let quantity = $(this).closest("tr").children().children("#quantity").text();
//             $('#editModal [name=logId]').val(id);
//             $('#editModal [name=add-plate_no]').val(plate_no);
//             $('#editModal [name=add-description]').val(desc);
//             $('#editModal [name=itemType]').val(item_type);
//             $('#editModal [name=itemUnit]').val(unit);
//             $('#editModal [name=add-quantity]').val(quantity);
//         }); 

//         $('#btnupdateLog').click( function(){
//             let data = $('#edit-log-form').serializeArray();
//             console.log(data);
//             $.ajax(
//                 {
//                     type:"post",
//                     url: location.origin+"/clprofiling/Motorpool_C/edit_log",
//                     data:data,
//                     success:function(response){
//                         if(response=="success"){
//                             swal({
//                              title: "Successfully Updated",
//                              text: "",
//                              showConfirmButton:false,
//                              type: "success",
//                              timer: 1000,
//                              }).then(function(){
//                                 console.log(data);

//                                 $('#'+data[0].value).closest('tr').children().children('#plate_no').text(data[1].value);
//                                 $('#'+data[0].value).closest('tr').children().children('#desc').text(data[2].value);
//                                 $('#'+data[0].value).closest('tr').children().children('#item_type').text(data[3].value);
//                                 $('#'+data[0].value).closest('tr').children().children('#unit').text(data[4].value);
//                                 $('#'+data[0].value).closest('tr').children().children('#quantity').text(data[5].value);
//                                 console.log($('#'+data[0].value).closest('tr'));                             
//                              });
//                         }
//                         else if(response=="empty"){
//                             swal({  
//                              title: "Empty!",
//                              text: "",
//                              timer: 2000,
//                              showConfirmButton:false,
//                              type: "error",
//                              });
//                         }                            
//                     }   
//                 })
//         });

       





// $('#add_vehicle').click(function(){
//             //event.preventDefault();

//             let $data = $('#add-vehicle-form').serializeArray();
//             $.ajax(
//                 {
//                     type:"post",
//                     url: location.origin+"/clprofiling/vehicle_c/add_vehicle",
//                     data:$data,
//                     success:function(response){
//                         if(response!="exists"){
//                             swal({
//                              title: "Successfully Added",
//                              text: "",
//                              type: "success",   
//                              timer: 2000,
//                              showConfirmButton:false,
//                              }).then(function(){
//                                 $.magnificPopup.close();
//                                 let myTable = $("#datatable-tabletools").DataTable();
                                
//                                 let id = response; 
//                                 let row = [];
//                                 console.log(id);
//                                 row.push(`<p id="id">${id}</p><input type="hidden" id="${id}"/>`);
//                                 row.push(`<p id="vehicleType">${$data[1].value}</p>`);
//                                 row.push(`<p id="vehicleModel">${$data[2].value}</p>`);
//                                 row.push(`<p id="plateNumber">${$data[3].value}</p>`);
//                                 row.push(`<p id="bodyNumber">${$data[4].value}</p>`);
//                                 row.push(`
//                                     <div class="edit-button">
//                                 <button type="button" class="btn btn-dark editV" data-toggle="modal" data-target="#editModal">Edit</button>
//                                 <button id="btndeleteVehicle" type="button" class="btn btn-dark delV">Delete</button>
//                                 <a id="printbtn" class="btn btn-dark glyphicon glyphicon-download-alt" href="${location.origin}/clprofiling/To_pdf?platenopk='${$data[3].value}'&model='${$data[2].value}'"></a>                                        
//                                     </div> 
//                             </div>`);  
//                                 myTable.row.add(row).draw(false);
//                                 $('#add-vehicle-form')[0].reset();
//                                 $('#modalForm').modal('hide');
//                             });
//                         }
//                         else if(response == "exists"){
//                             swal({  
//                              title: "Already Exists!",
//                              text: "",
//                              timer: 2000,
//                              type: "error",
//                              showConfirmButton:false
//                              });
//                         }
                           
//                     }  
//                 })
//         });








//         $('#datatable-tabletools').on('click','.editV',function(){

//             console.log("naka sulod sya sa edit vehicle");
//             let id = $(this).closest('tr').children().children("#id").text();
//             let vehicleType = $(this).closest('tr').children().children("#vehicleType").text();
//             let vehicleModel = $(this).closest("tr").children().children("#vehicleModel").text();
//             let plateNumber = $(this).closest("tr").children().children("#plateNumber").text();
//             let bodyNumber = $(this).closest("tr").children().children("#bodyNumber").text();

//             console.log("id", id);
//             console.log("vehicleType", vehicleType);
//             console.log("vehicleModel", vehicleModel);
//             console.log("plateNumber", plateNumber);
//             console.log("bodyNumber", bodyNumber);

//             $('#editModal [name=vehicleid]').val(id);
//             $('#editModal [name=type]').val(vehicleType);
//             $('#editModal [name=model]').val(vehicleModel);
//             $('#editModal [name=plateNumber]').val(plateNumber);
//             $('#editModal [name=bodyNumber]').val(bodyNumber);
//         }); 

//         $('#btnupdateV').click( function(){
//             let data = $('#edit-vehicle-form').serializeArray();
//             console.log("NA CLICK NA SYA");
//             $.ajax(
//                 {
//                     type:"post",
//                     url: location.origin+"/clprofiling/vehicle_c/edit_vehicle",
//                     data:data,
//                     success:function(response){
//                         if(response=="success"){
//                             swal({
//                              title: "Successfully Updated",
//                              text: "",
//                              showConfirmButton:false,
//                              type: "success",
//                              timer: 1000,
//                              }).then(function(){
//                                 console.log(data);
//                                 $('#'+data[0].value).closest('tr').children().children('#vehicleType').text(data[1].value);
//                                 $('#'+data[0].value).closest('tr').children().children('#vehicleModel').text(data[2].value);
//                                 $('#'+data[0].value).closest('tr').children().children('#plateNumber').text(data[3].value);
//                                 $('#'+data[0].value).closest('tr').children().children('#bodyNumber').text(data[4].value);
//                                 console.log($('#'+data[0].value).closest('tr'));                             
//                              });
//                         }
//                         else if(response=="empty"){
//                             swal({  
//                              title: "Empty!",
//                              text: "",
//                              timer: 2000,
//                              showConfirmButton:false,
//                              type: "error",
//                              });
//                         }                            
//                     }   
//                 })
//         });

//         $('#datatable-tabletools').on('click','.delV',function(){
//             let id = $(this).closest('tr').children().children("#id").text();
//             let row = $(this);
//             $.ajax(
//                 {
//                     type:"post",
//                     url: location.origin+"/clprofiling/vehicle_c/delete_vehicle",
//                     data: {"id":id},
//                     success:function(response){
//                         swal({
//                          title: "Successfully Deleted",
//                          text: "",
//                          showConfirmButton:true,
//                          type: 'warning',
//                          // timer: 1000,
//                          }).then(function(){
//                             let myTable = $("#datatable-tabletools").DataTable();
//                             myTable.row(row.parents('tr')).remove().draw(false);
//                          })
//                     }
                     
//                 })
//         });

//         $('#datatable-tabletools').on('click','#printbtn',function(){

//             // console.log("SAKTO KA");
           
//         });




//         //JQUERY FOR MOTORPOOL ITEMS

//         $('#add_item').click(function(){
//             //event.preventDefault();

//             let $data = $('#add-item-form').serializeArray();
//             $.ajax(
//                 {
//                     type:"post",
//                     url: location.origin+"/clprofiling/item_c/add_item",
//                     data:$data,
//                     success:function(response){
//                         if(response!="exists"){
//                             swal({
//                              title: "Successfully Added",
//                              text: "",
//                              type: "success",   
//                              timer: 2000,
//                              showConfirmButton:false,
//                              }).then(function(){
//                                 $.magnificPopup.close();
//                                 let myTable = $("#datatable-tabletools").DataTable();
//                                 let id = response; 
//                                 let row = [];
//                                 console.log(id);
//                                 row.push(`<p id="id">${id}</p><input type="hidden" id="${id}"/>`);
//                                 row.push(`<p id="motoritemType">${$data[1].value}</p>`);
//                                 row.push(`<p id="motoritemUnit">${$data[2].value}</p>`);
//                                 row.push(`
//                                     <div class="edit-button">
//                                     <button id="btndeleteItem" type="button" class="btn btn-dark delI" style="float: right; margin-right: 5px">Delete</button>
//                                     <button type="button" class="btn btn-dark editI" data-toggle="modal" data-target="#editModal" style="float: right; margin-right: 5px">Edit</button>
//                                     </div>`);  
//                                 myTable.row.add(row).draw(false);
//                                 $('#add-vehicle-form')[0].reset();
//                                 $('#modalForm').modal('hide');
//                             });
//                         }
//                         else if(response == "exists"){
//                             swal({  
//                              title: "Already Exists!",
//                              text: "",
//                              timer: 2000,
//                              type: "error",
//                              showConfirmButton:false
//                              });
//                         }
                           
//                     }  
//                 })
//         });

//         $('#datatable-tabletools').on('click','.editI',function(){
//             let id = $(this).closest("tr").children().children("#id").text();
//             let type = $(this).closest("tr").children().children("#motoritemType").text();
//             let unit = $(this).closest("tr").children().children("#motoritemUnit").text();
//             $('#editModal [name=motoritemId]').val(id);
//             $('#editModal [name=motoritemType]').val(type);
//             $('#editModal [name=motoritemUnit]').val(unit);;
//         });

//         $('#btnupdateI').click( function(){
//             let data = $('#edit-item-form').serializeArray();
//             console.log("NA CLICK NA SYA");
//             $.ajax(
//                 {
//                     type:"post",
//                     url: location.origin+"/clprofiling/item_c/edit_item",
//                     data:data,
//                     success:function(response){
//                         if(response=="success"){
//                             swal({
//                              title: "Successfully Updated",
//                              text: "",
//                              showConfirmButton:false,
//                              type: "success",
//                              timer: 1000,
//                              }).then(function(){
//                                 console.log(data);
//                                 $('#'+data[0].value).closest('tr').children().children('#motoritemType').text(data[1].value);
//                                 $('#'+data[0].value).closest('tr').children().children('#motoritemUnit').text(data[2].value);
//                                 console.log($('#'+data[0].value).closest('tr'));                             
//                              });
//                         }
//                         else if(response=="empty"){
//                             swal({  
//                              title: "Empty!",
//                              text: "",
//                              timer: 2000,
//                              showConfirmButton:false,
//                              type: "error",
//                              });
//                         }                            
//                     }   
//                 })
//         });

//         $('#datatable-tabletools').on('click','.delI',function(){
//             let id = $(this).closest('tr').children().children("#id").text();
//             let row = $(this);
//             $.ajax(
//                 {
//                     type:"post",
//                     url: location.origin+"/clprofiling/item_c/delete_item",
//                     data: {"id":id},
//                     success:function(response){
//                         swal({
//                          title: "Successfully Deleted",
//                          text: "",
//                          showConfirmButton:false,
//                          type: 'warning',
//                          timer: 1000,
//                          }).then(function(){
//                             let myTable = $("#datatable-tabletools").DataTable();
//                             myTable.row(row.parents('tr')).remove().draw(false);
//                          })
//                     }
                     
//                 })
//         });


    })(jQuery); 