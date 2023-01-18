<!DOCTYPE html>
<html lang="en">
<head>
    <link rel = "stylesheet" href="../style11.css"/>
    <link href = "verif.css" rel = "stylesheet"/>
    <meta charset="utf-8">
    <title>Document</title>
</head>
<body class = "main-theme-black">

<div class = "c-conteiner">
<div class = "choice-conteiner" onclick="dis_red()">
    <div class = "choice-conteiner-img"><img src = "../img/dis.svg"/></div>
    <div class = "choice-conteiner-dis">Я дизайнер</div>
</div>
<script>
    function dis_red()
    {
      <?php 
      session_start();
      $_SESSION['id_user'] = 1;
     
      ?>
      window.location.href = './reg.html';
    }
</script>
  <div class = "choice-conteiner" onclick="dis_com()">
    <div class = "choice-conteiner-img"><img src = "../img/com.svg"/></div>
    <div class = "choice-conteiner-dis">Я предстовиель компании</div>
  </div>

  <script>
    function dis_com()
    {
      <?php 
      session_start();
      $_SESSION['id_user'] = 2;
      
      ?>
      window.location.href = './regDis.html';
      
    }
</script>
</div>
  <script src = "/script.js"></script>
</body>
</html>