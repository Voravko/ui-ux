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
    $row = [];
    session_start();
    $id_user = $_SESSION['id_user'];
    $id_token = $_SESSION['id_token'];
    $query = mysqli_query($link, "SELECT `id`,`name`,`creator_id`,`dis`,`photo` FROM `course` where creator_id = '$id_token'");
    $query1 = mysqli_query($link, "SELECT  `name`, `email` FROM `company` WHERE `id` = '$id_token'");
    $row1 = mysqli_fetch_assoc($query1);
   
    
    ?>
    <div class="header">
      <div class="logo">
       <a href = "/index.html" class = "link"> <img src="/img/logoui.svg" /></a>
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
          <input type="text" id = "eme" name = "nm" value="<?php echo $row1['name']; ?>" required=""/>
          <label>Имя</label>		
          <span id = "errer_eme" class = "erorr-message"  ></span>	
      </div>
      <div class="input-container">
        <input type="text" id = "eme" name = "em" value="<?php echo $row1['email']; ?>" required=""/>
        <label>Почта</label>		
        <span id = "errer_eme" class = "erorr-message"  ></span>	
    </div>
    <button class = "main-func-button">сохранить</button>
    </div>
    </div>
   
</form>
    <div class = "before-course conteiner">
        <p class = "text-title conteiner-child">Созданные курсы</p>
        <div class = "button-child">
        <a href = "/pages/creteCourse.php" class = "link"> <button class = "verificat-button conteiner-child">
            <p class = "verificat-button-text">Создать</p>
        </button>
        </a>
        </div>
    </div>
  <?php while($row = mysqli_fetch_assoc($query)):?>
    <form class="conteiner-coures" action="./upCourse.php" method="post">
      <input  type = "hidden" value="<?php echo $row['id'] ?>" name = "id_cur"/>
        <img class="course-img" src="<?php echo "../img/".$row['photo'];?>" /> 
        <div class = "course-discriotion">
          <p class="course-title"><?php echo $row['name'] ?></p>
          <p class = "course-dis-discription"><?php
          $short_link = substr($row['dis'], 0, 199);
          echo $short_link."..." ?></p></p>
           <div class = "bt-course"><button class = "main-func-button">Изменить курс</button></div>
        <!-- </div>
        <a href = "./upCourse.php">Обновить</a>
      </div> -->
        </div>
  </form>
  <form action="../functionas/delcourse.php" method="post">
<input  type = "hidden" value="<?php echo $row['id'] ?>" name = "id_cur"/>
     <div class = "bt-del"><button class = "main-func-button"  >
            Удалить
    </button></div>
</form>
<?php endwhile; ?>

    <script src="/script.js"></script>
  </body>
</html>
