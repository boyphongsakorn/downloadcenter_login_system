<?php
require 'sdk/facebook.php';
include 'config_profile.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>PHP and mysql</title>
	<meta http-equiv="refresh" content="5; url=edit.php?<?php echo $objResultst["adminid"];?>"/>
</head>
<body>
<center>
แก้ไขข้อมูลแล้ว
<br>
ลิงค์รูปภาพ:<img src='<?php echo $_POST[imageurl];?>' width="102" height="102"><br>ชื่อ:<?php echo $user_profile[name];?><br>กำลังพากลับไปหน้าจัดการเว็บ ถ้าเว็บไม่พาไป <a href="edit.php?<?php echo $objResultst["adminid"];?>">คลิกที่นี้</a>
<?php
include 'config_profile.php';

$num_rows=mysqli_num_rows($objQuery);

if ($num_rows>0) {
	$idadd = $num_rows;
}
else {
	$idadd = 0;
}

$sqlquery = "INSERT INTO hello VALUES ('$idadd','$_POST[name]','$_POST[comment]','$_POST[category]','$_POST[price]','$_POST[data]','$_POST[imageurl]','$_POST[downloadurl]')";
$results=$mysqli->query($sqlquery);
?>
</center>
</body>
</html>
<?php
mysql_close();
?>