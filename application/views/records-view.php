<style type="text/css">
	th,td{
		white-space: nowrap;
	}
</style>

<section role="main" class="content-body">
	<header class="page-header">
		<h2>Records</h2>
	</header>
	<section class="panel">
		<div><a href="<?=base_url()?>records/export"><input type="button" class="btn btn-primary" name="export" value="Export Spreadsheet"></a></div><br>
		<div class="panel-body">
			<table class="table table-bordered table-striped  mb-none" id="datatable-default">
				<thead>
					<tr>
						<th>Regional Office</th>
						<th>Field Office</th>
						<th>Child's ID No.</th>
						<th>Name</th>
						<th>Present Address - Region</th>
						<th>Present Address - Province</th>
						<th>Present Address - District</th>
						<th>Present Address - Municipality/City</th>
						<th>Present Address - Barangay</th>
						<th>Present Address - Purok/Sitio/Block/Zone</th>
						<th>Phone/Mobile Contact Number</th>
						<th>Sex</th>
						<th>Date of Birth</th>
						<th>Date of Birth - Actual or Estimate</th>
						<th>Age</th>
						<th>Birth Certificate</th>
						<th>Place of Birth</th>
						<th>Place of Birth - Region</th>
						<th>Place of Birth - Province</th>
						<th>Place of Birth - District</th>
						<th>Place of Birth - Municipality/City</th>
						<th>Place of Birth - Barangay</th>
						<th>Place of Birth - Purok/Sitio/Block/Zone</th>
						<th>Religion</th>
						<th>IP?</th>
						<th>Living with</th>
						<th>If living with relatives/non-relatives, specify who</th>
						<th>If living with relatives/non-relatives, specify reason</th>
						<th>Household Dwelling Unit</th>
						<th>Have you ever gone to school?</th>
						<th>If Yes, are you attending school at present?</th>
						<th>If Yes, Learning Reference Number</th>
						<th>Highest grade completed</th>
						<th>Form of education</th>
						<th>If he/she quit schooling, age when he/she stopped schooling</th>
						<th>Reason/s for never attending/dropping out of school</th>
						<th>Does the child have any disability?</th>
						<th>If Yes, specify</th>
						<th>For further assessment of disability?</th>
						<th>General health status - Height (cm)</th>
						<th>General health status - Weight (kg)</th>
						<th>Medical condition/common health ailment</th>
						<th>For further assessment of medical condition?</th>
						<th>Family history of ailments</th>
						<th>Task/s that the child perform/s</th>
						<th>Name of employer, financier, land owner</th>
						<th>Contact Details of Employer</th>
						<th>Address of Employer, Financier or Landowner (Region)</th>
						<th>Address of Employer, Financier or Landowner (Province)</th>
						<th>Address of Employer, Financier or Landowner (City/Municipality)</th>
						<th>Address of Employer, Financier or Landowner (Barangay)</th>
						<th>Address of Employer, Financier or Landowner (Purok/Sitio/Block/Zone)</th>
						<th>What is the nature of your present work arrangement?</th>
						<th>No. of working hours per day</th>
						<th>No. of days per week</th>
						<th>Time of Work</th>
						<th>Age started working</th>
						<th>Exposure to risks and hazards</th>
						<th>Term or basis of payment</th>
						<th>How much is your average monthly income</th>
						<th>What do you usually do with your earnings?</th>
						<th>Does an adult supervise your work?</th>
						<th>Who supervises your work?</th>
						<?php for($i = 0; $i < 12; $i++):?>
							<th>Profile of the Family - <?= $i+1 ?></th>
						<?php endfor;?>
						<th>Is your household currently a part of the 4ps?</th>
						<th>Household ID Number</th>
						<?php for($i = 0; $i < 12; $i++):?>
							<th>Services Already Availed by the Family - <?= $i+1 ?></th>
						<?php endfor;?>
						<?php for($i = 0; $i < 12; $i++):?>
							<th>Services Requested by the Family - <?= $i+1 ?></th>
						<?php endfor;?>
						<th>Name of Enumerator</th>
						<th>Date of Interview</th>
					</tr>
				</thead>
				<tbody>
				<?php foreach($records as $data):?>
					<tr>
						<td><?=$data->regional_office?></td>
						<td><?=$data->field_office?></td>
						<td><?=$data->child_control_no?></td>
						<td><?=$data->last_name?>,
							<?=$data->first_name?>
							<?=$data->middle_name?>
							<?=$data->suffix?></td>

						<td><?=$data->pa_region?></td>
						<td><?=$data->pa_province?></td>
						<td><?=$data->pa_district?></td>
						<td><?=$data->pa_municipality?></td>
						<td><?=$data->pa_barangay?></td>
						<td><?=$data->pa_sitio?></td>
						<td><?=$data->phone_no?></td>
						<td><?=$data->sex?></td>
						<td><?=$data->date_of_birth?></td>
						<td><?=$data->date_of_birth_estimation?></td>
						<td><?=$data->age?></td>
						<td><?=$data->birth_certificate?></td>
						<td><?=$data->place_of_birth?></td>
						<td><?=$data->pob_region?></td>
						<td><?=$data->pob_province?></td>
						<td><?=$data->pob_district?></td>
						<td><?=$data->pob_municipality?></td>
						<td><?=$data->pob_barangay?></td>
						<td><?=$data->pob_sitio?></td>
						<td><?=$data->religion?></td>
						<td><?=$data->ip_household?></td>
						<td><?=$data->living_with?></td>
						<td><?=$data->relative_last_name?>,
							<?=$data->relative_first_name?>
							<?=$data->relative_middle_name?>
							<?=$data->relative_suffix?><br>
							<?=$data->relative_relationship?></td>
						<td><?=$data->living_with_reason?></td>
						<td><?=$data->household_material?></td>
						<td><?=$data->gone_to_school?></td>
						<td><?=$data->attending_school?></td>
						<td><?=$data->learning_reference_no?></td>
						<td><?=$data->highest_grade_completed?></td>
						<td><?=$data->form_of_education?></td>
						<td><?=$data->age_stopped_schooling?></td>
						<td><?=nl2br($data->drop_out_reason);?></td>
						<td><?=$data->have_disability?></td>
						<td><?=nl2br($data->disability);?></td>
						<td><?=$data->further_assessment_disability?></td>
						<td><?=$data->height?></td>
						<td><?=$data->weight?></td>
						<td><?=nl2br($data->suffered_ailments)?></td>
						<td><?=$data->further_assessment_medical?></td>
						<td><?=$data->family_ailments?></td>


						<td>
							<?php for($i=0; $i < $numrows_wt; $i++):?>
								<?php if($data->child_control_no == $worktasks[$i]->child_control_no):?>
									<?php if(!($worktasks[$i]->task=='')):?>	
										<?=$worktasks[$i]->task?>
										<?=$worktasks[$i]->task_description?>
										<?=$worktasks[$i]->task_month?>
										<?=$worktasks[$i]->task_location?>
										<br>
									<?php endif;?>
								<?php else:?>
									<?php continue;?>
								<?php endif;?>	
							<?php endfor;?>
						</td>

						<td><?=$data->employer_name?></td>
						<td><?=$data->employer_contact?></td>
						<td><?=$data->employer_region?></td>
						<td><?=$data->employer_province?></td>
						<td><?=$data->employer_municipality?></td>
						<td><?=$data->employer_barangay?></td>
						<td><?=$data->employer_sitio?></td>
						<td><?=$data->work_arrangement?></td>
						<td><?=$data->work_hrs_per_day?></td>
						<td><?=$data->work_hrs_per_week?></td>
						<td>
							<?=$data->work_time_start?>
							<?=$data->work_start_partofday?> to
							<?=$data->work_time_end?>	
							<?=$data->work_end_partofday?></td>
						<td><?=$data->age_started_working?></td>
						<td><?=nl2br($data->hazards)?></td>
						<td><?=nl2br($data->basis_of_payment)?></td>
						<td><?=$data->average_monthly_income?></td>
						<td><?=nl2br($data->do_with_earnings)?></td>
						<td><?=$data->does_supervise_work?></td>
						

						<td>
							<?php for($i=0; $i < $numrows_ws; $i++):?>
								<?php if($data->child_control_no == $worksupervisor[$i]->child_control_no):?>
									<?php if(!($worksupervisor[$i]->supervises_work=='')):?>	
										<?=$worksupervisor[$i]->supervises_work?>
										<?=$worksupervisor[$i]->supervisor_name?>
										<br>
									<?php endif;?>
								<?php else:?>
									<?php continue;?>
								<?php endif;?>	
							<?php endfor;?>
						</td>



						<?php $count = 0;?>
						<?php for($i=0; $i < $numrows_fp; $i++):?>
							<?php if($data->child_control_no == $familyprofile[$i]->child_control_no):?>
								<?php if(!($familyprofile[$i]->family_last_name=='')):?>
								<td>
									<?=$familyprofile[$i]->family_last_name?>, 
									<?=$familyprofile[$i]->family_first_name?><br>
									<?=$familyprofile[$i]->family_relationship?><br>
									<?=$familyprofile[$i]->family_sex?><br>
									<?=$familyprofile[$i]->family_age?><br>
									<?=$familyprofile[$i]->family_civil_status?><br>
									<?=$familyprofile[$i]->solo_parent?><br>
									<?=$familyprofile[$i]->educational_attainment?><br>
									<?=$familyprofile[$i]->occupation?><br>
									<?=$familyprofile[$i]->estimated_monthly_income?><br>
									<?=$familyprofile[$i]->skills?><br>
									<?=$familyprofile[$i]->whereabouts?><br>
									<?=$familyprofile[$i]->family_type_disability?><br>
								</td>
								<?php else:?>
									<td></td>
								<?php endif;?>
								<?php $count++;?>
							<?php else:?>
								<?php continue;?>
							<?php endif;?>	
						<?php endfor;?>
						<?php for($j=$count; $j < 12; $j++):?>
							<td></td>
						<?php endfor;?>
						<?php $count=0;?>

						<td><?=$data->part_of_4ps?></td>
						<td><?=$data->household_id_number?></td>



						<?php $count1 = 0;?>
						<?php for($i=0; $i < $numrows_sa; $i++):?>
							<?php if($data->child_control_no == $servicesavailed[$i]->child_control_no):?>
								<?php if(!($servicesavailed[$i]->services_already_availed=='')):?>
								<td>
									<?=$servicesavailed[$i]->services_already_availed?><br>
									<?=$servicesavailed[$i]->availed_source_of_assistance?><br>
									<?=$servicesavailed[$i]->year_availed?><br>
									<?=$servicesavailed[$i]->family_availed_service?><br>
									<?=$servicesavailed[$i]->services_availed_remarks?><br>
								</td>
								<?php else:?>
									<td></td>
								<?php endif;?>
								<?php $count1++;?>
							<?php else:?>
								<?php continue;?>
							<?php endif;?>	
						<?php endfor;?>
						<?php for($j=$count1; $j < 12; $j++):?>
							<td></td>
						<?php endfor;?>
						<?php $count1=0;?>



						<?php $count2 = 0;?>
						<?php for($i=0; $i < $numrows_ra; $i++):?>
							<?php if($data->child_control_no == $requestedassistance[$i]->child_control_no):?>
								<?php if(!($requestedassistance[$i]->assistance_requested=='')):?>
								<td>
									<?=$requestedassistance[$i]->assistance_requested?><br>
									<?=$requestedassistance[$i]->requested_source_of_assistance?><br>
									<?=$requestedassistance[$i]->start_assistance?> - 
									<?=$requestedassistance[$i]->end_assistance?><br>
									<?=$requestedassistance[$i]->family_requested_assistance?><br>
									<?=$requestedassistance[$i]->requested_assistance_remarks?><br>
								</td>
								<?php else:?>
									<td></td>
								<?php endif;?>
								<?php $count2++;?>
							<?php else:?>
								<?php continue;?>
							<?php endif;?>	
						<?php endfor;?>
						<?php for($j=$count2; $j < 12; $j++):?>
							<td></td>
						<?php endfor;?>
						<?php $count2=0;?>
 

						<td><?=$data->name_of_enumerator?></td>
						<td><?=$data->date_of_interview?></td>
					</tr>
				<?php endforeach;?>
				</tbody>
			</table>
		</div>
	</section>
</section>
