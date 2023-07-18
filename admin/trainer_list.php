<?php
include "admin_header.php";
include "admin_footer.php";
require "config.php";
// $id = $_SESSION['id'];
// $name = $_POST['name'];
// $l_name = $_POST['l_name'];
// $age =  $_POST['age'];
// $contact =  $_POST['contact'];
// $city =  $_POST['city'];
// $town =  $_POST['town'];
// $street = $_POST['street'];
// $house =  $_POST['house'];
// $email =  $_POST['email'];
// $password =  $_POST['password'];
// $sql_person ="UPDATE `person` SET `name`='$name'
// ,`last_name`='$l_name',`contact`='$contact',`age`='$age' WHERE p_id=$id ";
// $sql_address = "UPDATE `address` SET `city`='$city',
// `town`='$town',`street`='$street',`house`='$house' WHERE person_id=$id";
// $sql_acc ="UPDATE `account` SET `email`='$email',
// `password`='$password' WHERE person_id=$id";
// $res1 = mysqli_query($conn,$sql_person);
// $res2 = mysqli_query($conn,$sql_address);
// $res3 = mysqli_query($conn,$sql_acc);
// header("Location: about_trainee.php");
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
<form action="up_trainer.php" method="post">
<div class="container">
<table class="table table-bordered" style="margin-top:20px;  margin-left:40px">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Age</th>
      <th scope="col">Contact</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <?php
$sql = "SELECT * from person join trainer on trainer.person_id=person.p_id";
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
    while($row=mysqli_fetch_assoc($result)){


?>
  <tbody>
    <tr>
      <td><?php echo $row['name'] ?></td>
      <td><?php echo $row['last_name'] ?></td>
      <td><?php echo $row['age'] ?></td>
      <td><?php echo $row['contact'] ?></td>
      <td><a style=" padding-right:6px;
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
        line-height: 25px;" type="submit" href="up_trainer.php?id=<?php echo $row['trainer_id'] ?>">Edit</a></td>
        <input type="hidden" value="<?php echo $row['trainer_id'] ?>" name="trainer_id">

    </tr>
  </tbody>
  <?php
    }
}
  ?>
</table>
</div>
</form>
</main>
</html>