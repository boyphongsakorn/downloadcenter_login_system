<?php
$mysqli = new mysqli('mysql13.000webhost.com','a6243285_dl','team1556th','a6243285_boy');

$q="SELECT * FROM hello"; 
$qst="SELECT * FROM settings"; 
$objQuery = $mysqli->query($q);
$objQueryst = $mysqli->query($qst);

$facebook = new Facebook(array(
  'appId'  => '1788022608142956',
  'secret' => '3370eccb776aecc86710fc0402c11417',
));

// Get User ID
$user = $facebook->getUser();

if ($user) {
  try {
    $user_profile = $facebook->api('/me');
  } catch (FacebookApiException $e) {
    error_log($e);
    $user = null;
  }
}

if ($user) {
  $logoutUrl = $facebook->getLogoutUrl();
} else {
  $loginUrl = $facebook->getLoginUrl();
}

// Logout
if($_GET["Action"] == "Logout")
{
  $facebook->destroySession();
  header("location:edit.php");
  exit();
}
?>