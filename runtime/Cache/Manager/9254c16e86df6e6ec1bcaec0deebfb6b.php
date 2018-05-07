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
				<h3 class="panel-title"><?php if($_GET['id']!= '' ): ?>修改<?php else: ?>添加<?php endif; ?>广告 &nbsp; &nbsp; &nbsp; &nbsp;
			<button class="	btn btn-inverse go_1">返回上一步 </button></h3>
			</div>
			<div class="panel-body">
				<form role="form" class="form-horizontal" method="post" action="">
					<div class="form-group">
						<label class="col-sm-2 control-label" for="field-1">广告名称</label>	
						<div class="col-sm-6">
							<input type="text" class="form-control" name="goods_name" id="keywords" value="<?php echo ((isset($data["goods_name"]) && ($data["goods_name"] !== ""))?($data["goods_name"]):''); ?>" placeholder="">
							<p class="help-block"> 数字，如1238</p>
						</div>
					</div>
					<div class="form-group-separator"></div>
					<div class="form-group">
						<label class="col-sm-2 control-label" for="field-1">所在位置</label>	
						<div class="col-sm-6">
							<input type="text" class="form-control" name="goods_address" id="keywords" value="<?php echo ((isset($data["goods_address"]) && ($data["goods_address"] !== ""))?($data["goods_address"]):''); ?>" placeholder="">
							<p class="help-block"> 数字，如1238</p>
						</div>
					</div>
					<div class="form-group-separator"></div>
						<div class="form-group">
							<label class="col-sm-2 control-label" for="field-5">广告类型</label>
							<div class="col-sm-6">
								<select name="cat_id" class="form-control" >
									<?php if(is_array($type)): $i = 0; $__LIST__ = $type;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><option value="<?php echo ($v["tp_id"]); ?>"  <?php if($data["cat_id"] == $v["tp_id"] ): ?>selected<?php endif; ?>  > <?php echo ($v["tp_name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
								</select>
							</div>
						</div>
					<div class="form-group-separator"></div>
						<div class="form-group">
							<label class="col-sm-2 control-label" for="field-5">广告区域</label>
							<div class="col-sm-6">
								<select name="ae_id" class="form-control" >
									<?php if(is_array($area)): $i = 0; $__LIST__ = $area;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><option value="<?php echo ($v["ae_id"]); ?>"  <?php if($data["ae_id"] == $v["ae_id"] ): ?>selected<?php endif; ?>  > <?php echo ($v["ae_name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
								</select>
							</div>
						</div>
					
					
					<div class="form-group-separator"></div>
					<div class="form-group">
						<label class="col-sm-2 control-label" for="field-1">现&nbsp;&nbsp;场&nbsp;&nbsp;图</label>	
						<div class="col-sm-6">
							<div id="queue"></div>
							<input id="file_upload" name="goods_locale_logo" type="file" multiple="true">
							<div class="upload-pre-item" <?php if(empty($data["goods_locale_logo"])): ?>style="display:none"<?php endif; ?>>
								<img src="<?php echo ((isset($data["goods_locale_logo"]) && ($data["goods_locale_logo"] !== ""))?($data["goods_locale_logo"]):''); ?>" width="120px;" height="120px;">					
							</div>
							<input type="hidden" name="goods_locale_logo" value="<?php echo ((isset($data["goods_locale_logo"]) && ($data["goods_locale_logo"] !== ""))?($data["goods_locale_logo"]):''); ?>" />

						</div>
					</div>
					<div class="form-group-separator"></div>
					<div class="form-group">
						<label class="col-sm-2 control-label" for="field-1">平&nbsp;&nbsp;面&nbsp;&nbsp;图</label>	
						<div class="col-sm-6">
							<div id="queue"></div>
							<input id="file_upload_1" name="goods_plane_logo" type="file" multiple="true">
							<div class="upload-pre-item_1" <?php if(empty($data["goods_plane_logo"])): ?>style="display:none"<?php endif; ?>>
								<img src="<?php echo ((isset($data["goods_plane_logo"]) && ($data["goods_plane_logo"] !== ""))?($data["goods_plane_logo"]):''); ?>" width="120px;" height="120px;">					
							</div>
							<input type="hidden" name="goods_plane_logo" value="<?php echo ((isset($data["goods_plane_logo"]) && ($data["goods_plane_logo"] !== ""))?($data["goods_plane_logo"]):''); ?>" />

						</div>
					</div>
					<div class="form-group">
						<div class="form-group">
						<label class="col-sm-2 control-label" for="field-5">是否为特殊类型</label>
							<div class="col-sm-6">
							<label class="radio-inline">
								<input type="radio" name="is_special" value="0" checked="true" /> 正常类型
							</label>
							<label class="radio-inline">
								<input type="radio" name="is_special" value="1" /> 特殊类型
							</label>
							
							
							<p class="help-block" style="color:red"> 注意：发布现场广告切勿选择特殊类型！</p>
						</div>
					</div>
					</div>
					<!--<div class="form-group">
						<label class="col-sm-2 control-label" for="field-1">展位总价</label>	
						<div class="col-sm-6">
							<input type="text" class="form-control" name="payment" id="keywords" value="<?php echo ((isset($news["payment"]) && ($news["payment"] !== ""))?($news["payment"]):''); ?>" placeholder="展位价格">
							<p class="help-block">单位是'元'，只能输入数字</p>
						</div>
					</div>
					<div class="form-group-separator"></div>-->
				
					
					<div class="form-group-separator"></div>
					<div class="form-group">
						<label class="col-sm-2 control-label">广告详情</label>
						<div class="col-sm-6">
							<script type="text/plain" name="content" id="content" style="width:678px;height:300px;">
								<?php echo (htmlspecialchars_decode((isset($data["content"]) && ($data["content"] !== ""))?($data["content"]):'')); ?>
							</script>
						</div>
					</div>
					<div class="form-group-separator"></div>
					<div class="form-group text-center">
						<input type="hidden" name="goods_id" value="<?php echo ((isset($_GET['id']) && ($_GET['id'] !== ""))?($_GET['id']):''); ?>" />
						<button type="submit" class="btn btn-info btn-single pull-center ajax-post"  target-form="form-horizontal"><?php if($_GET['id']!= '' ): ?>修改<?php else: ?>添加<?php endif; ?>广告</h3>
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

$('.go_1').click(function(){
		history.go(-1)
	})
	//现场图图片上传
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
			$("input[name='goods_locale_logo']").val('/upload/'+obj.url);
			$(".uploadify").height("17px");
			$(".upload-pre-item").html('<img src="/upload/' + obj.url + '" width="120px;"/>');
		}
	}



		//【平面图图片上传
	$('#file_upload_1').uploadify({
		'height'      : 30,
		'fileObjName' : 'upfile',
		'swf'         : "/public/js/uploadify/uploadify.swf",
		'uploader'    : "<?php echo U('News/fileupload');?>",
		"buttonText"  : "上传图片",
		"onUploadSuccess" : uploadPicturecover_1,
	});

	//上传成功之后
	function uploadPicturecover_1(file,data){
		var obj = eval( "(" + data + ")" );
		if(obj.state == 'SUCCESS'){
			$(".upload-pre-item").css('display','block');
			$("input[name='goods_plane_logo']").val('/upload/'+obj.url);
			$(".uploadify").height("17px");
			$(".upload-pre-item_1").html('<img src="/upload/' + obj.url + '" width="120px;"/>');
		}
	}
});
</script>


</body>
</html>