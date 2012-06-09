<?php
include_once 'checkA.php';

 include("../inc_eoo/conn_index.php");

//判断登录
 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk" />
<title>eoo!后台管理系统....</title>

<!-- CSS -->
<link href="style/css/transdmin.css" rel="stylesheet" type="text/css" media="screen" />
<!--[if IE 6]><link rel="stylesheet" type="text/css" media="screen" href="style/css/ie6.css" /><![endif]-->
<!--[if IE 7]><link rel="stylesheet" type="text/css" media="screen" href="style/css/ie7.css" /><![endif]-->

<!-- JavaScripts-->

</head>

<body>
		<div id="wrapper">
    	<!-- h1 tag stays for the logo, you can use the a tag for linking the index page -->
    	<h1><a href="#"><span>Transdmin Light</span></a></h1>
        
        <!-- You can name the links with lowercase, they will be transformed to uppercase by CSS, we prefered to name them with uppercase to have the same effect with disabled stylesheet -->
        <ul id="mainNav">
        	<li><a href="add.php">新增</a></li> <!-- Use the "active" class for the active menu item  -->
        	<li><a href="blog_gl.php" class="active">Edit/Delete</a></li>
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
				        <h2><a href="#">首页</a> &raquo; <a href="#" class="active">Edit/Delete</a></h2>
           <div id="main">
                    	<table cellpadding="0" cellspacing="0">
						                       
					 
 


<?php

  $SQL="SELECT * FROM `blog` order by id desc";
  $query=mysql_query($SQL);
  while($eoo=mysql_fetch_array($query)){
	  ?>
	
	<tr>
                                <td><?=$eoo[id]?>,&nbsp;<?=$eoo[title]?></td>
                                <td class="action"><a href="http://eoo.name/eoo<?=$eoo[id]?>.html" class="view" target="_blank">View</a><a href="javascript:openeditwindow(<?=$eoo[id]?>)" class="edit">Edit</a><a href="delete.php?id=<?=$eoo[id]?>" class="delete">Delete</a></td>
                            </tr>  
 

<?php
 
}
?>
</table>
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
<script language="javascript">
   function openeditwindow(x){
   	window.open("edit.php?id="+x,"newframe","top=100,left=200,width=800,height=600,menubar=no,location=no,scrollbars=no,status=no");
   }
</script>


