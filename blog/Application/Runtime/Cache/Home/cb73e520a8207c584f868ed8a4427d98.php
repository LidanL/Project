<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>个人中心</title>
	<link rel="stylesheet" href="/block/Public/css/bootstrap.min.css">
    <link rel="stylesheet" href="/block/Public/my.css">
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
	<div class="jumbotron" style="background:url('/block/Public/image/001.jpg') no-repeat">
	  	<!-- 头像 -->		
	<div class="row" style="width:120px;height:120px;margin:auto;">
	  <div class="col-md-12" >
	    <a href="#" class="thumbnail" style="background:none;border:hidden">
	    	<img src="/block/Public/image/avatar.jpg" alt="..." class="img-circle">
	    </a>
	  </div>
    </div>
    <!-- 用户名 -->
		<div class="row">
			<strong>
				<h3 class="username">hehe</h3>
				<a class="icon_bed" style="width:18px;height:15px; background:url('/block/Public/image/sex.png');"></a>
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

 
<link href="/block/Public/css/ablum.css" rel="stylesheet" type="text/css" />
	<div class="container" style="width:950px;border:1px solid #ccc;margin-top:20px;background:#fff">
		<div class="row">
			<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">照片墙</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">视频 <span class="sr-only">(current)</span></a></li>
        <li><a href="#">我赞过的</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">相册专辑 <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">我的收藏</a></li>
            <li><a href="#">我的动态</a></li>
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="<?php echo U('upload');?>"><img src="/block/Public/image/13.png">上传照片</a></li>
        <li><a href="#"><img src="/block/Public/image/14.png">上传视频</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
		</div>
      <div class="gallery">
            <a id="1" draggable="true"><img src="/block/Public/image/1.jpg"></a>
            <a id="2" draggable="true"><img src="/block/Public/image/2.jpg"></a>
            <a id="3" draggable="true"><img src="/block/Public/image/3.jpg"></a>
            <a id="4" draggable="true"><img src="/block/Public/image/4.jpg"></a>
            <a id="5" draggable="true"><img src="/block/Public/image/5.jpg"></a>
            <a id="6" draggable="true"><img src="/block/Public/image/6.jpg"></a>
            <a id="7" draggable="true"><img src="/block/Public/image/7.jpg"></a>
            <a id="8" draggable="true"><img src="/block/Public/image/8.jpg"></a>
            <a id="9" draggable="true"><img src="/block/Public/image/9.jpg"></a>
            <a id="10" draggable="true"><img src="/block/Public/image/10.jpg"></a>
            <a id="11" draggable="true"><img src="/block/Public/image/11.jpg"></a>
            <a id="12" draggable="true"><img src="/block/Public/image/12.jpg"></a
        </div>
        
			<a href="" >
				<button type="button" class="btn btn-primary btn-lg">  上  传  照  片  </button>
			</a>
      <script src="/block/Publicjs/ablum.js"></script>


    <script src="/block/Public/js/jquery.min.js"></script>
    <script src="/block/Public/js/bootstrap.min.js"></script>
</body>
</html