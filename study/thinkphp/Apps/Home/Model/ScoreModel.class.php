<?php
namespace Home\Model;
use Think\Model;
class ScoreModel  {
	protected $autoCheckFields =FALSE;
	protected $trueTableName = 'course';
	protected $tablePrefix = '';
	public function __index(){

		$page = $_GET['page'];
		
		//header("stu()");
		if ($page ==0){
			$num =0;
		}else{
			$num = ($page-1)*10;
		}
		
		
		
		$data = M('course')->limit($num,10)->select();
		return $data;
		
	}
	public function __count(){
		$count = M('course')->count();
		return $count;
	}
	public function getpage($count){
		$page = $_GET['page'];
		$p_pageSize = $page?$page:1;
		$p = new \Org\Util\MyPager($count,$p_pageSize);
		
		$page =$p->GetPagerContent();
		return $page;
		
		
	}
	public function __sel(){
		$stu_id = $_POST['search'];
		$user = M('course'); 
		$condition['stu_id'] = $stu_id;
		$condition['stu_name'] = $stu_id;
		$condition['_logic'] = "or";
		$result = M('course')->where($condition)->find();
		return $result;
	}

	public  function __addscore(){
		if ($_POST['stu_name']==null){
			return false;
		}	
		$data['name'] = $_POST['stu_name'];
		$data['age'] = $_POST['age'];
			 
		if ($_POST['sex'] =="男"){
			$data['sex'] = 1;
		}else{
			$data['sex'] = 0;
		}
				 
		$data['class'] = $_POST['class'];
		//$pass_word =md5($_GET['password'].rand(1, 100));
		$data['creat_time'] = time();
		$data['update_time'] = time();
		$user = M('stu_table');
		$sql = $user->add($data);
		return $sql;

	}
	public  function _deletescore(){
		$id = $_GET['id'];
		$user = M('course');
		$condition['stu_id'] = $id;
		$result = $user->where($condition)->delete();
		return $result;
	}
	public  function _updatescore(){
	 	$update = $_GET['update'];
        if ($update ==1){
            $stu_id = $_POST['stu_id'];
            $condition['stu_id'] = $stu_id;
            $data['stu_id'] = $stu_id;
            $data['yuwen'] = $_POST['yuwen'];
            $data['shuxue'] = $_POST['shuxue'];
            $data['english'] = $_POST['english'];
            $result = M('course')->where($condition)->data($data)->save(); 
            if ($result){
                echo "修改成功";
            }else{
                echo "修改失败";
            }  
        }else{
          
            $stu_id = $_GET['id'];
            $condition['stu_id'] = $stu_id;
            $data = M('course')->where($condition)->find();
        }   
		return $data;
			
	}
}	
