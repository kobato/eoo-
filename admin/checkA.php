<?php
//����Ҫ��֤����Ա��ݵĵط�����
//�����ñ��ļ�֮ǰ�������κ���ʽ��������������ĵ��ʼ������
session_start();
if ($_SESSION['username']==""){
	echo "<script language='javascript'>alert('�Ƿ�������');location='index.php';</script>";
}
?>