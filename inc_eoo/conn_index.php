<?php

 
$conn = @ mysql_connect("localhost", "root", "521837a") or die("数据库链接错误");
mysql_select_db("123", $conn);
mysql_query("set names 'GBK'"); //使用GBK中文编码;

function htmtocode($content) {
	$content = str_replace("\n", "<br>", str_replace(" ", "&nbsp;", $content));
	return $content;
}

//$content=str_replace("'","‘",$content);
 //htmlspecialchars();



?>
