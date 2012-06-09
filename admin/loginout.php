<?php
//注销登录
session_start();
$_SESSION['username']="";
echo "<script language='javascript'>alert('注销登录成功！');location='index.php';</script>";
?>