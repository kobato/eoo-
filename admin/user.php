<?php
 include_once 'checkA.php';
 include("../inc_eoo/conn_index.php");

// �޸�����
  if($_POST[submit]!=""){
  	$sql="UPDATE `user`  SET  `userpass` = MD5(  '$_POST[userpass]' ) WHERE  `user`.`id` =1";
    $equery=mysql_query($sql);
    if($equery){
    echo "<script>alert('�޸ĳɹ���������������:$_POST[userpass],���μ�!');history.back();window.close();</script>";
  }else{
  	echo "<script>alert('�޸�ʧ�ܣ�');history.back();</script>";
  }
  exit;
  }

  //��ȡ���޸ĵ����ݲ���ʾ
    if($_GET[id]){
    $esql="select * from blog where id=".$id;
    $query=mysql_query($esql);
    $row=mysql_fetch_array($query);
    }
?>
 
 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>eoo!��̨����ϵͳ....</title>
<link href="style/css/transdmin.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
	<div id="wrapper">
    	<!-- h1 tag stays for the logo, you can use the a tag for linking the index page -->
    	<h1><a href="#"><span>Transdmin Light</span></a></h1>
        
        <!-- You can name the links with lowercase, they will be transformed to uppercase by CSS, we prefered to name them with uppercase to have the same effect with disabled stylesheet -->
        <ul id="mainNav">
        	<li><a href="add.php">����</a></li> <!-- Use the "active" class for the active menu item  -->
        	<li><a href="blog_gl.php">Edit/Delete</a></li>
        	<li><a href="user.php" class="active">�����޸�</a></li>
        	<li><a href="#">ϵͳ����</a></li>
        	<li class="logout"><a href="loginout.php">LOGOUT</a></li>
        </ul>
        <!-- // #end mainNav -->
        
        <div id="containerHolder">
			<div id="container">
        	   	<div id="sidebar">
                	<ul class="sideNav">
                    	<li><a href="#">����</a></li>
                    	<li><a href="#" class="active">����</a></li>
                    	<li><a href="#">����</a></li>
                    	<li><a href="#">����</a></li>
                    	<li><a href="#">����</a></li>
                    	<li><a href="#">����</a></li>
                    </ul>
                    <!-- // .sideNav -->
                </div> 
                <!-- // #sidebar -->
 		        <h2><a href="#">��ҳ</a> &raquo; <a href="#" class="active">�����޸�</a></h2>
						       <div id="main">
 	<h3>��̨���������޸�</h3>
 <form class="jNice" name="form1" action="" method="post" >
  
  <p>������:<input class="text-long" type="text" name="userpass" value="" /> </p>
  <p><input type="submit" name="submit" value="�޸�"/></p>

</form>

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