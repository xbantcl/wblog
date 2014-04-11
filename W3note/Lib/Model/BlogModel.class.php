<?php
class BlogModel extends CommonModel{
	protected $_validate  =  array(
     array('title','require','���ⲻ��Ϊ�գ�'),
	 array('content','require','���ݲ���Ϊ�գ�'),
     //array('title','','���������Ѿ����ڣ�',0,'unique',1), // ��������ʱ����֤title�ֶ��Ƿ�Ψһ
     
);
    protected $_auto = array (
		array (
			'status',
			'0'
		),
		array (
			'inputtime',
			'time',
			1,
			'function'
		),
		
	);
    protected $_link = array(
        'Columns'=>array(
           'mapping_type'=>BELONGS_TO,
           'class_name'=>'Columns',
           'foreign_key'=>'catid',//News���е�catid
           'as_fields'=>'colTitle,colId,colPid',
       ),

         'Comment'=>array(
           'mapping_type'=>HAS_MANY,
           'class_name'=>'Comment',
           'foreign_key'=>'bid',//������������ͬ��
           'mapping_fields'=>'username,email,content,inputtime',
       ),
    );
}
?>
