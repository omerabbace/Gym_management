<?php 
include 'session.php';
include "config.php";
$id = $_SESSION['id'];
// $name = "";
// $l_name = "";
// $age = "";
// $contact = "";
// $city = "";
// $town = "";
// $street = "";
// $house = "";
// $email = "";
// $password = "";
$sql = "SELECT * from person join account on person.p_id=account.person_id JOIN
 address on account.person_id=address.person_id where person.p_id=$id"; 
//  echo $sql;
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
    while($row=mysqli_fetch_assoc($result)){
        $name= $row['name'];
        $l_name=$row['last_name'];
        $age=$row['age'];
        $contact=$row['contact'];
        $city=$row['city'];
        $town = $row['town'];
        $street = $row['street'];
        $house = $row['house'];
        $email = $row['email'];
        $password = $row['password'];
    }
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
                            <h2>About Me</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</main>
<form action="up_trainee_sql.php" method="post">
<div class="container"
style="margin-top: 20px;">
<div class="row" style="font-size: large;">
      <div class="col-lg-6 col-md-6 col-xs-6">
    <label for="name" style="margin-right: 80px;margin-top: 15px;"><b style="color: white;">Name</b></label>
    <input type="text"  placeholder="" value="<?php echo $name; ?>" name="name" >
  </div>
    </div>
    <div class="row" style="font-size: large;">
      <div class="col-lg-6 col-md-6 col-xs-6">
    <label for="l_name" style="margin-right: 47px; margin-top: 15px;"><b style="color: white;">Last Name</b></label>
    <input type="text"  placeholder="" value="<?php echo $l_name; ?>" name="l_name" >
  </div>
    </div>
    <div class="row" style="font-size: large;">
      <div class="col-lg-6 col-md-6 col-xs-6">
    <label for="age" style="margin-right: 97px; margin-top: 15px;"><b style="color: white;">Age</b></label>
    <input type="text"  placeholder="" value="<?php echo $age; ?>" name="age" >
  </div>
    </div>
    <div class="row" style="font-size: large;">
      <div class="col-lg-6 col-md-6 col-xs-6">
    <label for="contact" style="margin-right: 70px; margin-top: 15px;"><b style="color: white;">Contact</b></label>
    <input type="text" placeholder="" value="<?php echo $contact; ?>" name="contact" >
  </div>
    </div>
    <div class="row" style="font-size: large;">
      <div class="col-lg-6 col-md-6 col-xs-6">
    <label for="city" style="margin-right: 100px; margin-top: 15px;"><b style="color: white;">City</b></label>
    <input type="text"  placeholder="" value="<?php echo $city; ?>" name="city" >
  </div>
    </div>
    <div class="row" style="font-size: large;">
      <div class="col-lg-6 col-md-6 col-xs-6">
    <label for="town" style="margin-right: 90px; margin-top: 15px;"><b style="color: white;">Town</b></label>
    <input type="text"  placeholder="" value="<?php echo $town; ?>" name="town" >
  </div>
    </div>
    <div class="row" style="font-size: large;">
      <div class="col-lg-6 col-md-6 col-xs-6">
    <label for="street" style="margin-right: 87px; margin-top: 15px;"><b style="color: white;">Street</b></label>
    <input type="text"  placeholder="" value="<?php echo $street; ?>" name="street" >
  </div>
    </div>
    <div class="row" style="font-size: large;">
      <div class="col-lg-6 col-md-6 col-xs-6">
    <label for="house" style="margin-right: 85px; margin-top: 15px;"><b style="color: white;">House</b></label>
    <input type="text" placeholder="" value="<?php echo $house; ?>" name="house" >
  </div>
    </div>
    <div class="row" style="font-size: large;">
      <div class="col-lg-6 col-md-6 col-xs-6">
    <label for="email" style="margin-right: 90px; margin-top: 15px;"><b style="color: white;">Email</b></label>
    <input type="email"  placeholder="" value="<?php echo $email; ?>" name="email" >
  </div>
    </div>
    <div class="row" style="font-size: large;">
      <div class="col-lg-6 col-md-6 col-xs-6">
    <label for="password" style="margin-right: 60px; margin-top: 15px;"><b style="color: white;">Password</b></label>
    <input type="text"  placeholder="" value="<?php echo $password; ?>" name="password" >
  </div>
    </div>
    <div class="row" style="font-size: large;">
      <div class="col-lg-6 col-md-6 col-xs-6">
        <input type="submit" value="update" style="margin-left: 140px; background-color:red; color:white">
        </input>

<a href="about_trainee.php" 
        style=" padding-right:20px;
        padding-left:20px;
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