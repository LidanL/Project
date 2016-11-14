<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="renderer" content="webkit">

    <title> hAdmin- 主页</title>

    <meta name="keywords" content="">
    <meta name="description" content="">

    <!--[if lt IE 9]>
    <meta http-equiv="refresh" content="0;ie.html" />
    <![endif]-->

    <link rel="shortcut icon" href="favicon.ico"> <link href="/project/blog/Public/hadmin/css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
    <link href="/project/blog/Public/hadmin/css/font-awesome.min.css?v=4.4.0" rel="stylesheet">
    <link href="/project/blog/Public/hadmin/css/animate.css" rel="stylesheet">
    <link href="/project/blog/Public/hadmin/css/style.css?v=4.1.0" rel="stylesheet">
</head>

<body class="fixed-sidebar full-height-layout gray-bg" style="overflow:hidden">
    <div id="wrapper">
        <!--左侧导航开始-->
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="nav-close"><i class="fa fa-times-circle"></i>
            </div>
            <div class="sidebar-collapse">
                <ul class="nav" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <span class="clear">
                                    <span class="block m-t-xs" style="font-size:20px;">
                                        <img class="nav-user-photo" src="/project/blog/Public/image/user.jpg" width=100 height=100/>
                                    </span>
                                   <span class="user-info">
                                    <strong>欢迎Admin</strong>
                                    
                                </span>
                                <ul class="dropdown-menu" style="background:#1C2B36;">
                                    <li>
                                        <a href="#">
                                            <i class="icon-user"></i>
                                            个人资料
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo U('Public/logout');?>">
                                            <i class="icon-off"></i>
                                            退出
                                        </a>
                                    </li>
                                </ul>
                                </span>
                            </a>
                        </div>
                        <div class="logo-element">hAdmin
                        </div>
                    </li>
                     <li class="line dk"></li>
                    <li>
                        <a class="#">
                            <i class="fa fa-home"></i>
                            <span class="nav-label">主页</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="glyphicon glyphicon-list"></i>
                            <span class="active">分类管理</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a class="J_menuItem" href="<?php echo U('Count/graph_echarts');?>">分类列表</a>
                            </li>
                            <li>
                                <a class="J_menuItem" href="<?php echo U('Count/graph_flot');?>">分类添加</a>
                            </li>
                            
                        </ul>
                    </li>
                    <li class="line dk"></li>
                    <li>
                        <a href="#"><i class="glyphicon glyphicon-list"></i> <span class="nav-label">用户管理</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a class="J_menuItem" href="<?php echo U('Form/form_basic');?>">用户列表</a>
                            </li>
                            <li><a class="J_menuItem" href="<?php echo U('Form/form_validate');?>">用户添加</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="glyphicon glyphicon-list"></i> <span class="nav-label">角色管理</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a class="J_menuItem" href="<?php echo U('Page/contacts');?>">角色列表</a>
                            </li>
                            <li><a class="J_menuItem" href="<?php echo U('Page/profile');?>">角色添加</a>
                            </li>
                        </ul>
                    </li>
                    <li class="line dk"></li>
                    <li>
                        <a href="#"><i class="glyphicon glyphicon-list"></i> <span class="nav-label">节点管理</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a class="J_menuItem" href="<?php echo U('Ui/typography');?>">节点列表</a>
                            </li>
                            <li><a class="J_menuItem" href="<?php echo U('Ui/buttons');?>">节点添加</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="glyphicon glyphicon-list"></i> <span class="nav-label">博文管理</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a class="J_menuItem" href="<?php echo U('Ui/typography');?>">博文列表</a>
                            </li>
                            <li><a class="J_menuItem" href="<?php echo U('Ui/buttons');?>">博文删除</a>
                            </li>
                        </ul>
                    </li>
                    <li class="line dk"></li>
                     <li>
                        <a href="#"><i class="glyphicon glyphicon-list"></i> <span class="nav-label">相册管理</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a class="J_menuItem" href="<?php echo U('Ui/typography');?>">相册列表</a>
                            </li>
                        </ul>
                    </li>
                     <li>
                        <a href="#"><i class="glyphicon glyphicon-list"></i> <span class="nav-label">话题管理</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a class="J_menuItem" href="<?php echo U('Ui/typography');?>">话题列表</a>
                            </li>
                             <li><a class="J_menuItem" href="<?php echo U('Ui/typography');?>">话题添加</a>
                            </li>
                        </ul>
                    </li>
                   
                    <li class="line dk"></li>

                </ul>
            </div>
        </nav>
        <!--左侧导航结束-->
        <!--右侧部分开始-->
        <div id="page-wrapper" class="gray-bg dashbard-1">
            <div class="row border-bottom">
                <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
                    <div class="navbar-header"><a class="navbar-minimalize minimalize-styl-2 btn btn-info " href="#"><i class="fa fa-bars"></i> </a>
                        <form role="search" class="navbar-form-custom" method="post" action="search_results.html">
                            <div class="form-group">
                                <input type="text" placeholder="请输入您需要查找的内容 …" class="form-control" name="top-search" id="top-search">
                            </div>
                        </form>
                    </div>
                </nav>
            </div>
            <div class="row J_mainContent" id="content-main">
                
            </div>
        </div>
        <!--右侧部分结束-->

    </div>

    <!-- 全局js -->
    <script src="/project/blog/Public/hadmin/js/jquery.min.js?v=2.1.4"></script>
    <script src="/project/blog/Public/hadmin/js/bootstrap.min.js?v=3.3.6"></script>
    <script src="/project/blog/Public/hadmin/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="/project/blog/Public/hadmin/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="/project/blog/Public/hadmin/js/plugins/layer/layer.min.js"></script>

    <!-- 自定义js -->
    <script src="/project/blog/Public/hadmin/js/hAdmin.js?v=4.1.0"></script>
    <script type="text/javascript" src="js/index.js"></script>

    <!-- 第三方插件 -->
    <script src="/project/blog/Public/hadmin/js/plugins/pace/pace.min.js"></script>

</body>

</html>