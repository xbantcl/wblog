<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>系统配置信息</title>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<link href="__PUBLIC__/admin/style.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
body,div,ul,li{
 margin:0 auto;
 padding:0;
}
body{
 font:12px "宋体";
 text-align:center;
}

div.fieldset {
	border:  1px solid #EEEEEE;
	margin: 10px 0;
	padding: 20px 10px;
}
div.fieldset span.legend {
	position: relative;
	background-color: #FFF;
	padding: 3px;
	top: -30px;
	font: 700 14px Arial, Helvetica, sans-serif;
	color: #999;
}
ul{
 list-style:none;
}
.main{
 clear:both;
 padding:8px;
 text-align:center;
}
/*第一种形式*/
#tabs0 {

 width: 100%;
 /*border: 1px solid #cbcbcb;*/
 background-color: #fff;
}
.menu0{
 width: 400px;
}
.menu0 li{
 display:block;
 float: left;
 padding: 4px 0;
 width:100px;
 text-align: center;
 cursor:pointer;
 background: #FFF;
}
.menu0 li.hover{
 background: #EEEEEE;
}
#main0 ul{
 display: none;
}
#main0 ul.block{
 display: block;
}
#tap { width: 650px;margin:0 auto;}
#form { margin:0 auto;   }
-->
</style>
<script>
<!--
/*第一种形式 第二种形式 更换显示样式*/
function setTab(m,n){
 var tli=document.getElementById("menu"+m).getElementsByTagName("li");
 var mli=document.getElementById("main"+m).getElementsByTagName("ul");
 for(i=0;i<tli.length;i++){
  tli[i].className=i==n?"hover":"";
  mli[i].style.display=i==n?"block":"none";
 }
}

//-->
</script>
</head>
<body>
<div>
    <div style="background:#EEEEEE;height:20px;text-align:left;padding-top: 5px;">
   <span style="margin-right:5px;margin-left:5px;font-size:12px;">当前位置:系统管理&nbsp;>&nbsp;基本设置</span>
    </div>
   
</div>
<div>
<!--第一种形式-->
<div id="tabs0">
<div style="height:20px;margin-bottom:0px;">
 <ul class="menu0" id="menu0">
  <li onclick="setTab(0,0)" class="hover">站点配置</li>
  <li onclick="setTab(0,1)">路径配置</li>
  <li onclick="setTab(0,2)">用户配置</li>
   <li onclick="setTab(0,3)">SEO配置</li>
 </ul>
 </div>
 <div class="main" id="main0">
 <form action="__URL__/save" method="post">
   <ul class="block">
  <div class="fieldset">
			
            <div id="result" class="none result" style="font-family:微软雅黑,Tahoma;margin-bottom: 10px;font-size:18px;color:green;text-align:center"></div>
            <div class="table-list">
			<table width="100%" cellspacing="0" style="font-size:12px;">
            <tbody>
            
            
             <tr>
            <td width="200" align="right">站点域名：<span class="red_font">*</span></td>
            <td align="left">
           <input type="text" name="domainname" class="inputbox" value="<?php echo (C("rooturl")); ?>" />
            </td>	
            </tr>
             
            <tr>
            <td width="200" align="right">分页数据显示长度：<span class="red_font">*</span></td>
            <td align="left">
          <input type="text" name="pagesize" class="inputthumb" value="<?php echo (C("pagesize")); ?>" />
            </td>	
            </tr>
            <tr>
            <td width="200" align="right"></td>
            <td align="left">上传附件配置
            </td>	
            </tr>
            <tr>
            <td width="200" align="right">缩略图大小(width*height)：<span class="red_font">*</span></td>
            <td align="left">
          <input type="text" name="thumb_w" class="inputthumb" value="<?php echo (C("thumb_w")); ?>" />*
          <input type="text" name="thumb_h" class="inputthumb" value="<?php echo (C("thumb_h")); ?>" />&nbsp;PX
            </td>	
            </tr>
            <tr>
            <td width="200" align="right">图片大小(width*height)：<span class="red_font">*</span></td>
            <td align="left">
          <input type="text" name="image_w" class="inputthumb" value="<?php echo (C("image_w")); ?>" />*
          <input type="text" name="image_h" class="inputthumb" value="<?php echo (C("image_h")); ?>" />&nbsp;PX
        
            </td>	
            </tr>
             <tr>
            <td width="200" align="right">图片是否添加水印：<span class="red_font">*</span></td>
            <td align="left">
            <?php if(C("iswater")== 1 ): ?><input type="checkbox" name="iswater"  value="0" checked  />
          <?php else: ?>
          <input type="checkbox" name="iswater"  value="1"   /><?php endif; ?>
            </td>	
            </tr>
            <tr>
            <td width="200" align="right">允使上传的最大文件(MB)：<span class="red_font">*</span></td>
            <td align="left">
          <input type="text" name="maxsize" class="inputthumb" value="<?php echo (C("maxsize")); ?>" />&nbsp;MB
        
            </td>	
            </tr>
             <tr>
            <td width="200" align="right">允许上传的附件类型：<span class="red_font">*</span></td>
            <td align="left">
           <input type="text" name="allowexts" class="inputbox" value="<?php echo (C("allowexts")); ?>" />
           (使用英文逗号隔开)
            </td>	
            </tr>
       </tbody>
    
 </table>
			
		</div>	
		</div>
  </ul>
  <ul>
  <div class="fieldset">
			
            <div id="result" class="none result" style="font-family:微软雅黑,Tahoma;margin-bottom: 10px;font-size:18px;color:green;text-align:center"></div>
            <div class="table-list">
			<table width="100%" cellspacing="0" style="font-size:12px;">
            <tbody>
                <tr>
            <td width="120" align="right" style="color:gray">温馨提示：<span class="red_font"></span></td>
            <td align="left" style="color:gray">
          此处是前台相关路径的配置,路径必须以“/”结尾，格式如http://www.w3note.com/
            </td>	
            </tr>
                <tr>
            <td width="120" align="right">站点根目录路径：<span class="red_font">*</span></td>
            <td align="left">
          <input type="text" name="rooturl" class="inputbox" value="<?php echo (C("rooturl")); ?>" />
            </td>	
            </tr>
             <tr>
            <td width="120" align="right">JS路径：<span class="red_font">*</span></td>
            <td align="left">
          <input type="text" name="jsurl" class="inputbox" value="<?php echo (C("jsurl")); ?>" />
            </td>	
            </tr>
             <tr>
            <td width="120" align="right">CSS路径：<span class="red_font">*</span></td>
            <td align="left">
           <input type="text" name="cssurl" class="inputbox" value="<?php echo (C("cssurl")); ?>" />
            </td>	
            </tr>
             <tr>
            <td width="120" align="right">图片路径：<span class="red_font">*</span></td>
            <td align="left">
          <input type="text" name="imgurl" class="inputbox" value="<?php echo (C("imgurl")); ?>" />
            </td>	
            </tr>
                 
       </tbody> 
 </table>
		</div>	
		</div>
  </ul>
  <ul>
  <div class="fieldset">
			
            <div id="result" class="none result" style="font-family:微软雅黑,Tahoma;margin-bottom: 10px;font-size:18px;color:green;text-align:center"></div>
            <div class="table-list">
			<table width="100%" cellspacing="0" style="font-size:12px;">
            <tbody>
            
             <tr>
            <td width="100" align="right">网站联系邮箱:<span class="red_font">*</span></td>
            <td align="left">
          <input type="text" name="email" class="inputbox" value="<?php echo (C("email")); ?>" />
            </td>	
            </tr>
             <tr>
            <td width="100" align="right">联系人:<span class="red_font">*</span></td>
            <td align="left">
           <input type="text" name="contact" class="inputbox" value="<?php echo (C("contact")); ?>" />
            </td>	
            </tr>
             <tr>
            <td width="100" align="right">公司名称:<span class="red_font">*</span></td>
            <td align="left">
          <input type="text" name="company" class="inputbox" value="<?php echo (C("company")); ?>" />
            </td>	
            </tr>
             <tr>
            <td width="100" align="right">联系电话:<span class="red_font">*</span></td>
            <td align="left">
           <input type="text" name="phone" class="inputbox" value="<?php echo (C("phone")); ?>" />
            </td>	
            </tr>
             <tr>
            <td width="100" align="right">备案ICP:<span class="red_font">*</span></td>
            <td align="left">
          <input type="text" name="icp" class="inputbox" value="<?php echo (C("icp")); ?>" />
            </td>	
            </tr>
               <tr>
            <td width="100" align="right">地址:<span class="red_font">*</span></td>
            <td align="left">
          <input type="text" name="address" class="inputbox" value="<?php echo (C("address")); ?>" />
            </td>	
            </tr>
            
       </tbody>
    
 </table>
		</div>	
		</div>
  </ul>
  <ul>
  <div class="fieldset">
			
            <div id="result" class="none result" style="font-family:微软雅黑,Tahoma;margin-bottom: 10px;font-size:18px;color:green;text-align:center"></div>
            <div class="table-list">
			<table width="100%" cellspacing="0" style="font-size:12px;">
            <tbody>
            
             <tr>
            <td width="100" align="right">站点标题：<span class="red_font">*</span></td>
            <td align="left">
         <input type="text" name="sitename" class="inputbox" value="<?php echo (C("sitename")); ?>" />
            </td>	
            </tr>
             <tr>
            <td width="100" align="right">关键词：<span class="red_font">*</span></td>
            <td align="left">
           <input type="text" name="metakeys" class="inputbox" value="<?php echo (C("metakeys")); ?>" />
            </td>	
            </tr>
             <tr>
            <td width="100" align="right">描述：<span class="red_font">*</span></td>
            <td align="left">
           <textarea name="metadesc" rows="5" cols="50"><?php echo (C("metadesc")); ?></textarea>
            </td>	
            </tr>
            
           
                  <tr>
            <td width="100" align="right">微博客标题：<span class="red_font">*</span></td>
            <td align="left">
         <input type="text" name="weiboname" class="inputbox" value="<?php echo (C("weiboname")); ?>" />
            </td>	
            </tr>
             <tr>
            <td width="100" align="right">微博客关键词：<span class="red_font">*</span></td>
            <td align="left">
           <input type="text" name="weibokeys" class="inputbox" value="<?php echo (C("weibokeys")); ?>" />
            </td>	
            </tr>
             <tr>
            <td width="100" align="right">微博客描述：<span class="red_font">*</span></td>
            <td align="left">
           <textarea name="weibodesc" rows="5" cols="50"><?php echo (C("weibodesc")); ?></textarea>
            </td>	
            </tr>
           
       </tbody>
    
 </table>
			
		</div>	
		</div>
  </ul>
   
<div class="btn" style="font-size:12px;">
          <input type="hidden" name="file" value="siteconfig.inc.php" />
          <input type="submit" value="更新配置" id="send" class="button" style="margin-left: 20px;">&nbsp;&nbsp;
	   </div>
</form>
</div>
</body>
</html>