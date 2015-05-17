<?php if (!defined('THINK_PATH')) exit();?><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="/study/thinkphp/css/ace.min.css" />
<link rel="stylesheet" href="/study/thinkphp/css/bootstrap.min.css "/>

 <title>学生课程表</title>
 </head>
 
 <body>
          <form action="/study/thinkphp/index.php/home/student/update?update=1" method="post">
            <p>学生姓名:<?php echo $data['name'];?></p> 
            <p>学生id:<?php echo $data['id'];?>:<input type="text" name="id" value="<?php echo $data['id'];?>" readonly="readonly"/></p>
 	        <p>年龄: <input type="text" name="age" placeholder="<?php echo $data['age'];?>"/></p>
  			<p>性别：<input type="text" name="sex" placeholder="<?php echo $data['sex'];?>"/></p>
  			<p>班级：<input type="text" name="class" placeholder="<?php echo $data['class'];?>"/></p>
  			
  			<input type="submit" value="Submit" />
		</form>