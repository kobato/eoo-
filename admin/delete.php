<?php
/*
 * eoo!ËéËéÄî v0.1
 */
 include_once 'checkA.php';
 include("../inc_eoo/conn_index.php");
 $id=$_GET['id'];
 $sql="delete from `blog` where `id`=".$id;
 $del=mysql_query($sql);
   if(!empty($_GET['id'])){
   	$del;
     echo "<script>alert('É¾³ý³É¹¦£¡');history.back();</script>";
  }else{
  	 echo "<script>alert('É¾³ýÊ§°Ü£¡');history.back();</script>";
  }
?>



