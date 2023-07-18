<?php
include "admin_header.php";
include "admin_footer.php";
require "config.php";
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
      <th scope="col">Salary</th>
      <th scope="col">Date</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <?php
$sql = "SELECT * from person join payment on 
person.p_id=payment.person_id join salary on payment.pay_id=salary.pay_id";
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
    while($row=mysqli_fetch_assoc($result)){


?>
  <tbody>
    <tr>
      <td><?php echo $row['name'] ?></td>
      <td><?php echo $row['last_name'] ?></td>
      <td><?php echo $row['amount'] ?></td>
      <td><?php echo $row['date'] ?></td>
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
        line-height: 25px;" type="submit" href="del_sal_q.php?id=<?php echo $row['pay_id'] ?>">Delete</a></td>
        <input type="hidden" value="<?php echo $row['pay_id'] ?>" name="pay_id">

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