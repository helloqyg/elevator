<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="/public/home/css/css.css">
	<script type="text/javascript" src="/public/home/js/jquery.js"></script>
	<script type="text/javascript" src="/public/home/js/banner.js"></script>
	<link type="text/css" href="/public/css/zw_css.css"  rel="stylesheet" />

	<script src="/public/js/sea.min.js"></script>
	
<link type="text/css" href="/public/css/zw_select.css"  rel="stylesheet" />
<link type="text/css" href="/public/css/zw_select1.css"  rel="stylesheet" />
<style type="text/css">
#weee_area{
  float: right;
  padding-right: 30px;
}
#weee_area #search{
  margin-left: 5px;
  background-color:#23ac38;
  color:#eee;
  height: 26px;
}
#weee_area label{
  color:#666;
  margin-bottom:2px;
  padding:8px 3px; 0 20px;
}
#weee_area input{
  width: 45px;
  text-align: center;
  border:solid 1px #ccc;
  color:#BDBDBD;
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


<div class="main" style="padding-top:2px;">
  <div class="weee_tit">
    <?php echo get_chart_type($company_info['hall_type']);?>馆 — <?php echo ($company_info['hall_num']); ?>馆
    <div id="weee_area">
      <form method="GET" action="">
      <label>展位搜索：</label><input type="text" id="s_area" name="s_area" value="<?php echo ($s_area); ?>"> - <input type="text" id="e_area" name="e_area" value="<?php echo ($e_area); ?>"> (平米数) <input type="submit" value="搜索" id="search">
      </form>
    </div>
  </div>
<div class="weee_con" style="padding: 0; background:url(/public/images/select_bg.jpg) no-repeat;">
    <!--展馆选择-->
    <div class="zw_select"  style=" background:url(/public/images/hall_bg5.png) no-repeat;height:760px;">
   <!--    <div class="shiyitu" style="float: left;width: 630px;z-index: 99999;position: relative;" onclick="$('#shiyitu').toggle('slow');">
        <input type="submit" value="查看展馆示意图" style="
            float: left;
            margin-top: 40px;
            width: 120px;
            height: 30px;
            background-color: #359704;
            border: solid 1px #037d00;
            border-radius: 6px;
            color:white;
            font-weight: bold;
        ">
        <img src="images/52shiyi.png" style="float: left;margin-top: 12px;display:none;" id="shiyitu">
      </div> -->
		<div class="zw_7253"></div>
    <div class="zw_7252"></div>
    <div class="zw_723r"></div>
    <div class="zw_7251"></div>
    <div class="zw_723s"></div>
    <div class="zw_7250"></div>
    <div class="zw_7a58"></div>
    <div class="zw_7a60"></div>
    <div class="zw_7265"></div>
    <div class="zw_723t"></div>
    <div class="zw_7266"></div>
    <div class="zw_7267"></div>
    <div class="zw_7a71"></div>

    <div class="zw_7a73"></div>
    <div class="zw_7269"></div>
    <div class="zw_7268"></div>
    <div class="zw_7a70"></div>
    <div class="zw_7a68"></div>
    <div class="zw_7270"></div>
    <div class="zw_7271"></div>
    <div class="zw_7a62"></div>
    <div class="zw_7a65"></div>
    <div class="zw_7279"></div>
    <div class="zw_723w"></div>
    <div class="zw_7277"></div>
    <div class="zw_7278"></div>
    <div class="zw_7b11"></div>
    <div class="zw_7b13"></div>
    <div class="zw_7b16"></div>
    <div class="zw_7276"></div>
    <div class="zw_7275"></div>
    <div class="zw_7b26"></div>
      <div class="zw_7b23"></div>
    <div class="zw_7b21"></div>   
    <div class="zw_7272"></div>
    <div class="zw_7273"></div>
    <div class="zw_7b28"></div>
    <div class="zw_7b33"></div>
    <div class="zw_7b30"></div>
    <div class="zw_7290"></div>
    <div class="zw_723z"></div>
    
    <div class="zw_7291"></div> 
    <div class="zw_723y"></div> 
    <div class="zw_7d12"></div> 
    <div class="zw_7d13"></div> 
    
    <div class="zw_7292"></div>
      <div class="zw_723x"></div>
    <div class="zw_7d06"></div>
    <div class="zw_7d07"></div>
    <div class="zw_7d02"></div>
    <div class="zw_7d03"></div>
    <div class="zw_7d01"></div>
    <div class="zw_7d05"></div> 
    
   
    <div class="zw_7b35"></div>
    <div class="zw_7b37"></div>
    </div>
    <!--展馆选结束择-->
    <div class="clear"></div>
  </div>

  </div>
</div>

<script type="text/javascript">
seajs.config({
  base: "/public/js/app/",
  alias: {
    "jquery": "jquery.min.js",

  },

});

seajs.use('jquery',function($){
  $(function(){
    var bid = <?php echo ($booth); ?>;
    if(bid.length == 0){
      $('.zw_select div').each(function(){
        $class = $(this).attr('class');
        $id = $class.split("_")[1];
         $(".zw_"+$id).css('background','url(/public/images/zw5/'+$id+'-1.png) no-repeat'); 
      });
      alert('没有足够的展位！！');
    }else{
      for(var i =0 ;i<bid.length ;i++){
        if(bid[i].status == 0 || bid[i].status == 2 ){   
            $(".zw_"+bid[i].booth_num).css('background','url(/public/images/zw5/'+bid[i].booth_num+'-1.png) no-repeat'); 
        }else{
            $(".zw_"+bid[i].booth_num).append('<a href="/user/booth/order/'+bid[i].url+'.html"></a>');
            //$(".zw_"+bid[i].booth_num).after('<span class="zw_'+bid[i].booth_num+'_h" >'+bid[i].booth_num+'展位</span>'); 
			 $(".zw_"+bid[i].booth_num).after('<span class="zw_'+bid[i].booth_num+'_h" >'+bid[i].area+'平米</span>');
        }
      }
    }
    
    
    var s_class='';
    $('.zw_select div').hover(function(){
        t_class = $(this).attr('class');
        s_class = "."+t_class+"_h";
        $(s_class).show();
        //var pos = parseInt($(s_class).css('left'));
        //$(s_class).animate( {left: pos-8},120 ).animate( {left: pos+8},120 )
    },function(){
         $(s_class).removeAttr("style");
         $(s_class).hide();
    });

    //area search
    $('form').submit(function(){
        if($('#e_area').val() == 0 || $('#e_area').val() == ""){
            alert('请输入面积区间');
            $('#e_area').val("");
            $('#e_area').focus();
            return false;
        }

        if( parseInt($('#s_area').val()) > parseInt($('#e_area').val()) ){
          alert('请输入正确的面积区间');
          return false;
        }
    });
  });
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