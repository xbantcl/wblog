<?php if (!defined('THINK_PATH')) exit(); if(is_array($link)): $i = 0; $__LIST__ = $link;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$l): $mod = ($i % 2 );++$i;?><li><a href="<?php echo ($l['url']); ?>"><?php echo ($l['name']); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>