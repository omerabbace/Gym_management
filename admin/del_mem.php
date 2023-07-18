<?php
include "admin_header.php";
include "admin_footer.php";
require "config.php";
if(isset($_POST['submit'])){
    $membership_id = $_POST['membership'];
    $sql_del = "DELETE FROM `membership_type` WHERE type_id=$membership_id";
    $res = mysqli_query($conn,$sql_del);
    $sql_del_fee = "DELETE FROM `training_fee` WHERE type_id=$membership_id";
    $res_fee = mysqli_query($conn,$sql_del_fee);
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
        <h1 style="font-style: oblique; margin-left :30px">Select Membership to Delete</h1>
        </div>
    </div>
<div class="row" style="margin-left: 85px;">
  <div class="rs-select2 js-select-simple select--no-search">
    <select style="font-size: large;" name="membership" required>
<?php

$sql = "SELECT * from membership_type join training_fee on membership_type.type_id=training_fee.type_id ";
echo $sql;
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
?>
  <option disabled="disabled" selected="selected" >Membership</option>
        <?php     while($row=mysqli_fetch_assoc($result)){ ?>
        <option value="<?php echo $row['type_id'] ?>"><?php echo $row['type'] ?></option>
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
