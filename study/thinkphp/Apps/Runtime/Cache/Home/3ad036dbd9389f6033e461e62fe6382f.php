<?php if (!defined('THINK_PATH')) exit();?><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="/study/thinkphp/css/ace.min.css" />
<link rel="stylesheet" href="/study/thinkphp/css/bootstrap.min.css "/>
<link rel="stylesheet" href="/study/thinkphp/css/header.js" />
<link rel="stylesheet" href="/study/thinkphp/css/pager.css"/>
<?php include("/study/thinkphp/apps/home/view/course/index.html"); ?>
<!-- #include file = "index.html" -->

 <title>学生课程表</title>


 </head>
 
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title></title>
    <link href="http://cdn.bootcss.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <style>
        #main-nav {
            margin-left: 1px;
        }

            #main-nav.nav-tabs.nav-stacked > li > a {
                padding: 10px 8px;
                font-size: 12px;
                font-weight: 600;
                color: #4A515B;
                background: #E9E9E9;
                background: -moz-linear-gradient(top, #FAFAFA 0%, #E9E9E9 100%);
                background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#FAFAFA), color-stop(100%,#E9E9E9));
                background: -webkit-linear-gradient(top, #FAFAFA 0%,#E9E9E9 100%);
                background: -o-linear-gradient(top, #FAFAFA 0%,#E9E9E9 100%);
                background: -ms-linear-gradient(top, #FAFAFA 0%,#E9E9E9 100%);
                background: linear-gradient(top, #FAFAFA 0%,#E9E9E9 100%);
                filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#FAFAFA', endColorstr='#E9E9E9');
                -ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr='#FAFAFA', endColorstr='#E9E9E9')";
                border: 1px solid #D5D5D5;
                border-radius: 4px;
            }

                #main-nav.nav-tabs.nav-stacked > li > a > span {
                    color: #4A515B;
                }

                #main-nav.nav-tabs.nav-stacked > li.active > a, #main-nav.nav-tabs.nav-stacked > li > a:hover {
                    color: #FFF;
                    background: #3C4049;
                    background: -moz-linear-gradient(top, #4A515B 0%, #3C4049 100%);
                    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#4A515B), color-stop(100%,#3C4049));
                    background: -webkit-linear-gradient(top, #4A515B 0%,#3C4049 100%);
                    background: -o-linear-gradient(top, #4A515B 0%,#3C4049 100%);
                    background: -ms-linear-gradient(top, #4A515B 0%,#3C4049 100%);
                    background: linear-gradient(top, #4A515B 0%,#3C4049 100%);
                    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#4A515B', endColorstr='#3C4049');
                    -ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr='#4A515B', endColorstr='#3C4049')";
                    border-color: #2B2E33;
                }

                    #main-nav.nav-tabs.nav-stacked > li.active > a, #main-nav.nav-tabs.nav-stacked > li > a:hover > span {
                        color: #FFF;
                    }

            #main-nav.nav-tabs.nav-stacked > li {
                margin-bottom: 4px;
            }

        /*定义二级菜单样式*/
        .secondmenu a {
            font-size: 10px;
            color: #4A515B;
            text-align: center;
        }

        .navbar-static-top {
            background-color: #CBC9C9;
            margin-bottom: 5px;
        }

        .navbar-brand {
            background: url('') no-repeat 10px 8px;
            display: inline-block;
            vertical-align: middle;
            padding-left: 50px;
            color: #fff;
        }
    </style>
       <div class="top-nav">
           <div class="tn-bg">
               <div class="tn-header">
                   <div class="tn-nav">
                       <div class="tn-title" node-type="menu" style="display:none;">
                        
                           <div style="display:none;" class="tn-topmenulist tn-topmenulist-a tn-topmenulist-a-menu" node-type="menuList">
                                    </div>
                                </div>
                                <div class="">
                                    <a target="_blank"  class="tn-tab" ><i>学生成绩管理</i>
                                    </a>
                                </div>
                                <div class="tn-title" node-type="client">
                                  
                                    </div>
                                </div>
                            </div>
							
                             <div class="tn-person-r" style="float:right;">
                       <div class="tn-title tn-title-login" id="SI_Top_Login" style="display: none;">
                           <a href="javascript:;" class="tn-tab" suda-uatrack="key=index_new_menu&amp;value=weibo_signin"><i>登录</i>
                           </a>
                           <!-- <span style="display:none;" class="tn-tab"> <i id="SI_Top_Login"></i>
                           </span> -->

                           <div style="" class="tn-topmenulist tn-topmenulist-b" id="SI_Top_LoginLayer">
                           </div>
                       </div>
                       <div class="tn-title" id="SI_Top_Logout"><span class="tn-greeting">您好 
  
                    
                    
                    
                    
                          
                        </div>

               </div>
           </div>

       </div>
 <body>
 
 
 <div class="navbar navbar-duomi navbar-static-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                </a>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2">
                <ul id="main-nav" class="nav nav-tabs nav-stacked" style="">
                    <li class="active">
                        <a href="#">
                            <i class="glyphicon glyphicon-th-large"></i>
                            首页 		
                        </a>
                    </li>
                    <li>
                        <a href="#systemSetting" class="nav-header collapsed" data-toggle="collapse">
                            <i class="glyphicon glyphicon-cog"></i>
                            学生管理
                               <span class="pull-right glyphicon glyphicon-chevron-down"></span>
                        </a>
                        <ul id="systemSetting" class="nav nav-list collapse secondmenu" style="height: 0px;">
                            <li><a href="/study/thinkphp/index.php/home/test"><i class="glyphicon glyphicon-user"></i>学生成绩管理</a></li>
                            <li><a href="/study/thinkphp/index.php/home/course"><i class="glyphicon glyphicon-th-list"></i>学生课程管理</a></li>
                            <li><a href="/study/thinkphp/index.php/home/teacher"><i class="glyphicon glyphicon-asterisk"></i>学生与教师管理</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="./plans.html">
                            <i class="glyphicon glyphicon-credit-card"></i>
                            物料管理		
                        </a>
                    </li>

                    <li>
                        <a href="./grid.html">
                            <i class="glyphicon glyphicon-globe"></i>
                            分发配置
							<span class="label label-warning pull-right">5</span>
                        </a>
                    </li>

                    <li>
                        <a href="./charts.html">
                            <i class="glyphicon glyphicon-calendar"></i>
                            图表统计
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="glyphicon glyphicon-fire"></i>
                            关于系统
                        </a>
                    </li>

                </ul>
            </div>
            <div class="col-md-10">
                
                
                
                <div class="table-responsive">
		<table id="sample-table-2" class="table table-striped table-bordered table-hover dataTable" aria-describedby="sample-table-2_info">
			<thead>
				<th class="sorting" role="columnheader" tabindex="0" aria-controls="sample-table-2" rowspan="1" colspan="1" aria-label="Update: activate to sort column ascending" style="width: 189px;">学生学号</th>
				
				<th class="sorting" role="columnheader" tabindex="0" aria-controls="sample-table-2" rowspan="1" colspan="1" aria-label="Domain: activate to sort column ascending" style="width: 159px;">学生姓名</th>
				<th class="sorting" role="columnheader" tabindex="0" aria-controls="sample-table-2" rowspan="1" colspan="1" aria-label="Price: activate to sort column ascending" style="width: 117px;">语文</th>
				<th class="hidden-480 sorting" role="columnheader" tabindex="0" aria-controls="sample-table-2" rowspan="1" colspan="1" aria-label="Clicks: activate to sort column ascending" style="width: 125px;">数学</th>
				<th class="sorting" role="columnheader" tabindex="0" aria-controls="sample-table-2" rowspan="1" colspan="1" aria-label="Update: activate to sort column ascending" style="width: 189px;">英语</th>
				<th class="hidden-480 sorting" role="columnheader" tabindex="0" aria-controls="sample-table-2" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 166px;">操作</th>
				</thead>

				
			<tbody role="alert" aria-live="polite" aria-relevant="all"><tr class="odd">
			
			<form method="post">
				<?php if(is_array($data)): foreach($data as $key=>$vo): ?><tr>
				<td><?php echo ($vo["stu_id"]); ?></td>
				<td><?php echo ($vo["stu_name"]); ?></td>
				<td><?php echo ($vo["yuwen"]); ?></td>
				<td><?php echo ($vo["shuxue"]); ?></td>
				<td><?php echo ($vo["english"]); ?></td>
				<td><a href="/study/thinkphp/index.php/home/test/delete?id=<?php echo ($vo["stu_id"]); ?>">删除</a>
  					<a href="/study/thinkphp/index.php/home/test/update?id=<?php echo ($vo["stu_id"]); ?>">修改</a></td>
				
				</tr><?php endforeach; endif; ?>
				</form>
			
				</tr>
				
				
			</tbody>
		
			</table>
			
</div>                
                
                
                
                
                
                
                
                
                
                
            </div>
        </div>
    </div>
    <script src="http://cdn.bootcss.com/jquery/2.1.1/jquery.min.js"></script>
    <script src="http://cdn.bootcss.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script>
    </script>
 
 
 
 
 
 
 
 		<ul>
			<?php echo ($page); ?>
			</ul>

 </body>