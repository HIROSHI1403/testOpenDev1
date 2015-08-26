<?php
include 'managefunctions.php';
include 'manageHTMLdoc.php';
include 'manageContent.php';
include 'manageHeader.php';

if (empty($_SESSION['managename'])){
	$_SESSION['ERR_LOGIN'] = $msg_row['4'];
	header("Location: {$rootURLmanage}managelogin.php");
}

if (isset($_POST['cal_submit'])){
	if ($_POST['cal_contents']=="" or $_POST['cal_sub_contents']==""){
		$alert_cal = $msg_row['15']['0'];
	}else {
		$calcontents = $_POST['cal_contents'];
		$calsubcontents = $_POST['cal_sub_contents'];
		$cal_yyyymmdd = $_REQUEST['year'].'-'.$_REQUEST['month'].'-'.$_REQUEST['day'];
		
		if (isset($_POST['select_compname'])){
			$select_compid = $_POST['select_compname'];
		}else {
			$select_compid = $_POST['select_compname'];
		}
		
		$calqs = <<<EOM
		INSERT INTO 
			calData (
				cal_comp_id, 
				cal_job_id, 
				cal_date, 
				cal_contants, 
				cal_sub_contents
			) 
		VALUES (
			'{$select_compid}', 
			'', 
			'{$cal_yyyymmdd}', 
			'{$calcontents}', 
			'{$calsubcontents}'
		);
EOM;
		$calresult = RUN_SQLI_DEFAULTLOGIN($calqs);
		if (!$calresult){
			$alert_cal = $msg_row['2']['0'];
		}else {
			$alert_cal = $msg_row['1']['0'];
		}
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
				manage_content_cal($alert_cal);
          	?>
        </div>
        <!-- /#page-wrapper -->
        
        
<?php 
	manage_htmlfoot();
?>
