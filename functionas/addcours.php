<?php
$link = mysqli_connect("localhost","root","","uiux",3306);
    mysqli_set_charset($link, "utf8");
    session_start();
    $id_token = $_SESSION['id_token'];
    $ph = $_POST["file"];
    $nm = $_POST["nm"];
    $d = $_POST["dis"];
    $dt = $_POST["dis_t"];

    $query = mysqli_query($link,"INSERT INTO `course`( `name`, `creator_id`, `photo`, `dis`, `test_dis`) VALUES ('$nm','$id_token','$ph','$d','$dt')");
     
    if($query) { header("Location: ../pages/course.php"); }

   else{ header("Location: ../pages/creteCourse.html");};
    ?>