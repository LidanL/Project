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
		body{background: url('/blog/blog/Public/image/body_bg.jpg') no-repeat #b4daf0;z-index: 1;}
		/*a{color: #fff;}*/
		.center{width: 1000px;height: 680px;margin: 0 auto;background-color: rgba(70,149,194,0.3);}
		.cen_left{width:150px;height: 345px;/*border: 1px solid red;*/position: absolute;top: 66px;}
		.list-group-item{background:rgba(70,149,194,0.3);border: 0px;}
		.cen_left_cen{width: 150px;height: 46px;border-bottom: 1px solid #ccc;position: absolute;top: 122px}
		.cen_left_cen_link{display: inline-block;width: 150px;height: 46px;padding-left: 15px; line-height: 46px;}
		.box_list{width: 150px;height: 46px;position: absolute;top: 252px;}
		.cen_right{width: 600px;height: 3580px;margin-right: 10px;display: inline-block;margin-left: 150px;position: absolute;top: 51px;padding: 15px 10px 10px 10px;}
		.cen_right_cen{width: 600px;height: 165px;background: #fff;}
		.cen_right_tit{width: 580px;height: 21px;}
		.cen_right_tit1{font-family: "WBswficon_CHT" !important;width: 200px;height: 21px;}
		.cen_right_tit2{width:400px;height: 21px;position: absolute;top: 15px;left: 200px;color: #ccc;}
		.cen_right_inp{background:#fff;box-shadow: 0 0 3px 0 rgba(0,0,0,0.15) inset;border: 1px solid #ccc;margin: 4px 0 0 10px;width:580px;height:80px;}
		.cen_right_text{color: #808080;text-decoration: none;border: 1px solid #ccc;width:580px;overflow: hidden; height: 80px;vertical-align: middle;resize:none;font-weight: inherit;cursor: auto;display: inline-block;text-shadow:none;background: transparent;font-size: 14px;line-height: 18px;}
		.func_area{width:580px;height:35px;position: absolute;top: 140px;}
		.kind{width: 380px;height: 35px;}
		.func{width: 200px;height:35px;position: absolute;left: 390px;top: 0px;}
		.send{width: 82px;height:30px;position: absolute;top: 0px;
			left: 80px;text-align: center;line-height: 30px;background: #eb7350;border-radius: 2px;color: #fff;}
		.box{width: 600px;height: 165px;background: #fff; margin-top:17px;display: block;}
		.box_face{width:600px;height: 70px;padding: 10px;}
		.face{width:50px;height:50px;border:1px solid #ccc;border-radius: 50%;position: absolute;}
		.face_info{width:500px;height: 18px;
		 padding-top:5px;margin-bottom: 7px;margin-left:80px;}
		 .face_name{width: auto;height: 18px;text-align: center;line-height: 18px;position: absolute;}
		.content{width: 600px;height: 70px;border: 1px solid red;}
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
				 <ul class="nav navbar-nav"> 
				 	<li><a href="#"><span class="glyphicon glyphicon-home"></span>&nbsp;首页</a></li> 
				 	<li><a href="#"><span class="glyphicon glyphicon-facetime-video"></span>&nbsp;视频</a></li> 
				 	<li><a href="#"><span class="glyphicon glyphicon-eye-open"></span>&nbsp;发现</a></li> 
				 	<li><a href="#"><span class="glyphicon glyphicon-plane"></span>&nbsp;游戏</a></li> 
				 	<li><a href="#"><span class="glyphicon glyphicon-user"></span>用户名</a></li>
				 </ul>
				 <ul class="nav navbar-nav navbar-right" style="margin-right:100px;"> 
				 	<li><a href="#">|</a></li>
				 	<li><a href="#"><span class="glyphicon glyphicon-envelope"></span></a></li> 
				 	<li><a href="#"><span class="glyphicon glyphicon-cog"></span></a></li> 	
				 	<li><a href="#"><span class="glyphicon glyphicon-pencil"></span></a></li> 	
				 </ul>
			</div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>

		<!-- 中心部分 -->
		<div class="center" >
			<!-- 左侧导航 -->
			<div class="cen_left">	
				<div class="list-group" >
				  <a href="#" class="list-group-item">
				    首页
				  </a>
				  <a href="#" class="list-group-item">我的收藏</a>
				  <a href="#" class="list-group-item">我的赞</a>
				</div> <!-- list-group -->
				<div class="cen_left_cen">
					<a href="#"class="cen_left_cen_link"><span class="glyphicon glyphicon-fire"></span>热门微博</a>
				</div>
				<div class="list-group" style="position:absolute;top:170px;width:148px;" >
				  <a href="#" class="list-group-item">朋友圈</a>
				  <a href="#" class="list-group-item">特别关注</a>
				</div> <!-- list-group -->
				<div class="box_list">
					<ul>
						<li><a href="">344</a></li>
					</ul>
				</div>
			</div>
			<!-- 右侧导航 -->
			<div class="cen_right">
				<div class="cen_right_cen">
					<div class="cen_right_tit">
						<div class="cen_right_tit1">有什么新鲜事告诉大家?</div>
						<div class="cen_right_tit2">遍历出来的数据<a href="#">热门微博</a></div>
					</div>
					<form action="<?php echo U('add');?>" method="post">
						<div class="cen_right_inp">
							<textarea class="cen_right_text" name="content"></textarea>
						</div>
				</div>
				<div class="func_area clearfix">
					<div class="kind">
						<a href="#" style="background: url('/blog/blog/Public/image/kind.jpg') -270px -7px no-repeat ;width:20px;height:26px;">表情</a>
						<a href="#">图片</a>
						<a href="#">视频</a>
						<a href="#">话题</a>
						<a href="#">话题</a>
						<a href="#">头条文章</a>
						<a href="#" title="查看更多">...</a>
					</div>
					<div class="func">
						<div class="dropdown">
						  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" style="border:0px;" >
						  公开
						    <span class="caret"></span>
						  </button>
						  <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
						    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">公开</a></li>
						    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">好友圈</a></li>
						    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">仅自己可见</a></li>
						    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">群可见</a></li>
						  </ul>
						</div>
							<input type="submit" value="发布" class="send">
					</div>
				</form>
					<?php if(is_array($data)): foreach($data as $key=>$vo): ?><div class="box">
						<div class="box_face">
							<div class="face"><img src="" alt=""></div>
							<div class="face_info">
								<div class="face_name"><?php echo ($vo["uid"]); ?></div>
							</div>	
						</div>
						<div class="content"><?php echo ($vo["content"]); ?></div>
					</div><?php endforeach; endif; ?>
				</div>
			</div> <!-- cen_right -->
		</div> <!-- center -->
	</div> <!-- END container -->
</body>
	 <script src="/blog/blog/Public/js/bootstrap.min.js"></script>
	 <script src="/blog/blog/Public/js/jquery.min.js"></script>
	 <script >

	 	$("#dropdownMenu1").click(function(){
	 		$('.dropdown-menu').show();
	 		// $('.dropdown-menu').hide();
	 	})
		$(".dropdown-menu").mouseleave(function(){
			  $(this).hide();
		});
	 </script>
</html>