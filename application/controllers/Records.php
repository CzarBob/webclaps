<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Records extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Encode_M');
		$this->load->library('Excel');

	}
	public function index()
	{
		if($this->session->userdata('LOGGED') == true)
		{

		$wt   = $this->Encode_M->read_work_tasks();	
		$ws   = $this->Encode_M->read_work_supervisor();	
		$fp   = $this->Encode_M->read_family_profile();
		$sa   = $this->Encode_M->read_services_availed();
		$ra   = $this->Encode_M->read_requested_assistance();


		$data['user']                   = $this->session->userdata('username');
		$data['records']                = $this->Encode_M->read_record();
		$data['numrows_ws']             = $ws['rows'];
		$data['worksupervisor']			= $ws['query'];
		$data['numrows_wt']             = $wt['rows'];
		$data['worktasks']				= $wt['query'];
		$data['numrows_fp']             = $fp['rows'];
		$data['familyprofile']		    = $fp['query'];
		$data['numrows_sa']             = $sa['rows'];
		$data['servicesavailed']		= $sa['query'];
		$data['numrows_ra']             = $ra['rows'];
		$data['requestedassistance']	= $ra['query'];
		

		$this->load->view('header', $data);
		$this->load->view('records-view', $data);
		$this->load->view('footer');
		}
		else
		{
			redirect(base_url());
		}
	}


	public function export()
	{
		$object = new PHPExcel();


		$first_row = array("font" => array( "bold" => true),'alignment' => array(
            'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER, 'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER
        ));

		$col_child_record           = array('fill' => array('type' => PHPExcel_Style_Fill::FILL_SOLID,'color' => array('rgb' => 'FFE699')));
		$col_personal_info          = array('fill' => array('type' => PHPExcel_Style_Fill::FILL_SOLID,'color' => array('rgb' => 'A9D08E')));
		$col_educational_background = array('fill' => array('type' => PHPExcel_Style_Fill::FILL_SOLID,'color' => array('rgb' => 'F8CBAD')));
		$col_health_information     = array('fill' => array('type' => PHPExcel_Style_Fill::FILL_SOLID,'color' => array('rgb' => '9BC2E6')));
		$col_nature_location_work   = array('fill' => array('type' => PHPExcel_Style_Fill::FILL_SOLID,'color' => array('rgb' => '9966FF')));	
		$col_profile_family         = array('fill' => array('type' => PHPExcel_Style_Fill::FILL_SOLID,'color' => array('rgb' => 'FFC000')));		
		$col_services               = array('fill' => array('type' => PHPExcel_Style_Fill::FILL_SOLID,'color' => array('rgb' => '808080')));			




		$object->setActiveSheetIndex(0);


		$object->getActiveSheet()
			   ->getStyle('A1:CY1')
			   ->applyFromArray($first_row);

		$object->getActiveSheet()
			   ->getStyle('A1:BR1')
			   ->getAlignment()
			   ->setWrapText(true); 



		$object->getActiveSheet()
			   ->getStyle('A1:C1')
			   ->applyFromArray($col_child_record)
			   ->getBorders()
               ->getBottom()
               ->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN);

		$object->getActiveSheet()
			   ->getStyle('D1:AC1')
			   ->applyFromArray($col_personal_info)
			   ->getBorders()
               ->getBottom()
               ->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN);

		$object->getActiveSheet()
			   ->getStyle('AD1:AJ1')
			   ->applyFromArray($col_educational_background)
			   ->getBorders()
               ->getBottom()
               ->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN);

		$object->getActiveSheet()
			   ->getStyle('AK1:AR1')
			   ->applyFromArray($col_health_information)
			   ->getBorders()
               ->getBottom()
               ->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN);

		$object->getActiveSheet()
			   ->getStyle('AS1:BK1')
			   ->applyFromArray($col_nature_location_work)
			   ->getBorders()
               ->getBottom()
               ->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN);

		$object->getActiveSheet()
			   ->getStyle('BL1:BY1')
			   ->applyFromArray($col_profile_family)
			   ->getBorders()
               ->getBottom()
               ->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN);

		$object->getActiveSheet()
			   ->getStyle('BZ1:CY1')
			   ->applyFromArray($col_services)
			   ->getBorders()
               ->getBottom()
               ->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN);

        $object->getActiveSheet()
        	   ->freezePane("E2");


        $object->getActiveSheet()->getColumnDimension('A')->setWidth(9.71);
		$object->getActiveSheet()->getColumnDimension('B')->setWidth(17);
		$object->getActiveSheet()->getColumnDimension('C')->setWidth(29);
		$object->getActiveSheet()->getColumnDimension('D')->setWidth(34.29);
		$object->getActiveSheet()->getColumnDimension('E')->setWidth(22);
		$object->getActiveSheet()->getColumnDimension('F')->setWidth(22);
		$object->getActiveSheet()->getColumnDimension('G')->setWidth(22);
		$object->getActiveSheet()->getColumnDimension('H')->setWidth(22);
		$object->getActiveSheet()->getColumnDimension('I')->setWidth(22);
		$object->getActiveSheet()->getColumnDimension('J')->setWidth(22);
		$object->getActiveSheet()->getColumnDimension('K')->setWidth(22);
		$object->getActiveSheet()->getColumnDimension('L')->setWidth(9.43);
		$object->getActiveSheet()->getColumnDimension('M')->setWidth(14.29);
		$object->getActiveSheet()->getColumnDimension('N')->setWidth(21.29);
		$object->getActiveSheet()->getColumnDimension('O')->setWidth(7.86);
		$object->getActiveSheet()->getColumnDimension('P')->setWidth(12.71);
		$object->getActiveSheet()->getColumnDimension('Q')->setWidth(20);
		$object->getActiveSheet()->getColumnDimension('R')->setWidth(20);
		$object->getActiveSheet()->getColumnDimension('S')->setWidth(20);
		$object->getActiveSheet()->getColumnDimension('T')->setWidth(20);
		$object->getActiveSheet()->getColumnDimension('U')->setWidth(20);
		$object->getActiveSheet()->getColumnDimension('V')->setWidth(20);
		$object->getActiveSheet()->getColumnDimension('W')->setWidth(23);
		$object->getActiveSheet()->getColumnDimension('X')->setWidth(17.57);
		$object->getActiveSheet()->getColumnDimension('Y')->setWidth(10.86);
		$object->getActiveSheet()->getColumnDimension('Z')->setWidth(18.71);
		$object->getActiveSheet()->getColumnDimension('AA')->setWidth(23.43);
		$object->getActiveSheet()->getColumnDimension('AB')->setWidth(24.86);
		$object->getActiveSheet()->getColumnDimension('AC')->setWidth(21.14);
		$object->getActiveSheet()->getColumnDimension('AD')->setWidth(14.71);
		$object->getActiveSheet()->getColumnDimension('AE')->setWidth(21.71);
		$object->getActiveSheet()->getColumnDimension('AF')->setWidth(17.14);
		$object->getActiveSheet()->getColumnDimension('AG')->setWidth(13.86);
		$object->getActiveSheet()->getColumnDimension('AH')->setWidth(17.71);
		$object->getActiveSheet()->getColumnDimension('AI')->setWidth(26.71);
		$object->getActiveSheet()->getColumnDimension('AJ')->setWidth(26.57);
		$object->getActiveSheet()->getColumnDimension('AK')->setWidth(17.29);
		$object->getActiveSheet()->getColumnDimension('AL')->setWidth(23.57);
		$object->getActiveSheet()->getColumnDimension('AM')->setWidth(22.29);
		$object->getActiveSheet()->getColumnDimension('AN')->setWidth(19.29);
		$object->getActiveSheet()->getColumnDimension('AO')->setWidth(17.14);
		$object->getActiveSheet()->getColumnDimension('AP')->setWidth(19.86);
		$object->getActiveSheet()->getColumnDimension('AQ')->setWidth(19.86);
		$object->getActiveSheet()->getColumnDimension('AR')->setWidth(18.71);
		$object->getActiveSheet()->getColumnDimension('AS')->setWidth(80.57);
		$object->getActiveSheet()->getColumnDimension('AT')->setWidth(29.43);
		$object->getActiveSheet()->getColumnDimension('AU')->setWidth(25);
		$object->getActiveSheet()->getColumnDimension('AV')->setWidth(33);
		$object->getActiveSheet()->getColumnDimension('AW')->setWidth(33);
		$object->getActiveSheet()->getColumnDimension('AX')->setWidth(33);
		$object->getActiveSheet()->getColumnDimension('AY')->setWidth(33);
		$object->getActiveSheet()->getColumnDimension('AZ')->setWidth(33);
		$object->getActiveSheet()->getColumnDimension('BA')->setWidth(34.57);
		$object->getActiveSheet()->getColumnDimension('BB')->setWidth(16.57);
		$object->getActiveSheet()->getColumnDimension('BC')->setWidth(12.57);
		$object->getActiveSheet()->getColumnDimension('BD')->setWidth(19);
		$object->getActiveSheet()->getColumnDimension('BE')->setWidth(12.86);
		$object->getActiveSheet()->getColumnDimension('BF')->setWidth(17);
		$object->getActiveSheet()->getColumnDimension('BG')->setWidth(23.14);
		$object->getActiveSheet()->getColumnDimension('BH')->setWidth(19.14);
		$object->getActiveSheet()->getColumnDimension('BI')->setWidth(18.43);
		$object->getActiveSheet()->getColumnDimension('BJ')->setWidth(16.86);
		$object->getActiveSheet()->getColumnDimension('BK')->setWidth(27.14);

		$object->getActiveSheet()->getColumnDimension('BL')->setWidth(40.71);
		$object->getActiveSheet()->getColumnDimension('BM')->setWidth(40.71);
		$object->getActiveSheet()->getColumnDimension('BN')->setWidth(40.71);
		$object->getActiveSheet()->getColumnDimension('BO')->setWidth(40.71);
		$object->getActiveSheet()->getColumnDimension('BP')->setWidth(40.71);
		$object->getActiveSheet()->getColumnDimension('BQ')->setWidth(40.71);
		$object->getActiveSheet()->getColumnDimension('BR')->setWidth(40.71);
		$object->getActiveSheet()->getColumnDimension('BS')->setWidth(40.71);
		$object->getActiveSheet()->getColumnDimension('BT')->setWidth(40.71);
		$object->getActiveSheet()->getColumnDimension('BU')->setWidth(40.71);
		$object->getActiveSheet()->getColumnDimension('BV')->setWidth(40.71);
		$object->getActiveSheet()->getColumnDimension('BW')->setWidth(40.71);

		$object->getActiveSheet()->getColumnDimension('BX')->setWidth(41.14);
		$object->getActiveSheet()->getColumnDimension('BY')->setWidth(41.14);

		$object->getActiveSheet()->getColumnDimension('BZ')->setWidth(79.86);
		$object->getActiveSheet()->getColumnDimension('CA')->setWidth(79.86);
		$object->getActiveSheet()->getColumnDimension('CB')->setWidth(79.86);
		$object->getActiveSheet()->getColumnDimension('CC')->setWidth(79.86);
		$object->getActiveSheet()->getColumnDimension('CD')->setWidth(79.86);
		$object->getActiveSheet()->getColumnDimension('CE')->setWidth(79.86);
		$object->getActiveSheet()->getColumnDimension('CF')->setWidth(79.86);
		$object->getActiveSheet()->getColumnDimension('CG')->setWidth(79.86);
		$object->getActiveSheet()->getColumnDimension('CH')->setWidth(79.86);
		$object->getActiveSheet()->getColumnDimension('CI')->setWidth(79.86);
		$object->getActiveSheet()->getColumnDimension('CJ')->setWidth(79.86);
		$object->getActiveSheet()->getColumnDimension('CK')->setWidth(79.86);

		$object->getActiveSheet()->getColumnDimension('CL')->setWidth(79.86);
		$object->getActiveSheet()->getColumnDimension('CM')->setWidth(79.86);
		$object->getActiveSheet()->getColumnDimension('CN')->setWidth(79.86);
		$object->getActiveSheet()->getColumnDimension('CO')->setWidth(79.86);
		$object->getActiveSheet()->getColumnDimension('CP')->setWidth(79.86);
		$object->getActiveSheet()->getColumnDimension('CQ')->setWidth(79.86);
		$object->getActiveSheet()->getColumnDimension('CR')->setWidth(79.86);
		$object->getActiveSheet()->getColumnDimension('CS')->setWidth(79.86);
		$object->getActiveSheet()->getColumnDimension('CT')->setWidth(79.86);
		$object->getActiveSheet()->getColumnDimension('CU')->setWidth(79.86);
		$object->getActiveSheet()->getColumnDimension('CV')->setWidth(79.86);
		$object->getActiveSheet()->getColumnDimension('CW')->setWidth(79.86);


		$object->getActiveSheet()->getColumnDimension('CX')->setWidth(24);
		$object->getActiveSheet()->getColumnDimension('CY')->setWidth(18.57);

		// $object->getActiveSheet()->setAutoFilter($object->getActiveSheet()->calculateWorksheetDimension());



		$letters = array('A','B','C', 'D', 'E', 'F', 
						 'G', 'H', 'I', 'J','L', 'K',
						 'M','N','O','P', 'Q', 'R', 
						 'S','T', 'U', 'V', 'W', 'X',
						 'Y', 'Z','AA','AB','AC','AD',
						 'AE','AF','AG','AH','AI','AJ',
						 'AK','AL','AM','AN','AO','AP',
						 'AQ','AR','AS','AT','AU','AV',
						 'AW','AX','AY','AZ','BA','BB',
						 'BC','BD','BE','BF','BG','BH',
						 'BI','BJ','BK','BL','BM','BN',
						 'BO','BP','BQ','BR','BS', 'BT',
						 'BU', 'BV', 'BW', 'BX', 'BY', 
						 'BZ','CA', 'CB', 'CC', 'CD', 
						 'CE', 'CF', 'CG', 'CH','CI', 'CJ', 
						 'CK', 'CL', 'CM', 'CN', 'CO', 'CP',
						 'CQ', 'CR', 'CS', 'CT', 'CU', 'CV',
						 'CW', 'CX', 'CY', 'CZ'
						);	   

		$left_align   = array('alignment' => array('horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_LEFT,'vertical' => PHPExcel_Style_Alignment::VERTICAL_TOP));

		$center_align = array('alignment' => array('horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_LEFT,'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER));

		$min_center   = array('alignment' => array('horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,'vertical' => PHPExcel_Style_Alignment::VERTICAL_TOP),array('borders' => array('allborders' => array('style' => PHPExcel_Style_Border::BORDER_THIN))));


		$object->getActiveSheet()
			   ->getStyle('A')
			   ->applyFromArray($min_center);

		$object->getActiveSheet()
			   ->getStyle('L')
			   ->applyFromArray($min_center);

		$object->getActiveSheet()
			   ->getStyle('P')
			   ->applyFromArray($min_center);

		$object->getActiveSheet()
			   ->getStyle('Y')
			   ->applyFromArray($min_center);

		$object->getActiveSheet()
			   ->getStyle('AD')
			   ->applyFromArray($min_center);

		$object->getActiveSheet()
			   ->getStyle('AE')
			   ->applyFromArray($min_center);

		$object->getActiveSheet()
			   ->getStyle('AI')
			   ->applyFromArray($min_center);

		$object->getActiveSheet()
			   ->getStyle('AJ')
			   ->applyFromArray($min_center);

		$object->getActiveSheet()
			   ->getStyle('AK')
			   ->applyFromArray($min_center);

		$object->getActiveSheet()
			   ->getStyle('AL')
			   ->applyFromArray($min_center);

		$object->getActiveSheet()
			   ->getStyle('AM')
			   ->applyFromArray($min_center);

		$object->getActiveSheet()
			   ->getStyle('AN')
			   ->applyFromArray($min_center);

		$object->getActiveSheet()
			   ->getStyle('AO')
			   ->applyFromArray($min_center);

		$object->getActiveSheet()
			   ->getStyle('AP')
			   ->applyFromArray($min_center);

		$object->getActiveSheet()
			   ->getStyle('AQ')
			   ->applyFromArray($min_center);

		$object->getActiveSheet()
			   ->getStyle('AR')
			   ->applyFromArray($min_center);

		$object->getActiveSheet()
			   ->getStyle('AS')
			   ->applyFromArray($min_center);

		$object->getActiveSheet()
			   ->getStyle('BB')
			   ->applyFromArray($min_center);

		$object->getActiveSheet()
			   ->getStyle('BC')
			   ->applyFromArray($min_center);

		$object->getActiveSheet()
			   ->getStyle('BD')
			   ->applyFromArray($min_center);

		$object->getActiveSheet()
			   ->getStyle('BE')
			   ->applyFromArray($min_center);

		$object->getActiveSheet()
			   ->getStyle('BF')
			   ->applyFromArray($min_center);

		$object->getActiveSheet()
			   ->getStyle('BI')
			   ->applyFromArray($min_center);

		$object->getActiveSheet()
			   ->getStyle('BJ')
			   ->applyFromArray($min_center);

		$object->getActiveSheet()
			   ->getStyle('BK')
			   ->applyFromArray($min_center);






		$object->getActiveSheet()
			   ->getStyle('BL:BW')
			   ->applyFromArray($left_align);

		$object->getActiveSheet()
			   ->getStyle('BZ:CW')
			   ->applyFromArray($left_align);	

		$object->getActiveSheet()
			   ->getStyle("BL:BW")
			   ->getFont()->setSize(7.5);

		$object->getActiveSheet()
			   ->getStyle("BZ:CW")
			   ->getFont()->setSize(7.5);



		$object->getActiveSheet()->setAutoFilter($object->getActiveSheet()->calculateWorksheetDimension());


		 // $styleArray = array(
			//   'borders' => array(
			//     'allborders' => array(
			//       'style' => PHPExcel_Style_Border::BORDER_THIN
			//     )
			//   )
			// );


		foreach($letters as $letter)
		{
			
			$object->getActiveSheet()
			   	   ->getColumnDimension($letter);

			$object->getActiveSheet()
				   ->getRowDimension(1)
				   ->setRowHeight(40); 

			$object->getActiveSheet()
					->getStyle($letter)
					->getAlignment()->setWrapText(true);

			$object->getActiveSheet()
				   ->getDefaultStyle()
				   ->applyFromArray($left_align);	

			// $object->getActiveSheet()->getStyle($letter.'1'.':'.$letter.'999')->applyFromArray($styleArray);
		   	   
		}

		foreach($object->getActiveSheet()->getRowDimensions() as $rd) 
		{ 
		    $rd->setRowHeight(78.5); 
		}




		$table_columns = array("Regional Office",
								  "Field Office",
								  "Child's ID No.",
								  "1. Name* \n Last Name, First Name, Middle \n Name",
								  "2. Present Address \n Region*",
								  "2. Present Address \n Province*",
								  "2. Present Address \n District",
								  "2. Present Address \n Municipality/City*",
								  "2. Present Address \n Barangay*",
								  "2. Present Address \n Purok/Sitio/Block/Zone",
								  "2. Present Address \n Phone/Mobile Contact Number",
								  "3. Sex*",
								  "4. Date of \n Birth*",
								  "4. Date of Birth* \n Actual or Estimate",
								  "5. Age*",
								  "6. Birth \n Certificate*",
								  "7. Place of Birth",
								  "7. Place of Birth \n Region*",
								  "7. Place of Birth \n Province*",
								  "7. Place of Birth \n District",
								  "7. Place of Birth \n Municipality/City*",
								  "7. Place of Birth \n Barangay",
								  "7. Place of Birth Purok/Sitio/Block/Zone",
								  "8. Religion*",
								  "9. IP?",
								  "10. Living with",
								  "10. If living with \n relatives/non-relatives, specify who",
								  "10. If living with \n relatives/non-relatives, specify reason",
								  "11. Household \n Dwelling Unit",
								  "12. Have you \n ever gone to \n school?*",
								  "13. If Yes, are you \n attending school at present?*",
								  "13. If Yes, \n Learning Reference Number",
								  "14. Highest grade completed",
								  "15. Form of education",
								  "16. If he/she quit schooling, age when he/she stopped schooling",
								  "17. Reason/s for never attending/dropping out of school*",
								  "18. Does the child have any disability?*",
								  "19. If Yes, specify*",
								  "20. For further assessment of disability?*",
								  "21. General health status - Height (cm)",
								  "21. General health status - Weight (kg)",
								  "22. Medical condition/common health ailment",
								  "23. For further assessment of medical condition?",
								  "24. Family history of ailments",
								  "25. Task/s that the child perform/s*",
								  "26. Name of employer, financier, land owner",
								  "27. Contact Details of Employer",
								  "28. Address of Employer, Financier or Landowner (Region)",
								  "28. Address of Employer, Financier or Landowner (Province)",
								  "28. Address of Employer, Financier or Landowner (City/Municipality)",
								  "28. Address of Employer, Financier or Landowner (Barangay)",
								  "28. Address of Employer, Financier or Landowner (Purok/Sitio/Block/Zone)",
								  "29. What is the nature of your present work arrangement?",
								  "30. No. of working hours per day*",
								  "31. No. of days per week*",
								  "32. Time of Work*",
								  "33. Age started working*",
								  "34. Exposure to risks and hazards*",
								  "35. Term or basis of payment*",
								  "36. How much is your average monthly income",
								  "37. What do you usually do with your earnings?*",
								  "38. Does an adult supervise your work?*",
								  "39. Who supervises your work?*",
								  "II. Profile of the Family - 1",
								  "II. Profile of the Family - 2",
								  "II. Profile of the Family - 3",
								  "II. Profile of the Family - 4",
								  "II. Profile of the Family - 5",
								  "II. Profile of the Family - 6",
								  "II. Profile of the Family - 7",
								  "II. Profile of the Family - 8",
								  "II. Profile of the Family - 9",
								  "II. Profile of the Family - 10",
								  "II. Profile of the Family - 11",
								  "II. Profile of the Family - 12",
								  "52. Is your household currently a part of\nthe 4ps?",
								  "53. Household ID Number",
								  "III. Services Already Availed by the Family - 1",
								  "III. Services Already Availed by the Family - 2",
								  "III. Services Already Availed by the Family - 3",
								  "III. Services Already Availed by the Family - 4",
								  "III. Services Already Availed by the Family - 5",
								  "III. Services Already Availed by the Family - 6",
								  "III. Services Already Availed by the Family - 7",
								  "III. Services Already Availed by the Family - 8",
								  "III. Services Already Availed by the Family - 9",
								  "III. Services Already Availed by the Family - 10",
								  "III. Services Already Availed by the Family - 11",
								  "III. Services Already Availed by the Family - 12",
								  "IV. Services Requested by the Family - 1",
								  "IV. Services Requested by the Family - 2",
								  "IV. Services Requested by the Family - 3",
								  "IV. Services Requested by the Family - 4",
								  "IV. Services Requested by the Family - 5",
								  "IV. Services Requested by the Family - 6",
								  "IV. Services Requested by the Family - 7",
								  "IV. Services Requested by the Family - 8",
								  "IV. Services Requested by the Family - 9",
								  "IV. Services Requested by the Family - 10",
								  "IV. Services Requested by the Family - 11",
								  "IV. Services Requested by the Family - 12",
								  "64. Name of Enumerator",
								  "65. Date of Interview"
							);

		$column = 0;

		foreach($table_columns as $field)
		{
			$object->getActiveSheet()->setCellValueByColumnAndRow($column, 1, $field);
			$column++;
		}

		$child_data = $this->Encode_M->read_record();
		$wt   = $this->Encode_M->read_work_tasks();
		$ws   = $this->Encode_M->read_work_supervisor();
		$fp   = $this->Encode_M->read_family_profile();
		$sa   = $this->Encode_M->read_services_availed();
		$ra   = $this->Encode_M->read_requested_assistance();

		$numrows_fp             = $fp['rows'];
		$familyprofile		    = $fp['query'];

		$numrows_sa             = $sa['rows'];
		$servicesavailed		= $sa['query'];

		$numrows_ra             = $ra['rows'];
		$requestedassistance    = $ra['query'];

		$numrows_wt             = $wt['rows'];
		$worktasks              = $wt['query'];

		$numrows_ws             = $ws['rows'];
		$worksupervisor         = $ws['query'];
		



		$excel_row = 2;

		foreach($child_data as $row)
		{
			$object->getActiveSheet()->setCellValueByColumnAndRow(0, $excel_row, $row->regional_office);
			$object->getActiveSheet()->setCellValueByColumnAndRow(1, $excel_row, $row->field_office);
			$object->getActiveSheet()->setCellValueByColumnAndRow(2, $excel_row, $row->child_control_no);
			$object->getActiveSheet()->setCellValueByColumnAndRow(3, $excel_row, $row->last_name.', '.$row->first_name.', '.$row->middle_name.' '.$row->suffix); //child
			$object->getActiveSheet()->setCellValueByColumnAndRow(4, $excel_row, $row->pa_region);
			$object->getActiveSheet()->setCellValueByColumnAndRow(5, $excel_row, $row->pa_province);
			$object->getActiveSheet()->setCellValueByColumnAndRow(6, $excel_row, $row->pa_district);
			$object->getActiveSheet()->setCellValueByColumnAndRow(7, $excel_row, $row->pa_municipality);
			$object->getActiveSheet()->setCellValueByColumnAndRow(8, $excel_row, $row->pa_barangay);
			$object->getActiveSheet()->setCellValueByColumnAndRow(9, $excel_row, $row->pa_sitio);
			$object->getActiveSheet()->setCellValueByColumnAndRow(10, $excel_row, $row->phone_no);
			$object->getActiveSheet()->setCellValueByColumnAndRow(11, $excel_row, $row->sex);
			$object->getActiveSheet()->setCellValueByColumnAndRow(12, $excel_row, $row->date_of_birth);
			$object->getActiveSheet()->setCellValueByColumnAndRow(13, $excel_row, $row->date_of_birth_estimation);
			$object->getActiveSheet()->setCellValueByColumnAndRow(14, $excel_row, $row->age);
			$object->getActiveSheet()->setCellValueByColumnAndRow(15, $excel_row, $row->birth_certificate);
			$object->getActiveSheet()->setCellValueByColumnAndRow(16, $excel_row, $row->place_of_birth);
			$object->getActiveSheet()->setCellValueByColumnAndRow(17, $excel_row, $row->pob_region);
			$object->getActiveSheet()->setCellValueByColumnAndRow(18, $excel_row, $row->pob_province);
			$object->getActiveSheet()->setCellValueByColumnAndRow(19, $excel_row, $row->pob_district);
			$object->getActiveSheet()->setCellValueByColumnAndRow(20, $excel_row, $row->pob_municipality);
			$object->getActiveSheet()->setCellValueByColumnAndRow(21, $excel_row, $row->pob_barangay);
			$object->getActiveSheet()->setCellValueByColumnAndRow(22, $excel_row, $row->pob_sitio);
			$object->getActiveSheet()->setCellValueByColumnAndRow(23, $excel_row, $row->religion);
			$object->getActiveSheet()->setCellValueByColumnAndRow(24, $excel_row, $row->ip_household);
			$object->getActiveSheet()->setCellValueByColumnAndRow(25, $excel_row, $row->living_with);
			$object->getActiveSheet()->setCellValueByColumnAndRow(26, $excel_row, $row->relative_last_name.", ".$row->relative_first_name."\n".$row->relative_relationship); //relative
			$object->getActiveSheet()->setCellValueByColumnAndRow(27, $excel_row, $row->living_with_reason);
			$object->getActiveSheet()->setCellValueByColumnAndRow(28, $excel_row, $row->household_material);
			$object->getActiveSheet()->setCellValueByColumnAndRow(29, $excel_row, $row->gone_to_school);
			$object->getActiveSheet()->setCellValueByColumnAndRow(30, $excel_row, $row->attending_school);
			$object->getActiveSheet()->setCellValueByColumnAndRow(31, $excel_row, $row->learning_reference_no);
			$object->getActiveSheet()->setCellValueByColumnAndRow(32, $excel_row, $row->highest_grade_completed);
			$object->getActiveSheet()->setCellValueByColumnAndRow(33, $excel_row, $row->form_of_education);
			$object->getActiveSheet()->setCellValueByColumnAndRow(34, $excel_row, $row->age_stopped_schooling);
			$object->getActiveSheet()->setCellValueByColumnAndRow(35, $excel_row, $row->drop_out_reason);
			$object->getActiveSheet()->setCellValueByColumnAndRow(36, $excel_row, $row->have_disability);
			$object->getActiveSheet()->setCellValueByColumnAndRow(37, $excel_row, $row->disability);
			$object->getActiveSheet()->setCellValueByColumnAndRow(38, $excel_row, $row->further_assessment_disability);
			$object->getActiveSheet()->setCellValueByColumnAndRow(39, $excel_row, $row->height);
			$object->getActiveSheet()->setCellValueByColumnAndRow(40, $excel_row, $row->weight);
			$object->getActiveSheet()->setCellValueByColumnAndRow(41, $excel_row, $row->suffered_ailments);
			$object->getActiveSheet()->setCellValueByColumnAndRow(42, $excel_row, $row->further_assessment_medical);
			$object->getActiveSheet()->setCellValueByColumnAndRow(43, $excel_row, $row->family_ailments);


			// $object->getActiveSheet()->setCellValueByColumnAndRow(44, $excel_row, $row->task); //tasks


			// $object->getActiveSheet()->setCellValueByColumnAndRow(44, $excel_row, 
			// 																			$worktasks[$i]->task." ".
			// 																			$worktasks[$i]->task_description." ".
			// 																			$worktasks[$i]->task_month." ".
			// 																			$worktasks[$i]->task_location
			// 																			);

			$contain_task = '';
			for($i = 0; $i < $numrows_wt; $i++)
			{
				if($row->child_control_no == $worktasks[$i]->child_control_no)
				{
					$object->getActiveSheet()->setCellValueByColumnAndRow(44, $excel_row, 
																						$contain_task."\n".
																						$worktasks[$i]->task." - ".
																						$worktasks[$i]->task_description." - ".
																						$worktasks[$i]->task_month." - ".
																						$worktasks[$i]->task_location
																						);

					
				}
				else
				{
					continue;
				}

				$contain_task = $object->getActiveSheet()->getCellByColumnAndRow(44,$excel_row)->getValue();
			}
			



			$object->getActiveSheet()->setCellValueByColumnAndRow(45, $excel_row, $row->employer_name);
			$object->getActiveSheet()->setCellValueByColumnAndRow(46, $excel_row, $row->employer_contact);
			$object->getActiveSheet()->setCellValueByColumnAndRow(47, $excel_row, $row->employer_region);
			$object->getActiveSheet()->setCellValueByColumnAndRow(48, $excel_row, $row->employer_province);
			$object->getActiveSheet()->setCellValueByColumnAndRow(49, $excel_row, $row->employer_municipality);
			$object->getActiveSheet()->setCellValueByColumnAndRow(50, $excel_row, $row->employer_barangay);
			$object->getActiveSheet()->setCellValueByColumnAndRow(51, $excel_row, $row->employer_sitio);
			$object->getActiveSheet()->setCellValueByColumnAndRow(52, $excel_row, $row->work_arrangement);
			$object->getActiveSheet()->setCellValueByColumnAndRow(53, $excel_row, $row->work_hrs_per_day);
			$object->getActiveSheet()->setCellValueByColumnAndRow(54, $excel_row, $row->work_hrs_per_week);
			$object->getActiveSheet()->setCellValueByColumnAndRow(55, $excel_row,
																	  $row->work_time_start.' '.$row->work_start_partofday.'-'.
																	  $row->work_time_end.' '.$row->work_end_partofday); //work time
			$object->getActiveSheet()->setCellValueByColumnAndRow(56, $excel_row, $row->age_started_working);
			$object->getActiveSheet()->setCellValueByColumnAndRow(57, $excel_row, $row->hazards);
			$object->getActiveSheet()->setCellValueByColumnAndRow(58, $excel_row, $row->basis_of_payment);
			$object->getActiveSheet()->setCellValueByColumnAndRow(59, $excel_row, $row->average_monthly_income);
			$object->getActiveSheet()->setCellValueByColumnAndRow(60, $excel_row, $row->do_with_earnings);
			$object->getActiveSheet()->setCellValueByColumnAndRow(61, $excel_row, $row->does_supervise_work);
			// $object->getActiveSheet()->setCellValueByColumnAndRow(62, $excel_row, $row->supervises_work.$row->supervisor_name); //supervises

			$contain_supervisor = '';
			for($i = 0; $i < $numrows_ws; $i++)
			{
				if($row->child_control_no == $worksupervisor[$i]->child_control_no)
				{
					$object->getActiveSheet()->setCellValueByColumnAndRow(62, $excel_row, 
																						$contain_supervisor."\n".
																						$worksupervisor[$i]->supervises_work." - ".
																						$worksupervisor[$i]->supervisor_name
																						);

					
				}
				else
				{
					continue;
				}

				$contain_supervisor = $object->getActiveSheet()->getCellByColumnAndRow(62,$excel_row)->getValue();
			}
			

			// $object->getActiveSheet()->setCellValueByColumnAndRow(63, $excel_row, $familyprofile[1]->family_last_name);
			// $object->getActiveSheet()->setCellValueByColumnAndRow(64, $excel_row, $familyprofile[1]->family_last_name);
			// $object->getActiveSheet()->setCellValueByColumnAndRow(65, $excel_row, $familyprofile[1]->family_last_name);
			// $object->getActiveSheet()->setCellValueByColumnAndRow(66, $excel_row, $familyprofile[1]->family_last_name);
			// $object->getActiveSheet()->setCellValueByColumnAndRow(67, $excel_row, $familyprofile[1]->family_last_name);
			// $object->getActiveSheet()->setCellValueByColumnAndRow(68, $excel_row, $familyprofile[1]->family_last_name);
			// $object->getActiveSheet()->setCellValueByColumnAndRow(69, $excel_row, $familyprofile[1]->family_last_name);
			// $object->getActiveSheet()->setCellValueByColumnAndRow(70, $excel_row, $familyprofile[1]->family_last_name);
			// $object->getActiveSheet()->setCellValueByColumnAndRow(71, $excel_row, $familyprofile[1]->family_last_name);
			// $object->getActiveSheet()->setCellValueByColumnAndRow(72, $excel_row, $familyprofile[1]->family_last_name);
			// $object->getActiveSheet()->setCellValueByColumnAndRow(73, $excel_row, $familyprofile[1]->family_last_name);
			// $object->getActiveSheet()->setCellValueByColumnAndRow(74, $excel_row, $familyprofile[1]->family_last_name);

			
			$cell_count = 63;
			if($cell_count <= 74)
			{
				for($i=0; $i < $numrows_fp; $i++)
				{
					if ($row->child_control_no == $familyprofile[$i]->child_control_no)
					{
						$object->getActiveSheet()->setCellValueByColumnAndRow($cell_count, $excel_row, "Name: ".$familyprofile[$i]->family_last_name.", ".$familyprofile[$i]->family_first_name."\n".
																										"Rel: ".$familyprofile[$i]->family_relationship."\n".
																										"Sex: ". $familyprofile[$i]->family_sex."\n".
																										"Age: ".$familyprofile[$i]->family_age."\n".
																										"Civil Status: ".$familyprofile[$i]->family_civil_status."\n".
																										"Solo Parent: ".$familyprofile[$i]->solo_parent."\n".
																										"Highest Educ: ".$familyprofile[$i]->educational_attainment."\n".
																										"Occupation: ".$familyprofile[$i]->occupation."\n".
																										"Monthly Income: ".$familyprofile[$i]->estimated_monthly_income."\n".
																										"Skills: ".$familyprofile[$i]->skills."\n".
																										"Whereabouts: ".$familyprofile[$i]->whereabouts."\n".
																										"Disability/Ailment: ".$familyprofile[$i]->family_type_disability);
						$cell_count++;
					}
					else
					{
						continue;
					}

				}
			}
			$cell_count = 63;

			
			

			$object->getActiveSheet()->setCellValueByColumnAndRow(75, $excel_row, $row->part_of_4ps);
			$object->getActiveSheet()->setCellValueByColumnAndRow(76, $excel_row, $row->household_id_number);

			// $object->getActiveSheet()->setCellValueByColumnAndRow(77, $excel_row, $row->services_already_availed);
			// $object->getActiveSheet()->setCellValueByColumnAndRow(78, $excel_row, $row->services_already_availed);
			// $object->getActiveSheet()->setCellValueByColumnAndRow(79, $excel_row, $row->services_already_availed);
			// $object->getActiveSheet()->setCellValueByColumnAndRow(80, $excel_row, $row->services_already_availed);
			// $object->getActiveSheet()->setCellValueByColumnAndRow(81, $excel_row, $row->services_already_availed);
			// $object->getActiveSheet()->setCellValueByColumnAndRow(82, $excel_row, $row->services_already_availed);
			// $object->getActiveSheet()->setCellValueByColumnAndRow(83, $excel_row, $row->services_already_availed);
			// $object->getActiveSheet()->setCellValueByColumnAndRow(84, $excel_row, $row->services_already_availed);
			// $object->getActiveSheet()->setCellValueByColumnAndRow(85, $excel_row, $row->services_already_availed);
			// $object->getActiveSheet()->setCellValueByColumnAndRow(86, $excel_row, $row->services_already_availed);
			// $object->getActiveSheet()->setCellValueByColumnAndRow(87, $excel_row, $row->services_already_availed);
			// $object->getActiveSheet()->setCellValueByColumnAndRow(88, $excel_row, $row->services_already_availed);



			$cell_count1 = 77;
			if($cell_count1 <= 88)
			{
				for($i=0; $i < $numrows_sa; $i++)
				{
					if ($row->child_control_no == $servicesavailed[$i]->child_control_no)
					{
						$object->getActiveSheet()->setCellValueByColumnAndRow($cell_count1, $excel_row, "Assistance Already Availed by the Family: ".$servicesavailed[$i]->services_already_availed."\n".
																										"Source of Assistance Already Availed by the Family: ".$servicesavailed[$i]->availed_source_of_assistance."\n".
																										"Year Availed: ".$servicesavailed[$i]->year_availed."\n".
																										"Family Member Who Availed the Service: ".$servicesavailed[$i]->family_availed_service."\n".
																										"Remarks: ".$servicesavailed[$i]->services_availed_remarks);
						$cell_count1++;
					}
					else
					{
						continue;
					}

				}
			}
			$cell_count1 = 77;



			

			// $object->getActiveSheet()->setCellValueByColumnAndRow(89, $excel_row, $row->assistance_requested);
			// $object->getActiveSheet()->setCellValueByColumnAndRow(90, $excel_row, $row->assistance_requested);
			// $object->getActiveSheet()->setCellValueByColumnAndRow(91, $excel_row, $row->assistance_requested);
			// $object->getActiveSheet()->setCellValueByColumnAndRow(92, $excel_row, $row->assistance_requested);
			// $object->getActiveSheet()->setCellValueByColumnAndRow(93, $excel_row, $row->assistance_requested);
			// $object->getActiveSheet()->setCellValueByColumnAndRow(94, $excel_row, $row->assistance_requested);
			// $object->getActiveSheet()->setCellValueByColumnAndRow(95, $excel_row, $row->assistance_requested);
			// $object->getActiveSheet()->setCellValueByColumnAndRow(96, $excel_row, $row->assistance_requested);
			// $object->getActiveSheet()->setCellValueByColumnAndRow(97, $excel_row, $row->assistance_requested);
			// $object->getActiveSheet()->setCellValueByColumnAndRow(98, $excel_row, $row->assistance_requested);
			// $object->getActiveSheet()->setCellValueByColumnAndRow(99, $excel_row, $row->assistance_requested);
			// $object->getActiveSheet()->setCellValueByColumnAndRow(100, $excel_row, $row->assistance_requested);

			

			$cell_count2 = 89;
			if($cell_count2 <= 100)
			{
				for($i=0; $i < $numrows_ra; $i++)
				{
					if ($row->child_control_no == $requestedassistance[$i]->child_control_no)
					{
						$object->getActiveSheet()->setCellValueByColumnAndRow($cell_count2, $excel_row, "Type of Assistance Requested: ".$requestedassistance[$i]->assistance_requested."\n".
																										"Source of Assistance: ".$requestedassistance[$i]->requested_source_of_assistance."\n".
																										"Start of Assistance: ".$requestedassistance[$i]->start_assistance." "."End of Assistance: ".$requestedassistance[$i]->end_assistance."\n".
																										"Family Member Who Requested the Assistance: ".$requestedassistance[$i]->family_requested_assistance."\n".
																										"Remarks: ".$requestedassistance[$i]->requested_assistance_remarks);
						$cell_count2++;
					}
					else
					{
						continue;
					}

				}
			}
			$cell_count2 = 89;




			$object->getActiveSheet()->setCellValueByColumnAndRow(101, $excel_row, $row->name_of_enumerator);
			$object->getActiveSheet()->setCellValueByColumnAndRow(102, $excel_row, $row->date_of_interview);

			$excel_row++;
		}




		$object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel5');
		header('Content-Type: application/vnd.ms-excel');
		header('Content-Disposition: attachment;filename="CL-Record.xls"');
		$object_writer->save('php://output');


	}

	// public function edit_log(){

	// 	$data['id'] = $_POST['logId'];
	// 	$data['data'] = array("plate_no" => $_POST['add-plate_no'],
	// 							"log_desc" => $_POST['add-description'],
	// 							"log_item_type" => $_POST['itemType'],
	// 							"log_unit" => $_POST['itemUnit'],
	// 							"log_quantity" => $_POST['add-quantity']
	// 						);

	// 	echo $this->log_m->update_log($data);




		
	// }

	// public function remove_log(){	

	// 		$id = $this->uri->segment(3);
			

	// 		$this->log_m->delete_log($id);

	// 		redirect('http://localhost/clprofiling/Encode');
	// }


	// public function test(){
	// 	echo "<script type='text/javascript'>

	// 			alert('Are you sure you want to delete?');

	// 		</script>";
		
	// }


}
