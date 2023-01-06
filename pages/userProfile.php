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
  
    <?php
    $link = mysqli_connect("localhost", "root", "", "uiux", 3306);
    mysqli_set_charset($link, "utf8");
    session_start();
    $id_token = $_SESSION['id_token'];
    $query = mysqli_query($link, "SELECT * FROM `designer` WHERE `id` = '$id_token'");
    $row = mysqli_fetch_assoc($query);
    ?>
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
          <?php
         echo '<input type="text" id = "eme" value="'.$row['login'].'" required=""/>'
          ?>
          <label>NAME</label>		
         
      </div>
  
    <div class="input-container">
    <?php
      echo '<input type="text" id = "eme" value="'.$row['email'].'" required=""/>'
      ?>
        <label>E-MAIL</label>			
       
    </div>
    </div>
    </div>
   
    <div class = "before-course conteiner">
        <p class = "text-title conteiner-child">ABOUT</p>
        <div class = "button-child">
       
        </div>
        
    </div>

    <div class="conteiner-coures">
        <img class="course-img" src="/img/testp.png" />
  
        <div class = "course-discriotion">
          <p class="course-title">ABSTRACT COURSE</p>
          <p class="course-title-dis">SIFOFTIT company</p>
          <p class = "course-dis-discription">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
          <a href = "/https://www.figma.com/file/BfbrzeE7b715gFKnfZMous/Untitled?node-id=323%3A2"><p class = "course-dis-link">Ссылка на тестовое задание</p></a>
          <span class="course-title">100<span>/<span>100</span>
        
        </div>
      </div>

      <div class="conteiner-coures">
        <img class="course-img" src="/img/testp.png" />
  
        <div class = "course-discriotion">
          <p class="course-title">ABSTRACT COURSE</p>
          <p class="course-title-dis">SIFOFTIT company</p>
          <p class = "course-dis-discription">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
          <a href = "/https://www.figma.com/file/BfbrzeE7b715gFKnfZMous/Untitled?node-id=323%3A2"><p class = "course-dis-link">Ссылка на тестовое задание</p></a>
          <span class="course-title">0<span>/<span>100</span>
        
        </div>
      </div>

      <div class="conteiner-coures">
        <img class="course-img" src="/img/testp.png" />
  
        <div class = "course-discriotion">
          <p class="course-title">ABSTRACT COURSE</p>
          <p class="course-title-dis">SIFOFTIT company</p>
          <p class = "course-dis-discription">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
          <a href = "/https://www.figma.com/file/BfbrzeE7b715gFKnfZMous/Untitled?node-id=323%3A2"><p class = "course-dis-link">Ссылка на тестовое задание</p></a>
          <span class="course-title">-<span>/<span>100</span>
        
        </div>
      </div>

    
    <script src="/script.js"></script>
  </body>
</html>
