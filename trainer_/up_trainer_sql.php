<?php
include "session.php";
require "../config.php";
include "../session.php";
$id = $_SESSION['id'];
$name = $_POST['name'];
$l_name = $_POST['l_name'];
$age =  $_POST['age'];
$contact =  $_POST['contact'];
$city =  $_POST['city'];
$town =  $_POST['town'];
$street = $_POST['street'];
$house =  $_POST['house'];
$email =  $_POST['email'];
$password =  $_POST['password'];
$sql_person ="UPDATE `person` SET `name`='$name'
,`last_name`='$l_name',`contact`='$contact',`age`='$age' WHERE p_id=$id ";
$sql_address = "UPDATE `address` SET `city`='$city',
`town`='$town',`street`='$street',`house`='$house' WHERE person_id=$id";
$sql_acc ="UPDATE `account` SET `email`='$email',
`password`='$password' WHERE person_id=$id";
$res1 = mysqli_query($conn,$sql_person);
$res2 = mysqli_query($conn,$sql_address);
$res3 = mysqli_query($conn,$sql_acc);
header("Location: about_trainer.php?id=$id");
?>