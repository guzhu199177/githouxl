<?php if (!defined('THINK_PATH')) exit();?><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="/study/thinkphp/css/ace.min.css" />
<link rel="stylesheet" href="/study/thinkphp/css/bootstrap.min.css "/>

 <title>学生课程表</title>
 </head>
 
 <body>
          <form action="/study/thinkphp/index.php/home/test/update?update=1" method="post">
            <p>学生姓名:<?php echo $data['stu_name'];?></p> 
            <p>学生id:<?php echo $data['stu_id'];?>:<input type="text" name="stu_id" value="<?php echo $data['stu_id'];?>" readonly="readonly"/></p>
 	        <p>语文: <input type="text" name="yuwen" placeholder="<?php echo $data['yuwen'];?>"/></p>
  			<p>数学<input type="text" name="shuxue" placeholder="<?php echo $data['shuxue'];?>"/></p>
  			<p>英语<input type="text" name="english" placeholder="<?php echo $data['english'];?>"/></p>
  			
  			<input type="submit" value="Submit" />
		</form>