<?php
class GuestbookModel extends BcModel{	 
	    protected $_validate  = array(
			    array('email','require','����д��������!'),
                array('email','email','�����ʽ����'), 
				
               );
         
		protected $_auto=array(
		             array('status','1'),  
		             array('content','content',1,'callback'),
					 array('url','geturl',1,'callback'),				
		             array ('inputtime','time',1,'function'),
			         array('path','path',3,'callback'),	
					 array('username','getusername',3,'callback'),				       
	               );
				
		/* ��������*/
	function Gknum() {
		return $this->field('id')->count();
	}
	
}
?>