<?php
class LinkModel extends Model{	 
	/* ��������*/
	function Linklist() {
		$Linklist = $this->field('id,name,url')->order('id desc')->select();
		return $Linklist;
	}
}
?>