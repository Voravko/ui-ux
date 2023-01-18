<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Document</title>
    <link rel="stylesheet" href="course1.css" />
    <link rel = "stylesheet" href="/style11.css"/>

  </head>
  <?php 
    $link = mysqli_connect("localhost", "root", "", "uiux",3306);
    mysqli_set_charset($link, "utf8");
    $row = [];
    $query = mysqli_query($link, "SELECT `id`,`name`,`creator_id`,`dis`,`photo` FROM `course`");
    session_start();
    $id_user = $_SESSION['id_user'];
    
    ?>
  <body class="theme-dark">
    <div class="header">
      <div class="logo d">
       <a href = "/index.html" class = "link"> <img src="/img/logoui.svg" /></a>
      </div>
      <div class="title">
        <p>Курсы</p>
      </div>
      <div class="menu">
        <a href = "<?php
      if($id_user==1) echo "./menuD.html";
      if($id_user==2) echo "./menuC.html"; ?>"><img src="/img/menu.svg" /></a>
      </div>
    </div>
 

 <?php while( $row = mysqli_fetch_assoc($query)): ?>    
  <form class="conteiner-coures" action="../functionas/findcourse.php" method="post">
          <img class="course-img" src="<?php echo "../img/".$row['photo'];?>" />
          <div class = "course-discriotion">
          <input type = "hidden" value="<?php echo $row['id'] ?>" id = "hid" name = "hid"/>
          <p class="course-title"><?php echo $row['name'] ?></p>
   
          <p class = "course-dis-discription"> <?php
          $short_link = substr($row['dis'], 0, 199);
          echo $short_link."..." ?></p>
          <div class = "bt-course"><button class = "main-func-button">Пройти курс</button></div>
          </div>
 </form>
<?php endwhile; ?>
    <script src="/script.js"></script>
  </body>
</html>
