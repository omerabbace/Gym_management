<?php
require "config.php";
$pay_id = $_GET['id'];
$sql = "DELETE FROM `salary` WHERE pay_id=$pay_id ";
$result = mysqli_query($conn,$sql);
$sql1 = "DELETE FROM `payment` WHERE pay_id=$pay_id ";
$result1 = mysqli_query($conn,$sql1);
header("Location:salary_list.php");
?>