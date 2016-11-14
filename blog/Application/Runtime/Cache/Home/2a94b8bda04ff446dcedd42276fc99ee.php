<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo ($title); ?></title>
	<link rel="stylesheet" href="/project/blog/Public/css/bootstrap.min.css">
	<link rel="stylesheet" href="/project/blog/Public/my.css">
	<style>
		#log{display: block;margin-left: 50px;margin-bottom: 5px;}
		*{font-family: 黑体;font-size: 15px;}
		body{background: url('/project/blog/Public/image/bg_block.jpg') no-repeat;z-index: -1;}
		.center{width: 1000px;height: 680px;margin: 0 auto;background-color: rgba(36,61,89,0.25);}
		.cen_left{width: 150px;height: 462px;position: fixed;top: 66px;z-index: 5;}
		.cen_right{width: 600px;height: 3580px;margin-right: 10px;display: inline-block;margin-left: 150px;}
		.cen_right_node{width: 600px;height: 30px;margin-top: 66px;background-color: #eb7350;line-height: 30px;margin-bottom: 10px;}
		.cen_right_box{width: 600px;height: 9835px;border: 1px solid red;}
		.cen_right_box_ul{display: block;overflow: hidden;}
		.cen_right_box_ul li{display: block;overflow: hidden;width: 600px;height: 205px;background-color: #fff;margin-bottom: 15px;position: relative;}
		.cen_right_login{width: 230px;height: 286px;padding: 0 15px 6px 15px;background-color: #fff;position: absolute; border: 1px solid red;right:140px;top: 66px;}
	</style>
</head>
<body>
	<div class="container" >
		<!-- 导航栏 -->
		<nav class="navbar navbar-default navbar-fixed-top " role="navigation" style="border-top:2px solid #fa7d3c;background-color:#fff;">
		  <div class="container-fluid">
		  	 <!-- 首页图标 -->
		    <div class="navbar-header" style="margin-left:80px;">
		      <a class="navbar-brand" href="#" style="width:190px;height:48px;padding-top:10px;">
		      	<img src="/project/blog/Public/image/WB_logo.png" alt="Brand" id="log">
		      </a> 
		    </div>	 
			
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" > 
				<!-- 搜索 -->
				 <form class="navbar-form navbar-left" role="search" style="margin:10px 0 4px 0;">
			        <div class="form-group ">
			          <input type="text" class="form-control" placeholder="Search" style="height:28px;">
			        </div>
			        <button type="submit" class="btn btn-default" style="height:28px; border:0px;">
			        	<span class="glyphicon glyphicon-search "></span>
			        </button>
			     </form>
				<!-- 菜单栏 -->
				 <ul class="nav navbar-nav" style="margin-left:200px;"> 
				 	<li><a href="#"><span class="glyphicon glyphicon-home"></span>&nbsp;首页</a></li> 
				 	<li><a href="#"><span class="glyphicon glyphicon-facetime-video"></span>&nbsp;视频</a></li> 
				 	<li><a href="#"><span class="glyphicon glyphicon-eye-open"></span>&nbsp;发现</a></li> 
				 	<li><a href="#"><span class="glyphicon glyphicon-plane"></span>&nbsp;游戏</a></li> 
				 </ul>
				 <ul class="nav navbar-nav navbar-right" style="margin-right:30px;"> 
				 	<li><a href="#">注册</a></li>
				 	<li><a href="#">|</a></li>
				 	<li><a href="#">登录</a></li> 	
				 </ul>
			</div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>

		<!-- 中心部分 -->
		<div class="center" >
			<!-- 左侧导航 -->
			<div class="cen_left">
				<div class="list-group">
				  <a href="#" class="list-group-item active ">
				  	<span class="glyphicon glyphicon-home"></span>
				    &nbsp;推荐
				  </a>
				  <a href="#" class="list-group-item"><span class='glyphicon glyphicon-star-empty'></span>&nbsp;明星</a>
				  <a href="#" class="list-group-item"><span class="glyphicon glyphicon-facetime-video"></span>
				    &nbsp;视频</a>
				  <a href="#" class="list-group-item"><span class="glyphicon glyphicon-home"></span>
				    &nbsp;推荐</a>
				  <a href="#" class="list-group-item"><span class="glyphicon glyphicon-home"></span>
				    &nbsp;推荐</a>
				  <a href="#" class="list-group-item"><span class="glyphicon glyphicon-home"></span>
				    &nbsp;推荐</a>
				  <a href="#" class="list-group-item"><span class="glyphicon glyphicon-home"></span>
				    &nbsp;推荐</a>
				  <a href="#" class="list-group-item"><span class="glyphicon glyphicon-home"></span>
				    &nbsp;推荐</a>
				  <a href="#" class="list-group-item">1</a>
				  <a href="#" class="list-group-item">1</a>
				  <a href="#" class="list-group-item">1</a>
				</div>
			</div> <!-- cen_left -->

			<!-- 右侧导航 -->
			<div class="cen_right">
				<div class="cen_right_node">宁有未读消息</div>
				<div class="cen_right_box">
					<ul class="cen_right_box_ul">
						<li>11111111</li>
						<li>11111111</li>
						<li>11111111</li>
						<li>11111111</li>
						<li>11111111</li>
					</ul>
				</div>
				<!-- 登录 -->
				<div class="cen_right_login" >
					登录 注册
				</div>
			</div> <!-- cen_right -->
		</div> <!-- center -->
	</div> <!-- END container -->
</body>
</html>