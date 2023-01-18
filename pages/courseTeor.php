<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="course1.css" />
    <link rel = "stylesheet" href="/style11.css"/>
    <title>Document</title>
</head>
<body class = "theme-dark">
  <?php 

  $link = mysqli_connect("localhost", "root", "", "uiux",3306);
  mysqli_set_charset($link, "utf8");
  session_start();
  $id_c = $_SESSION['id_c'];
  $id_user = $_SESSION['id_user'];

  $query = mysqli_query($link, "SELECT `photo`,`dis` FROM `course` where `id` =  '$id_c'");
  $row = mysqli_fetch_assoc($query);
  ?>
  <div class="header">
    <div class="logo">
     <a href = "/index.html" class = "link"> <img src="/img/logoui.svg"/></a>
    </div>
    <div class="title">
      <p>COURSE</p>
    </div>
    
    <div class="menu">
        <a href = "<?php
      if($id_user==1) echo "./menuD.html";
      if($id_user==2) echo "./menuC.html"; ?>"><img src="/img/menu.svg" /></a>
      </div>
  </div>

      <div  class = "course">
        <div class ="course-main-picture" style = "background-image: url(../img/<?php echo $row['photo']; ?>);">
        
        </div>
        <p class = "dis-text">
            <?php echo $row['dis'];?>
        </p>
       
      </div>
      <a href = "/pages/testwork.php" class = "link">
      <div class = "course-next">
        <img src ="/img/next.png"/>
      </div>
      </a>
</body>
</html>