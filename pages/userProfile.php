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
    $link = mysqli_connect("localhost", "root", "", "uiux", 3306);
    mysqli_set_charset($link, "utf8");
    session_start();
    $id_token = $_SESSION['id_token'];
    $id_user = $_SESSION['id_user'];
    $query = mysqli_query($link, "SELECT * FROM `designer` WHERE `id` = '$id_token'");
    $query2 = mysqli_query($link, "SELECT `id_cours`,`mark`, `link` FROM `trans` WHERE `id_dis` = '$id_token'");


    $row = mysqli_fetch_assoc($query);
    ?>
    <div class="header">
    <div class="logo">
    <a href = "/index.html" class = "link"><img src="/img/logoui.svg"/></a>
    </div>
    <div class="title">
    <p>Профиль</p>
    </div>
    
    <div class="menu">
        <a href = "<?php
      if($id_user==1) echo "./menuD.html";
      if($id_user==2) echo "./menuC.html"; ?>"><img src="/img/menu.svg" /></a>
      </div>
  </div>
  
    <div class = "header-line"></div>

    <form class = "conteiner" action="../functionas/change.php" method="post">
    
        <div class = "dis-part">
        <div class="input-container">
          <?php
         echo '<input type="text" name = "nm" id = "eme" value="'.$row['login'].'" required=""/>';
          ?>
          <label>Имя</label>		
         
      </div>
  
    <div class="input-container">
    <?php
      echo '<input type="text" name = "em" id = "eme" value="'.$row['spec'].'" required=""/>';
      ?>
        <label>Специальность</label>			
       
    </div>

    <div class="input-container">
    <?php
      echo '<input type="text" name = "em" id = "eme" value="'.$row['dis'].'" required=""/>';
      ?>
        <label>Описание</label>			
       
    </div>
</br>
    <button class = "main-func-button">сохранить</button>

    </div>
</form>
   
    <div class = "before-course conteiner">
        <p class = "text-title conteiner-child">Пройденные курсы</p>
        <div class = "button-child"></div>      
    </div>
    <?php while( $row2 = mysqli_fetch_assoc($query2)): ?>  
      <?php $idC = $row2['id_cours'];?>   
        <?php $query1 = mysqli_query($link, "SELECT `name`, `creator_id`, `photo`, `dis`, `test_dis` FROM `course` where `id` = '$idC'");?> 
          <?php while( $row3 = mysqli_fetch_assoc($query1)): ?>   
          <div class="conteiner-coures">
          <img class="course-img" src="../img/<?php echo $row3['photo']; ?>" />
          <div class = "course-discriotion">
          <p class="course-title"><?php echo $row3['name'] ?></p>
          <p class = "course-dis-discription"><?php echo $row3['dis'] ?></p>
          <a href = "<?php echo $row2['link'] ?>"><p class = "course-dis-link">Ссылка на тестовое задание</p></a>
          <span class="course-title"><?php echo $row2['mark'] ?><span>/<span>100</span>
        </div>
      </div>
    <?php endwhile; ?>
<?php endwhile; ?>
    <script src="/script.js"></script>
  </body>
</html>
