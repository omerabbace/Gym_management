<?php
include "admin_header.php";
include "admin_footer.php";
require "config.php";
if(isset($_POST['submit'])){
    $trainee_id = $_POST['trainee'];
    $sql = "SELECT * from person join trainee on person.p_id=trainee.person_id ";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0){
      while($row=mysqli_fetch_assoc($result)){
        $person_id =$row['p_id'];
    }
  }
    $sql_del_fee = "DELETE FROM `fee` WHERE trainee_id=$trainee_id";
    $res_del_fee = mysqli_query($conn,$sql_del_fee);
    $sql_del = "DELETE FROM `trainee` WHERE id=$trainee_id";
    $res = mysqli_query($conn,$sql_del);
    $sql_del_ad = "DELETE FROM `address` WHERE person_id=$person_id ";
    $res_del_ad =mysqli_query($conn,$sql_del_ad);
    $sql_del_acc ="DELETE FROM `account` WHERE person_id=$person_id ";
    $res_del_acc = mysqli_query($conn,$sql_del_acc);
    $sql_del_person = "DELETE FROM `person` WHERE p_id=$person_id";
    $res_del_person = mysqli_query($conn,$sql_del_person);

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
<form action="" method="post">
<div class="container">
    <div class="row">
        <div class="col-xl-12 col-sm-6 col-xs-5 col-md-12 col-lg-12">
        <h1 style="font-style: oblique; margin-left :30px">Select Trainee to Delete</h1>
        </div>
    </div>
<div class="row" style="margin-left: 85px;">
  <div class="rs-select2 js-select-simple select--no-search">
    <select style="font-size: large;" name="trainee" required>
<?php

$sql = "SELECT * from person join trainee on person.p_id=trainee.person_id ";
echo $sql;
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
?>
  <option disabled="disabled" selected="selected" >Trainee</option>
        <?php     while($row=mysqli_fetch_assoc($result)){ ?>
        <option value="<?php echo $row['id'] ?>"><?php echo $row['name'] ?></option>
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
        <input type="submit" name="submit" value="Submit" style="margin-left: 80px; background-color:red; color:white;border-radius: 5px;line-height: 25px;">
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
