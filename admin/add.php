 <?php
include_once 'checkA.php';
 include("../inc_eoo/conn_index.php");
if($_POST['submit']){
 $sql="insert into blog (id,user,title,content,lastdate) " .
  		"values ('','$_POST[user]','$_POST[title]','$_POST[content]',now())";
  mysql_query($sql);
  echo "<script language=\"javascript\">alert('��ӳɹ�');history.go(-1)</script>";
 }
?>
<SCRIPT language=javascript>
function CheckPost()
{
 if (myform.title.value.length<1)
	{
		alert("���ⲻ������5���ַ�");
		myform.title.focus();
		return false;
	}

}
</SCRIPT>
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
        	<li><a href="add.php" class="active">����</a></li> <!-- Use the "active" class for the active menu item  -->
        	<li><a href="blog_gl.php">Edit/Delete</a></li>
        	<li><a href="user.php">�����޸�</a></li>
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
				        <h2><a href="#">��ҳ</a> &raquo; <a href="#" class="active">Add</a></h2>

  <div id="main">
  <form class="jNice" action="add.php" method="post" name="myform" onsubmit="return CheckPost();">
  <h3>���·���...............</h3>
  <p><label>���ߣ�</label><input type="text" name="user" class="text-long"/></p>
  <p><label>���⣺</label><input type="text" name="title" class="text-long"/></p>
  <p><label>���ݣ�</label><textarea id="content2"  name="content"  style="width:700px;height:280px;"></textarea></p>
  <p><input type="submit" name="submit" value="ȷ���ύ" /></p>
  


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
	<link rel="stylesheet" href="../kindeditor/plugins/code/prettify.css" />
	<script charset="utf-8" src="../kindeditor/kindeditor.js"></script>
	<script charset="utf-8" src="../kindeditor/lang/zh_CN.js"></script>
	<script charset="utf-8" src="../kindeditor/plugins/code/prettify.js"></script>
	<script charset="utf-8" src="../kindeditor/kindeditor-min.js"></script>
		<script>
			KindEditor.ready(function(K) {
				K.create('#content2', {
					themeType : 'simple'
				});
			});
		</script>