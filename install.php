<?php
require 'sdk/facebook.php';
include 'config_profile.php';
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
<iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2Fboyphongsakornnetwork%2F&width=450&layout=standard&action=like&size=small&show_faces=true&share=true&height=80&appId=1788022608142956" width="450" height="80" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe><br>
กด Like เพจนี้ไว้น่ะครับ ถ้ามีการอัดเดต จะแจ้งที่เพจครับผม :D
	ยินดีต้อนรับเข้าการติดตั้งเว็บ ศูนย์การดาว์นโหลดครับ<br>
วิธีการติดตั้งมี2แบบ คือการติดตั้งด้วยตนเอง กับ การติดตั้งในหน้านี้ครับ<br>
วิธีที่ 1 การติดตั้งด้วยตนเอง<br>
จะเป็นเกี่ยวกับ MySQLและการแก้ไขไฟล์ ครับ<br>
วิธีการติดตั้งดูตามคลิปได้เลยครับ :3<br>
<h4>Update : ระบบ Facebook ไม่ต้องใช้แล้วน่ะครับ ผมได้เปลี่ยนระบบใหม่แล้ว ไม่จำเป็นตัองใช้ Facebook Login ครับ</h4>
<iframe width="560" height="315" src="https://www.youtube.com/embed/8jkbnH4FoOg" frameborder="0" allowfullscreen></iframe><br>
วิธีที่ 2 การกรอบด้วยตนเอง :3<br>
<form method="post" action="installf1.php">
รหัสผ่าน Login : <input type="text" name="adminid"> วิธีการเข้าคือ http://ที่อยู่เว็บของคุณ.com/edit?รหัสผ่านของคุณ<br>
โล้โก URL : <input type="text" name="logourl"><br>
รูปพื้นหลัง : <input type="text" name="headurl"><br>
ชื่อเว็บ: <input type="text" name="title"><br>
สีของชื่อเว็บ: <input type="text" name="titlecolor"> ดู code สีได้<a href="http://www.w3schools.com/colors/colors_picker.asp">ที่นี้</a>
<input type="submit" value="Submit"></form><br>
</center>
</body>
</html>