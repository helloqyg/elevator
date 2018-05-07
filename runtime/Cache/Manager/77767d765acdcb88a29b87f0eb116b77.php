<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="微信管理系统" />
	<meta name="author" content="widuu" />
	<title><?php if(!empty($title)): echo ($title); ?>-<?php endif; ?>展位销售订购系统</title>
	<link rel="stylesheet" href="/public/admin/css/fonts/linecons/css/linecons.css">
	<link rel="stylesheet" href="/public/admin/css/fonts/fontawesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="/public/admin/css/bootstrap.css">
	<link rel="stylesheet" href="/public/admin/css/xenon-core.css">
	<link rel="stylesheet" href="/public/admin/css/xenon-forms.css">
	<link rel="stylesheet" href="/public/admin/css/xenon-components.css">
	<link rel="stylesheet" href="/public/admin/css/xenon-skins.css">
	<link rel="stylesheet" href="/public/admin/css/custom.css">
	<script src="/public/admin/js/jquery-1.11.1.min.js"></script>
	
	<link href="/public/js/umeditor/themes/default/css/umeditor.min.css" type="text/css" rel="stylesheet">
	<script type="text/javascript" charset="utf-8" src="/public/js/umeditor/umeditor.config.js"></script>
	<script type="text/javascript" charset="utf-8" src="/public/js/umeditor/umeditor.min.js"></script>
	<script type="text/javascript" src="/public/js/umeditor/lang/zh-cn/zh-cn.js"></script>

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="/public/admin/js/html5shiv.min.js"></script>
		<script src="/public/admin/js/respond.min.js"></script>
	<![endif]-->
</head>
<body class="page-body">
	<div class="copyrights"></div>
	<div class="page-container">
		<div class="sidebar-menu toggle-others fixed">
			<div class="sidebar-menu-inner">	
				<header class="logo-env">
					<div class="logo">
						<a href="<?php echo U('/manager/index');?>" class="logo-expanded">
							<img src="/public/images/logo.png" alt="" />
						</a>
						
						<!--<a href="<?php echo U('/manager/index');?>" class="logo-collapsed">
							<img src="/public/admin/images/logo1.png" width="40" alt="" />
						</a>-->
					</div>

					<div class="mobile-menu-toggle visible-xs">						
						<a href="#" data-toggle="mobile-menu">
							<i class="fa-bars"></i>
						</a>
					</div>
			
				</header>
				<ul id="main-menu" class="main-menu">
					<li class="active">
						<a href="<?php echo U('/manager/index');?>">
								<i class="fa-home"></i>
								<span class="title">仪表盘</span>
						</a>
					</li>
					<!--class="active opened active"-->
					<li>
						<a href="<?php echo U('System/website');?>">
							<i class="linecons-cog"></i>
							<span class="title">全局设置</span>
						</a>
						<!--<ul>
							<li class="active">
								<a href="<?php echo U('System/website');?>">
									<span class="title">站点信息</span>
								</a>
							</li>
							<li>
								<a href="<?php echo U('System/features');?>">
									<span class="title">站点功能</span>
								</a>
							</li>
						</ul>-->
					</li>
					<li>
						<a href="#">
							<i class="linecons-doc"></i>
							<span class="title">展馆管理</span>
						</a>
						<ul>
							<li>
								<a href="<?php echo U('Chart/hall');?>">
									<span class="title">展馆设置</span>
								</a>
							</li>
							<li>
								<a href="<?php echo U('Chart/trade');?>">
									<span class="title">展位订单</span>
								</a>
							</li>
							<li>
								<a href="<?php echo U('Chart/examine');?>">
									<span class="title">标展审核</span>
								</a>
							</li>
							<li>
								<a href="<?php echo U('Chart/apply');?>">
									<span class="title">合同申请</span>
								</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="<?php echo U('adver/index');?>">
							<i class="fa-area-chart"></i>
							<span class="title">广告管理</span>
						</a>
						<ul>
							<!-- <li>
								<a href="<?php echo U('Adver/index');?>">
									<span class="title">参考<span>
								</a>
							</li> -->
							<li>
								<a href="<?php echo U('Adver/adlist');?>">
									<span class="title">广告设置</span>
								</a>
							</li>
							<li>
								<a href="<?php echo U('Adver/trade');?>">
									<span class="title">广告订单</span>
								</a>
							</li>
							<!-- <li>
								<a href="<?php echo U('Adver/apply');?>">
									<span class="title">合同申请</span>
								</a>
							</li> -->
						</ul>
					</li>
					<li>
						<a href="#">
							<i class="linecons-note"></i>
							<span class="title">帮助中心</span>
						</a>
						<ul>
							<li>
								<a href="<?php echo U('News/manage');?>">
									<span class="title">帮助信息</span>
								</a>
							</li>
							<li>
								<a href="<?php echo U('News/add');?>">
									<span class="title">添加帮助</span>
								</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="<?php echo U('User/manage');?>">
							<i class="linecons-user"></i>
							<span class="title">用户管理</span>
							<span class="label label-success pull-right"><?php echo ($member_total); ?></span>
						</a>
						<ul>
							<li>
								<a href="<?php echo U('User/index');?>">
									<span class="title">前台用户</span>
								</a>
							</li>
							<li>
								<a href="<?php echo U('User/verify');?>">
									<span class="title">审核用户</span>
								</a>
							</li>
							<!--<li>
								<a href="<?php echo U('User/audience');?>">
									<span class="title">后台用户</span>
								</a>
							</li>-->
						</ul>
					</li>
					<li>
						<a href="<?php echo U('User/manage');?>">
							<i class="fa-cc-visa"></i>
							<span class="title">财务管理</span>
						</a>
						<ul>
							<li>
								<a href="<?php echo U('Invoice/index');?>">
									<span class="title">发票申请</span>
								</a>
							</li>
							<li>
								<a href="<?php echo U('Invoice/apply');?>">
									<span class="title">汇款审核</span>
								</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="#">
							<i class="linecons-params"></i>
							<span class="title">个人设置</span>
						</a>
						<ul>
							<li>
								<a href="<?php echo U('User/modify');?>">
									<span class="title">修改密码</span>
								</a>
							</li>
							<li>
								<a href="<?php echo U('User/add');?>">
									<span class="title">添加用户</span>
								</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="<?php echo U('Login/loginout');?>">
							<i class="fa-sign-out"></i>
							<span class="title">退出</span>
						</a>
					</li>
				</ul>		
			</div>
		</div>
		
		<div class="main-content">		
			<!-- User Info, Notifications and Menu Bar -->
			<nav class="navbar user-info-navbar" role="navigation">
				<!-- Left links for user info navbar -->
				<ul class="user-info-menu left-links list-inline list-unstyled">
					<li class="hidden-sm hidden-xs">
						<a href="#" data-toggle="sidebar">
							<i class="fa-bars"></i>
						</a>
					</li>
				</ul>
				
				
				<!-- Right links for user info navbar -->
				<ul class="user-info-menu right-links list-inline list-unstyled">
					
					<!-- <li class="search-form">You can add "always-visible" to show make the search input visible
						
						<form method="get" action="<?php echo U('');?>">
							<input type="text" name="key" class="form-control search-field" placeholder="Type to search..." />
							
							<button type="submit" class="btn btn-link">
								<i class="linecons-search"></i>
							</button>
						</form>
						
					</li>
					 -->
					<li class="dropdown --> user-profile">
						<a href="#" data-toggle="dropdown">
							<img src="/public/admin/images/user-4.png" alt="user-image" class="img-circle img-inline userpic-32" width="28" />
							<span>
								<?php echo session('username');?>
								<i class="fa-angle-down"></i>
							</span>
						</a>
						
						<ul class="dropdown-menu user-profile-menu list-unstyled">
							<li>
								<a href="<?php echo U('User/modify');?>">
									<i class="fa-wrench"></i>
									个人设置
								</a>
							</li>
							<li class="last">
								<a href="<?php echo U('Login/loginout');?>">
									<i class="fa-lock"></i>
									退出
								</a>
							</li>
						</ul>
					</li>
				</ul>
			</nav>
			
<div class="row">
	<div class="col-sm-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">帮助信息</h3>
			</div>
			<div class="panel-body">
				<form role="form" class="form-horizontal" method="post" action="">
					<div class="form-group">
						<label class="col-sm-2 control-label" for="field-1">新闻标题</label>	
						<div class="col-sm-6">
							<input type="text" class="form-control" id="title" name="title" value="<?php echo ((isset($news["title"]) && ($news["title"] !== ""))?($news["title"]):''); ?>" placeholder="新闻标题">
						</div>
					</div>
					<div class="form-group-separator"></div>
					<div class="form-group">
						<label class="col-sm-2 control-label" for="field-1">添加时间</label>	
						<div class="col-sm-6">
							<input type="text" class="form-control datepicker"  name="atime" <?php if(!empty($news["atime"])): ?>value="<?php echo (date('Y-m-d',$news["atime"])); ?>"<?php endif; ?>>
						</div>
					</div>
					<div class="form-group-separator"></div>
					<div class="form-group">
						<label class="col-sm-2 control-label" for="field-1">作&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;者</label>	
						<div class="col-sm-6">
							<input type="text" class="form-control" id="author" name="author" placeholder="作者" value="<?php echo ((isset($news["author"]) && ($news["author"] !== ""))?($news["author"]):''); ?>">
						</div>
					</div>
					<div class="form-group-separator"></div>
					<div class="form-group">
						<label class="col-sm-2 control-label" for="field-1">来&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;源</label>	
						<div class="col-sm-6">
							<input type="text" class="form-control" id="origin" name="origin" placeholder="文章来源" value="<?php echo ((isset($news["origin"]) && ($news["origin"] !== ""))?($news["origin"]):''); ?>">
						</div>
					</div>
					<div class="form-group-separator"></div>
					<div class="form-group">
						<label class="col-sm-2 control-label" for="field-1">缩&nbsp;&nbsp;略&nbsp;&nbsp;图</label>	
						<div class="col-sm-6">
							<div id="queue"></div>
							<input id="file_upload" name="pic" type="file" multiple="true">
							<div class="upload-pre-item" <?php if(empty($news["pic"])): ?>style="display:none"<?php endif; ?>>
								<img src="<?php echo ((isset($news["pic"]) && ($news["pic"] !== ""))?($news["pic"]):''); ?>" width="120px;" height="120px;">					
							</div>
							<input type="hidden" name="pic" value="<?php echo ((isset($news["pic"]) && ($news["pic"] !== ""))?($news["pic"]):''); ?>" />

						</div>
					</div>
					<div class="form-group-separator"></div>
					<div class="form-group">
						<label class="col-sm-2 control-label" for="field-1">关&nbsp;&nbsp;键&nbsp;&nbsp;词</label>	
						<div class="col-sm-6">
							<input type="text" class="form-control" name="keywords" id="keywords" value="<?php echo ((isset($news["keywords"]) && ($news["keywords"] !== ""))?($news["keywords"]):''); ?>" placeholder="关 键 词">
							<p class="help-block">  多个关键词使用英文逗号","分割</p>
						</div>
					</div>
					<div class="form-group-separator"></div>
						<div class="form-group">
							<label class="col-sm-2 control-label" for="field-5">新闻描述</label>
							<div class="col-sm-6">
								<textarea class="form-control" cols="5" id="description" name="description"><?php echo ((isset($news["description"]) && ($news["description"] !== ""))?($news["description"]):''); ?></textarea>
							</div>
						</div>
					<div class="form-group-separator"></div>
					<div class="form-group">
						<label class="col-sm-2 control-label">是否推荐</label>
						<div class="col-sm-6">
							<label class="radio-inline">
								<input type="radio" name="position"  value="1" <?php if(($news["position"]) == "1"): ?>checked=""<?php endif; ?>>是
							</label>
							<label class="radio-inline">
								<input type="radio" name="position" value="0" <?php if(($news["position"]) == "0"): ?>checked=""<?php endif; ?>>否
							</label>
						</div>
					</div>
					<div class="form-group-separator"></div>
					<div class="form-group">
						<label class="col-sm-2 control-label">新闻内容</label>
						<div class="col-sm-6">
							<script type="text/plain" name="content" id="content" style="width:678px;height:300px;">
								<?php echo (htmlspecialchars_decode((isset($news["content"]) && ($news["content"] !== ""))?($news["content"]):'')); ?>
							</script>
						</div>
					</div>
					<div class="form-group-separator"></div>
					<div class="form-group text-center">
						<input type="hidden" name="id" value="<?php echo ((isset($id) && ($id !== ""))?($id):''); ?>" />
						<button type="submit" class="btn btn-info btn-single pull-center ajax-post"  target-form="form-horizontal"><?php if(!empty($news["id"])): ?>修改<?php else: ?>添加<?php endif; ?>新闻</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

			<footer class="main-footer sticky footer-type-1">
				<div class="footer-inner">
					<div class="footer-text">
						&copy; 2015 
						<strong>Widuu</strong> </a></a>
					</div>
					<div class="go-up">
						<a href="#" rel="go-top">
							<i class="fa-angle-up"></i>
						</a>
					</div>
				</div>
			</footer>
		</div>
	</div>

	<script src="/public/admin/js/bootstrap.min.js"></script>
	<script src="/public/admin/js/TweenMax.min.js"></script>
	<script src="/public/admin/js/resizeable.js"></script>
	<script src="/public/admin/js/joinable.js"></script>
	<script src="/public/admin/js/xenon-api.js"></script>
	<script src="/public/admin/js/xenon-toggles.js"></script>
	<script src="/public/admin/js/xenon-widgets.js"></script>
	<script src="/public/admin/js/devexpress-web-14.1/js/globalize.min.js"></script>
	<script src="/public/admin/js/devexpress-web-14.1/js/dx.chartjs.js"></script>
	<script src="/public/admin/js/toastr/toastr.min.js"></script>
	<script src="/public/admin/js/xenon-custom.js"></script>
	
<link rel="stylesheet" href="/public/js/uploadify/uploadify.css">
<script src="/public/js/uploadify/jquery.uploadify.min.js"></script>
<script src="/public/admin/js/daterangepicker/daterangepicker.js"></script>
<script src="/public/admin/js/datepicker/bootstrap-datepicker.js"></script>
<script type="text/javascript">
$(function(){
	window.UMEDITOR_CONFIG.imageUrl = "<?php echo U('News/fileupload');?>"
	window.UMEDITOR_CONFIG.imagePath='/upload/';
	UM.getEditor('content');
	//图片上传
	$('#file_upload').uploadify({
		'height'      : 30,
		'fileObjName' : 'upfile',
		'swf'         : "/public/js/uploadify/uploadify.swf",
		'uploader'    : "<?php echo U('News/fileupload');?>",
		"buttonText"  : "上传图片",
		"onUploadSuccess" : uploadPicturecover,
	});

	//上传成功之后
	function uploadPicturecover(file,data){
		var obj = eval( "(" + data + ")" );
		if(obj.state == 'SUCCESS'){
			$(".upload-pre-item").css('display','block');
			$("input[name='pic']").val('/upload/'+obj.url);
			$(".uploadify").height("17px");
			$(".upload-pre-item").html('<img src="/upload/' + obj.url + '" width="120px;"/>');
		}
	}

});
</script>


</body>
</html>