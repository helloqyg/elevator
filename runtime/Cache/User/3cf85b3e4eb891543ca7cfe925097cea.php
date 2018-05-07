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
	
	<link type="text/css" href="/public/css/usercenter.css"  rel="stylesheet" />
<script type="text/javascript" src="/public/home/js/jquery.reveal.js"></script>
	<style type="text/css">
		.attest-success .attest-seal{
			position: absolute;
		    top: 80px;
		    left: 120px;
		    width: 97px;
		    height: 98px;
		    overflow: hidden;
		    background: url(/public/images/<?php if(($company_info["status"]) == "0"): ?>z2.png<?php else: ?>z1.png<?php endif; ?>) no-repeat;   
		}
	</style>

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


<div class="main_page">
<div class="big_main">
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
	<div class="side_right fr">
		<div class="side_right_top">
			<div class="name fl">下午好,<?php echo ($company_info['f_name']); ?>先生!</div>
			<div class="timer fr">上次登录时间:<?php echo (date('Y-m-d H:i:s',$lastLogin['last_login'])); ?></div>
		</div>

		<div class="side_left_bot fl">
			<img src="/public/home/images/person.jpg"> <br>
			<a href="#" style="display:block; margin-left:50px;" class="big-link" data-reveal-id="myModal">修改信息</a>	
		</div>
		<div class="side_right_bot fl">
			

	


		
		 	<table >
		 		<tr>
		 			<td width="230">用户名: <?php echo ($username["username"]); ?></td>
		 			<td width="240" >展位订单: <a href="<?php echo U('/user/apply/receipt');?>"> <span style="color: red"><?php echo ((isset($exhi_count) && ($exhi_count !== ""))?($exhi_count):0); ?>个</span></a></td>
		 		</tr>
		 		<tr  style=" height:60px; vertical-align:top;" >
		 			<td  class="nott" style="color:#ff0000;"> <?php if($company_info["status"] == 0): ?><img src="/public/home/images/login_error.jpg">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 未审核<?php else: ?> <img src="/public/home/images/success.jpg">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 已通过认证<?php endif; ?> </td>
		 			<td  >广告订单:  <a href="<?php echo U('/user/apply/receipt');?>"> <span style="color: red"><?php echo ((isset($ad_count ) && ($ad_count !== ""))?($ad_count ):0); ?>个</span></a></td>
		 		</tr>
		 		
		 		<tr>
		 			<td>企业名称: <?php echo ($company_info['company_name']); ?></td>
		 			<td >营业执照: <?php echo ($company_info['register_num']); ?></td>
		 		</tr>
		 		<tr>
		 			<td>联系人: <?php echo ($company_info['f_name']); ?>  （ <?php echo ($company_info['f_duties']); ?>）</td>
		 			<td>企业负责人: <?php echo ($company_info['c_name']); ?> （ <?php echo ($company_info['c_duties']); ?>）</td>
		 		</tr>
		 		<tr>
		 			<td>联系人邮箱: <?php echo ($company_info['f_email']); ?></td>
		 			<td>负责人邮箱: <?php echo ($company_info['c_email']); ?></td>
		 		</tr>
		 		<tr>
		 			<td >联系人电话: <?php echo ($company_info['f_area_code']); ?>-<?php echo ($company_info['f_tel']); ?></td>
		 			<td >负责人电话: <?php echo ($company_info['c_area_code']); ?>-<?php echo ($company_info['c_tel']); ?></td>
		 		</tr>
				<tr>
		 			<td >联系人手机:<?php echo ($company_info['f_phone']); ?></td>
		 			<td >负责人手机:<?php echo ($company_info['c_phone']); ?></td>
		 		</tr>
		 		<tr>
		 			<td>展位类型: <?php echo get_chart_type($company_info['type']);?></td>
		 			<td>经营范围: <?php echo ($company_info['scope']); ?></td>
		 		</tr>
		 		<tr>
		 			<td>英文名称: <?php echo ($company_info['english']); ?></td>
		 			<td>参展面积: <?php echo ($company_info['area']); ?></td>
		 		</tr>
				<tr>
		 			<td>&nbsp;</td>
		 			<td>&nbsp;</td>
		 		</tr>
		 	</table>

		</div>
	</div>
</div>

</div>
<div id="myModal" class="reveal-modal">

			<h1>请注意：</h1>

			<p>介于安全问题，如贵公司有信息变动需要更改则可联系XX部：60886088</p>
			<p>如不更改，或许会影响到展位/广告预订情况</p>

			<a class="close-reveal-modal">&#215;</a>

		</div>

<script type="text/javascript">
seajs.config({
  base: "/public/js/app/",
  alias: {
    "jquery": "jquery.min.js",

  },

});

//<script type="text/javascript">
	//用户注册事件
	var rtime = <?php echo ($rtime['rtime']); ?>;
	var lastLogin =" <?php echo ($lastLogin['is_first_login']); ?>";
	var count = <?php echo ($count); ?>;
	//如果是2016年12月28日以前申请的账户  && 并且是2017年第一次登录 && 并且是本次刷新页面第一次。
	// console.log(rtime)
	// console.log(lastLogin)
	// console.log(count)
	if (rtime <1482854400 && lastLogin==1 && count == 1) {
		$('.big-link').click();
	}

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