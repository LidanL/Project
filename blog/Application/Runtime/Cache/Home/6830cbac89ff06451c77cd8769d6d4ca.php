<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>个人中心</title>
	<link rel="stylesheet" href="/project/blog/Public/css/bootstrap.min.css">
    <link rel="stylesheet" href="/project/blog/Public/my.css">
</head>
<style>
    /*.pf_username{width:980px;margin: 0 auto}*/
	.username{width:100px;height:40px;margin: 0 auto;text-align: center;line-height: 40px;color:#ccc;}
	.nickname{width:80px;height:40px;margin: 0 auto;text-align: center;line-height: 40px;color:#000;}
	.list-group-item{margin-top: 20px;width:300px;height:100px;}
	.list{width:90px;height:20px;text-align: center;float: left; }
	.level{margin-left:30px }
	.personall{width:300px;margin: 0 auto;text-align: center;margin-top:10px }
</style>
<body style="background:#abcdef">
<div class="container" style="width:980px;height:300px">
		<!-- 背景图片 -->
	<div class="jumbotron" style="background:url('/project/blog/Public/image/001.jpg') no-repeat">
	  	<!-- 头像 -->		
	<div class="row" style="width:120px;height:120px;margin:auto;">
	  <div class="col-md-12" >
	    <a href="#" class="thumbnail" style="background:none;border:hidden">
	    	<img src="/project/blog/Public/image/avatar.jpg" alt="..." class="img-circle">
	    </a>
	  </div>
    </div>
    <!-- 用户名 -->
		<div class="row">
			<strong>
				<h3 class="username">hehe</h3>
				<a class="icon_bed" style="width:18px;height:15px; background:url('/project/blog/Public/image/sex.png');"></a>
		    </strong>
		</div>
    <!-- 个签 -->
		<div class="row">
				<h4 class="nickname">ss</h4>
		</div>
     </div>
 </div>
 <!-- 个人中心栏目 -->
 <div class="container" style="width:950px;height:45px;background:#fff;">
 	<ul class="nav nav-tabs nav-justified" style="border-style:none">
  <li role="presentation" class="active"><a href="<?php echo U('index');?>"><strong>我的主页</strong></a></li>
  <li role="presentation"><a href="<?php echo U('ablum');?>">我的相册</a></li>
  <li role="presentation"><a href="#">管理中心</a></li>
</ul>
 </div>

 

 <div class="container" style="width:950px;margin:0 auto">
  <div class="row">
    <!-- 我的主页左侧第一块 -->
 		<ul class="list-group" style="width:300px;float:left">
       <!-- 我的主页左侧第一块 -->
      <li class="list-group-item">
      	<div class="row">
        		<span class="list"><a href="">&nbsp;&nbsp;&nbsp;关注&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|</a></span>

      	  	<span class="list"><a href="">粉丝</a></span>

      	  	<span class="list"><a href="">|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;微博</a></span>
        </div>
  	<div class="row">
  		<span class="list"><a href="">&nbsp;&nbsp;&nbsp;299&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></span>
	  	<span class="list"><a href="">33</a></span>
	  	<span class="list"><a href="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;33</a></span>
  	</div>
  	</li>
 <!-- 我的主页左侧第二块 -->
  <li class="list-group-item">
  	<div class="row">
  		<span class="list">个人等级&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|</span><span class="level"><a href="">Lv.9</a></span>
  		<strong><hr></strong>
  	</div>
  	<div class="row">
  		<span class="personall"><a href="">编辑个人信息</a></span>
   	</div>
  	 </li>
      <!-- 我的主页左侧第三块 -->
  <li class="list-group-item" style="height:155px"><img src="/project/blog/Public/image/11.png" style="margin:0 auto"></li>
</ul>
<!-- 我的主页右侧 -->
<ul class="list-group" style="float:left;margin-left:50px">
<!-- 我的主页右侧栏目 -->
  <li class="list-group-item" style="width:600px;height:50px" >
  	<div class="row">
  		<span class="list"><a href="">&nbsp;&nbsp;&nbsp;全部&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></span>
        <span class="list"><img src="/project/blog/Public/image/12.png"><a href="">热门</a></span>
	  	<span class="list"><a href="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;更多</a></span>
  	</div>
  </li>
  <li class="list-group-item" style="width:600px;height:700px">Dapibus ac facilisis in</li>
  <li class="list-group-item">Morbi leo risus</li>
  <li class="list-group-item">Porta ac consectetur ac</li>
  <li class="list-group-item">Vestibulum at eros</li>
</ul>
 	</div>
 	
 </div>


    <script src="/project/blog/Public/js/jquery.min.js"></script>
    <script src="/project/blog/Public/js/bootstrap.min.js"></script>
</body>
</html