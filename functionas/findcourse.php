<?php 
$a = $_POST['hid'];

session_start();
$_SESSION['id_c'] = $a;
header("Location: ../pages/courseTeor.php");
?>