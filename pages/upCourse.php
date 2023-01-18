<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <link rel = "stylesheet" href="/style11.css"/>
    <link href = "verif.css" rel = "stylesheet"/>
    <title>Document</title>
</head>
<body class = "main-theme-black">
<?php 
    $link = mysqli_connect("localhost", "root", "", "uiux",3306);
    mysqli_set_charset($link, "utf8");
    
    session_start();
    $id_cur = $_POST['id_cur'];
    $query = mysqli_query($link, "SELECT `id`, `name`, `creator_id`, `photo`, `dis`, `test_dis` FROM `course` WHERE  `id` = '$id_cur'");
    $row = mysqli_fetch_assoc($query);
    
    ?>
    
        <div class ="main-logo-name">
            DISCRAPE YOUR COURSE
        </div>
  
    <form class="main-form-verificat" method="post" action="../functionas/updcourse.php">
        <input name = "idCur" value = "<?php echo $row['id']?>"  type = "hidden"/>
        <div class="input-container">
            <input type="file" id="file" name="file" accept="image/jpeg" value = "" multiple/>
            <label>Фото</label>
        </div>
       
        <div class="input-container">
            <textarea type="text" id = "nm" name = "nm" required="" ><?php echo $row['name']?></textarea>
            <label>Назание</label>		
            
        </div>
        <div class="input-container">
            <textarea type="text" id = "dis"  name = "dis" required="" ><?php echo $row['dis']?></textarea>
            <label>Описание</label>		
            
        </div>

        <div class="input-container">
            <textarea type="text" id = "dis_t" name = "dis_t" required="" ><?php echo $row['test_dis']?></textarea>
            <label>Описание тестовой работы</label>		
            
        </div>
        <button class = "main-func-button"  >
            Обновить курс
    </button>
    </form>
   
 
  <script src = "/script.js"></script>
</body>
</html>