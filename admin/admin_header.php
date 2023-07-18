
<!DOCTYPE html>
  <html lang="en">
    <head>
    <meta charset="UTF-8">
    <title>
         <?php  echo "Gym Management System";?>
    </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker3.min.css" />
    <link rel="stylesheet" href="libs/css/main.css" />
  </head>
  <body>
    <header id="header">
      <div class="logo pull-left">Gym Management System</div>
      <div class="header-content">
      <div class="header-date pull-left">
      </div>
      
     </div>
    </header>
    <div class="sidebar">
        <!-- admin menu -->
      
<ul>
  <li>
    <a href="dash.php">
      <i class="glyphicon glyphicon-home"></i>
      <span>Dashboard</span>
    </a>
  </li>
  <li>
    <a href="#" class="submenu-toggle">
      <i class="glyphicon glyphicon-user"></i>
      <span>Trainer</span>
    </a>
    <ul class="nav submenu">
      <li><a href="add_trainer.php">Add Trainer</a> </li>
      <li><a href="del_trainer.php">Remove Trainer</a> </li>
      <li><a href="trainer_list.php">Update Trainer</a> </li>
    </ul>
  </li>
  <li>
    <a href="#" class="submenu-toggle" >
      <i class="glyphicon glyphicon-indent-left"></i>
      <span>Trainee</span>
    </a>
    <ul class="nav submenu">
      <li><a href="trainee_list.php">Update Trainee</a> </li>
      <li><a href="del_trainee.php">Remove Trainee</a> </li>
   </ul>
  </li>
  <li>
    <a href="#" class="submenu-toggle">
      <i class="glyphicon glyphicon-th-large"></i>
      <span>Membership</span>
    </a>
    <ul class="nav submenu">
       <li><a href="add_membership.php">Add Membership</a> </li>
       <li><a href="del_mem.php">Remove Membership</a> </li>
       <li><a href="mem_list.php">Update Membership</a> </li>
   </ul>
  </li>
  <li>
    <a href="#" class="submenu-toggle">
      <i class="glyphicon glyphicon-credit-card"></i>
       <span>Payment</span>
      </a>
      <ul class="nav submenu">
         <!-- <li><a href="#">Edit Fee</a> </li> -->
         <li><a href="salary.php">Salary</a> </li>
         <li><a href="salary_list.php">Salary Record</a> </li>
     </ul>
  </li>
  <li>
    <a href="logout.php" >
      <i class="glyphicon glyphicon-picture"></i>
      <span>Logout</span>
    </a>
  </li>
</ul>


   </div>

<div class="page">
  <div class="container-fluid">
