<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Document</title>
    <link rel="stylesheet" href="course.css" />
    <link rel = "stylesheet" href="/style.css"/>
    <link rel = "stylesheet" href="verif.css"/>
  </head>


  <body class="theme-dark">
    
    <div class="header">
      <div class="logo">
       <a href = "/index.html" class = "link"> <img src="/img/logoui.svg" /></a>
      </div>
      <div class="title">
        <p>COURSE</p>
      </div>
      
      <div class="menu">
        <a href = "menuD.html"><img src="/img/menu.svg" /></a>
      </div>
    </div>
  
    <div class = "header-line"></div>

    <div class = "conteiner">
        <p class = "text-title">ABOUT</p>
        <div><img class = "picture-profile" src = "/img/cat.jpg"/></div>
        <div class = "dis-part">
        <div class="input-container">
          <input type="text" id = "eme" value="ELIZABETH" required=""/>
          <label>NAME</label>		
          <span id = "errer_eme" class = "erorr-message"  ></span>	
      </div>
      <div class="input-container">
        <input type="text" id = "eme" value="UI UX designer" required=""/>
        <label>SPECIAL</label>		
        <span id = "errer_eme" class = "erorr-message"  ></span>	
    </div>
    </div>
    </div>
    <div class = "dis-text">
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
    </div>
    <div class = "before-course conteiner">
        <p class = "text-title conteiner-child">ABOUT</p>
        <div class = "button-child">
        <a href = "/pages/creteCourse.php" class = "link"> <button class = "verificat-button conteiner-child">
            <p class = "verificat-button-text">CREATE</p>
        </button>
        </a>
        </div>
        
    </div>

    <div class="conteiner-coures">
    <?php 
    session_start();
    $_SESSION['id_cur'] = 7?>
        <img class="course-img" src="/img/testp.png" />
  
        <div class = "course-discriotion">
          <p class="course-title">ABSTRACT COURSE</p>
          <p class="course-title-dis">SIFOFTIT company</p>
          <p class = "course-dis-discription">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
          <img class = "course-next-line" src = "/img/learned.png"/>
        </div>
        <a href = "./upCourse.php">update</a>

      </div>
      <button class = "verificat-button" type="submit" onclick="del()">
            <p class = "verificat-button-text">Удалить</p>
    </button>
    <script>
        function del()
        {
            <?php
              $id_cur = 9;
              $link = mysqli_connect("localhost","root","","uiux",3306);
              mysqli_set_charset($link, "utf8");
              $query1 = mysqli_query($link, "DELETE FROM `course` WHERE `id` = '$id_cur'"); 
              header("Location:./compForComp.php");
              ?>
        }

    </script>

    
    <script src="/script.js"></script>
  </body>
</html>
