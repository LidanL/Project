<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo ($title); ?></title>
	<link rel="stylesheet" href="/blog/blog/Public/css/bootstrap.min.css">
	<link rel="stylesheet" href="/blog/blog/Public/my.css">
	<style>
		#log{display: block;margin-left: 50px;margin-bottom: 5px;}
		*{font-family: 黑体;font-size: 15px;}
		body{background: url('/blog/blog/Public/image/bg_block.jpg') no-repeat #D5D5E1;z-index: 1;}
		.center{width: 1000px;height: 680px;margin: 0 auto;background-color: rgba(36,61,89,0.25);}
		.cen_left{width: 150px;height: 462px;position: fixed;top: 66px;z-index: 5;}
		.cen_right{width: 600px;height: 3580px;margin-right: 10px;display: inline-block;margin-left: 150px;}
		.cen_right_node{width: 590px;height: 30px;margin-top: 66px;background-color: #eb7350;line-height: 30px;margin-bottom: 10px;margin-left: 10px;}
		.cen_right_box{width: 600px;height: 9835px;/*border: 1px solid red;*/}
		.cen_right_box_ul{display: block;overflow: hidden;padding-left: 10px;}
		.cen_right_box_ul li{display: block;overflow: hidden;width: 600px;height: 205px;background-color: #fff;margin-bottom: 15px;position: relative;}
		.cen_right_login{width: 230px;height: 286px;padding: 0 15px 6px 15px;background-color: #fff;position: absolute; /*border: 1px solid red;*/right:140px;top: 66px;}
		.cen_right_logo{width: 230px;height: 66px;padding: 10px;background-color: #fff;position: absolute; /*border: 1px solid red;*/right:140px;top: 362px;}
		.ios{width: 50%;height: 44px;/*border: 1px solid red;*/}
		.Android{width: 50%;height: 44px;/*border: 1px solid red;*/position: absolute;left: 120px;bottom: 10px;}
		.ios_text{font-size: 13px;}
		.Android_text{font-size: 13px;}
		.cen_right_login1{width:200px;height: 44px;padding: 10px;background-color: #fff;position: absolute;/* border: 1px solid red;*/margin-right: 0px;border-bottom: 3px solid #fa7d3c;}
		.cen_right_login11{width:100px;height:22px;cursor: pointer;margin-right: 20px;margin-left: 10px;}
		.cen_right_login12{width:100px;height:22px;cursor: pointer;margin-right: 20px;margin-left: 10px;position: absolute;left: 100px;top:10px;}
		.inp1{margin-top: 25px;position: absolute;right: 3px;}
		.inp2{margin-top: 75px;position: absolute;right: 3px;}
		.cen_right_loginin{padding: 0px;margin: 0px;width:200px; height: 279px;}
		.choose{width:200px;height: 20px;position: absolute;top: 155px;}
		.choose_right{position: absolute;right: 20px;}
		.choose_left{position: absolute;width: 60%;}
		.choose_left_text{width: 40px;height: 20px;text-align: center;line-height: 20px;display: block;font-size: 13px;position: absolute;left: 20px;top:0px;color: #808080;}
		.choose_right{position: absolute;right: 0px;font-size: 12px;}
		/*a{font-size: 13px;text-decoration: none;color: #808080;}*/
		/*a:hover{color: red;}*/
		.loginin{width:200px;height:34px;position: absolute;background-color:#fa7d3c;top: 185px;border-radius: 2px;text-align: center;}
		/*.loginin_text{font-size: 16px;line-height: 34px;color: #fff;}*/
		.loginin_link{border: 1px solid #f77c3d;background: #ff8140;color: #fff;box-shadow:0 1px 2px;width:198px;height:34px;display: inline-block;border-radius: 2px;line-height: 34px; cursor: auto;text-align: center;font-family: 黑体;outline: none;min-width:40px;}
		.register{width:200px;height: 20px;position: absolute;top: 225px;}
		.register_left_text{position: absolute;width: 60%;}
		.register_right{position: absolute;right: 0px;font-size: 12px;}
		.line{display: block;width:200px;height:1px;background:#ccc;bottom:33px;position: absolute;}
		a{font-size: 12px;}
		.loginin_other{width: 200px;height: 30px;/*border: 1px solid red;*/position: absolute;bottom: 2px;}
		.loginin_other_text{position: absolute;width:30%;text-align: center;}
		.loginin_text{font-size: 13px;line-height: 30px;}
		.loginin_other_pic{position: absolute;width:70px;height: 30px;bottom: 2px;left:34px;line-height: 30px;}

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
		      	<img src="/blog/blog/Public/image/WB_logo.png" alt="Brand" id="log">
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
				 	<li><a href="<?php echo U('User/login');?>">登录</a></li> 	
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
					<div class="cen_right_loginin">
						<div class="cen_right_login1">
							<div class="cen_right_login11">
								<a href="#">账号登陆</a>	
							</div>
							<div class="cen_right_login12">
								<a href="#">安全登陆</a>	
							</div>
							<div class="inp1">
								<div class="input-group">
								  <span class="input-group-addon "><span class="glyphicon glyphicon-user"></span></span>
								  <input type="text" class="form-control" placeholder="手机号/邮箱">
								</div>
							</div> <!-- inp1 -->
							<div class="inp2">
								<div class="input-group" >
								  <span class="input-group-addon "><span class="glyphicon glyphicon-pushpin"></span></span>
								  <input type="text" class="form-control" placeholder="请输入密码">
								</div>
							</div> <!-- inp2 -->
						</div> <!-- cen_right_login1 -->
						<div class="choose">
							<div class="choose_left">
								<input type="checkbox" name="check" checked>&nbsp;
								<span class="choose_left_text">记住我</span>
							</div>
							<div class="choose_right">
								<a href="#">忘记密码</a>
							</div>
						</div> <!-- choose -->
						<div class="loginin">
							<a href="#"class="loginin_link">
								<span class="loginin_text">登陆</span>
							</a>
						</div> <!-- loginin -->
						<div class="register">
							<div class="register_left">
								<span class="register_left_text">还没有微博?</span>
							</div>
							<div class="register_right">
								<a href="#">立即注册</a>
							</div>
						</div> <!-- choose -->
						<span class="line"></span>
					</div> <!-- cen_rigth_loginin -->	
					<div class="loginin_other">
						<div class="loginin_other_text">
							<span class="loginin_text">其他登陆:</span>
							<div class="loginin_other_pic">
								<a href="#"><img src="/blog/blog/Public/image/taobao.png" alt=""></a>
								<a href="#" style="background:url('/blog/blog/Public/image/login') -50px -50px no-repeat;width:16px;height:16px;display:block;position:absolute;bottom:5px;left:44px;"></a>
								<a href="#" style="background:url('/blog/blog/Public/image/login') -300px -50px no-repeat;width:16px;height:16px;display:block;position:absolute;bottom:3px;left:62px;"></a>
								<a href="#" style="background:url('/blog/blog/Public/image/login') -100px -50px no-repeat;width:16px;height:16px;display:block;position:absolute;bottom:3px;left:82px;"></a>
								<a href="#" style="background:url('/blog/blog/Public/image/login') -150px -50px no-repeat;width:16px;height:16px;display:block;position:absolute;bottom:3px;left:102px;"></a>
								<a href="#" style="background:url('/blog/blog/Public/image/login') -200px -50px no-repeat;width:16px;height:16px;display:block;position:absolute;bottom:3px;left:122px;"></a>
								<a href="#" style="background:url('/blog/blog/Public/image/login') -250px -50px no-repeat;width:16px;height:16px;display:block;position:absolute;bottom:3px;left:142px;"></a>
							</div>
						</div>
					</div>
				</div> <!-- cen_right_login -->
				<div class="cen_right_logo">
					<div class="ios">
						<span class="ios_icon"></span>
						<span class="ios_text">
							iPhone
							<br/>
							客户端下载
						</span>
					</div>
					<div class="Android">
						<span class="Android_icon"></span>
						<span class="Android_text">
							Android
							<br/>
							客户端下载
						</span>
					</div>
				</div> <!-- cen_right_logo -->
			</div> <!-- cen_right -->
		</div> <!-- center -->
	</div> <!-- END container -->
</body>
</html>