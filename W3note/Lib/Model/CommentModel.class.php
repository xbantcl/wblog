<?php
class CommentModel extends BcModel{	 
	    protected $_validate  = array(
			    array('email','require','����д��������!'),
                array('email','email','�����ʽ����'), 
				
               );
         
		protected $_auto=array(
		             array('status','1'),  
		             array('inputtime','time',1,'function'),
		             array('content','content',1,'callback'),
					 array('url','geturl',1,'callback'),
		             array ('inputtime','time',1,'function'),
			         array('path','path',3,'callback'),	
			         array('username','getusername',3,'callback'),
	               );
        /* ��������*/
	function Cmnum() {
		return $this->field('id')->count();
	}
	/* �������ۼ��ظ�*/
	function newscoments() {
		$newscoments = $this->limit(9)->order('id desc')->select();
		return $newscoments;
	}
	/*
	*���������б�
	*$Module��ģ������
	*$rid:��ȡ������ID
	*/
	public function commentlist($Module, $rid) {
		$rid = trim($rid);
		if ($Module == 'News')
			$condition['nid'] = $rid;
		if ($Module == 'Blog')
			$condition['bid'] = $rid;
		$commentlist = $this->relation(true)->where($condition)->order('inputtime desc')->select();
		return $commentlist;
	}
	protected function GetIp(){
		$data= get_client_ip();
		
		$arrip=array('0.0.0.0','94.23.14.30','199.116.173.93','58.53.192.218','87.73.2.26','213.209.215.90');
        $errip=in_array($data,$arrip);
        if($errip) exit();
		
		if(!$data) exit();
		 return $data ;
		}
	
		
}
?>