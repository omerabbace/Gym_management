<?php
include "admin_header.php";
include "admin_footer.php";
require "config.php";
if(isset($_POST['submit'])){
    $salary=$_POST['salary'];
    $date = $_POST['date'];
    $trainer_id=$_POST['trainer'];
    $account = $_POST['account'];
    $sql = "SELECT * from person join trainer on person.p_id=trainer.person_id where trainer_id=$trainer_id ";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0){
        while($row=mysqli_fetch_assoc($result)){
            $person_id = $row['p_id'];
        }
    }
    $sql1 = "INSERT INTO `payment`( `person_id`,`date`, `amount`, `acc_number`)
    VALUES ($person_id,'$date',$salary,$account)";
    // echo $sql1;
    $re = mysqli_query($conn,$sql1);
    $sql_sel = "SELECT * FROM `payment` WHERE person_id=$person_id";
    $res_sel = mysqli_query($conn,$sql_sel);
    if(mysqli_num_rows($res_sel)>0){
        while($r=mysqli_fetch_assoc($res_sel)){
            $pay_id = $r['pay_id'];
        }
    }
    $sql_salary = "INSERT INTO `salary`( `trainer_id`, `pay_id`) VALUES ($trainer_id,$pay_id)";
    $res_salary = mysqli_query($conn,$sql_salary);
    header("Location: salary_list.php");

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
    <label for="l_name" style="margin-right: 75px; margin-top: 15px;"><b>Salary</b></label>
    <input required type="text"  placeholder="" value="" name="salary" >
  </div>
    </div>
    <div class="row" style="font-size: large;">
      <div class="col-lg-6 col-md-6 col-xs-6">
    <label for="l_name" style="margin-right: 58px; margin-top: 15px;"><b>Account</b></label>
    <input required type="text"  placeholder="" value="" name="account" >
  </div>
    </div>
    <div class="form-group">
    <label style="font-size:large ;margin-right: 85px;" for="date">Date:</label>
    <input style="font-size:large ;margin-right: 100px; margin-top: 15px;" type="date" id="date" name="date">
    </div>
    <div class="row" style="margin-left: 135px;">
  <div class="rs-select2 js-select-simple select--no-search">
    <select style="font-size: large;" name="trainer" required>
<?php

$sql = "SELECT * from person join trainer on person.p_id=trainer.person_id ";
// echo $sql;
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
?>
  <option disabled="disabled" selected="selected" >Trainer</option>
        <?php     while($row=mysqli_fetch_assoc($result)){ ?>
        <option value="<?php echo $row['trainer_id'] ?>"><?php echo $row['name'] ?></option>
        <?php
    }
}
?>
        </select>

        <div class ="select-dropdown"></div>

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