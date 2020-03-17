-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2020 at 06:56 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `d0l310_clprofilingdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_child_record`
--

CREATE TABLE `tbl_child_record` (
  `child_control_no` varchar(255) NOT NULL,
  `regional_office` varchar(255) NOT NULL,
  `field_office` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `name_of_enumerator` varchar(255) NOT NULL,
  `date_of_interview` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_child_record`
--

INSERT INTO `tbl_child_record` (`child_control_no`, `regional_office`, `field_office`, `year`, `name_of_enumerator`, `date_of_interview`) VALUES
('CL-2019-R10-5-123456-M', 'R10', 'Misamis Occidental', '2019', 'GDSFH', '11.11.2019'),
('CL-2019-R10-6-36311-M', 'R10', 'Western Misamis Oriental', '2019', 'SADASD', '11.20.2019'),
('CL-2019-R10-1-00002-F', 'R10', 'Bukidnon', '2019', 'GLENFORD C. LABIAL', '11.21.2019');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_educational_background`
--

CREATE TABLE `tbl_educational_background` (
  `child_control_no` varchar(255) NOT NULL,
  `gone_to_school` varchar(255) NOT NULL,
  `attending_school` varchar(255) NOT NULL,
  `learning_reference_no` varchar(255) NOT NULL,
  `highest_grade_completed` varchar(255) NOT NULL,
  `form_of_education` varchar(255) NOT NULL,
  `age_stopped_schooling` int(255) NOT NULL,
  `drop_out_reason` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_educational_background`
--

INSERT INTO `tbl_educational_background` (`child_control_no`, `gone_to_school`, `attending_school`, `learning_reference_no`, `highest_grade_completed`, `form_of_education`, `age_stopped_schooling`, `drop_out_reason`) VALUES
('CL-2019-R10-5-123456-M', 'Yes', 'Yes', '', 'UNKNOWN', 'UNKNOWN', 0, ''),
('CL-2019-R10-6-36311-M', 'Yes', 'Yes', '', 'UNKNOWN', 'UNKNOWN', 0, ''),
('CL-2019-R10-1-00002-F', 'Yes', 'Yes', '', 'Grade 5', '1 – Formal', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_health_information`
--

CREATE TABLE `tbl_health_information` (
  `child_control_no` varchar(255) NOT NULL,
  `have_disability` varchar(255) NOT NULL,
  `disability` varchar(255) NOT NULL,
  `further_assessment_disability` varchar(255) NOT NULL,
  `height` varchar(255) NOT NULL,
  `weight` varchar(255) NOT NULL,
  `suffered_ailments` varchar(255) NOT NULL,
  `further_assessment_medical` varchar(255) NOT NULL,
  `family_ailments` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_health_information`
--

INSERT INTO `tbl_health_information` (`child_control_no`, `have_disability`, `disability`, `further_assessment_disability`, `height`, `weight`, `suffered_ailments`, `further_assessment_medical`, `family_ailments`) VALUES
('CL-2019-R10-5-123456-M', 'Yes', '', 'Yes', '', '', '', 'Yes', ''),
('CL-2019-R10-6-36311-M', 'Yes', '', 'Yes', '', '', '', 'Yes', ''),
('CL-2019-R10-1-00002-F', 'No', '', 'No', '', '', '\n\n', 'Yes', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_nature_location_work`
--

CREATE TABLE `tbl_nature_location_work` (
  `child_control_no` varchar(255) NOT NULL,
  `employer_name` varchar(255) NOT NULL,
  `employer_contact` varchar(255) NOT NULL,
  `employer_region` varchar(255) NOT NULL,
  `employer_province` varchar(255) NOT NULL,
  `employer_municipality` varchar(255) NOT NULL,
  `employer_barangay` varchar(255) NOT NULL,
  `employer_sitio` varchar(255) NOT NULL,
  `work_arrangement` varchar(255) NOT NULL,
  `work_hrs_per_day` int(255) NOT NULL,
  `work_hrs_per_week` int(255) NOT NULL,
  `work_time_start` varchar(255) NOT NULL,
  `work_start_partofday` varchar(255) NOT NULL,
  `work_time_end` varchar(255) NOT NULL,
  `work_end_partofday` varchar(255) NOT NULL,
  `age_started_working` int(255) NOT NULL,
  `hazards` varchar(255) NOT NULL,
  `basis_of_payment` varchar(255) NOT NULL,
  `average_monthly_income` int(255) NOT NULL,
  `do_with_earnings` varchar(255) NOT NULL,
  `does_supervise_work` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_nature_location_work`
--

INSERT INTO `tbl_nature_location_work` (`child_control_no`, `employer_name`, `employer_contact`, `employer_region`, `employer_province`, `employer_municipality`, `employer_barangay`, `employer_sitio`, `work_arrangement`, `work_hrs_per_day`, `work_hrs_per_week`, `work_time_start`, `work_start_partofday`, `work_time_end`, `work_end_partofday`, `age_started_working`, `hazards`, `basis_of_payment`, `average_monthly_income`, `do_with_earnings`, `does_supervise_work`) VALUES
('CL-2019-R10-5-123456-M', '', '', 'Region', 'UNKNOWN', 'UNKNOWN', '', '', '1 – Paid worker in own household-operated farm or business', 0, 0, '3:45', 'PM', '3:45', 'PM', 0, '', '', 0, '', 'Yes'),
('CL-2019-R10-6-36311-M', '', '', 'Region', 'UNKNOWN', 'UNKNOWN', '', '', '1 – Paid worker in own household-operated farm or business', 0, 0, '13:15', 'AM', '13:15', 'AM', 0, '', '', 0, '', 'Yes'),
('CL-2019-R10-1-00002-F', '', '', 'REGION X (NORTHERN MINDANAO)', 'BUKIDNON', 'KINOGUITAN', '', '', '2 – Paid worker by an employer, financier, land owner', 9, 55, '4:15', 'PM', '4:15', 'PM', 10, '4 – Exposure to extreme weather conditions\n6 – Exposure to accident-prone areas (e.g. falling timber)\n', '2 – Daily\n', 3000, '1 – Give all or part of earnings to my parents/guardian\n6 – Buy things for myself\n', 'No');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_personal_info`
--

CREATE TABLE `tbl_personal_info` (
  `child_control_no` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `suffix` varchar(255) NOT NULL,
  `pa_region` varchar(255) NOT NULL,
  `pa_province` varchar(255) NOT NULL,
  `pa_district` varchar(255) NOT NULL,
  `pa_municipality` varchar(255) NOT NULL,
  `pa_barangay` varchar(255) NOT NULL,
  `pa_sitio` varchar(255) NOT NULL,
  `phone_no` varchar(255) NOT NULL,
  `sex` varchar(255) NOT NULL,
  `date_of_birth` varchar(255) NOT NULL,
  `date_of_birth_estimation` varchar(255) NOT NULL,
  `age` int(255) NOT NULL,
  `birth_certificate` varchar(255) NOT NULL,
  `place_of_birth` varchar(255) NOT NULL,
  `pob_region` varchar(255) NOT NULL,
  `pob_province` varchar(255) NOT NULL,
  `pob_district` varchar(255) NOT NULL,
  `pob_municipality` varchar(255) NOT NULL,
  `pob_barangay` varchar(255) NOT NULL,
  `pob_sitio` varchar(255) NOT NULL,
  `religion` varchar(255) NOT NULL,
  `ip_household` varchar(255) NOT NULL,
  `living_with` varchar(255) NOT NULL,
  `relative_last_name` varchar(255) NOT NULL,
  `relative_first_name` varchar(255) NOT NULL,
  `relative_middle_name` varchar(255) NOT NULL,
  `relative_suffix` varchar(255) NOT NULL,
  `relative_relationship` varchar(255) NOT NULL,
  `living_with_reason` varchar(255) NOT NULL,
  `household_material` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_personal_info`
--

INSERT INTO `tbl_personal_info` (`child_control_no`, `last_name`, `first_name`, `middle_name`, `suffix`, `pa_region`, `pa_province`, `pa_district`, `pa_municipality`, `pa_barangay`, `pa_sitio`, `phone_no`, `sex`, `date_of_birth`, `date_of_birth_estimation`, `age`, `birth_certificate`, `place_of_birth`, `pob_region`, `pob_province`, `pob_district`, `pob_municipality`, `pob_barangay`, `pob_sitio`, `religion`, `ip_household`, `living_with`, `relative_last_name`, `relative_first_name`, `relative_middle_name`, `relative_suffix`, `relative_relationship`, `living_with_reason`, `household_material`) VALUES
('CL-2019-R10-5-123456-M', 'BZXCV', 'BSAFG', 'ASDFG ASDFG', '', 'Region', 'UNKNOWN', '', 'UNKNOWN', '', '', '', 'Male', '', 'Actual', 0, 'Yes', '', 'Region', 'UNKNOWN', '', 'UNKNOWN', '', '', 'Roman Catholic', 'Yes', 'UNKNOWN', '', '', '', '', '', '', '1 - Strong materials'),
('CL-2019-R10-6-36311-M', '', '', '', '', 'Region', 'UNKNOWN', '', 'UNKNOWN', '', '', '', 'Male', '11.20.2019', 'Actual', 0, 'Yes', '', 'Region', 'UNKNOWN', '', 'UNKNOWN', '', '', 'Roman Catholic', 'Yes', 'UNKNOWN', '', '', '', '', '', '', '1 - Strong materials'),
('CL-2019-R10-1-00002-F', 'NAVARRO', 'HANNAH', 'CASTRO', '', 'REGION X (NORTHERN MINDANAO)', 'BUKIDNON', '', 'ALUBIJID', '1', '1', '09556280688', 'Female', '11.21.2002', 'Actual', 0, 'Yes', 'Same as Present Address', 'REGION X (NORTHERN MINDANAO)', 'BUKIDNON', '', 'ALUBIJID', '1', '1', 'Roman Catholic', 'Yes', 'UNKNOWN', '', '', '', '', '', '', '3 - Salvaged/makeshift materials');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_profile_family`
--

CREATE TABLE `tbl_profile_family` (
  `child_control_no` varchar(255) NOT NULL,
  `family_last_name` varchar(255) NOT NULL,
  `family_first_name` varchar(255) NOT NULL,
  `family_relationship` varchar(255) NOT NULL,
  `family_sex` varchar(255) NOT NULL,
  `family_age` int(255) NOT NULL,
  `family_civil_status` varchar(255) NOT NULL,
  `solo_parent` varchar(255) NOT NULL,
  `educational_attainment` varchar(255) NOT NULL,
  `occupation` varchar(255) NOT NULL,
  `estimated_monthly_income` int(255) NOT NULL,
  `skills` varchar(255) NOT NULL,
  `whereabouts` varchar(255) NOT NULL,
  `family_type_disability` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_profile_family`
--

INSERT INTO `tbl_profile_family` (`child_control_no`, `family_last_name`, `family_first_name`, `family_relationship`, `family_sex`, `family_age`, `family_civil_status`, `solo_parent`, `educational_attainment`, `occupation`, `estimated_monthly_income`, `skills`, `whereabouts`, `family_type_disability`) VALUES
('CL-2019-R10-5-123456-M', '', '', '', 'Male', 0, '1 – Single', 'Yes', 'UNKNOWN', '', 0, 'PLUMBING', '', ''),
('CL-2019-R10-6-36311-M', '', '', '', 'Male', 0, '1 – Single', 'Yes', 'UNKNOWN', '', 0, 'PLUMBING', '', ''),
('CL-2019-R10-1-00002-F', 'NAVARRO', 'WALTER', 'FATHER', 'Male', 55, '3 – Widowed', 'Yes', 'Grade 10 / 4th Year HS', 'FARMER', 5000, 'DRIVING', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_profile_family_4ps`
--

CREATE TABLE `tbl_profile_family_4ps` (
  `child_control_no` varchar(255) NOT NULL,
  `part_of_4ps` varchar(255) NOT NULL,
  `household_id_number` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_profile_family_4ps`
--

INSERT INTO `tbl_profile_family_4ps` (`child_control_no`, `part_of_4ps`, `household_id_number`) VALUES
('CL-2019-R10-5-123456-M', 'Yes', ''),
('CL-2019-R10-6-36311-M', 'Yes', ''),
('CL-2019-R10-1-00002-F', 'No', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_requested_assistance`
--

CREATE TABLE `tbl_requested_assistance` (
  `child_control_no` varchar(255) NOT NULL,
  `assistance_requested` varchar(255) NOT NULL,
  `requested_source_of_assistance` varchar(255) NOT NULL,
  `start_assistance` varchar(255) NOT NULL,
  `end_assistance` varchar(255) NOT NULL,
  `family_requested_assistance` varchar(255) NOT NULL,
  `requested_assistance_remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_requested_assistance`
--

INSERT INTO `tbl_requested_assistance` (`child_control_no`, `assistance_requested`, `requested_source_of_assistance`, `start_assistance`, `end_assistance`, `family_requested_assistance`, `requested_assistance_remarks`) VALUES
('CL-2019-R10-5-123456-M', '', '', '', '', '', ''),
('CL-2019-R10-6-36311-M', '', '', '', '', '', ''),
('CL-2019-R10-1-00002-F', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_services_availed`
--

CREATE TABLE `tbl_services_availed` (
  `child_control_no` varchar(255) NOT NULL,
  `services_already_availed` varchar(255) NOT NULL,
  `availed_source_of_assistance` varchar(255) NOT NULL,
  `year_availed` int(255) NOT NULL,
  `family_availed_service` varchar(255) NOT NULL,
  `services_availed_remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_services_availed`
--

INSERT INTO `tbl_services_availed` (`child_control_no`, `services_already_availed`, `availed_source_of_assistance`, `year_availed`, `family_availed_service`, `services_availed_remarks`) VALUES
('CL-2019-R10-5-123456-M', '', '', 0, '', ''),
('CL-2019-R10-6-36311-M', '', '', 0, '', ''),
('CL-2019-R10-1-00002-F', '', '', 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_firstname` varchar(255) NOT NULL,
  `user_lastname` varchar(255) NOT NULL,
  `user_middlename` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`username`, `password`, `user_firstname`, `user_lastname`, `user_middlename`) VALUES
('123', '19711b9a35735e677b499a567bb17e5c', '123', '123', '123');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_work_supervisor`
--

CREATE TABLE `tbl_work_supervisor` (
  `child_control_no` varchar(255) NOT NULL,
  `supervises_work` varchar(255) NOT NULL,
  `supervisor_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_work_supervisor`
--

INSERT INTO `tbl_work_supervisor` (`child_control_no`, `supervises_work`, `supervisor_name`) VALUES
('CL-2019-R10-5-123456-M', '', ''),
('CL-2019-R10-6-36311-M', '', ''),
('CL-2019-R10-1-00002-F', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_work_tasks`
--

CREATE TABLE `tbl_work_tasks` (
  `child_control_no` varchar(255) NOT NULL,
  `task` varchar(255) NOT NULL,
  `task_description` varchar(255) NOT NULL,
  `task_month` varchar(255) NOT NULL,
  `task_location` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_work_tasks`
--

INSERT INTO `tbl_work_tasks` (`child_control_no`, `task`, `task_description`, `task_month`, `task_location`) VALUES
('CL-2019-R10-5-123456-M', '', '', '', ''),
('CL-2019-R10-6-36311-M', '', '', '', ''),
('CL-2019-R10-1-00002-F', '8 – Farming', 'LABORER', 'JANUARY TO JUNE', '5 – Farm');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
