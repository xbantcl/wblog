<?php
class ColumnsModel extends Model{
		protected $_auto=array(
			array('colPath','colPath',3,'callback'),
			array('thumb','getthumb',3,'callback'),
			array('model','getmodel',3,'callback'),
			array('asmenu','asmenu',3,'callback'),
				
		);
				
		
	   function colPath(){
		$colPid=isset($_POST['colPid'])?(int)$_POST['colPid']:0;
		$colId=$_POST['colId'];
			if($colPid==0){				
				return 0;
			}
			
			$fat=$this->where("colId=$colPid")->find();//��ѯ���Ǹ���ID
			$data=$fat['colPath'].'-'.$fat['colId'];//�õ�������colPath�����ϸ���ID�����ص����Ӽ���colPath				
			return $data;
	    }
	  public function asmenu(){
		$asmenu=isset($_POST['asmenu'])?(int)$_POST['asmenu']:0;
		$data=$asmenu;
		return $data;
	  }
	  public function getthumb(){
		
		if($_FILES['thumb']['name'] && $_FILES['thumb']['name'] !==''){
		   $thumb=D('Attach')->upload(null,'thumb');
		  
		}else{
		    $thumb=isset($_POST['thumb'])?$_POST['thumb']:'';
		}
		 return $thumb;
		
	}
	  function Catlist($model, $modelid) {
		$Module = M($model);
		 $list=$this->field("concat(colPath,'-',colId) AS bpath, colId,colPid,colPath, colTitle, description,ord,model")->where(array('modelid'=> $modelid))->order('bpath,colId')->select();
		foreach ($list as $k => $v) {
			$list[$k]['count'] = count(explode('-', $v['bpath']));
			$list[$k]['total'] = $Module->where(array('catid'=> $v['colId']))->count();
			$str = '';
			if ($v['colPid'] <> 0) {
				for ($i = 0; $i < $list[$k]['count'] * 2; $i++) {
					$str .= '&nbsp;';
				}
				$str .= '|-';
			}
			$list[$k]['space'] = $str;
		}

		return $list;
	}
	  function getmodel(){
		  $modelid=isset($_POST['modelid']) ? $_POST['modelid']: 0;
		 
			  switch($modelid){
                case 1:
				        $model="����";
                        break;
                case 2:
				         $model="����";  
                        break;
				case 3:
				       $model="����"; 
                        break;
				
				default: $model="δ֪ģ��";  
                                        
          }
			 $data=$this->array_iconv($model);
			return $data; 
		  
		  }
	function array_iconv($data, $input = 'gbk', $output = 'utf-8') {
	if (!is_array($data)) {
		return iconv($input, $output, $data);
	} else {
		foreach ($data as $key=>$val) {
			if(is_array($val)) {
				$data[$key] = array_iconv($val, $input, $output);
			} else {
				$data[$key] = iconv($input, $output, $val);
			}
		}
		return $data;
	}
}
}

?>