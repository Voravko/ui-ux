<?php
$link = mysqli_connect("localhost","root","","uiux",3306);
    mysqli_set_charset($link, "utf8");
    $mr = $_POST["mr"];
    $id = $_POST["id"];

    $query = mysqli_query($link,"UPDATE `trans` SET `mark`='$mr' WHERE `id_cours` = '$id'");
    header("Location: ../pages/mark.php");
    ?>