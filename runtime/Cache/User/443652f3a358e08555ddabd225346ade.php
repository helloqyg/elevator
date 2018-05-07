<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title></title>
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
		<div class="user_right_tit">合同申请</div>
			<div class="user_right_con" style="padding-top:20px;">
					<form method="post" action="" id="form" class="regform">
					<div class="item">
				    	<div class="label">发送方式：</div>
				      	<div class="input-box">
				        	<select id="pid" name="type"  class="sipt">
				         		<!--<option value="1" selected="selected">扫描件</option>-->
				         		<option value="2">快递</option>
				        	</select>
      					</div>
					    <div class="xing"></div>
					    <div class="error_msg"></div>
					    <div class="clear"></div>
    				</div>
   					<div class="item">
				    	<div class="label">企业名称：</div>
				      	<div class="input-box">
				        	<input onpaste="return false" type="text" placeholder="" id="company_name" name="company_name" value="<?php echo ($company); ?>" class="ipt" readonly>
				      	</div>
					    <div class="xing"></div>
					    <div class="error_msg"></div>
					    <div class="clear"></div>
    				</div>
    				<div class="item">
				    	<div class="label">产品名称：</div>
				      	<div class="input-box">
				        	<?php if($product['ad_type'] == 1): ?><input onpaste="return false" type="text" placeholder="" id="detail" name="detail" value="<?php echo ($booth['booth_num']); ?>号<?php echo ($product['area']); ?>平米展位" class="ipt" readonly>
				        	<?php else: ?>
				        	<input onpaste="return false" type="text" placeholder="" id="detail" name="detail" value="<?php echo get_ad_name($adver);?> 【 <?php echo ($adver); ?>】 " class="ipt" readonly><?php endif; ?>
				      	</div>
					    <div class="xing"></div>
					    <div class="error_msg"></div>
					    <div class="clear"></div>
    				</div>
    				<div class="item">
      					<div class="label">邮箱：</div>
      					<div class="input-box">
        					<input onpaste="return false" type="text" placeholder="" id="email" name="email" class="ipt" datatype="e" errormsg="邮箱格式错误!" nullmsg="邮箱不能为空">
      					</div>
				      	<div class="xing"></div>
				      	<div class="error_msg"></div>
				      	<div class="clear"></div>
    				</div>
   					<div id="zhuanpiao" style="display:block;">
				    	<div class="item">
				    	<div class="label">收件人：</div>
				    		<div class="input-box">
				        		<input onpaste="return false" type="text" placeholder="" id="person" name="person" class="ipt" nullmsg="收件人不能为空">
				      		</div>
					      	<div class="xing"></div>
					      	<div class="error_msg"></div>
					      	<div class="clear"></div>
    					</div>
	 					<div class="item">
						    <div class="label">地址：</div>
						    <div class="input-box">
        						<input onpaste="return false" type="text" placeholder="" id="address" name="address" class="ipt" nullmsg="地址不能为空">
      						</div>
					      	<div class="xing"></div>
					      	<div class="error_msg"></div>
					      	<div class="clear"></div>
    					</div>
					</div>
	 			<div class="pass_btn" style="width:700px;">
      				<input id="login_button" type="submit" value="提交申请" class="sub_btn">
    			</div><br /><br />
    			</form>
      		</div>
    	</div>
    	<div class="clear"></div>
  	</div>
</div>

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
					<td><a href="<?php echo U('/user/help/manual');?>">操作手册</a></td>
					<td><a href="<?php echo U('/user/help/download');?>">资料下载</a></td>
					<td>邮编：065001</td>
				</tr>
				<tr>
					<td><a href="<?php echo U('/user/help/process');?>">预订流程</a></td>
					<td><a href="<?php echo U('/user/help/contact');?>">联系我们</a></td>
					<td>地址：河北省廊坊市开发区翔云道98号</td>
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