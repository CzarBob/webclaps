
  var family_number = 2;
  var services_number = 2;
  var assistance_number = 2;



$.fn.mixon = function(events) {
    Object.keys(events).forEach(function(selector) {
        var entry = events[selector];
        Object.keys(entry).forEach(function(event) {
            this.on(event, selector, entry[event]);
        }, this);
    }, this);
    return this;
};

jQuery(function(){


$('#add-family-btn').click(function(){
             event.preventDefault();  

          var new_family = $(`
                            <div id="family-${family_number}">
                                <h3 id="family-count">${family_number}.</h3>
                                <div class="form-group">
                                  <b style="float:right; color:red;"><input type="button" class="btn btn-danger" value="X" title="Remove" id="remove-family-${family_number}"></b>
                                </div>
                                <div class="form-group zbot">
                                  <div class="col-md-1"></div>
                                  <label class="col-md-2 control-label" style="color: red;"><b>Last Name</b></label>
                                  <div class="col-md-3">
                                      <div class="input-group mb-md input-group-icon">
                                      <input type="text" name="familylastname[]" class="form-control" placeholder="">
                                    </div>
                                  </div>
                                  <label class="col-md-2 control-label"><b>First Name</b></label>
                                  <div class="col-md-3">
                                      <div class="input-group mb-md input-group-icon">
                                      <input type="text" name="familyfirstname[]" class="form-control" placeholder="">
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <div class="col-md-1"></div>
                                  <label class="col-md-2 control-label" style="color: red;"><b>Relationship</b></label>
                                  <div class="col-md-3">
                                      <div class="input-group mb-md input-group-icon">
                                      <input type="text" name="familyrelationship[]" class="form-control" placeholder="">
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <div class="col-md-1"></div>
                                  <label class="col-md-2 control-label" style="color: red;"><b>Sex</b></label>
                                  <div class="col-md-3">
                                    <div class="input-group mb-md input-group-icon">
                                      <select name="familysex[]" class="form-control">
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                      </select>
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <div class="col-md-1"></div>
                                  <label class="col-md-2 control-label" style="color: red;"><b>Age</b></label>
                                  <div class="col-md-3">
                                      <div class="input-group mb-md input-group-icon">
                                      <input type="text" name="familyage[]" class="form-control" placeholder="">
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <div class="col-md-1"></div>
                                  <label class="col-md-2 control-label" style="color: red;"><b>Civil Status</b></label>
                                  <div class="col-md-3">
                                      <div class="input-group mb-md input-group-icon">
                                      <select name="civilstatus[]" class="form-control">
                                        <option value="1 – Single">1 – Single</option>
                                        <option value="2 – Married">2 – Married</option>
                                        <option value="3 – Widowed">3 – Widowed</option>
                                        <option value="4 – Legally Separated">4 – Legally Separated</option>
                                      </select>
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <div class="col-md-1"></div>
                                  <label class="col-md-2 control-label" style="color: red;"><b>Indicate if Solo Parent</b></label>
                                  <div class="col-md-3">
                                    <div class="input-group mb-md input-group-icon">
                                      <select name="soloparent[]" class="form-control">
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                      </select>  
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <div class="col-md-1"></div>
                                  <label class="col-md-2 control-label" style="color: red;"><b>Highest Educational Attainment</b></label>
                                  <div class="col-md-3">
                                      <div class="input-group mb-md input-group-icon">
                                      <select name="highestattainment[]" id="highestattainment-${family_number}" class="form-control attainment-${family_number}">
                                        <option value="UNKNOWN">UNKNOWN</option>
                                        <option value="N/A">N/A</option>
                                        <option value="No Grade Completed">No Grade Completed</option>
                                        <option value="Grade 1">Grade 1</option>
                                        <option value="Grade 2">Grade 2</option>
                                        <option value="Grade 3">Grade 3</option>
                                        <option value="Grade 4">Grade 4</option>
                                        <option value="Grade 5">Grade 5</option>
                                        <option value="Grade 6">Grade 6</option>
                                        <option value="Grade 7 / 1st Year HS">Grade 7 / 1st Year HS</option>
                                        <option value="Grade 8 / 2nd Year HS">Grade 8 / 2nd Year HS</option>
                                        <option value="Grade 9 / 3rd Year HS">Grade 9 / 3rd Year HS</option>
                                        <option value="Grade 10 / 4th Year HS">Grade 10 / 4th Year HS</option>
                                        <option value="Grade 11">Grade 11</option>
                                        <option value="Grade 12">Grade 12</option>
                                        <option value="Tech-Voc">Tech-Voc</option>
                                        <option value="College">College</option>
                                        <option value="Postgraduate">Postgraduate</option>
                                        <option value="Others">Others</option>
                                      </select>
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group others-attainment-${family_number} hidden">
                                    <div class="col-md-1"></div>
                                    <label class="col-md-2 control-label"><b>specify:</b></label>
                                    <div class="col-md-3">
                                        <div class="input-group mb-md input-group-icon">
                                            <input type="text" id="others-attainment-value-${family_number}" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                    <hr>
                                </div>
                                <div class="form-group">
                                  <div class="col-md-1"></div>
                                  <label class="col-md-2 control-label" style="color: red;"><b>Occupation</b></label>
                                  <div class="col-md-3">
                                      <div class="input-group mb-md input-group-icon">
                                      <input type="text" name="occupation[]" class="form-control" placeholder="">
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <div class="col-md-1"></div>
                                  <label class="col-md-2 control-label" style="color: red;"><b>Estimated Monthly Income</b></label>
                                  <div class="col-md-3">
                                      <div class="input-group mb-md input-group-icon">
                                      <input type="text" name="familymonthlyincome[]" class="form-control" placeholder="">
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <div class="col-md-1"></div>
                                  <label class="col-md-2 control-label" style="color: red;"><b>Skills</b></label>
                                  <div class="col-md-3">
                                      <div class="input-group mb-md input-group-icon">
                                      <select name="skills[]" id="skills-${family_number}" class="form-control">
                                        <option value="Plumbing">Plumbing</option>
                                        <option value="Masonry">Masonry</option>
                                        <option value="Carpentry">Carpentry</option>
                                        <option value="Welding">Welding</option>
                                        <option value="Automotive">Automotive</option>
                                        <option value="Massage Therapy">Massage Therapy</option>
                                        <option value="Electronics">Electronics</option>
                                        <option value="Computer Technology">Computer Technology</option>
                                        <option value="Sewing/ Upholstery Repair">Sewing/ Upholstery Repair</option>
                                        <option value="Snack/Food Preparation">Snack/Food Preparation</option>
                                        <option value="Meat Processing">Meat Processing</option>
                                        <option value="Driving">Driving</option>
                                        <option value="Cosmetology">Cosmetology</option>
                                        <option value="Car Wash">Car Wash</option>
                                        <option value="Others-Skills">Others</option>
                                      </select>
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group others-skills-${family_number} hidden">
                                    <div class="col-md-1"></div>
                                    <label class="col-md-2 control-label"><b>specify:</b></label>
                                    <div class="col-md-3">
                                        <div class="input-group mb-md input-group-icon">
                                            <input type="text" id="others-skills-value-${family_number}" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                    <hr>
                                </div>
                                <div class="form-group">
                                  <div class="col-md-1"></div>
                                  <label class="col-md-2 control-label" style="color: red;"><b>Whereabouts</b></label>
                                  <div class="col-md-3">
                                      <div class="input-group mb-md input-group-icon">
                                      <input type="text" name="whereabouts[]"class="form-control" placeholder="">
                                    </div>   
                                  </div>
                                </div>
                                <div class="form-group">
                                  <div class="col-md-1"></div>
                                  <label class="col-md-2 control-label" style="color: red;"><b>Type of Disability/Ailment, if any</b></label>
                                  <div class="col-md-3">
                                      <div class="input-group mb-md input-group-icon">
                                      <input type="text" name="familytypeofdisability[]" class="form-control" placeholder="">
                                    </div>
                                  </div>
                                </div> 
                                <hr>
                            </div>
                `).mixon({


                  "select" : {
                    'change':function(event){

                          let indx = event.target.id.substr(-1);

                          if($('#'+event.target.id).val() == "Others")
                          {  
                            $('.others-attainment-'+indx).removeClass('hidden');
                            $('#highestattainment-'+indx).removeAttr('name');
                            $('#others-attainment-value-'+indx).attr('name','highestattainment[]');

                          }
                          else if(

                                $('#'+event.target.id).val() == "UNKNOWN"                 ||
                                $('#'+event.target.id).val() == "N/A"                     ||
                                $('#'+event.target.id).val() == "No Grade Completed"      ||
                                $('#'+event.target.id).val() == "Grade 1"                 ||
                                $('#'+event.target.id).val() == "Grade 2"                 ||
                                $('#'+event.target.id).val() == "Grade 3"                 ||
                                $('#'+event.target.id).val() == "Grade 4"                 ||
                                $('#'+event.target.id).val() == "Grade 5"                 ||
                                $('#'+event.target.id).val() == "Grade 6"                 ||
                                $('#'+event.target.id).val() == "Grade 7 / 1st Year HS"   ||
                                $('#'+event.target.id).val() == "Grade 8 / 2nd Year HS"   ||
                                $('#'+event.target.id).val() == "Grade 9 / 3rd Year HS"   ||
                                $('#'+event.target.id).val() == "Grade 10 / 4th Year HS"  ||
                                $('#'+event.target.id).val() == "Grade 11"                ||
                                $('#'+event.target.id).val() == "Grade 12"                ||
                                $('#'+event.target.id).val() == "Tech-Voc"                ||
                                $('#'+event.target.id).val() == "College"                 ||
                                $('#'+event.target.id).val() == "Postgraduate"

                                )
                          {
                            $('.others-attainment-'+indx).addClass('hidden');
                            $('#highestattainment-'+indx).attr('name','highestattainment[]');
                            $('#others-attainment-value-'+indx).removeAttr('name');
                            $('#others-attainment-value-'+indx).val("");
                          }
                          else if($('#'+event.target.id).val() == "Others-Skills")
                          {
                            $('.others-skills-'+indx).removeClass('hidden');
                            $('#skills-'+indx).removeAttr('name');
                            $('#others-skills-value-'+indx).attr('name','skills[]');
                          }
                          else if(
                                    $('#'+event.target.id).val() == "Plumbing"                  ||
                                    $('#'+event.target.id).val() == "Masonry"                   ||
                                    $('#'+event.target.id).val() == "Carpentry"                 ||
                                    $('#'+event.target.id).val() == "Welding"                   ||
                                    $('#'+event.target.id).val() == "Automotive"                ||
                                    $('#'+event.target.id).val() == "Massage Therapy"           ||
                                    $('#'+event.target.id).val() == "Electronics"               ||
                                    $('#'+event.target.id).val() == "Computer Technology"       ||
                                    $('#'+event.target.id).val() == "Sewing/ Upholstery Repair" ||
                                    $('#'+event.target.id).val() == "Snack/Food Preparation"    ||
                                    $('#'+event.target.id).val() == "Meat Processing"           ||
                                    $('#'+event.target.id).val() == "Driving"                   ||
                                    $('#'+event.target.id).val() == "Cosmetology"               ||
                                    $('#'+event.target.id).val() == "Car Wash"                  
                                 )
                          {
                            $('.others-skills-'+indx).addClass('hidden');
                            $('#skills-'+indx).attr('name','skills[]');
                            $('#others-skills-value-'+indx).removeAttr('name');
                            $('#others-skills-value-'+indx).val("");
                          }

                      }
                  },

                  "input[type='button']" : {
                    'click':function(event){
                        let indx = event.target.id.substr(-1);

                        if($('#remove-family-'+indx).data('clicked', true))
                        {
                          $('#family-'+indx).remove();
                          family_number -= 1;
                        }
                    }
                  }

                });

           if(family_number != 13){
             $('#add-family').append(new_family);
            family_number += 1;
           }
    });





	$('#add-services-btn').click(function(){
    event.preventDefault();

      var new_service = $(`
                                            <div id="service-${services_number}">
                                                <h3>${services_number}.</h3>
                                                <div class="form-group">
                                                  <b style="float:right; color:red;"><input type="button" class="btn btn-danger" value="X" title="Remove" id="remove-service-${services_number}"></b>
                                                </div>
                                                <div class="form-group zbot">
                                                    <div class="col-md-1"></div>
                                                    <label class="col-md-2 control-label" style="color: red;"><b>Assistance Already Availed by the family</b></label>
                                                    <div class="col-md-3">
                                                        <div class="input-group mb-md input-group-icon">
                                                            <input type="text" name="alreadyavailed[]" class="form-control" placeholder="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-md-1"></div>
                                                    <label class="col-md-2 control-label" style="color: red;"><b>Source of Assistance</b></label>
                                                    <div class="col-md-3">
                                                        <div class="input-group mb-md input-group-icon">
                                                            <input type="text" name="servicesavailedsource[]" class="form-control" placeholder="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-md-1"></div>
                                                    <label class="col-md-2 control-label" style="color: red;"><b>Year Availed</b></label>
                                                    <div class="col-md-3">
                                                        <div class="input-group mb-md input-group-icon">
                                                            <input type="text" name="yearavailed[]" class="form-control" placeholder="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-md-1"></div>
                                                    <label class="col-md-2 control-label" style="color: red;"><b>Family Member who Availed the Service</b></label>
                                                    <div class="col-md-3">
                                                        <div class="input-group mb-md input-group-icon">
                                                            <input type="text" name="familyavailedservice[]" class="form-control" placeholder="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-md-1"></div>
                                                    <label class="col-md-2 control-label" style="color: red;"><b>Remarks</b></label>
                                                    <div class="col-md-3">
                                                        <div class="input-group mb-md input-group-icon">
                                                            <input type="text" name="servicesavailedremarks[]" class="form-control" placeholder="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr>
                                            </div>
          `).on('click', function(event){

                let indx = event.target.id.substr(-1);

                 if($('#remove-service-'+indx).data('clicked', true))
                 {
                   $('#service-'+indx).remove();
                   services_number -= 1;
                 }

          });
    		if(services_number != 13){
              $('#add-services').append(new_service);
        services_number += 1;
        }
	});





	$('#add-assistance-btn').click(function(){
		event.preventDefault();

      var new_assistance = $(`
                                            <div id="assistance-${assistance_number}">
                                                <h3>${assistance_number}.</h3>
                                                <div class="form-group">
                                                  <b style="float:right; color:red;"><input type="button" class="btn btn-danger" value="X" title="Remove" id="remove-assistance-${assistance_number}"></b>
                                                </div>
                                                <div class="form-group zbot">
                                                    <div class="col-md-1"></div>
                                                    <label class="col-md-2 control-label" style="color: red;"><b>Types of Assistance Requested</b></label>
                                                    <div class="col-md-3">
                                                        <div class="input-group mb-md input-group-icon">
                                                            <input type="text" name="assistancerequested[]" class="form-control" placeholder="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-md-1"></div>
                                                    <label class="col-md-2 control-label" style="color: red;"><b>Source of Assistance</b></label>
                                                    <div class="col-md-3">
                                                        <div class="input-group mb-md input-group-icon">
                                                            <input type="text" name="requestedassistancesource[]" class="form-control" placeholder="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-md-1"></div>
                                                    <label class="col-md-2 control-label" style="color: red;"><b>Start and End of Assistance</b></label>
                                                    <div class="col-md-3">
                                                        <div class="input-group mb-md input-group-icon">
                                                            <input type="text" name="startassistance[]" class="form-control" placeholder="Start">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="input-group mb-md input-group-icon">
                                                            <input type="text" name="endassistance[]" class="form-control" placeholder="End">
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="form-group">
                                                    <div class="col-md-1"></div>
                                                    <label class="col-md-2 control-label" style="color: red;"><b>Family Member who Requested the Assistance</b></label>
                                                    <div class="col-md-3">
                                                        <div class="input-group mb-md input-group-icon">
                                                            <input type="text" name="familyrequestedassistance[]" class="form-control" placeholder="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-md-1"></div>
                                                    <label class="col-md-2 control-label" style="color: red;"><b>Remarks</b></label>
                                                    <div class="col-md-3">
                                                        <div class="input-group mb-md input-group-icon">
                                                            <input type="text" name="assistanceremarks[]" class="form-control" placeholder="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr>
                                            </div>
          `).on('click',function(event){
              let indx = event.target.id.substr(-1);

                 if($('#remove-assistance-'+indx).data('clicked', true))
                 {
                   $('#assistance-'+indx).remove();
                   assistance_number -= 1;
                 }
          });
      if(assistance_number != 13){
              $('#add-assistance').append(new_assistance);
        assistance_number += 1;
      }
	});






});

