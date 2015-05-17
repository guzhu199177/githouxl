<?php if (!defined('THINK_PATH')) exit();?><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>学生成绩查询</title>
</head>
<body>
	<form  method="post">
    <table>
        <tr>
            <td><label >学生姓名:</label></td>
            <td><input type="text" id="txtname" name="stu_name" /></td>
        </tr>
        <tr>
            <td><label >年龄:</label></td>
            <td><input type="text" id="txtname" name="age" /></td>
        </tr>
        <tr>
            <td><label >性别:</label></td>
            <td><input type="text" id="txtname" name="sex" /></td>
        </tr>
        <tr>
            <td><label >班级:</label></td>
            <td><input type="text" id="txtname" name="class" /></td>
        </tr>
        
        <tr>
            <td colspan=2>
                <input type="reset" />
                <a href="test/add"><input type="submit" /></a>
            </td>
        </tr>
    </table>
</form> 
</body>