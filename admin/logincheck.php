<?php
//��֤��½��Ϣ
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
			echo "<script language='javascript'>alert('��½�ɹ���');location='main.php';</script>";
		}
		else {
			echo "<script language='javascript'>alert('�������');location='index.php';</script>";
		}
	}
	else {
		echo "<script language='javascript'>alert('�û��������ڣ�');location='index.php';</script>";
	}
//}
?>