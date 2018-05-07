<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title><?php echo get_config('SITE_NAME');?></title>
	<link type="text/css" href="/public/css/zw_css.css"  rel="stylesheet" />
	
<link rel="stylesheet" href="/public/css/help.css">

	<script src="/public/admin/js/jquery-1.11.1.min.js"></script>
</head>
<body>
<script type="text/javascript">
$(document).ready(function(){
	
	$("#panel").slideToggle("slow");

	t = setTimeout(function(){
		$("#panel").slideToggle("slow");
	},10000);
	
	$(".btn-slide").click(function(){
		clearTimeout(t);
		$("#panel").slideToggle("slow");
		$(this).toggleClass("active"); return false;
	}); 
	
});
</script>

<style type="text/css">
.ad { margin: 0 auto; padding: 0; width: 1200px;position:relative;z-index:999}
a:focus { outline: none; }
#panel {display: none; }
.slide { margin: 0; padding: 0; border-top: solid 4px #F27613;  }
.btn-slide { background: #F27613  no-repeat right -50px; text-align: center; width: 44px; height: 24px; padding: 10px 10px 0 0; margin: 0 auto -44px; display: block;float:right; font: bold 120%/100% Arial, Helvetica, sans-serif; color: #fff; text-decoration: none; }
.active { background-position: right 12px; }
#content{z-index:-99;position:relative;}
.sideGuide{ position:fixed;  _position:absolute;  z-index:100; left:20px; top:400px; width:150px; background:#fff;  _top:expression(eval(document.documentElement.scrollTop+150)) text-align:center; }
.sideGuide h3{ height:40px; line-height:40px; background:#439c0e; font-weight:bold; color:#fff;  text-align:center; }
.sideGuide ul{ padding:10px 0;  }
.sideGuide li{ height:32px; line-height:32px; position:relative; border-bottom:1px solid #ffffff; vertical-align:middle; text-align:center; }
.sideGuide li s{ display:none; position:absolute; top:0; left:-10px; width:10px; background:#555; height:32px;     }
.sideGuide li a{ display:block; color:#999;   }
.sideGuide li a:hover{ text-decoration:none; color:#f50;  }
.sideGuide li.on s{ display:block;  }
.sideGuide li.on a{ background:#f4f4f4; color:#333;  }
</style>
<!-- <div class="ad">
	<div class="slide" style="display: none;" id="panel">
		<a href="javascript:;" class="btn-slide active">关闭</a>
		<div id="content">
		  <img src="/public/images/2016heci.jpg" alt="" />
		</div>
		<div style="clear:both"></div>
	</div>
</div> -->
<div class="top_bg">


	<div class="top">
		<div class="top_left">欢迎访问中国国际电梯展览会展位预订平台！</div>
		<div class="top_right" >
		<?php $uid = cookie('uid') ? cookie('uid') : session('uid'); $url = ''; if( !$uid ){ $url = U('/user/login'); $curl = U('/user/login'); $adurl = U('/user/login'); }else{ $url = "http://www.elevator-expo.com/cn/download/服务手册.rar"; $curl = "http://www.elevator-expo.com/cn/download/大会相关服务表格.rar"; $adurl = "http://www.elevator-expo.com/cn/download/广告.pdf"; } ?>
			<a href="/user/index.html">会员中心</a>&nbsp;&nbsp;<a href="/public/images/关于2016中国国际电梯展览会展场施工的几点说明.pdf" target="_blank"><img src='/public/images/download1.png' width='15px' style='margin-bottom:-3px;margin-right:2px;'>关于2016中国国际电梯展览会展场施工的几点说明</a>&nbsp;<a href=<?php echo ($adurl); ?> target="_blank"><img src='/public/images/download1.png' width='15px' style='margin-bottom:-3px;margin-right:2px;'>广告方案</a>&nbsp;<a href=<?php echo ($url); ?>><img src='/public/images/download1.png' width='15px' style='margin-bottom:-3px;margin-right:2px;'>参展商服务手册</a>&nbsp;<a href=<?php echo ($curl); ?>><img src='/public/images/download1.png' width='15px' style='margin-bottom:-3px;margin-right:2px;'>大会相关服务表格</a>&nbsp;<a href="./展位预定平台使用手册.pdf"><img src="/public/images/download2.png" width="15px" style="margin-bottom:-3px;margin-right:2px;">展位预定平台使用手册</a>&nbsp;<a href="./参展协议.pdf"><img src="/public/images/download2.png" width="15px" style="margin-bottom:-3px;margin-right:2px;">参展协议</a>
			
			<div class="clear"></div>

			

		</div>
					<div style="float:right;margin-top:6px;">
				<!-- WPA Button Begin -->
				<script charset="utf-8" type="text/javascript" src="http://wpa.b.qq.com/cgi/wpa.php?key=XzkzODAyMTc1N18zNTI4MjdfODAwMDM4ODg4OF8"></script>
	<!-- WPA Button End -->
			</div>
		<div class="clear"></div>
	</div>
</div>
<div class="clear"></div>
<div class="head">
	<div class="logo">
		<img src="/public/images/logo.jpg" />
	</div>
	<div class="head_nav">
		<a href="http://www.elevator-expo.com/cn/">中国国际电梯展览会官网</a>
		<a href="<?php echo U('/');?>">网站首页</a>
		<a href="<?php echo U('/user/booth/index');?>">展位预订</a>
		<?php echo check_user_login();?>
		
	</div>
	<div class="clear"></div>
</div>

<div class="main" style="padding-top:8px; min-height:450px;background-color:#fff;">
<div class="list_main">
<!--内容信息-->
<section class="art_main  w clearfix">
<aside class="art_nav art_box clearfix Left">
<h2 class="art_title"><span class="aside_txt">帮助中心</span></h2>
<section id="JS_silde_menu">
		<dl>
			<dt><span class="dt_ico art_ico1"></span><span class="dt_txt">帮助中心</span></dt>
			<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><dd><a href="/help/<?php echo ($v['id']); ?>.html" title="<?php echo ($v['title']); ?>"><?php echo ($v['title']); ?></a></dd><?php endforeach; endif; else: echo "" ;endif; ?>
		</dl>
</section>
</aside>
<section class="art_content clearfix Right">
  <h2 class="art_title">|&ensp; <a href="/">首页</a> <code>&gt;</code> 帮助中心</h2>
  <article>
    <header class="art_header">
	<span class="header_box">
	<span class="header_txt">帮助中心</span>
	<span class="header_space">
	</span>
 </span> <span style="font-size:16px;padding-left:15px;"><?php echo ($info['title']); ?></span>
 </header>
    <article>
	<div class="list" style="border-width: 0px 0px 0px; margin: 0px; outline: 0px; padding: 10px 20px; vertical-align: baseline; border-bottom-style: dashed; font-family: Arial, Helvetica, sans-serif, 宋体; ">
		<?php echo (htmlspecialchars_decode($info['content'])); ?>
	</div>         
	</article>
  </article>
</section>
</section>
<!--endfooter-->
</div>
<div class="clear"></div>
</div>
</div>
</div>


	<div class="foot">
		<div class="foot_center">
			<p>联系人：马振涛    地址：河北省廊坊市开发区祥云道98号   邮编：065001</p>
			<p>Copyright 2007-2016 All Right Reserved    版权所有·中国国际电梯展览会组委会</p>
		</div>
	</div>
</body>
</html>