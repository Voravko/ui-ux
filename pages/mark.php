<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Document</title>
    <link rel="stylesheet" href="course1.css" />
    <link rel = "stylesheet" href="/style11.css"/>
    <link rel = "stylesheet" href="verif.css"/>

  </head>
  <body class="theme-dark">

    <?php 
    
    $link = mysqli_connect("localhost", "root", "", "uiux",3306);
    mysqli_set_charset($link, "utf8");
    session_start();
    $id_user = $_SESSION['id_user'];
    $id_token =  $_SESSION['id_token'];
    $query1 = mysqli_query($link,"SELECT `creator_id`,`name` FROM `course` WHERE `id` = '$id_token'");
    $row1 = mysqli_fetch_assoc($query1);
    $c_i = $row1['creator_id'];
    $query2 = mysqli_query($link,"SELECT `id_cours`, `id_dis`, `id_com`,`link` FROM `trans` WHERE `id_com` = '$id_token' and `mark` = 0");
    
    
    ?>
    <div class="header">
      <div class="logo d">
       <a href = "/index.html" class = "link"> <img src="/img/logoui.svg" /></a>
      </div>
      <div class="title">
        <p>Поставить оценку</p>
      </div>
      
      <div class="menu">
        <a href = "<?php
      if($id_user==1) echo "./menuD.html";
      if($id_user==2) echo "./menuC.html"; ?>"><img src="/img/menu.svg" /></a>
      </div>
    </div>
    <?php while( $row = mysqli_fetch_assoc($query2)): ?> 
     
    <div class="conteiner-coures">
        <form class = "course-discriotion" method="post" action="../functionas/addmark.php">
          
        <input type="hidden" name = "id"  value="<?php echo $row['id_cours']?>" />
          
          <a href = "<?php echo $row['link'] ?>"><p class = "course-dis-link">Ссылка на тестовое задание</p></a>
         <div class = "input-mark">
        <div class="input-container">
            <input type="text" name = "mr" required=""/>
            <label>Оценка</label>		
            <span class = "erorr-message" id = "error_ps" ></span>
    
            <button class = "main-func-button o"  >
            Поставить оценку
    </button>
          
    
        </div>
        </div>
        
    </form>
      </div>
      <?php endwhile ?>
    </body>
    </html>