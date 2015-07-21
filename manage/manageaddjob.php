<?php
include 'managefunctions.php';
include 'manageHTMLdoc.php';
include 'manageContent.php';
include 'manageHeader.php';

if (empty($_SESSION['managename'])){
	$_SESSION['ERR_LOGIN'] = $msg_row['4'];
	header("Location: {$rootURLmanage}managelogin.php");
}

if (isset($_POST['submit_addjob'])){
	$compnameid = RUN_SQLI_DEFAULTLOGIN("SELECT comp_id FROM comp_info WHERE comp_name = '{$_REQUEST['select_compname']}'");
	if ($compnameid->num_rows!=0){
		$compnameid_result = $compnameid->fetch_assoc();
		
		if (empty($_POST['business_form']) or
				empty($_POST['business_educational']) or
				empty($_POST['business_job_category']) or
				empty($_POST['business_base_salary'])){
		
			$add_alert = $msg_row['8']['0'];
		}elseif ($_REQUEST['select_compname']){
		
		}else {
			$jobadd_result = RUN_SQLI_DEFAULTLOGIN("
			INSERT INTO
				job_info(
					comp_id,
					job_info_id,
					business_form,
					educational,
					job_category,
					job_discription,
					base_salary,
					commuting_allowance,
					housing_allowance,
					family_allowance,
					bonus,
					salary_increase,
					other_allowance,
					ave_overtime,
					holiday,
					annual_holiday_dates,
					paid_leave,
					paid_acquisition_rate,
					join_insurance,
					trial_period,
					saverance_pay,
					base_union,
					dormitory_system,
					other1,
					job_imageid_1
				) VALUES (
			
				)
				");
		}	
	}else {
		$add_alert = $msg_row['11']['0'];
	}
}

?>


<?php 
	manage_htmlhead();
?>


<?php 
	manage_main_nav();
?>

        <div id="page-wrapper">
            <?php 
				manage_content_addjob($add_alert);
          	?>
        </div>
        <!-- /#page-wrapper -->
        
        
<?php 
	manage_htmlfoot();
?>
