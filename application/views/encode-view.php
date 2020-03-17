<section role="main" class="content-body"  id="_header">
  <header class="page-header">
    <h2>Encode</h2>
  </header>
  <div id="add-trainee-div" class="col-lg-12">
    <div class="toggle" data-plugin-toggle>
      <section class="toggle active">
        <label id="add-trainee"><b>CLICK HERE TO ADD NEW RECORD</b></label>
        <div class="toggle-content">
          <div class="panel-body">
            <div class="text-center col-md-12 control-label">

              <h1><b>Profile Child Laborers</b></h1>
              <span style="float: right;"><p><b>NOTE: <span style="color: red;">RED FIELDS</span> are MANDATORY!</b></span>
              </div>
              <div class="row">
                <div class="col-xs-12">
                  <section class="panel form-wizard" id="w4">
                    <div class="panel-body">
                      <form class="form-horizontal" id="add-record" method="POST">
                       <div class="hidden"><input type="text" name="_focode" id="_focode" class="form-control" value=""></div>
                       <div class="hidden"><input type="text" name="_sex" id="_sex" class="form-control" value=""></div>
                       <label class="col-md-2 control-label" style="color: red;"><b>CHILD's ID NO.</b></label>
                       <div class="col-md-3">
                         <div class="input-group mb-md input-group-icon">
                           <input type="text" name="childidno" id="_childidno" class="form-control" value="">
                         </div>
                       </div>
                       <div class="tab-content">
                        <div id="w4-profile" class="tab-pane active">
                          <div class="form-group">
                          </div>
                          <div class="form-group">
                            <div class="col-md-1"></div>
                            <label class="col-md-1 control-label"><b>Year</b></label>
                            <div class="col-md-2">
                              <div class="input-group mb-md input-group-icon">
                                <input type="number" name="year" id="year" class="form-control" value="">
                              </div>
                            </div>
                            <label class="col-md-3 control-label"><b>Regional Office</b></label>
                            <div class="col-md-3">
                              <div class="input-group mb-md input-group-icon">
                                <select name="regionaloffice" id="regionaloffice" class="form-control" required="required">
                                  <option value=""></option>
                                  <option value="NCR">NCR</option>
                                  <option value="CAR">CAR</option>
                                  <option value="R1">Region 1</option>
                                  <option value="R2">Region 2</option>
                                  <option value="R3">Region 3</option>
                                  <option value="R4-A">Region 4-A</option>
                                  <option value="MIMAROPA">MIMAROPA</option>
                                  <option value="R5">Region 5</option>
                                  <option value="R6">Region 6</option>
                                  <option value="R7">Region 7</option>
                                  <option value="R8">Region 8</option>
                                  <option value="R9">Region 9</option>
                                  <option value="R10">Region 10</option>
                                  <option value="R11">Region 11</option>
                                  <option value="R12">Region 12</option>
                                  <option value="Caraga">Caraga</option>
                                </select>
                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-md-2 control-label"><b>Field Office</b></label>
                            <div class="col-md-3">
                              <div class="input-group mb-md input-group-icon">
                                <select name="fieldoffice" id="fieldoffice" class="form-control" required="required">
                                  <option value=""></option>
                                  <option value="Bukidnon">Bukidnon</option>
                                  <option value="Camiguin">Camiguin</option>
                                  <option value="Eastern Misamis Oriental">Eastern Misamis Oriental</option>
                                  <option value="Lanao del Norte">Lanao del Norte</option>
                                  <option value="Misamis Occidental">Misamis Occidental</option>
                                  <option value="Western Misamis Oriental">Western Misamis Oriental</option>
                                </select>
                              </div>
                            </div>
                            <label class="col-md-2 control-label" style="color:red;"><b>Child's Control No.</b></label>
                            <div class="col-md-3">
                              <div class="input-group mb-md input-group-icon">
                                <input type="text" name="childcontrolno" id="childcontrolno" class="form-control" required>
                              </div>
                            </div>
                          </div>

                          <hr/>
                          <h3><b>A. Profile of the Child:</b> Personal Information</h3>
                          <div class="form-group">
                            <label class="col-md-2 control-label" style="color: red;"><b>Name:</b></label>
                            <div class="col-md-2">
                              <div class="input-group mb-md input-group-icon">
                                <input type="text" name="lastname" id="lastname" class="form-control" placeholder="Last Name">
                              </div>
                            </div>
                            <div class="col-md-2">
                              <div class="input-group mb-md input-group-icon">
                                <input type="text" name="firstname" id="firstname" class="form-control" placeholder="First Name">
                              </div>
                            </div>
                            <div class="col-md-2">
                              <div class="input-group mb-md input-group-icon">
                                <input type="text" name="middlename" id="middlename" class="form-control" placeholder="Middle Name">
                              </div>
                            </div>
                            <div class="col-md-2">
                              <div class="input-group mb-md input-group-icon">
                                <input type="text" name="suffix" id="suffix" class="form-control" placeholder="Suffix (if applicable)">
                              </div>
                            </div>
                          </div>
                          <hr>
                          <h4>&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                            <b>Permanent Address:</b></h4>
                            <div class="form-group zbot">
                              <label class="col-md-2 control-label" style="color: red;"><b>Region</b></label>
                              <div class="col-md-3">
                                <div class="input-group mb-md input-group-icon">
                                  <select name="region" id="region" class="form-control">
                                    <option value="Region">Region</option>
                                    <option value="UNKNOWN">UNKNOWN</option>
                                    <option value="CAR">CAR</option>
                                    <option value="N/A">N/A</option>
                                    <option value="NATIONAL CAPITAL REGION (NCR)">NATIONAL CAPITAL REGION (NCR)</option>
                                    <option value="CORDILLERA ADMINISTRATIVE REGION (CAR)">CORDILLERA ADMINISTRATIVE REGION (CAR)</option>
                                    <option value="REGION I (ILOCOS REGION)">REGION I (ILOCOS REGION)</option>
                                    <option value="REGION II (CAGAYAN VALLEY)">REGION II (CAGAYAN VALLEY)</option>
                                    <option value="REGION III (CENTRAL LUZON)">REGION III (CENTRAL LUZON)</option>
                                    <option value="REGION IV-A (CALABARZON)">REGION IV-A (CALABARZON)</option>
                                    <option value="MIMAROPA REGION">MIMAROPA REGION</option>
                                    <option value="REGION V (BICOL REGION)">REGION V (BICOL REGION)</option>
                                    <option value="REGION VI (WESTERN VISAYAS)">REGION VI (WESTERN VISAYAS)</option>
                                    <option value="REGION VII (CENTRAL VISAYAS)">REGION VII (CENTRAL VISAYAS)</option>
                                    <option value="REGION VIII (EASTERN VISAYAS)">REGION VIII (EASTERN VISAYAS)</option>
                                    <option value="REGION IX (ZAMBOANGA PENINSULA)">REGION IX (ZAMBOANGA PENINSULA)</option>
                                    <option value="REGION X (NORTHERN MINDANAO)">REGION X (NORTHERN MINDANAO)</option>
                                    <option value="REGION XI (DAVAO REGION)">REGION XI (DAVAO REGION)</option>
                                    <option value="REGION XII (SOCCSKSARGEN)">REGION XII (SOCCSKSARGEN)</option>
                                    <option value="REGION XIII (Caraga)">REGION XIII (Caraga)</option>
                                    <option value="AUTONOMOUS REGION IN MUSLIM MINDANAO (ARMM)">AUTONOMOUS REGION IN MUSLIM MINDANAO (ARMM)</option>
                                  </select>
                                </div>
                              </div>
                              <label class="col-md-2 control-label" style="color: red;"><b>Province</b></label>
                              <div class="col-md-3">
                                <div class="input-group mb-md input-group-icon">
                                  <select name="province" id="province" class="form-control">
                                    <option value="UNKNOWN">UNKNOWN</option>
                                    <option value="N/A">N/A</option>
                                    <option value="BUKIDNON">BUKIDNON</option>
                                    <option value="CAMIGUIN">CAMIGUIN</option>
                                    <option value="LANAO DEL NORTE">LANAO DEL NORTE</option>
                                    <option value="MISAMIS OCCIDENTAL">MISAMIS OCCIDENTAL</option>
                                    <option value="MISAMIS ORIENTAL">MISAMIS ORIENTAL</option>
                                  </select>
                                </div>
                              </div>
                            </div>
                            <div class="form-group zbot">
                              <label class="col-md-2 control-label"><b>District (Congressional)</b></label>
                              <div class="col-md-3">
                                <div class="input-group mb-md input-group-icon">
                                  <input type="text" name="district" id="district" class="form-control" placeholder="District">
                                </div>
                              </div>  
                              <label class="col-md-2 control-label" style="color: red;"><b>Municipality/City</b></label>
                              <div class="col-md-3">
                                <div class="input-group mb-md input-group-icon">
                                  <select name="municipality" id="municipality" class="form-control">
                                    <option value="UNKNOWN">UNKNOWN</option>
                                    <option value="N/A">N/A</option>
                                    <option value="ALUBIJID">ALUBIJID</option>
                                    <option value="BALINGASAG">BALINGASAG</option>
                                    <option value="BALINGOAN">BALINGOAN</option>
                                    <option value="BINUANGAN">BINUANGAN</option>
                                    <option value="CITY OF CAGAYAN DE ORO (Capital)">CITY OF CAGAYAN DE ORO (Capital)</option>
                                    <option value="CITY OF EL SALVADOR">CITY OF EL SALVADOR</option>
                                    <option value="CITY OF GINGOOG">CITY OF GINGOOG</option>
                                    <option value="CLAVERIA">CLAVERIA</option>
                                    <option value="GITAGUM">GITAGUM</option>
                                    <option value="INITAO">INITAO</option>
                                    <option value="JASAAN">JASAAN</option>
                                    <option value="KINOGUITAN">KINOGUITAN</option>
                                    <option value="LAGONGLONG">LAGONGLONG</option>
                                    <option value="LAGUINDINGAN">LAGUINDINGAN</option>
                                    <option value="LIBERTAD">LIBERTAD</option>
                                    <option value="LUGAIT">LUGAIT</option>
                                    <option value="MAGSAYSAY (LINUGOS)">MAGSAYSAY (LINUGOS)</option>
                                    <option value="MANTICAO">MANTICAO</option>
                                    <option value="MEDINA">MEDINA</option>
                                    <option value="NAAWAN">NAAWAN</option>
                                    <option value="OPOL">OPOL</option>
                                    <option value="SALAY">SALAY</option>
                                    <option value="SUGBONGCOGON">SUGBONGCOGON</option>
                                    <option value="TAGOLOAN">TAGOLOAN</option>
                                    <option value="TALISAYAN">TALISAYAN</option>
                                    <option value="VILLANUEVA">VILLANUEVA</option>
                                  </select>
                                </div>
                              </div>
                            </div>
                            <div class="form-group zbot">
                              <label class="col-md-2 control-label" style="color: red;"><b>Barangay</b></label>
                              <div class="col-md-3">
                                <div class="input-group mb-md input-group-icon">
                                  <input type="text" name="barangay" id="barangay" class="form-control" placeholder="Barangay">
                                </div>
                              </div>

                              <label class="col-md-2 control-label"><b>Sitio/Purok/Block/Zone</b></label>
                              <div class="col-md-3">
                                <div class="input-group mb-md input-group-icon">
                                  <input type="text" name="sitio" id="sitio" class="form-control" placeholder="Sitio/Purok/Block/Zone">
                                </div>
                              </div>
                            </div>
                            <div class="form-group zbot">
                              <label class="col-md-2 control-label"><b>Phone or Mobile No.</b></label>
                              <div class="col-md-3">
                                <div class="input-group mb-md input-group-icon">
                                  <input type="text" name="phoneno" id="phoneno" class="form-control" placeholder="Phone or Mobile No.">
                                </div>
                              </div>
                            </div>

                            <hr/>

                            <div class="form-group zbot">
                              <label class="col-md-2 control-label" style="color:red;"><b>Sex </b></label>
                              <div class="col-md-3">
                                <div class="input-group mb-md input-group-icon">
                                  <select name="sex" id="sex" class="form-control">
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                  </select>
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="col-md-2 control-label" style="color: red;"><b>Date of Birth:</b></label>
                                <div class="col-md-3">
                                  <div id="bday-datepicker" class="input-group">
                                    <span class="input-group-addon">
                                      <i class="fa fa-calendar"></i>
                                    </span>
                                    <input type="text" data-plugin-datepicker class="form-control datepicker" name="dateofbirth" id="dateofbirth" placeholder="MM/DD/YY">
                                  </div>
                                </div>
                                <div class="col-md-2"></div>
                                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                  <span style="color: red;" title="Toggle the buttons">&nbsp;(*)</span> 
                                  <label class="btn btn-primary active" id="_nav_active_1">
                                    <input type="radio" name="birthdateestimation" value="Actual" id="option1" title="Actual"> Actual
                                  </label>
                                  <label class="btn btn-primary" id="_nav_active_2">
                                    <input type="radio" name="birthdateestimation" value="Estimate" id="option2" title="Estimate"> Estimate
                                  </label>
                                </div>
                              </div>
                            </div>
                            <div class="form-group zbot">
                              <label class="col-md-2 control-label"><b>Age</b></label>
                              <div class="col-md-2">
                                <div class="input-group mb-md input-group-icon">
                                  <input type="number" min="1" class="form-control" name="age" value="">
                                </div>
                              </div>
                              <label class="col-md-3 control-label" style="color:red;"><b>Birth Certificate:</b></label>
                              <div class="col-md-2">
                                <div class="input-group mb-md input-group-icon">
                                  <select name="birthcertificate" id="birthcertificate" class="form-control">
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                  </select>
                                </div>
                              </div>
                            </div>
                            <hr>
                            <div class="form-group zbot">
                              <label class="col-md-2 control-label"><b>Place of Birth:</b></label>
                              <div class="col-md-3">
                                <div class="checkbox-custom checkbox-default">
                                  <input type="checkbox" id="presentaddress" name="placeofbirth" value="Same as Present Address" class="todo-check">
                                  <label class="todo-label" for="todoListItem1"><span>Same as Present Address</span></label>
                                </div>

                              </div>
                            </div>
                            <div class="form-group zbot">
                              <label class="col-md-2 control-label" style="color: red;"><b>Region</b></label>
                              <div class="col-md-3">
                                <div class="input-group mb-md input-group-icon">
                                  <select name="region1" id="region1" class="form-control">
                                    <option value="Region">Region</option>
                                    <option value="UNKNOWN">UNKNOWN</option>
                                    <option value="CAR">CAR</option>
                                    <option value="N/A">N/A</option>
                                    <option value="NATIONAL CAPITAL REGION (NCR)">NATIONAL CAPITAL REGION (NCR)</option>
                                    <option value="CORDILLERA ADMINISTRATIVE REGION (CAR)">CORDILLERA ADMINISTRATIVE REGION (CAR)</option>
                                    <option value="REGION I (ILOCOS REGION)">REGION I (ILOCOS REGION)</option>
                                    <option value="REGION II (CAGAYAN VALLEY)">REGION II (CAGAYAN VALLEY)</option>
                                    <option value="REGION III (CENTRAL LUZON)">REGION III (CENTRAL LUZON)</option>
                                    <option value="REGION IV-A (CALABARZON)">REGION IV-A (CALABARZON)</option>
                                    <option value="MIMAROPA REGION">MIMAROPA REGION</option>
                                    <option value="REGION V (BICOL REGION)">REGION V (BICOL REGION)</option>
                                    <option value="REGION VI (WESTERN VISAYAS)">REGION VI (WESTERN VISAYAS)</option>
                                    <option value="REGION VII (CENTRAL VISAYAS)">REGION VII (CENTRAL VISAYAS)</option>
                                    <option value="REGION VIII (EASTERN VISAYAS)">REGION VIII (EASTERN VISAYAS)</option>
                                    <option value="REGION IX (ZAMBOANGA PENINSULA)">REGION IX (ZAMBOANGA PENINSULA)</option>
                                    <option value="REGION X (NORTHERN MINDANAO)">REGION X (NORTHERN MINDANAO)</option>
                                    <option value="REGION XI (DAVAO REGION)">REGION XI (DAVAO REGION)</option>
                                    <option value="REGION XII (SOCCSKSARGEN)">REGION XII (SOCCSKSARGEN)</option>
                                    <option value="REGION XIII (Caraga)">REGION XIII (Caraga)</option>
                                    <option value="AUTONOMOUS REGION IN MUSLIM MINDANAO (ARMM)">AUTONOMOUS REGION IN MUSLIM MINDANAO (ARMM)</option>
                                  </select>
                                </div>
                              </div>
                              <label class="col-md-2 control-label" style="color: red;"><b>Province</b></label>
                              <div class="col-md-3">
                                <div class="input-group mb-md input-group-icon">
                                  <select name="province1" id="province1" class="form-control">
                                    <option value="UNKNOWN">UNKNOWN</option>
                                    <option value="N/A">N/A</option>
                                    <option value="BUKIDNON">BUKIDNON</option>
                                    <option value="CAMIGUIN">CAMIGUIN</option>
                                    <option value="LANAO DEL NORTE">LANAO DEL NORTE</option>
                                    <option value="MISAMIS OCCIDENTAL">MISAMIS OCCIDENTAL</option>
                                    <option value="MISAMIS ORIENTAL">MISAMIS ORIENTAL</option>
                                  </select>
                                </div>
                              </div>
                            </div>
                            <div class="form-group zbot">
                              <label class="col-md-2 control-label"><b>District (Congressional)</b></label>
                              <div class="col-md-3">
                                <div class="input-group mb-md input-group-icon">
                                  <input type="text" name="district1" id="district1" class="form-control" placeholder="District">
                                </div>
                              </div>
                              <label class="col-md-2 control-label" style="color: red;"><b>Municipality/City</b></label>
                              <div class="col-md-3">
                                <div class="input-group mb-md input-group-icon">
                                  <select name="municipality1" id="municipality1" class="form-control">
                                    <option value="UNKNOWN">UNKNOWN</option>
                                    <option value="N/A">N/A</option>
                                    <option value="ALUBIJID">ALUBIJID</option>
                                    <option value="BALINGASAG">BALINGASAG</option>
                                    <option value="BALINGOAN">BALINGOAN</option>
                                    <option value="BINUANGAN">BINUANGAN</option>
                                    <option value="CITY OF CAGAYAN DE ORO (Capital)">CITY OF CAGAYAN DE ORO (Capital)</option>
                                    <option value="CITY OF EL SALVADOR">CITY OF EL SALVADOR</option>
                                    <option value="CITY OF GINGOOG">CITY OF GINGOOG</option>
                                    <option value="CLAVERIA">CLAVERIA</option>
                                    <option value="GITAGUM">GITAGUM</option>
                                    <option value="INITAO">INITAO</option>
                                    <option value="JASAAN">JASAAN</option>
                                    <option value="KINOGUITAN">KINOGUITAN</option>
                                    <option value="LAGONGLONG">LAGONGLONG</option>
                                    <option value="LAGUINDINGAN">LAGUINDINGAN</option>
                                    <option value="LIBERTAD">LIBERTAD</option>
                                    <option value="LUGAIT">LUGAIT</option>
                                    <option value="MAGSAYSAY (LINUGOS)">MAGSAYSAY (LINUGOS)</option>
                                    <option value="MANTICAO">MANTICAO</option>
                                    <option value="MEDINA">MEDINA</option>
                                    <option value="NAAWAN">NAAWAN</option>
                                    <option value="OPOL">OPOL</option>
                                    <option value="SALAY">SALAY</option>
                                    <option value="SUGBONGCOGON">SUGBONGCOGON</option>
                                    <option value="TAGOLOAN">TAGOLOAN</option>
                                    <option value="TALISAYAN">TALISAYAN</option>
                                    <option value="VILLANUEVA">VILLANUEVA</option>
                                  </select>
                                </div>
                              </div>
                            </div>
                            <div class="form-group zbot">
                              <label class="col-md-2 control-label" style="color: red;"><b>Barangay</b></label>
                              <div class="col-md-3">
                                <div class="input-group mb-md input-group-icon">
                                  <input type="text" name="barangay1" id="barangay1" class="form-control" placeholder="Barangay">
                                </div>
                              </div>

                              <label class="col-md-2 control-label"><b>Sitio/Purok/Block/Zone</b></label>
                              <div class="col-md-3">
                                <div class="input-group mb-md input-group-icon">
                                  <input type="text" name="sitio1" id="sitio1" class="form-control" placeholder="Sitio/Purok/Block/Zone">
                                </div>
                              </div>
                            </div>
                            <hr>
                            <div class="form-group zbot">
                              <label class="col-md-2 control-label" style="color:red;"><b>Religion:</b></label>
                              <div class="col-md-3">
                                <div class="input-group mb-md input-group-icon">
                                  <select name="religion" id="religion" class="form-control">
                                    <option value="Roman Catholic">Roman Catholic</option>
                                    <option value="Christian">Christian</option>
                                    <option value="Iglesia ni Cristo">Iglesia ni Cristo</option>
                                    <option value="Islam">Islam</option>
                                    <option value="No Religion">No Religion</option>
                                    <option value="Others">Others</option>
                                  </select>
                                </div>
                              </div>
                              <label class="col-md-4 control-label"><b>Do you consider your household as part of an indigenous people's group? </b></label>
                              <div class="col-md-2">
                                <div class="input-group mb-md input-group-icon">
                                  <select name="ipgroup" id="ipgroup" class="form-control">
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                  </select>
                                </div>
                              </div>
                            </div>
                            <div class="form-group" id="others-religion">
                              <label class="col-md-2 control-label"><b>specify:</b></label>
                              <div class="col-md-3">
                                <div class="input-group mb-md input-group-icon">
                                  <input type="text" id="others-religion-value" class="form-control">
                                </div>
                              </div>
                            </div>
                            <hr>
                            <div class="form-group zbot">
                              <label class="col-md-2 control-label" style="color:red;"><b>Living with?</b></label>
                              <div class="col-md-3">
                                <div class="input-group mb-md input-group-icon">
                                  <select name="livingwith" id="livingwith" class="form-control">
                                    <option value="UNKNOWN">UNKNOWN</option>
                                    <option value="N/A">N/A</option>
                                    <option value="Both Parents">Both Parents</option>
                                    <option value="Father Only">Father Only</option>
                                    <option value="Mother Only">Mother Only</option>
                                    <option value="Relatives">Relatives</option>
                                    <option value="Non-relatives">Non-relatives</option>
                                    <option value="Living Alone">Living Alone</option>
                                  </select>
                                </div>
                              </div>
                            </div>
                            <div id="relative-body">
                              <div class="form-group">
                                <label class="col-md-2 control-label" style="color: red;">(Relative or Non-relative) <b>Name:</b></label>
                                <div class="col-md-2">
                                  <div class="input-group mb-md input-group-icon">
                                    <input type="text" name="relativelastname" id="relativelastname" class="form-control" placeholder="Last Name">
                                  </div>
                                </div>
                                <div class="col-md-2">
                                  <div class="input-group mb-md input-group-icon">
                                    <input type="text" name="relativefirstname" id="relativefirstname" class="form-control" placeholder="First Name">
                                  </div>
                                </div>
                                <div class="col-md-2">
                                  <div class="input-group mb-md input-group-icon">
                                    <input type="text" name="relativemiddlename" id="relativemiddlename" class="form-control" placeholder="Middle Name">
                                  </div>
                                </div>
                                <div class="col-md-2">
                                  <div class="input-group mb-md input-group-icon">
                                    <input type="text" name="relativesuffix" id="relativesuffix" class="form-control" placeholder="Suffix (if applicable)">
                                  </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="col-md-2 control-label" style="color: red;">(Relative or Non-relative) <b>Relationship</b></label>
                                <div class="col-md-3">
                                  <div class="input-group mb-md input-group-icon">
                                    <input type="text" name="relativerelationship" id="relativerelationship" class="form-control">
                                  </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="col-md-2 control-label" style="color: red;">(Relative or Non-relative) <b>Reason</b></label>
                                <div class="col-md-3">
                                  <div class="input-group mb-md input-group-icon">
                                    <input type="text" name="livingwithreason" id="livingwithreason" class="form-control">
                                  </div>
                                </div>
                              </div>
                            </div>

                            <hr>
                            <div class="form-group zbot">
                              <label class="col-md-2 control-label"><b>Construction material of household dwelling unit: </b></label>
                              <div class="col-md-4">
                                <div class="input-group mb-md input-group-icon">
                                  <select name="household" id="household" class="form-control">
                                    <option value="1 - Strong materials">1 - Strong materials</option>
                                    <option value="2 - Light materials">2 - Light materials</option>
                                    <option value="3 - Salvaged/makeshift materials">3 - Salvaged/makeshift materials</option>
                                    <option value="4 - Mixed but predominantly strong materials">4 - Mixed but predominantly strong materials</option>
                                    <option value="5 - Mixed but predominantly light materials">5 - Mixed but predominantly light materials</option>
                                    <option value="6 - Mixed but predominantly savaged/makeshift materials">6 - Mixed but predominantly savaged/makeshift materials</option>
                                    <option value="7 - No permanent dwelling unit">7 - No permanent dwelling unit</option>
                                  </select>
                                </div>
                              </div>
                            </div>
                            <hr>
                            <h3>&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                              <b>A1. Profile of the Child: </b>Educational Background</h3>
                              <div class="form-group zbot">
                                <label class="col-md-2 control-label" style="color: red;"><b>Have you ever gone to school?</b></label>
                                <div class="col-md-3">
                                  <div class="input-group mb-md input-group-icon">
                                    <div class="input-group mb-md input-group-icon">
                                      <select name="gonetoschool" id="gonetoschool" class="form-control">
                                        <option value="Yes">Yes</option>
                                        <option value="Never">Never</option>
                                      </select>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="col-md-2 control-label"><b>Are you attending school at present?</b></label>
                                <div class="col-md-3">
                                  <div class="input-group mb-md input-group-icon">
                                    <div class="input-group mb-md input-group-icon">
                                      <select name="attendingschool" id="attendingschool" class="form-control">
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                      </select>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="form-group" id="reference-no-body">
                                <label class="col-md-2 control-label"><b>Learner Reference Number:</b></label>
                                <div class="col-md-3">
                                  <div class="input-group mb-md input-group-icon">
                                    <div class="input-group mb-md input-group-icon">
                                      <input type="text" name="learningreferenceno" id="learningreferenceno" class="form-control" placeholder="Reference Number">
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="form-group zbot">
                                <label class="col-md-2 control-label"><b>Highest grade completed</b></label>
                                <div class="col-md-3">
                                  <div class="input-group mb-md input-group-icon">
                                    <div class="input-group mb-md input-group-icon">
                                      <select name="highestgrade" id="highestgrade" class="form-control">
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
                                <label class="col-md-2 control-label"><b>Form of education</b></label>
                                <div class="col-md-3">
                                  <div class="input-group mb-md input-group-icon">
                                    <div class="input-group mb-md input-group-icon">
                                      <select name="formofeducation" id="formofeducation" class="form-control">
                                        <option value="UNKNOWN">UNKNOWN</option>
                                        <option value="N/A">N/A</option>
                                        <option value="1 – Formal">1 – Formal</option>
                                        <option value="2 – Non-Formal (Alternative Learning System)">2 – Non-Formal (Alternative Learning System)</option>
                                      </select>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="form-group" id="others-highest-grade">
                                <label class="col-md-2 control-label"><b>specify:</b></label>
                                <div class="col-md-3">
                                  <div class="input-group mb-md input-group-icon">
                                    <div class="input-group mb-md input-group-icon">
                                      <input type="text" name="others-highest-grade-value" id="others-highest-grade-value" class="form-control">
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="form-group zbot">
                                <label class="col-md-2 control-label"><b>If he/she quit schooling, age when he/she stopped schooling</b></label>
                                <div class="col-md-2">
                                  <div class="input-group mb-md input-group-icon">
                                    <div class="input-group mb-md input-group-icon">
                                      <input type="text" name="agestoppedschooling" id="agestoppedschooling" class="form-control" placeholder="">
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <hr>
                              <div class="form-group">
                                <label class="col-md-2 control-label" style="color: red;"><b>What were the reason(s) for never attending or dropping out of school?</b></label>
                              </div>
                              <div class="form-group">
                                <div class="col-md-2"></div>
                                <div class="col-md-2">
                                  <div class="input-group mb-md input-group-icon">
                                    <input type="checkbox" id="drop-1" value="1 – To engage in paid or self-employment to augment family income" name="drop-reason[]" class="todo-check">
                                    <label class="todo-label" for="todoListItem1">
                                      <span>1 – To engage in paid or self-employment to augment family income</span>
                                    </label>
                                  </div>
                                </div>
                                <div class="col-md-2">
                                  <div class="input-group mb-md input-group-icon">
                                    <input type="checkbox" id="drop-2" value="2 – To help in family operated farm or business" name="drop-reason[]" class="todo-check">
                                    <label class="todo-label" for="todoListItem1">
                                      <span>2 – To help in family operated farm or business</span>
                                    </label>
                                  </div>
                                </div>
                                <div class="col-md-2">
                                  <div class="input-group mb-md input-group-icon">
                                    <input type="checkbox" id="drop-3" value="3 – Attend to household chores like taking care of family members" name="drop-reason[]" class="todo-check">
                                    <label class="todo-label" for="todoListItem1">
                                      <span>3 – Attend to household chores like taking care of family members</span>
                                    </label>
                                  </div>
                                </div>
                                <div class="col-md-2">
                                  <div class="input-group mb-md input-group-icon">
                                    <input type="checkbox" id="drop-4" value="4 – Cannot afford to go to school" name="drop-reason[]" class="todo-check">
                                    <label class="todo-label" for="todoListItem1">
                                      <span>4 – Cannot afford to go to school</span>
                                    </label>
                                  </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="col-md-2 control-label"><b>&nbsp;</b></label>
                                <div class="col-md-2">
                                  <div class="input-group mb-md input-group-icon">
                                    <input type="checkbox" id="drop-5" value="5 – Not interested in school" name="drop-reason[]" class="todo-check">
                                    <label class="todo-label" for="todoListItem1">
                                      <span>5 – Not interested in school</span>
                                    </label>
                                  </div>
                                </div>
                                <div class="col-md-2">
                                  <div class="input-group mb-md input-group-icon">
                                    <input type="checkbox" id="drop-6" value="6 – School is too far" name="drop-reason[]" class="todo-check">
                                    <label class="todo-label" for="todoListItem1">
                                      <span>6 – School is too far</span>
                                    </label>
                                  </div>
                                </div>
                                <div class="col-md-2">
                                  <div class="input-group mb-md input-group-icon">
                                    <input type="checkbox" id="drop-7" value="7 – Illness/ disability" name="drop-reason[]" class="todo-check">
                                    <label class="todo-label" for="todoListItem1">
                                      <span>7 – Illness/ disability</span>
                                    </label>
                                  </div>
                                </div>
                                <div class="col-md-2">
                                  <div class="input-group mb-md input-group-icon">
                                    <input type="checkbox" id="todoListItem1" value="8 – Teachers are not supportive" name="drop-reason[]" class="todo-check">
                                    <label class="todo-label" for="todoListItem1">
                                      <span>8 – Teachers are not supportive</span>
                                    </label>
                                  </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="col-md-2 control-label" style="color: red;"><b>&nbsp;</b></label>
                                <div class="col-md-2">
                                  <div class="input-group mb-md input-group-icon">
                                    <input type="checkbox" id="todoListItem1" value="9 – Due to bullying" name="drop-reason[]" class="todo-check">
                                    <label class="todo-label" for="todoListItem1">
                                      <span>9 – Due to bullying</span>
                                    </label>
                                  </div>
                                </div>
                                <div class="col-md-2">
                                  <div class="input-group mb-md input-group-icon">
                                    <input type="checkbox" id="todoListItem1" value="10 – Due to early pregnancy" name="drop-reason[]" class="todo-check">
                                    <label class="todo-label" for="todoListItem1">
                                      <span>10 – Due to early pregnancy</span>
                                    </label>
                                  </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <div class="col-md-2"></div>
                                <div class="col-md-2">
                                  <div class="input-group mb-md input-group-icon">
                                    <input type="checkbox" id="others-drop-check" class="todo-check">
                                    <label class="todo-label" for="todoListItem1">
                                      <span>11 – Others</span>
                                    </label>
                                  </div>
                                </div>
                              </div>
                              <div class="form-group" id="others-dropout">
                                <label class="col-md-2 control-label"><b>specify:</b></label>
                                <div class="col-md-3">
                                  <div class="input-group mb-md input-group-icon">
                                    <input type="text" id="others-dropout-value" name="drop-reason[]" class="form-control">
                                  </div>
                                </div>
                              </div>
                              <hr>
                              <h3>&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                                <b>A2. Profile of the Child: </b>Health Information</h3>
                                <div class="form-group">
                                  <label class="col-md-2 control-label" style="color: red;"><b>Does the child have any disability?</b></label>
                                  <div class="col-md-2">
                                    <div class="input-group mb-md input-group-icon">
                                      <div class="input-group mb-md input-group-icon">
                                        <select name="havedisability" id="havedisability" class="form-control">
                                          <option value="Yes">Yes</option>
                                          <option value="No">No</option>
                                        </select>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div id="disability-checkbox">
                                  <div class="form-group">
                                    <label class="col-md-2 control-label" style="color: red;"><b>If yes, specify:</b></label>
                                  </div>
                                  <div class="form-group">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-2">
                                      <div class="input-group mb-md input-group-icon">
                                        <input type="checkbox" id="disability-1" name="disability[]" value="1 - Hearing Impairment" class="todo-check">
                                        <label class="todo-label" for="todoListItem1">
                                          <span>1 - Hearing Impairment</span>
                                        </label>
                                      </div>
                                    </div>
                                    <div class="col-md-2">
                                      <div class="input-group mb-md input-group-icon">
                                        <input type="checkbox" id="disability-2" name="disability[]" value="2 - Visual/ Seeing Disability" class="todo-check">
                                        <label class="todo-label" for="todoListItem1">
                                          <span>2 - Visual/ Seeing Disability</span>
                                        </label>
                                      </div>
                                    </div>
                                    <div class="col-md-2">
                                      <div class="input-group mb-md input-group-icon">
                                        <input type="checkbox" id="disability-3" name="disability[]" value="3 - Communication Deficits" class="todo-check">
                                        <label class="todo-label" for="todoListItem1">
                                          <span>3 - Communication Deficits</span>
                                        </label>
                                      </div>
                                    </div>
                                    <div class="col-md-2">
                                      <div class="input-group mb-md input-group-icon">
                                        <input type="checkbox" id="disability-4" name="disability[]" value="4 - Mental Disability" class="todo-check">
                                        <label class="todo-label" for="todoListItem1">
                                          <span>4 - Mental Disability</span>
                                        </label>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="col-md-2 control-label"><b>&nbsp;</b></label>
                                    <div class="col-md-2">
                                      <div class="input-group mb-md input-group-icon">
                                        <input type="checkbox" id="disability-5" name="disability[]" value="5 - Multiple Disabilities" class="todo-check">
                                        <label class="todo-label" for="todoListItem1">
                                          <span>5 - Multiple Disabilities</span>
                                        </label>
                                      </div>
                                    </div>
                                    <div class="col-md-2">
                                      <div class="input-group mb-md input-group-icon">
                                        <input type="checkbox" id="disability-6" name="disability[]" value="6 - Orthopedic/Moving Disability" class="todo-check">
                                        <label class="todo-label" for="todoListItem1">
                                          <span>6 - Orthopedic/Moving Disability</span>
                                        </label>
                                      </div>
                                    </div>
                                    <div class="col-md-2">
                                      <div class="input-group mb-md input-group-icon">
                                        <input type="checkbox" id="disability-7" name="disability[]" value="7 - Learning (Cognitive or Intellectual) Disability" class="todo-check">
                                        <label class="todo-label" for="todoListItem1">
                                          <span>7 - Learning (Cognitive or Intellectual) Disability</span>
                                        </label>
                                      </div>
                                    </div>
                                    <div class="col-md-2">
                                      <div class="input-group mb-md input-group-icon">
                                        <input type="checkbox" id="disability-8" name="disability[]" value="8 - Psychosocial and Behavioral Disabilities" class="todo-check">
                                        <label class="todo-label" for="todoListItem1">
                                          <span>8 - Psychosocial and Behavioral Disabilities</span>
                                        </label>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="col-md-2 control-label" style="color: red;"><b>&nbsp;</b></label>
                                    <div class="col-md-2">
                                      <div class="input-group mb-md input-group-icon">
                                        <input type="checkbox" id="disability-9" name="disability[]" value="9 - Chronic Illness with Disabilities" class="todo-check">
                                        <label class="todo-label" for="todoListItem1">
                                          <span>9 - Chronic Illness with Disabilities</span>
                                        </label>
                                      </div>
                                    </div>
                                    <div class="col-md-2">
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-2">
                                      <div class="input-group mb-md input-group-icon">
                                        <input type="checkbox" id="disability-check" class="todo-check">
                                        <label class="todo-label" for="todoListItem1">
                                          <span>10 - Others</span>
                                        </label>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="form-group" id="others-disability">
                                    <label class="col-md-2 control-label"><b>specify:</b></label>
                                    <div class="col-md-3">
                                      <div class="input-group mb-md input-group-icon">
                                        <input type="text" id="others-disability-value" name="disability[]" class="form-control">
                                      </div>
                                    </div>
                                  </div>
                                </div>

                                <hr>
                                <div class="form-group">
                                  <label class="col-md-2 control-label" style="color: red;"><b>For further assessment of disability?</b></label>
                                  <div class="col-md-2">
                                    <div class="input-group mb-md input-group-icon">
                                      <div class="input-group mb-md input-group-icon">
                                        <select name="assessmentofdisability" id="assessmentofdisability" class="form-control">
                                          <option value="Yes">Yes</option>
                                          <option value="No">No</option>
                                        </select>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <hr>
                                <h4>&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                                  <b>General health status:</b></h4>
                                  <div class="form-group zbot">
                                    <label class="col-md-2 control-label"><b>Height (in centimeters)</b></label>
                                    <div class="col-md-2">
                                      <div class="input-group mb-md input-group-icon">
                                        <div class="input-group mb-md input-group-icon">
                                          <input type="text" name="height" id="height" class="form-control" placeholder="Height">
                                        </div>
                                      </div>
                                    </div>
                                    <label class="col-md-2 control-label"><b>Weight (in kilograms)</b></label>
                                    <div class="col-md-2">
                                      <div class="input-group mb-md input-group-icon">
                                        <div class="input-group mb-md input-group-icon">
                                          <input type="text" name="weight" id="weight" class="form-control" placeholder="Weight">
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="col-md-2 control-label"><b>Has the child suffered from any of the ailments in the last six months?</b></label>
                                  </div>
                                  <div class="form-group">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-2">
                                      <div class="input-group mb-md input-group-icon">
                                        <input type="checkbox" id="ailment-1" name="ailments[]" value="1 – Measles" class="todo-check">
                                        <label class="todo-label" for="todoListItem1">
                                          <span>1 – Measles</span>
                                        </label>
                                      </div>
                                    </div>
                                    <div class="col-md-2">
                                      <div class="input-group mb-md input-group-icon">
                                        <input type="checkbox" id="ailment-2" name="ailments[]" value="2 – Chickenpox" class="todo-check">
                                        <label class="todo-label" for="todoListItem1">
                                          <span>2 – Chickenpox</span>
                                        </label>
                                      </div>
                                    </div>
                                    <div class="col-md-2">
                                      <div class="input-group mb-md input-group-icon">
                                        <input type="checkbox" id="ailment-3" name="ailments[]" value="3 – Dengue" class="todo-check">
                                        <label class="todo-label" for="todoListItem1">
                                          <span>3 – Dengue</span>
                                        </label>
                                      </div>
                                    </div>
                                    <div class="col-md-2">
                                      <div class="input-group mb-md input-group-icon">
                                        <input type="checkbox" id="ailment-4" name="ailments[]" value="4 – Influenza (flu)" class="todo-check">
                                        <label class="todo-label" for="todoListItem1">
                                          <span>4 – Influenza (flu)</span>
                                        </label>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="col-md-2 control-label"><b>&nbsp;</b></label>
                                    <div class="col-md-2">
                                      <div class="input-group mb-md input-group-icon">
                                        <input type="checkbox" id="ailment-5" name="ailments[]" value="5 – Malaria" class="todo-check">
                                        <label class="todo-label" for="todoListItem1">
                                          <span>5 – Malaria</span>
                                        </label>
                                      </div>
                                    </div>
                                    <div class="col-md-2">
                                      <div class="input-group mb-md input-group-icon">
                                        <input type="checkbox" id="ailment-6" name="ailments[]" value="6 – Typhoid" class="todo-check">
                                        <label class="todo-label" for="todoListItem1">
                                          <span>6 – Typhoid</span>
                                        </label>
                                      </div>
                                    </div>
                                    <div class="col-md-2">
                                      <div class="input-group mb-md input-group-icon">
                                        <input type="checkbox" id="ailment-7" name="ailments[]" value="7 – Diarrhea" class="todo-check">
                                        <label class="todo-label" for="todoListItem1">
                                          <span>7 – Diarrhea</span>
                                        </label>
                                      </div>
                                    </div>
                                    <div class="col-md-2">
                                      <div class="input-group mb-md input-group-icon">
                                        <input type="checkbox" id="ailment-8" name="ailments[]" value="8 – Recurring Fever" class="todo-check">
                                        <label class="todo-label" for="todoListItem1">
                                          <span>8 – Recurring Fever</span>
                                        </label>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="col-md-2 control-label" style="color: red;"><b>&nbsp;</b></label>
                                    <div class="col-md-2">
                                      <div class="input-group mb-md input-group-icon">
                                        <input type="checkbox" id="ailment-9" name="ailments[]" value="9 – Tuberculosis / Primary Complex" class="todo-check">
                                        <label class="todo-label" for="todoListItem1">
                                          <span>9 – Tuberculosis / Primary Complex</span>
                                        </label>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-2">
                                      <div class="input-group mb-md input-group-icon">
                                        <input type="checkbox" id="skin-disease-check" value="10 – Skin Disease" class="todo-check">
                                        <label class="todo-label" for="todoListItem1">
                                          <span>10 – Skin Disease</span>
                                        </label>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="form-group" id="skin-disease-body">
                                    <label class="col-md-2 control-label">(Skin Disease) <b>specify:</b></label>
                                    <div class="col-md-3">
                                      <div class="input-group mb-md input-group-icon">
                                        <input type="text" id="skin-disease-value" name="ailments[]" class="form-control">
                                      </div>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-2">
                                      <div class="input-group mb-md input-group-icon">
                                        <input type="checkbox" id="allergy-check" class="todo-check">
                                        <label class="todo-label" for="todoListItem1">
                                          <span>11 – Allergies</span>
                                        </label>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="form-group" id="allergies-body">
                                    <label class="col-md-2 control-label">(Allergies) <b>specify:</b></label>
                                    <div class="col-md-3">
                                      <div class="input-group mb-md input-group-icon">
                                        <input type="text" id="allergies-value" name="ailments[]" class="form-control">
                                      </div>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-2">
                                      <div class="input-group mb-md input-group-icon">
                                        <input type="checkbox" id="ailment-check" class="todo-check">
                                        <label class="todo-label" for="todoListItem1">
                                          <span>12 – Others</span>
                                        </label>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="form-group" id="others-ailments">
                                    <label class="col-md-2 control-label"><b>specify:</b></label>
                                    <div class="col-md-3">
                                      <div class="input-group mb-md input-group-icon">
                                        <input type="text" id="others-ailments-value" name="ailments[]" class="form-control">
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-md-2 control-label" style="color: red;"><b>&nbsp;</b></label>
                                  <div class="col-md-2">
                                    <div class="input-group mb-md input-group-icon">
                                      <input type="checkbox" id="none-check" name="ailments[]" value="13 – None" class="todo-check">
                                      <label class="todo-label" for="todoListItem1">
                                        <span>13 – None</span>
                                      </label>
                                    </div>
                                  </div>
                                </div>
                                <hr>
                                <div class="form-group">
                                  <label class="col-md-2 control-label"><b>For further assessment of medical condition</b></label>
                                  <div class="col-md-2">
                                    <div class="input-group mb-md input-group-icon">
                                      <div class="input-group mb-md input-group-icon">
                                        <select name="assessmentofmedical" id="assessmentofmedical" class="form-control">
                                          <option value="Yes">Yes</option>
                                          <option value="No">No</option>
                                        </select>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <hr>
                                <div class="form-group">
                                  <label class="col-md-2 control-label"><b>Does the member of the family have any history on the following ailments?</b></label>
                                </div>
                                <div class="form-group">
                                  <div class="col-md-2"></div>
                                  <div class="col-md-2">
                                    <div class="input-group mb-md input-group-icon">
                                      <input type="checkbox" id="family-ailment-1" name="family-ailments[]" value="1 – Hypertension" class="todo-check">
                                      <label class="todo-label" for="todoListItem1">
                                        <span>1 – Hypertension</span>
                                      </label>
                                    </div>
                                  </div>
                                  <div class="col-md-2">
                                    <div class="input-group mb-md input-group-icon">
                                      <input type="checkbox" id="family-ailment-2" name="family-ailments[]" value="2 – Diabetes" class="todo-check">
                                      <label class="todo-label" for="todoListItem1">
                                        <span>2 – Diabetes</span>
                                      </label>
                                    </div>
                                  </div>
                                  <div class="col-md-2">
                                    <div class="input-group mb-md input-group-icon">
                                      <input type="checkbox" id="family-ailment-3" name="family-ailments[]" value="3 – Asthma" class="todo-check">
                                      <label class="todo-label" for="todoListItem1">
                                        <span>3 – Asthma</span>
                                      </label>
                                    </div>
                                  </div>
                                  <div class="col-md-2">
                                    <div class="input-group mb-md input-group-icon">
                                      <input type="checkbox" id="family-ailment-4" name="family-ailments[]" value="4 – Kidney Ailment" class="todo-check">
                                      <label class="todo-label" for="todoListItem1">
                                        <span>4 – Kidney Ailment</span>
                                      </label>
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-md-2 control-label"><b>&nbsp;</b></label>
                                  <div class="col-md-2">
                                    <div class="input-group mb-md input-group-icon">
                                      <input type="checkbox" id="family-ailment-5" name="family-ailments[]" value="5 – Liver Ailment" class="todo-check">
                                      <label class="todo-label" for="todoListItem1">
                                        <span>5 – Liver Ailment</span>
                                      </label>
                                    </div>
                                  </div>
                                  <div class="col-md-2">
                                    <div class="input-group mb-md input-group-icon">
                                      <input type="checkbox" id="family-ailment-6" name="family-ailments[]" value="6 – Heart Ailment" class="todo-check">
                                      <label class="todo-label" for="todoListItem1">
                                        <span>6 – Heart Ailment</span>
                                      </label>
                                    </div>
                                  </div>
                                  <div class="col-md-2">
                                    <div class="input-group mb-md input-group-icon">
                                      <input type="checkbox" id="family-ailment-7" name="family-ailments[]" value="7 – Cancer" class="todo-check">
                                      <label class="todo-label" for="todoListItem1">
                                        <span>7 – Cancer</span>
                                      </label>
                                    </div>
                                  </div>
                                  <div class="col-md-2">
                                    <div class="input-group mb-md input-group-icon">
                                      <input type="checkbox" id="family-ailment-8" name="family-ailments[]" value="8 – Paralysis" class="todo-check">
                                      <label class="todo-label" for="todoListItem1">
                                        <span>8 – Paralysis</span>
                                      </label>
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-md-2 control-label" style="color: red;"><b>&nbsp;</b></label>
                                  <div class="col-md-2">
                                    <div class="input-group mb-md input-group-icon">
                                      <input type="checkbox" id="family-ailment-9" name="family-ailments[]" value="9 – Respiratory Illness" class="todo-check">
                                      <label class="todo-label" for="todoListItem1">
                                        <span>9 – Respiratory Illness</span>
                                      </label>
                                    </div>
                                  </div>
                                  <div class="col-md-2">
                                    <div class="input-group mb-md input-group-icon">
                                      <input type="checkbox" id="none-check-history" name="family-ailments[]" value="10 – None" class="todo-check">
                                      <label class="todo-label" for="todoListItem1">
                                        <span>10 – None</span>
                                      </label>
                                    </div>
                                  </div>
                                  <div class="col-md-2">
                                  </div>
                                </div>
                                <div class="form-group">
                                  <div class="col-md-2"></div>
                                  <div class="col-md-2">
                                    <div class="input-group mb-md input-group-icon">
                                      <input type="checkbox" id="family-ailments-check" class="todo-check">
                                      <label class="todo-label" for="todoListItem1">
                                        <span>11 – Others</span>
                                      </label>
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group" id="others-family-ailments">
                                  <label class="col-md-2 control-label"><b>specify:</b></label>
                                  <div class="col-md-3">
                                    <div class="input-group mb-md input-group-icon">
                                      <input type="text" id="others-family-ailments-value" name="family-ailments[]" class="form-control">
                                    </div>
                                  </div>
                                </div>
                                <hr>
                                <h3>&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                                  <b>A3. Profile of the Child: </b>Nature and Location of Work</h3>
                                  <div class="form-group">
                                    <label class="col-md-2 control-label"><b>What specific task does the child currently perform?</b></label>
                                  </div>
                                  <div class="table-responsive">
                                    <table class="table table-bordered" id="dynamic_field">
                                      <tr>
                                        <thead>
                                          <tr>
                                            <th>Nature or work</th>
                                            <th>Specific Task(s)</th>
                                            <th>Specify month(s) of the year when the task(s) is(are) done</th>
                                            <th>Location or specific work address</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <td>
                                              <div class="input-group mb-md input-group-icon">
                                                <input type="checkbox" id="work-1" name="task[]" value="1 – Mining" class="todo-check">
                                                <label class="todo-label" for="todoListItem1">
                                                  <span>1 – Mining</span>
                                                </label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="input-group mb-md input-group-icon">
                                                <input type="text" name="task-description[]" id="mining" class="form-control" placeholder="Task">
                                              </div>
                                            </td>
                                            <td>
                                              <div class="input-group mb-md input-group-icon">
                                                <input type="text" name="task-month[]" id="mining" class="form-control" placeholder="Month">
                                              </div>
                                            </td>
                                            <td>
                                              <div class="input-group mb-md input-group-icon">
                                                <select name="task-location[]" id="task-1" class="form-control">
                                                  <option value="1 – Own house">1 – Own house</option>
                                                  <option value="2 – Employer's house">2 – Employer's house</option>
                                                  <option value="3 – Office">3 – Office</option>
                                                  <option value="4 – Factory">4 – Factory</option>
                                                  <option value="5 – Farm">5 – Farm</option>
                                                  <option value="6 – Street">6 – Street</option>
                                                  <option value="7 – Market place">7 – Market place</option>
                                                  <option value="8 – Mining Site">8 – Mining Site</option>
                                                  <option value="9 – Construction Sites">9 – Construction Sites</option>
                                                  <option value="10 – Quarry Sites">10 – Quarry Sites</option>
                                                  <option value="11 – Open Sea">11 – Open Sea</option>
                                                  <option value="12 – River/lake">12 – River/lake</option>
                                                  <option value="13 – Others">13 – Others</option>
                                                </select>
                                              </div>
                                              <div class="input-group mb-md input-group-icon" id="others-mining">
                                                <input type="text" id="mining" class="form-control" placeholder="specify">
                                              </div>
                                            </td>
                                          </tr>
                                          <tr>
                                            <td>
                                              <div class="input-group mb-md input-group-icon">
                                                <input type="checkbox" id="work-2" name="task[]" value="2 – Quarrying" class="todo-check">
                                                <label class="todo-label" for="todoListItem1">
                                                  <span>2 – Quarrying</span>
                                                </label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="input-group mb-md input-group-icon">
                                                <input type="text" name="task-description[]" id="quarrying" class="form-control" placeholder="Task">
                                              </div>
                                            </td>
                                            <td>
                                              <div class="input-group mb-md input-group-icon">
                                                <input type="text" name="task-month[]" id="quarrying" class="form-control" placeholder="Month">
                                              </div>
                                            </td>
                                            <td>
                                              <div class="input-group mb-md input-group-icon">
                                                <select name="task-location[]" id="task-2" class="form-control">
                                                  <option value="1 – Own house">1 – Own house</option>
                                                  <option value="2 – Employer's house">2 – Employer's house</option>
                                                  <option value="3 – Office">3 – Office</option>
                                                  <option value="4 – Factory">4 – Factory</option>
                                                  <option value="5 – Farm">5 – Farm</option>
                                                  <option value="6 – Street">6 – Street</option>
                                                  <option value="7 – Market place">7 – Market place</option>
                                                  <option value="8 – Mining Site">8 – Mining Site</option>
                                                  <option value="9 – Construction Sites">9 – Construction Sites</option>
                                                  <option value="10 – Quarry Sites">10 – Quarry Sites</option>
                                                  <option value="11 – Open Sea">11 – Open Sea</option>
                                                  <option value="12 – River/lake">12 – River/lake</option>
                                                  <option value="13 – Others">13 – Others</option>
                                                </select>
                                              </div>
                                              <div class="input-group mb-md input-group-icon" id="others-quarrying">
                                                <input type="text" id="quarrying" class="form-control" placeholder="specify">
                                              </div>
                                            </td>
                                          </tr>
                                          <tr>
                                            <td>
                                              <div class="input-group mb-md input-group-icon">
                                                <input type="checkbox" id="work-3" name="task[]" value="3 – Construction" class="todo-check">
                                                <label class="todo-label" for="todoListItem1">
                                                  <span>3 – Construction</span>
                                                </label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="input-group mb-md input-group-icon">
                                                <input type="text" name="task-description[]" id="construction" class="form-control" placeholder="Task">
                                              </div>
                                            </td>
                                            <td>
                                              <div class="input-group mb-md input-group-icon">
                                                <input type="text" name="task-month[]" id="construction" class="form-control" placeholder="Month">
                                              </div>
                                            </td>
                                            <td>
                                              <div class="input-group mb-md input-group-icon">
                                                <select name="task-location[]" id="task-3" class="form-control">
                                                  <option value="1 – Own house">1 – Own house</option>
                                                  <option value="2 – Employer's house">2 – Employer's house</option>
                                                  <option value="3 – Office">3 – Office</option>
                                                  <option value="4 – Factory">4 – Factory</option>
                                                  <option value="5 – Farm">5 – Farm</option>
                                                  <option value="6 – Street">6 – Street</option>
                                                  <option value="7 – Market place">7 – Market place</option>
                                                  <option value="8 – Mining Site">8 – Mining Site</option>
                                                  <option value="9 – Construction Sites">9 – Construction Sites</option>
                                                  <option value="10 – Quarry Sites">10 – Quarry Sites</option>
                                                  <option value="11 – Open Sea">11 – Open Sea</option>
                                                  <option value="12 – River/lake">12 – River/lake</option>
                                                  <option value="13 – Others">13 – Others</option>
                                                </select>
                                              </div>
                                              <div class="input-group mb-md input-group-icon" id="others-construction">
                                                <input type="text" id="construction" class="form-control" placeholder="specify">
                                              </div>
                                            </td>
                                          </tr>
                                          <tr>
                                            <td>
                                              <div class="input-group mb-md input-group-icon">
                                                <input type="checkbox" id="work-4" name="task[]" value="4 – Transportation and Storage" class="todo-check">
                                                <label class="todo-label" for="todoListItem1">
                                                  <span>4 – Transportation and Storage</span>
                                                </label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="input-group mb-md input-group-icon">
                                                <input type="text" name="task-description[]" id="transportation" class="form-control" placeholder="Task">
                                              </div>
                                            </td>
                                            <td>
                                              <div class="input-group mb-md input-group-icon">
                                                <input type="text" name="task-month[]" id="transportation" class="form-control" placeholder="Month">
                                              </div>
                                            </td>
                                            <td>
                                              <div class="input-group mb-md input-group-icon">
                                                <select name="task-location[]" id="task-4" class="form-control">
                                                  <option value="1 – Own house">1 – Own house</option>
                                                  <option value="2 – Employer's house">2 – Employer's house</option>
                                                  <option value="3 – Office">3 – Office</option>
                                                  <option value="4 – Factory">4 – Factory</option>
                                                  <option value="5 – Farm">5 – Farm</option>
                                                  <option value="6 – Street">6 – Street</option>
                                                  <option value="7 – Market place">7 – Market place</option>
                                                  <option value="8 – Mining Site">8 – Mining Site</option>
                                                  <option value="9 – Construction Sites">9 – Construction Sites</option>
                                                  <option value="10 – Quarry Sites">10 – Quarry Sites</option>
                                                  <option value="11 – Open Sea">11 – Open Sea</option>
                                                  <option value="12 – River/lake">12 – River/lake</option>
                                                  <option value="13 – Others">13 – Others</option>
                                                </select>
                                              </div>
                                              <div class="input-group mb-md input-group-icon" id="others-transportation">
                                                <input type="text" id="transportation" class="form-control" placeholder="specify">
                                              </div>
                                            </td>
                                          </tr>
                                          <tr>
                                            <td>
                                              <div class="input-group mb-md input-group-icon">
                                                <input type="checkbox" id="work-5" name="task[]" value="5 – Waste Management" class="todo-check">
                                                <label class="todo-label" for="todoListItem1">
                                                  <span>5 – Waste Management</span>
                                                </label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="input-group mb-md input-group-icon">
                                                <input type="text" name="task-description[]" id="waste" class="form-control" placeholder="Task">
                                              </div>
                                            </td>
                                            <td>
                                              <div class="input-group mb-md input-group-icon">
                                                <input type="text" name="task-month[]" id="waste" class="form-control" placeholder="Month">
                                              </div>
                                            </td>
                                            <td>
                                              <div class="input-group mb-md input-group-icon">
                                                <select name="task-location[]" id="task-5" class="form-control">
                                                  <option value="1 – Own house">1 – Own house</option>
                                                  <option value="2 – Employer's house">2 – Employer's house</option>
                                                  <option value="3 – Office">3 – Office</option>
                                                  <option value="4 – Factory">4 – Factory</option>
                                                  <option value="5 – Farm">5 – Farm</option>
                                                  <option value="6 – Street">6 – Street</option>
                                                  <option value="7 – Market place">7 – Market place</option>
                                                  <option value="8 – Mining Site">8 – Mining Site</option>
                                                  <option value="9 – Construction Sites">9 – Construction Sites</option>
                                                  <option value="10 – Quarry Sites">10 – Quarry Sites</option>
                                                  <option value="11 – Open Sea">11 – Open Sea</option>
                                                  <option value="12 – River/lake">12 – River/lake</option>
                                                  <option value="13 – Others">13 – Others</option>
                                                </select>
                                              </div>
                                              <div class="input-group mb-md input-group-icon" id="others-waste">
                                                <input type="text" id="waste" class="form-control" placeholder="specify">
                                              </div>
                                            </td>
                                          </tr>
                                          <tr>
                                            <td>
                                              <div class="input-group mb-md input-group-icon">
                                                <input type="checkbox" id="work-6" name="task[]" value="6 – Forestry and Logging" class="todo-check">
                                                <label class="todo-label" for="todoListItem1">
                                                  <span>6 – Forestry and Logging</span>
                                                </label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="input-group mb-md input-group-icon">
                                                <input type="text" name="task-description[]" id="forestry" class="form-control" placeholder="Task">
                                              </div>
                                            </td>
                                            <td>
                                              <div class="input-group mb-md input-group-icon">
                                                <input type="text" name="task-month[]" id="forestry" class="form-control" placeholder="Month">
                                              </div>
                                            </td>
                                            <td>
                                              <div class="input-group mb-md input-group-icon">
                                                <select name="task-location[]" id="task-6" class="form-control">
                                                  <option value="1 – Own house">1 – Own house</option>
                                                  <option value="2 – Employer's house">2 – Employer's house</option>
                                                  <option value="3 – Office">3 – Office</option>
                                                  <option value="4 – Factory">4 – Factory</option>
                                                  <option value="5 – Farm">5 – Farm</option>
                                                  <option value="6 – Street">6 – Street</option>
                                                  <option value="7 – Market place">7 – Market place</option>
                                                  <option value="8 – Mining Site">8 – Mining Site</option>
                                                  <option value="9 – Construction Sites">9 – Construction Sites</option>
                                                  <option value="10 – Quarry Sites">10 – Quarry Sites</option>
                                                  <option value="11 – Open Sea">11 – Open Sea</option>
                                                  <option value="12 – River/lake">12 – River/lake</option>
                                                  <option value="13 – Others">13 – Others</option>
                                                </select>
                                              </div>
                                              <div class="input-group mb-md input-group-icon" id="others-forestry">
                                                <input type="text" id="forestry" class="form-control" placeholder="specify">
                                              </div>
                                            </td>
                                          </tr>
                                          <tr>
                                            <td>
                                              <div class="input-group mb-md input-group-icon">
                                                <input type="checkbox" id="work-7" name="task[]" value="7 – Fishing" class="todo-check">
                                                <label class="todo-label" for="todoListItem1">
                                                  <span>7 – Fishing</span>
                                                </label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="input-group mb-md input-group-icon">
                                                <input type="text" name="task-description[]" id="fishing" class="form-control" placeholder="Task">
                                              </div>
                                            </td>
                                            <td>
                                              <div class="input-group mb-md input-group-icon">
                                                <input type="text" name="task-month[]" id="fishing" class="form-control" placeholder="Month">
                                              </div>
                                            </td>
                                            <td>
                                              <div class="input-group mb-md input-group-icon">
                                                <select name="task-location[]" id="task-7" class="form-control">
                                                  <option value="1 – Own house">1 – Own house</option>
                                                  <option value="2 – Employer's house">2 – Employer's house</option>
                                                  <option value="3 – Office">3 – Office</option>
                                                  <option value="4 – Factory">4 – Factory</option>
                                                  <option value="5 – Farm">5 – Farm</option>
                                                  <option value="6 – Street">6 – Street</option>
                                                  <option value="7 – Market place">7 – Market place</option>
                                                  <option value="8 – Mining Site">8 – Mining Site</option>
                                                  <option value="9 – Construction Sites">9 – Construction Sites</option>
                                                  <option value="10 – Quarry Sites">10 – Quarry Sites</option>
                                                  <option value="11 – Open Sea">11 – Open Sea</option>
                                                  <option value="12 – River/lake">12 – River/lake</option>
                                                  <option value="13 – Others">13 – Others</option>
                                                </select>
                                              </div>
                                              <div class="input-group mb-md input-group-icon" id="others-fishing">
                                                <input type="text" id="fishing" class="form-control" placeholder="specify">
                                              </div>
                                            </td>
                                          </tr>
                                          <tr>
                                            <td>
                                              <div class="input-group mb-md input-group-icon">
                                                <input type="checkbox" id="work-8" name="task[]" value="8 – Farming" class="todo-check">
                                                <label class="todo-label" for="todoListItem1">
                                                  <span>8 – Farming</span>
                                                </label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="input-group mb-md input-group-icon">
                                                <input type="text" name="task-description[]" id="farming" class="form-control" placeholder="Task">
                                              </div>
                                            </td>
                                            <td>
                                              <div class="input-group mb-md input-group-icon">
                                                <input type="text" name="task-month[]" id="farming" class="form-control" placeholder="Month">
                                              </div>
                                            </td>
                                            <td>
                                              <div class="input-group mb-md input-group-icon">
                                                <select name="task-location[]" id="task-8" class="form-control">
                                                  <option value="1 – Own house">1 – Own house</option>
                                                  <option value="2 – Employer's house">2 – Employer's house</option>
                                                  <option value="3 – Office">3 – Office</option>
                                                  <option value="4 – Factory">4 – Factory</option>
                                                  <option value="5 – Farm">5 – Farm</option>
                                                  <option value="6 – Street">6 – Street</option>
                                                  <option value="7 – Market place">7 – Market place</option>
                                                  <option value="8 – Mining Site">8 – Mining Site</option>
                                                  <option value="9 – Construction Sites">9 – Construction Sites</option>
                                                  <option value="10 – Quarry Sites">10 – Quarry Sites</option>
                                                  <option value="11 – Open Sea">11 – Open Sea</option>
                                                  <option value="12 – River/lake">12 – River/lake</option>
                                                  <option value="13 – Others">13 – Others</option>
                                                </select>
                                              </div>
                                              <div class="input-group mb-md input-group-icon" id="others-farming">
                                                <input type="text" id="farming" class="form-control" placeholder="specify">
                                              </div>
                                            </td>
                                          </tr>
                                          <tr>
                                            <td>
                                              <div class="input-group mb-md input-group-icon">
                                                <input type="checkbox" id="work-9" name="task[]" value="9 – Domestic Work" class="todo-check">
                                                <label class="todo-label" for="todoListItem1">
                                                  <span>9 – Domestic Work</span>
                                                </label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="input-group mb-md input-group-icon">
                                                <input type="text" name="task-description[]" id="domestic" class="form-control" placeholder="Task">
                                              </div>
                                            </td>
                                            <td>
                                              <div class="input-group mb-md input-group-icon">
                                                <input type="text" name="task-month[]" id="domestic" class="form-control" placeholder="Month">
                                              </div>
                                            </td>
                                            <td>
                                              <div class="input-group mb-md input-group-icon">
                                                <select name="task-location[]" id="task-9" class="form-control">
                                                  <option value="1 – Own house">1 – Own house</option>
                                                  <option value="2 – Employer's house">2 – Employer's house</option>
                                                  <option value="3 – Office">3 – Office</option>
                                                  <option value="4 – Factory">4 – Factory</option>
                                                  <option value="5 – Farm">5 – Farm</option>
                                                  <option value="6 – Street">6 – Street</option>
                                                  <option value="7 – Market place">7 – Market place</option>
                                                  <option value="8 – Mining Site">8 – Mining Site</option>
                                                  <option value="9 – Construction Sites">9 – Construction Sites</option>
                                                  <option value="10 – Quarry Sites">10 – Quarry Sites</option>
                                                  <option value="11 – Open Sea">11 – Open Sea</option>
                                                  <option value="12 – River/lake">12 – River/lake</option>
                                                  <option value="13 – Others">13 – Others</option>
                                                </select>
                                              </div>
                                              <div class="input-group mb-md input-group-icon" id="others-domestic">
                                                <input type="text" id="domestic" class="form-control" placeholder="specify">
                                              </div>
                                            </td>
                                          </tr>
                                          <tr>
                                            <td>
                                              <div class="input-group mb-md input-group-icon">
                                                <input type="checkbox" id="work-10" name="task[]" value="10 – Manufacturing" class="todo-check">
                                                <label class="todo-label" for="todoListItem1">
                                                  <span>10 – Manufacturing</span>
                                                </label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="input-group mb-md input-group-icon">
                                                <input type="text" name="task-description[]" id="manufacturing" class="form-control" placeholder="Task">
                                              </div>
                                            </td>
                                            <td>
                                              <div class="input-group mb-md input-group-icon">
                                                <input type="text" name="task-month[]" id="manufacturing" class="form-control" placeholder="Month">
                                              </div>
                                            </td>
                                            <td>
                                              <div class="input-group mb-md input-group-icon">
                                                <select name="task-location[]" id="task-10" class="form-control">
                                                  <option value="1 – Own house">1 – Own house</option>
                                                  <option value="2 – Employer's house">2 – Employer's house</option>
                                                  <option value="3 – Office">3 – Office</option>
                                                  <option value="4 – Factory">4 – Factory</option>
                                                  <option value="5 – Farm">5 – Farm</option>
                                                  <option value="6 – Street">6 – Street</option>
                                                  <option value="7 – Market place">7 – Market place</option>
                                                  <option value="8 – Mining Site">8 – Mining Site</option>
                                                  <option value="9 – Construction Sites">9 – Construction Sites</option>
                                                  <option value="10 – Quarry Sites">10 – Quarry Sites</option>
                                                  <option value="11 – Open Sea">11 – Open Sea</option>
                                                  <option value="12 – River/lake">12 – River/lake</option>
                                                  <option value="13 – Others">13 – Others</option>
                                                </select>
                                              </div>
                                              <div class="input-group mb-md input-group-icon" id="others-manufacturing">
                                                <input type="text" id="manufacturing" class="form-control" placeholder="specify">
                                              </div>
                                            </td>
                                          </tr>
                                          <tr>
                                            <td>
                                              <div class="input-group mb-md input-group-icon">
                                                <input type="checkbox" id="work-11" name="task[]" value="11 – Pyrotechnics production" class="todo-check">
                                                <label class="todo-label" for="todoListItem1">
                                                  <span>11 – Pyrotechnics production</span>
                                                </label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="input-group mb-md input-group-icon">
                                                <input type="text" name="task-description[]" id="pyro" class="form-control" placeholder="Task">
                                              </div>
                                            </td>
                                            <td>
                                              <div class="input-group mb-md input-group-icon">
                                                <input type="text" name="task-month[]" id="pyro" class="form-control" placeholder="Month">
                                              </div>
                                            </td>
                                            <td>
                                              <div class="input-group mb-md input-group-icon">
                                                <select name="task-location[]" id="task-11" class="form-control">
                                                  <option value="1 – Own house">1 – Own house</option>
                                                  <option value="2 – Employer's house">2 – Employer's house</option>
                                                  <option value="3 – Office">3 – Office</option>
                                                  <option value="4 – Factory">4 – Factory</option>
                                                  <option value="5 – Farm">5 – Farm</option>
                                                  <option value="6 – Street">6 – Street</option>
                                                  <option value="7 – Market place">7 – Market place</option>
                                                  <option value="8 – Mining Site">8 – Mining Site</option>
                                                  <option value="9 – Construction Sites">9 – Construction Sites</option>
                                                  <option value="10 – Quarry Sites">10 – Quarry Sites</option>
                                                  <option value="11 – Open Sea">11 – Open Sea</option>
                                                  <option value="12 – River/lake">12 – River/lake</option>
                                                  <option value="13 – Others">13 – Others</option>
                                                </select>
                                              </div>
                                              <div class="input-group mb-md input-group-icon" id="others-pyro">
                                                <input type="text" id="pyro" class="form-control" placeholder="specify">
                                              </div>
                                            </td>
                                          </tr>
                                          <tr>
                                            <td>
                                              <div class="input-group mb-md input-group-icon">
                                                <input type="checkbox" id="work-12" name="task[]" value="12 – OSEC" class="todo-check">
                                                <label class="todo-label" for="todoListItem1">
                                                  <span>12 – OSEC</span>
                                                </label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="input-group mb-md input-group-icon">
                                                <input type="text" name="task-description[]" id="osec" class="form-control" placeholder="Task">
                                              </div>
                                            </td>
                                            <td>
                                              <div class="input-group mb-md input-group-icon">
                                                <input type="text" name="task-month[]" id="osec" class="form-control" placeholder="Month">
                                              </div>
                                            </td>
                                            <td>
                                              <div class="input-group mb-md input-group-icon">
                                                <select name="task-location[]" id="task-12" class="form-control">
                                                  <option value="1 – Own house">1 – Own house</option>
                                                  <option value="2 – Employer's house">2 – Employer's house</option>
                                                  <option value="3 – Office">3 – Office</option>
                                                  <option value="4 – Factory">4 – Factory</option>
                                                  <option value="5 – Farm">5 – Farm</option>
                                                  <option value="6 – Street">6 – Street</option>
                                                  <option value="7 – Market place">7 – Market place</option>
                                                  <option value="8 – Mining Site">8 – Mining Site</option>
                                                  <option value="9 – Construction Sites">9 – Construction Sites</option>
                                                  <option value="10 – Quarry Sites">10 – Quarry Sites</option>
                                                  <option value="11 – Open Sea">11 – Open Sea</option>
                                                  <option value="12 – River/lake">12 – River/lake</option>
                                                  <option value="13 – Others">13 – Others</option>
                                                </select>
                                              </div>
                                              <div class="input-group mb-md input-group-icon" id="others-osec">
                                                <input type="text" id="osec" class="form-control" placeholder="specify">
                                              </div>
                                            </td>
                                          </tr>
                                          <tr>
                                            <td>
                                              <div class="input-group mb-md input-group-icon">
                                                <input type="checkbox" id="work-13" name="task[]" value="13 – Children in Prostitution" class="todo-check">
                                                <label class="todo-label" for="todoListItem1">
                                                  <span>13 – Children in Prostitution</span>
                                                </label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="input-group mb-md input-group-icon">
                                                <input type="text" name="task-description[]" id="prosti" class="form-control" placeholder="Task">
                                              </div>
                                            </td>
                                            <td>
                                              <div class="input-group mb-md input-group-icon">
                                                <input type="text" name="task-month[]" id="prosti" class="form-control" placeholder="Month">
                                              </div>
                                            </td>
                                            <td>
                                              <div class="input-group mb-md input-group-icon">
                                                <select name="task-location[]" id="task-13" class="form-control">
                                                  <option value="1 – Own house">1 – Own house</option>
                                                  <option value="2 – Employer's house">2 – Employer's house</option>
                                                  <option value="3 – Office">3 – Office</option>
                                                  <option value="4 – Factory">4 – Factory</option>
                                                  <option value="5 – Farm">5 – Farm</option>
                                                  <option value="6 – Street">6 – Street</option>
                                                  <option value="7 – Market place">7 – Market place</option>
                                                  <option value="8 – Mining Site">8 – Mining Site</option>
                                                  <option value="9 – Construction Sites">9 – Construction Sites</option>
                                                  <option value="10 – Quarry Sites">10 – Quarry Sites</option>
                                                  <option value="11 – Open Sea">11 – Open Sea</option>
                                                  <option value="12 – River/lake">12 – River/lake</option>
                                                  <option value="13 – Others">13 – Others</option>
                                                </select>
                                              </div>
                                              <div class="input-group mb-md input-group-icon" id="others-prosti">
                                                <input type="text" id="prosti" class="form-control" placeholder="specify">
                                              </div>
                                            </td>
                                          </tr>
                                          <tr>
                                            <td>
                                              <div class="input-group mb-md input-group-icon">
                                                <input type="checkbox" id="work-14" name="task[]" value="14 – Others" class="todo-check">
                                                <label class="todo-label" for="todoListItem1">
                                                  <span>14 – Others</span>
                                                </label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="input-group mb-md input-group-icon">
                                                <input type="text" name="task-description[]" id="others" class="form-control" placeholder="Task">
                                              </div>
                                            </td>
                                            <td>
                                              <div class="input-group mb-md input-group-icon">
                                                <input type="text" name="task-month[]" id="others" class="form-control" placeholder="Month">
                                              </div>
                                            </td>
                                            <td>
                                              <div class="input-group mb-md input-group-icon">
                                                <select name="task-location[]" id="task-14" class="form-control">
                                                  <option value="1 – Own house">1 – Own house</option>
                                                  <option value="2 – Employer's house">2 – Employer's house</option>
                                                  <option value="3 – Office">3 – Office</option>
                                                  <option value="4 – Factory">4 – Factory</option>
                                                  <option value="5 – Farm">5 – Farm</option>
                                                  <option value="6 – Street">6 – Street</option>
                                                  <option value="7 – Market place">7 – Market place</option>
                                                  <option value="8 – Mining Site">8 – Mining Site</option>
                                                  <option value="9 – Construction Sites">9 – Construction Sites</option>
                                                  <option value="10 – Quarry Sites">10 – Quarry Sites</option>
                                                  <option value="11 – Open Sea">11 – Open Sea</option>
                                                  <option value="12 – River/lake">12 – River/lake</option>
                                                  <option value="13 – Others">13 – Others</option>
                                                </select>
                                              </div>
                                              <div class="input-group mb-md input-group-icon" id="others-task">
                                                <input type="text" id="others" class="form-control" placeholder="specify">
                                              </div>
                                            </td>
                                          </tr>
                                        </tbody>
                                      </tr>
                                    </table>
                                  </div>
                                  <br>
                                  <div class="form-group zbot">
                                    <label class="col-md-2 control-label"><b>Name of owner, financier, landowner</b></label>
                                    <div class="col-md-5">
                                      <div class="input-group mb-md input-group-icon">
                                        <input type="text" name="employername" id="employername" class="form-control" placeholder="">
                                      </div>
                                    </div>
                                  </div>
                                  <div class="form-group zbot">
                                    <label class="col-md-2 control-label"><b>Contact Details of Employer</b></label>
                                    <div class="col-md-5">
                                      <div class="input-group mb-md input-group-icon">
                                        <input type="text" name="employercontact" id="employercontact" class="form-control" placeholder="">
                                      </div>
                                    </div>
                                  </div>
                                  <h4>&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                                    <b>Address of employer,financier, land owner:</b></h4>
                                    <div class="form-group zbot">
                                      <label class="col-md-2 control-label" style="color: red;"><b>Region</b></label>
                                      <div class="col-md-3">
                                        <div class="input-group mb-md input-group-icon">
                                          <select name="employerregion" id="employerregion" class="form-control">
                                            <option value="Region">Region</option>
                                            <option value="UNKNOWN">UNKNOWN</option>
                                            <option value="CAR">CAR</option>
                                            <option value="N/A">N/A</option>
                                            <option value="NATIONAL CAPITAL REGION (NCR)">NATIONAL CAPITAL REGION (NCR)</option>
                                            <option value="CORDILLERA ADMINISTRATIVE REGION (CAR)">CORDILLERA ADMINISTRATIVE REGION (CAR)</option>
                                            <option value="REGION I (ILOCOS REGION)">REGION I (ILOCOS REGION)</option>
                                            <option value="REGION II (CAGAYAN VALLEY)">REGION II (CAGAYAN VALLEY)</option>
                                            <option value="REGION III (CENTRAL LUZON)">REGION III (CENTRAL LUZON)</option>
                                            <option value="REGION IV-A (CALABARZON)">REGION IV-A (CALABARZON)</option>
                                            <option value="MIMAROPA REGION">MIMAROPA REGION</option>
                                            <option value="REGION V (BICOL REGION)">REGION V (BICOL REGION)</option>
                                            <option value="REGION VI (WESTERN VISAYAS)">REGION VI (WESTERN VISAYAS)</option>
                                            <option value="REGION VII (CENTRAL VISAYAS)">REGION VII (CENTRAL VISAYAS)</option>
                                            <option value="REGION VIII (EASTERN VISAYAS)">REGION VIII (EASTERN VISAYAS)</option>
                                            <option value="REGION IX (ZAMBOANGA PENINSULA)">REGION IX (ZAMBOANGA PENINSULA)</option>
                                            <option value="REGION X (NORTHERN MINDANAO)">REGION X (NORTHERN MINDANAO)</option>
                                            <option value="REGION XI (DAVAO REGION)">REGION XI (DAVAO REGION)</option>
                                            <option value="REGION XII (SOCCSKSARGEN)">REGION XII (SOCCSKSARGEN)</option>
                                            <option value="REGION XIII (Caraga)">REGION XIII (Caraga)</option>
                                            <option value="AUTONOMOUS REGION IN MUSLIM MINDANAO (ARMM)">AUTONOMOUS REGION IN MUSLIM MINDANAO (ARMM)</option>
                                          </select>
                                        </div>
                                      </div>
                                      <label class="col-md-2 control-label" style="color: red;"><b>Province</b></label>
                                      <div class="col-md-3">
                                        <div class="input-group mb-md input-group-icon">
                                          <select name="employerprovince" id="employerprovince" class="form-control">
                                            <option value="UNKNOWN">UNKNOWN</option>
                                            <option value="N/A">N/A</option>
                                            <option value="BUKIDNON">BUKIDNON</option>
                                            <option value="CAMIGUIN">CAMIGUIN</option>
                                            <option value="LANAO DEL NORTE">LANAO DEL NORTE</option>
                                            <option value="MISAMIS OCCIDENTAL">MISAMIS OCCIDENTAL</option>
                                            <option value="MISAMIS ORIENTAL">MISAMIS ORIENTAL</option>
                                          </select>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="form-group zbot">
                                      <label class="col-md-2 control-label" style="color: red;"><b>Municipality/City</b></label>
                                      <div class="col-md-3">
                                        <div class="input-group mb-md input-group-icon">
                                          <select name="employermunicipality" id="employermunicipality" class="form-control">
                                            <option value="UNKNOWN">UNKNOWN</option>
                                            <option value="N/A">N/A</option>
                                            <option value="ALUBIJID">ALUBIJID</option>
                                            <option value="BALINGASAG">BALINGASAG</option>
                                            <option value="BALINGOAN">BALINGOAN</option>
                                            <option value="BINUANGAN">BINUANGAN</option>
                                            <option value="CITY OF CAGAYAN DE ORO (Capital)">CITY OF CAGAYAN DE ORO (Capital)</option>
                                            <option value="CITY OF EL SALVADOR">CITY OF EL SALVADOR</option>
                                            <option value="CITY OF GINGOOG">CITY OF GINGOOG</option>
                                            <option value="CLAVERIA">CLAVERIA</option>
                                            <option value="GITAGUM">GITAGUM</option>
                                            <option value="INITAO">INITAO</option>
                                            <option value="JASAAN">JASAAN</option>
                                            <option value="KINOGUITAN">KINOGUITAN</option>
                                            <option value="LAGONGLONG">LAGONGLONG</option>
                                            <option value="LAGUINDINGAN">LAGUINDINGAN</option>
                                            <option value="LIBERTAD">LIBERTAD</option>
                                            <option value="LUGAIT">LUGAIT</option>
                                            <option value="MAGSAYSAY (LINUGOS)">MAGSAYSAY (LINUGOS)</option>
                                            <option value="MANTICAO">MANTICAO</option>
                                            <option value="MEDINA">MEDINA</option>
                                            <option value="NAAWAN">NAAWAN</option>
                                            <option value="OPOL">OPOL</option>
                                            <option value="SALAY">SALAY</option>
                                            <option value="SUGBONGCOGON">SUGBONGCOGON</option>
                                            <option value="TAGOLOAN">TAGOLOAN</option>
                                            <option value="TALISAYAN">TALISAYAN</option>
                                            <option value="VILLANUEVA">VILLANUEVA</option>
                                          </select>
                                        </div>
                                      </div>
                                      <label class="col-md-2 control-label" style="color: red;"><b>Barangay</b></label>
                                      <div class="col-md-3">
                                        <div class="input-group mb-md input-group-icon">
                                          <input type="text" name="employerbarangay" id="employerbarangay" class="form-control" placeholder="Barangay">
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="form-group zbot">
                                    <label class="col-md-2 control-label"><b>Sitio/Purok/Block/Zone</b></label>
                                    <div class="col-md-3">
                                      <div class="input-group mb-md input-group-icon">
                                        <input type="text" name="employersitio" id="employersitio" class="form-control" placeholder="Sitio/Purok/Block/Zone">
                                      </div>
                                    </div>
                                  </div>
                                  <hr>
                                  <div class="form-group zbot">
                                    <label class="col-md-2 control-label" style="color: red;"><b>What is the nature of your present work arrangement?</b></label>
                                    <div class="col-md-7">
                                      <div class="input-group mb-md input-group-icon">
                                        <div class="input-group mb-md input-group-icon">
                                          <select name="workarrangement" id="workarrangement" class="form-control">
                                            <option value="1 – Paid worker in own household-operated farm or business">1 – Paid worker in own household-operated farm or business</option>
                                            <option value="2 – Paid worker by an employer, financier, land owner">2 – Paid worker by an employer, financier, land owner</option>
                                            <option value="3 – Worker without pay in own family-operated farm or business">3 – Worker without pay in own family-operated farm or business</option>
                                            <option value="4 – Self-employed">4 – Self-employed</option>
                                            <option value="5 – Others">5 – Others</option>
                                          </select>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="form-group zbot" id="others-work-arrangement">
                                    <label class="col-md-2 control-label"><b>specify</b></label>
                                    <div class="col-md-3">
                                      <div class="input-group mb-md input-group-icon">
                                        <input type="text" name="others-work-arrangement-value" id="others-work-arrangement-value" class="form-control" placeholder="">
                                      </div>
                                    </div>
                                  </div>
                                  <div class="form-group zbot">
                                    <label class="col-md-2 control-label" style="color: red;"><b>No. of working hours per day: </b></label>
                                    <div class="col-md-2">
                                      <div class="input-group mb-md input-group-icon">
                                        <input type="number" name="workingday" id="workingday" class="form-control"  >
                                      </div>
                                    </div>
                                  </div>
                                  <div class="form-group zbot">
                                    <label class="col-md-2 control-label" style="color: red;"><b>No. of working hours per week:</b></label>
                                    <div class="col-md-2">
                                      <div class="input-group mb-md input-group-icon">
                                        <input type="number" name="workingweek" id="workingweek" class="form-control"  >
                                      </div>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="col-md-2 control-label"><b>Time of work</b></label>
                                  </div>
                                  <div class="form-group zbot">
                                    <label class="col-md-2 control-label" style="color: red;"><b>start:</b></label>
                                    <div class="col-md-3">
                                      <div class="input-group">
                                        <span class="input-group-addon">
                                          <i class="fa fa-clock-o"></i>
                                        </span>
                                        <input type="text" data-plugin-timepicker class="form-control" name="start" data-plugin-options='{ "minuteStep": 15 }'>
                                      </div>
                                    </div>
                                    <label class="col-md-1 control-label" style="color: red;"><b>end:</b></label>
                                    <div class="col-md-3">
                                      <div class="input-group">
                                        <span class="input-group-addon">
                                          <i class="fa fa-clock-o"></i>
                                        </span>
                                        <input type="text" id="timepicker" data-plugin-timepicker class="form-control" name="end" data-plugin-options='{ "minuteStep": 15, "format": "HH:mm"}'>
                                      </div>
                                    </div>
                                                <!-- <label class="col-md-2 control-label" style="color: red;"><b>specific part of the day</b></label>
                                                <div class="col-md-3">
                                                    <div class="input-group mb-md input-group-icon">
                                                        <select name="startday" id="startday" class="form-control">
                                                          <option value="AM">AM</option>
                                                          <option value="PM">PM</option>
                                                          <option value="Noon">Noon</option>
                                                          <option value="Mid Night">Mid Night</option>
                                                        </select>
                                                    </div>
                                                  </div> -->
                                                </div>
                                                <div class="form-group zbot">
                                                  
                                                <!-- <label class="col-md-2 control-label" style="color: red;"><b>specific part of the day</b></label>
                                                <div class="col-md-3">
                                                    <div class="input-group mb-md input-group-icon">
                                                        <select name="endday" id="endday" class="form-control">
                                                          <option value="AM">AM</option>
                                                          <option value="PM">PM</option>
                                                          <option value="Noon">Noon</option>
                                                          <option value="Mid Night">Mid Night</option>
                                                        </select>
                                                    </div>
                                                  </div> -->
                                                </div>
                                                <div class="form-group">
                                                  <label class="col-md-2 control-label" style="color: red;"><b>Age started working:</b></label>
                                                  <div class="col-md-2">
                                                    <div class="input-group mb-md input-group-icon">
                                                      <input type="number" name="agestartedworking" id="agestartedworking" class="form-control" placeholder="">
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="form-group">
                                                  <label class="col-md-2 control-label" style="color: red;"><b>Exposure to risk and hazards</b></label>
                                                </div>
                                                <div class="form-group">
                                                  <div class="col-md-2"></div>
                                                  <div class="col-md-2">
                                                    <div class="input-group mb-md input-group-icon">
                                                      <input type="checkbox" name="hazards[]" id="hazard-1" value="1 – Exposure to chemicals" class="todo-check">
                                                      <label class="todo-label" for="todoListItem1">
                                                        <span>1 – Exposure to chemicals</span>
                                                      </label>
                                                    </div>
                                                  </div>
                                                  <div class="col-md-2">
                                                    <div class="input-group mb-md input-group-icon">
                                                      <input type="checkbox" name="hazards[]" id="hazard-2" value="2 – Exposure to physical injuries" class="todo-check">
                                                      <label class="todo-label" for="todoListItem1">
                                                        <span>2 – Exposure to physical injuries</span>
                                                      </label>
                                                    </div>
                                                  </div>
                                                  <div class="col-md-2">
                                                    <div class="input-group mb-md input-group-icon">
                                                      <input type="checkbox" name="hazards[]" id="hazard-3" value="3 – Exposure to possible suffocation (e.g. compressor mining)" class="todo-check">
                                                      <label class="todo-label" for="todoListItem1">
                                                        <span>3 – Exposure to possible suffocation (e.g. compressor mining)</span>
                                                      </label>
                                                    </div>
                                                  </div>
                                                  <div class="col-md-2">
                                                    <div class="input-group mb-md input-group-icon">
                                                      <input type="checkbox" name="hazards[]" id="hazard-4" value="4 – Exposure to extreme weather conditions" class="todo-check">
                                                      <label class="todo-label" for="todoListItem1">
                                                        <span>4 – Exposure to extreme weather conditions</span>
                                                      </label>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="form-group">
                                                  <label class="col-md-2 control-label"><b>&nbsp;</b></label>
                                                  <div class="col-md-2">
                                                    <div class="input-group mb-md input-group-icon">
                                                      <input type="checkbox" name="hazards[]" id="hazard-5" value="5 – Exposure to possible health complications" class="todo-check">
                                                      <label class="todo-label" for="todoListItem1">
                                                        <span>5 – Exposure to possible health complications</span>
                                                      </label>
                                                    </div>
                                                  </div>
                                                  <div class="col-md-2">
                                                    <div class="input-group mb-md input-group-icon">
                                                      <input type="checkbox" name="hazards[]" id="hazard-6" value="6 – Exposure to accident-prone areas (e.g. falling timber)" class="todo-check">
                                                      <label class="todo-label" for="todoListItem1">
                                                        <span>6 – Exposure to accident-prone areas (e.g. falling timber)</span>
                                                      </label>
                                                    </div>
                                                  </div>
                                                  <div class="col-md-2">
                                                    <div class="input-group mb-md input-group-icon">
                                                      <input type="checkbox" name="hazards[]" id="hazard-7" value="7 – Exposure to drowning (location of place of work)" class="todo-check">
                                                      <label class="todo-label" for="todoListItem1">
                                                        <span>7 – Exposure to drowning (location of place of work)</span>
                                                      </label>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="form-group">
                                                  <div class="col-md-2"></div>
                                                  <div class="col-md-2">
                                                    <div class="input-group mb-md input-group-icon">
                                                      <input type="checkbox" id="hazard-check" class="todo-check">
                                                      <label class="todo-label" for="todoListItem1">
                                                        <span>8 – Others</span>
                                                      </label>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="form-group zbot" id="others-hazards">
                                                  <label class="col-md-2 control-label"><b>specify</b></label>
                                                  <div class="col-md-3">
                                                    <div class="input-group mb-md input-group-icon">
                                                      <input type="text" name="hazards[]" id="others-hazards-value" class="form-control" placeholder="">
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="form-group">
                                                  <label class="col-md-2 control-label"><b>Under what term or basis of payment are you paid?</b></label>
                                                </div>
                                                <div class="form-group">
                                                  <div class="col-md-2"></div>
                                                  <div class="col-md-2">
                                                    <div class="input-group mb-md input-group-icon">
                                                      <input type="checkbox" name="payment[]" id="payment-1" value="1 – Hourly" class="todo-check">
                                                      <label class="todo-label" for="todoListItem1">
                                                        <span>1 – Hourly</span>
                                                      </label>
                                                    </div>
                                                  </div>
                                                  <div class="col-md-2">
                                                    <div class="input-group mb-md input-group-icon">
                                                      <input type="checkbox" name="payment[]" id="payment-2" value="2 – Daily" class="todo-check">
                                                      <label class="todo-label" for="todoListItem1">
                                                        <span>2 – Daily</span>
                                                      </label>
                                                    </div>
                                                  </div>
                                                  <div class="col-md-2">
                                                    <div class="input-group mb-md input-group-icon">
                                                      <input type="checkbox" name="payment[]" id="payment-3" value="3 – Weekly" class="todo-check">
                                                      <label class="todo-label" for="todoListItem1">
                                                        <span>3 – Weekly</span>
                                                      </label>
                                                    </div>
                                                  </div>
                                                  <div class="col-md-2">
                                                    <div class="input-group mb-md input-group-icon">
                                                      <input type="checkbox" name="payment[]" id="payment-4" value="4 – Monthly" class="todo-check">
                                                      <label class="todo-label" for="todoListItem1">
                                                        <span>4 – Monthly</span>
                                                      </label>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="form-group">
                                                  <label class="col-md-2 control-label"><b>&nbsp;</b></label>
                                                  <div class="col-md-2">
                                                    <div class="input-group mb-md input-group-icon">
                                                      <input type="checkbox" name="payment[]" id="payment-5" value="5 – Per gram" class="todo-check">
                                                      <label class="todo-label" for="todoListItem1">
                                                        <span>5 – Per gram</span>
                                                      </label>
                                                    </div>
                                                  </div>
                                                  <div class="col-md-2">
                                                    <div class="input-group mb-md input-group-icon">
                                                      <input type="checkbox" name="payment[]" id="payment-6" value="6 – Per piece" class="todo-check">
                                                      <label class="todo-label" for="todoListItem1">
                                                        <span>6 – Per piece</span>
                                                      </label>
                                                    </div>
                                                  </div>
                                                  <div class="col-md-2">
                                                    <div class="input-group mb-md input-group-icon">
                                                      <input type="checkbox" name="payment[]" id="payment-7" value="7 – Per task or pakyaw" class="todo-check">
                                                      <label class="todo-label" for="todoListItem1">
                                                        <span>7 – Per task or pakyaw</span>
                                                      </label>
                                                    </div>
                                                  </div>
                                                  <div class="col-md-2">
                                                    <div class="input-group mb-md input-group-icon">
                                                      <input type="checkbox" name="payment[]" id="payment-8" value="8 – In kind" class="todo-check">
                                                      <label class="todo-label" for="todoListItem1">
                                                        <span>8 – In kind</span>
                                                      </label>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="form-group">
                                                  <label class="col-md-2 control-label" style="color: red;"><b>&nbsp;</b></label>
                                                  <div class="col-md-2">
                                                    <div class="input-group mb-md input-group-icon">
                                                      <input type="checkbox" name="payment[]" id="payment-9" value="9 – Commission basis" class="todo-check">
                                                      <label class="todo-label" for="todoListItem1">
                                                        <span>9 – Commission basis</span>
                                                      </label>
                                                    </div>
                                                  </div>
                                                  <div class="col-md-2">
                                                  </div>
                                                </div>
                                                <div class="form-group">
                                                  <div class="col-md-2"></div>
                                                  <div class="col-md-2">
                                                    <div class="input-group mb-md input-group-icon">
                                                      <input type="checkbox" id="payment-check" class="todo-check">
                                                      <label class="todo-label" for="todoListItem1">
                                                        <span>10 - Others</span>
                                                      </label>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="form-group zbot" id="others-payment">
                                                  <label class="col-md-2 control-label"><b>specify</b></label>
                                                  <div class="col-md-3">
                                                    <div class="input-group mb-md input-group-icon">
                                                      <input type="text" name="payment[]" id="others-payment-value" class="form-control" placeholder="">
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="form-group zbot">
                                                  <label class="col-md-2 control-label"><b>How much is your average monthly income?</b></label>
                                                  <div class="col-md-3">
                                                    <div class="input-group mb-md input-group-icon">
                                                      <input type="text" name="monthlyincome" id="monthlyincome" class="form-control" placeholder="">
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="form-group">
                                                  <label class="col-md-2 control-label" style="color: red;"><b>What do you usually do with your earnings?</b></label>
                                                </div>
                                                <div class="form-group">
                                                  <div class="col-md-2"></div>
                                                  <div class="col-md-2">
                                                    <div class="input-group mb-md input-group-icon">
                                                      <input type="checkbox" name="earnings[]" id="earning-1" value="1 – Give all or part of earnings to my parents/guardian" class="todo-check">
                                                      <label class="todo-label" for="todoListItem1">
                                                        <span>1 – Give all or part of earnings to my parents/guardian</span>
                                                      </label>
                                                    </div>
                                                  </div>
                                                  <div class="col-md-2">
                                                    <div class="input-group mb-md input-group-icon">
                                                      <input type="checkbox" name="earnings[]" id="earning-2" value="2 – Employer gives all or parts of earnings to my parents/guardian" class="todo-check">
                                                      <label class="todo-label" for="todoListItem1">
                                                        <span>2 – Employer gives all or parts of earnings to my parents/guardian</span>
                                                      </label>
                                                    </div>
                                                  </div>
                                                  <div class="col-md-2">
                                                    <div class="input-group mb-md input-group-icon">
                                                      <input type="checkbox" name="earnings[]" id="earning-3" value="3 – Pay for my tuition fees" class="todo-check">
                                                      <label class="todo-label" for="todoListItem1">
                                                        <span>3 – Pay for my tuition fees</span>
                                                      </label>
                                                    </div>
                                                  </div>
                                                  <div class="col-md-2">
                                                    <div class="input-group mb-md input-group-icon">
                                                      <input type="checkbox" name="earnings[]" id="earning-4" value="4 – Buy things for school needs" class="todo-check">
                                                      <label class="todo-label" for="todoListItem1">
                                                        <span>4 – Buy things for school needs</span>
                                                      </label>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="form-group">
                                                  <label class="col-md-2 control-label"><b>&nbsp;</b></label>
                                                  <div class="col-md-2">
                                                    <div class="input-group mb-md input-group-icon">
                                                      <input type="checkbox" name="earnings[]" id="earning-5" value="5 – Buy things for household needs and use" class="todo-check">
                                                      <label class="todo-label" for="todoListItem1">
                                                        <span>5 – Buy things for household needs and use</span>
                                                      </label>
                                                    </div>
                                                  </div>
                                                  <div class="col-md-2">
                                                    <div class="input-group mb-md input-group-icon">
                                                      <input type="checkbox" name="earnings[]" id="earning-6" value="6 – Buy things for myself" class="todo-check">
                                                      <label class="todo-label" for="todoListItem1">
                                                        <span>6 – Buy things for myself</span>
                                                      </label>
                                                    </div>
                                                  </div>
                                                  <div class="col-md-2">
                                                    <div class="input-group mb-md input-group-icon">
                                                      <input type="checkbox" name="earnings[]" id="earning-7" value="7 – Spent for basic needs" class="todo-check">
                                                      <label class="todo-label" for="todoListItem1">
                                                        <span>7 – Spent for basic needs</span>
                                                      </label>
                                                    </div>
                                                  </div>
                                                  <div class="col-md-2">
                                                    <div class="input-group mb-md input-group-icon">
                                                      <input type="checkbox" name="earnings[]" id="earning-8" value="8 – Save" class="todo-check">
                                                      <label class="todo-label" for="todoListItem1">
                                                        <span>8 – Save</span>
                                                      </label>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="form-group">
                                                  <div class="col-md-2"></div>
                                                  <div class="col-md-2">
                                                    <div class="input-group mb-md input-group-icon">
                                                      <input type="checkbox" id="earnings-check" class="todo-check">
                                                      <label class="todo-label" for="todoListItem1">
                                                        <span>10 - Others</span>
                                                      </label>
                                                    </div>
                                                  </div>
                                                  <div class="col-md-2">
                                                  </div>
                                                </div>
                                                <div class="form-group zbot" id="others-earnings">
                                                  <label class="col-md-2 control-label"><b>specify</b></label>
                                                  <div class="col-md-3">
                                                    <div class="input-group mb-md input-group-icon">
                                                      <input type="text" name="earnings[]" id="others-earnings-value" class="form-control" placeholder="">
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="form-group zbot">
                                                  <div>
                                                    <label class="col-md-2 control-label" style="color: red;"><b>Does an adult supervise your work?</b></label>
                                                    <div class="col-md-2">
                                                      <div class="input-group mb-md input-group-icon">
                                                        <select name="adultsupervise" id="adultsupervise" class="form-control">
                                                          <option value="Yes">Yes</option>
                                                          <option value="No">No</option>
                                                        </select>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="form-group">
                                                  <label class="col-md-2 control-label" style="color: red;"><b>Who supervises your work?</b></label>
                                                </div>
                                                <div class="form-group">
                                                  <div class="col-md-2"></div>
                                                  <div class="col-md-2">
                                                    <div class="input-group mb-md input-group-icon">
                                                      <input type="checkbox" name="supervise[]" id="supervise-1" value="1 – Parent/ Guardian" class="todo-check">
                                                      <label class="todo-label" for="todoListItem1">
                                                        <span>1 – Parent/ Guardian</span>
                                                      </label>
                                                    </div>
                                                  </div>
                                                  <label class="col-md-2 control-label" style="color: red;"><b>specify the name of supervisor</b></label>
                                                  <div class="col-md-3">
                                                    <div class="input-group mb-md input-group-icon">
                                                      <input type="text" name="supervisename[]" id="supervisename-1" class="form-control" placeholder="">
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="form-group">
                                                  <label class="col-md-2 control-label"><b></b></label>
                                                </div>
                                                <div class="form-group">
                                                  <div class="col-md-2"></div>
                                                  <div class="col-md-2">
                                                    <div class="input-group mb-md input-group-icon">
                                                      <input type="checkbox" name="supervise[]" id="supervise-2" value="2 – Elder brother or sister" class="todo-check">
                                                      <label class="todo-label" for="todoListItem1">
                                                        <span>2 – Elder brother or sister</span>
                                                      </label>
                                                    </div>
                                                  </div>
                                                  <label class="col-md-2 control-label" style="color: red;"><b>specify the name of supervisor</b></label>
                                                  <div class="col-md-3">
                                                    <div class="input-group mb-md input-group-icon">
                                                      <input type="text" name="supervisename[]" id="supervisename-2" class="form-control" placeholder="">
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="form-group">
                                                  <label class="col-md-2 control-label"><b></b></label>
                                                </div>
                                                <div class="form-group">
                                                  <div class="col-md-2"></div>
                                                  <div class="col-md-2">
                                                    <div class="input-group mb-md input-group-icon">
                                                      <input type="checkbox" name="supervise[]" id="supervise-3" value="3 – Other relatives" class="todo-check">
                                                      <label class="todo-label" for="todoListItem1">
                                                        <span>3 – Other relatives</span>
                                                      </label>
                                                    </div>
                                                  </div>
                                                  <label class="col-md-2 control-label" style="color: red;"><b>specify the name of supervisor</b></label>
                                                  <div class="col-md-3">
                                                    <div class="input-group mb-md input-group-icon">
                                                      <input type="text" name="supervisename[]" id="supervisename-3" class="form-control" placeholder="">
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="form-group">
                                                  <label class="col-md-2 control-label"><b></b></label>
                                                </div>
                                                <div class="form-group">
                                                  <div class="col-md-2"></div>
                                                  <div class="col-md-2">
                                                    <div class="input-group mb-md input-group-icon">
                                                      <input type="checkbox" name="supervise[]" id="supervise-4" value="4 – Employer" class="todo-check">
                                                      <label class="todo-label" for="todoListItem1">
                                                        <span>4 – Employer</span>
                                                      </label>
                                                    </div>
                                                  </div>
                                                  <label class="col-md-2 control-label" style="color: red;"><b>specify the name of supervisor</b></label>
                                                  <div class="col-md-3">
                                                    <div class="input-group mb-md input-group-icon">
                                                      <input type="text" name="supervisename[]" id="supervisename-4" class="form-control" placeholder="">
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="form-group">
                                                  <label class="col-md-2 control-label"><b></b></label>
                                                </div>
                                                <div class="form-group">
                                                  <div class="col-md-2"></div>
                                                  <div class="col-md-2">
                                                    <div class="input-group mb-md input-group-icon">
                                                      <input type="checkbox" name="supervise[]" id="supervise-5" value="5 – Friends" class="todo-check">
                                                      <label class="todo-label" for="todoListItem1">
                                                        <span>5 – Friends</span>
                                                      </label>
                                                    </div>
                                                  </div>
                                                  <label class="col-md-2 control-label" style="color: red;"><b>specify the name of supervisor</b></label>
                                                  <div class="col-md-3">
                                                    <div class="input-group mb-md input-group-icon">
                                                      <input type="text" name="supervisename[]" id="supervisename-5" class="form-control" placeholder="">
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="form-group">
                                                  <div class="col-md-2"></div>
                                                  <div class="col-md-2">
                                                    <div class="input-group mb-md input-group-icon">
                                                      <input type="checkbox" id="supervise-6" value="6 – Others" class="todo-check">
                                                      <label class="todo-label" for="todoListItem1">
                                                        <span>6 – Others</span>
                                                      </label>
                                                    </div>
                                                  </div>
                                                  <div class="col-md-3">
                                                    <div class="input-group mb-md input-group-icon">
                                                      <input type="text" name="supervise[]" id="supervisename-others" class="form-control" placeholder="specify">
                                                    </div>
                                                  </div>
                                                  <div class="col-md-3">
                                                    <div class="input-group mb-md input-group-icon">
                                                      <input type="text" name="supervisename[]" id="supervisename-6" class="form-control" placeholder="specify name of supervisor">
                                                    </div>
                                                  </div>
                                                </div>
                                                <hr>
                                                <h3>&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                                                  <b>B. Profile of the Family:</b></h3>
                                                  <h3 id="family-count">1.</h3>
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
                                                        <select name="highestattainment[]" id="highestattainment-1" class="form-control attainment-1">
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
                                                  <div class="form-group others-attainment-1">
                                                    <div class="col-md-1"></div>
                                                    <label class="col-md-2 control-label"><b>specify:</b></label>
                                                    <div class="col-md-3">
                                                      <div class="input-group mb-md input-group-icon">
                                                        <input type="text" id="others-attainment-value-1" class="form-control" placeholder="">
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
                                                        <select name="skills[]" id="skills-1" class="form-control">
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
                                                  <div class="form-group others-skills-1">
                                                    <div class="col-md-1"></div>
                                                    <label class="col-md-2 control-label"><b>specify:</b></label>
                                                    <div class="col-md-3">
                                                      <div class="input-group mb-md input-group-icon">
                                                        <input type="text" id="others-skills-value-1" class="form-control" placeholder="">
                                                      </div>
                                                    </div>
                                                    <hr>
                                                  </div>
                                                  
                                                  <div class="form-group">
                                                    <div class="col-md-1"></div>
                                                    <label class="col-md-2 control-label" style="color: red;"><b>Whereabouts</b></label>
                                                    <div class="col-md-3">
                                                      <div class="input-group mb-md input-group-icon">
                                                        <input type="text" name="whereabouts[]" class="form-control" placeholder="">
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
                                                  <div id="add-family"></div>
                                                  <div>
                                                    <button type="button" class="mb-xs mt-xs mr-xs btn btn-default btn-sm" id="add-family-btn">+ Add more</button>
                                                  </div>
                                                  <div class="form-group zbot">
                                                    <div class="col-md-1"></div>
                                                    <label class="col-md-2 control-label" style="color: red;"><b>Is your household currently a part of the Pantawid Pamilya Pilipino Program (4Ps)?</b></label>
                                                    <div class="col-md-2">
                                                      <div class="input-group mb-md input-group-icon">
                                                        <select name="4ps" id="4ps" class="form-control">
                                                          <option value="Yes">Yes</option>
                                                          <option value="No">No</option>
                                                        </select>
                                                      </div>
                                                    </div>
                                                    <label class="col-md-2 control-label"><b>If Yes, indicate Household ID Number. (If not known, please write "not available"</b></label>
                                                    <div class="col-md-4">
                                                      <div class="input-group mb-md input-group-icon">
                                                        <input type="text" name="householdidnumber" id="householdidnumber" class="form-control" placeholder="specify">
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <h3>&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                                                    <b>C1. SERVICES ALREADY AVAILED BY THE FAMILY</b></h3>
                                                    <h3>1.</h3>
                                                    <div class="form-group zbot">
                                                      <div class="col-md-1"></div>
                                                      <label class="col-md-2 control-label" style="color: red;"><b>Assistance Already Availed by the family</b></label>
                                                      <div class="col-md-3">
                                                        <div class="input-group mb-md input-group-icon">
                                                          <input type="text" name="alreadyavailed[]" id="alreadyavailed" class="form-control" placeholder="">
                                                        </div>
                                                      </div>
                                                    </div>
                                                    <div class="form-group">
                                                      <div class="col-md-1"></div>
                                                      <label class="col-md-2 control-label" style="color: red;"><b>Source of Assistance</b></label>
                                                      <div class="col-md-3">
                                                        <div class="input-group mb-md input-group-icon">
                                                          <input type="text" name="servicesavailedsource[]" id="servicesavailedsource" class="form-control" placeholder="">
                                                        </div>
                                                      </div>
                                                    </div>
                                                    <div class="form-group">
                                                      <div class="col-md-1"></div>
                                                      <label class="col-md-2 control-label" style="color: red;"><b>Year Availed</b></label>
                                                      <div class="col-md-3">
                                                        <div class="input-group mb-md input-group-icon">
                                                          <input type="text" name="yearavailed[]" id="yearavailed" class="form-control" placeholder="">
                                                        </div>
                                                      </div>
                                                    </div>
                                                    <div class="form-group">
                                                      <div class="col-md-1"></div>
                                                      <label class="col-md-2 control-label" style="color: red;"><b>Family Member who Availed the Service</b></label>
                                                      <div class="col-md-3">
                                                        <div class="input-group mb-md input-group-icon">
                                                          <input type="text" name="familyavailedservice[]" id="familyavailedservice" class="form-control" placeholder="">
                                                        </div>
                                                      </div>
                                                    </div>
                                                    <div class="form-group">
                                                      <div class="col-md-1"></div>
                                                      <label class="col-md-2 control-label" style="color: red;"><b>Remarks</b></label>
                                                      <div class="col-md-3">
                                                        <div class="input-group mb-md input-group-icon">
                                                          <input type="text" name="servicesavailedremarks[]" id="servicesavailedremarks" class="form-control" placeholder="">
                                                        </div>
                                                      </div>
                                                    </div>
                                                    <hr>
                                                    <div id="add-services"></div>
                                                    <div>
                                                      <button type="button" class="mb-xs mt-xs mr-xs btn btn-default btn-sm" id="add-services-btn">+ Add more</button>
                                                    </div>
                                                    <h3>&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                                                      <b>C2. Services Requested for Availment</b></h3>
                                                      <h3>1.</h3>
                                                      <div class="form-group zbot">
                                                        <div class="col-md-1"></div>
                                                        <label class="col-md-2 control-label" style="color: red;"><b>Types of Assistance Requested</b></label>
                                                        <div class="col-md-3">
                                                          <div class="input-group mb-md input-group-icon">
                                                            <input type="text" name="assistancerequested[]" id="assistancerequested" class="form-control" placeholder="">
                                                          </div>
                                                        </div>
                                                      </div>
                                                      <div class="form-group">
                                                        <div class="col-md-1"></div>
                                                        <label class="col-md-2 control-label" style="color: red;"><b>Source of Assistance</b></label>
                                                        <div class="col-md-3">
                                                          <div class="input-group mb-md input-group-icon">
                                                            <input type="text" name="requestedassistancesource[]" id="requestedassistancesource" class="form-control" placeholder="">
                                                          </div>
                                                        </div>
                                                      </div>
                                                      <div class="form-group">
                                                        <div class="col-md-1"></div>
                                                        <label class="col-md-2 control-label" style="color: red;"><b>Start and End of Assistance</b></label>
                                                        <div class="col-md-3">
                                                          <div class="input-group mb-md input-group-icon">
                                                            <input type="text" name="startassistance[]" id="startassistance" class="form-control" placeholder="Start">
                                                          </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                          <div class="input-group mb-md input-group-icon">
                                                            <input type="text" name="endassistance[]" id="endassistance" class="form-control" placeholder="End">
                                                          </div>
                                                        </div>

                                                      </div>
                                                      <div class="form-group">
                                                        <div class="col-md-1"></div>
                                                        <label class="col-md-2 control-label" style="color: red;"><b>Family Member who Requested the Assistance</b></label>
                                                        <div class="col-md-3">
                                                          <div class="input-group mb-md input-group-icon">
                                                            <input type="text" name="familyrequestedassistance[]" id="familyrequestedassistance" class="form-control" placeholder="">
                                                          </div>
                                                        </div>
                                                      </div>
                                                      <div class="form-group">
                                                        <div class="col-md-1"></div>
                                                        <label class="col-md-2 control-label" style="color: red;"><b>Remarks</b></label>
                                                        <div class="col-md-3">
                                                          <div class="input-group mb-md input-group-icon">
                                                            <input type="text" name="assistanceremarks[]" id="assistanceremarks" class="form-control" placeholder="">
                                                          </div>
                                                        </div>
                                                      </div>
                                                      <hr>
                                                      <div id="add-assistance"></div>
                                                      <div>
                                                        <button type="button" class="mb-xs mt-xs mr-xs btn btn-default btn-sm" id="add-assistance-btn">+ Add more</button>
                                                      </div>
                                                      <div class="form-group zbot">
                                                        <div class="col-md-1"></div>
                                                        <label class="col-md-2 control-label" style="color: red;"><b>Name of the Enumerator:</b></label>
                                                        <div class="col-md-4">
                                                          <div class="input-group mb-md input-group-icon">
                                                            <input type="text" name="enumerator" id="enumerator" class="form-control" placeholder="" required="required">
                                                          </div>
                                                        </div>
                                                        <label class="col-md-2 control-label"><b>Date of Interview:</b></label>
                                                        <div class="col-md-3">
                                                          <div id="bday-datepicker" class="input-group">
                                                            <span class="input-group-addon">
                                                              <i class="fa fa-calendar"></i>
                                                            </span>
                                                            <input type="text" data-plugin-datepicker class="form-control datepicker" id="dateofinterview" name="dateofinterview" placeholder="MM/DD/YY" required="required">
                                                          </div>
                                                        </div>
                                                      </div>
                                                      <div>
                                                        <center><input type="submit" name="save" id="save" class="btn btn-primary" value="Save Record"></center>
                                                      </div>
                                                    </form>
                                                  </div>
                                                </section>
                                              </div>
                                            </div>
                                          </p>
                                        </span>
                                      </div>
                                    </div>
                                  </div>
                                </section>
                              </div>
                            </div>
                          </section>
                          