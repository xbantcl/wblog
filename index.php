<?php
     //��������ģʽ
      define('APP_DEBUG',true);
     //ǰ̨Ŀ¼
     define('APP_PATH', './W3note/');
     define('W3CORE_PATH','./ThinkPHP');
	 if(!is_file('./install/install.php')){
	 require W3CORE_PATH.'/ThinkPHP.php';
	 }else{
		header('Location: ./install/index.php');
		 }
?>

