<?php
require "../config.php";
include "../session.php";
 $id1 = $_GET['id'];
 $sql = "DELETE FROM `diet_plan` WHERE trainer_id=$id1 ";
 echo $sql;
 $result = mysqli_query($conn,$sql);
 header("Location:assign_diet.php?id=$id1");
?>