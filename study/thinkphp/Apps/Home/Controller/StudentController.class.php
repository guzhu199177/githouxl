<?php 
namespace Home\Controller;
use Think\MyController;
use Home\Model\StudentModel;
use Think\Cache\Driver\Redis;
header("Content-type:text/html;charset=utf-8");
class StudentController extends MyController{
	public function index(){
		$student = D('Student');
		$data = $student->getStudentInfo();
		$count = $student->count();
		$page = $student->getPage($count);
        $this->assign("page",$page);
        $this->assign("data",$data);
        $this->display('stu');   
    }
    
    private function _post( $key ){
        if(isset($_REQUEST[$key])){
            return strip_tags($key);
        }
        return false;
    }
    public function sel(){
      	$student = D('student')->selectById();
    	$this->assign('data',$result);
    	$this->display(); 	
    }
   
    public  function add(){
    	$student = D('student')->addStudent();
    	if ($student == null){
    		$this->display();
    	}else{
    		$this->index();
    	}
    }
    
    public  function delete(){
    	$result = D('student')->deleteById();
        if($result !== false){
            //echo '删除 ',$result,' 条数据。';
            $this->index();
        }else{
            //echo '删除数据失败！';
            $this->index();
        }
    }
    
    public  function update(){
    	$result = D('student')->updateStudent();
        $this->assign('data',$result);
        $this->display();
        
    }
   
}

