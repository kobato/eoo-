<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>华丽的冒险</title>
<META NAME="Author" CONTENT="crll">
<META NAME="Keywords" CONTENT="华丽的冒险,cheer,eoo,eoo.name,crll">
<META NAME="Description" CONTENT="华丽的冒险,还记得么,那些逝去的年华。">
<link href="./templates/style.css" rel="stylesheet" type="text/css">
<link rel="shortcut icon" type="image/ico" href="http://img.eoo.name/favicon.ico">
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" style="table-layout:fixed; word-break:break-all">
<table width="700" border="0" align="center" cellpadding="5" cellspacing="5">
 <tr> 
    <td height="70"><font color="#000000" style="font-size:20px"><b>华丽的冒险</b> </font>- 还记得么,那些逝去的繁华。</td>
  </tr>
</table>
 
 <?php include("top.php"); ?>

<TABLE width="700" border="0" align="center" cellPadding="4" cellSpacing="1" class="table">
  <TR align="center"  bgcolor="#E1E1E1"> 
    <TD height="1" colspan="5"><font color="#FFFFFF"></font></td>
  </tr>
<?php
$mtime = explode(' ', microtime());
$starttime = $mtime[1] + $mtime[0];
function debuginfo() {
	global $starttime;
	$mtime = explode(' ', microtime());
	$totaltime = number_format(($mtime[1] + $mtime[0] - $starttime), 6);
	echo "Processed in $totaltime second(s)";
}

 include("inc_eoo/conn_index.php");
  include("page.class.php");
 $rows = mysql_num_rows(mysql_query("select * from blog")); 
Page($rows,15); 
 $SQL="SELECT * FROM `blog` order by id desc  limit $select_from $select_limit";  
 $query=mysql_query($SQL);
  while($row=mysql_fetch_array($query))

{
?>
<tr bgcolor="#F2F2F2">
<td><font color="#C0C0C0"><a style="font-family:Lucida Sans Typewriter">[<?=$row[lastdate]?>]</a></font>
&nbsp;&nbsp;<a href="eoo<?=$row[id]?>.html" target="_blank"><?=$row[title]?></a></td>
<td class="smallfont">阅读:<b><?=$row[look]?></b></td>
  </tr>
<?
  }
?>
 
<td align="center"> <?php echo $pagenav; ?></td>
</table></td></tr>
</table>
<br>
<?php include("foot.php"); ?>
 </BODY>
</HTML>