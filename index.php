<!DOCTYPE html>
<html>
<head>
<?php
require 'sdk/facebook.php';
include 'config_profile.php';

$objResultst = mysqli_fetch_array($objQueryst)
?>
<title><?php echo $objResultst["title"];?></title>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="http://kkgo.boyphongsakorn.xyz/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
<script type="text/javascript" src="http://kkgo.boyphongsakorn.xyz/jquery-3.1.0.min.js"></script>
<script src="https://apis.google.com/js/platform.js"></script>
<style type="text/css">
.navbar {
    margin-bottom: 0px !important;
}

.example6 .navbar-brand{ 
  background: url(<?php echo $objResultst["logourl"];?>) center / contain no-repeat;
  width: 200px;
}

.intro-header {
	height: 90px;
    padding-top: 0px; /* If you're making other pages, make sure there is 50px of padding to make sure the navbar doesn't overlap content! */
    padding-bottom: 50px;
    text-align: left;
    color: #f8f8f8;
    background: url(<?php echo $objResultst["headurl"];?>) no-repeat center center;
    background-size: cover;
}

.intro-message {
    position: relative;
    padding-top: 20%;
    padding-bottom: 20%;
}

.intro-message > h1 {
    margin: 0;
    text-shadow: 2px 2px 3px rgba(0,0,0,0.6);
    font-size: 5em;
}

.intro-divider {
    width: 400px;
    border-top: 1px solid #f8f8f8;
    border-bottom: 1px solid rgba(0,0,0,0.2);
}

.intro-message > h3 {
    text-shadow: 2px 2px 3px rgba(0,0,0,0.6);
}

@media(max-width:767px) {
    .intro-message {
        padding-bottom: 15%;
    }

    .intro-message > h1 {
        font-size: 3em;
    }

    ul.intro-social-buttons > li {
        display: block;
        margin-bottom: 20px;
        padding: 0;
    }

    ul.intro-social-buttons > li:last-child {
        margin-bottom: 0;
    }

    .intro-divider {
        width: 100%;
    }
}

.div1 {
    width: 300px;
    height: 100px;
    border: 1px solid #33CCFF;
}
</style>
</head>
<body>
<center>
<nav class="navbar navbar-inverse navbar-static-top example6">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar6">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand text-hide" href="index.php">Brand Text
        </a>
      </div>
      <div id="navbar6" class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">
          <li class="active"><a href="#">Home</a></li>
          <li><a href="edit.php">Login (Admin Only)</a></li>
            </ul>
          </li>
        </ul>
      </div>
      <!--/.nav-collapse -->
    </div>
    <!--/.container-fluid -->
  </nav>
</center>
    <div class="intro-header" style="margin-bottom: 5px;">
        <div class="container">
<font color="<?php echo $objResultst["titlecolor"];?>"><h1 style="margin-top: 25px;"><?php echo $objResultst["title"];?></h1></font>
        </div>
        <!-- /.container -->
    </div>
<div class="container">
    <div class="panel-group">
<?php
while($objResult = mysqli_fetch_array($objQuery))
{
?>
        <div class="panel panel-primary">
            <div class="panel-heading"><?php echo $objResult["name"];?> <img src="<?php echo $objResult["imageurl"];?>" style="width: 25px;height: 25px;"></div>
            <div class="panel-body"><div class="row"><div class="col-md-2"><center><a href="<?php echo $objResult["downloadurl"];?>"><img src="https://assets.ubuntu.com/v1/be3876ec-picto-download-warmgrey.svg" style="width: 80px;height: 80px;"></a><br><?php echo $objResult["category"];?></center></div><div class="col-md-7"> <?php echo $objResult["comment"];?></div><div class="col-md-3"><h3><font color="#7300FF"><?php echo $objResult["price"];?></font></h3>Update ล่าสุด:<br><?php echo $objResult["data"];?></div></div></div>
        </div>
<?php
}
?>
    </div>
</div>
</body>
</html>