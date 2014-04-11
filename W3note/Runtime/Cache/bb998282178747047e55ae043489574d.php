<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php if($title == 'index'): echo (C("sitename")); elseif($title != ''): echo ($title); else: echo ($vo['title']); endif; ?></title>
<?php if($title == 'index'): ?><meta name="keywords" content="<?php echo (C("metakeys")); ?>" /><?php endif; ?>
<?php if($title == 'index'): ?><meta name="description" content="<?php echo (C("metadesc")); ?>"/>
<?php else: ?>
<meta name="description" content="<?php echo ($vo["description"]); ?>"/><?php endif; ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Language" content="zh-CN" />
<link href="<?php echo (C("cssurl")); ?>style.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<div id="header"><img src="<?php echo (C("rooturl")); ?>Public/Images/logo.gif" title="wbLOG" alt="wblog" width="189" height="65" border="0"/>
  <ul>   
     <?php echo W('Nav');?>	
  </ul>
</div>
<div class="container">
<div class="container"><!--container-begin -->
  <div class="pagebody">
    <!--pagebody-begin -->
    <div class="leftpage">
      <!--leftpage-begin -->
      <div class="ance"> <!-- anoun-begin -->      
        <?php if($ance["url"] != ''): ?><a title="<?php echo ($ance['title']); ?>" href="<?php echo ($ance['url']); ?>"><?php echo ($ance['title']); ?></a> 
        <?php else: ?>
         <?php echo ($ance['title']); endif; ?>      
        </div>
      <!-- anoun-end -->
	  <?php if(is_array($info)): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$info): $mod = ($i % 2 );++$i;?><div class="info">
        <!-- info-begin -->
        <div class="postinfo">
          <div class="date">
            <!-- date-begin -->
            <div class="t"><?php echo (date("m",$info['inputtime'])); ?>月</div>
            <div class="d"><strong><?php echo (date("d",$info['inputtime'])); ?></strong></div>
          </div>
          <!-- date-end -->
          <div class="title"><strong><a title="<?php echo ($info["title"]); ?>" href="<?php echo U('/blog/'.$info['id']);?>"><?php echo ($info['title']); ?></a></strong></div>
		  <div class="tinfo">
          <div class="author">作者:w3note</div>
          <div class="cat">分类:<a title="<?php echo ($info['colTitle']); ?>" href="<?php echo U('/cat/'.$info['catid']);?>"><?php echo ($info['colTitle']); ?></a></div>
          <div class="brownum">浏览<?php echo ($info['hits']); ?></div>
          <div class="comnum"><a href="#"><?php echo (count($info['Comment'])); ?>人评论</a></div>
		  </div><!--tinfo end-->
          <div class="line"></div>
        </div>
        <!-- postinfo-end -->
        <div class="post"><?php echo ($info['description']); ?>...</div>
        <div class="tag">标签:<a href="<?php echo (C("rooturl")); ?>blog/tag/name/<?php echo (urlencode($info['keywords'])); ?>"><?php echo (blogtags($info['keywords'])); ?></a></div>
        <div class"comnum">评论人数<?php echo (count($info["Comment"])); ?><a href="<?php echo U('/blog/'.$info['id']);?>#comment">【我来说两句】</a></div>
      </div>
      <!-- info-end --><?php endforeach; endif; else: echo "" ;endif; ?>
      <div class="pages"><div class="page"><?php echo ($page); ?></div></div>
    </div>
    <!--leftpage-end -->
    <div class="rightpage">
      <div class="search">
        
        <form method="get" action="http://www.google.com/search" target="_blank">
        <input type="text" name="q" size="26" />
        <input type="submit" value="搜索" name="btnG" id="btnG" />
        <input type="hidden" name="ie" value="UTF-8" />
        <input type="hidden" name="oe" value="UTF-8" />
        <input type="hidden" name="hl" value="zh-CN" />
        <input type="hidden" name="domains" value="w3note.com" />
        <input type="hidden" name="sitesearch" value="w3note.com" />
        </form>


       </div>
	   <div class="l_tit">微博分类</div>
      <div class="catlist">
        <ul>
		<?php if(is_array($Catlist)): $i = 0; $__LIST__ = $Catlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cat): $mod = ($i % 2 );++$i;?><li><a title="<?php echo ($cat['colTitle']); ?>" href="<?php echo U('/cat/'.$cat['colId']);?>"><?php echo ($cat['colTitle']); ?>「<?php echo ($cat['total']); ?>」</a></li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
      </div>
      <div class="l_tit">主博客最新文章</div>
      <div class="month">
        <ul>
        <?php if(is_array($newslist)): $i = 0; $__LIST__ = $newslist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$news): $mod = ($i % 2 );++$i;?><li>  <a title="<?php echo ($news['title']); ?>" href="<?php echo U('/read/'.$news['id']);?>"><?php echo (msubstr($news['title'],0,17,'utf-8')); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
      </div>
      <div class="l_tit">随机推荐</div>
      <div class="rand">
        <ul>
		<?php if(is_array($randlist)): $i = 0; $__LIST__ = $randlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$rand): $mod = ($i % 2 );++$i;?><li>  <a title="<?php echo ($rand['title']); ?>" href="<?php echo U('/blog/'.$rand['id']);?>"><?php echo (msubstr($rand['title'],0,17,'utf-8')); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
      </div>
	  <div class="l_tit">分类标签【<a title="更多分类标签" href="<?php echo U('/blog','tag=name');?>">更多</a>】</div>
      <div class="tags">
        <ul>
         <?php if(is_array($tags)): $i = 0; $__LIST__ = $tags;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="<?php echo (C("rooturl")); ?>blog/tag/name/<?php echo (urlencode($vo['name'])); ?>"><span style="font-size:{16|getTitleSize};color:<?php echo (rand_color($vo['id'])); ?>">  <?php echo ($vo['name']); ?>[<?php echo ($vo['count']); ?>]</span></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
      </div>
    </div><!--rightpage-end -->
  </div> <!--pagebody-end -->
  <!-- <div class="clear"></div>-->
</div><!--container-end -->
 <div id="footer">
<li style="width: 900px;height:30px;"><h4 style="float: left;margin:0px 10px 0px 10px;"><?php echo (C("icp")); ?></h4><h4 style="float: right;margin:0px 10px 0px 10px;"><a href="<?php echo (C("rooturl")); ?>page/about">【关于我们】</a></h4></li>
<li style="width: 900px;"><h4 style="float: right;margin:0px 10px 0px 10px;"></h4></li>
<h3 style="margin-left:10px;">Designed By w3note.com Powered By WBlog3.1.2_2 <script src="http://s84.cnzz.com/stat.php?id=4639431&web_id=4639431&show=pic" language="JavaScript"></script>
</h3>
</div>
<div id="bootom">&nbsp;</div>
  </body>
</html>