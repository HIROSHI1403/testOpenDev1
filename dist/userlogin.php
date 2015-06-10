<?php 
	require_once 'userfunctions.php';
	$userloginERR="";
	if (isset($_POST['userlogin'])){
		if (empty($_POST['userlogin_mail']) or empty($_POST['userlogin_pass'])){
			$userloginERR = "ERROR";
		}else {
			$mysqli = new mysqli($mySQLAddress,$mainDbUserName,$mainDbPass,$mainDbName);
			if ($mysqli->connect_error){
				$userloginERR = "ERROR";
				$mysqli->close();
				exit();
			}else {
				$query_str = "SELECT * FROM user WHERE user_email = '".$_POST['userlogin_mail']."'";
				$result = $mysqli->query($query_str);
				if (!$result){
					$userloginERR = "ERROR";
				}else {
					while ($row = $result->fetch_assoc()){
						$userpassword = $_POST['userlogin_pass'];
						if (password_verify($userpassword, $row['user_password'])){
							header("Location:{$rootURLdist}swipeTest.php");
						}else {
							$userloginERR = "ERROR";
							header("Location: " . $_SERVER['PHP_SELF']);
							exit();
						}
					}
				}
			}
			if (mysqli_num_rows($result)==0){
				die("2");
				$userloginERR = "ERROR";
				header("Location: " . $_SERVER['PHP_SELF']);
				exit();
			}
		}
	}
?>

<html>

    <head>
		<meta charset="utf-8">		
		
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet">
        <!-- Include roboto.css to use the Roboto web font, material.css to include the theme and ripples.css to style the ripple effect -->
        <link href="css/roboto.min.css" rel="stylesheet">
        <link href="css/material.min.css" rel="stylesheet">
        <link href="css/ripples.min.css" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="stylesheet" href="css/swiper.min.css">
        <style>
		    .swiper-container {
		        width: 100%;
		        height: 100%;
		        margin-left: auto;
		        margin-right: auto;
		    }
		    
			.swiper-container, .swiper-slide {
				width: 100%;
				height: 300px;
			}
		    
		    .swiper-slide {
		        text-align: center;
		        font-size: 18px;
		        background: #fff;
		        /* Center slide text vertically */
		        display: -webkit-box;
		        display: -ms-flexbox;
		        display: -webkit-flex;
		        display: flex;
		        -webkit-box-pack: center;
		        -ms-flex-pack: center;
		        -webkit-justify-content: center;
		        justify-content: center;
		        -webkit-box-align: center;
		        -ms-flex-align: center;
		        -webkit-align-items: center;
		        align-items: center;
		    }
	    </style>
        
        
    </head>

    <body>
    
			<?php 
				userheader();
			?>
			
			
			<!-- <div style="padding-left: 10px;padding-right: 10px;"> -->
			<div class="container">
			
			<?php
				userbreadcrumbs_demo(); 
			?>
			
			<?php 
				if (empty($errormsg)){
					echo <<<EOT
					<span data-toggle=snackbar data-content="ログインに失敗しました。">閉じる</span>
EOT;
				}else{
				}
				userlogin_demo();
			?>	
				
			
    	</div>
    
        <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

        <script src="js/ripples.min.js"></script>
        <script src="js/material.min.js"></script>
        <script>
            $(document).ready(function() {
                // This command is used to initialize some elements and make them work properly
                $.material.init();
            });

            var options =  {
            	    content: "Some text", // text of the snackbar
            	    style: "toast", // add a custom class to your snackbar
            	    timeout: 100 // time in milliseconds after the snackbar autohides, 0 is disabled
            	}

            $.snackbar(options);
        </script>
        
        
        <script src="js/swiper.min.js"></script>
        <script>     
	        var swiper = new Swiper('.swiper-container', {
	            pagination: '.swiper-pagination',
	            direction: 'vertical',
	            slidesPerView: 1,
	            paginationClickable: true,
	            spaceBetween: 30,
	            mousewheelControl: true
	        });
	        
        </script>

    </body>

</html>
