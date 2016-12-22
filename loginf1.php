<?php
require 'sdk/facebook.php';
include 'config_profile.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>PHP and mysql</title>
	<?php if ($_POST[password] == $objResultst["adminid"]): ?>
	<meta http-equiv="refresh" content="3; url=edit.php?<?php echo $objResultst["adminid"];?>"/>
	<?php else: ?>
	<meta http-equiv="refresh" content="3; url=edit.php"/>
	<?php endif ?>
</head>
<body>
<center>
<?php if ($_POST[password] == $objResultst["adminid"]): ?>
ยินดีต้อนรับเข้าสู่ admin Login ครับ
<?php else: ?>
รหัสผ่านไม่ถูกต้อง
<?php endif ?>
<br>

</center>
</body>
</html>
<?php
mysql_close();
?>