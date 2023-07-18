<?php
require "../config.php";
include "../session.php";
 $id1 = $_SESSION['id'];
 $trainee_id = $_GET['id'];
 $sql = "DELETE FROM `assign_trainer` WHERE trainee_id=$trainee_id ";
 $result = mysqli_query($conn,$sql);
 header("Location:my_trainee.php?id=$id1");
?>