<?php

function manage_main_nav(){
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
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
			
                        <li>
                            <a href="javascript:void(0)"><i class="fa fa-dashboard fa-fw"></i> ダッシュボード</a>
                        </li>
			
						<li>
							<a href="#"><i class="fa fa-users fa-fw"></i> ユーザー管理</a>
							<ul class="nav nav-second-level collapse">
								<li>
									<a href="#">新規登録</a>
								</li>
								
								<li>
									<a href="#">検索変更</a>
								</li>
							</ul>
                        </li>
			
						<li>
							<a href="#"><i class="fa fa-users fa-fw"></i> 管理</a>
							<ul class="nav nav-second-level collapse in" aria-expanded="true">
								<li class="active">
									<a href="#">企業管理 <span class="fa arrow"></span></a>
										<ul class="nav nav-third-level collapse in" aria-expande="true">
											<li>
												<a href="#">企業-新規登録</a>
											</li>
											
											<li>
												<a href="#">企業-検索編集</a>
											</li>
										</ul>
								</li>
								
								<li class="active">
									<a href="#">求人票管理 <span class="fa arrow"></span></a>
										<ul class="nav nav-third-level collapse in" aria-expande="true">
												<li>
													<a href="#">求人票-新規登録</a>
												</li>
												
												<li>
													<a href="#">求人票-検索編集</a>
												</li>
											</ul>
								</li>
							</ul>
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