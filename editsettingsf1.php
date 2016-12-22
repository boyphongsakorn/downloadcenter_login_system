<!DOCTYPE html>
<html>
<head>
	<title>PHP and mysql</title>
</head>
<body>
<center>
แก้ไขข้อมูลแล้ว
<?php
require 'sdk/facebook.php';
include 'config_profile.php';

$sqlquery = "UPDATE settings SET logourl = '$_POST[logourl]',headurl = '$_POST[headurl]',title = '$_POST[title]',titlecolor = '$_POST[titlecolor]' WHERE 1";
$results=$mysqli->query($sqlquery);
?>
</center>
</body>
</html>
<?php
mysql_close();
?>