<?php
require "config.php";
if(isset($_POST['submit'])){
  $email = $_POST['email'];
  $pass = $_POST['psw'];
  $bool = true;
  //Login For Admin
  $sql = "SELECT * FROM `account` Join admin ON account.person_id=admin.person_id where
   account.email='$email' and account.password ='$pass' ";
  //  echo $sql;
  $result = mysqli_query($conn,$sql);
  if(mysqli_num_rows($result)>0){
    while($row=mysqli_fetch_assoc($result)){
       $_SESSION['id'] = $row['person_id'];
      // if($row['person_id']==)
      $bool = false;
      header("Location: admin/index_admin.php");
    }
  }
  // Login For Trainee
  // else if(isset($bool)){
    $sql1 = "SELECT * FROM `account` Join trainee ON account.person_id=trainee.person_id where
   account.email='$email' and account.password ='$pass' ";
   $result1 = mysqli_query($conn,$sql1);
   if(mysqli_num_rows($result1)>0){
    while($row=mysqli_fetch_assoc($result1)){
      session_start();
      $_SESSION['id'] = $row['person_id'];
      $bool = false;
      header("Location: index_trainee.php?id=$row[person_id]" );
    }
  }
  // }
  // Login For Trainer
  // else if(isset($bool)){
    $sql2 = "SELECT * FROM `account` Join trainer ON account.person_id=trainer.person_id where
   account.email='$email' and account.password ='$pass' ";
  //  echo $sql2;
   $result2 = mysqli_query($conn,$sql2);
   if(mysqli_num_rows($result2)>0){
    while($row=mysqli_fetch_assoc($result2)){
      session_start();
      $_SESSION['id'] = $row['person_id'];
      $bool = false;
      header("Location:trainer_/trainer_index.php?id=$row[person_id]");
    }
  }
  // }

   if($bool==true)  {
    header("Location: login.php?error=1");
  }

}
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=email], input[type=password] {
  width: 60;
  padding: 11px 20px;
  margin: 8px 10px;
  /* display: inline-block; */
  border: 1px solid #ccc;
  box-sizing: border-box;
}
input[type=email]{
  margin-left: 40px;
}

button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  /* width: 20%; */
  margin-left: 5%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;

}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<body>

<h2>Login </h2>
<h3><?php if(isset($_GET['error'])){echo "Incorrect email or password";}  ?></h3>

<form action="" method="post">
  <div class="imgcontainer">
    <!-- <img src="img_avatar2.png" alt="Avatar" class="avatar"> -->
  </div>

  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-6 col-xs-6">
    <label for="uname"><b>Email</b></label>
    <input type="email" placeholder="Enter email" name="email" required>
  </div>
  <div class="row">
    <div class="col-lg-6 col-md-6 col-xs-6">

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
        </div>
        </div>
    <button type="submit" class="btn btn-primary" name="submit">Login</button>
    <label>
      <!-- <input type="checkbox" checked="checked" name="remember"> Remember me -->
    </label>
    <!-- <button type="button">Cancel</button> -->
    <!-- <span class="psw">Forgot <a href="#">password?</a></span> -->
  </div>
  <div class="col-lg-6 col-md-6 col-xs-6">
    <p>Don't have account</p>
    <a href="signup.php">Sign up</a>
  </div>

</form>



</body>
</html>
