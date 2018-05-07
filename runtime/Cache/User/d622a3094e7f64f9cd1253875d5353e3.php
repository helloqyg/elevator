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
	
	<link rel="stylesheet" href="/public/js/uploadify/uploadify.css">
  <link rel="stylesheet" href="/public/css/style.css">
	<style>
  .xing{width: auto;}
	.upload-pre-item{float:left;width:318px;height:auto;}
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


<form method="post" action="" id="form" class="regform">
<div class="main" style="padding:20px 0 50px 0;">
  <div class="reg_pro">
    <div class="reg_company"><img src="/public/images/01.png" /><span>填写企业基本信息</span></div>
    <div class="reg_ge"><img src="/public/images/reg_pro1.jpg" /></div>
    <div class="reg_user"><img src="/public/images/02.png" /><span>设置账户信息</span></div>
    <div class="reg_ge"><img src="/public/images/reg_pro2.jpg" /></div>
    <div class="reg_suc"><img src="/public/images/03.png" /><span>注册完成</span></div>
    <div class="clear"></div>
  </div>
  <div class="reg_head"> 企业基本信息 </div>
  <div class="reg_pro1">
    <div class="item">
      <div class="label">企业名称：</div>
      <div class="input-box">
        <input onpaste="return false" type="text" placeholder="" id="company_name" name="company_name" class="ipt" datatype="s" nullmsg="企业名称不能为空">
      </div>
      <div class="xing">*</div>
      <div class="clear"></div>
    </div>
	<div class="item">
      <div class="label">企业英文名称：</div>
      <div class="input-box">
        <input onpaste="return false" type="text" placeholder="" id="english" name="english" class="ipt" datatype="s" nullmsg="企业英文名称不能为空">
      </div>
      <div class="xing">*</div>
      <div class="clear"></div>
    </div>
    <div class="item">
      <div class="label">营业执照注册号：</div>
      <div class="input-box">
        <input onpaste="return false" type="text" placeholder="" id="register_num" name="register_num" class="ipt" datatype="s" nullmsg="营业执照注册号不能为空">
      </div>
      <div class="xing">*</div>
      <div class="clear"></div>
    </div>
    <div class="item">
      <div class="label">营业执照副本扫描件：</div>
      <div style="border:none;" class="input-box">
			<div id="queue"></div>
			<input id="file_upload" name="scan_part1" type="file" class="ipt" multiple="true">
			<div class="upload-pre-item" style="display:none;"></div>
			<input type="hidden" id="scan_part" name="scan_part" value="" >
      </div>
      <div class="xing">*&nbsp;&nbsp;上传图片大小请控制在3M以内</div>
      <div class="clear"></div>
    </div>
    <div class="item">
      <div class="label">经营地址：</div>
      <div  class="input-box" >
        <input onpaste="return false" type="text" placeholder="" id="residence" name="residence" class="ipt" datatype="s" nullmsg="经营地址不能为空" >
      </div>
      <div class="xing">*</div>
      <div class="clear"></div>
    </div>
    <div class="item">
      <div class="label">通讯地址：</div>
      <div class="input-box">
        <input onpaste="return false" type="text" placeholder="" id="address" name="address" class="ipt" datatype="s" nullmsg="通讯地址不能为空">
      </div>
      <div class="xing">*</div>
      <div class="clear"></div>
    </div>
    <div class="item">
      <div class="label">经营范围：</div>
      <div class="input-box">
        <textarea onpaste="return false" placeholder="" id="scope" name="scope" cols="43" rows="6" class="tarea"  datatype="*" nullmsg="经营范围不能为空"></textarea>
      </div>
      <div class="xing">*</div>
      <div class="clear"></div>
    </div>
    <div class="item">
      <div class="label">企业参展类型：</div>
      <div class="input-box">
        <select id="type" name="type" onchange="" class="sipt" datatype="*" nullmsg="请选择企业参展类型">
          <option value>请选择</option>
          <!--<option value="2">整机</option>-->
          <option value="2">部件</option>
		  <!--<option value="2">其它</option>-->
        </select>
      </div>
      <div class="xing">*</div>
      <div class="clear"></div>
    </div>
	<div class="item">
      <div class="label">参展面积：</div>
      <div class="input-box">
        <input  type="text" placeholder="" id="area" name="area" class="ipt" datatype="*" nullmsg="请填写预计参展面积">
      </div>
      <div class="xing">*</div>
      <div class="error_msg"></div>
      <div class="clear"></div>
    </div>
    <div class="reg_lx_tit"><span>联系方式：</span><b></b><div class="error_lx"></div></div>
	      <div class="clear"></div>
    <div class="reg_lx1">
      <div class="reg_lx1_tit">公司负责人</div>
      <div class="item" style="float:left; width:340px;">
        <div class="label" style="width:120px;">姓名：</div>
        <div class="input-box">
          <input onpaste="return false" type="text" placeholder="" id="c_name" name="c_name" class="lx_input">
        </div>
        <div class="clear"></div>
      </div>
      <div class="item" style="float:left; width:340px;">
        <div class="label" style="width:120px;">职务：</div>
        <div class="input-box">
          <input onpaste="return false" type="text" placeholder="" id="c_duties" name="c_duties" class="lx_input">
        </div>
        <div class="clear"></div>
      </div>
      <div class="item" style="float:left; width:340px;">
        <div class="label" style="width:120px;">固定电话：</div>
        <div class="input-box">
          <input onpaste="return false" type="text" placeholder="区号" id="c_area_code" name="c_area_code" class="lx_input"  style="width: 40px; border-right: 1px solid #d2d2d2"> 


          <input onpaste="return false" type="text" placeholder="电话号" id="c_tel" name="c_tel" class="lx_input" style=":1px solid red; width: 97px">
        </div>
        <div class="clear"></div>
      </div>
      <div class="item" style="float:left; width:340px;">
        <div class="label" style="width:120px;">手机号码：</div>
        <div class="input-box">
          <input onpaste="return false" type="text" placeholder="" id="c_phone" name="c_phone" class="lx_input">
        </div>
        <div class="clear"></div>
      </div>
      <div class="item" style="float:left; width:340px;">
        <div class="label" style="width:120px;">邮箱：</div>
        <div class="input-box">
          <input onpaste="return false" type="text" placeholder="" id="c_email" name="c_email" class="lx_input">
        </div>
        <div class="clear"></div>
      </div>
      <div class="item" style="float:left; width:340px;">
        <div class="label" style="width:120px;">传真：</div>
        <div class="input-box">
          <input onpaste="return false" type="text" placeholder="" id="c_fax" name="c_fax" class="lx_input">
        </div>
        <div class="clear"></div>
      </div>
      <div class="clear"></div>
    </div>
    <div class="reg_lx1">
      <div class="reg_lx1_tit">展位联络人</div>
      <div class="item" style="float:left; width:340px;">
        <div class="label" style="width:120px;">姓名：</div>
        <div class="input-box">
          <input onpaste="return false" type="text" placeholder="" id="f_name" name="f_name" class="lx_input">
        </div>
        <div class="clear"></div>
      </div>
      <div class="item" style="float:left; width:340px;">
        <div class="label" style="width:120px;">职务：</div>
        <div class="input-box">
          <input onpaste="return false" type="text" placeholder="" id="f_duties" name="f_duties" class="lx_input">
        </div>
        <div class="clear"></div>
      </div>
      <div class="item" style="float:left; width:340px;">
        <div class="label" style="width:120px;">固定电话：</div>
        <div class="input-box">
          <input onpaste="return false" type="text" placeholder="区号" id="f_area_code" name="f_area_code" class="lx_input"  style="width: 40px; border-right: 1px solid #d2d2d2">
          <input onpaste="return false" type="text" placeholder="电话号" id="f_tel" name="f_tel" class="lx_input" style=" width: 97px">
        </div>
        <div class="clear"></div>
      </div>
      <div class="item" style="float:left; width:340px;">
        <div class="label" style="width:120px;">手机号码：</div>
        <div class="input-box">
          <input onpaste="return false" type="text" placeholder="" id="f_phone" name="f_phone" class="lx_input">
        </div>
        <div class="clear"></div>
      </div>
      <div class="item" style="float:left; width:340px;">
        <div class="label" style="width:120px;">邮箱：</div>
        <div class="input-box">
          <input onpaste="return false" type="text" placeholder="" id="f_email" name="f_email" class="lx_input">
        </div>
        <div class="clear"></div>
      </div>
      <div class="item" style="float:left; width:340px;">
        <div class="label" style="width:120px;">传真：</div>
        <div class="input-box">
          <input onpaste="return false" type="text" placeholder="" id="f_fax" name="f_fax" class="lx_input">
        </div>
        <div class="clear"></div>
      </div>
      <div class="clear"></div>
    </div>
    <div class="clear"></div>
    <div class="reg_btn1">
      <input name="login_step1" id="login_button" type="submit" value="返&nbsp;&nbsp;回" class="reg_back">
      <input name="login_step1" id="login_button" type="submit" value="下一步" class="reg_next">
    </div>
  </div>
  </form>
</div>

<script type="text/javascript">
seajs.config({
  base: "/public/js/app/",
  alias: {
    "jquery": "jquery.min.js",

  },

});

seajs.use("register");

</script>

<script src="/public/admin/js/jquery-1.11.1.min.js"></script>
<script src="/public/js/uploadify/jquery.uploadify.min.js"></script>
<script type="text/javascript">
$(function(){
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