<?php
 include_once 'checkA.php';
 include("../inc_eoo/conn_index.php");

// �޸�����
  if($_POST[submit]!=""){
  	$sql="UPDATE `blog` SET `user` = '$_POST[user]',`title` = '$_POST[title]',`content` = '$_POST[content]' WHERE `id` = ".$_GET[id];
    $equery=mysql_query($sql);
    if($equery){
    echo "<script>alert('�޸ĳɹ���');history.back();window.close();</script>";
  }else{
  	echo "<script>alert('�޸�ʧ�ܣ�');history.back();</script>";
  }
  exit;
  }

  //��ȡ���޸ĵ����ݲ���ʾ
    if($_GET[id]){
    $id=$_GET[id];
    $esql="select * from blog where id=".$id;
    $query=mysql_query($esql);
    $row=mysql_fetch_array($query);
    }

?>
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
 
 <form name="form1" action="" method="post" >
  ����<input type="text" name="uesr" value="<?=$row[user]?>" /><BR>
  ����<input type="text" name="title" value="<?=$row[title]?>" /><BR>
  ���ݣ�<textarea id="content2" name="content" style="width:700px;height:280px;"><?
 echo ($row['content']);
   ?></textarea><br/>
       
  <input type="submit" name="submit" value="�޸�"/>

</form>

 