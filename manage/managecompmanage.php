<?php
include 'managefunctions.php';
include 'manageHTMLdoc.php';
include 'manageContent.php';
include 'manageHeader.php';

if (empty($_SESSION['managename'])){
	$_SESSION['ERR_LOGIN'] = $msg_row['4'];
	header("Location: {$rootURLmanage}managelogin.php");
}

if (isset($_POST[''])){
	RUN_SQLI_DEFAULTLOGIN("");
}

if (isset($_POST['compdel'])){
	RUN_SQLI_DEFAULTLOGIN("DELETE FROM `testOpenDev1_db`.`comp_info` WHERE `comp_info`.`comp_id` = {$_POST['compdel']}");
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
				manage_content_compmanage();
          	?>
        </div>
        <!-- /#page-wrapper -->
        
        
<?php 
	manage_htmlfoot();
?>
