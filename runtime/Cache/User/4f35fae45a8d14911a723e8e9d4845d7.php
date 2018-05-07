<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>2018中国国际电梯展览会官方预订平台</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="/public/home/css/css.css">
	<script type="text/javascript" src="/public/home/js/jquery.js"></script>
	<script type="text/javascript" src="/public/home/js/banner.js"></script>
	<link type="text/css" href="/public/css/zw_css.css"  rel="stylesheet" />
		<link rel="stylesheet" type="text/css" href="/public/home/tanchu/css/default.css" />
		<link rel="stylesheet" type="text/css" href="/public/home/tanchu/css/component.css" />
		<script src="/public/home/tanchu/js/modernizr.custom.js"></script>
	<script src="/public/js/sea.min.js"></script>
	
</head>
<body>
<!-- 微信二维码浮动层 -->
<div id="macro-wx-box" class="macro-wx-box dsp-hide" style="position:fixed; top: 115.5px; right: 565px; z-index: 999; display:none ;"> <div class="top"> <span class="title">关注官方微信</span> 

<span id="btn-close" onclick="wechat_float_close()" class="btn-close" ">X</span> 

</div> <div class="bottom"> <p class="margin-l"> <i class="icon"><img width="150" src="/public/home/images/subsribe.jpg" alt=""></i> <span class="col-lan dsp-b">订阅号：电梯展</span> </p> <p class=""> <i class="icon"><img width="150" src="/public/home/images/service.jpg" alt=""></i> <span class="col-lan dsp-b">服务号：中国国际电梯展览会</span></p> </div> </div>
<!-- 微信二维码浮动层结束 -->
<div class="top_bg">


	<div class="top">
		<div class="top_left">欢迎光临2018中国国际电梯展览会官方预订平台！</div>
		<div class="top_right fr">
		<div class="login fr">&nbsp;&nbsp;
						<?php echo check_user_login();?>
					</div>
					<div class="top_img fr">  
				<!-- WPA Button Begin -->
				<script charset="utf-8" type="text/javascript" src="http://wpa.b.qq.com/cgi/wpa.php?key=XzkzODAyMTc1N18zNTI4MjdfODAwMDM4ODg4OF8"></script>&nbsp;&nbsp;<a href="javascript:void(0)" onclick="wechat_float()"  class="click-wechat"><img  width="24"  src="/public/home/images/wechat.jpg"></a> </div>
					
				

			<div class="fr">客服热线: <b>0316-6078901</b></div>
					

		</div>
					
		<div class="clear"></div>
	</div>
	
</div>
<div class="hr"></div>
<div class="clear"></div>
<!-- 导航栏+logo -->
<div class="nav">
		<div class="logo_img fl"> <img src="/public/home/images/logo.png"></div>
		<div class="nav_sma fr">

			<ul class="nav_small_ul">
				<li class="select"><div> <a href="<?php echo U('/');?>"> 网站首页</a></div></li>
				<li><div> <a href="<?php echo U('/user/booth/index');?>"> 展位预订</a></div></li>
				<li><div> <a href="<?php echo U('user/adver/index');?>"> 广告预订</a></div></li>
				<li><div> <a href="<?php echo U('user/help/novice');?>"> 帮助中心</a></div></li>
				<li><div> <a href="<?php echo U('user/account/company');?>"> 会员中心</a></div></li>
			</ul>
		</div>
</div>
	<div class="clear"></div>
	<!-- 导航栏结束 -->


<style type="text/css">
	.xing{
		width: auto;
	}
	#ad_show table{ font-size:12px; table-layout:fixed; empty-cells:show; border-collapse: collapse;margin:0 auto; } 
td{ height:30px; text-align: center;} 
h1,h2,h3{ font-size:12px; margin:0; padding:0; } 
.table{ border:1px solid #cad9ea; color:#666; } 
.table th { background-repeat:repeat-x; height:30px; } 
.table td,.table th{ border:1px solid #cad9ea; padding:0 1em 0; } 
.table tr.alter{ background-color:#f5fafe; } 
#ad_notice{width:100%;height:100px;line-height:80px;float:left;text-align:center;color:#A59C9C;font-size:16px;font-weight:500;}
</style>
<div class="main" style="padding-top:8px; min-height:450px;">
<div class="user_center">
<div class="side_left fl ">
    <ul>
      <a href="<?php echo U('/user/account/company');?>"><li class="company_a"><img  src="/public/home/images/grzx1.png">企业信息</li></a>
      <a href="<?php echo U('/user/account/password');?>"><li class="password"><img  src="/public/home/images/grzx2.png">密码修改</li></a>
      <a href="<?php echo U('/user/booth/index');?>"><li class="exhi"><img  src="/public/home/images/grzx3.png">展位预订</li></a>
      <a href="<?php echo U('/user/adver/index');?>"><li class="ad_a"><img  src="/public/home/images/grzx4.png">广告预订</li></a>
      <a href="<?php echo U('/user/apply/receipt');?>"><li class="order"><img  src="/public/home/images/grzx4.png">订单回执</li></a>
      <a href="<?php echo U('/user/apply/index');?>"><li class="con"><img  src="/public/home/images/grzx7.png">申请合同</li></a>
      <a href="<?php echo U('/user/login/loginout');?>"><li class="exit"><img  src="/public/home/images/grzx6.png">退出登录</li></a>
    </ul>
  </div>
  <style type="text/css">
    .side_left ul li {color: #78828e}
  </style>
	<div class="user_right">
		<div class="user_right_tit">申请合同</div>
			<div class="user_right_con" style="padding-top:20px; height: 321px">
					<div id="ad_show">
					<table width="95%" class="table"> 
						<tr> 
							<th>付款类型</th> 
							<th>展位号</th> 
							<th>平米数</th> 
							<th>付款方式</th> 
							<th>订购时间</th> 
							<th>合同申请</th> 
						</tr> 
						<?php if(is_array($receipt)): $i = 0; $__LIST__ = $receipt;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$info): $mod = ($i % 2 );++$i;?><tr class="alter"> 
							<td><?php if(($info["ad_type"]) == "1"): ?>展位定金<?php else: ?>广告订购<?php endif; ?></td> 
							<td><?php if(($info["ad_type"]) == "1"): echo ($booth_num['booth_num']); else: ?>广告<?php endif; ?></td> 
							<td><?php if(($info["ad_type"]) == "1"): echo ($info['area']); else: ?>展位定金<?php endif; ?></td> 
							<td><?php if(($info["type"]) == "1"): ?>支付宝<?php else: ?>银行汇款<?php endif; ?></td> 
							<td><?php echo (date("Y-m-d H:i:s",$info['atime'])); ?></td> 
							<td ><?php if($info['contract'] == 0 ): ?><a href="javascript:void(0)"><span   class="md-trigger" data-modal="modal-1"  style="color:red;">申请合同</span></a><?php elseif($info['contract'] == 1): ?><span style="color:blue;">申请中</span><?php else: ?> 申请成功<?php endif; ?></td> 

							<!-- 曾经的申请合同功能 -->
							<!-- <td ><?php if($info['contract'] == 0 ): ?><a href="de_apply/<?php echo ($info['url']); ?>"><span  style="color:red;">申请合同</span></a><?php elseif($info['contract'] == 1): ?><span style="color:blue;">申请中</span><?php else: ?> 申请成功<?php endif; ?></td>  -->
						</tr><?php endforeach; endif; else: echo "" ;endif; ?>
					</table> 
				</div>
      		</div>
    	</div>
    	<div class="clear"></div>
  	</div>
</div>
		<div class="md-modal md-effect-1" id="modal-1">

			<div class="md-content" >

				<h3 style="color: white">温馨提示：</h3>

				<div>

					<!-- <p>This is a modal window. You can do the following things with it:</p> -->

					<ul >

						<li style="color: white"><strong></strong>您申请的展位已受理，请耐心等待!</li>

						<li style="color: white"><strong></strong> 展务人员会在48小时内将展位合同书发送至贵司邮箱，请注意查收！</li>

						<li style="color: white"><strong></strong> 请确认合同书无误后签字盖章，将合同书原件（2份）邮寄至中国国际电梯展览会组委会。
</li>

					</ul>

					<button class="md-close">关闭！</button>

				</div>

			</div>

		</div>






		<!-- 弹出框插件开始	 -->

		<script src="/public/home/tanchu/js/classie.js"></script>

		<script src="/public/home/tanchu/js/modalEffects.js"></script>



		<!-- for the blur effect -->

		<!-- by @derSchepp https://github.com/Schepp/CSS-Filters-Polyfill -->

		<script>

			// this is important for IEs

			var polyfilter_scriptpath = '/public/home/tanchu/js/';

		</script>

		<script src="/public/home/tanchu/js/cssParser.js"></script>

		<script src="/public/home/tanchu/js/css-filters-polyfill.js"></script>

		<script src="http://www.jq22.com/js/jq.js"></script>


		<!-- 弹出框插件结束	 -->

<script type="text/javascript">
seajs.config({
  base: "/public/js/app/",
  alias: {
    "jquery": "jquery.min.js",

  },

});

seajs.use('apply');


</script>

<!-- foot底部 -->
<div class="clear"></div>
	<div class="foot">
		<div class="foot_top">
		<div class="fl">
			<table >
				<tr>
					<td><a href="<?php echo U('/user/help/novice');?>">新手指导</a></td>
					<td><a href="<?php echo U('/user/help/account');?>">账号密码</a></td>
					<td style="width: 285px">联系人：马振涛</td>
				</tr>
				<tr>
					<td><a href="<?php echo U('/user/help/news');?>">最新公告</a></td>
					<td><a href="<?php echo U('/user/help/download');?>">资料下载</a></td>
					<td>邮编：065001</td>
				</tr>
				<tr>
					<td><a href="<?php echo U('/user/help/process');?>">预订流程</a></td>
					<td><a href="<?php echo U('/user/help/contact');?>">联系我们</a></td>
					<td>地址：河北省廊坊市开发区祥云道98号</td>
				</tr>
			</table>
		</div>
		<div class="fr">
			
		   


		    <div class="con_wechat">
		      <div class="con_img_we"> <img width="92" src="/public/home/images/service.jpg"> </div>
		      <div class="con_detail_we">电梯展服务号</div>
		    </div>
		    <div class="con_wechat">
		      <div class="con_img_we"> <img width="92" src="/public/home/images/subsribe.jpg"> </div>
		      <div class="con_detail_we">电梯展订阅号</div>
		    </div>

		</div>
		</div>
		<div class="foot_bot">
			Copyright 2007-2018 All Right Reserved 版权所有·中国国际电梯展览会组委会
		</div>
	</div>
	<!-- foot底部结束 -->

</body>
</html>
	<script type="text/javascript" src="/public/home/js/js.js"></script>