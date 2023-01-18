<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <link rel = "stylesheet" href="/style11.css"/>
    <link href = "verif.css" rel = "stylesheet"/>
    <title>Document</title>
</head>
<body class = "main-theme-black">
  
   
        <div class ="main-logo-name">
            DISCRAPE YOUR COURSE
        </div>
  
    <form class="main-form-verificat" method="post" action="../functionas/addcours.php">
        <div class="input-container">
            <input type="file" id="file" name="file" accept="image/jpeg" multiple/>
            <label>Фото</label>
            
        </div>
       
        <div class="input-container">
            <textarea type="text" id = "nm" name = "nm" required=""></textarea>
            <label>Назание</label>		
            
        </div>
        <div class="input-container">
            <textarea type="text" id = "dis"  name = "dis" required=""></textarea>
            <label>Описание</label>		
            
        </div>

        <div class="input-container">
            <textarea type="text" id = "dis_t" name = "dis_t" required=""></textarea>
            <label>Описание тестовой работы</label>		
            
        </div>
        <button class = "main-func-button"  >
            Создать курс
    </button>
        

    </form>
 
  <script src = "/script.js"></script>
</body>
</html>