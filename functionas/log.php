
<?php 
// error_reporting(0);
$link = mysqli_connect("localhost", "root", "", "uiux",3306);
mysqli_set_charset($link, "utf8");

$log = $_POST["log"];
$email = $_POST["eme"];
$pas = $_POST["ps1"];



$query = mysqli_query($link, "SELECT `id` FROM `designer` WHERE `login` = '$log' and `pass` = '$pas' and `email` = '$email'");
$query1 = mysqli_query($link, "SELECT `id` FROM `company` WHERE `name` = '$log' and `pass` = '$pas' and `email` = '$email'");

session_start();

if($query) { 
$row = mysqli_fetch_assoc($query);
$_SESSION['id_token'] = $row['id'];   $_SESSION['id_user'] = 1; header("Location: ../pages/userProfile.php"); }

if($row['id'] == ''){
    
$row1 = mysqli_fetch_assoc($query1);

if($query) { $_SESSION['id_token'] = $row1['id'];   $_SESSION['id_user'] = 2; header("Location: ../pages/profileC.php"); }   
if($row1['id'] == '')
{
    header("Location: ../pages/log.html");};
}

?>