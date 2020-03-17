<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Import extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		
		$this->load->model('Encode_M');
		$this->load->library('Excel');

	}


	public function index()
	{

		if($this->session->userdata('LOGGED') == true)
		{
			$data['user'] = $this->session->userdata('username');

			$this->load->view('header', $data);
			$this->load->view('import-view');
			$this->load->view('footer');
		}
		else
		{
			redirect(base_url());
		}
	}

	public function import()
	{
		if(isset($_FILES['file']['name']))
		{
			$path = $_FILES['file']['tmp_name'];
			$object = PHPExcel_IOFactory::load($path);


			foreach($object->getWorksheetIterator() as $worksheet)
			{
				$highestRow = $worksheet->getHighestRow();
				$highestColumn = $worksheet->getHighestColumn();

				for($row=2; $row<=$highestRow; $row++)
				{
					$regionalOffice               = $worksheet->getCellByColumnAndRow(0, $row)->getValue();
					$fieldOffice                  = $worksheet->getCellByColumnAndRow(1, $row)->getValue();
					$childIdNo                    = $worksheet->getCellByColumnAndRow(2, $row)->getValue();




					$name                         = $worksheet->getCellByColumnAndRow(3, $row)->getValue();




					$paRegion                     = $worksheet->getCellByColumnAndRow(4, $row)->getValue();
					$paProvince                   = $worksheet->getCellByColumnAndRow(5, $row)->getValue();
					$paDistrict                   = $worksheet->getCellByColumnAndRow(6, $row)->getValue();
					$paMunicipality               = $worksheet->getCellByColumnAndRow(7, $row)->getValue();
					$paBarangay                   = $worksheet->getCellByColumnAndRow(8, $row)->getValue();
					$paSitio                      = $worksheet->getCellByColumnAndRow(9, $row)->getValue();
					$phoneNo                      = $worksheet->getCellByColumnAndRow(10, $row)->getValue();
					$sex                          = $worksheet->getCellByColumnAndRow(11, $row)->getValue();
					$dateOfBirth                  = $worksheet->getCellByColumnAndRow(12, $row)->getValue();
					$birthDateEstimation          = $worksheet->getCellByColumnAndRow(13, $row)->getValue();
					$age                          = $worksheet->getCellByColumnAndRow(14, $row)->getValue();
					$birthCertificate             = $worksheet->getCellByColumnAndRow(15, $row)->getValue();
					$placeOfBirth                 = $worksheet->getCellByColumnAndRow(16, $row)->getValue();
					$pobRegion                    = $worksheet->getCellByColumnAndRow(17, $row)->getValue();
					$pobProvince                  = $worksheet->getCellByColumnAndRow(18, $row)->getValue();
					$pobDistrict                  = $worksheet->getCellByColumnAndRow(19, $row)->getValue();
					$pobMunicipality              = $worksheet->getCellByColumnAndRow(20, $row)->getValue();
					$pobBarangay                  = $worksheet->getCellByColumnAndRow(21, $row)->getValue();
					$pobSitio                     = $worksheet->getCellByColumnAndRow(22, $row)->getValue();
					$religion                     = $worksheet->getCellByColumnAndRow(23, $row)->getValue();
					$ipHousehold                  = $worksheet->getCellByColumnAndRow(24, $row)->getValue();
					$livingWith                   = $worksheet->getCellByColumnAndRow(25, $row)->getValue();



					$relativesName                = $worksheet->getCellByColumnAndRow(26, $row)->getValue();



					$relativesReason              = $worksheet->getCellByColumnAndRow(27, $row)->getValue();
					$houseHold                    = $worksheet->getCellByColumnAndRow(28, $row)->getValue();
					$goneToSchool                 = $worksheet->getCellByColumnAndRow(29, $row)->getValue();
					$attendingSchool              = $worksheet->getCellByColumnAndRow(30, $row)->getValue();
					$learningRefNo                = $worksheet->getCellByColumnAndRow(31, $row)->getValue();
					$highestGradeCompleted        = $worksheet->getCellByColumnAndRow(32, $row)->getValue();
					$formOfEducation              = $worksheet->getCellByColumnAndRow(33, $row)->getValue();
					$ageStoppedSchooling          = $worksheet->getCellByColumnAndRow(34, $row)->getValue();
					$dropOutReason                = $worksheet->getCellByColumnAndRow(35, $row)->getValue();
					$haveDisability               = $worksheet->getCellByColumnAndRow(36, $row)->getValue();
					$disability                   = $worksheet->getCellByColumnAndRow(37, $row)->getValue();
					$furtherAssessmentDisability  = $worksheet->getCellByColumnAndRow(38, $row)->getValue();
					$height                       = $worksheet->getCellByColumnAndRow(39, $row)->getValue();
					$weight                       = $worksheet->getCellByColumnAndRow(40, $row)->getValue();
					$ailments                     = $worksheet->getCellByColumnAndRow(41, $row)->getValue();
					$furtherAssessmentMedical     = $worksheet->getCellByColumnAndRow(42, $row)->getValue();
					$familyAilments               = $worksheet->getCellByColumnAndRow(43, $row)->getValue();
					$task                         = $worksheet->getCellByColumnAndRow(44, $row)->getValue();
					$employerName                 = $worksheet->getCellByColumnAndRow(45, $row)->getValue();
					$employerContact              = $worksheet->getCellByColumnAndRow(46, $row)->getValue();
					$employerRegion               = $worksheet->getCellByColumnAndRow(47, $row)->getValue();
					$employerProvince             = $worksheet->getCellByColumnAndRow(48, $row)->getValue();
					$employerMunicipality         = $worksheet->getCellByColumnAndRow(49, $row)->getValue();
					$employerBarangay             = $worksheet->getCellByColumnAndRow(50, $row)->getValue();
					$employerSitio                = $worksheet->getCellByColumnAndRow(51, $row)->getValue();
					$workArrangement              = $worksheet->getCellByColumnAndRow(52, $row)->getValue();
					$workHrsDay                   = $worksheet->getCellByColumnAndRow(53, $row)->getValue();
					$workHrsWeek                  = $worksheet->getCellByColumnAndRow(54, $row)->getValue();
					$timeOfWork                   = $worksheet->getCellByColumnAndRow(55, $row)->getValue();
					$ageStartedWorking            = $worksheet->getCellByColumnAndRow(56, $row)->getValue();
					$hazards                      = $worksheet->getCellByColumnAndRow(57, $row)->getValue();
					$basisOfPayment               = $worksheet->getCellByColumnAndRow(58, $row)->getValue();
					$averageMonthlyIncome         = $worksheet->getCellByColumnAndRow(59, $row)->getValue();
					$earnings                     = $worksheet->getCellByColumnAndRow(60, $row)->getValue();
					$supervise                    = $worksheet->getCellByColumnAndRow(61, $row)->getValue();

					$supervisesWork               = $worksheet->getCellByColumnAndRow(62, $row)->getValue();



					// $profileOfFamily1              = $worksheet->getCellByColumnAndRow(63, $row)->getValue();
					// $profileOfFamily2              = $worksheet->getCellByColumnAndRow(64, $row)->getValue();
					// $profileOfFamily3              = $worksheet->getCellByColumnAndRow(65, $row)->getValue();
					// $profileOfFamily4              = $worksheet->getCellByColumnAndRow(66, $row)->getValue();
					// $profileOfFamily5              = $worksheet->getCellByColumnAndRow(67, $row)->getValue();
					// $profileOfFamily6              = $worksheet->getCellByColumnAndRow(68, $row)->getValue();
					// $profileOfFamily7              = $worksheet->getCellByColumnAndRow(69, $row)->getValue();
					// $profileOfFamily8              = $worksheet->getCellByColumnAndRow(70, $row)->getValue();
					// $profileOfFamily9              = $worksheet->getCellByColumnAndRow(71, $row)->getValue();
					// $profileOfFamily10             = $worksheet->getCellByColumnAndRow(72, $row)->getValue();
					// $profileOfFamily11             = $worksheet->getCellByColumnAndRow(73, $row)->getValue();
					// $profileOfFamily12             = $worksheet->getCellByColumnAndRow(74, $row)->getValue();


					$cell_count = 63;
					if($cell_count <= 74)
					{
						$profileOfFamily = array();
						$profile_family_filter = array();

						for($i = 0; $i < 12; $i++)
						{
							 $profileOfFamily[$i]  = $worksheet->getCellByColumnAndRow($cell_count, $row)->getValue();
							 $cell_count++;


							 $profile_family_filter[$i] = explode(":", str_replace(array(",","Name:","Rel:","Sex:","Age:","Civil Status:","Solo Parent:","Highest Educ:","Occupation:","Monthly Income:","Skills:","Whereabouts:","Disability/Ailment:"), ":", $profileOfFamily[$i]));



						}
					}
					$cell_count = 63;
				



					$fourps                       = $worksheet->getCellByColumnAndRow(75, $row)->getValue();
					$householdIDNo                = $worksheet->getCellByColumnAndRow(76, $row)->getValue();


					// $servicesAvailed1              = $worksheet->getCellByColumnAndRow(77, $row)->getValue();
					// $servicesAvailed2              = $worksheet->getCellByColumnAndRow(78, $row)->getValue();
					// $servicesAvailed3              = $worksheet->getCellByColumnAndRow(79, $row)->getValue();
					// $servicesAvailed4              = $worksheet->getCellByColumnAndRow(80, $row)->getValue();
					// $servicesAvailed5              = $worksheet->getCellByColumnAndRow(81, $row)->getValue();
					// $servicesAvailed6              = $worksheet->getCellByColumnAndRow(82, $row)->getValue();
					// $servicesAvailed7              = $worksheet->getCellByColumnAndRow(83, $row)->getValue();
					// $servicesAvailed8              = $worksheet->getCellByColumnAndRow(84, $row)->getValue();
					// $servicesAvailed9              = $worksheet->getCellByColumnAndRow(85, $row)->getValue();
					// $servicesAvailed10             = $worksheet->getCellByColumnAndRow(86, $row)->getValue();
					// $servicesAvailed11             = $worksheet->getCellByColumnAndRow(87, $row)->getValue();
					// $servicesAvailed12             = $worksheet->getCellByColumnAndRow(88, $row)->getValue();


					$cell_count1 = 77;
					if($cell_count1 <= 88)
					{
						$servicesAvailed = array();
						$services_availed_filter = array();

						for($i = 0; $i < 12; $i++)
						{
							 $servicesAvailed[$i]  = $worksheet->getCellByColumnAndRow($cell_count1, $row)->getValue();
							 $cell_count1++;


							 $services_availed_filter[$i] = explode(":", str_replace(array(",","Source of Assistance Already Availed by the Family:","Assistance Already Availed by the Family:","Year Availed:","Family Member Who Availed the Service:","Remarks:"), ":", $servicesAvailed[$i]));



						}
					}
					$cell_count1 = 77;


					// $servicesRequested1            = $worksheet->getCellByColumnAndRow(89, $row)->getValue();
					// $servicesRequested2            = $worksheet->getCellByColumnAndRow(90, $row)->getValue();
					// $servicesRequested3            = $worksheet->getCellByColumnAndRow(91, $row)->getValue();
					// $servicesRequested4            = $worksheet->getCellByColumnAndRow(92, $row)->getValue();
					// $servicesRequested5            = $worksheet->getCellByColumnAndRow(93, $row)->getValue();
					// $servicesRequested6            = $worksheet->getCellByColumnAndRow(94, $row)->getValue();
					// $servicesRequested7            = $worksheet->getCellByColumnAndRow(95, $row)->getValue();
					// $servicesRequested8            = $worksheet->getCellByColumnAndRow(96, $row)->getValue();
					// $servicesRequested9            = $worksheet->getCellByColumnAndRow(97, $row)->getValue();
					// $servicesRequested10           = $worksheet->getCellByColumnAndRow(98, $row)->getValue();
					// $servicesRequested11           = $worksheet->getCellByColumnAndRow(99, $row)->getValue();
					// $servicesRequested12           = $worksheet->getCellByColumnAndRow(100, $row)->getValue();


					$cell_count2 = 89;
					if($cell_count2 <= 100)
					{
						$requestedAssistance = array();
						$requested_assistance_filter = array();

						for($i = 0; $i < 12; $i++)
						{
							 $requestedAssistance[$i]  = $worksheet->getCellByColumnAndRow($cell_count2, $row)->getValue();
							 $cell_count2++;


							 $requested_assistance_filter[$i] = explode(":", str_replace(array(",","Type of Assistance Requested:","Source of Assistance:","Start of Assistance:","End of Assistance:","Family Member Who Requested the Assistance:","Remarks:"), ":", $requestedAssistance[$i]));



						}
					}
					$cell_count2 = 89;

					
					$nameOfEnumerator             = $worksheet->getCellByColumnAndRow(101, $row)->getValue();
					$dateOfInterview              = $worksheet->getCellByColumnAndRow(102, $row)->getValue();


					$task_filter = explode("-", str_replace(array("\n", "\t", "\r", "\a", ",", "-" ,"([", "])", "[", "]", "(", ")", "([task-No Input])", "[months-No Input]"), "-", $task));

					// $task_filter = explode(":", str_replace(array("\n", "\t", "\r", "\a", ",","([", "])", "[", "]", "(", ")"), ":", $task));


					$supervisor_filter = explode("-", str_replace(array("\n", "\t", "\r", "\a", ",", "-"), "-", $supervisesWork));

					$work_time_filter = explode("-", str_replace(array("\n", "\t", "\r", "\a", ",", "-", " "), "-", $timeOfWork));


					$name_filter = explode(",", str_replace(array("\n", "\t", "\r", "\a", ",", ".", "-"), ",", $name));

					$relatives_filter = explode(",", str_replace(array("\n", "\t", "\r", "\a", ",", ".", "-"), ",", $relativesName));


					$this->db->where('child_control_no', $childIdNo);
					$this->db->from('tbl_child_record');
					$query = $this->db->get();

					$valid_data = $query->num_rows();

					if($valid_data == 0){

						$child_record[] = array(
						'child_control_no'	 => $childIdNo,
						'regional_office'    => $regionalOffice,
						'field_office'	     => $fieldOffice,
						'year'	             => date('Y'),
						'name_of_enumerator' => (isset($nameOfEnumerator) ? $nameOfEnumerator : ''),
						'date_of_interview'	 => (isset($dateOfInterview) ? $dateOfInterview : '')
						);

						$personal_info[] = array(
							'child_control_no'	         => trim($childIdNo),
							'last_name'	                 => trim((isset($name_filter[0])      ? $name_filter[0] : '')),
							'first_name'	             => trim((isset($name_filter[1])      ? $name_filter[1] : '')),
							'middle_name'	             => trim((isset($name_filter[2])      ? $name_filter[2] : '')),
							'suffix'	                 => trim((isset($name_filter[3])      ? $name_filter[3] : '')),
							'pa_region'	                 => trim((isset($paRegion)            ? $paRegion : '')),
							'pa_province'	             => trim((isset($paProvince)          ? $paProvince : '')),
							'pa_district'	             => trim((isset($paDistrict)          ? $paDistrict : '')),
							'pa_municipality'	         => trim((isset($paMunicipality)      ? $paMunicipality : '')),
							'pa_barangay'	             => trim((isset($paBarangay)          ? $paBarangay : '')),
							'pa_sitio'	                 => trim((isset($paSitio)             ? $paSitio : '')),
							'phone_no'	                 => trim((isset($phoneNo)             ? $phoneNo : '')),
							'sex'	                     => trim((isset($sex)                 ? $sex : '')),
							'date_of_birth'	             => trim((isset($dateOfBirth)         ? $dateOfBirth : '')),
							'date_of_birth_estimation'	 => trim((isset($birthDateEstimation) ? $birthDateEstimation : '')),
							'age'	                     => trim((isset($age)                 ? $age : '')) ,
							'birth_certificate'	         => trim((isset($birthCertificate)    ? $birthCertificate : '')),
							'place_of_birth'	         => trim((isset($placeOfBirth)        ? $placeOfBirth : '')),
							'pob_region'	             => trim((isset($pobRegion)           ? $pobRegion : '')),
							'pob_province'	             => trim((isset($pobProvince)         ? $pobProvince : '')),
							'pob_district'	             => trim((isset($pobDistrict)         ? $pobDistrict : '')),
							'pob_municipality'	         => trim((isset($pobMunicipality)     ? $pobMunicipality : '')),
							'pob_barangay'	             => trim((isset($pobBarangay)         ? $pobBarangay : '')),
							'pob_sitio'	                 => trim((isset($pobSitio)            ? $pobSitio : '')),
							'religion'	                 => trim((isset($religion)            ? $religion : '')),
							'ip_household'	             => trim((isset($ipHousehold)         ? $ipHousehold : '')),
							'living_with'	             => trim((isset($livingWith)          ? $livingWith : '')),
							'relative_last_name'	     => trim((isset($relatives_filter[0]) ? $relatives_filter[0] : '')),
							'relative_first_name'	     => trim((isset($relatives_filter[1]) ? $relatives_filter[1] : '')),
							'relative_middle_name'	     => trim((isset($relatives_filter[2]) ? $relatives_filter[2] : '')),
							'relative_suffix'	         => trim((isset($relatives_filter[3]) ? $relatives_filter[3] : '')),
							'relative_relationship'	     => trim((isset($relatives_filter[4]) ? $relatives_filter[4] : '')),
							'living_with_reason'	     => trim((isset($relativesReason)     ? $relativesReason : '')),
							'household_material'	     => trim((isset($houseHold)           ? $houseHold : ''))
						);

						$educational_background[] = array(
							'child_control_no'	         => trim($childIdNo),
							'gone_to_school'	         => trim((isset($goneToSchool)          ? $goneToSchool : '')),
							'attending_school'	         => trim((isset($attendingSchool)       ? $attendingSchool : '')),
							'learning_reference_no'	     => trim((isset($learningRefNo)         ? $learningRefNo : '')),
							'highest_grade_completed'	 => trim((isset($highestGradeCompleted) ? $highestGradeCompleted : '')),
							'form_of_education'	         => trim((isset($formOfEducation)       ? $formOfEducation : '')),
							'age_stopped_schooling'	     => trim((isset($ageStoppedSchooling)   ? $ageStoppedSchooling : '')),
							'drop_out_reason'	         => trim((isset($dropOutReason)         ? $dropOutReason : ''))
						);

						$health_information[] = array(
							'child_control_no'	            => trim($childIdNo),
							'have_disability'	            => trim((isset($haveDisability)              ? $haveDisability : '')),
							'disability'	                => trim((isset($disability)                  ? $disability : '')),
							'further_assessment_disability'	=> trim((isset($furtherAssessmentDisability) ? $furtherAssessmentDisability : '')),
							'height'	                    => trim((isset($height)                      ? $height : '')),
							'weight'	                    => trim((isset($weight)                      ? $weight : '')),
							'suffered_ailments'	            => trim((isset($ailments)                    ? $ailments : '')),
							'further_assessment_medical'	=> trim((isset($furtherAssessmentMedical)    ? $furtherAssessmentMedical : '')),
							'family_ailments'	            => trim((isset($familyAilments)              ? $familyAilments : ''))
						);

						$nature_location_work[] = array(
							'child_control_no'	            => trim($childIdNo),
							'employer_name'	                => trim((isset($employerName)        ? $employerName : '')),
							'employer_contact'	            => trim((isset($employerContact)     ? $employerContact : '')),
							'employer_region'	            => trim((isset($employerRegion)      ? $employerRegion : '')),
							'employer_province'	            => trim((isset($employerProvince)    ? $employerProvince : '')),
							'employer_municipality'	        => trim((isset($employerMunicipality)? $employerMunicipality : '')),
							'employer_barangay'	            => trim((isset($employerBarangay)    ? $employerBarangay : '')),
							'employer_sitio'	            => trim((isset($employerSitio)       ? $employerSitio : '')),
							'work_arrangement'	            => trim((isset($workArrangement)     ? $workArrangement : '')),
							'work_hrs_per_day'	            => trim((isset($workHrsDay)          ? $workHrsDay : '')),
							'work_hrs_per_week'	            => trim((isset($workHrsWeek)         ? $workHrsWeek : '')),
							'work_time_start'	            => trim((isset($work_time_filter[0]) ? $work_time_filter[0] : '')),
							'work_start_partofday'	        => trim((isset($work_time_filter[1]) ? $work_time_filter[1] : '')),
							'work_time_end'	                => trim((isset($work_time_filter[2]) ? $work_time_filter[2] : '')),
							'work_end_partofday'	        => trim((isset($work_time_filter[3]) ? $work_time_filter[3] : '')),
							'age_started_working'	        => trim((isset($ageStartedWorking)   ? $ageStartedWorking : '')),
							'hazards'	                    => trim((isset($hazards)             ? $hazards : '')),
							'basis_of_payment'	            => trim((isset($basisOfPayment)      ? $basisOfPayment : '')),
							'average_monthly_income'	    => trim((isset($averageMonthlyIncome)? $averageMonthlyIncome : '')),
							'do_with_earnings'	            => trim((isset($earnings)            ? $earnings : '')),
							'does_supervise_work'	        => trim((isset($supervise)           ? $supervise : '')),

						);



						$taskIndex            = 1;
						$taskDescriptionIndex = 2;
						$taskMonthIndex       = 3;
						$taskLocationIndex    = 4;

						for($i = 0; $i < floor(count($task_filter)/4); $i++)
						{
							$work_tasks[] = array(
								'child_control_no'	            => trim($childIdNo),
								'task'	      			        => trim($task_filter[$taskIndex]),
								'task_description'	            => trim($task_filter[$taskDescriptionIndex]),
								'task_month'	                => trim($task_filter[$taskMonthIndex]),
								'task_location'	                => trim($task_filter[$taskLocationIndex])
							);

							$taskIndex = $taskLocationIndex+1;
							$taskDescriptionIndex = $taskIndex+1;
							$taskMonthIndex = $taskDescriptionIndex+1;
							$taskLocationIndex = $taskMonthIndex+1;

						}

						$taskIndex            = 1;
						$taskDescriptionIndex = 2;
						$taskMonthIndex       = 3;
						$taskLocationIndex    = 4;

						

						// $work_supervisor[] = array(
						// 	'child_control_no'	            => trim($childControlNo),
						// 	'supervises_work'	            => trim($supervise),
						// 	'supervisor_name'	            => trim($supervisesWork)
						// );



						$supervisorWorkIndex            = 1;
						$supervisorNameIndex            = 2;


						for($i = 0; $i < floor(count($supervisor_filter)/2); $i++)
						{
							$work_supervisor[] = array(
								'child_control_no'	            => trim($childIdNo),
								'supervises_work'	            => trim((isset($supervisor_filter[$supervisorWorkIndex]) ? $supervisor_filter[$supervisorWorkIndex] : '')),
								'supervisor_name'	            => trim((isset($supervisor_filter[$supervisorNameIndex]) ? $supervisor_filter[$supervisorNameIndex] : ''))
							);

							$supervisorWorkIndex            = $supervisorNameIndex+1;
							$supervisorNameIndex            = $supervisorWorkIndex+1;


						}

						$supervisorWorkIndex            = 1;
						$supervisorNameIndex            = 2;





						for($i = 0; $i < 12; $i++)
						{
							if(!(count($profile_family_filter[$i])==1))
							{
								$profile_family[] = array(
									'child_control_no'	            => trim($childIdNo),
									'family_last_name'	            => trim((isset($profile_family_filter[$i][1])  ? $profile_family_filter[$i][1] : '')),
									'family_first_name'	            => trim((isset($profile_family_filter[$i][2])  ? $profile_family_filter[$i][2] : '')),
									'family_relationship'	        => trim((isset($profile_family_filter[$i][3])  ? $profile_family_filter[$i][3] : '')),
									'family_sex'	                => trim((isset($profile_family_filter[$i][4])  ? $profile_family_filter[$i][4] : '')),
									'family_age'	                => trim((isset($profile_family_filter[$i][5])  ? $profile_family_filter[$i][5] : '')),
									'family_civil_status'	        => trim((isset($profile_family_filter[$i][6])  ? $profile_family_filter[$i][6] : '')),
									'solo_parent'	                => trim((isset($profile_family_filter[$i][7])  ? $profile_family_filter[$i][7] : '')),
									'educational_attainment'	    => trim((isset($profile_family_filter[$i][8])  ? $profile_family_filter[$i][8] : '')),
									'occupation'	                => trim((isset($profile_family_filter[$i][9])  ? $profile_family_filter[$i][9] : '')),
									'estimated_monthly_income'	    => trim((isset($profile_family_filter[$i][10]) ? $profile_family_filter[$i][10] : '')),
									'skills'	                    => trim((isset($profile_family_filter[$i][11]) ? $profile_family_filter[$i][11] : '')),
									'whereabouts'	                => trim((isset($profile_family_filter[$i][12]) ? $profile_family_filter[$i][12] : '')),
									'family_type_disability'	    => trim((isset($profile_family_filter[$i][13]) ? $profile_family_filter[$i][13] : ''))
								);
							}
							else
							{
								break;
							}
						}



						$profile_family_4ps[] = array(
							'child_control_no'	        => trim($childIdNo),
							'part_of_4ps'	            => trim((isset($fourps)        ? $fourps : '')),
							'household_id_number'	    => trim((isset($householdIDNo) ? $householdIDNo : ''))
						);

						// $services_availed[] = array(
						// 	'child_control_no'	                => trim($childControlNo),
						// 	'services_already_availed'	        => trim($servicesAvailed1),
						// 	'availed_source_of_assistance'	    => trim($servicesAvailed1),
						// 	'year_availed'	                    => trim($servicesAvailed1),
						// 	'family_availed_service'	        => trim($servicesAvailed1),
						// 	'services_availed_remarks'	        => trim($servicesAvailed1)
						// );



					for($i = 0; $i < 12; $i++)
						{
							if(!(count($services_availed_filter[$i])==1))
							{
								$services_availed[] = array(
									'child_control_no'	                => trim($childIdNo),
									'services_already_availed'	        => trim((isset($services_availed_filter[$i][1]) ? $services_availed_filter[$i][1] : '')),
									'availed_source_of_assistance'	    => trim((isset($services_availed_filter[$i][2]) ? $services_availed_filter[$i][2] : '')),
									'year_availed'	                    => trim((isset($services_availed_filter[$i][3]) ? $services_availed_filter[$i][3] : '')),
									'family_availed_service'	        => trim((isset($services_availed_filter[$i][4]) ? $services_availed_filter[$i][4] : '')),
									'services_availed_remarks'	        => trim((isset($services_availed_filter[$i][5]) ? $services_availed_filter[$i][5] : ''))
								);

							}
							else
							{
								break;
							}
						}




						// $requested_assistance[] = array(
						// 	'child_control_no'	                  => trim($childControlNo),
						// 	'assistance_requested'	              => trim($servicesRequested1),
						// 	'requested_source_of_assistance'	  => trim($servicesRequested1),
						// 	'start_assistance'	                  => trim($servicesRequested1),
						// 	'end_assistance'	                  => trim($servicesRequested1),
						// 	'family_requested_assistance'	      => trim($servicesRequested1),
						// 	'requested_assistance_remarks'	      => trim($servicesRequested1)
						// );




						for($i = 0; $i < 12; $i++)
						{
							if(!(count($requested_assistance_filter[$i])==1))
							{
								$requested_assistance[] = array(
									'child_control_no'	                  => trim($childIdNo),
									'assistance_requested'	              => trim((isset($requested_assistance_filter[$i][1]) ? $requested_assistance_filter[$i][1] : '')),
									'requested_source_of_assistance'	  => trim((isset($requested_assistance_filter[$i][2]) ? $requested_assistance_filter[$i][2] : '')),
									'start_assistance'	                  => trim((isset($requested_assistance_filter[$i][3]) ? $requested_assistance_filter[$i][3] : '')),
									'end_assistance'	                  => trim((isset($requested_assistance_filter[$i][4]) ? $requested_assistance_filter[$i][4] : '')),
									'family_requested_assistance'	      => trim((isset($requested_assistance_filter[$i][5]) ? $requested_assistance_filter[$i][5] : '')),
									'requested_assistance_remarks'	      => trim((isset($requested_assistance_filter[$i][6]) ? $requested_assistance_filter[$i][6] : ''))
								);

							}
							else
							{
								break;
							}
						}
					}
					else
					{
						$childIdNo              = null;
						$child_record           = null;
						$personal_info          = null;
						$educational_background = null;
					 	$health_information     = null;
					 	$nature_location_work   = null;
					 	$work_tasks             = null;
					 	$work_supervisor        = null;
					    $profile_family         = null;
					    $profile_family_4ps     = null;
					    $services_availed       = null;
					    $requested_assistance   = null;
					}

				}
			}

		echo $this->Encode_M->import_excel($childIdNo, $child_record, $personal_info, $educational_background, $health_information, $nature_location_work, $work_tasks, $work_supervisor, $profile_family, $profile_family_4ps, $services_availed, $requested_assistance);

			
		}
	}


	
}
