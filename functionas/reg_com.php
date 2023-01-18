<?php
    error_reporting(0);
    $link = mysqli_connect("localhost","root","","uiux",3306);
    mysqli_set_charset($link, "utf8");
    $log = $_POST["nm"];
    $email = $_POST["em"];
    $pas = $_POST["pasp"];
    $ph = $_POST["ps"];

    $query = mysqli_query($link,"INSERT INTO `company`( `name`, `email`, `pass`, `pasport`) VALUES ('$log','$email','$pas','$ph')");
    $query1 = mysqli_query($link,"SELECT `id` FROM `company` WHERE `name` = '$log' and `pass` = '$pas' and `email` = '$email'");

    $row = mysqli_fetch_assoc($query1);
    session_start(); 
  
    if($row['id'] != '') { $_SESSION['id_token'] = $row['id']; $_SESSION['id_user'] = 1; header("Location: ../pages/log.html"); }
    else
    {
  
    if($query) { $_SESSION['id_token'] = $row['id'];  $_SESSION['id_user'] = 2; header("Location: ../pages/profileC.php"); }

    if($row['id'] == ''){ header("Location: ../pages/regDis.html");};
    }

?>