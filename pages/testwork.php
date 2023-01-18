<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="course1.css" />
    <link rel = "stylesheet" href="/style11.css"/>
    <link href = "verif.css" rel = "stylesheet"/>

    <title>Document</title>
</head>
<body class = "theme-dark">
<?php 

$link = mysqli_connect("localhost", "root", "", "uiux",3306);
mysqli_set_charset($link, "utf8");
session_start();
$id_c = $_SESSION['id_c'];
$query = mysqli_query($link, "SELECT `photo`,`test_dis` FROM `course` where `id` =  '$id_c'");
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
          <img src="/img/menu.svg" />
        </div>
      </div>

      <form  class = "course" action="../functionas/transcourse.php" method="post">
        <div class ="course-main-picture" style = "background-image: url(../img/<?php echo $row['photo']; ?>);">
        
        </div>
        <p class = "dis-text">
        <?php echo $row['test_dis'];?>
      </p>
       <div class = "link">
        <div class="input-container1">
            <input type="text" id = "ps1" name = "test_link" required=""/>
            <label>LINK</label>		
            <span class = "erorr-message" id = "error_ps" ></span>
        </div>
      </div>
      <button class = "main-func-button t_o">Отправить на проверку</button>
</form>
    
</body>
</html>