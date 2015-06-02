<?php 
	require_once 'userfunctions.php';
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
		    
		    .linkbox{
		    	position: relative;
		    }
		    .linkbox a{
		    	position: absolute;
		    	width: 100%;
		    	height: 100%;
		    	text-indent: 100%;
		    	white-space: nowrap;
		    	overflow: hidden;
		    }
	    </style>
        
        
    </head>

    <body>

        <!-- Your site -->

<!--         <h1>You can add your site here.</h1> -->

<!--         <h2>To ensure that material-design theme is working, check out the buttons below.</h2> -->

<!--         <h3 class="text-muted">If you can see the ripple effect on clicking them, then you are good to go!</h3> -->


<!--         <p class="bs-component"> -->
<!--             <a href="javascript:void(0)" class="btn btn-default">Default</a> -->
<!--             <a href="javascript:void(0)" class="btn btn-primary">Primary</a> -->
<!--             <a href="javascript:void(0)" class="btn btn-success">Success</a> -->
<!--             <a href="javascript:void(0)" class="btn btn-info">Info</a> -->
<!--             <a href="javascript:void(0)" class="btn btn-warning">Warning</a> -->
<!--             <a href="javascript:void(0)" class="btn btn-danger">Danger</a> -->
<!--             <a href="javascript:void(0)" class="btn btn-link">Link</a> -->
<!--         </p> -->

        <!-- Your site ends -->
		
    
			<?php 
				userheader();
	// 			userlistgroup_demo();
	// 			userpanel_n_demo();
			?>
			
			
			<!-- <div style="padding-left: 10px;padding-right: 10px;"> -->
			<div class="container">
			
			<?php
				userbreadcrumbs_demo(); 
			?>
			
<!-- 				<div class="page-header"> -->
	
<!-- 				</div> -->
				
				<div class="row">
						<div class="col-lg-12">
							<div class="page-header">
								<h2><i class="mdi-action-event"></i>カレンダー</h2>
								<p class="lead">カレンダーより、最新情報を確認いただけます。</p>
							</div>
						</div>
					</div>
					
					<div class="row">
						<div class="col-md-2">
							<?php userdateselect(); ?>
						</div>
						<div class="col-md-10">
							<div class="well infobox">
							
									<!-- Slider main container -->
								<div class="swiper-container">
								    <!-- Additional required wrapper -->
								    <div class="swiper-wrapper">
								        <!-- Slides -->
								        <div class="swiper-slide"><div><i class="mdi-action-label"></i>1日</div><?php usertable_demo(); ?></div>
								        <div class="swiper-slide"><div><i class="mdi-action-label"></i>2日</div><?php usertable_demo(); ?></div>
								        <div class="swiper-slide"><div><i class="mdi-action-label"></i>3日</div><?php usertable_demo(); ?></div>
								        <div class="swiper-slide"><div><i class="mdi-action-label"></i>4日</div><?php usertable_demo(); ?></div>
								        <div class="swiper-slide"><div><i class="mdi-action-label"></i>5日</div><?php usertable_demo(); ?></div>
								        <div class="swiper-slide"><div><i class="mdi-action-label"></i>6日</div><?php usertable_demo(); ?></div>
								        <div class="swiper-slide"><div><i class="mdi-action-label"></i>7日</div><?php usertable_demo(); ?></div>
								        <div class="swiper-slide"><div><i class="mdi-action-label"></i>8日</div><?php usertable_demo(); ?></div>
								        <div class="swiper-slide"><div><i class="mdi-action-label"></i>9日</div><?php usertable_demo(); ?></div>
								        <div class="swiper-slide"><div><i class="mdi-action-label"></i>10日</div><?php usertable_demo(); ?></div>
								        <div class="swiper-slide"><div><i class="mdi-action-label"></i>11日</div><?php usertable_demo(); ?></div>
								        <div class="swiper-slide"><div><i class="mdi-action-label"></i>12日</div><?php usertable_demo(); ?></div>
								        <div class="swiper-slide"><div><i class="mdi-action-label"></i>13日</div><?php usertable_demo(); ?></div>
								        <div class="swiper-slide"><div><i class="mdi-action-label"></i>14日</div><?php usertable_demo(); ?></div>
								        <div class="swiper-slide"><div><i class="mdi-action-label"></i>15日</div><?php usertable_demo(); ?></div>
								        <div class="swiper-slide"><div><i class="mdi-action-label"></i>16日</div><?php usertable_demo(); ?></div>
								        <div class="swiper-slide"><div><i class="mdi-action-label"></i>17日</div><?php usertable_demo(); ?></div>
								        <div class="swiper-slide"><div><i class="mdi-action-label"></i>18日</div><?php usertable_demo(); ?></div>
								        <div class="swiper-slide"><div><i class="mdi-action-label"></i>19日</div><?php usertable_demo(); ?></div>
								        <div class="swiper-slide"><div><i class="mdi-action-label"></i>20日</div><?php usertable_demo(); ?></div>
								        <div class="swiper-slide"><div><i class="mdi-action-label"></i>21日</div><?php usertable_demo(); ?></div>
								        <div class="swiper-slide"><div><i class="mdi-action-label"></i>22日</div><?php usertable_demo(); ?></div>
								        <div class="swiper-slide"><div><i class="mdi-action-label"></i>23日</div><?php usertable_demo(); ?></div>
								        <div class="swiper-slide"><div><i class="mdi-action-label"></i>25日</div><?php usertable_demo(); ?></div>
								        <div class="swiper-slide"><div><i class="mdi-action-label"></i>26日</div><?php usertable_demo(); ?></div>
								        <div class="swiper-slide"><div><i class="mdi-action-label"></i>27日</div><?php usertable_demo(); ?></div>
								        <div class="swiper-slide"><div><i class="mdi-action-label"></i>28日</div><?php usertable_demo(); ?></div>
								        <div class="swiper-slide"><div><i class="mdi-action-label"></i>29日</div><?php usertable_demo(); ?></div>
								        <div class="swiper-slide"><div><i class="mdi-action-label"></i>30日</div><?php usertable_demo(); ?></div>
								        <div class="swiper-slide"><div><i class="mdi-action-label"></i>31日</div><?php usertable_demo(); ?></div>
								    </div>
								    <!-- If we need pagination -->
<!-- 								    <div class="swiper-pagination"></div> -->
								    
								    <!-- If we need navigation buttons -->
<!-- 								    <div class="swiper-button-prev"></div> -->
<!-- 								    <div class="swiper-button-next"></div> -->
								    
								    <!-- If we need scrollbar -->
<!-- 								    <div class="swiper-scrollbar"></div> -->
								</div>
								    
							</div>
						</div>
					</div>
			
				<div class="row">
					<div class="col-lg-12">
						<div class="page-header">
							<h2><i class="mdi-action-work"></i>求人票</h2>
							<p class="lead">各求人票を選択できます。検索・ソートなども可能です。</p>
						</div>
					</div>
				</div>
			
				<div class="alert alert-dismissable alert-warning">
				    <button type="button" class="close" data-dismiss="alert">×</button>
				    <h3>ピックアップ求人</h3>
				    <p>あなたにおすすめ。もしくは、企業からの積極アプローチがある場合求人が表示されます。</p>
				</div>
				
				<div class="row" style="margin-top:20px;">
				  <?php userpanel_pick_adopt();?>
				</div>
				
				
				<div class="alert alert-dismissable alert-info">
				    <button type="button" class="close" data-dismiss="alert">×</button>
				    <h3>新着求人</h3>
				</div>
				
<!-- 				<div class="row"> -->
					<?php user_form_sort_v1();?>
<!-- 				</div> -->
				
				<div class="row">
				  <div class="col-md-3"><?php userlistgroup(); ?></div>
				  <div class="col-md-3"><?php userlistgroup(); ?></div>
				  <div class="col-md-3"><?php userlistgroup(); ?></div>
				  <div class="col-md-3"><?php userlistgroup(); ?></div>
				</div>
				
				<div class="row">
					<?php userpanel_n_adopt(); ?>
				</div>
				
				<div class="row">
				  <div class="col-md-2 sampleBox"><?php userpanel_n(); ?></div>
				  <div class="col-md-2 sampleBox"><?php userpanel_n(); ?></div>
				  <div class="col-md-2 sampleBox"><?php userpanel_n(); ?></div>
				  <div class="col-md-2 sampleBox"><?php userpanel_n(); ?></div>
				  <div class="col-md-2 sampleBox"><?php userpanel_n(); ?></div>
				  <div class="col-md-2 sampleBox"><?php userpanel_n(); ?></div>
				  
				  <div class="col-md-2 sampleBox"><?php userpanel_n(); ?></div>
				  <div class="col-md-2 sampleBox"><?php userpanel_n(); ?></div>
				  <div class="col-md-2 sampleBox"><?php userpanel_n(); ?></div>
				  <div class="col-md-2 sampleBox"><?php userpanel_n(); ?></div>
				  <div class="col-md-2 sampleBox"><?php userpanel_n(); ?></div>
				  <div class="col-md-2 sampleBox"><?php userpanel_n(); ?></div>
				</div>
				
				
			
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
