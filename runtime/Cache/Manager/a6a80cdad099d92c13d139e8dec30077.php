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
	
<link rel="stylesheet" href="/public/admin/css/lightbox.css">

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
	<div class="panel panel-color panel-info">
		<div class="panel-heading">
			企业信息
		</div>
		<div class="panel-body">
			<div class="row">
					<table class="table table-striped">
						<tbody>
						<tr>
							<td>
								<div class="form-group">
									<span class="col-sm-4 col-xs-3 control-label">企业名称:</span>
									<div class="col-sm-5 col-xs-8">
										<input type="text" class="form-control" name="SITE_NAME" value="<?php echo ($company_info['company_name']); ?>" disabled>
									</div>
								</div>
							</td>
						</tr>
						<tr>
							<td>
								<div class="form-group">
									<span class="col-sm-4 col-xs-3 control-label">企业英文名称:</span>
									<div class="col-sm-5 col-xs-8">
										<input type="text" class="form-control" name="SITE_NAME" value="<?php echo ($company_info['english']); ?>" disabled>
									</div>
								</div>
							</td>
						</tr>
						<tr>
							<td>
								<div class="form-group">
									<span class="col-sm-4 col-xs-3 control-label">注 册 号:</span>
									<div class="col-sm-5 col-xs-8">
										<input type="text" class="form-control" name="SITE_NAME" value="<?php echo ($company_info['register_num']); ?>" disabled>
									</div>
								</div>
							</td>
						</tr>
						<tr>
							<td>
								<div class="form-group">
									<span class="col-sm-4 col-xs-3 control-label">扫 描 件:</span>
									<div class="col-sm-5 col-xs-8">
										<a class="example-image-link" href="<?php echo ($company_info['scan_part']); ?>" data-lightbox="example-1">
											<img class="example-image" src="<?php echo ($company_info['scan_part']); ?>" alt="image-1"  width="232px"/>
										</a>
									</div>
								</div>
							</td>
						</tr>						<tr>
							<td>
								<div class="form-group">
									<span class="col-sm-4 col-xs-3 control-label">证件住所:</span>
									<div class="col-sm-5 col-xs-8">
										<input type="text" class="form-control" name="SITE_NAME" value="<?php echo ($company_info['residence']); ?>" disabled>
									</div>
								</div>
							</td>
						</tr>						
						<tr>
							<td>
								<div class="form-group">
									<span class="col-sm-4 col-xs-3 control-label">通讯地址:</span>
									<div class="col-sm-5 col-xs-8">
										<input type="text" class="form-control" name="SITE_NAME" value="<?php echo ($company_info['address']); ?>" disabled>
									</div>
								</div>
							</td>
						</tr>						
						<tr>
							<td>
								<div class="form-group">
									<span class="col-sm-4 col-xs-3 control-label">经营范围:</span>
									<div class="col-sm-5 col-xs-8">
										<input type="text" class="form-control" name="SITE_NAME" value="<?php echo ($company_info['scope']); ?>" disabled>
									</div>
								</div>
							</td>
						</tr>
						<tr>
							<td>
								<div class="form-group">
									<span class="col-sm-4 col-xs-3 control-label">参展面积:</span>
									<div class="col-sm-5 col-xs-8">
										<input type="text" class="form-control" name="SITE_NAME" value="<?php echo ($company_info['area']); ?>" disabled>
									</div>
								</div>
							</td>
						</tr>							
						<tr>
							<td>
								<div class="form-group">
									<span class="col-sm-4 col-xs-3 control-label">参展类型:</span>
									<div class="col-sm-5 col-xs-8">
										<input type="text" class="form-control" name="SITE_NAME" value="<?php echo get_chart_type($company_info['type']);?>" disabled>
									</div>
								</div>
							</td>
						</tr>						
						<tr>
							<td>
								<div class="form-group">
									<span class="col-sm-4 col-xs-3 control-label">法人姓名:</span>
									<div class="col-sm-5 col-xs-8">
										<input type="text" class="form-control" name="SITE_NAME" value="<?php echo ($company_info['c_name']); ?>" disabled>
									</div>
								</div>
							</td>
						</tr>						
						<tr>
							<td>
								<div class="form-group">
									<span class="col-sm-4 col-xs-3 control-label">法人电话:</span>
									<div class="col-sm-5 col-xs-8">
										<input type="text" class="form-control" name="SITE_NAME" value="<?php echo ($company_info['c_tel']); ?>" disabled>
									</div>
								</div>
							</td>
						</tr>						
						<tr>
							<td>
								<div class="form-group">
									<span class="col-sm-4 col-xs-3 control-label">法人邮箱:</span>
									<div class="col-sm-5 col-xs-8">
										<input type="text" class="form-control" name="SITE_NAME" value="<?php echo ($company_info['c_email']); ?>" disabled>
									</div>
								</div>
							</td>
						</tr>
						<tr>
							<td>
								<div class="form-group">
									<span class="col-sm-4 col-xs-3 control-label">法人职务:</span>
									<div class="col-sm-5 col-xs-8">
										<input type="text" class="form-control" name="SITE_NAME" value="<?php echo ($company_info['c_duties']); ?>" disabled>
									</div>
								</div>
							</td>
						</tr>
						<tr>
							<td>
								<div class="form-group">
									<span class="col-sm-4 col-xs-3 control-label">法人手机:</span>
									<div class="col-sm-5 col-xs-8">
										<input type="text" class="form-control" name="SITE_NAME" value="<?php echo ($company_info['c_phone']); ?>" disabled>
									</div>
								</div>
							</td>
						</tr>
						<tr>
							<td>
								<div class="form-group">
									<span class="col-sm-4 col-xs-3 control-label">法人传真:</span>
									<div class="col-sm-5 col-xs-8">
										<input type="text" class="form-control" name="SITE_NAME" value="<?php echo ($company_info['c_fax']); ?>" disabled>
									</div>
								</div>
							</td>
						</tr>
						<tr>
							<td>
								<div class="form-group">
									<span class="col-sm-4 col-xs-3 control-label">联系人姓名:</span>
									<div class="col-sm-5 col-xs-8">
										<input type="text" class="form-control" name="SITE_NAME" value="<?php echo ($company_info['f_name']); ?>" disabled>
									</div>
								</div>
							</td>
						</tr>						
						<tr>
							<td>
								<div class="form-group">
									<span class="col-sm-4 col-xs-3 control-label">联系人电话:</span>
									<div class="col-sm-5 col-xs-8">
										<input type="text" class="form-control" name="SITE_NAME" value="<?php echo ($company_info['f_tel']); ?>" disabled>
									</div>
								</div>
							</td>
						</tr>						
						<tr>
							<td>
								<div class="form-group">
									<span class="col-sm-4 col-xs-3 control-label">联系人邮箱:</span>
									<div class="col-sm-5 col-xs-8">
										<input type="text" class="form-control" name="SITE_NAME" value="<?php echo ($company_info['f_email']); ?>" disabled>
									</div>
								</div>
							</td>
						</tr>
						<tr>
							<td>
								<div class="form-group">
									<span class="col-sm-4 col-xs-3 control-label">联系人职务:</span>
									<div class="col-sm-5 col-xs-8">
										<input type="text" class="form-control" name="SITE_NAME" value="<?php echo ($company_info['f_duties']); ?>" disabled>
									</div>
								</div>
							</td>
						</tr>
						<tr>
							<td>
								<div class="form-group">
									<span class="col-sm-4 col-xs-3 control-label">联系人手机:</span>
									<div class="col-sm-5 col-xs-8">
										<input type="text" class="form-control" name="SITE_NAME" value="<?php echo ($company_info['f_phone']); ?>" disabled>
									</div>
								</div>
							</td>
						</tr>
						<tr>
							<td>
								<div class="form-group">
									<span class="col-sm-4 col-xs-3 control-label">联系人传真:</span>
									<div class="col-sm-5 col-xs-8">
										<input type="text" class="form-control" name="SITE_NAME" value="<?php echo ($company_info['f_fax']); ?>" disabled>
									</div>
								</div>
							</td>
						</tr>
						<?php if(!empty($id)): ?><form role="form" class="form-horizontal" id="form" method="post" action="">
						<tr>
							<td>
								<div class="form-group">
									<span class="col-sm-4 col-xs-3 control-label">汇款银行</span>
									<div class="col-sm-5 col-xs-8">
										<select name="bid" class="form-control">
											<?php if(is_array($bank)): $i = 0; $__LIST__ = $bank;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$b): $mod = ($i % 2 );++$i;?><option value="<?php echo ($key); ?>" selected=""><?php echo ($b['name']); ?>-<?php echo ($b['number']); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
										</select>
									</div>
								</div>
							</td>
						</tr>
						<tr>
							<td>
								<div class="form-group">
									<span class="col-sm-4 col-xs-3 control-label">审核用户</span>
									<div class="col-sm-5 col-xs-8">
										<label class="radio-inline">
											<input type="radio" name="status" value="1" /> 通过
										</label>
										<label class="radio-inline">
											<input type="radio" name="status" value="2" /> 不通过
										</label>
									</div>
								</div>
							</td>
						</tr><?php endif; ?>
					</tbody>
				</table>
				<?php if(!empty($id)): ?><div class="form-group text-center">
					<input type="hidden" name="id" value="<?php echo ($id); ?>"/>
					<button type="submit" class="btn btn-success btn-single pull-center ajax-post" data-dir='2' target-form="form-horizontal">审核</button>
				</form>
				</div><?php endif; ?>
				</div>
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
	
<script src="/public/admin/js/lightbox.js"></script>


</body>
</html>