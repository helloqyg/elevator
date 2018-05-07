<?php if (!defined('THINK_PATH')) exit();?>     <?php if(is_array($goods)): $i = 0; $__LIST__ = $goods;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i; if($v["get_ad_bot_count"] != 0 ): ?><div class="ad_booth">
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