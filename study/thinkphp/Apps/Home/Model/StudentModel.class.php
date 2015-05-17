<?php
namespace Home\Model;
use Think\Model;
class StudentModel  {
	public function getStudentInfo(){
		$page = $_GET['page'];
		
		if ($page ==0){
			$num =0;
		}else{
			$num = ($page-1)*10;
		}
		$data = M('stu_table')->limit($num,10)->select();
		return $data;
	}	
	public function count(){
        $count = M('stu_table')->count();
		return $count;
	}
	public function getpage($count){
		$page = $_GET['page'];
		$p_pageSize = $page?$page:1;
		$p = new \Org\Util\MyPager($count,$p_pageSize);
		$page =$p->GetPagerContent();
		return $page;	
	}
	public function selectById(){
		$stu_id = $_POST['search'];
		$user = M('stu_table');
		$condition['stu_id'] = $stu_id;
		$condition['stu_name'] = $stu_id;
		$condition['_logic'] = "or";
		$result = $user->where($condition)->find();
		return $result;
	}
	
	public  function addStudent(){
		if ($_POST['stu_name'] ==null){
			return FALSE;
		}else{
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
	}	
	public function deleteById(){
		$id = $_GET['id'];
		$user = M('stu_table');
		$condition['id'] = $id;
		$result = $user->where($condition)->delete();
		return $result;
	}
	public function updateStudent(){
		$update = $_GET['update'];
		if ($update ==1){
			$stu_id = $_POST['id'];
			$condition['id'] = $stu_id;
			$data['id'] = $stu_id;
			$data['age'] = $_POST['age'];
			$data['sex'] = $_POST['sex'];
			$data['class'] = $_POST['class'];
			//var_dump($data);
			$result = M('stu_table')->where($condition)->data($data)->save();
		}else{
          
            $stu_id = $_GET['id'];
            $condition['id'] = $stu_id;
            $data = M('stu_table')->where($condition)->find();
        }   
		return $data;
	}
}