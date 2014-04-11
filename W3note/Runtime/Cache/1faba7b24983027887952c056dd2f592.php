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
<script type="text/javascript" src="<?php echo (C("jsurl")); ?>jquery-1.4.3.min.js"></script>
<script type="text/javascript" src="<?php echo (C("jsurl")); ?>jquery.form.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo (C("jsurl")); ?>chekform.js" charset="UTF-8"></script>
<div class="container"><!--container-begin -->
  <div class="pagebody"> <!--pagebody-begin -->
   
    <div class="leftpage">  <!--leftpage-begin -->
    
      <div class="updow">  <!-- updow-begin -->
      
        <div class="up"></div>
		<div class="down"></div>
		</div>
      <!-- updow-end -->
      <div class="info">
        <!-- info-begin -->
        <div class="postinfo">
         
          <!-- date-end -->
          <div class="title"><strong>留言本</strong></div>
		  <div class="tinfo">
          <div class="cat">欢迎给我留言^_^</div>
          <div class="brownum"></div>
          <div class="comnum"></div>
		  </div>
          <div class="line"></div>
        </div>
        <!-- postinfo-end -->
        <div class="post"></div>
        <div class="tag"></div>
        <div class"comnum">
        </div>
      </div>
      <!-- info-end -->
	 <?php if(is_array($Gklist)): $i = 0; $__LIST__ = $Gklist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$gk): $mod = ($i % 2 );++$i; if($gk['tousername'] == ''): ?><div class="comment">
	   <div class="line10"></div>
           <div class="cominfo">
           
            <span style="font-size:30px;color:#D64700;"><img src="<?php echo (C("rooturl")); ?>Public/Images/visitor.png" title="visitor" alt="wblog" width="32" height="32" border="0"/></span>
        <?php if($gk["url"] != ''): ?><a href="<?php echo (C("rooturl")); ?>guestbook/tourl/id/<?php echo ($gk['id']); ?>/url/<?php echo (tourl($gk['url'])); ?>"> <?php else: ?> <a href="<?php echo (C("rooturl")); ?>guestbook/index/id/<?php echo ($gk['id']); ?>"><?php endif; echo ($gk['id']); ?>楼&nbsp;&nbsp;<?php echo ($gk['username']); ?> </a>
       
       <span class="ly"><a href='#postComment' onclick='getPid(<?php echo ($gk['id']); ?>)' title='回复'>回复该留言</a></span>
       
      </div>
	  <div class="cominfo">
        Post:<?php echo (date("Y-m-d H:i:s",$gk['inputtime'])); ?>
      </div>
	  <div class="cominfo">
        <?php echo ($gk['content']); ?>
      </div>
       <div class="cominfo">
     
      </div>
      <div class="line10"></div>
	  </div><!-- comment-end -->
<?php else: ?>
<div class="rcomment">
	   <div class="line10"></div>
           <div class="cominfo">
           
            <span class="reply"></span>
        <?php if($gk['url'] != ''): ?><a href="<?php echo (C("rooturl")); ?>tourl/id/<?php echo ($gk['id']); ?>/url/<?php echo (tourl($gk['url'])); ?>"> <?php else: ?> <a href="<?php echo (C("rooturl")); ?>index/id/<?php echo ($gk['id']); ?>"><?php endif; ?>&nbsp;&nbsp;<?php echo ($gk['username']); ?> </a><span style="margin-left: 5px;margin-right: 5px;">于</span><?php echo (date("Y-m-d H:i:s",$gk['inputtime'])); ?><span style="margin-left: 5px;margin-right: 5px;">回复</span><?php echo ($gk['tousername']); ?>
       
       
      </div>
	  <div class="cominfo">
       
      </div>
	  <div class="rcominfo">
        <?php echo ($gk['content']); ?>
      </div>
       <div class="cominfo">
     
      </div>
      <div class="line10"></div>
	  </div><!-- comment-end --><?php endif; endforeach; endif; else: echo "" ;endif; ?>
      <div class="pages"><div class="page"><?php echo ($page); ?></div></div>
	   <div class="comment">
        <div id="form">

     <a name="postComment"></a>
	<form method="post" action="<?php echo U('/Guestbook/add');?>" id="form1" name="form1" onsubmit="return regs('click')">
		<p>&nbsp;</p>
		<div class="fieldset">
			<span class="legend">发表评论</span>
            <div id="result" class="none result" style="font-family:微软雅黑,Tahoma;margin-bottom: 10px;font-size:18px;color:green;text-align:center"></div>
			<table style="vertical-align:top;">
				<tr>
					<td><label for="lastname">昵称(必填项):</label></td>
					<td><input name="username" value="" id="username" type="text" style="width: 250px" /></td>
				</tr>
				<tr>
					<td><label for="firstname">Emial:</label></td>
					<td><input name="email" value="" id="email" type="text" style="width: 250px" /></td>
				</tr>	
                <tr>
					<td><label for="firstname">个人主页:</label></td>
					<td><input name="url" value="" id="url" type="text" style="width: 250px" /></td>
				</tr>	
                 <tr>
					<td><label for="references">评论内容:</label></td>
					<td><textarea name="content" id="content" cols="0" rows="0" style="width: 450px; height: 100px;"></textarea></td>
				</tr>
			</table>
			<br />
            <input type="hidden" name="pid" value="" id="pid">
			<input type="submit" name="dosubmit" id="dosubmit" value="提交留言"  />
		</div>
	</form>
</div>
	   </div>
      
   <div class="line10"></div>
    </div><!--leftpage-end -->
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
      <!--search-end -->
      <div class="barnner"> 
	  <li>
	  
	  </li> 
	  </div><!--barnner-end -->
     
      
      <div class="l_tit">最近大家喜欢看的</div>
      <div class="rand">
        <ul>
          <?php if(is_array($hotlist)): $i = 0; $__LIST__ = $hotlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$hot): $mod = ($i % 2 );++$i;?><li>&nbsp;&nbsp;<a title="<?php echo ($hot["title"]); ?>" href="<?php echo U('/read/'.$hot['id']);?>"><?php echo (msubstr($hot['title'],0,30,'utf-8')); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
      </div>
     <div class="l_tit">主博客最新文章</div>
      <div class="month">
        <ul>
        <?php if(is_array($newslist)): $i = 0; $__LIST__ = $newslist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$news): $mod = ($i % 2 );++$i;?><li>&nbsp;&nbsp;<a title="<?php echo ($news['title']); ?>" href="<?php echo U('/read/'.$news['id']);?>"><?php echo (msubstr($news['title'],0,30,'utf-8')); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
      </div>
      <div class="l_tit">微博客最新文章</div>
      <div class="month">
        <ul>
        <?php if(is_array($bloglist)): $i = 0; $__LIST__ = $bloglist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$blog): $mod = ($i % 2 );++$i;?><li>&nbsp;&nbsp;<a title="<?php echo ($blog['title']); ?>" href="<?php echo U('/blog/'.$blog['id']);?>"><?php echo (msubstr($blog['title'],0,30,'utf-8')); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
      </div>
      <p>
        <!--rightpage-begin -->
      </p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp; </p>
    </div>
    <!--rightpage-end -->
  </div>
  <!--pagebody-end -->
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
 <script>
function getPid(i){
	pid=document.getElementById('pid');
	pid.value=i;
}
</script>