<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>缓存管理</title>
<link href="__PUBLIC__/admin/style.css" rel="stylesheet" type="text/css" />
<link href="__PUBLIC__/admin/system.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="__PUBLIC__/admin/main.css" />
</head>
<body>
<div class="location">
   <span>当前位置:系统管理&nbsp;>&nbsp;缓存管理</span>
 </div>
<div>
<div class="main">
 <div class="tags">
    <a href="#"  target="main" title="缓存管理" class="main_select"><span>缓存管理</span></a> 
   <div class="line"/></div>
</div>
<div class="table-list"> 
    
 <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="1"  style='padding:0px'></td>
  </tr>
</table>

</table>
<table width="100%" align="center" border="0" cellpadding="4" cellspacing="1" class="mainbg" style="margin-bottom:8px">
  <tr class="mainbg">
    <td colspan="2"  class='title'><span>前台缓存管理</span></td>
  </tr>
 
  <tr bgcolor="#FFFFFF" >
    <td align="left">清空所有系统缓存</td>
    <td align="left"><a href='__APP__/Clear/del/type/1' title="清空所有系统缓存"> >>更新</a></td>
  </tr>
  <tr bgcolor="#FFFFFF">
    <td>清空文件缓存目录</td>
    <td style='float:left'><a href='__APP__/Clear/del/type/2' title="文件缓存"> >>更新</a></td>
  </tr>
  <tr bgcolor="#FFFFFF">
    <td>数据目录</td>
    <td><a href='__APP__/Clear/del/type/3' title="数据目录"> >>更新</a></td>
  </tr>
  <tr bgcolor="#FFFFFF">
    <td>模版缓存</td>
    <td><a href='__APP__/Clear/del/type/4' title="更新模版缓存"> >>更新</a></td>
  </tr>
 
</table>
<table width="100%" align="center" border="0" cellpadding="4" cellspacing="1" class="mainbg" style="margin-bottom:8px">
  <tr class="mainbg">
    <td colspan="2"  class='title'><span>后台缓存管理</span></td>
  </tr>
 
  <tr bgcolor="#FFFFFF">
    <td>清空所有系统缓存</td>
    <td style='float:left'><a href='__APP__/Clear/del/type/5' title="清空所有系统缓存"> >>更新</a></td>
  </tr>
  <tr bgcolor="#FFFFFF">
    <td>清空文件缓存目录</td>
    <td align="left"><a href='__APP__/Clear/del/type/6' title="文件缓存"> >>更新</a></td>
  </tr>
  <tr bgcolor="#FFFFFF">
    <td>数据目录</td>
    <td align="left"><a href='__APP__/Clear/del/type/7' title="数据目录"> >>更新</a></td>
  </tr>
  <tr bgcolor="#FFFFFF">
    <td>模版缓存</td>
    <td align="left"><a href='__APP__/Clear/del/type/8' title="更新模版缓存"> >>更新</a></td>
  </tr>
 
</table>

</div>
</div>

</body>
</html>