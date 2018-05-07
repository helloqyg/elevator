<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>2018中国国际电梯展览会官方预订平台</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="/public/home/css/css.css">
	<script type="text/javascript" src="/public/home/js/jquery.js"></script>
	<script type="text/javascript" src="/public/home/js/banner.js"></script>
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

















<div class="big_float">
      
   <div class="zhan_biaoyu"><img src="/public/home/images/banar_float.png" usemap="#planetmap" hidefocus="true"></div>
    </div>
  <!-- 轮播图 -->
<div class="banner">
    <div class="banner_show" id="banner_show">
    <a href="javascript:void(0)" target="_blank" class="bannger_inbox" style="margin-left: -1000px; z-index: 3; display: block;"><img src="/public/home/images/banner1.jpg" width="2000" height="370"></a>
    <a href="javascript:void(0)" target="_blank" class="bannger_inbox" style="margin-left: -2000px; z-index: 1; display: none;"><img src="/public/home/images/banner3.jpg" width="2000" height="370"></a>
    <!--  <div class="banner_mag">
                  <div class="yq_banner_list" id="yq_banner_list">
                  <a href="javascript:;" rel="0" class="hover">&nbsp;</a>
                  <a href="javascript:;" rel="1">&nbsp;</a>
                  <a href="javascript:;" rel="2">&nbsp;</a>
                  </div>
      </div>-->
         
    </div>
    
   <map name="planetmap">
    <!-- 展位 -->
    <area href="<?php echo U('/user/booth/index');?>" shape="rect" coords="28,118,238,162" style="outline:none;">
    <!-- 广告 -->
    <area href="<?php echo U('/user/adver/index');?>" shape="rect" coords="28,173,238,217" style="outline:none;">
  </map>
 </div>
  <!-- 轮播图结束 -->

<!-- 主体部分 -->
<div class="main">
  <div class="main_sma">
    <div class="notice">
      <div class="new_notice fl">  最新公告<div class="shu"></div><span style="font-size: 14px"><a href="<?php echo U('user/help/news_detail',array('id'=>$notice['id']));?>" > <?php echo ($notice["title"]); ?></a></span></div>
      <div class="more fr"><a href="<?php echo U('user/help/news');?>"> 更多</a></div>
    </div>

    <div class="clear"></div>
    <!-- 推荐展位 -->
    <div class="exhibition">
    <div class="ex_title">
      <img src="/public/home/images/rec_exhibition.jpg">
    </div>

      <div class="exhi_booth">
        <div class="exhi_img">
          <img src="/public/home/images/c.jpg">
        </div>
        <div class="detail">
          <p>展位号：8C13</p>
          <p>展&nbsp;&nbsp;&nbsp;馆：8.2号馆C区</p>
          <p>面&nbsp;&nbsp;&nbsp;积：48m²</p>
        </div>
        <div class="btn">
          <a href="<?php echo U('User/Booth/select',array('id'=>'6','area'=>1,'flag'=>'8C13'));?>">详细了解</a>
        </div>
      </div>

      <div class="exhi_booth">
        <div class="exhi_img">
          <img src="/public/home/images/d.jpg">
        </div>
        <div class="detail">
          <p>展位号：8D12</p>
          <p>展&nbsp;&nbsp;&nbsp;馆：8.2号馆D区</p>
          <p>面&nbsp;&nbsp;&nbsp;积：48m²</p>
        </div>
        <div class="btn">
          <a href="<?php echo U('User/Booth/select',array('id'=>'6','area'=>2,'flag'=>'8D12'));?>">详细了解</a>
        </div>
      </div>

      <div class="exhi_booth">
        <div class="exhi_img">
          <img src="/public/home/images/e.jpg">
        </div>
        <div class="detail">
          <p>展位号：8E19</p>
          <p>展&nbsp;&nbsp;&nbsp;馆：8.2号馆E区</p>
          <p>面&nbsp;&nbsp;&nbsp;积：48m²</p>
        </div>
        <div class="btn">
          <a href="<?php echo U('User/Booth/select',array('id'=>'6','area'=>3,'flag'=>'8E09'));?>">详细了解</a>
        </div>
      </div>

      <div class="exhi_booth">
        <div class="exhi_img">
          <img src="/public/home/images/f.jpg">
        </div>
        <div class="detail">
          <p>展位号：8F06</p>
          <p>展&nbsp;&nbsp;&nbsp;馆：8.2号馆F区</p>
          <p>面&nbsp;&nbsp;&nbsp;积：48m²</p>
        </div>
        <div class="btn">
          <a href="<?php echo U('User/Booth/select',array('id'=>'6','area'=>4,'flag'=>'8F06'));?>">详细了解</a>
        </div>
      </div>

       <div class="exhi_booth">
        <div class="exhi_img">
          <img src="/public/home/images/c-1.jpg">
        </div>
        <div class="detail">
          <p>展位号：8C17</p>
          <p>展&nbsp;&nbsp;&nbsp;馆：8.2号馆C区</p>
          <p>面&nbsp;&nbsp;&nbsp;积：48m²</p>
        </div>
        <div class="btn">
          <a href="<?php echo U('User/Booth/select',array('id'=>'6','area'=>1,'flag'=>'8C17'));?>">详细了解</a>
        </div>
      </div>

       <div class="exhi_booth">
        <div class="exhi_img">
          <img src="/public/home/images/d-1.jpg">
        </div>
        <div class="detail">
          <p>展位号：8D16</p>
          <p>展&nbsp;&nbsp;&nbsp;馆：8.2号馆D区</p>
          <p>面&nbsp;&nbsp;&nbsp;积：48m²</p>
        </div>
        <div class="btn">
          <a href="<?php echo U('User/Booth/select',array('id'=>'6','area'=>2,'flag'=>'8D16'));?>">详细了解</a>
        </div>
      </div>

       <div class="exhi_booth">
        <div class="exhi_img">
          <img src="/public/home/images/e-1.jpg">
        </div>
        <div class="detail">
          <p>展位号：8E06</p>
          <p>展&nbsp;&nbsp;&nbsp;馆：8.2号馆E区</p>
          <p>面&nbsp;&nbsp;&nbsp;积：48m²</p>
        </div>
        <div class="btn">
          <a href="<?php echo U('User/Booth/select',array('id'=>'6','area'=>3,'flag'=>'8E06'));?>">详细了解</a>
        </div>
      </div>

       <div class="exhi_booth">
        <div class="exhi_img">
          <img src="/public/home/images/f-1.jpg">
        </div>
        <div class="detail">
          <p>展位号：8F02</p>
          <p>展&nbsp;&nbsp;&nbsp;馆：8.2号馆F区</p>
          <p>面&nbsp;&nbsp;&nbsp;积：48m²</p>
        </div>
        <div class="btn">
          <a href="<?php echo U('User/Booth/select',array('id'=>'6','area'=>4,'flag'=>'8F02'));?>">详细了解</a>
        </div>
      </div>
    </div>

    <!-- 推荐展位结束 -->

    <!-- 广告推荐开始 -->
<!-- <div class="ad">
    <div class="ex_title">
      <img src="/public/home/images/rec_ad.jpg">
    </div>

      <div class="ad_booth">
        <div class="exhi_img">
          <img src="/public/home/images/ad_scene.jpg">
        </div>
        <div class="detail_ad">
          <p>位置：7号出入口右侧</p>
          <p>数量：2</p>
          <p>行式: 围栏看板</p>
          <p>优势: 7号门为会展中心两边主要入口,行人较多</p>
        </div>
        <div class="btn">
          <a href="">详细了解</a>
        </div>
      </div>

      <div class="ad_booth">
        <div class="exhi_img">
          <img src="/public/home/images/ad_scene.jpg">
        </div>
        <div class="detail_ad">
          <p>位置：7号出入口右侧</p>
          <p>数量：2</p>
          <p>行式：围栏看板</p>
          <p>优势：7号门为会展中心两边主要入口,行人较多</p>
        </div>
        <div class="btn">
          <a href="">详细了解</a>
        </div>
      </div>

      <div class="ad_booth">
        <div class="exhi_img">
          <img src="/public/home/images/ad_scene.jpg">
        </div>
        <div class="detail_ad">
          <p>位置：7号出入口右侧</p>
          <p>数量：2</p>
          <p>行式：围栏看板</p>
          <p>优势：7号门为会展中心两边主要入口,行人较多</p>
        </div>
        <div class="btn">
          <a href="">详细了解</a>
        </div>
      </div>

      <div class="ad_booth">
        <div class="exhi_img">
          <img src="/public/home/images/ad_scene.jpg">
        </div>
        <div class="detail_ad">
          <p>位置：7号出入口右侧</p>
          <p>数量：2</p>
          <p>行式：围栏看板</p>
          <p>优势：7号门为会展中心两边主要入口,行人较多</p>
        </div>
        <div class="btn">
          <a href="">详细了解</a>
        </div>
      </div>


    </div> -->
  </div>
</div><!--  boody浅灰部分 -->

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