<?php
include "admin_header.php";
include "admin_footer.php";
require "config.php";


$id=$_GET['id'];
$sql = "SELECT * from membership_type join training_fee on 
membership_type.type_id=training_fee.type_id where membership_type.type_id=$id"; 
//  echo $sql;
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
    while($row=mysqli_fetch_assoc($result)){
        $type_id =$row['type_id'];
        $name= $row['type'];
        $fee=$row['fee'];
        

        if(isset($_POST['submit'])){
            $name = $_POST['name'];
            $fe = $_POST['fee'];
            $sql_type ="UPDATE `membership_type` SET `type`= '{$name}' WHERE type_id=$type_id ";
            // echo $sql_type;
            $sql_fee = "UPDATE `training_fee` SET `type_id`=$type_id,`fee`=$fe WHERE type_id=$type_id";
            $res1 = mysqli_query($conn,$sql_type);
            $res2 = mysqli_query($conn,$sql_fee);
            header("Location: mem_list.php");
            
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
    <label for="l_name" style="margin-right: 100px; margin-top: 15px;"><b>Fee</b></label>
    <input required type="text"  placeholder="" value="<?php echo $fee; ?>" name="fee" >
  </div>
    </div>
 
    <br>
    <div class="row" style="font-size: large;">
      <div class="col-lg-6 col-md-6 col-xs-6">
        <input type="submit" name="submit" value="Submit" style="margin-left: 140px; background-color:red; color:white;border-radius: 5px;line-height: 25px;">
        </input>

<a href="trainee_list.php" 
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