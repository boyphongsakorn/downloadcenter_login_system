<!DOCTYPE html>
<html>
<head>
<?php
require 'sdk/facebook.php';
include 'config_profile.php';

$objDB = $mysqli->select_db("boyphon1_dl");
$strSQL = "SELECT * FROM hello";
$objQuery = $mysqli->query($strSQL);
$strSQLst = "SELECT * FROM settings";
$objQueryst = $mysqli->query($strSQLst);

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

.panel-group .panel {
    margin-bottom: 5px !important;
}
</style>
<script type="text/javascript">
$('#additem').on('shown.bs.modal', function () {
  $('#additem').focus()
})
$('#editsettings').on('shown.bs.modal', function () {
  $('#editsettings').focus()
})
$('#login').on('shown.bs.modal', function () {
  $('#login').focus()
})
</script>
</head>
<?php
//We check if the users ID is defined
if(isset($_GET[$objResultst["adminid"]]))
{
        $id = intval($_GET[$objResultst["adminid"]]);
}
?>
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
        <a class="navbar-brand text-hide" href="edit.php">Brand Text
        </a>
      </div>
      <div id="navbar6" class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">
          <?php if ($id == $objResultst["adminid"]): ?>
          <li><a data-toggle="modal" data-target="#additem">Add item</a></li>
          <li><a data-toggle="modal" data-target="#editsettings">Setting</a></li>
          <li class="active"><a href="edit.php">Logout</a></li>
          <?php else: ?>
          <li><a data-toggle="modal" data-target="#login">Login</a></li>
          <?php endif ?>
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
<font color="<?php echo $objResultst["titlecolor"];?>"><h1 style="margin-top: 25px;">การจัดการเว็บ</h1></font>
        </div>
        <!-- /.container -->
    </div>
<div class="container">
    <div class="panel-group">
<?php if ($id == $objResultst["adminid"]): ?>
<?php
while($objResult = mysqli_fetch_array($objQuery))
{
?>
        <div class="panel panel-primary">
            <div class="panel-heading"><?php echo $objResult["name"];?> <img src="<?php echo $objResult["imageurl"];?>" style="width: 25px;height: 25px;"> <a data-toggle="modal" data-target="#popedit<?php echo $objResult["id"];?>"><img src="https://cdn3.iconfinder.com/data/icons/google-material-design-icons/48/ic_mode_edit_48px-128.png" style="width: 25px;height: 25px;"></a><a data-toggle="modal" data-target="#popdelete<?php echo $objResult["id"];?>"><img src="https://cdn3.iconfinder.com/data/icons/musthave/256/Remove.png" style="width: 25px;height: 25px;"></a></div>
            <div class="panel-body"><div class="row"><div class="col-md-2"><center><a href="<?php echo $objResult["downloadurl"];?>"><img src="https://assets.ubuntu.com/v1/be3876ec-picto-download-warmgrey.svg" style="width: 80px;height: 80px;"></a><br><?php echo $objResult["category"];?></center></div><div class="col-md-7"> <?php echo $objResult["comment"];?></div><div class="col-md-3"><h3><font color="#7300FF"><?php echo $objResult["price"];?></font></h3>Update ล่าสุด:<br><?php echo $objResult["data"];?></div></div></div>
        </div>
<script>
$('#popedit<?php echo $objResult["id"];?>').on('shown.bs.modal', function () {
  $('#pop<?php echo $objResult["id"];?>').focus()
})
$('#popdelete<?php echo $objResult["id"];?>').on('shown.bs.modal', function () {
  $('#pop<?php echo $objResult["id"];?>').focus()
})
</script>
<!-- Modal -->
<div class="modal fade" id="popedit<?php echo $objResult["id"];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">แก้ไอเท็ม <?php echo $objResult["id"];?></h4>
      </div>
      <div class="modal-body">
        <iframe class="playerpage" src="edititem.php?itemid=<?php echo $objResult["id"];?>" style="
    width: 564px; height: 210px;" frameborder="0"></iframe>
      </div>
    </div>
  </div>
</div>
<!-- Modal -->
<div class="modal fade" id="popdelete<?php echo $objResult["id"];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">แก้ไอเท็ม <?php echo $objResult["id"];?></h4>
      </div>
      <div class="modal-body">
        <iframe class="playerpage" src="deleleitem.php?itemid=<?php echo $objResult["id"];?>" style="
    width: 100%; height: 300px;" frameborder="0"></iframe>
      </div>
    </div>
  </div>
</div>
<?php
}
?>
    </div>
</div>
<div class="modal fade" id="additem" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Add Item</h4>
      </div>
      <div class="modal-body">
<form method="post" action="additemf1.php">
ชื่อ : <input type="text" name="name"><br>
คำอธิบาย: <input type="text" name="comment"><br>
ประเภท: <input type="text" name="category"><br>
ราคา: <input type="text" name="price"><br>
วันที่อัดเดตล่าสุด: <input type="text" name="data"><br>
ลิงค์รูปภาพ: <input type="text" name="imageurl"><br>
ลิงค์ดาว์นโหลด: <input type="text" name="downloadurl">
<input type="submit" value="Submit">
</form>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="editsettings" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Setting</h4>
      </div>
      <div class="modal-body">
<form method="post" action="editsettingsf1.php">
โล้โก URL : <input type="text" name="logourl" value="<?php echo $objResultst["logourl"];?>"><br>
รูปพื้นหลัง : <input type="text" name="headurl" value="<?php echo $objResultst["headurl"];?>"><br>
ชื่อเว็บ: <input type="text" name="title" value="<?php echo $objResultst["title"];?>"><br>
สีของชื่อเว็บ: <input type="text" name="titlecolor" value="<?php echo $objResultst["titlecolor"];?>"> ดู code สีได้<a href="http://www.w3schools.com/colors/colors_picker.asp">ที่นี้</a><br>
<input type="submit" value="Submit"></form>
      </div>
    </div>
  </div>
</div>
<?php else: ?>
Admin เท่านั่น
<!-- Modal -->
<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">แก้ไอเท็ม <?php echo $objResult["id"];?></h4>
      </div>
      <div class="modal-body">
<form method="post" action="loginf1.php">
รหัสผ่าน : <input type="text" name="password"><br>
<input type="submit" value="Submit">
</form>
      </div>
    </div>
  </div>
</div>
<?php endif ?>
</body>
</html>