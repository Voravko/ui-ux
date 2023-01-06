
<?php 
// error_reporting(0);
$link = mysqli_connect("localhost", "root", "", "uiux",3306);
mysqli_set_charset($link, "utf8");

$log = $_POST["log"];
$email = $_POST["eme"];
$pas = $_POST["ps1"];



$query = mysqli_query($link, "SELECT `id` FROM `designer` WHERE `login` = '$log' and `pass` = '$pas' and `email` = '$email'");
$row = mysqli_fetch_assoc($query);
session_start(); 
if($query) { $_SESSION['id_token'] = $row['id']; header("Location: ../pages/userProfile.php"); }

if($row['id'] == ''){ header("Location: ../pages/log.html");};
?>