<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>wBlog博管系统 by www.w3note.com</title>
 <link rel="stylesheet" href="__PUBLIC__/admin/login.css" type="text/css" />  
</head>
<body>
<div id="wrap">
<div class="logo"><IMG src="<?php echo (C("rooturl")); ?>Public/admin/images/logo.png" width=200 height=80></div>
<div class="login">
<form action="__URL__/checkLogin" method="post" onsubmit="return chk();" id="myform">
<div class="username"><li class="uli">用户名:</li><li class="ulp"><input name="username" id="username" type="text" style="width: 180px;" /></li></div>
<div class="password"><li class="uli">密&nbsp;&nbsp;码:</li><li class="ulp"><input type="password" name="password" id="password" style="width: 180px" /></li></div>
<div class="verify"><li class="uli">验证码:</li><li class="nmu"><input name="verify" type="text" class="lyform"  id="verify" style="width: 80px" maxlength="5"/></li><li class="liv"><img src="__URL__/verify/" border="0" alt="看不清楚请点击刷新验证码" style="cursor : pointer;width:60px;height:20px;" onClick="show(this)"/></li></div>
<div class="submit"><input type="submit"   id="dosubmit" value="登录"  /></div>
</form>
</div>
<div class="bottom"></div>
<div class="desc"><a href="http://www.w3note.com">WBlog3.1.2_2博客管理系统</a></div>
</div>
<script>
function show(obj){
obj.src="__URL__/verify/random/"+Math.random();
}
</script>
</body>
</html>