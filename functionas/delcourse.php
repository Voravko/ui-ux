
            <?php
             session_start();
            $id_cur = $_POST['id_cur'];
            $link = mysqli_connect("localhost","root","","uiux",3306);
       
            $query1 = mysqli_query($link, "DELETE FROM `course` WHERE `id` = '$id_cur'"); 
            header("Location: ../pages/profileC.php");
              ?>
