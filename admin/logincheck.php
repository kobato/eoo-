<?php
//验证登陆信息
session_start();
include_once '../inc_eoo/conn_index.php';
//if($_POST['submit']){
	$username=$_POST['username'];
	$userpass=$_POST['userpass'];
	$userpass=md5($userpass);
	$sql="select * from user";
	$query=mysql_query($sql);
	$row=mysql_fetch_array($query);
	if ($row['username']==$username){
		if ($row['userpass']==$userpass){
			$_SESSION['username']=$username;
			echo "<script language='javascript'>alert('登陆成功！');location='main.php';</script>";
		}
		else {
			echo "<script language='javascript'>alert('密码错误！');location='index.php';</script>";
		}
	}
	else {
		echo "<script language='javascript'>alert('用户名不存在！');location='index.php';</script>";
	}
//}
?>