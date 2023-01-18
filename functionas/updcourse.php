<?php
$link = mysqli_connect("localhost","root","","uiux",3306);
    mysqli_set_charset($link, "utf8");
    $ph = $_POST["file"];
    $nm = $_POST["nm"];
    $d = $_POST["dis"];
    $dt = $_POST["dis_t"];
    $idCur = $_POST['idCur'];
    $query = mysqli_query($link,"UPDATE `course` SET `name`='$nm',`photo`='$ph',`dis`='$d',`test_dis`='$dt' WHERE `id` =  $idCur");
    if($query) { header("Location: ../pages/profileC.php"); }
    ?>