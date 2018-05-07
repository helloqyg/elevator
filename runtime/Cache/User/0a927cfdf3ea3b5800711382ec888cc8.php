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
	
<style type="text/css"> 
#ad_show table{ font-size:12px; table-layout:fixed; empty-cells:show; border-collapse: collapse;margin:0 auto; } 
td{ height:30px; text-align: center;} 
h1,h2,h3{ font-size:12px; margin:0; padding:0; } 
.table{ border:1px solid #cad9ea; color:#666; } 
.table th { background-repeat:repeat-x; height:30px; } 
.table td,.table th{ border:1px solid #cad9ea; padding:0 1em 0; } 
.table tr.alter{ background-color:#f5fafe; } 
#ad_notice{width:100%;height:100px;line-height:80px;float:left;text-align:center;color:#A59C9C;font-size:16px;font-weight:500;}
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
		<div class="user_right_tit">订单回执</div>
			<div class="ad_div" style="height: 343px">
				<div id="ad_notice">
					您现在有<font color="red">(<?php echo ($count); ?>)</font>个订单
				</div>
				<div id="ad_show">
					<table width="95%" class="table"> 
						<tr> 
							<th>付款类型</th> 
							<th>产品名称</th> 
							<th>详情</th> 
							<th>付款方式</th> 
							<th>订购时间</th> 
							<th>交易状态</th> 
							<th>操作</th> 
						</tr> 
						<?php if(is_array($receipt)): $i = 0; $__LIST__ = $receipt;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$info): $mod = ($i % 2 );++$i;?><tr class="alter"> 
							<td><?php if(($info["ad_type"]) == "1"): ?>展位定金<?php else: ?>广告订购<?php endif; ?></td> 
							<td><?php if(($info["ad_type"]) == "1"): echo get_booth_num($info['bid']); else: echo get_ad_name($info['bid']); endif; ?></td> 
							<td><?php if(($info["ad_type"]) == "1"): ?>面积：<?php echo ($info['area']); else: ?> 编号：<?php echo get_ad_encode($info['bid']); endif; ?></td> 
							<td><?php if(($info["type"]) == "1"): ?>支付宝<?php else: ?>银行汇款<?php endif; ?></td> 
							<td><?php echo (date("Y-m-d H:i:s",$info['atime'])); ?></td> 
							<td style="color:red;"><?php if($info['status'] == 2): ?>审核中<?php elseif($info['status'] == 4): ?>已完成<?php else: ?> 未付款<?php endif; ?></td> 
							<?php if($info['status'] == 4): ?><td><a href="<?php echo U('/user/apply/receipt_id2',array('id'=>$info['id']));?>">查看详细</a></td>  
							<?php else: ?>
							<td><a href="<?php echo U('/user/apply/receipt',array('id'=>$info['id']));?>">查看详细</a></td><?php endif; ?>
						</tr><?php endforeach; endif; else: echo "" ;endif; ?>
					</table> 
				</div>
			</div>
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