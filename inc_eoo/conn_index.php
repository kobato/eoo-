<?php

 
$conn = @ mysql_connect("localhost", "root", "521837a") or die("���ݿ����Ӵ���");
mysql_select_db("123", $conn);
mysql_query("set names 'GBK'"); //ʹ��GBK���ı���;

function htmtocode($content) {
	$content = str_replace("\n", "<br>", str_replace(" ", "&nbsp;", $content));
	return $content;
}

//$content=str_replace("'","��",$content);
 //htmlspecialchars();



?>
