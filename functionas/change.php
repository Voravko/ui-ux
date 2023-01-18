<?php
$link = mysqli_connect("localhost","root","","uiux",3306);
mysqli_set_charset($link, "utf8");
 session_start();
 $id_user = $_SESSION['id_user'];
 $id_token = $_SESSION['id_token'];
$nm = $_POST['nm'];
$em = $_POST['em'];

 if( $id_user == 1)
 {
    $query = mysqli_query($link, "UPDATE `designer` SET `login`='$nm', `email`='$em' WHERE `id` = '$id_token'");
    header("Location: ../pages/userProfile.php");
 }
 if($id_user == 2)
 {
    $query = mysqli_query($link, "UPDATE `company` SET `name`='$nm', `email`='$em' WHERE `id` = '$id_token'");
    header("Location: ../pages/profileC.php");

 }
?>