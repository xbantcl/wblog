<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>『WBlog博客管理平台』<?php echo (THINK_VERSION); ?></title>
<link href="__PUBLIC__/admin/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="__PUBLIC__/Js/jquery-1.4.3.min.js"></script>
<?php if($tpl != 'index'): ?><script language="javascript" type="text/javascript" src="__PUBLIC__/Js/formvalidator.js" charset="UTF-8"></script>
<script charset="UTF-8" src="__PUBLIC__/kindeditor/kindeditor-min.js"></script>
<script charset="UTF-8" src="__PUBLIC__/kindeditor/lang/zh_CN.js"></script>
<script>
	var editor;
	KindEditor.ready(function(K) {
	editor = K.create('textarea[name="content"]', {
				cssPath : '__PUBLIC__/kindeditor/plugins/code/prettify.css',
					 allowFileManager : true
				});
            });
</script>
<script type="text/javascript">
$(function(){
	$.formValidator.initConfig({autotip:true,formid:"myform",onerror:function(msg){}});
	$("#modelid").formValidator({onshow:"请选择模型",onfocus:"请选择模型"}).inputValidator({min:1,max:50,onerror:"请选择模型"});
	$("#catid").formValidator({onshow:"请选择栏目",onfocus:"请选择栏目"}).inputValidator({min:1,max:50,onerror:"请选择栏目"});
	$("#title").formValidator({onshow:"标题不能为空",onfocus:"标题不能为空"}).inputValidator({min:1,max:50,onerror:"标题不能为空"});
	
	
});
</script>
<?php else: ?>
 <script language="javascript">

function selAll()
{
	for(i=0;i<document.myform.id.length;i++)
	{
		if(!document.myform.id[i].checked)
		{
			document.myform.id[i].checked=true;
		}
	}
}
function noSelAll()
{
	for(i=0;i<document.myform.id.length;i++)
	{
		if(document.myform.id[i].checked)
		{
			document.myform.id[i].checked=false;
		}
	}
}
</script><?php endif; ?>
</head>
<body>
<div>
 <div>
    <div style="background:#EEEEEE;height:20px;padding-top: 5px;">
   <span style="margin-right:5px;margin-left:5px;font-size:12px;">
   当前位置：  
   模板管理
   </span>
    </div>
</div>
<div style="border:1px solid #999;">
 <div>
</div>
<div class="pad_10" style="margin-right:10px;margin-left:10px;font-size:12px;">
<div id="searchid">
   <table width="100%" cellspacing="0" class="search-form">
    <tbody>
      <tr>
		<td>
		当前目录：<?php echo ($tpldir); ?>
		</td>
	 </tr>
	  <tr>
		<td>
		<span><img height="14" src="__PUBLIC__/admin/images/dir.gif" width="20" /></span><span><a href="__URL__/index" >上一层目录</a></span>
		</td>
	 </tr>
    </tbody>
  </table>
  <hr style="margin-right:10px;margin-left:10px;color:#EEEEEE;"/>
  </div>
</div>

<div class="table-list">
     <form name="myform" action="__URL__/act" id="myform" method="POST">
    <table width="100%" cellspacing="0" style="font-size:12px;">
        <thead>
            <tr>
            
			
			<th align="left">模板名称</th>
            
			<th align="center">文件大小</th>										
			<th align="center">修改时间</th>
			
			<th  align="center">管理操作</th>			
			
            </tr>
        </thead>
     
    <tbody> 
    
        <?php if(is_array($files)): $i = 0; $__LIST__ = $files;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$tpl): $mod = ($i % 2 );++$i;?><tr>
	
	<td align="left"><span style="float:left;margin-right:10px;"><img height="14" src="__PUBLIC__/admin/images/file.gif" width="20" /></span><?php echo ($tpl['filename']); ?></td>
	
    <td align="center"><?php echo (sizecount($tpl['size'])); ?></td>
    <td align="center"><?php echo (date("Y-m-d H:i:s",$tpl['ctime'])); ?></td>

	<td align="center"> 
    <a  href="__URL__/insert/dir/<?php echo ($dir); ?>/tplname/<?php echo ($tpl['filename']); ?>" >修改</a>   
      
    </td>	
	</tr><?php endforeach; endif; else: echo "" ;endif; ?>	
  </tbody>
 </table>
	
</form>
</div>
</div>
</div>
</body>
</html>