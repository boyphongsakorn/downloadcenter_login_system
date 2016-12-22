<!DOCTYPE html>
<html>
<head>
	<title>PHP and mysql</title>
</head>
<body>
<center>
แก้ไขข้อมูลแล้ว
<br>
เมื่อเสร็จแล้ว ให้ท่าน ลบ ไฟล์ install.php และ installf1.php ออกด้วยน่ะครับ
<?php
require 'sdk/facebook.php';
include 'config_profile.php';

$sqlquery = "INSERT INTO settings VALUES ('$_POST[adminid]','$_POST[logourl]','$_POST[headurl]','$_POST[title]','$_POST[titlecolor]')";
$results=$mysqli->query($sqlquery);
?>
</center>
</body>
</html>
<?php
mysql_close();
?>