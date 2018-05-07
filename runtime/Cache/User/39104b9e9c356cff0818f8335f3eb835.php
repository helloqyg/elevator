<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>2018中国国际电梯展览会官方预订平台</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="/public/home/css/css.css">
	<script type="text/javascript" src="/public/home/js/jquery.js"></script>
	<link type="text/css" href="/public/css/zw_css.css"  rel="stylesheet" />

	
	<link rel="stylesheet" href="/public/js/uploadify/uploadify.css">
	<link rel="stylesheet" href="/public/css/style.css">
	<link rel="stylesheet" type="text/css" href="/public/css/skin/layer.css">
	<script src="http://libs.baidu.com/jquery/1.9.1/jquery.min.js"></script>
	<script src="/public/js/layer.js"></script>
	<style>
	.xing{width: auto;}
	.upload-pre-item{float:left;width:318px;height:auto;}
	</style>

</head>
<body>
<div class="top_bg">
<!-- 微信二维码浮动层 -->
<div id="macro-wx-box" class="macro-wx-box dsp-hide" style="position:fixed; top: 115.5px; right: 565px; z-index: 999; display:none ;"> <div class="top"> <span class="title">关注官方微信</span> 

<span id="btn-close" onclick="wechat_float_close()" class="btn-close" ">X</span> 

</div> <div class="bottom"> <p class="margin-l"> <i class="icon"><img width="150" src="/public/home/images/subsribe.jpg" alt=""></i> <span class="col-lan dsp-b">订阅号：电梯展</span> </p> <p class=""> <i class="icon"><img width="150" src="/public/home/images/service.jpg" alt=""></i> <span class="col-lan dsp-b">服务号：中国国际电梯展览会</span></p> </div> </div>
<!-- 微信二维码浮动层结束 -->

	<div class="top">
		<div class="top_left">欢迎光临2018中国国际电梯展览会官方预订平台！</div>
		<div class="top_right fr">
					<div class="fl">客服热线: <b>0316-6078901</b></div>
					<div class="top_img fl">  <a href="" class="click-qq"><img width="24" src="/public/home/images/qq.jpg"></a>&nbsp;&nbsp;<a href="javascript:void(0)" onclick="wechat_float()"  class="click-wechat"><img  width="24"  src="/public/home/images/wechat.jpg"></a> </div>
					<div class="login fl">&nbsp;&nbsp;
						<?php echo check_user_login();?>
					</div>
				

			

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


<form method="post" action="" id="form" class="regform">
<div class="main" style="padding:20px 0 50px 0;">
  <div class="reg_head"> 企业汇款凭证 </div>
  <div class="reg_pro1">
    <div class="item">
      <div class="label">企业名称：</div>
      <div class="input-box">
        <input onpaste="return false" type="text" placeholder="" id="company" name="company" value="<?php echo ($company_name); ?>" class="ipt" readonly >
      </div>
      <div class="xing">*</div>
      <div class="clear"></div>
    </div>
    <div class="item">
      <div class="label">付款总额：</div>
      <div class="input-box">
        <input  type="text"  id="price" name="price" value="<?php echo ($price); ?>" class="ipt" readonly >
      </div>
      <div class="clear"></div>
    </div>
    <div class="item">
      <div class="label">付款凭证：</div>
      <div style="border:none;" class="input-box">
			<div id="queue"></div>
			<input id="file_upload" name="fukuan" type="file" class="ipt" multiple="true">
			<div class="upload-pre-item" style="display:none;"></div>
			<input type="hidden" id="scan_part" name="fukuan" value="" >
      </div>
      <div class="xing">* 请保证上传文件在3M以内，<a href=""  >	点击查看压缩图片方法</a>	</div>
      <div class="clear"></div>
    </div>
      <div class="clear"></div>
    </div>
    <div class="clear"></div>
    <div class="reg_btn1" style="padding-right:190px;">
    	<input type="hidden" name="type" value="<?php echo ($type); ?>">
		<input type="hidden" name="pid" value="<?php echo ($pid); ?>">
      <input name="login_step1" id="login_button" type="button" value="提&nbsp;&nbsp;交" class="reg_back">
    </div>
  </div>
  </form>
</div>
<script src="/public/js/uploadify/jquery.uploadify.min.js"></script>
<script type="text/javascript">
$(function(){
	window.layer = layer;
	$("#login_button").click(function(){
		if($('#scan_part').val() == ""){
			layer.msg('图片没有上传成功', {icon: 5});
			return false;
		}else{
			var self = $("form");
			$.ajax({ 
				url: self.attr("action"), 
				type : "POST",  
				dataType : "json",
				data:self.serialize(),
				beforeSend:function(){
					//layer.msg('正在查询请稍等', {icon: 16});
					layer.load();
				},
				success: function(data){
					setTimeout(function(){
						layer.closeAll('loading');
					}, 1);
					if( data.status == 0 ){
						layer.msg(data.info,{icon: 5});
					}else{
						window.location.href="/user/apply/checks/pid/<?php echo ($pid); ?>.html";
					}
				}
			});
		}
		return false;
	});
		
		/*
	$(".regform").Validform({
		tiptype:function(msg,o,cssctl){
			var objtip = o.obj.parent().siblings().eq(1);
			cssctl(objtip,o.type);
			objtip.text(msg);
		},
		label:".label",
		showAllError:true,
		ajaxPost:true,
		callback:function(data){
			if(data.status == 1 ){
				
			}else{
				alert(data.msg);
			}
		}

	});
	
	*/
	// image upload
	$('#file_upload').uploadify({
		"width"       : 318,
		"height"	  : 36 ,
		"fileObjName" : "upfile",
		"swf"         : "/public/js/uploadify/uploadify.swf",
		"uploader"    : "<?php echo U('Reg/upload');?>",
		"buttonText"  : "上传扫描件",
		"fileTypeExts": "*.jpeg;*.gif; *.jpg; *.png", 
		"onUploadSuccess" : uploadPicturecover,
	});

	// upload success callback function
	function uploadPicturecover(file,data){
		var obj = eval( "(" + data + ")" );
		if(obj.state == 'SUCCESS'){
			$(".upload-pre-item").css('display','block');
			var html = '<img src="/upload/' + obj.url + '" width="318px;" /></br>';
			$(".upload-pre-item").append(html); 
			$("#scan_part").val("/upload/"+obj.url);
		}
	}

});
</script>

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
			<div class="bot_qq fl">
			<a href="">
		      <div class="con_img_we"> <img src="/public/home/images/bottom_qq.jpg"> </div>
		      <div class="con_detail_we">在线客服</div>
		     </a>
		    </div>
		    <a href="">
		    <div class="bot_sina fl">
		      <div class="con_img_we"> <img  width="44" src="/public/home/images/bottom_wechat.png"> </div>
		      <div class="con_detail_we">微信</div>
		      </a>
		    </div>


		    <div class="con_wechat">
		      <div class="con_img_we"> <img src="/public/home/images/service.jpg"> </div>
		      <div class="con_detail_we">电梯展服务号</div>
		    </div>
		    <div class="con_wechat">
		      <div class="con_img_we"> <img src="/public/home/images/subsribe.jpg"> </div>
		      <div class="con_detail_we">电梯展订阅号</div>
		    </div>

		</div>
		</div>
		<div class="foot_bot">
			Copyright 2007-2016 All Right Reserved 版权所有·中国国际电梯展览会组委会
		</div>
	</div>
	<!-- foot底部结束 -->

</body>
</html>

	<script type="text/javascript" src="/public/home/js/js.js"></script>