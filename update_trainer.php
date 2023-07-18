<?php
require "config.php";
include "session.php";
if(isset($_POST['submit'])){
    $trainer_id = $_POST['trainer_id'];
    $id_trainee = $_SESSION['id'];
    // echo $trainer_id;
    // $sql = "INSERT INTO `assign_trainer`(trainer_id, trainee_id) VALUES ($trainer_id,$id_trainee)";
    $sql ="UPDATE `assign_trainer` SET `trainer_id`= $trainer_id where trainee_id=$id_trainee ";
    echo $sql;
    $result=mysqli_query($conn,$sql);
    header("Location: my_trainer.php");


}

?>
<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Gym trainee</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/gijgo.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/animated-headline.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="black-bg">
    <!-- ? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/loder1.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <header>
        <?php include "c_header.php" ?>
</header>
<main>
    <!--? Hero Start -->
    <div class="slider-area2">
        <div class="slider-height2 d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap hero-cap2 pt-70">
                            <h2>Assign Trainer</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</main>

<div class="container">
    <form action="" method="post">
<table class="table table-bordered" style="color: white; font-size:large;">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Age</th>
      <th scope="col">Contact</th>
      <th scope="col">Email</th>
    </tr>
  </thead>
  <?php
$sql = "SELECT  * from trainer join person on trainer.person_id=person.p_id join 
account on account.person_id=trainer.person_id ";
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
    while($row=mysqli_fetch_assoc($result)){


?>
  <tbody>
    <tr>
      <th scope="row"><?php echo $row['name'] ?></th>
      <td><?php echo $row['last_name'] ?></td>
      <td><?php echo $row['age'] ?></td>
      <td><?php echo $row['contact'] ?></td>
      <td><?php echo $row['email'] ?></td>
    </tr>
  </tbody>
  <?php
    }
}
?>

</table>
<div class="row" style="margin-left: 1px;">
  <div class="rs-select2 js-select-simple select--no-search">
    <select name="trainer_id" >
<?php
$sql = "SELECT  * from trainer join person on trainer.person_id=person.p_id join 
account on account.person_id=trainer.person_id ";
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
?>
  <option  disabled="disabled" selected="selected">Choose Trainer</option>
        <?php     while($row=mysqli_fetch_assoc($result)){ ?>
        <option value="<?php echo $row['trainer_id'] ?>"><?php echo $row['name'] ?></option>;
        <!-- <input type="hidden" name="trainer_id" value="<?php echo $row['trainer_id'] ?>">;  -->
        <?php
    }
}
?>
        </select>

        <div class ="select-dropdown"></div>

        </div>

    </div>




<div class="row">
<h3 style="margin-top: 20px;"><a  href="my_trainer.php" style=" 
        width:140px;
        padding:6px 6px 6px 6px;
        margin-left:18px;
        margin-top: 50px;
        background: red;
        text-align: center;
        border-radius: 5px;
        color: white;
        font-weight: bold;
        line-height: 25px;">Cancel</a></h3>
        <h3 style="margin-top: 12px;"><input type="submit" name="submit" value="Submit" style="margin-left: 20px; background-color:red;
        padding:8px 8px 8px 8px; color:white;border-radius: 5px;font-weight: bold;">
        </input></h3>
        
</div>

</form>
</div>


<footer>
    <!--? Footer Start-->
    <?php include "c_footer.php" ?>
      <!-- Footer End-->
  </footer>
  <!-- Scroll Up -->
  <div id="back-top" >
    <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
</div>

<!-- JS here -->

<script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
<!-- Jquery, Popper, Bootstrap -->
<script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
<script src="./assets/js/popper.min.js"></script>
<script src="./assets/js/bootstrap.min.js"></script>
<!-- Jquery Mobile Menu -->
<script src="./assets/js/jquery.slicknav.min.js"></script>

<!-- Jquery Slick , Owl-Carousel Plugins -->
<script src="./assets/js/owl.carousel.min.js"></script>
<script src="./assets/js/slick.min.js"></script>
<!-- One Page, Animated-HeadLin -->
<script src="./assets/js/wow.min.js"></script>
<script src="./assets/js/animated.headline.js"></script>
<script src="./assets/js/jquery.magnific-popup.js"></script>

<!-- Date Picker -->
<script src="./assets/js/gijgo.min.js"></script>
<!-- Nice-select, sticky -->
<script src="./assets/js/jquery.nice-select.min.js"></script>
<script src="./assets/js/jquery.sticky.js"></script>

<!-- counter , waypoint,Hover Direction -->
<script src="./assets/js/jquery.counterup.min.js"></script>
<script src="./assets/js/waypoints.min.js"></script>
<script src="./assets/js/jquery.countdown.min.js"></script>
<script src="./assets/js/hover-direction-snake.min.js"></script>

<!-- contact js -->
<script src="./assets/js/contact.js"></script>
<script src="./assets/js/jquery.form.js"></script>
<script src="./assets/js/jquery.validate.min.js"></script>
<script src="./assets/js/mail-script.js"></script>
<script src="./assets/js/jquery.ajaxchimp.min.js"></script>

<!-- Jquery Plugins, main Jquery -->	
<script src="./assets/js/plugins.js"></script>
<script src="./assets/js/main.js"></script>

</body>
</html>
