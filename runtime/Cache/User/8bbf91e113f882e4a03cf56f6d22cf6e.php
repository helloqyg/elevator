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
	
<link type="text/css" href="/public/css/zw_select.css"  rel="stylesheet" />
<!-- notic小提示平米数 -->
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
    <!--<div id="weee_area">
      <form method="GET" action="">
      <label>展位搜索：</label><input type="text" id="s_area" name="s_area" value="<?php echo ($s_area); ?>"> - <input type="text" id="e_area" name="e_area" value="<?php echo ($e_area); ?>"> (平米数) <input type="submit" value="搜索" id="search">
      </form>
    </div>-->
  </div>
<div class="weee_con" style="padding: 0; ">
    <!--展馆选择-->
    <div  class="zw_select"  style=" background:url(/public/home/images/quyuE.jpg) no-repeat;height:834px;">
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
  <style type="text/css">
  .zw_select  a:hover{color:#ffffff}
  .zw_select  a{color:#000000}
  </style>


<div class="zw_8709"></div>
<div class="zw_8E08"></div>
<div class="zw_8E07"></div>
<div class="zw_8E06"></div>
<div class="zw_8E05"></div>
<div class="zw_8E03"></div>
<div class="zw_8E02"></div>
<div class="zw_8E01"></div>
<div class="zw_8710"></div>
<div class="zw_8708"></div>
<div class="zw_8693"></div>
<div class="zw_8677"></div>
<div class="zw_8662"></div>
<div class="zw_8661"></div>
<div class="zw_8637"></div>
<div class="zw_8636"></div>
<div class="zw_8621"></div>
<div class="zw_8692"></div>
<div class="zw_8678"></div>

<div class="zw_8631"></div>
<div class="zw_8610"></div>
<div class="zw_8616"></div>
<div class="zw_8626"></div>
<div class="zw_8617"></div>
<div class="zw_8620"></div>
<div class="zw_8606"></div>
<div class="zw_8605"></div>
<div class="zw_8601"></div>
<div class="zw_8711"></div>
<div class="zw_8707"></div>
<div class="zw_8695"></div>
<div class="zw_8691"></div>
<div class="zw_8679"></div>
<div class="zw_8676"></div>
<div class="zw_8663"></div>
<div class="zw_8660"></div>
<div class="zw_8638"></div>
<div class="zw_8635"></div>
<div class="zw_8622"></div>
<div class="zw_8619"></div>
<div class="zw_8607"></div>
<div class="zw_8603"></div>
<div class="zw_8712"></div>
<div class="zw_8706"></div>
<div class="zw_8696"></div>
<div class="zw_8690"></div>
<div class="zw_8680"></div>
<div class="zw_8675"></div>
<div class="zw_8665"></div>
<div class="zw_8659"></div>
<div class="zw_8639"></div>
<div class="zw_8633"></div>
<div class="zw_8623"></div>
<div class="zw_8618"></div>
<div class="zw_8608"></div>
<div class="zw_8602"></div>
<div class="zw_8713"></div>
<div class="zw_8705"></div>
<div class="zw_8697"></div>
<div class="zw_8689"></div>
<div class="zw_8681"></div>
<div class="zw_8673"></div>
<div class="zw_8666"></div>
<div class="zw_8658"></div>
<div class="zw_8650"></div>
<div class="zw_8632"></div>
<div class="zw_8625"></div>
<div class="zw_9617"></div>
<div class="zw_8609"></div>
<div class="zw_8E09"></div>
<div class="zw_8715"></div>
<div class="zw_8703"></div>
<div class="zw_8698"></div>
<div class="zw_8688"></div>
<div class="zw_8682"></div>
<div class="zw_8672"></div>
<div class="zw_8667"></div>
<div class="zw_8657"></div>
<div class="zw_8651"></div>
<div class="zw_8731"></div>
<div class="zw_8726"></div>
<div class="zw_8716"></div>
<div class="zw_8710"></div>
<div class="zw_8716"></div>
<div class="zw_8702"></div>
<div class="zw_8699"></div>
<div class="zw_8687"></div>
<div class="zw_8683"></div>
<div class="zw_8671"></div>
<div class="zw_8668"></div>
<div class="zw_8656"></div>
<div class="zw_8653"></div>
<div class="zw_8652"></div>
<div class="zw_8630"></div>
<div class="zw_8627"></div>
<div class="zw_8615"></div>
<div class="zw_8611"></div>
<div class="zw_8E10"></div>
<div class="zw_8717"></div>
<div class="zw_8701"></div>
<div class="zw_8700"></div>
<div class="zw_8686"></div>
<div class="zw_8685"></div>
<div class="zw_8670"></div>
<div class="zw_8669"></div>
<div class="zw_8655"></div>
<div class="zw_8629"></div>
<div class="zw_8628"></div>
<div class="zw_8613"></div>
<div class="zw_8612"></div>
<div class="zw_8718"></div>
<div class="zw_8719"></div>
<div class="zw_8720"></div>
<div class="zw_8721"></div>
<div class="zw_8722"></div>
<div class="zw_8723"></div>
<div class="zw_8725"></div>
<div class="zw_8726"></div>
<div class="zw_8727"></div>
<div class="zw_8728"></div>
<div class="zw_8729"></div>
<div class="zw_8730"></div>



    </div>
    <!--展馆选结束择-->
    <div class="clear"></div>
  </div>
<style type="text/css">
</style>
  </div>
</div>

<script type="text/javascript">
seajs.config({
  base: "/public/js/app/",
  alias: {
    "jquery": "jquery.min.js",

  },

});

// <script type="text/javascript">
seajs.use('jquery',function($){

  $(function(){
    var bid = <?php echo ($booth); ?>;
    if(bid.length == 0){
      $('.zw_select div').each(function(){
        $class = $(this).attr('class');
        $id = $class.split("_")[1];
        //已售出状态
         $(".zw_"+$id).css('background','url(/public/home/images/status0.jpg)'); 
         $(".zw_"+$id).css('background-size','100% 100%')
      });
      alert('没有足够的展位！！');
    }else{
         for(var i =0 ;i<bid.length ;i++){
          var width = bid[i].width * 12;
          var height = bid[i].height * 12;
        // $class = $(this).attr('class');
        // $id = $class.split("_")[1];
        if(bid[i].status == 0 || bid[i].status == 2 ){   
          //已售出改变为灰色
           $(".zw_"+bid[i].booth_num).css({'background':'url(/public/home/images/status0.jpg)',
                                            'width':width+'px',
                                            'height':height+'px',
                                            'position':'absolute',
                                            'font-size':'12px'
                                      }); 
           $(".zw_"+bid[i].booth_num).css('background-size','100% 100%')
           $(".zw_"+bid[i].booth_num).css('line-height','40px')
           $(".zw_"+bid[i].booth_num).html(bid[i].booth_num)
        }else if(bid[i].status == 1 ){
          //正常售卖改变为绿色并增加hover事件
          var a = bid[i].area;
          var a1 = bid[i].booth_num;
          console.log(bid[i]);
           $(".zw_"+bid[i].booth_num).css({'background':'url(/public/home/images/status1.jpg)',
                                            'line-height':'40px',
                                            'width':width+'px',
                                            'height':height+'px',
                                            'position':'absolute',
                                            'font-size':'12px'
                                        })
            // $(".zw_"+bid[i].booth_num).html(bid[i].booth_num)
           $(".zw_"+bid[i].booth_num).css('background-size','100% 100%')
           //给每个展位追加一个a链接到付款界面
            $(".zw_"+bid[i].booth_num).append('<a href="/user/booth/order/'+bid[i].url+'.html">'+bid[i].booth_num+'</a>');
            $(".zw_"+bid[i].booth_num).append('<div class="notic_hover">'+bid[i].area+'(平米)</div> ')
            //样式必须写在js里,不可写在css文件里.
            $('.notic_hover').css({'background':'url(/public/home/images/hover.png) no-repeat',
                                    'top'     : '-48px',
                                    'left'    : '-72px',
                                    'z-index' : '300',
                                    'display' : 'none',
                                    'line-height': '20px'
                                  })
            //给摊位改变鼠标放上状态增加提示框,并从数据库当前展位的面积信息予以提示
            // $('.zw_'+bid[i].booth_num).after('<div class="notic_hover">'+bid[i].area+'</div> ')
            $(".zw_"+bid[i].booth_num).hover(function(){

                $(this).css('background','url(/public/home/images/status2.jpg)')
                $(this).css('background-size','100% 100%')
                $(this).find('.notic_hover').show();
                //ajax通过booth_num得到展位的面积
                /*$(this).after('<div class="notic_hover"></div> ')
                $.ajax                                                                             ({
                   type: "get",
                   url: "<?php echo U('booth/get_area');?>",
                   data: "booth_num="+$(this).attr('class'),

                   success: function(msg){
                   var msg = JSON.parse(msg)
                   var attr = 'zw_'+msg.booth_num;
                   console.log(msg.area) ;

                    $('.notic_hover').html(msg.area+'(平米)')
                   },
                   complete: function(xhr, textStatus) { } 

                })
                //获得当前绿色div的决定定位坐标给橘黄色提示信息绝对定位
                var x = $(this).position().top-50;
                var y = $(this).position().left-66;
                $('.notic_hover').css('top',' '+x+'px')
                $('.notic_hover').css('left',' '+y+'px')
                //上方的橘黄色div的png背景图片
                $('.notic_hover').css('background','url(/public/home/images/hover.png) no-repeat')
                $('.notic_hover').css('z-index','300')*/
          },function(){
            //移除放上状态
            $(this).css('background','url(/public/home/images/status1.jpg)')
            $(this).css('background-size','100% 100%')
             $('.notic_hover').hide();
          })


        }

      };








    }
    

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


  //展位推荐功能
  $(function(){
    var url = location.href;
    indexof = url.indexOf('/flag/') +6;
 var sub = url.substr(indexof,4)
  if (url.indexOf('/flag/') >=1) {
  
    $top = $('.zw_'+sub).position().top - 100;
    $left = $('.zw_'+sub).position().left + 20 ;
    console.log($top,$left);
    $('.zw_'+sub).after('<div class="jiantou"> <img alt="箭头" id="guanbiimg" title="点击关闭" src="/public/home/images/jiantou.png" width="200" alt="Planets" usemap="#planetmap"></div>')
     $('.jiantou').css({             'top'    : $top+'px',
                                    'left'    : $left+'px',
                                    'z-index' : '390',
                                    'position':'absolute'
                                  })
     $('#guanbiimg').click(function(){
      $('.jiantou').hide();
     })

     }
  })
                                  



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