<?php
    error_reporting(0);
    $link = mysqli_connect("localhost","root","","uiux",3306);
    mysqli_set_charset($link, "utf8");
    $log = $_POST["log"];
    $email = $_POST["eme"];
    $pas = $_POST["ps1"];
    $ph = $_POST["file"];
    $spec = $_POST["spec"];
    $dis = $_POST["dis"];

    

    $query = mysqli_query($link,"INSERT INTO `designer`(`login`, `pass`, `email`, `photo`, `spec`, `dis`) VALUES ('$log','$pas','$email','$ph','$spec','$dis')");
    $query1 = mysqli_query($link,"SELECT `id` FROM `designer` WHERE `login` = '$log' and `pass` = '$pas' and `email` = '$email'");

    $row = mysqli_fetch_assoc($query1);
    session_start(); 
  
    if($query1) { $_SESSION['id_token'] = $row['id']; $_SESSION['id_user'] = 1; header("Location: ../pages/log.php"); }
    else
    {
  
    if($query) { $_SESSION['id_token'] = $row['id']; $_SESSION['id_user'] = 1; header("Location: ../pages/userProfile.php"); }


    if($row['id'] == ''){ header("Location: ../pages/reg.html");};
    }

?>