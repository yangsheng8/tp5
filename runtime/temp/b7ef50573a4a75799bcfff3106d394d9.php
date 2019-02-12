<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:67:"D:\Program\www\tp5\public/../application/admin\view\index\index.htm";i:1549954032;s:56:"D:\Program\www\tp5\application\admin\view\common\top.htm";i:1549953780;s:57:"D:\Program\www\tp5\application\admin\view\common\left.htm";i:1549953525;}*/ ?>
<!DOCTYPE html>
<html><head>
	    <meta charset="utf-8">
    <title>町中</title>

    <meta name="description" content="Dashboard">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!--Basic Styles-->
    <link href="http://127.0.0.1/tp5/public/static/admin/style/bootstrap.css" rel="stylesheet">
    <link href="http://127.0.0.1/tp5/public/static/admin/style/font-awesome.css" rel="stylesheet">
    <link href="http://127.0.0.1/tp5/public/static/admin/style/weather-icons.css" rel="stylesheet">

    <!--Beyond styles-->
    <link id="beyond-link" href="http://127.0.0.1/tp5/public/static/admin/style/beyond.css" rel="stylesheet" type="text/css">
    <link href="http://127.0.0.1/tp5/public/static/admin/style/demo.css" rel="stylesheet">
    <link href="http://127.0.0.1/tp5/public/static/admin/style/typicons.css" rel="stylesheet">
    <link href="http://127.0.0.1/tp5/public/static/admin/style/animate.css" rel="stylesheet">
    
</head>
<body>
	<!-- 头部 -->
    <div class="navbar">
    <div class="navbar-inner">
        <div class="navbar-container">
            <!-- Navbar Barnd -->
            <div class="navbar-header pull-left">
                <a href="<?php echo url('Index/index'); ?>" class="navbar-brand">
                    <small>
                            <img src="http://127.0.0.1/tp5/public/static/admin/images/logo.png" alt="">
                        </small>
                </a>
            </div>
            <!-- /Navbar Barnd -->
            <!-- Sidebar Collapse -->
            <div class="sidebar-collapse" id="sidebar-collapse">
                <i class="collapse-icon fa fa-bars"></i>
            </div>
            <!-- /Sidebar Collapse -->
            <!-- Account Area and Settings -->
            <div class="navbar-header pull-right">
                <div class="navbar-account">
                    <ul class="account-area">
                        <li>
                            <a class="login-area dropdown-toggle" data-toggle="dropdown">
                                <div class="avatar" title="View your public profile">
                                    <img src="http://127.0.0.1/tp5/public/static/admin/images/adam-jansen.jpg">
                                </div>
                                <section>
                                    <h2><span class="profile"><span>admin</span></span></h2>
                                </section>
                            </a>
                            <!--Login Area Dropdown-->
                            <ul class="pull-right dropdown-menu dropdown-arrow dropdown-login-area">
                                <li class="username"><a>David Stevenson</a></li>
                                <li class="dropdown-footer">
                                    <a href="/admin/user/logout.html">
                                            退出登录
                                        </a>
                                </li>
                                <li class="dropdown-footer">
                                    <a href="/admin/user/changePwd.html">
                                            修改密码
                                        </a>
                                </li>
                            </ul>
                            <!--/Login Area Dropdown-->
                        </li>
                        <!-- /Account Area -->
                        <!--Note: notice that setting div must start right after account area list.
                            no space must be between these elements-->
                        <!-- Settings -->
                    </ul>
                </div>
            </div>
            <!-- /Account Area and Settings -->
        </div>
    </div>
</div>
	<!-- /头部 -->
	
	<div class="main-container container-fluid">
		<div class="page-container">
			<!-- Page Sidebar -->
             <div class="page-sidebar" id="sidebar">
    <!-- Page Sidebar Header-->
    <div class="sidebar-header-wrapper">
        <input class="searchinput" type="text">
        <i class="searchicon fa fa-search"></i>
        <div class="searchhelper">Search Reports, Charts, Emails or Notifications</div>
    </div>
    <!-- /Page Sidebar Header -->
    <!-- Sidebar Menu -->
    <ul class="nav sidebar-menu">
        <!--Dashboard-->
        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-user"></i>
                <span class="menu-text">管理员</span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="<?php echo url('admin/lst'); ?>">
                        <span class="menu-text">
                            管理列表                                    </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>                            
        </li> 

        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-file-text"></i>
                <span class="menu-text">文档</span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="/admin/document/index.html">
                        <span class="menu-text">
                            文章列表                                    </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>                            
        </li> 

        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-gear"></i>
                <span class="menu-text">系统</span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="/admin/document/index.html">
                        <span class="menu-text">
                            配置                                   </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>                            
        </li>                        
        
                               
        
    </ul>
    <!-- /Sidebar Menu -->
</div>
            <!-- /Page Sidebar -->
            <!-- Page Content -->
            <div class="page-content">
                <!-- Page Breadcrumb -->
                <div class="page-breadcrumbs">
                    <ul class="breadcrumb">
                                        <li class="active">控制面板</li>
                                        </ul>
                </div>
                <!-- /Page Breadcrumb -->

                <!-- Page Body -->
                <div class="page-body">
                    
				<div style="text-align:center; line-height:1000%; font-size:24px;">
                 博客<br>
                <p style="color:#aaa;">后台</p></div>
                </div>
                

                </div>
                <!-- /Page Body -->
            </div>
            <!-- /Page Content -->
		</div>	
	</div>

	    <!--Basic Scripts-->
    <script src="http://127.0.0.1/tp5/public/static/admin/style/jquery_002.js"></script>
    <script src="http://127.0.0.1/tp5/public/static/admin/style/bootstrap.js"></script>
    <script src="http://127.0.0.1/tp5/public/static/admin/style/jquery.js"></script>
    <!--Beyond Scripts-->
    <script src="http://127.0.0.1/tp5/public/static/admin/style/beyond.js"></script>
    


</body></html>