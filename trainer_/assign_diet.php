<?php
require "../config.php";
// include "session.php";
$person_id = $_GET['id'];
if(isset($_POST['submit'])){
    $type = $_POST['type'];
    $s_date = $_POST['s_date'];
    $e_date = $_POST['e_date'];
    $sql_sel="SELECT * from trainer join person on person.p_id=trainer.person_id 
    where person.p_id=$person_id ";
    $res_sel=mysqli_query($conn,$sql_sel);
    if(mysqli_num_rows($res_sel)>0){
        while($row=mysqli_fetch_assoc($res_sel)){
            $trainer_id=$row['trainer_id'];
        }
    }
    $sql_diet="INSERT INTO `diet_plan`( `trainer_id`, `type`, `start_date`, `end_date`) 
    VALUES ($trainer_id,'$type','$s_date','$e_date')";
    echo $sql_diet;
    $res_diet=mysqli_query($conn,$sql_diet);
    header("Location:trainer_index.php?id=$person_id");
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
        <?php include "c_header_trainer.php" ?>
</header>
<main>
    <!--? Hero Start -->
    <div class="slider-area2">
        <div class="slider-height2 d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap hero-cap2 pt-70">
                            <h2>Fee Payment</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>

<div class="container">
<form action="" method="post">
<br>
    <div class="form-group">
    <label style="font-size: large; color:white;margin-right: 40px" for="start">Start Date:</label>
<input required style="font-size: large;" type="date" id="start" name="s_date">
    </div>
    <br>
    <div class="form-group">
    <label style="font-size: large; color:white;margin-right: 50px" for="start">End Date:</label>
<input required style="font-size: large;" type="date" id="start" name="e_date">
    </div>
    <br>
    <div class="row" style="font-size: large;">
      <div class="col-lg-6 col-md-6 col-xs-6">
    <label for="account" style="margin-right: 86px; margin-top: 15px;"><b style="color: white;">Diet</b></label>
    <input type="text" placeholder=""  name="type" >
  </div>
    </div>


<div class="row">
<h3 style="margin-top: 20px;"><a  href="trainer_index.php?id=<?php echo $person_id ?>" style=" 
        width:140px;
        padding:6px 6px 6px 6px;
        margin-left:135px;
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
    <?php include "c_footer_trainer.php" ?>
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
