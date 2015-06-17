<?php

$rootURLdist = "http://192.168.1.119/testOpenDev1/dist/";
$mySQLAddress = "localhost";
$mainDbUserName = "root";
$mainDbPass = "pass";
$mainDbName = "testOpenDev1_db";

if (strstr($_SERVER["REQUEST_URI"], 'userlogin.php')){
	if (!isset($_SESSION)){
		session_start();
	}
}else {
	if (!isset($_SESSION)){
		session_start();
		header("Location:{$rootURLdist}userlogin.php");
	}elseif (!isset($_SESSION['USERNAME'])){
		header("Location:{$rootURLdist}userlogin.php");
	}	
}

function userheader(){
	global $rootURLdist;
	global $mySQLAddress;
	global $mainDbUserName;
	global $mainDbPass;
	global $mainDbName;
	
	
	if (strstr($_SERVER["REQUEST_URI"], 'userlogin.php')){
		echo <<< EOT
<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-inverse-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="{$rootURLdist}swipeTest.php">JIOS system</a>
    </div>
    <div class="navbar-collapse collapse navbar-inverse-collapse">
    </div>
</div>
		
EOT;
	}else{
		echo <<< EOT
<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-inverse-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="{$rootURLdist}swipeTest.php">JIOS system</a>
    </div>
    <div class="navbar-collapse collapse navbar-inverse-collapse">
        <ul class="nav navbar-nav">
            <li class=""><a href="#main_cal">カレンダー</a></li>
            <li class="dropdown">
                <a href="" data-target="#" class="dropdown-toggle" data-toggle="dropdown">求人票<b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="#main_jobvote_pickup">ピックアップ求人</a></li>
                    <li><a href="#main_jobvote_new">新着求人</a></li>
                </ul>
            </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li style="background:#EEE;color:#999;"><a href="javascript:void(0)">{$_SESSION['USERNAME']}</a></li>
            <li class="dropdown">
                <a href="bootstrap-elements.html" data-target="#" class="dropdown-toggle" data-toggle="dropdown" style="margin-right:15px;">ユーザーメニュー <b class="caret"></b> </a>
                <ul class="dropdown-menu">
                    <li><a href="javascript:void(0)">情報</a></li>
                    <li><a href="javascript:void(0)">設定</a></li>
                    <li><a href="javascript:void(0)">担当へ連絡</a></li>
                    <li class="divider"></li>
                    <li><a href="{$rootURLdist}userlogout.php">ログアウト</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>
		
EOT;
	}
}

function userlistgroup(){
	echo <<< EOT
<div class="list-group">
    <div class="list-group-item">
        <div class="row-action-primary checkbox">
            <label><input type="checkbox"></label>
        </div>
        <div class="row-content">
            <h4 class="list-group-item-heading">Tile with a checkbox in it</h4>
            <p class="list-group-item-text">Donec id elit non mi risus varius blandit.</p>
        </div>
    </div>
	
    <div class="list-group-separator"></div>
</div>
EOT;
}

function userlistgroup_demo(){
	echo <<< EOT
<div class="list-group">
    <div class="list-group-item">
        <div class="row-picture">
            <img class="circle" src="http://lorempixel.com/56/56/people/1" alt="icon">
        </div>
        <div class="row-content">
            <h4 class="list-group-item-heading">Tile with avatar</h4>
            <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus</p>
        </div>
    </div>
    <div class="list-group-separator"></div>
    <div class="list-group-item">
        <div class="row-picture">
            <img class="circle" src="http://lorempixel.com/56/56/people/6" alt="icon">
        </div>
        <div class="row-content">
            <h4 class="list-group-item-heading">Tile with another avatar</h4>
            <p class="list-group-item-text">Maecenas sed diam eget risus varius blandit.</p>
        </div>
    </div>
    <div class="list-group-separator"></div>
    <div class="list-group-item">
        <div class="row-action-primary checkbox">
            <label><input type="checkbox"></label>
        </div>
        <div class="row-content">
            <h4 class="list-group-item-heading">Tile with a checkbox in it</h4>
            <p class="list-group-item-text">Donec id elit non mi risus varius blandit.</p>
        </div>
    </div>
    <div class="list-group-separator"></div>
</div>
EOT;
}

function userpanel_date(){
	echo <<<EOT
<div class="panel panel-default sampleBox">
    <div class="panel-body">
        Basic panel<br>
			こんにちはこれはデモのパネルです。<br>
			基本的にここには、求人票が入ります。<br>
			もっと文字を入力したり。<br>
			画像をクリックできるようにIDなどを基準にします。<br>
			ここに入る文字制限は基本的にありません。
    </div>
</div>
EOT;
}

function userpanel_n(){
	
	
	echo <<<EOT
<div class="panel panel-default">
    <div class="panel-body linkbox">
        <h4>Basic panel</h4>
			こんにちはこれはデモのパネルです。<br>
			基本的にここには、求人票が入ります。<br>
			もっと文字を入力したり。<br>
			画像をクリックできるようにIDなどを基準にします。<br>
			ここに入る文字制限は基本的にありません。
		<a href="#"></a>
    </div>
</div>
EOT;
}

function userpanel_pick(){
	echo <<<EOT
<div class="panel panel-default sampleBox">
    <div class="panel-body">
		<span class="label label-success">PICK UP</span>
        <h4>Basic panel</h4>
			こんにちはこれはデモのパネルです。<br>
			基本的にここには、求人票が入ります。<br>
			もっと文字を入力したり。<br>
			画像をクリックできるようにIDなどを基準にします。<br>
			ここに入る文字制限は基本的にありません。
    </div>
</div>
EOT;
}

function userpanel_pick_adopt(){
	global $rootURLdist;
	global $mySQLAddress;
	global $mainDbUserName;
	global $mainDbPass;
	global $mainDbName;
	
	$mysqli = new mysqli($mySQLAddress,$mainDbUserName,$mainDbPass,$mainDbName);
	if ($mysqli->connect_error){
		return error_MSG(1);
		$mysqli->close();
		exit();
	}else {
		$query_str = "SELECT comp_info.comp_name,comp_name_kana,job_info.* FROM comp_info INNER JOIN job_info ON comp_info.comp_id = job_info.comp_id";
		$result = $mysqli->query($query_str);
		if (!$result){
			return error_MSG(6);
			exit();
		}else {
			while ($row = $result->fetch_assoc()){
				echo <<<EOT
				<div class="col-md-6 linkbox">
					<div class="panel panel-default">
					    <div class="panel-body">
							<span class="label label-success">PICK UP</span>
					        <h4>{$row['comp_name']}</h4>
								<ul class="list-group">
									<li class="list-group-item">{$row['business_form']}</li>
									<li class="list-group-item">{$row['job_discription']}</li>
									<li class="list-group-item">{$row['base_salary']}</li>
									<li class="list-group-item">{$row['bonus']}</li>
								</ul>
					    </div>
					</div>
					<a href="{$rootURLdist}compad.php?comp_id={$row['comp_id']}&job_info_id={$row['job_info_id']}"></a>
				</div>
EOT;
			}
		}
	}
}

function userbreadcrumbs_demo(){
	
	global $rootURLdist;
	
	if (preg_match("/compad.php/", $_SERVER["REQUEST_URI"])){
		echo <<< EOT
<ul class="breadcrumb" style="margin-bottom: 5px; margin-top: 65px;">
    <li><a href="{$rootURLdist}swipeTest.php" class="">Home</a></li>
    <li class="active">求人詳細</li>
</ul>
EOT;
	}elseif (preg_match("/swipeTest.php/", $_SERVER["REQUEST_URI"])){
		echo <<<EOT
<ul class="breadcrumb" style="margin-bottom: 5px; margin-top: 65px;">
    <li class="active">Home</a></li>
</ul>		
EOT;
	}else {
		echo <<<EOT
<ul class="breadcrumb" style="margin-bottom: 5px; margin-top: 65px;">
    <li class="active">Home</a></li>
</ul>
EOT;
	}
}

function userpanel_n_adopt(){
	global $rootURLdist;
	global $mySQLAddress;
	global $mainDbUserName;
	global $mainDbPass;
	global $mainDbName;
	
	$mysqli = new mysqli($mySQLAddress,$mainDbUserName,$mainDbPass,$mainDbName);
	if ($mysqli->connect_error){
		return error_MSG(1);
		$mysqli->close();
		exit();
	}else {
		$query_str = "SELECT * FROM comp_info";
		$result = $mysqli->query($query_str);
		if (!$result){
			return error_MSG(6);
			exit();
		}else {
			while ($row = $result->fetch_assoc()){
				echo <<< EOT
				<div class="col-md-2 sampleBox">
					<div class="panel panel-default sampleBox">
					    <div class="panel-body">
							<span class="label label-success">PICK UP</span>
					        <h4>{$row['comp_name']}</h4>
							<ul class="list-group">
							  <li class="list-group-item">{$row['comp_a_ns']}</li>
							  <li class="list-group-item">{$row['comp_b_ns']}</li>
							</ul>
					    </div>
					</div>
				</div>
EOT;
			}
		}
		
		
	}
	
}

function userpanel_n_demo(){
	echo <<<EOT
<div class="panel panel-default">
    <div class="panel-body">
        Basic panel
    </div>
</div>

<div class="panel panel-default">
    <div class="panel-heading">Panel heading</div>
    <div class="panel-body">
        Panel content
    </div>
</div>

<div class="panel panel-default">
    <div class="panel-body">
        Panel content
    </div>
    <div class="panel-footer">Panel footer</div>
</div>
EOT;
}

function  userblocklevel_demo(){
	echo <<<EOT
<div class="btn-toolbar">
    <div class="btn-group">
        <a href="javascript:void(0)" class="btn btn-default">1</a>
        <a href="javascript:void(0)" class="btn btn-default">2</a>
        <a href="javascript:void(0)" class="btn btn-default">3</a>
        <a href="javascript:void(0)" class="btn btn-default">4</a>
    </div>

    <div class="btn-group">
        <a href="javascript:void(0)" class="btn btn-default">5</a>
        <a href="javascript:void(0)" class="btn btn-default">6</a>
        <a href="javascript:void(0)" class="btn btn-default">7</a>
    </div>

    <div class="btn-group">
        <a href="javascript:void(0)" class="btn btn-default">8</a>
        <div class="btn-group">
            <a href="bootstrap-elements.html" data-target="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                Dropdown
                <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
                <li><a href="javascript:void(0)">Dropdown link</a></li>
                <li><a href="javascript:void(0)">Dropdown link</a></li>
                <li><a href="javascript:void(0)">Dropdown link</a></li>
            </ul>
        </div>
    </div>
</div>
EOT;
}

function userdateselect(){
	$time = time();
	$result_month = "";
	$result_year = "";
	$result_day = "";
	$month = date("n",$time);
	$year = date("Y",$time);
	$day = date("j",$time);
	
	for ($i=1900;$i<=$year+4;$i++	){
		if ($i == $year){
			$result_year .= "<option value=\"$i\" selected>$i</option>";
		}else{
			$result_year .= "<option value=\"$i\">$i</option>";
		}
	}
	
	for( $j = 1; $j <= 12; $j++ ){
		if ($j<10){
			if( $j == $month ){
				$result_month .= "<option value=\"0$j\" selected>0$j</option>";
			}else{
				$result_month .= "<option value=\"0$j\">0$j</option>";
			}
		}else{
			if( $j == $month ){
				$result_month .= "<option value=\"$j\" selected>$j</option>";
			}else{
				$result_month .= "<option value=\"$j\">$j</option>";
			}
		}
	}
	
	for( $k = 1; $k <=31 ; $k++ ){
		if ($k<10){
			if( $k == $day ){
				$result_day .= "<option value=\"0$k\" selected>0$k</option>";
			}else{
	            $result_day .= "<option value=\"0$k\">0$k</option>";
			}
		}else{
			if( $k == $day ){
				$result_day .= "<option value=\"$k\" selected>$k</option>";
			}else{
				$result_day .= "<option value=\"$k\">$k</option>";
			}
		}
	}
	
	echo <<<EOT

<div class="panel panel-default">
    <div class="panel-heading">年月日の選択</div>
    <div class="panel-body">
		<form class="form-horizontal">
		    <fieldset>
		        <div class="form-group">
	            	<div class="col-lg-10">
		                <select class="form-control" id="select">
		                    <option>年</option>
							{$result_year}
		                </select>
		                <br>
		                <select class="form-control" id="select">
		                    <option>月</option>
							{$result_month}
		                </select>
						<br>
						<select class="form-control" id="select">
							<option>日</option>
							{$result_day}
						</select>
					</div>
		        </div>
		        <div class="form-group" style="text-align: center;">
					<button type="submit" class="btn btn-primary">選択</button>
		        </div>
		    </fieldset>
		</form>  
    </div>
</div>
EOT;
}

function usercal_demo(){
	echo <<< EOT
	<div class="panel panel-default">
		<div class="panel-heading" style="padding:8px 15px 8px 15px; text-align:right;">
			<a href="javascript:void(0)" id="cal_numbered" class="btn btn-flat btn-default" style="padding:0; margin:0;"><i class="mdi-editor-format-list-numbered" style="padding:0 30px 0 30px;"></i></a>
			<a href="javascript:void(0)" id="cal_headline" class="btn btn-flat btn-default" style="padding:0; margin:0;"><i class="mdi-action-view-headline" style="padding:0 30px 0 30px;"></i></a>
			<a href="javascript:void(0)" id="cal_week" class="btn btn-flat btn-default" style="padding:0; margin:0;"><i class="mdi-action-view-week" style="padding:0 30px 0 30px;"></i></a>
		</div>
		<div class="panel-body">
			<div class="swiper-container">
				<div class="swiper-wrapper">
					<div class="swiper-slide"><div>1日</div><?php usertable_demo(); ?></div>
					<div class="swiper-slide"><div>2日</div><?php usertable_demo(); ?></div>
					<div class="swiper-slide"><div>3日</div><?php usertable_demo(); ?></div>
				</div>
			</div>
		</div>
	</div>
EOT;
}

function usertable_demo(){
	echo <<<EOT
<table class="table table-striped table-hover ">
    <thead>
        <tr>
            <th>#</th>
            <th>Column heading</th>
            <th>Column heading</th>
            <th>Column heading</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>Column content</td>
            <td>Column content</td>
            <td>Column content</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Column content</td>
            <td>Column content</td>
            <td>Column content</td>
        </tr>
        <tr class="info">
            <td>3</td>
            <td>Column content</td>
            <td>Column content</td>
            <td>Column content</td>
        </tr>
    </tbody>
</table>
EOT;
}

function user_form_sort_v1(){
	echo <<<EOT

<div class="panel panel-default">
    <div class="panel-body">
      	<form class="form-horizontal">
		    <fieldset>
		        <legend>検索</legend>
				<div class="row">
					<div class="col-md-4">
				        <div class="form-group">
				            <label for="textArea" class="col-lg-2 control-label" placeholder="フリーワードで検索"></label>
				            <div class="col-lg-10">
				                <textarea class="form-control" rows="3" id="textArea"></textarea>
				                <span class="help-block">フリーワードで企業名、職種、紹介文など全てから検索します。</span>
				            </div>
				        </div>
					</div>
					<div class="col-md-4">
				        <div class="form-group">
				            <label class="col-lg-2 control-label"></label>
				            <div class="col-lg-10">
				                <div class="radio radio-primary">
				                    <label>
				                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
				                        Option one is this
				                    </label>
				                </div>
				                <div class="radio radio-primary">
				                    <label>
				                        <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
				                        Option two can be something else
				                    </label>
				                </div>
							
								<div class="checkbox">
				                    <label>
				                        <input type="checkbox"> Checkbox
				                    </label>
				                </div>
				                <br>
				                <div class="togglebutton">
				                    <label>
				                        <input type="checkbox" checked=""> Toggle button
				                    </label>
				                </div>
			
				            </div>
				        </div>
					</div>
					<div class="col-md-4">
				        <div class="form-group">
				            <label for="select" class="col-lg-2 control-label"></label>
				            <div class="col-lg-10">
				                <select class="form-control" id="select">
				                    <option>1</option>
				                    <option>2</option>
				                    <option>3</option>
				                    <option>4</option>
				                    <option>5</option>
				                </select>
				                <br>
				                <select multiple="" class="form-control">
				                    <option>1</option>
				                    <option>2</option>
				                    <option>3</option>
				                    <option>4</option>
				                    <option>5</option>
				                </select>
				            </div>
				        </div>
					</div>
				</div>
				<div class="row" style="background:#EEE;">
					<div class="col-md-10">
						検索するには「検索」ボタンを押してください
			
					</div>
					<div class="col-md-2" style="background:#EEE;">
						<button type="submit" class="btn btn-primary" name="serch_adoption"><i class="mdi-action-search"></i><span style="vertical-align: 5px;">検索</span></button>
					</div>
				</div>
		    </fieldset>
		</form>  
    </div>
</div>
EOT;
}

function userlogin_demo(){
	echo <<<EOT
		<div class="bs-docs-section">
                <div class="row">
					<div class="col-lg-6">
                        <div class="well bs-component">
                            <form class="form-horizontal" method="POST">
                                <fieldset>
                                    <legend>ログイン</legend>
                                    <div class="form-group">
                                        <label for="inputEmail" class="col-lg-2 control-label">Eメール</label>
                                        <div class="col-lg-10">
                                            <div class="form-control-wrapper">
												<input class="form-control floating-label" name="userlogin_mail" type="Email" placeholder="メールアドレス" data-hint="メールアドレス入力ミスにご注意ください。">
											</div>
                                        </div>
                                    </div>
                                    <div class="form-group">
										<label for="inputEmail" class="col-lg-2 control-label">PASSWORD</label>
										<div class="col-lg-10">
                                        	<div class="form-control-wrapper">
												<input class="form-control floating-label" name="userlogin_pass" type="Password" placeholder="パスワード" data-hint="パスワードに入力ミスにご注意ください。">
											</div>
										</div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-lg-10 col-lg-offset-2">
                                            <button type="submit" class="btn btn-primary" name="userlogin">ログイン</button>
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
                        <div id="source-button" class="btn btn-primary btn-xs" style="display: none;">&lt; &gt;</div></div>
                    </div>
					<div class="col-lg-4 col-lg-offset-1">
						<h2>ようこそJIOSへ</h2>
						<p>初回認証・パスワード変更をおこなっていない方は、下記ボタンより初回認証を行ってください。</p>
						<a href="javascript:void(0)" class="btn btn-info btn-warning">初回認証</a>
						<h2>各種問い合わせ</h2>
						<p>各種お問い合わせは下記ボタンよりお問い合わせフォームにてお問い合わせ出来ます。</p>
						<a href="javascript:void(0)" class="btn btn-info btn-raised">問合わせ</a>
                    </div>
                </div>
            </div>
EOT;
}

function usercompadopt(){
	
	global $rootURLdist;
	global $mySQLAddress;
	global $mainDbUserName;
	global $mainDbPass;
	global $mainDbName;
	
	$get_comp_id = $_GET['comp_id'];
	$get_job_info_id = $_GET['job_info_id'];
	
	$mysqli = new mysqli($mySQLAddress,$mainDbUserName,$mainDbPass,$mainDbName);
	if ($mysqli->connect_error){
		return error_MSG(1);
		$mysqli->close();
		exit();
	}else {
		$query_str = "SELECT comp_info.*,job_info.* FROM comp_info INNER JOIN job_info ON comp_info.comp_id = job_info.comp_id WHERE (((job_info.job_info_id)={$get_job_info_id}));";
		$query_str_image = "SELECT comp_info.*,job_info.*,image.* FROM (comp_info INNER JOIN job_info ON comp_info.comp_id = job_info.comp_id) INNER JOIN image ON job_info.job_info_id = image.job_info_id";
		$result = $mysqli->query($query_str);
		if (!$result){
			return error_MSG(6);
			exit();
		}else {
			while ($row = $result->fetch_assoc()){
				echo <<< EOT
		<div class = "row">
			<div class="col-md-8">
				<div class="panel panel-success">
				    <div class="panel-heading">
				        <h3 class="panel-title">求人情報</h3>
				    </div>
				    <div class="panel-body">
				        <a href="javascript:void(0)" class="btn btn-flat btn-success">他の類似求人を見る</a>
						<div class="bs-component">
                            <div class="progress progress-striped active">
                                <div class="progress-bar" style="width: 100%"></div>
                            </div>
                        <div id="source-button" class="btn btn-primary btn-xs" style="display: none;">&lt; &gt;</div></div>
						<div class="list-group">
						    <div class="list-group-item">
						        <div class="row-action-primary">
						            <i class="mdi-file-folder"></i>
						        </div>
						        <div class="row-content">
						            <div class="least-content"></div>
						            <h4 class="list-group-item-heading">雇用形態</h4>
						            <p class="list-group-item-text">{$row['business_form']}</p>
						        </div>
						    </div>
						    <div class="list-group-separator"></div>
						
						    <div class="list-group-item">
						        <div class="row-action-primary">
						            <i class="mdi-file-folder"></i>
						        </div>
						        <div class="row-content">
						            <div class="least-content"></div>
						            <h4 class="list-group-item-heading">学歴</h4>
						            <p class="list-group-item-text">{$row['educational']}</p>
						        </div>
						    </div>
						    <div class="list-group-separator"></div>
						
						    <div class="list-group-item">
						        <div class="row-action-primary">
						            <i class="mdi-file-folder"></i>
						        </div>
						        <div class="row-content">
						            <div class="least-content"></div>
						            <h4 class="list-group-item-heading">職種</h4>
						            <p class="list-group-item-text">{$row['job_category']}</p>
						        </div>
						    </div>
						    <div class="list-group-separator"></div>
							
							<div class="list-group-item">
						        <div class="row-action-primary">
						            <i class="mdi-file-folder"></i>
						        </div>
						        <div class="row-content">
						            <div class="least-content"></div>
						            <h4 class="list-group-item-heading">仕事内容</h4>
						            <p class="list-group-item-text">{$row['job_discription']}</p>
						        </div>
						    </div>
						    <div class="list-group-separator"></div>
						
							<div class="list-group-item">
						        <div class="row-action-primary">
						            <i class="mdi-file-folder"></i>
						        </div>
						        <div class="row-content">
						            <div class="least-content"></div>
						            <h4 class="list-group-item-heading">基本給</h4>
						            <p class="list-group-item-text">{$row['base_salary']}</p>
						        </div>
						    </div>
						    <div class="list-group-separator"></div>
						    
							<div class="list-group-item">
						        <div class="row-action-primary">
						            <i class="mdi-file-folder"></i>
						        </div>
						        <div class="row-content">
						            <div class="least-content"></div>
						            <h4 class="list-group-item-heading">追加項目</h4>
						            <p class="list-group-item-text">追加項目</p>
						        </div>
						    </div>
						    <div class="list-group-separator"></div>
						
						</div>
				    </div>
				</div>
			</div>
		
			<div class="col-md-4">
				<div class="panel panel-info">
				    <div class="panel-heading">
				        <h3 class="panel-title">企業情報</h3>
				    </div>
				    <div class="panel-body">
				        <a href="javascript:void(0)" class="btn btn-flat btn-info">この企業の求人一覧</a>
						<div class="bs-component">
                            <div class="progress progress-striped active">
                                <div class="progress-bar" style="width: 100%"></div>
                            </div>
                        <div id="source-button" class="btn btn-primary btn-xs" style="display: none;">&lt; &gt;</div></div>
						
						<div class="list-group">
						    <div class="list-group-item">
						        <div class="row-content" style="width:100%;">
						            <div class="action-secondary"><i class="mdi-material-info"></i></div>
						            <h4 class="list-group-item-heading">企業名</h4>
						            <p class="list-group-item-text" style="max-width:100%;">{$row['comp_name']}</p>
						        </div>
						    </div>
						    <div class="list-group-separator"></div>
						    <div class="list-group-item">
						        <div class="row-content" style="width:100%;">
						            <div class="action-secondary"><i class="mdi-material-info"></i></div>
						            <h4 class="list-group-item-heading">企業カナ名</h4>
						            <p class="list-group-item-text" style="max-width:100%;">{$row['comp_name_kana']}</p>
						        </div>
						    </div>
						    <div class="list-group-separator"></div>
						            		
						    <div class="list-group-item">
						        <div class="row-content" style="width:100%;">
						            <div class="action-secondary"><i class="mdi-material-info"></i></div>
						            <h4 class="list-group-item-heading">会社住所</h4>
						            <p class="list-group-item-text" style="max-width:100%;">{$row['comp_zipcode']}<br>{$row['comp_street_address']}</p>
						        </div>
						    </div>
						    <div class="list-group-separator"></div>
						            		
						    <div class="list-group-item">
						        <div class="row-content" style="width:100%;">
						            <div class="action-secondary"><i class="mdi-material-info"></i></div>
						            <h4 class="list-group-item-heading">会社代表名</h4>
						            <p class="list-group-item-text" style="max-width:100%;">{$row['comp_ceo_name']}</p>
						        </div>
						    </div>
						    <div class="list-group-separator"></div>
						</div>
				    </div>
				</div>
			</div>
EOT;
			}
		}
		
		$contents_type = array(
				'jpg'  => 'image/jpeg',
				'jpeg' => 'image/jpeg',
				'png'  => 'image/png',
				'gif'  => 'image/gif',
				'bmp'  => 'image/bmp',
		);
		
		$result_image = $mysqli->query($query_str_image);
		if (!$result_image){
			return error_MSG(6);
			exit();
		}else {
			echo <<< EOT
			<div class="col-md-12">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h3 class="panel-title">添付写真</h3>
					</div>
					<div class="panel-body">
						            	<div class="swiper-container swiper-container-horizontal">
									        <div class="swiper-wrapper" style="height:auto;">
												<div class="swiper-slide"><img class="img-responsive" src="http://192.168.1.119/testOpenDev1/img/common/640x480.png" /></div>
									            <div class="swiper-slide"><img class="img-responsive" src="http://192.168.1.119/testOpenDev1/img/common/800x600.png" /></div>
EOT;
			while ($row_image = $result_image->fetch_assoc()){
				if ($get_job_info_id == $row_image['job_info_id']){
					echo <<< EOT
						<div class="swiper-slide"><img class="img-responsive" src="{$rootURLdist}imageload.php?id={$row_image['id']}" /></div>
EOT;
				}	
			}
			echo <<<EOT
			
										        </div>
										        <!-- Add Pagination -->
										        <div class="swiper-pagination"></div>
										    </div>
						</div>
					</div>
				</div>
			</div>
EOT;
		}
	}
}

function userlogin_auth(){
	
	global $rootURLdist;
	global $mySQLAddress;
	global $mainDbUserName;
	global $mainDbPass;
	global $mainDbName;
	
	if (isset($_POST['userlogin'])){
		if (empty($_POST['userlogin_email']) or empty($_POST['userlogin_pass'])){
			$userloginERR = "ERROR";
		}else {
			$mysqli = new mysqli($mySQLAddress,$mainDbUserName,$mainDbPass,$mainDbName);
			if ($mysqli->connect_error){
				$userloginERR = "ERROR";
				$mysqli->close();
				exit();
			}else {
				$query_str = "SELECT * FROM user WHERE user_name = '".$_POST['userlogin_email']."'";
				$result = $mysqli->query($query_str);
				if (!$result){
					$userloginERR = "ERROR";
					exit(); 
				}else {
					while ($row = $result->fetch_assoc()){
						if (password_verify($_POST['userlogin_pass'], $row['user_password'])){
							header("Location:{$rootURLdist}swipeTest.php");
						}else {
							$userloginERR = "ERROR";
							exit();
						}
					}
				}
			}
			if (mysql_num_rows($result)==0){
				$userloginERR = "ERROR";
				header("Location:{$rootURLdist}userlogin.php");
				exit();
			}
		}
	}
}

?>
