<?php 
namespace Home\Controller;
use Think\MyController;
use Home\Model\ScoreModel;
use Think\Cache\Driver\Redis;

header("Content-type:text/html;charset=utf-8");
class TestController extends MyController{
	public function __construct(){
		parent::__construct();
	}
	public function eh(){
		//var_dump(phpinfo());
		$redis = new Redis();
		//$redis->connect("192.168.1.105","6379");  //php客户端设置的ip及端口
		//存储一个 值
		$redis->set("say","Hello World");
		echo $redis->get("say");     //应输出Hello World
		
		//存储多个值
		$array = array('first_key'=>'first_val',
				'second_key'=>'second_val',
				'third_key'=>'third_val');
		$array_get = array('first_key','second_key','third_key');
		$redis->mset($array);
		var_dump($redis->mget($array_get));
	}
	
	
	public function index(){
        $score = D('Score');
		$data = $score->__index();
		$count = $score->__count();
	    $page = $score->getpage($count);    
        $this->assign("page",$page);
        $this->assign("data",$data);
        $this->display('stu');
	     
    }
   /*
    * 查询
    */
    public function sel(){
    	$score = D('Score');
    	$data = $score->__sel();
    	$this->assign('data',$data);
    	$this->display();
    	//var_dump($_POST['search']);
    	
    }
    /*
     * 新增学生信息
     */
    public  function add(){
    	$score = D('Score');
    	$data = $score->__addscore();
    	if ($data ==null){
    		$this->display();
    	}else{
	  	    $this->index();
    	}
    }
   	/*
   	 * 删除
   	 */
    public  function delete(){
     	$score = D('Score');
    	$result = $score->_deletescore();

        $this->index();
    }
    /*
     * 修改
     */
    public  function update(){
    	$score = D('Score');
    	$result = $score->_updatescore();
        $this->assign('data',$result);
        $this->display();
        
    }
   
}

