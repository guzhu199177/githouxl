<?php
use Think\Model\ViewModel;
import('ViewModel');
class CourseModel extends ViewModel{
	protected $course = array(
			'stu_table' => array('id','name','_as'=>'stu','_type'=>'left'),
			'stu_course' => array('stu_id','course_id','_as'=>'course','_on'=>'stu.id=course.stu_id'),
			'course_table'=> array('id','course_name','_as'=>'cta','_on'=>'course.course_id=cta.id'),
	);
}
