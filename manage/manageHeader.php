<?php
require_once 'managefunctions.php';

function manage_main_nav(){
	
	global $mySQLAddress;
	global $mainDbUserName;
	global $mainDbPass;
	global $mainDbName;
	global $rootURLmanage;
	
	echo <<<EOT
	<!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">JIOS System</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> ユーザー情報</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> セッティング</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> ログアウト</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        
						<li>
						    <a href="{$rootURLmanage}managetop.php"><i class="fa fa-dashboard fa-fw"></i> ダッシュボード</a>
						</li>
						<li>
							<a href="#"><i class="fa fa-users fa-fw"></i> ユーザー管理<span class="fa arrow"></span></a>
							<ul class="nav nav-second-level collapse">
								<li>
									<a href="#">  新規登録</a>
								</li>
								
								<li>
									<a href="#">  検索変更</a>
								</li>
							</ul>
						</li>
						
						<li>
							<a href="#"><i class="fa fa-building-o fa-fw"></i> 企業管理<span class="fa arrow"></span></a>
							<ul class="nav nav-second-level collapse">
								<li>
									<a href="#">  新規登録</a>
								</li>
								
								<li>
									<a href="#">  検索変更</a>
								</li>
							</ul>
						</li>
						
						<li>
							<a href="#"><i class="fa fa-file-text-o fa-fw"></i> 求人票管理<span class="fa arrow"></span></a>
							<ul class="nav nav-second-level collapse">
								<li>
									<a href="#">  新規登録</a>
								</li>
								
								<li>
									<a href="#">  検索変更</a>
								</li>
							</ul>
						</li>
						<li>
						    <a href="#"><i class="fa fa-cube fa-fw"></i> 設定</a>
						</li>
					
			
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
EOT;
}

?>