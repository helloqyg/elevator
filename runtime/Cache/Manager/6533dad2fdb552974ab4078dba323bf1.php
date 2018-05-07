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
				<h3 class="panel-title"><?php if(!empty($news["id"])): ?>修改<?php else: ?>添加<?php endif; ?>展位</h3>
			</div>
			<div class="panel-body">
				<form role="form" class="form-horizontal" method="post" action="">
					<div class="form-group">
						<label class="col-sm-2 control-label" for="field-1">展&nbsp;&nbsp;位&nbsp;&nbsp;号</label>	
						<div class="col-sm-6">
							<input type="text" class="form-control" name="booth_num" id="keywords" value="<?php echo ((isset($news["booth_num"]) && ($news["booth_num"] !== ""))?($news["booth_num"]):''); ?>" placeholder="展位号，如'1238'">
							<p class="help-block"> 数字，如1238</p>
						</div>
					</div>
					<div class="form-group-separator"></div>
					<div class="form-group">
						<label class="col-sm-2 control-label" for="field-1">所属展馆</label>	
						<div class="col-sm-6">
							<select name="hid" class="form-control" >
								<?php if(is_array($hall)): $i = 0; $__LIST__ = $hall;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><option value="<?php echo ($v["id"]); ?>" <?php if(($_GET['id']) == $v['id']): ?>selected<?php endif; ?> <?php if(($hall_hid) == $v['id']): ?>selected<?php endif; ?>><?php echo ($v["hall_num"]); ?>馆</option><?php endforeach; endif; else: echo "" ;endif; ?>
							</select>
						</div>
					</div>
					<div class="form-group-separator"></div>
						<div class="form-group">
							<label class="col-sm-2 control-label" for="field-5">展馆类型</label>
							<div class="col-sm-6">
								<select name="hall_type" class="form-control" >
									<!--<option value="1" <?php if(($news["hall_type"]) == "1"): ?>selected<?php endif; ?>>整机</option>-->
									<option value="2" <?php if(($news["hall_type"]) == "2"): ?>selected<?php endif; ?>>部件</option>
									<!--<option value="3" <?php if(($news["hall_type"]) == "3"): ?>selected<?php endif; ?>>其它</option>-->
								</select>
							</div>
						</div>
					<?php if(!empty($hall_area)): ?><div class="form-group-separator"></div>
						<div class="form-group">
							<label class="col-sm-2 control-label" for="field-5">展位区域</label>
							<div class="col-sm-6">
								<select name="hall_area" class="form-control" >
									<?php if(is_array($hall_area)): $i = 0; $__LIST__ = $hall_area;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$h): $mod = ($i % 2 );++$i;?><option value="<?php echo ($hall_area[$key]); ?>" <?php if(($news["hall_area"]) == $hall_area[$key]): ?>selected<?php endif; ?>><?php echo ($hall_area[$key]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
								</select>
							</div>
						</div><?php endif; ?>
					<div class="form-group-separator"></div>
					<div class="form-group">
						<label class="col-sm-2 control-label" for="field-1">展位面积</label>	
						<div class="col-sm-6">
							<input type="text" class="form-control" name="area" id="keywords" value="<?php echo ((isset($news["area"]) && ($news["area"] !== ""))?($news["area"]):''); ?>" placeholder="展位面积">
							<p class="help-block">展位面积，填写数字，单位平方米</p>
						</div>
					</div>
					<div class="form-group-separator"></div>
					<!--<div class="form-group">
						<label class="col-sm-2 control-label" for="field-1">展位总价</label>	
						<div class="col-sm-6">
							<input type="text" class="form-control" name="payment" id="keywords" value="<?php echo ((isset($news["payment"]) && ($news["payment"] !== ""))?($news["payment"]):''); ?>" placeholder="展位价格">
							<p class="help-block">单位是'元'，只能输入数字</p>
						</div>
					</div>
					<div class="form-group-separator"></div>-->
					<div class="form-group">
						<label class="col-sm-2 control-label" for="field-1">展位定金</label>	
						<div class="col-sm-6">
							<input type="text" class="form-control" name="price" id="keywords" value="<?php echo ((isset($news["price"]) && ($news["price"] !== ""))?($news["price"]):''); ?>" placeholder="展位价格">
							<p class="help-block">单位是'元'，只能输入数字</p>
						</div>
					</div>
					<div class="form-group-separator"></div>
					<div class="form-group">
						<label class="col-sm-2 control-label" for="field-5">展馆状态</label>
							<div class="col-sm-6">
							<label class="radio-inline">
								<input type="radio" name="status" value="1" <?php if(($news["status"]) == "1"): ?>checked<?php endif; ?> /> 销售
							</label>
							<label class="radio-inline">
								<input type="radio" name="status" value="0" <?php if(($news["status"]) == "0"): ?>checked<?php endif; ?>/>  预留
							</label>
						</div>
					</div>
					<div class="form-group-separator"></div>
					<div class="form-group">
						<label class="col-sm-2 control-label" for="field-5">展位类型</label>
							<div class="col-sm-6">
							<label class="radio-inline">
								<input type="radio" name="special" value="1" <?php if(($news["special"]) == "1"): ?>checked<?php endif; ?> /> 光地
							</label>
							<label class="radio-inline">
								<input type="radio" name="special" value="0" <?php if(($news["special"]) == "0"): ?>checked<?php endif; ?>/>  标展
							</label>
						</div>
					</div>
					<div class="form-group-separator"></div>
					<div class="form-group">
						<label class="col-sm-2 control-label" for="field-5">展位审核</label>
							<div class="col-sm-6">
							<label class="radio-inline">
								<input type="radio" name="checks" value="1" <?php if(($news["checks"]) == "1"): ?>checked<?php endif; ?> /> 需要
							</label>
							<label class="radio-inline">
								<input type="radio" name="checks" value="0" <?php if(($news["checks"]) == "0"): ?>checked<?php endif; ?>/>  不需要
							</label>
						</div>
					</div>
					<div class="form-group-separator"></div>
					<div class="form-group text-center">
						<input type="hidden" name="id" value="<?php echo ((isset($id) && ($id !== ""))?($id):''); ?>" />
						<button type="submit" class="btn btn-info btn-single pull-center ajax-post"  target-form="form-horizontal"><?php if(!empty($news["id"])): ?>修改<?php else: ?>添加<?php endif; ?>展位</button>
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
	

</body>
</html>