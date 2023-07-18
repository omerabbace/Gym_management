<?php
require "config.php";
$trainee_id = $_GET["id"];
$sql = "DELETE FROM `membership` WHERE trainee_id=$trainee_id ";
$result = mysqli_query($conn,$sql);
header("Location:membership.php");
?>