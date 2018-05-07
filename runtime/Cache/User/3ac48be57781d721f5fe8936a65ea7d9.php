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



<div class="main_exhi" >
<div class="main_view"  background-color:#f1f1f1">
  <div class="main_v_t">
    <div class="main_view_top_d" style="background-color: #ffffff; height: 50px ">
      <div class="not_vt" style="width:80px"><?php echo ($title); ?></div>
    </div>
  </div>
  <div class="datail_left fl">
    <img src="<?php echo ($goods["goods_plane_logo"]); ?>"  width="797" height="503">
  </div>
  <div class="detail_right fr">
      <div class="datail_rt"><img width="371" height="176" src="<?php echo ($goods["goods_locale_logo"]); ?>" width="371" height="176"></div>
      <div class="detail_mid">
        <ul>
          <li class="d-title" style="border: 0">编号：</li>
          <?php if(is_array($goods_detail)): $k = 0; $__LIST__ = $goods_detail;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($k % 2 );++$k;?><li class=""  onclick="clickProduct(<?php echo ($v["ar_id"]); ?>)"> 
          <?php if($v["ar_status"] != 0): echo ($v["ar_encode"]); ?> 
          <script type="text/javascript">
           console.log(<?php echo ($key); ?>)
		   var key = <?php echo ($key); ?>+1;
		   $('.detail_mid ul li:eq('+key+')').css('background-color','gray')
		   $('.detail_mid ul li:eq('+key+')').removeAttr('onclick')
          </script>
          <?php else: ?>
          <?php echo ($v["ar_encode"]); endif; ?>

           </li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
        <div class="clear"></div>
       <div class="dingjin"> 预定金：<?php echo ($goods_detail[0]['ar_price']); ?>元</div>
      </div>
      <div class="d-bottom">
      <tbody>
        
         <input  type="button" value="确认支付" class="ad_detail_sub">
      </tbody>

      </div>
  </div>
    <div class="detail_de fl">
	<h2> 详情介绍</h2>
      <?php echo (htmlspecialchars_decode((isset($goods["content"]) && ($goods["content"] !== ""))?($goods["content"]):'')); ?>
    </div>

  </div>
</div>
<style type="text/css">
  .detail_de{ width: 797px; }
</style>


<script type="text/javascript">
seajs.config({
  base: "/public/js/app/",
  alias: {
    "jquery": "jquery.min.js",

  },

});

// <script type="text/javascript">
$w  = $('.detail_de').css('height');

$w = parseInt($w) + 583;
$('.main_exhi').css('height',$w+'px');
$m = $('.main_exhi').css('height')

  var detail = <?php echo ($detail); ?>;
  //选择的产品
  function clickProduct(id){
    $.each(detail,function(k,n){
    if (n['ar_id'] == id) {
      var k = k+1;
      if ($('.detail_mid li:eq('+k+')').attr('flag') == 'select') {

        $('.detail_mid li:eq('+k+')').removeClass('goods_select')
        $('.detail_mid li:eq('+k+')').css('border','')
        $('.detail_mid li:eq('+k+')').attr('flag','')
        $('.detail_mid li:eq('+k+')').attr('address','')

      }else{
         $('.detail_mid li:eq('+k+')').attr('flag','select')
         $('.detail_mid li:eq('+k+')').attr('address',''+id+'')
        $('.detail_mid li:eq('+k+')').addClass('goods_select')
        $('.detail_mid li:eq('+k+')').css('border','1px solid red')
      }
    
     var b = $('.detail_mid li ').find('[flag=seect]')
    }
   })

  }
$('.ad_detail_sub').click(function(){
  var len = $('.detail_mid li').length
  var count = 0;
  var address_array= '';
  for(var i = 1; i<=len;i++){
    if ($('.detail_mid li:eq('+i+')').attr('flag') == 'select') {
        count++
        address_array +=  $('.detail_mid li:eq('+i+')').attr('address')+',';
       }
  }
  $.ajax({
    type:'POST',
    url :"<?php echo U('user/adver/detail');?>",
    data:{'address_array':address_array,'goods_id':"<?php echo ($_GET['goods_id']); ?>"},
    success:function(msg){
      window.location.href='http://www.elevatorchina.com/user/booth/order/'+msg+'.html'
    }
  })
})



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