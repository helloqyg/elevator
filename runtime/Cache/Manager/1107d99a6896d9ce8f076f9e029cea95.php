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
<link rel="stylesheet" href="/public/admin/css/float_ad.css">
    <script src="/public/admin/js/modernizr.js"></script>
    <script src="/public/admin/js/main.js"></script>
<script type="text/javascript">
function myrefresh(){window.location.reload();}
	//删除操作
	function del(aid){
		var opts = {
				"closeButton": true,
				"debug": false,
				"positionClass": "toast-top-full-width",
				"onclick": null,
				"showDuration": "300",
				"hideDuration": "1000",
				"timeOut": "2000",
				"extendedTimeOut": "1000",
				"showEasing": "swing",
				"hideEasing": "linear",
				"showMethod": "fadeIn",
				"hideMethod": "fadeOut"
			};
		$.get("<?php echo U('Adver/del');?>", {id:aid},function(data){
			if(data.status == 1){
				toastr.success(data.info, opts);
				setTimeout('myrefresh()',2000);
			}else{
				toastr.error(data.info, opts);
			}

		});
	}
</script>

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
	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">广告管理&nbsp; &nbsp; &nbsp; &nbsp;
			<button class="	btn btn-inverse go_1">返回上一步 </button></h3>		
				<div class="panel-options">
				<div class="vertical-top">
					<button class="btn btn-success btn-icon add-area btn6" >
						<i class="fa-pencil"></i>
						<span>添加区域</span>
					</button>
				</div>
				</div>
			</div>
		
			<div class="panel-body">
				<div class="row">
					<div class="col-md-12">
					
						<table class="table table-hover news-list">
						  <thead>
							<tr>
							  <th class="col-md-2 text-center">区域id</th>
							  <th class="col-md-2 text-center">区域名称</th>
							  <th class="col-md-2 text-center">操  作</th>
							</tr>
						  </thead>
						  <tbody>
							<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr>
							  <th scope="row" class="text-center">
								<?php echo ($v["ae_id"]); ?>
							  </th>
							  <td scope="row" class="text-center">
								<?php echo ($v["ae_name"]); ?>
							  </td>
							
							  
							  <td class="text-center">
								<a class="btn btn-info btn7" href="javascript:void(0)" attr="<?php echo ($v["ae_id"]); ?>"  role="button">修改</a>
								<a class="btn btn-danger btn8" href="javascript:void(0);" attr="<?php echo ($v["ae_id"]); ?>" role="button">删除</a>
							   </td>
							</tr><?php endforeach; endif; else: echo "" ;endif; ?>
						  </tbody>
						</table>			
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 text-center">
						<ul class="pagination">
							<!--<?php echo ($page); ?>-->
						</ul>
					</div>
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
<script type="text/javascript">
$(function(){
	//添加区域
		$(".btn6").click(function(){
					var txt=  "请输入要添加的区域名称：";
					window.wxc.xcConfirm(txt, window.wxc.xcConfirm.typeEnum.input,{
						onOk:function(v){
							$.ajax({
								type: "POST",
							    url: "<?php echo U('adver/change_area');?>",
						    	data: {'v':v,flag:1},
								success: function(msg){
									history.go(0) 
								 }

							})
						}
					});
				});
		//修改区域
		$(".btn7").click(function(){
					var attr = $(this).attr('attr')
					var txt=  "请输入要修改的区域名称为：";
					window.wxc.xcConfirm(txt, window.wxc.xcConfirm.typeEnum.input,{
						onOk:function(v){
							$.ajax({
								type: "POST",
							    url: "<?php echo U('adver/change_area');?>",
						    	data: {'v':v,flag:2,attr:attr},
								success: function(msg){
									history.go(0) 
								 }

							})
						}
					});
				});
		$('.go_1').click(function(){
			history.go(-1)
		})
		//删除操作
	$('.btn8').click(function(){
		var msg = "您真的确定要删除吗？"; 
 		if (confirm(msg)==true){
			var opts = {
					"closeButton": true,
					"debug": false,
					"positionClass": "toast-top-full-width",
					"onclick": null,
					"showDuration": "300",
					"hideDuration": "1000",
					"timeOut": "2000",
					"extendedTimeOut": "1000",
					"showEasing": "swing",
					"hideEasing": "linear",
					"showMethod": "fadeIn",
					"hideMethod": "fadeOut"
				};
			var aid = $(this).attr('attr')
			$.ajax({
				type: "POST",
			    url: "<?php echo U('adver/del');?>",
		    	data: {'id':aid,flag:'area'},
				success: function(msg){
						history.go(0) 
				 }

			})
		}


	})
})
</script>


</body>
</html>