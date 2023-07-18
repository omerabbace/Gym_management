<?php
include "admin_header.php";
include "admin_footer.php";
require "config.php";


$trainer_id =$_GET['id'];
$sql = "SELECT * from person join trainer on person.p_id=trainer.person_id
join account on person.p_id=account.person_id JOIN
address on account.person_id=address.person_id where trainer_id=$trainer_id"; 
//  echo $sql;
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
    while($row=mysqli_fetch_assoc($result)){
        $person_id =$row['p_id'];
        $name= $row['name'];
        $l_name=$row['last_name'];
        $age=$row['age'];
        $contact=$row['contact'];
        $city=$row['city'];
        $town = $row['town'];
        $street = $row['street'];
        $house = $row['house'];
        $email = $row['email'];
        $password = $row['password'];

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
            $sql_person ="UPDATE `person` SET `name`='$name'
            ,`last_name`='$l_name',`contact`='$contact',`age`='$age' WHERE p_id=$person_id ";
            echo $sql_person;
            $sql_address = "UPDATE `address` SET `city`='$city',
            `town`='$town',`street`='$street',`house`='$house' WHERE person_id=$person_id";
            $sql_acc ="UPDATE `account` SET `email`='$email',
            `password`='$password' WHERE person_id=$person_id";
            $res1 = mysqli_query($conn,$sql_person);
            $res2 = mysqli_query($conn,$sql_address);
            $res3 = mysqli_query($conn,$sql_acc);
            header("Location: trainer_list.php");
            
            }
    }
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
    <input required type="text"  placeholder="" value="<?php echo $name; ?>" name="name" >
  </div>
    </div>
    <div class="row" style="font-size: large;">
      <div class="col-lg-6 col-md-6 col-xs-6">
    <label for="l_name" style="margin-right: 40px; margin-top: 15px;"><b>Last Name</b></label>
    <input required type="text"  placeholder="" value="<?php echo $l_name; ?>" name="l_name" >
  </div>
    </div>
    <div class="row" style="font-size: large;">
      <div class="col-lg-6 col-md-6 col-xs-6">
    <label for="age" style="margin-right: 97px; margin-top: 15px;"><b>Age</b></label>
    <input required type="text"  placeholder="" value="<?php echo $age; ?>" name="age" >
  </div>
    </div>
    <div class="row" style="font-size: large;">
      <div class="col-lg-6 col-md-6 col-xs-6">
    <label for="contact" style="margin-right: 65px; margin-top: 15px;"><b>Contact</b></label>
    <input required type="text" placeholder="" value="<?php echo $contact; ?>" name="contact" >
  </div>
    </div>
    <div class="row" style="font-size: large;">
      <div class="col-lg-6 col-md-6 col-xs-6">
    <label for="city" style="margin-right: 100px; margin-top: 15px;"><b>City</b></label>
    <input required type="text"  placeholder="" value="<?php echo $city; ?>" name="city" >
  </div>
    </div>
    <div class="row" style="font-size: large;">
      <div class="col-lg-6 col-md-6 col-xs-6">
    <label for="town" style="margin-right: 90px; margin-top: 15px;"><b>Town</b></label>
    <input required type="text"  placeholder="" value="<?php echo $town; ?>" name="town" >
  </div>
    </div>
    <div class="row" style="font-size: large;">
      <div class="col-lg-6 col-md-6 col-xs-6">
    <label for="street" style="margin-right: 87px; margin-top: 15px;"><b>Street</b></label>
    <input required type="text"  placeholder="" value="<?php echo $street; ?>" name="street" >
  </div>
    </div>
    <div class="row" style="font-size: large;">
      <div class="col-lg-6 col-md-6 col-xs-6">
    <label for="house" style="margin-right: 85px; margin-top: 15px;"><b>House</b></label>
    <input required type="text" placeholder="" value="<?php echo $house; ?>" name="house" >
  </div>
    </div>
    <div class="row" style="font-size: large;">
      <div class="col-lg-6 col-md-6 col-xs-6">
    <label for="email" style="margin-right: 94px; margin-top: 15px;"><b>Email</b></label>
    <input required type="email"  placeholder="" value="<?php echo $email; ?>" name="email" >
  </div>
    </div>
    <div class="row" style="font-size: large;">
      <div class="col-lg-6 col-md-6 col-xs-6">
    <label for="password" style="margin-right: 58px; margin-top: 15px;"><b>Password</b></label>
    <input required type="text"  placeholder="" value="<?php echo $password; ?>" name="password" >
  </div>
    </div>
    <br>
    <div class="row" style="font-size: large;">
      <div class="col-lg-6 col-md-6 col-xs-6">
        <input type="submit" name="submit" value="Submit" style="margin-left: 140px; background-color:red; color:white;border-radius: 5px;line-height: 25px;">
        </input>

<a href="trainer_list.php" 
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