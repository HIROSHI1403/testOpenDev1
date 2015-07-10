<?php
require_once 'managefunctions.php';

function manage_content_top(){
	
	global $mySQLAddress;
	global $mainDbUserName;
	global $mainDbPass;
	global $mainDbName;
	global $rootURLmanage;
	global $rootURL;
	
	$user_num = manage_counter("user");
	$comp_num = manage_counter("comp");
	$job_num = manage_counter("job");
	echo <<<EOT
			<div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"><i class="fa fa-dashboard"></i> ダッシュボード</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-group fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">{$user_num}</div>
                                    <div>登録済みユーザー数</div>
                                </div>
                            </div>
                        </div>
                        <a href="{$rootURLmanage}manageusermanage.php">
                            <div class="panel-footer">
                                <span class="pull-left">ユーザー管理画面へ</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-building-o fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">{$comp_num}</div>
                                    <div>登録済み企業数</div>
                                </div>
                            </div>
                        </div>
                        <a href="{$rootURLmanage}managecompmanage.php">
                            <div class="panel-footer">
                                <span class="pull-left">企業管理画面へ</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-file-text-o fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">{$job_num}</div>
                                    <div>登録済み求人票数</div>
                                </div>
                            </div>
                        </div>
                        <a href="{$rootURLmanage}managejobmanage.php">
                            <div class="panel-footer">
                                <span class="pull-left">求人票管理画面へ</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-bell-o fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">13</div>
                                    <div>お知らせ</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">詳細を見る</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
EOT;
}

function manage_content_chart(){
	echo <<< EOT
	<div class="row">
                <div class="col-lg-8">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i> Area Chart Example
                            <div class="pull-right">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                        Actions
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu pull-right" role="menu">
                                        <li><a href="#">Action</a>
                                        </li>
                                        <li><a href="#">Another action</a>
                                        </li>
                                        <li><a href="#">Something else here</a>
                                        </li>
                                        <li class="divider"></li>
                                        <li><a href="#">Separated link</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div id="morris-area-chart"></div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i> Bar Chart Example
                            <div class="pull-right">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                        Actions
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu pull-right" role="menu">
                                        <li><a href="#">Action</a>
                                        </li>
                                        <li><a href="#">Another action</a>
                                        </li>
                                        <li><a href="#">Something else here</a>
                                        </li>
                                        <li class="divider"></li>
                                        <li><a href="#">Separated link</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover table-striped">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Date</th>
                                                    <th>Time</th>
                                                    <th>Amount</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>3326</td>
                                                    <td>10/21/2013</td>
                                                    <td>3:29 PM</td>
                                                    <td>$321.33</td>
                                                </tr>
                                                <tr>
                                                    <td>3325</td>
                                                    <td>10/21/2013</td>
                                                    <td>3:20 PM</td>
                                                    <td>$234.34</td>
                                                </tr>
                                                <tr>
                                                    <td>3324</td>
                                                    <td>10/21/2013</td>
                                                    <td>3:03 PM</td>
                                                    <td>$724.17</td>
                                                </tr>
                                                <tr>
                                                    <td>3323</td>
                                                    <td>10/21/2013</td>
                                                    <td>3:00 PM</td>
                                                    <td>$23.71</td>
                                                </tr>
                                                <tr>
                                                    <td>3322</td>
                                                    <td>10/21/2013</td>
                                                    <td>2:49 PM</td>
                                                    <td>$8345.23</td>
                                                </tr>
                                                <tr>
                                                    <td>3321</td>
                                                    <td>10/21/2013</td>
                                                    <td>2:23 PM</td>
                                                    <td>$245.12</td>
                                                </tr>
                                                <tr>
                                                    <td>3320</td>
                                                    <td>10/21/2013</td>
                                                    <td>2:15 PM</td>
                                                    <td>$5663.54</td>
                                                </tr>
                                                <tr>
                                                    <td>3319</td>
                                                    <td>10/21/2013</td>
                                                    <td>2:13 PM</td>
                                                    <td>$943.45</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.table-responsive -->
                                </div>
                                <!-- /.col-lg-4 (nested) -->
                                <div class="col-lg-8">
                                    <div id="morris-bar-chart"></div>
                                </div>
                                <!-- /.col-lg-8 (nested) -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-clock-o fa-fw"></i> Responsive Timeline
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <ul class="timeline">
                                <li>
                                    <div class="timeline-badge"><i class="fa fa-check"></i>
                                    </div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">Lorem ipsum dolor</h4>
                                            <p><small class="text-muted"><i class="fa fa-clock-o"></i> 11 hours ago via Twitter</small>
                                            </p>
                                        </div>
                                        <div class="timeline-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero laboriosam dolor perspiciatis omnis exercitationem. Beatae, officia pariatur? Est cum veniam excepturi. Maiores praesentium, porro voluptas suscipit facere rem dicta, debitis.</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="timeline-inverted">
                                    <div class="timeline-badge warning"><i class="fa fa-credit-card"></i>
                                    </div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">Lorem ipsum dolor</h4>
                                        </div>
                                        <div class="timeline-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem dolorem quibusdam, tenetur commodi provident cumque magni voluptatem libero, quis rerum. Fugiat esse debitis optio, tempore. Animi officiis alias, officia repellendus.</p>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium maiores odit qui est tempora eos, nostrum provident explicabo dignissimos debitis vel! Adipisci eius voluptates, ad aut recusandae minus eaque facere.</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="timeline-badge danger"><i class="fa fa-bomb"></i>
                                    </div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">Lorem ipsum dolor</h4>
                                        </div>
                                        <div class="timeline-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus numquam facilis enim eaque, tenetur nam id qui vel velit similique nihil iure molestias aliquam, voluptatem totam quaerat, magni commodi quisquam.</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="timeline-inverted">
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">Lorem ipsum dolor</h4>
                                        </div>
                                        <div class="timeline-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates est quaerat asperiores sapiente, eligendi, nihil. Itaque quos, alias sapiente rerum quas odit! Aperiam officiis quidem delectus libero, omnis ut debitis!</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="timeline-badge info"><i class="fa fa-save"></i>
                                    </div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">Lorem ipsum dolor</h4>
                                        </div>
                                        <div class="timeline-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis minus modi quam ipsum alias at est molestiae excepturi delectus nesciunt, quibusdam debitis amet, beatae consequuntur impedit nulla qui! Laborum, atque.</p>
                                            <hr>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown">
                                                    <i class="fa fa-gear"></i>  <span class="caret"></span>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li><a href="#">Action</a>
                                                    </li>
                                                    <li><a href="#">Another action</a>
                                                    </li>
                                                    <li><a href="#">Something else here</a>
                                                    </li>
                                                    <li class="divider"></li>
                                                    <li><a href="#">Separated link</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">Lorem ipsum dolor</h4>
                                        </div>
                                        <div class="timeline-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi fuga odio quibusdam. Iure expedita, incidunt unde quis nam! Quod, quisquam. Officia quam qui adipisci quas consequuntur nostrum sequi. Consequuntur, commodi.</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="timeline-inverted">
                                    <div class="timeline-badge success"><i class="fa fa-graduation-cap"></i>
                                    </div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">Lorem ipsum dolor</h4>
                                        </div>
                                        <div class="timeline-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt obcaecati, quaerat tempore officia voluptas debitis consectetur culpa amet, accusamus dolorum fugiat, animi dicta aperiam, enim incidunt quisquam maxime neque eaque.</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-8 -->
                <div class="col-lg-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bell fa-fw"></i> Notifications Panel
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="list-group">
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-comment fa-fw"></i> New Comment
                                    <span class="pull-right text-muted small"><em>4 minutes ago</em>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="pull-right text-muted small"><em>12 minutes ago</em>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-envelope fa-fw"></i> Message Sent
                                    <span class="pull-right text-muted small"><em>27 minutes ago</em>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-tasks fa-fw"></i> New Task
                                    <span class="pull-right text-muted small"><em>43 minutes ago</em>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small"><em>11:32 AM</em>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-bolt fa-fw"></i> Server Crashed!
                                    <span class="pull-right text-muted small"><em>11:13 AM</em>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-warning fa-fw"></i> Server Not Responding
                                    <span class="pull-right text-muted small"><em>10:57 AM</em>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-shopping-cart fa-fw"></i> New Order Placed
                                    <span class="pull-right text-muted small"><em>9:49 AM</em>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-money fa-fw"></i> Payment Received
                                    <span class="pull-right text-muted small"><em>Yesterday</em>
                                    </span>
                                </a>
                            </div>
                            <!-- /.list-group -->
                            <a href="#" class="btn btn-default btn-block">View All Alerts</a>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i> Donut Chart Example
                        </div>
                        <div class="panel-body">
                            <div id="morris-donut-chart"></div>
                            <a href="#" class="btn btn-default btn-block">View Details</a>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                    <div class="chat-panel panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-comments fa-fw"></i>
                            Chat
                            <div class="btn-group pull-right">
                                <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-chevron-down"></i>
                                </button>
                                <ul class="dropdown-menu slidedown">
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-refresh fa-fw"></i> Refresh
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-check-circle fa-fw"></i> Available
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-times fa-fw"></i> Busy
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-clock-o fa-fw"></i> Away
                                        </a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-sign-out fa-fw"></i> Sign Out
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <ul class="chat">
                                <li class="left clearfix">
                                    <span class="chat-img pull-left">
                                        <img src="http://placehold.it/50/55C1E7/fff" alt="User Avatar" class="img-circle" />
                                    </span>
                                    <div class="chat-body clearfix">
                                        <div class="header">
                                            <strong class="primary-font">Jack Sparrow</strong>
                                            <small class="pull-right text-muted">
                                                <i class="fa fa-clock-o fa-fw"></i> 12 mins ago
                                            </small>
                                        </div>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.
                                        </p>
                                    </div>
                                </li>
                                <li class="right clearfix">
                                    <span class="chat-img pull-right">
                                        <img src="http://placehold.it/50/FA6F57/fff" alt="User Avatar" class="img-circle" />
                                    </span>
                                    <div class="chat-body clearfix">
                                        <div class="header">
                                            <small class=" text-muted">
                                                <i class="fa fa-clock-o fa-fw"></i> 13 mins ago</small>
                                            <strong class="pull-right primary-font">Bhaumik Patel</strong>
                                        </div>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.
                                        </p>
                                    </div>
                                </li>
                                <li class="left clearfix">
                                    <span class="chat-img pull-left">
                                        <img src="http://placehold.it/50/55C1E7/fff" alt="User Avatar" class="img-circle" />
                                    </span>
                                    <div class="chat-body clearfix">
                                        <div class="header">
                                            <strong class="primary-font">Jack Sparrow</strong>
                                            <small class="pull-right text-muted">
                                                <i class="fa fa-clock-o fa-fw"></i> 14 mins ago</small>
                                        </div>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.
                                        </p>
                                    </div>
                                </li>
                                <li class="right clearfix">
                                    <span class="chat-img pull-right">
                                        <img src="http://placehold.it/50/FA6F57/fff" alt="User Avatar" class="img-circle" />
                                    </span>
                                    <div class="chat-body clearfix">
                                        <div class="header">
                                            <small class=" text-muted">
                                                <i class="fa fa-clock-o fa-fw"></i> 15 mins ago</small>
                                            <strong class="pull-right primary-font">Bhaumik Patel</strong>
                                        </div>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- /.panel-body -->
                        <div class="panel-footer">
                            <div class="input-group">
                                <input id="btn-input" type="text" class="form-control input-sm" placeholder="Type your message here..." />
                                <span class="input-group-btn">
                                    <button class="btn btn-warning btn-sm" id="btn-chat">
                                        Send
                                    </button>
                                </span>
                            </div>
                        </div>
                        <!-- /.panel-footer -->
                    </div>
                    <!-- /.panel .chat-panel -->
                </div>
                <!-- /.col-lg-4 -->
            </div>
            <!-- /.row -->
EOT;
}

function birthday_html(){
	$time = time();
	$year = date("Y",$time);
	$month = date("n",$time);
	$day = date("j",$time);

	$birthday_html_doc = "";

	$birthday_html_doc .= "<div class=\"col-md-4\">";

	$birthday_html_doc .= "年<select class=\"form-control\" name=\"year\">";
	for ($i=1900;$i<=$year;$i++	){
		if ($i == $year){
			$birthday_html_doc .= "<option value=\"$i\" selected>$i</option>";
		}else{
			$birthday_html_doc .= "<option value=\"$i\">$i</option>";
		}
	}
	$birthday_html_doc .= "</select>";

	$birthday_html_doc .= "</div>";
	$birthday_html_doc .= "<div class=\"col-md-4\">";

	$birthday_html_doc .= "月<select class=\"form-control\" name=\"month\">";
	for( $j = 1; $j <= 12; $j++ ){
		if ($j<10){
			if( $j == $month ){
				$birthday_html_doc .= "<option value=\"0$j\" selected>0$j</option>";
			}else{
				$birthday_html_doc .= "<option value=\"0$j\">0$j</option>";
			}
		}else{
			if( $j == $month ){
				$birthday_html_doc .= "<option value=\"$j\" selected>$j</option>";
			}else{
				$birthday_html_doc .= "<option value=\"$j\">$j</option>";
			}
		}
	}
	$birthday_html_doc .= "</select>";

	$birthday_html_doc .= "</div>";
	$birthday_html_doc .= "<div class=\"col-md-4\">";

	$birthday_html_doc .= "日<select class=\"form-control\" name=\"day\">";
	for( $k = 1; $k <=31 ; $k++ ){
		if ($k<10){
			if( $k == $day ){
				$birthday_html_doc .= "<option value=\"0$k\" selected>0$k</option>";
			}else{
				$birthday_html_doc .= "<option value=\"0$k\">0$k</option>";
			}
		}else{
			if( $k == $day ){
				$birthday_html_doc .= "<option value=\"$k\" selected>$k</option>";
			}else{
				$birthday_html_doc .= "<option value=\"$k\">$k</option>";
			}
		}
	}
	$birthday_html_doc .= "</select>";
	$birthday_html_doc .= "</div>";
	return $birthday_html_doc;
}

function manage_content_useradd($add_alert){
	global $mySQLAddress,$mainDbUserName,$mainDbPass,$mainDbName,$rootURLmanage,$mysqli,$msg_row;
	
	
	$birthday_select = birthday_html();
	
	echo <<< EOT
			<div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"><i class="fa fa-plus-square-o"></i> 新規ユーザー登録</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
			<div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
						<div class="panel-heading"><i class="glyphicon glyphicon-open-file"></i> ファイルから新規登録</div>
						<!-- panel heading -->
						<div class="panel-body">
							<div class="row">
								<div class="col-md-6">
									<form>
									  	<div class="form-group">
											<h4>ファイル選択</h4>
										    <input type="file" id="exampleInputFile">
										    <p class="help-block">※ファイルは指定のファイルのみ利用可能です。</p>
									  	</div>
									  	<button type="submit" class="btn btn-primary">ファイルを送信・登録</button>
									</form>
								</div>
								<div class="col-md-6">
									<form>
									  	<div class="form-group">
											<h4>雛形ファイルダウンロード</h4>
											<button type="submit" class="btn btn-outline btn-info btn-sm" name="base_download">雛形ファイルのダウンロード</button>
											<h4>全ファイルのダウンロード（確認用）</h4>
											<button type="submit" class="btn btn-outline btn-info btn-sm" name="base_download">全ファイルのダウンロード</button>
									  	</div>
									</form>
								</div>
							</div>
						</div>
						<!-- panel body -->
					</div>
					<!-- panel defolt -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
EOT;
	if (!isset($add_alert)){
	
	}elseif ($add_alert == "ng") {
		echo <<< EOT
			<div class="row">
				<div class="col-lg-12">
					<div class="alert alert-danger alert-dismissable">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
							入力項目に不足があります。大変お手数ですが、もう一度入力内容をご確認の上再度入力・登録お願い致します。
					</div>
				</div>
				<!-- /.col-lg-12 -->
			</div>
			<!-- /.row -->
EOT;
	}elseif ($add_alert == "ok"){
		echo <<< EOT
			<div class="row">
				<div class="col-lg-12">
					<div class="alert alert-success alert-dismissable">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
							登録完了しました。
					</div>
				</div>
				<!-- /.col-lg-12 -->
			</div>
			<!-- /.row -->
EOT;
	}else {
		echo <<< EOT
			<div class="row">
				<div class="col-lg-12">
					<div class="alert alert-danger alert-dismissable">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
							{$add_alert}
					</div>
				</div>
				<!-- /.col-lg-12 -->
			</div>
			<!-- /.row -->
EOT;
	}
	echo <<< EOT
			<div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
						<div class="panel-heading"><i class="fa fa-keyboard-o"></i> 入力して新規登録</div>
						<!-- panel heading -->

						<div class="panel-body">
							<form role="form" method="POST">
								<div class="row">
									<div class="form-group col-md-6">
									 	<label>ユーザー名</label>
									 	<input class="form-control" name="username" type="text" placeholder="ユーザー名を入力してください。">
									</div>
									<div class="form-group col-md-6">
									 	<label>メールアドレス</label>
									 	<input class="form-control" name="useremail" type="email" placeholder="exmaple@mail.com">
									</div>
								</div>
								<div class="row">
									<div class="form-group col-md-12">
										<label>誕生日</label>
										<div class="row">
											{$birthday_select}
										</div>
									</div>
								</div>
								<div class="row">
									<div class="form-group col-md-12">
										<button type="submit" name="user_submit" class="btn btn-primary"><i class="fa fa-check"></i>  登録</button>
										<button type="reset" name="user_reset" class="btn btn-outline btn-info"><i class="fa fa-refresh"></i>  リセット</button>
									</div>
								</div>
							</form>
						</div>
						<!-- panel body -->
					</div>
					<!-- panel defolt -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

EOT;
}


function manage_content_usermanage(){
	global $mySQLAddress,$mainDbUserName,$mainDbPass,$mainDbName,$rootURLmanage,$mysqli,$msg_row;
	
	echo <<< EOT
			<div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"><i class="fa fa-edit"></i> ユーザー検索・編集</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

			
			
			<div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
						<div class="panel-heading">ユーザー管理</div>
						<!-- panel heading -->
						<div class="panel-body">
							<nav class="navbar navbar-default">
								<div class="container-fluid">
									<div class="navbar-header">
									<p class="navbar-text">ユーザー名検索</p>
										<form class="navbar-form navbar-left" role="search" method="POST">
										  <div class="form-group">
												<input type="text" name="manage_user_search" class="form-control" placeholder="名前で検索">
										  </div>
										  <button type="submit" name="submit_manage_user_search" class="btn btn-default">検索</button>
										</form>
									<p class="navbar-text">メールアドレス名検索</p>
										<form class="navbar-form navbar-left" role="search" method="POST">
										  <div class="form-group">
												<input type="text" name="manage_mail_search" class="form-control" placeholder="メールアドレスで検索">
										  </div>
										  <button type="submit" name="submit_manage_mail_search" class="btn btn-default">検索</button>
										</form>
								    </div>
								</div>
							</nav>
							<div class="panel-group" id="accordion">
EOT;
	if (isset($_POST['submit_manage_user_search'])){
		$manage_username = $_POST['manage_user_search'];
		$sqli = RUN_SQLI_DEFAULTLOGIN("SELECT * FROM user WHERE user_name LIKE '%{$manage_username}%'");
	}elseif (isset($_POST['submit_manage_mail_search'])){
		$manage_email = $_POST['manage_mail_search'];
		$sqli = RUN_SQLI_DEFAULTLOGIN("SELECT * FROM user WHERE user_email LIKE '%{$manage_email}%'");
	}else {
		$sqli = RUN_SQLI_DEFAULTLOGIN("SELECT * FROM user");
	}
	while ($row = $sqli->fetch_assoc()){
		echo <<< EOT
		
		<div class="panel panel-default">
			<div class="panel-heading">
				<h4 class="panel-title">
					<a data-toggle="collapse" data-parent="#accordion" href="#{$row['no']}" aria-expanded="false" class="collapsed">
						{$row['user_name']}
					</a>
				</h4>
			</div>
			<div id="{$row['no']}" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
				<div class="panel-body">
					<h4>詳細情報</h4>
					<address>
						<strong>メール</strong><br>
						<a href="mailto:{$row['user_email']}">{$row['user_email']}</a><br>
						<strong>誕生日</strong><br>
						{$row['user_birth']}
					</address>
					<button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal{$row['no']}">
				        {$row['user_name']}の編集
				    </button>
				    <div class="modal fade" id="myModal{$row['no']}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
				        <div class="modal-dialog">
				            <div class="modal-content">
				                <div class="modal-header">
				                	<button type="button" class="btn btn-danger btn-sm" style="float: right;">ユーザーを削除</button>
				                    <h4 class="modal-title" id="myModalLabel">{$row['user_name']}の編集・削除</h4>
				                </div>
				                <div class="modal-body">
				                    ユーザー情報
				                </div>
				                <div class="modal-footer">
				                    <button type="button" class="btn btn-default" data-dismiss="modal">閉じる</button>
				                    <button type="button" class="btn btn-primary">変更を保存</button>
				                </div>
				            </div>
				            <!-- /.modal-content -->
				        </div>
				        <!-- /.modal-dialog -->
				    </div>
				    <!-- /.modal -->
				</div>
			</div>
		</div>	
EOT;
	}

echo <<< EOT
							</div>
						</div>
						<!-- panel body -->
					</div>
					<!-- panel defolt -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

EOT;
}

function manage_content_addcomp(){
	global $mySQLAddress,$mainDbUserName,$mainDbPass,$mainDbName,$rootURLmanage,$mysqli,$msg_row;
	echo <<< EOT
			<div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"><i class="fa fa-plus-square-o"></i> 新規企業登録</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

			<div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
						<div class="panel-heading"><i class="glyphicon glyphicon-open-file"></i> ファイルから新規登録</div>
						<!-- panel heading -->
						<div class="panel-body">
							<div class="row">
								<div class="col-md-6">
									<form>
									  	<div class="form-group">
											<h4>ファイル選択</h4>
										    <input type="file" id="exampleInputFile">
										    <p class="help-block">※ファイルは指定のファイルのみ利用可能です。</p>
									  	</div>
									  	<button type="submit" class="btn btn-primary">ファイルを送信・登録</button>
									</form>
								</div>
								<div class="col-md-6">
									<form>
									  	<div class="form-group">
											<h4>雛形ファイルダウンロード</h4>
											<button type="submit" class="btn btn-outline btn-info btn-sm" name="base_download">雛形ファイルのダウンロード</button>
											<h4>全ファイルのダウンロード（確認用）</h4>
											<button type="submit" class="btn btn-outline btn-info btn-sm" name="base_download">全ファイルのダウンロード</button>
									  	</div>
									</form>
								</div>
							</div>
						</div>
						<!-- panel body -->
					</div>
					<!-- panel defolt -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
			
			<div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
						<div class="panel-heading"><i class="fa fa-keyboard-o"></i> 入力して新規登録</div>
						<!-- panel heading -->
						<div class="panel-body">
			
EOT;
	if (!isset($add_alert)){
	
	}elseif ($add_alert == "ng") {
		echo <<< EOT
			<div class="row">
				<div class="col-lg-12">
					<div class="alert alert-danger alert-dismissable">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
							入力項目に不足があります。大変お手数ですが、もう一度入力内容をご確認の上再度入力・登録お願い致します。
					</div>
				</div>
				<!-- /.col-lg-12 -->
			</div>
			<!-- /.row -->
EOT;
	}elseif ($add_alert == "ok"){
		echo <<< EOT
			<div class="row">
				<div class="col-lg-12">
					<div class="alert alert-success alert-dismissable">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
							登録完了しました。
					</div>
				</div>
				<!-- /.col-lg-12 -->
			</div>
			<!-- /.row -->
EOT;
	}else {
		echo <<< EOT
			<div class="row">
				<div class="col-lg-12">
					<div class="alert alert-danger alert-dismissable">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
							{$add_alert}
					</div>
				</div>
				<!-- /.col-lg-12 -->
			</div>
			<!-- /.row -->
EOT;
	}
	
	echo <<< EOT
			
							<form class="" method="post">
							    <div class="row">
							        <div class="col-md-6">
										<div class="alert alert-success">
                                            <h1>この欄は必須項目です。</h1>
											<div class="form-group">
										        <label for="comp_name">会社名（株式等も含む）</label>
										        <input class="form-control" name="comp_name" id="comp_name" placeholder="会社名を入力ください。">
										    </div>
											<div class="form-group">
										        <label for="comp_kana_name">会社名よみがな（カタカナ）</label>
										        <input class="form-control" id="comp_name" name="comp_kana_name" placeholder="カタカナで入力ください。">
										    </div>
											<div class="form-group">
												<label for="comp_zipcode">郵便番号</label>
												<div class="input-group">
													<span class="input-group-addon">〒</span>
										            <input type="text" name="comp_zipcode" class="form-control" id="comp_zipcode" placeholder="###-####">
										        </div>
											</div>
											<div class="form-group">
												<label for="comp_street_address">住所</label>
										        <textarea class="form-control" rows="3" placeholder="都道府県名市区町村名を含む住所" name="comp_street_address" id="comp_street_address"></textarea>
										    </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
        										        <label for="comp_ceo_name">代表名</label>
        										        <input type="text" class="form-control" name="comp_ceo_name" id="comp_ceo_name" placeholder="代表名フルネーム">
        										    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
        										        <label for="comp_ceo_name">採用担当者名</label>
        										        <input type="text" class="form-control" name="comp_ceo_name" id="comp_ceo_name" placeholder="代表名フルネーム">
        										    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="comp_tel1">電話番号１</label>
														<div class="input-group">
															<span class="input-group-addon"><i class="glyphicon glyphicon-phone-alt"></i></span>
															<input type="text" class="form-control" name="comp_tel1" id="comp_tel1" placeholder="##-####-####(###-####-####)">
														</div>
														<p class="help-block">※　複数ある場合任意の欄に電話番号２がございます。</p>
                                                    </div>

                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="comp_fax1">ＦＡＸ１</label>
														<div class="input-group">
															<span class="input-group-addon"><i class="fa fa-fax"></i></span>
															<input type="text" class="form-control" name="comp_fax1" id="comp_fax1" placeholder="##-####-#####">
														</div>
														<p class="help-block">※　複数ある場合任意の欄にＦＡＸ２がございます。</p>
                                                    </div>
                                                </div>
                                            </div>
											<div class="form-group">
                                                <label for="comp_mail">連絡先メール</label>
												<div class="input-group">
													<span class="input-group-addon"><i class="fa fa-envelope-o"></i></span>
													<input type="email" class="form-control" name="comp_email" id="comp_email" placeholder="example@mail.com">
												</div>
                                            </div>
											<div class="form-group">
                                                <label for="comp_business">業種</label>
                                                <input type="text" class="form-control" name="comp_business" id="comp_business" placeholder="例：製造業、商社、情報処理　等">
                                            </div>
										</div>
									</div>

							        <div class="col-md-6">
										<h1>この欄は任意項目です。</h1>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="comp_foundation">設立年月</label>
                                                    <div class="input-group">
                                                        <span class="input-group-addon">半角</span>
                                                        <input type="text" class="form-control" name="comp_foundation" id="comp_foundation" placeholder="半角英数yyyymm">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="comp_public">株式</label>
                                                    <input type="text" class="form-control" name="comp_public" id="comp_public" placeholder="（例）一部上場　等">
                                                </div>
                                                <div class="form-group">
                                                    <label for="comp_capital">資本金</label>
                                                    <div class="input-group">
                                                        <span class="input-group-addon">円</span>
                                                        <input type="text" class="form-control" name="comp_capital" id="comp_capital" placeholder="（例）5千万円　等">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="comp_annual_business">売上</label>
                                                    <div class="input-group">
                                                        <span class="input-group-addon">半角</span>
                                                        <input type="text" class="form-control" name="comp_annual_business" id="comp_annual_business" placeholder="（例）20億　等">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
												<div class="form-group">
													<label for="comp_tel2">電話番号２</label>
													<div class="input-group">
														<span class="input-group-addon"><i class="glyphicon glyphicon-phone-alt"></i></span>
														<input type="text" class="form-control" name="comp_tel2" id="comp_tel2" placeholder="##-####-####(###-####-####)">
													</div>
												</div>
												<div class="form-group">
													<label for="comp_fax2">ＦＡＸ２</label>
													<div class="input-group">
														<span class="input-group-addon"><i class="fa fa-fax"></i></span>
														<input type="text" class="form-control" name="comp_fax2" id="comp_fax2" placeholder="##-####-#####">
													</div>
												</div>
												<div class="form-group">
	                                                <label for="comp_employee_mele">男性従業員数</label>
	                                                <input type="text" class="form-control" name="comp_employee_mele" id="comp_employee_mele" placeholder="例：１００名">
	                                            </div>
												<div class="form-group">
	                                                <label for="comp_employee_female">女性従業員数</label>
	                                                <input type="text" class="form-control" name="comp_employee_female" id="comp_employee_female" placeholder="例：１００名">
	                                            </div>
                                            </div>
                                        </div>
										<div class="form-group">
											<label for="comp_url">ホームページ　URL</label>
											<input type="text" class="form-control" name="comp_url" id="comp_url" placeholder="企業HP URL (例：http://domain.co.jp)">
										</div>

										<div class="form-group">
											<label for="comp_a_ns">最寄り駅等</label>
											<input type="text" class="form-control" name="comp_a_ns" id="comp_a_ns" placeholder="例：◯◯駅◯◯◯口出口A3徒歩３分　等">
										</div>
										<div class="form-group">
											<label for="comp_b_ns">最寄り駅等</label>
											<input type="text" class="form-control" name="comp_b_ns" id="comp_b_ns" placeholder="例：バス◯◯駅より徒歩１０分">
										</div>
										<div class="form-group">
											<label for="comp_c_ns">最寄り駅等</label>
											<input type="text" class="form-control" name="comp_c_ns" id="comp_c_ns" placeholder="例：◯◯駅よりタクシー「◯◯へ」">
										</div>
										<div class="form-group">
											<label for="comp_other1">その他</label>
											<textarea class="form-control" name="comp_other1" id="comp_other1" rows="3" placeholder="その他情報入力"></textarea>
										</div>
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label for="comp_image_logo">会社ロゴ</label>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label for="comp_image_other">その他の画像</label>
												</div>
											</div>
										</div>
							        </div>
									<div class="col-md-12">
										<button type="submit" class="btn btn-primary btn-lg btn-block">入力内容を送信</button>
									</div>
							    </div>
							</form>
			

			
						</div>
						<!-- panel body -->
					</div>
					<!-- panel defolt -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

EOT;
}

function manage_content_compmanage(){
	global $mySQLAddress,$mainDbUserName,$mainDbPass,$mainDbName,$rootURLmanage,$mysqli,$msg_row;
	
	echo <<< EOT
			<div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"><i class="fa fa-edit"></i> 企業検索・編集</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

			<div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
						<div class="panel-heading">企業管理</div>
						<!-- panel heading -->
						<div class="panel-body">
							<nav class="navbar navbar-default">
								<div class="container-fluid">
									<div class="navbar-header">
									<p class="navbar-text">企業名検索</p>
										<form class="navbar-form navbar-left" role="search" method="POST">
										  <div class="form-group">
												<input type="text" name="manage_compname_search" class="form-control" placeholder="企業名で検索">
										  </div>
										  <button type="submit" name="submit_manage_compname_search" class="btn btn-default">検索</button>
										</form>
									<p class="navbar-text">メールアドレス名検索</p>
										<form class="navbar-form navbar-left" role="search" method="POST">
										  <div class="form-group">
												<input type="text" name="manage_compemail_search" class="form-control" placeholder="メールアドレスで検索">
										  </div>
										  <button type="submit" name="submit_manage_compemail_search" class="btn btn-default">検索</button>
										</form>
									<p class="navbar-text">電話番号検索</p>
										<form class="navbar-form navbar-left" role="search" method="POST">
										  <div class="form-group">
												<input type="text" name="manage_comptel_search" class="form-control" placeholder="電話番号で検索">
										  </div>
										  <button type="submit" name="submit_manage_comptel_search" class="btn btn-default">検索</button>
										</form>
								    </div>
								</div>
							</nav>
							<div class="panel-group" id="accordion">
EOT;
	if (isset($_POST['submit_manage_compname_search'])){
		$compname = $_POST['manage_compname_search'];
		$sqli = RUN_SQLI_DEFAULTLOGIN("SELECT * FROM comp_info WHERE comp_name LIKE '%{$compname}%'");
	}elseif (isset($_POST['submit_manage_compemail_search'])){
		$compemail = $_POST['manage_compemail_search'];
		$sqli = RUN_SQLI_DEFAULTLOGIN("SELECT * FROM comp_info WHERE comp_kana_name LIKE '%{$compemail}%'");
	}elseif (isset($_POST['submit_manage_competel_search'])){
		$comptel = $_POST['manage_comptel_search'];
		$sqli = RUN_SQLI_DEFAULTLOGIN("SELECT * FROM comp_info WHERE (comp_tel_1 LIKE '{$comptel}' or comp_tel_2 LIKE '{$comptel}')");
	}else {
		$sqli = RUN_SQLI_DEFAULTLOGIN("SELECT * FROM comp_info");
	}
	while ($row = $sqli->fetch_assoc()){
		echo <<< EOT
		<div class="panel panel-default">
			<div class="panel-heading">
				<h4 class="panel-title">
					<a data-toggle="collapse" data-parent="#accordion" href="#{$row['comp_id']}" aria-expanded="false" class="collapsed">
						<strong>{$row['comp_name']}</strong><br>［{$row['comp_name_kana']}］
					</a>
				</h4>
			</div>
			<div id="{$row['comp_id']}" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
				<div class="panel-body">
					<h4>詳細情報</h4>
					<address>
						<div class="row">
							<div class="col-md-6">
								<strong>メール</strong><br>
								<a href="mailto:{$row['comp_email']}">{$row['comp_email']}</a><br>
								<strong>郵便番号</strong><br>
								{$row['comp_zipcode']}<br>
								<strong>住所</strong>住所<br>
								{$row['comp_street_address']}<br>
								<strong>株式</strong><br>
								{$row['comp_public']}<br>
								<strong>会社ホームページ</strong><br>
								{$row['comp_url']}<br>
								<strong>女性従業員数</strong><br>
								{$ow['comp_employee_female']}<br>
								<strong>男性従業員数</strong><br>
								{$ow['comp_employee_male']}<br>
								<strong>アクセス１</strong><br>
								{$ow['comp_a_ns']}<br>
								<strong>アクセス２</strong><br>
								{$ow['comp_b_ns']}<br>
								<strong>アクセス３</strong><br>
								{$ow['comp_c_ns']}<br>
							</div>
							<div class="col-md-6">
								<strong>社長名</strong><br>
								{$row['comp_ceo_name']}<br>
								<strong>採用担当者名</strong><br>
								{$row['comp_adopt_name']}<br>
								<strong>電話１</strong><br>
								{$row['comp_tel_1']}<br>
								<strong>電話２</strong><br>
								{$row['comp_tel_2']}<br>
								<strong>ＦＡＸ１</strong><br>
								{$row['comp_fax_1']}<br>
								<strong>ＦＡＸ２</strong><br>
								{$row['comp_fax_2']}<br>
								<strong>業種</strong><br>
								{$ow['comp_business']}<br>
								<strong>その他</strong><br>
								{$ow['comp_other_1']}<br>
								<strong>写真</strong><br>
								<strong>ロゴ</strong><br>

							</div>
						</div>
					</address>
					<button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal{$row['comp_id']}">
				        {$row['comp_name']}の編集
				    </button>
				    <div class="modal fade" id="myModal{$row['comp_id']}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
				        <div class="modal-dialog">
				            <div class="modal-content">
				                <div class="modal-header">
				                	<button type="button" class="btn btn-danger btn-sm" style="float: right;">企業を削除</button>
				                    <h4 class="modal-title" id="myModalLabel">{$row['comp_name']}の編集・削除</h4>
				                </div>
				                <div class="modal-body">
				                    ユーザー情報
				                </div>
				                <div class="modal-footer">
				                    <button type="button" class="btn btn-default" data-dismiss="modal">閉じる</button>
				                    <button type="button" class="btn btn-primary">変更を保存</button>
				                </div>
				            </div>
				            <!-- /.modal-content -->
				        </div>
				        <!-- /.modal-dialog -->
				    </div>
				    <!-- /.modal -->
				</div>
			</div>
		</div>	
EOT;
	}

echo <<< EOT
							</div>
						</div>
						<!-- panel body -->
					</div>
					<!-- panel defolt -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

EOT;
}

function manage_content_addjob(){
	global $mySQLAddress,$mainDbUserName,$mainDbPass,$mainDbName,$rootURLmanage,$mysqli,$msg_row;
	echo <<< EOT
			<div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"><i class="fa fa-plus-square-o"></i> 新規求人票登録</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
			
			<div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
						<div class="panel-heading"><i class="glyphicon glyphicon-open-file"></i> ファイルから新規登録</div>
						<!-- panel heading -->
						<div class="panel-body">
							<div class="row">
								<div class="col-md-6">
									<form>
									  	<div class="form-group">
											<h4>ファイル選択</h4>
										    <input type="file" id="exampleInputFile">
										    <p class="help-block">※ファイルは指定のファイルのみ利用可能です。</p>
									  	</div>
									  	<button type="submit" class="btn btn-primary">ファイルを送信・登録</button>
									</form>
								</div>
								<div class="col-md-6">
									<form>
									  	<div class="form-group">
											<h4>雛形ファイルダウンロード</h4>
											<button type="submit" class="btn btn-outline btn-info btn-sm" name="base_download">雛形ファイルのダウンロード</button>
											<h4>全ファイルのダウンロード（確認用）</h4>
											<button type="submit" class="btn btn-outline btn-info btn-sm" name="base_download">全ファイルのダウンロード</button>
									  	</div>
									</form>
								</div>
							</div>
						</div>
						<!-- panel body -->
					</div>
					<!-- panel defolt -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
			

			<div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
						<div class="panel-heading"><i class="fa fa-keyboard-o"></i> 入力して新規登録</div>
						<!-- panel heading -->
						<div class="panel-body">
			
EOT;
	if (!isset($add_alert)){
	
	}elseif ($add_alert == "ng") {
		echo <<< EOT
			<div class="row">
				<div class="col-lg-12">
					<div class="alert alert-danger alert-dismissable">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
							入力項目に不足があります。大変お手数ですが、もう一度入力内容をご確認の上再度入力・登録お願い致します。
					</div>
				</div>
				<!-- /.col-lg-12 -->
			</div>
			<!-- /.row -->
EOT;
	}elseif ($add_alert == "ok"){
		echo <<< EOT
			<div class="row">
				<div class="col-lg-12">
					<div class="alert alert-success alert-dismissable">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
							登録完了しました。
					</div>
				</div>
				<!-- /.col-lg-12 -->
			</div>
			<!-- /.row -->
EOT;
	}else {
		echo <<< EOT
			<div class="row">
				<div class="col-lg-12">
					<div class="alert alert-danger alert-dismissable">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
							{$add_alert}
					</div>
				</div>
				<!-- /.col-lg-12 -->
			</div>
			<!-- /.row -->
EOT;
	}
	
echo <<< EOT
			<form class="" method="post">
							    <div class="row">
							        <div class="col-md-6">
										<div class="alert alert-success">
                                            <h1>この欄は必須項目です。</h1>
											<div class="form-group">
										        <label for="comp_name">会社名（選択：企業名がない場合は先に企業を登録ください。）</label>
                                                <select class="form-control">
                                                    <option>企業企業１</option>
                                                    <option>企業企業２</option>
                                                    <option>企業企業３</option>
                                                    <option>企業企業４</option>
                                                    <option>企業企業５</option>
                                                </select>
										    </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
        										        <label for="business_form">雇用形態</label>
        										        <input class="form-control" id="business_fomr" name="business_form" placeholder="例：社員">
        										    </div>
        											<div class="form-group">
        												<label for="business_educational">学歴</label>
        										            <input type="text" name="business_educational" class="form-control" id="business_educational" placeholder="例：４年制大学卒　等">
        											</div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
        										        <label for="business_job_category">職種</label>
        										        <input class="form-control" id="business_job_category" name="business_job_category" placeholder="例：営業、総合職　等">
        										    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="business_base_salary">基本給</label>
                                                    <input type="text" name="business_base_salary" class="form-control" id="business_base_salary" placeholder="例：22万〜">
                                            </div>
										</div>
									</div>

							        <div class="col-md-6">
										<h1>この欄は任意項目です。</h1>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="option_commuting_allowance">通勤手当</label>
                                                    <div class="radio">
                                                        <label>
                                                            <input type="radio" name="option_commuting_allowance" id="option_commuting_allowance_yes" value="option_commuting_allowance_yes" checked="">あり
                                                        </label>
                                                    </div>
                                                    <div class="radio">
                                                        <label>
                                                            <input type="radio" name="option_commuting_allowance" id="option_commuting_allowance_no" value="option_commuting_allowance_no">なし
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-groupo">
                                                    <label for="option_housing_allowance">住宅手当</label>
                                                    <div class="radio">
                                                        <label>
                                                            <input type="radio" name="option_housing_allowance" id="option_housing_allowance_yes" value="option_housing_allowance_yes" checked="">あり
                                                        </label>
                                                    </div>
                                                    <div class="radio">
                                                        <label>
                                                            <input type="radio" name="option_housing_allowance" id="option_housing_allowance_no" value="option_housing_allowance_no">なし
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="option_family_allowance">家族手当</label>
                                                    <div class="radio">
                                                        <label>
                                                            <input type="radio" name="option_family_allowance" id="option_family_allowance_yes" value="option_family_allowance_yes" checked="">あり
                                                        </label>
                                                    </div>
                                                    <div class="radio">
                                                        <label>
                                                            <input type="radio" name="option_family_allowance" id="option_family_allowance_no" value="option_family_allowance_no">なし
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="option_join_insurance">加入保険</label>
                                                    <div class="radio">
                                                        <label>
                                                            <input type="radio" name="option_join_insurance" id="option_join_insurance_yes" value="option_join_insurance_yes" checked="">あり
                                                        </label>
                                                    </div>
                                                    <div class="radio">
                                                        <label>
                                                            <input type="radio" name="option_join_insurance" id="option_join_insurance_no" value="option_join_insurance_no">なし
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label for="option_bonus">ボーナス（賞与）</label>
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" name="option_bonus" id="option_bonus_yes" value="option_bonus_yes" checked="">あり
                                                    </label>
                                                </div>
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" name="option_bonus" id="option_bonus_no" value="option_bonus_no">なし
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <label for="option_other_allowance">昇給</label>
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" name="option_salary_increase" id="option_salary_increase_yes" value="option_salary_increase_yes" checked="">あり
                                                    </label>
                                                </div>
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" name="option_salary_increase" id="option_salary_increase_no" value="option_salary_increase_no">なし
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <label for="option_other_allowance">その他手当</label>
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" name="option_other_allowance" id="option_other_allowance_yes" value="option_other_allowance_yes" checked="">あり
                                                    </label>
                                                </div>
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" name="option_other_allowance" id="option_other_allowance_no" value="option_other_allowance_no">なし
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <label for="option_dormitory_system">入寮制度</label>
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" name="option_dormitory_system" id="option_dormitory_system_yes" value="option_dormitory_system_yes" checked="">あり
                                                    </label>
                                                </div>
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" name="option_dormitory_system" id="option_dormitory_system_no" value="option_dormitory_system_no">なし
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="ave_overtime">平均残業</label>
                                                    <input type="text" class="form-control" name="ave_overtime" id="ave_overtime" placeholder="例：月平均10時間　等">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="holiday">休日</label>
                                                    <input type="text" class="form-control" name="holiday" id="holiday" placeholder="例：120日（2015年度実績）">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="annual_holiday">平均休暇取得日数</label>
                                                    <input type="text" class="form-control" name="annual_holiday" id="annual_holiday" placeholder="例：平均80％">
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="paid_leave">有給休暇</label>
                                                    <input type="text" class="form-control" name="pail_leave" id="pail_leave" placeholder="例：リフレッシュ休暇・有給実績有">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="accquisition_rate">有給休暇取得率</label>
                                                    <input type="text" class="form-control" name="accquisition_rate" id="accquisition_rate" placeholder="例：平均50％">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="trial_insurance">加入保険</label>
                                                    <input type="text" class="form-control" name="trial_insurance" id="trial_insurance" placeholder="例：各種健康保険有　等">
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="trial_period">試用期間</label>
                                                    <input type="text" class="form-control" name="trial_period" id="trial_period" placeholder="例：3ヶ月（給与変化無）">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="saverance_pay">退職金制度</label>
                                                    <input type="text" class="form-control" name="saverance_pay" id="saverance_pay" placeholder="例：有り">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="base_union">労働組合</label>
                                                    <input type="text" class="form-control" name="base_union" id="base_union" placeholder="例：有（◯◯組合）　等">　
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            
                                        </div>
										<div class="form-group">
											<label for="comp_image_other">その他の画像</label>
										</div>
							        </div>
									<div class="col-md-12">
                                        <div class="form-group">
                                            <label for="other_1">その他（１）</label>
                                            <textarea name="other_1" rows="10" class="form-control">
その他

［通勤手当］

［住宅手当］

［家族手当］

［加入保険］

［ボーナス（賞与）］

［昇給］

［その他の手当］

［入寮生度］
                                            </textarea>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary btn-lg btn-block">入力内容を送信</button>
                                        </div>
									</div>
							    </div>
							</form>

EOT;
			
							
			
echo <<<EOT
						</div>
						<!-- panel body -->
					</div>
					<!-- panel defolt -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

EOT;
}

function manage_content_jobmanage(){
	global $mySQLAddress,$mainDbUserName,$mainDbPass,$mainDbName,$rootURLmanage,$mysqli,$msg_row;
	echo <<< EOT
			<div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"><i class="fa fa-edit"></i> 求人票検索・編集</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

			<div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
						<div class="panel-heading">求人票管理</div>
						<!-- panel heading -->
						<div class="panel-body">
							<div class="panel-group" id="accordion">
EOT;
	
	
	
	$sqli_comp = RUN_SQLI_DEFAULTLOGIN("SELECT * FROM comp_info");
	while ($row = $sqli_comp->fetch_assoc()){
		echo <<< EOT
		<div class="panel panel-default">
			<div class="panel-heading">
				<h4 class="panel-title">
					<a data-toggle="collapse" data-parent="#accordion" href="#{$row['comp_id']}" aria-expanded="false" class="collapsed">
						<strong>{$row['comp_name']}</strong><br>［{$row['comp_name_kana']}］
					</a>
				</h4>
			</div>
			<div id="{$row['comp_id']}" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
				<div class="panel-body">
					<h4>詳細情報</h4>
					
EOT;
echo <<< EOT
	<ul class="nav nav-pills">
EOT;
$sqli_adopt = RUN_SQLI_DEFAULTLOGIN("SELECT * FROM job_info WHERE comp_id = '{$row['comp_id']}'");
while ($row_adopt = $sqli_adopt->fetch_assoc()){
    echo <<< EOT
        <li class=""><a href="#jobinfo{$row_adopt['job_info_id']}" data-toggle="tab" aria-expanded="false" style="text-align:center;">{$row_adopt['business_form']}<br><span style="font-size:10px;">{$row_adopt['job_category']}</span></a></li>
EOT;
}
echo <<< EOT
	</ul>
	<div class="tab-content">
EOT;

$sqli_adopt = RUN_SQLI_DEFAULTLOGIN("SELECT * FROM job_info WHERE comp_id = '{$row['comp_id']}'");
while ($row_adopt = $sqli_adopt->fetch_assoc()){
	echo <<< EOT
        <div class="tab-pane fade" id="jobinfo{$row_adopt['job_info_id']}">
        	<div class="alert alert-info">
            	<h4>{$row_adopt['business_form']}</h4>
            	<h6>{$row_adopt['job_category']}</h6>
            	<p>body</p>
            	<button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal{$row_adopt['job_info_id']}">
		        	{$row['comp_name']}の編集
		    	</button>
		    </div>
		    <div class="modal fade" id="myModal{$row_adopt['job_info_id']}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
		        <div class="modal-dialog">
		            <div class="modal-content">
		                <div class="modal-header">
		                	<button type="button" class="btn btn-danger btn-sm" style="float: right;">企業を削除</button>
		                    <h4 class="modal-title" id="myModalLabel">この求人表を編集・削除</h4>
		                </div>
		                <div class="modal-body">
		                    ユーザー情報
		                </div>
		                <div class="modal-footer">
		                    <button type="button" class="btn btn-default" data-dismiss="modal">閉じる</button>
		                    <button type="button" class="btn btn-primary">変更を保存</button>
		                </div>
		            </div>
		            <!-- /.modal-content -->
		        </div>
		        <!-- /.modal-dialog -->
		    </div>
		    <!-- /.modal -->
        </div>
EOT;
}
echo <<< EOT
</div>
EOT;

echo <<< EOT
				</div>
			</div>
		</div>	
EOT;
	}



echo <<< EOT
						</div>
						<!-- panel body -->
					</div>
					<!-- panel defolt -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
EOT;
}






























?>
