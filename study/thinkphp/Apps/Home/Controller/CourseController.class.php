<?php 
namespace Home\Controller;
use Think\Controller;
header("Content-type:text/html;charset=utf-8");
class CourseController extends Controller{
	public function index(){		
		$page = $_GET['page'];  
	    //基类     
        if ($page ==0){
            $num =0;
        }else{
           $num = ($page-1)*10;
        }
	        
	        
        //model
		//课程信息
        $course_data = M('course_table')->field('course_name')->select();
	        
	        
	        
        
        //$data = M('stu_table')->field('id,name')->limit($num,10)->select();
        
        
        //$course_result = $this->data_combine($data);
        //var_dump($course_result);exit;
	         
	       
	        
        $count = M('stu_course')->count();
        $p_pageSize = $page?$page:1;
        
        $p = new \Org\Util\MyPager($count,$p_pageSize);
        $page =$p->GetPagerContent();
        var_dump($course_data);
        $this->assign("course_data",$course_data);
        $this->assign("page",$page);
        $this->assign("data",$data);
        $this->display('stu');
	}
    private  function  data_combine($data){
    	$result = array();
    	foreach($data as $key => $value){
    			$result[$value['stu_id']][] = $value['course_id'];
    	}
    	return $result;
    }
    
    
    
    
    private function _post( $key ){
        if(isset($_REQUEST[$key])){
            return strip_tags($key);
        }
        return false;
    }
    public function sel(){
    	$stu_id = $_POST['search'];
    	$user = M('stu_course');
		
    	
    	
    	$condition['stu_id'] = $stu_id;
    	$condition['stu_name'] = $stu_id;
    	$condition['_logic'] = "or";
    	$result = $user->where($condition)->find();
    	$this->assign('data',$result);
    	$this->display();
    	//var_dump($_POST['search']);
    	
    }
   
    
  
   
    public  function add(){
    	if ($_POST['stu_name'] ==null){
    		$this->display();
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
	        $user = M('stu_course');
	        $sql = $user->add($data);
	        if ($sql){
	            $this->index();
	        }
    	}
    }
    
    public  function delete(){
        header("Content-Type:text/html; charset=utf-8");
        $id = $_GET['id'];
        $user = M('stu_course');
        $condition['stu_id'] = $id;
        $result = $user->where($condition)->delete();

        if($result !== false){
            //echo '删除 ',$result,' 条数据。';
            $this->index();
        }else{
            //echo '删除数据失败！';
            $this->index();
        }
    }
    
    public  function update(){
        $update = $_GET['update'];
        if ($update ==1){
            $stu_id = $_POST['stu_id'];
            $condition['stu_id'] = $stu_id;
            $data['stu_id'] = $stu_id;
            $data['yuwen'] = $_POST['yuwen'];
            $data['shuxue'] = $_POST['shuxue'];
            $data['english'] = $_POST['english'];
            $result = M('stu_course')->where($condition)->data($data)->save(); 
            if ($result){
                echo "修改成功";
            }else{
                echo "修改失败";
            }  
        }else{
          
            $stu_id = $_GET['id'];
            $condition['stu_id'] = $stu_id;
            $data = M('stu_course')->where($condition)->find();
        }   
        $this->assign('data',$data);
        $this->display();
        
    }
    

}

