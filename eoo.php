 <?
$mtime = explode(' ', microtime());
$starttime = $mtime[1] + $mtime[0];
function debuginfo() {
	global $starttime;
	$mtime = explode(' ', microtime());
	$totaltime = number_format(($mtime[1] + $mtime[0] - $starttime), 6);
	echo "Processed in $totaltime second(s)";
}
  include("inc_eoo/conn_index.php");

  //获取需修改的内容并显示
    if($_GET[id]){
    $id=$_GET[id];
    $esql="select * from blog where id=".$id;
 $query=mysql_query($esql);
    $eoo=mysql_fetch_array($query);
	$sql="UPDATE blog SET look = look+1 WHERE id='".$_GET[id]."'";
	mysql_query("$sql");
 ?>
<HTML>
<HEAD>
<TITLE><?=$eoo[title]?></TITLE>
<META http-equiv=Content-Type content="text/html; charset=gb2312">


<STYLE type=text/css>

.code {font-family:"Courier New";font-size:"12px";}
.style1 {color: #0000FF}
.style2 {font-family: "Courier New"; font-size: "12px"; color: #0000FF; }
</STYLE>
</HEAD>

<body leftmargin="0" topmargin="20" marginwidth="0" marginheight="0" style="table-layout:fixed;word-break:break-all">
<table width="760" border="0" align="center" cellpadding="5" cellspacing="0">
  <tr>
    <td align="center"  style="font-size:14px"><strong><?=$eoo[title]?></strong></td>
  </tr>
 
 <TR>
  <TD>
    发布日期：<?=$eoo[lastdate]?></TD>
 </TR>
 <TR>
   <TD>&nbsp;</TD>
 </TR>
 <TR>
  <TD><?php echo $eoo['content']?></TD>
 </TR>
 <TR>
  <TD>&nbsp;</TD>
 </TR>
 <TR>
  <TD align="right">【<A href="javascript:window.print()">打印这篇文章</A>】【<A href="javascript:window.close()">关闭该窗口</A>】</TD>
 </TR>
 <TR>
  <TD><div id="disqus_thread"></div>
<!-- PingLun.La Begin -->
<!-- UY BEGIN -->
<div id="uyan_frame"></div>
<script type="text/javascript" id="UYScript" src="http://v1.uyan.cc/js/iframe.js?UYUserId=2788" async=""></script>
<!-- UY END -->
<!-- PingLun.La End --> </TD>
</TR>
</TABLE>
<table border="0" width="760" cellpadding="1" cellspacing="0" align="center">
  <tr>
    <td align="center"><b>Powered by: <a href="http://eoo.name" 

target="_blank">eoo!</a><font color="#C0C0C0">/</font>
<script src="http://s95.cnzz.com/stat.php?id=1555648&web_id=1555648" language="JavaScript"></script>
 <font color="#C0C0C0">/</font><br>
    
     <?php
	debuginfo();
	ob_end_flush();
	?> </b></td>
  </tr>
</table>
</BODY>

 </HTML>
 <?
  }
?>
	<link rel="stylesheet" href="../kindeditor/plugins/code/prettify.css" />
		<link rel="stylesheet" href="../kindeditor/themes/default/default.css" />
	<script charset="utf-8" src="../kindeditor/kindeditor.js"></script>
	<script charset="utf-8" src="../kindeditor/lang/zh_CN.js"></script>
	<script charset="utf-8" src="../kindeditor/plugins/code/prettify.js"></script>
<link href="./templates/style.css" rel="stylesheet" type="text/css">
<link rel="shortcut icon" type="image/ico" href="http://eoo.name/up/favicon.ico">