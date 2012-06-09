<?php
//简单管理页面范例，在你的管理页面引用checkA.php就OK，当然，不要忘了添加注销登录的链接
include_once 'checkA.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>eoo!后台管理系统....</title>
<link href="style/css/transdmin.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
	<div id="wrapper">
    	<!-- h1 tag stays for the logo, you can use the a tag for linking the index page -->
    	<h1><a href="#"><span>Transdmin Light</span></a></h1>
        
        <!-- You can name the links with lowercase, they will be transformed to uppercase by CSS, we prefered to name them with uppercase to have the same effect with disabled stylesheet -->
        <ul id="mainNav">
        	<li><a href="add.php" class="active">新增</a></li> <!-- Use the "active" class for the active menu item  -->
        	<li><a href="blog_gl.php">Edit/Delete</a></li>
        	<li><a href="user.php">密码修改</a></li>
        	<li><a href="#">系统设置</a></li>
        	<li class="logout"><a href="loginout.php">LOGOUT</a></li>
        </ul>
        <!-- // #end mainNav -->
        
        <div id="containerHolder">
			<div id="container">
        	   	<div id="sidebar">
                	<ul class="sideNav">
                    	<li><a href="#">鸡肋</a></li>
                    	<li><a href="#" class="active">鸡肋</a></li>
                    	<li><a href="#">鸡肋</a></li>
                    	<li><a href="#">鸡肋</a></li>
                    	<li><a href="#">鸡肋</a></li>
                    	<li><a href="#">鸡肋</a></li>
                    </ul>
                    <!-- // .sideNav -->
                </div> 
                <!-- // #sidebar -->
  </div> 
				        <h2><a href="#">首页</a> &raquo; <a href="#" class="active">程序说明</a></h2>
						       <div id="main">
							   <h3>关于程序</h3>
<p>程序:crll </p>
<p>设计:crll </p>
<p>网址:http://eoo.name </p>
<p>联系:2946546@qq.com</p>
 </div>
                <!-- // #main -->
                
                <div class="clear"></div>
            </div>
            <!-- // #container -->
        </div>	
        <!-- // #containerHolder -->
        
        <p id="footer">Powered by: <a href="http://eoo.name" target="_blank">eoo!</a></p>
    </div>
    <!-- // #wrapper -->
</body>
</html>