<?php
include "admin_header.php";
include "admin_footer.php";
require "config.php";
if(isset($_POST['submit'])){
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
$sql_person ="INSERT INTO `person`(`name`, `last_name`, `contact`, `age`)
VALUES ('$name', '$l_name', '$contact', '$age') ";
// echo $sql_person;
$res_person = mysqli_query($conn,$sql_person);
$sel_person = "SELECT * FROM `person` WHERE name = '$name' And last_name='$l_name' ";
$res_sel_person = mysqli_query($conn,$sel_person);
if(mysqli_num_rows($res_sel_person)>0){
    while($row = mysqli_fetch_assoc($res_sel_person)){
        $id = $row['p_id'];
    }
}
// echo $id;
$sql_acc = "INSERT INTO `account`(`person_id`, `email`, `password`)
 VALUES ($id,'$email','$password' )";
 $res_acc = mysqli_query($conn,$sql_acc);
$sel_acc = "SELECT * FROM `account` WHERE person_id=$id";
$res_sel_acc = mysqli_query($conn,$sel_acc);
if(mysqli_num_rows($res_sel_acc)>0){
    while($row1=mysqli_fetch_assoc($res_sel_acc)){
        $acc_id = $row1['id'];
    }
}
$sql_trainer ="INSERT INTO `trainer`(`acc_id`, `person_id`) VALUES ($acc_id,$id)";
$res_trainer = mysqli_query($conn,$sql_trainer);
$sql_address ="INSERT INTO `address`( `person_id`, `city`,
`town`, `street`, `house`) VALUES ('$id','$city','$town','$street','$house')";
$res_address=mysqli_query($conn,$sql_address);



header("Location: trainer_list.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<main>
<form action="" method="post">
<div class="container"
style="margin-top: 20px;margin-right: 180px;">
<div class="row" style="font-size: large;">
      <div class="col-lg-6 col-md-6 col-xs-6">
    <label for="name" style="margin-right: 80px;margin-top: 15px;"><b>Name</b></label>
    <input required type="text"  placeholder="" value="" name="name" >
  </div>
    </div>
    <div class="row" style="font-size: large;">
      <div class="col-lg-6 col-md-6 col-xs-6">
    <label for="l_name" style="margin-right: 40px; margin-top: 15px;"><b>Last Name</b></label>
    <input required type="text"  placeholder="" value="" name="l_name" >
  </div>
    </div>
    <div class="row" style="font-size: large;">
      <div class="col-lg-6 col-md-6 col-xs-6">
    <label for="age" style="margin-right: 97px; margin-top: 15px;"><b>Age</b></label>
    <input required type="text"  placeholder="" value="" name="age" >
  </div>
    </div>
    <div class="row" style="font-size: large;">
      <div class="col-lg-6 col-md-6 col-xs-6">
    <label for="contact" style="margin-right: 65px; margin-top: 15px;"><b>Contact</b></label>
    <input required type="text" placeholder="" value="" name="contact" >
  </div>
    </div>
    <div class="row" style="font-size: large;">
      <div class="col-lg-6 col-md-6 col-xs-6">
    <label for="city" style="margin-right: 100px; margin-top: 15px;"><b>City</b></label>
    <input required type="text"  placeholder="" value="" name="city" >
  </div>
    </div>
    <div class="row" style="font-size: large;">
      <div class="col-lg-6 col-md-6 col-xs-6">
    <label for="town" style="margin-right: 90px; margin-top: 15px;"><b>Town</b></label>
    <input required type="text"  placeholder="" value="" name="town" >
  </div>
    </div>
    <div class="row" style="font-size: large;">
      <div class="col-lg-6 col-md-6 col-xs-6">
    <label for="street" style="margin-right: 87px; margin-top: 15px;"><b>Street</b></label>
    <input required type="text"  placeholder="" value="" name="street" >
  </div>
    </div>
    <div class="row" style="font-size: large;">
      <div class="col-lg-6 col-md-6 col-xs-6">
    <label for="house" style="margin-right: 85px; margin-top: 15px;"><b>House</b></label>
    <input required type="text" placeholder="" value="" name="house" >
  </div>
    </div>
    <div class="row" style="font-size: large;">
      <div class="col-lg-6 col-md-6 col-xs-6">
    <label for="email" style="margin-right: 94px; margin-top: 15px;"><b>Email</b></label>
    <input required type="email"  placeholder="" value="" name="email" >
  </div>
    </div>
    <div class="row" style="font-size: large;">
      <div class="col-lg-6 col-md-6 col-xs-6">
    <label for="password" style="margin-right: 58px; margin-top: 15px;"><b>Password</b></label>
    <input required type="text"  placeholder="" value="" name="password" >
  </div>
    </div>
    <br>
    <div class="row" style="font-size: large;">
      <div class="col-lg-6 col-md-6 col-xs-6">
        <input type="submit" name="submit" value="Submit" style="margin-left: 140px; background-color:red; color:white;border-radius: 5px;line-height: 25px;">
        </input>

<a href="dash.php" 
        style=" padding-right:6px;
        padding-left:6px;
        padding-top:6px;
        padding-bottom:6px;
        width:80px;
        margin-top:40px;
        margin-left:15px;
        background: red;
        text-align: center;
        border-radius: 5px;
        color: white;
        font-weight: bold;
        line-height: 25px;">Cancel</a>
    
  </div>
    </div>

</div>
</form>
</main>
</html>