<?php
    error_reporting(0);
    $link = mysqli_connect("localhost","root","","uiux",3306);
    mysqli_set_charset($link, "utf8");
    $log = $_POST["log"];
    $email = $_POST["eme"];
    $pas = $_POST["ps1"];
    echo $log;
    echo $email;
    echo $pas;

    $query = mysqli_query($link,"INSERT INTO `designer`(`login`, `pass`, `email`, `photo`, `spec`, `dis`) VALUES ('$log','$pas','$email',null,'1','1')");
    $query1 = mysqli_query($link,"SELECT `id` FROM `designer` WHERE `login` = '$log' and `pass` = '$pas' and `email` = '$email'");

    $row = mysqli_fetch_assoc($query1);
    session_start(); 
    if($query1) { $_SESSION['id_token'] = $row['id']; header("Location: ../pages/userProfile.php"); }

    if($row['id'] == ''){ header("Location: ../pages/reg.html");};

?>