<?php
if (empty($_SESSION['basicAuth'])){
	header("Location: {$rootURL}basicAuth.php");
}

require_once '../functions.php';

if (empty($_SESSION['admin_login_name'])){
	$_SESSION['ERR_LOGIN'] = "ログインしてください。";
	header("Location: {$rootURL}jobSlipManage_login.php");
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="A layout example that shows off a blog page with a list of posts.">

    <title>TOP &ndash; JIOSystem</title>

    


<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">



<!--[if lte IE 8]>
  
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/grids-responsive-old-ie-min.css">
  
<![endif]-->
<!--[if gt IE 8]><!-->
  
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/grids-responsive-min.css">
  
<!--<![endif]-->





  
    <!--[if lte IE 8]>
        <link rel="stylesheet" href="css/layouts/blog-old-ie.css">
    <![endif]-->
    <!--[if gt IE 8]><!-->
        <link rel="stylesheet" href="/testOpenDev1/css/layouts/blog.css">
    <!--<![endif]-->
  


    

    

</head>
<body>







<div id="layout" class="pure-g">
    <div class="sidebar pure-u-1 pure-u-md-1-4">
        <div class="header">
            <h1 class="brand-title">JIOSystem</h1>
            <h2 class="brand-tagline">求人票管理</h2>
            <?php
            signup_navi(); 
            ?>
        </div>
    </div>
    <div class="content pure-u-1 pure-u-md-3-4">
	    <div class="posts">
	            <h1 class="content-subhead">JOB SLIP MENU</h1>
				<?php 
					jobvote_menu();
				?>
				<h1 class="content-subhead">SEARCH JOB SLIP</h1>
	            <!-- A single blog post -->
	            <section class="post">
	                <header class="post-header">
	                    <h2 class="post-title">求人票登録</h2>
	                </header>
	
	                <div class="post-description">
	                    <p>新規登録</p>
	                    <?php
	                    	if (empty($result)){
	                    	} else{
	                    		echo "<p style='color:red;'>$result</p>";
	                    	}
// 	                    	var_dump($result);
	                    ?>
	                        <form class="pure-form pure-form-aligned" name="set_user" method="post" action="#">
							    <fieldset>
							        <div class="pure-control-group">
							            <label for="name">企業名</label>
							            <input class="pure-input-2-3" name="user_name" type="text" placeholder="企業名を入力">
							        </div>
							
<!-- 							        <div class="pure-control-group"> -->
<!-- 							            <label for="password">パスワード</label> -->
<!-- 							            <input class="pure-input-2-3" id="password" type="password" placeholder="Password"> -->
<!-- 							        </div> -->
							
							        <div class="pure-control-group">
							            <label for="email"></label>
							            <input class="pure-input-2-3" name="user_email" type="email" placeholder="Email Address">
							        </div>
							
							
							        <div class="pure-controls">
							            <button type="submit" class="pure-button pure-button-primary" name="set_user_submit">検索する</button>
							        </div>
							    </fieldset>
							</form>
	                </div>
	            </section>
	        </div>
	        
	        <div class="posts">
	            <h1 class="content-subhead">Search Result</h1>
	
	            <!-- A single blog post -->
	            <section class="post">
	                <header class="post-header">
	                    <h2 class="post-title">検索結果</h2>
	                </header>
	
	                <div class="post-description">
	                    <p>
	                    	
	                    </p>
	                </div>
	            </section>
	        </div>
		</div>
	        

    <div class="content pure-u-1 pure-u-md-3-4">
        <div>
            <div class="footer">
                <div class="pure-menu pure-menu-horizontal">
                    <ul>
                        <li class="pure-menu-item"><a href="#" class="pure-menu-link">About</a></li>
                        <li class="pure-menu-item"><a href="#" class="pure-menu-link">Twitter</a></li>
                        <li class="pure-menu-item"><a href="#" class="pure-menu-link">GitHub</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>






</body>
</html>