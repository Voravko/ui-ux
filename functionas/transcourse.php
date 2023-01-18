<?php

$link = mysqli_connect("localhost","root","","uiux",3306);
    mysqli_set_charset($link, "utf8");
    $ln = $_POST["test_link"];

    session_start();
    $id_token = $_SESSION['id_token'];
    $id_c = $_SESSION['id_c'];
    
    $query1 = mysqli_query($link,"SELECT `creator_id` FROM `course` WHERE `id` = '$id_c'");
    $row = mysqli_fetch_assoc($query1);
    $a = $row['creator_id'];
    $query = mysqli_query($link,"INSERT INTO `trans`( `id_dis`, `id_com`, `id_cours`, `mark`, `link`) VALUES ('$id_token','$a','$id_c',0,'$ln')");
    // echo $id_token." ".$a." ".$id_c." ".$ln;


    if($query) { header("Location: ../pages/userProfile.php"); }

    else{ header("Location: ../pages/testwork.html");};
  

?>