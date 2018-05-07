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



<div class="main_exhi">
<div class="main_view">
  <div class="main_view_top">
    <div style="width:80px"><?php echo ($title); ?></div>
  </div>
  <div class="main_view_bot">
    <div class="ad_select">
      <div class="ad_search" id="ad_search_1">
       <ul class="area_a">
        <li>按区域查找：</li>
               <li class="area_a" > <a href="javascript:void(0)" onclick="search_area(0)" flag="area" attr="0">全部</a></li>
            <?php if(is_array($area)): $i = 0; $__LIST__ = $area;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><li class="area_a" ><a href="javascript:void(0)" onclick="search_area(<?php echo ($v["ae_id"]); ?>)" flag="area" attr="<?php echo ($v["ae_id"]); ?>" > <?php echo ($v["ae_name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
        
       </ul>

      </div>
      <div class="clear"></div>
      <div class="ad_search" id="ad_search_2">
       <ul class="type_a">
          <li>按类型查找：</li>
               <li class="type_a" > <a href="javascript:void(0)" onclick="search_type(0)" flag="type" attr="0">全部</a></li>
        
            <?php if(is_array($cat)): $i = 0; $__LIST__ = $cat;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><li class="type_a"><a href="javascript:void(0)" onclick="search_type(<?php echo ($v["tp_id"]); ?>)" flag="type" attr="<?php echo ($v["tp_id"]); ?>"> <?php echo ($v["tp_name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>

          
       </ul>

      </div>
      <div class="clear"></div>
      <div class="ad_place">

       <?php if(is_array($goods)): $i = 0; $__LIST__ = $goods;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i; if($v["get_ad_bot_count"] != 0 ): ?><div class="ad_booth">
        <div class="exhi_img">
          <img src="<?php echo ($v["goods_locale_logo"]); ?>">
        </div>
        <div class="detail_ad">
          <p>名称：<?php echo (mb_substr($v["goods_name"],0,13,'utf-8')); ?>  </p>
          <p>位置：<?php echo (mb_substr($v["goods_address"],0,13,'utf-8')); ?>  </p>
          <p>数量：<?php echo get_ad_bot_count($v['goods_id']);?>/<?php echo get_ad_count($v['goods_id']);?></p>
          <p>行式: <?php echo get_ad_cat($v['cat_id']);?></p>
          <p>优势: <?php echo (mb_substr($v["goods_introduce"],0,10,'utf-8')); ?>...</p>
        </div>
        <div class="btn">
          <a href="<?php echo U('user/adver/detail',array('goods_id'=>$v['goods_id']));?>">详细了解</a>
        </div>
      </div><?php endif; endforeach; endif; else: echo "" ;endif; ?>
	  
      </div>
    </div>
  </div>
   <div class="clear"></div>
  </div>
     <div class="clear"></div>
</div>

<script type="text/javascript">
seajs.config({
  base: "/public/js/app/",
  alias: {
    "jquery": "jquery.min.js",

  },

});

// <script type="text/javascript">
  function search_area(ae_id){
    //给当前选中的区域元素增加attr=select
      $('.area_a>a').removeAttr('select');
      $('[attr='+ae_id+'][flag=area]').attr('select','selected');
      var area = $('[select=selected][flag=area]').attr('attr')
      var type = $('[select=selected][flag=type]').attr('attr')
      $('[flag=area]').parent().removeClass('ad_selected')
      $('[attr='+ae_id+'][flag=area]').parent().addClass('ad_selected')
      //组
      $.ajax({
        type:'post',
        data:{'area':area,'type':type},
        url: "<?php echo U('user/adver/ad_list');?>",
        success:function(msg){
          $('.ad_place').html(msg)
        }
      })


  }
  function search_type(tp_id){
    //给当前选中的类型元素增加attr=select
    $('.type_a>a').removeAttr('select');
    $('[attr='+tp_id+'][flag=type]').attr('select','selected');
    var area = $('[select=selected][flag=area]').attr('attr')
      var type = $('[select=selected][flag=type]').attr('attr')
      $('[flag=type]').parent().removeClass('ad_selected')
      $('[attr='+tp_id+'][flag=type]').parent().addClass('ad_selected')
      //组
      $.ajax({
        type:'post',
        data:{'area':area,'type':type},
        url: "<?php echo U('user/adver/ad_list');?>",
        success:function(msg){
          $('.ad_place').html(msg)
        }
      })
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