<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Encode_M extends CI_Model {

	public function create_record($data){

		$others_religion = $this->input->post('others-religion-value');
		$others_highestgrade = $this->input->post('others-highest-grade-value');

		$filter_start_work = explode(" ", $this->input->post('start'));
		$filter_end_work = explode(" ", $this->input->post('end'));

		$pob = $this->input->post('placeofbirth');

		$this->db->where($data);
		$this->db->from("tbl_child_record");
		$query = $this->db->get();
		$valid_data = $query->num_rows();
		if($valid_data == 0)
		{
			$data = array(
				'child_control_no'   => strtoupper($this->input->post('childidno')),
				'regional_office'    => $this->input->post('regionaloffice'),
				'field_office'       => $this->input->post('fieldoffice'),
				'year'               => $this->input->post('year'),
				'name_of_enumerator' => strtoupper($this->input->post('enumerator')),
				'date_of_interview'  => str_replace('/','.',$this->input->post('dateofinterview'))
			);

			$personal_info_data = array(
				'child_control_no'   		=> strtoupper($this->input->post('childidno')),
				'last_name'          		=> strtoupper($this->input->post('lastname')),
				'first_name'         		=> strtoupper($this->input->post('firstname')),
				'middle_name'        		=> strtoupper($this->input->post('middlename')),
				'suffix'             		=> strtoupper($this->input->post('suffix')),
				'pa_region'          		=> $this->input->post('region'),
				'pa_province'        		=> $this->input->post('province'),
				'pa_district'        		=> strtoupper($this->input->post('district')),
				'pa_municipality'    		=> $this->input->post('municipality'),
				'pa_barangay'        		=> strtoupper($this->input->post('barangay')),
				'pa_sitio'           		=> strtoupper($this->input->post('sitio')),
				'phone_no'           		=> $this->input->post('phoneno'),
				'sex'                		=> $this->input->post('sex'),
				'date_of_birth'      		=> str_replace('/','.',$this->input->post('dateofbirth')),
				'date_of_birth_estimation'  => (isset($_POST['birthdateestimation']) ? $this->input->post('birthdateestimation') : 'Actual' ),
				'age'                		=> $this->input->post('age'),
				'birth_certificate'  		=> $this->input->post('birthcertificate'),

				'place_of_birth'			=> ($pob == null ? '' : $this->input->post('placeofbirth')),
				'pob_region'         		=> $this->input->post('region'),
				'pob_province'       		=> $this->input->post('province'),
				'pob_district'       		=> strtoupper($this->input->post('district')),
				'pob_municipality'  		=> $this->input->post('municipality'),
				'pob_barangay'       		=> strtoupper($this->input->post('barangay')),
				'pob_sitio'          		=> strtoupper($this->input->post('sitio')),
				'religion'           		=> ($others_religion == null ? $this->input->post('religion') : $this->input->post('others-religion-value')),
				'ip_household'       		=> $this->input->post('ipgroup'),
				'living_with'        		=> $this->input->post('livingwith'),

				'relative_last_name'     	=> $this->input->post('relativelastname'),
				'relative_first_name'    	=> $this->input->post('relativefirstname'),
				'relative_middle_name'   	=> $this->input->post('relativemiddlename'),
				'relative_suffix'        	=> $this->input->post('relativesuffix'),
				'relative_relationship'  	=> $this->input->post('relativerelationship'),
				'living_with_reason'     	=> $this->input->post('livingwithreason'),

				'household_material'        => $this->input->post('household')
			);

			$educational_background_data = array(
				'child_control_no'          => strtoupper($this->input->post('childidno')),
				'gone_to_school'            => $this->input->post('gonetoschool'),
				'attending_school'          => $this->input->post('attendingschool'),
				'learning_reference_no'     => strtoupper($this->input->post('learningreferenceno')),
				'highest_grade_completed'   => ($others_highestgrade == null ? $this->input->post('highestgrade') : $this->input->post('others-highest-grade-value')),
				'form_of_education'         => $this->input->post('formofeducation'),
				'age_stopped_schooling'     => $this->input->post('agestoppedschooling'),
				'drop_out_reason'           => implode("\n", $this->input->post('drop-reason'))
			);

			$health_information_data = array(
				'child_control_no'               => strtoupper($this->input->post('childidno')),
				'have_disability'                => $this->input->post('havedisability'),
				'disability'                     => implode("\n", $this->input->post('disability')),
				'further_assessment_disability'  => $this->input->post('assessmentofdisability'),
				'height'                         => $this->input->post('height'),
				'weight'                         => $this->input->post('weight'),
				'suffered_ailments'              => implode("\n", $this->input->post('ailments')),
				'further_assessment_medical'     => $this->input->post('assessmentofmedical'),
				'family_ailments'                => implode("\n", $this->input->post('family-ailments'))
			);

			$nature_location_work_data = array(
				'child_control_no'                     => strtoupper($this->input->post('childidno')),
				'employer_name'                        => strtoupper($this->input->post('employername')),
				'employer_contact'                     => strtoupper($this->input->post('employercontact')),
				'employer_region'                      => $this->input->post('employerregion'),
				'employer_province'                    => $this->input->post('employerprovince'),
				'employer_municipality'                => $this->input->post('employermunicipality'),
				'employer_barangay'                    => strtoupper($this->input->post('employerbarangay')),
				'employer_sitio'                       => strtoupper($this->input->post('employersitio')),
				'work_arrangement'                     => $this->input->post('workarrangement'),
				'work_hrs_per_day'                     => $this->input->post('workingday'),
				'work_hrs_per_week'                    => $this->input->post('workingweek'),
				'work_time_start'                      => $filter_start_work[0],
				'work_start_partofday'                 => $filter_start_work[1],
				'work_time_end'                        => $filter_end_work[0],
				'work_end_partofday'                   => $filter_end_work[1],
				'age_started_working'                  => $this->input->post('agestartedworking'),
				'hazards'                              => implode("\n", $this->input->post('hazards')),
				'basis_of_payment'                     => implode("\n", $this->input->post('payment')),
				'average_monthly_income'               => $this->input->post('monthlyincome'),
				'do_with_earnings'                     => implode("\n", $this->input->post('earnings')),
				'does_supervise_work'                  => $this->input->post('adultsupervise')
			);



				if(isset($_POST['task']))
				{
					$work_tasks_data = array();
					for ($i = 0; $i < count($_POST['task']); $i++){
						$work_tasks_data[$i] = array(
							'child_control_no'	         => strtoupper($_POST['childidno']),
							'task'	                     => $_POST['task'][$i],
							'task_description'	         => strtoupper($_POST['task-description'][$i]),
							'task_month'	             => strtoupper($_POST['task-month'][$i]),
							'task_location'	             => $_POST['task-location'][$i]
						);
						
					}
				}
				else
				{
					$work_tasks_data[] = array(
							'child_control_no'	         => strtoupper($_POST['childidno']),
							'task'	                     => '',
							'task_description'	         => '',
							'task_month'	             => '',
							'task_location'	             => ''
						);
				}

				$this->db->insert_batch('tbl_work_tasks',$work_tasks_data);	
				

				if(isset($_POST['supervise']))
				{
					$work_supervisor_data = array();
					for ($i = 0; $i < count($_POST['supervise']); $i++){
						$work_supervisor_data[$i] = array(
							'child_control_no'	         => strtoupper($_POST['childidno']),
							'supervises_work'	         => $_POST['supervise'][$i],
							'supervisor_name'	         => strtoupper($_POST['supervisename'][$i])
						);
						
					}
				}
				else
				{
					$work_supervisor_data[] = array(
						'child_control_no'	         => strtoupper($_POST['childidno']),
						'supervises_work'	         => '',
						'supervisor_name'	         => ''
					);
				}

				$this->db->insert_batch('tbl_work_supervisor',$work_supervisor_data);					



			$profile_family_data = array();
			for ($i = 0; $i < count($_POST['familylastname']); $i++){
				$profile_family_data[$i] = array(
					'child_control_no'	         => strtoupper($_POST['childidno']),
					'family_last_name'	         => strtoupper($_POST['familylastname'][$i]),
					'family_first_name'	         => strtoupper($_POST['familyfirstname'][$i]),
					'family_relationship'	     => strtoupper($_POST['familyrelationship'][$i]),
					'family_sex'	             => $_POST['familysex'][$i],
					'family_age'	             => $_POST['familyage'][$i],
					'family_civil_status'	     => $_POST['civilstatus'][$i],
					'solo_parent'	             => $_POST['soloparent'][$i],
					'educational_attainment'	 => $_POST['highestattainment'][$i],
					'occupation'	             => strtoupper($_POST['occupation'][$i]),
					'estimated_monthly_income'	 => $_POST['familymonthlyincome'][$i],
					'skills'	                 => strtoupper($_POST['skills'][$i]),
					'whereabouts'	             => strtoupper($_POST['whereabouts'][$i]),
					'family_type_disability'	 => strtoupper($_POST['familytypeofdisability'][$i])
				);
				
			}

			$this->db->insert_batch('tbl_profile_family',$profile_family_data);	


			$profile_family_4ps_data = array(
				'child_control_no'    => strtoupper($this->input->post('childidno')),
				'part_of_4ps'         => $this->input->post('4ps'),
				'household_id_number' => $this->input->post('householdidnumber')
			);

			

			$services_availed_data = array();

			for ($i=0; $i < count($_POST['alreadyavailed']) ; $i++){ 
				$services_availed_data[$i] = array(
					'child_control_no'	           => strtoupper($_POST['childidno']),
					'services_already_availed'     => strtoupper($_POST['alreadyavailed'][$i]),
					'availed_source_of_assistance' => strtoupper($_POST['servicesavailedsource'][$i]),
					'year_availed'                 => $_POST['yearavailed'][$i],
					'family_availed_service'       => strtoupper($_POST['familyavailedservice'][$i]),
					'services_availed_remarks'     => strtoupper($_POST['servicesavailedremarks'][$i])
				);
			}

			$this->db->insert_batch('tbl_services_availed',$services_availed_data);

			


			$assistance_requested_data = array();

			for($i=0; $i < count($_POST['assistancerequested']) ; $i++){
				$assistance_requested_data[$i] = array(
					'child_control_no'	             => strtoupper($_POST['childidno']),
					'assistance_requested'           => strtoupper($_POST['assistancerequested'][$i]),
					'requested_source_of_assistance' => strtoupper($_POST['requestedassistancesource'][$i]),
					'start_assistance'               => $_POST['startassistance'][$i],
					'end_assistance'                 => $_POST['endassistance'][$i],
					'family_requested_assistance'    => strtoupper($_POST['familyrequestedassistance'][$i]),
					'requested_assistance_remarks'   => strtoupper($_POST['assistanceremarks'][$i])
				);
			}

			$this->db->insert_batch('tbl_requested_assistance',$assistance_requested_data);




			$this->db->insert('tbl_profile_family_4ps', $profile_family_4ps_data);
			$this->db->insert('tbl_personal_info', $personal_info_data);
			$this->db->insert('tbl_educational_background', $educational_background_data);
			$this->db->insert('tbl_health_information', $health_information_data);
			$this->db->insert('tbl_nature_location_work', $nature_location_work_data);
			$this->db->insert('tbl_child_record', $data);


			return "success";
		}
		else
		{
			$this->db->flush_cache();
			return "exists";
		}
	}

	public function read_record(){
		$data = $this->db->query(" 
			
			
						SELECT tbl_child_record.child_control_no, 
					           regional_office,
					       	   field_office,
					      	   year,
					       	   name_of_enumerator,
					       	   date_of_interview,
					       	   last_name,
					       	   first_name,
					       	   middle_name,
					       	   suffix,
					       	   pa_region,
					       	   pa_province,
					           pa_district,
					       	   pa_municipality,
					       	   pa_barangay,
					       	   pa_sitio,
					       	   phone_no,
						       sex,
						       date_of_birth,
						       date_of_birth_estimation,
						       age,
						       birth_certificate,
						       place_of_birth,
						       pob_region,
						       pob_province,
						       pob_district,
						       pob_municipality,
						       pob_barangay,
						       pob_sitio,
					           religion,
					           ip_household,
						       living_with,
						       relative_last_name,
						       relative_first_name,
						       relative_middle_name,
						       relative_suffix,
						       relative_relationship,
						       living_with_reason,
						       household_material,
						       gone_to_school,
						       attending_school,
						       learning_reference_no,
						       highest_grade_completed,
						       form_of_education,
						       age_stopped_schooling,
						       drop_out_reason,
						       have_disability,
						       disability,
						       further_assessment_disability,
						       height,
						       weight,
						       suffered_ailments,
						       further_assessment_medical,
						       family_ailments,
					           employer_name,
					           employer_contact,
					           employer_region,
					           employer_province,
					           employer_municipality,
					           employer_barangay,
					           employer_sitio,
					           work_arrangement,
					           work_hrs_per_day,
					           work_hrs_per_week,
					           work_time_start,
					           work_start_partofday,
					           work_time_end,
					           work_end_partofday,
					           age_started_working,
					           hazards,
					           basis_of_payment,
					           average_monthly_income,
					           do_with_earnings,
					           does_supervise_work,

					           part_of_4ps,
					           household_id_number

					FROM tbl_child_record

					JOIN tbl_personal_info ON (tbl_child_record.child_control_no = tbl_personal_info.child_control_no)
					JOIN tbl_educational_background ON (tbl_educational_background.child_control_no = tbl_child_record.child_control_no)
					JOIN tbl_health_information ON (tbl_health_information.child_control_no = tbl_child_record.child_control_no)
					JOIN tbl_nature_location_work ON (tbl_nature_location_work.child_control_no = tbl_child_record.child_control_no)
					JOIN tbl_profile_family ON (tbl_profile_family.child_control_no = tbl_child_record.child_control_no)
					JOIN tbl_profile_family_4ps ON (tbl_profile_family_4ps.child_control_no = tbl_child_record.child_control_no)

					GROUP BY tbl_child_record.child_control_no




			");
		return $data->result();

	}


	public function read_work_tasks(){
		$data = $this->db->query("

				SELECT *
				FROM tbl_work_tasks


			");

		return array(
					 'query' => $data->result(),
					 'rows'  => $data->num_rows()
					);
	}

	public function read_work_supervisor(){
		$data = $this->db->query("

				SELECT *
				FROM tbl_work_supervisor


			");

		return array(
					 'query' => $data->result(),
					 'rows'  => $data->num_rows()
					);
	}


	public function read_family_profile(){
		$data = $this->db->query("

				SELECT  *
				FROM tbl_profile_family


			");

		return array(
					 'query' => $data->result(),
					 'rows'  => $data->num_rows()
					);
	}



	public function read_services_availed(){
		$data = $this->db->query("

				SELECT  *
				FROM tbl_services_availed


			");
		return array(
					 'query' => $data->result(),
					 'rows'  => $data->num_rows()
					);
	}

	public function read_requested_assistance(){
		$data = $this->db->query("

				SELECT  *
				FROM tbl_requested_assistance


			");
		return array(
					 'query' => $data->result(),
					 'rows'  => $data->num_rows()
					);
	}


	public function import_excel($childIdNo, $child_record, $personal_info, $educational_background, $health_information, $nature_location_work, $work_tasks, $work_supervisor, $profile_family, $profile_family_4ps, $services_availed, $requested_assistance)
	{

		if($childIdNo != null)
		{
			$this->db->insert_batch('tbl_child_record', $child_record);
			$this->db->insert_batch('tbl_personal_info', $personal_info);
			$this->db->insert_batch('tbl_educational_background', $educational_background);
			$this->db->insert_batch('tbl_health_information', $health_information);
			$this->db->insert_batch('tbl_nature_location_work', $nature_location_work);
			$this->db->insert_batch('tbl_work_tasks', $work_tasks);
			$this->db->insert_batch('tbl_work_supervisor', $work_supervisor);
			$this->db->insert_batch('tbl_profile_family', $profile_family);
			$this->db->insert_batch('tbl_profile_family_4ps', $profile_family_4ps);
			$this->db->insert_batch('tbl_services_availed', $services_availed);
			$this->db->insert_batch('tbl_requested_assistance', $requested_assistance);

			return "success";

		}
		else
		{
			$this->db->flush_cache();
			return "exists";
		}
 


		
	}

	public function export()
	{
		$this->load->model('Encode_M');
		$this->load->library('Excel');
	}













	// public function update_log($data){

	// 	$datas = $this->db->get('tbl_log');



	// 	if(empty($datas)){
	// 		return "empty";	

	// 	}else{
	// 		$this->db->flush_cache();
	// 		$this->db->where('log_id',$data['id']);
	// 		$this->db->update('tbl_log',$data['data']);
	// 		return "success";
	// 	}
		
	
// SELECT family_last_name, family_first_name, family_relationship, family_sex, family_age, family_civil_status, solo_parent, educational_attainment, occupation, estimated_monthly_income, skills, whereabouts, family_type_disability FROM tbl_profile_family
		
	// }

	// public function delete_log($id){    
	// 	$query = $this->db->query(" DELETE FROM tbl_log WHERE log_id = '$id' ");
	// 	return $query;	
	// }

	// public function fetch_log(){
	// 	$data = $this->db->query(" SELECT * FROM tbl_log ");
	// 	return $data->result();
	// }

}