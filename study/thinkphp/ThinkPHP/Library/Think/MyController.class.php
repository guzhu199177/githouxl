<?php
namespace Think;
use Think\Controller;
session_start();
class MyController extends Controller{
	public function __construct(){
		parent::__construct();
		$login = $this->islogin();
		if (!$login ){
			$this->login(); 
		}
	}
	/**
	 * 检测登录
	 * @access protected
	 * @return boolean
	 */
	protected function islogin(){
		if (session('uname')){
			return true;
		}else {
			return false;
		}
	}
	/**
	 * 登录
	 * @access protected
	 * @return
	 */
	protected function login($uname){
		$name = $_POST['uname'];
		if ($name) {
			session('uname',$name);
		}
		$this->display('/login');
		exit;
	}
}