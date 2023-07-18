<?php
require "config.php";
include "session.php";
$person_id = $_SESSION['id'];
if(isset($_POST['submit'])){
    $fee = $_POST['fee'];
    $date = $_POST['date'];
    $account = $_POST['account'];
    $sql = "INSERT INTO `payment`( `person_id`,`date`, `amount`, `acc_number`)
    VALUES ($person_id,'$date',$fee,$account)";
    $re = mysqli_query($conn,$sql);
    $sql_select = "SELECT * FROM `payment` join person on 
    person.p_id=payment.person_id join trainee on
    trainee.person_id=payment.person_id WHERE trainee.person_id=$person_id";
    // echo $sql_select;
    $res_select = mysqli_query($conn,$sql_select);
    if(mysqli_num_rows($res_select)>0){
        while($row=mysqli_fetch_assoc($res_select)){
            $pay_id = $row['pay_id'];
            $traine_id = $row['id'];
        }
    }
    $sql_fee = "INSERT INTO `fee`( `pay_id`, `trainee_id`)
    VALUES ($pay_id,$traine_id)";
    $res_fee =mysqli_query($conn,$sql_fee);
    
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
    <label style="font-size: large; color:white;margin-right: 40px" for="start">Date:</label>
<input required style="font-size: large;" type="date" id="start" name="date">
    </div>
    <br>
    <div class="row" style="font-size: large;">
      <div class="col-lg-6 col-md-6 col-xs-6">
    <label for="account" style="margin-right: 20px; margin-top: 15px;"><b style="color: white;">Account</b></label>
    <input type="text" placeholder=""  name="account" >
  </div>
    </div>
    <?php
$person_id = $_SESSION['id'];
$sql1= "SELECT * from trainee join membership on trainee.id=membership.trainee_id
 where person_id=$person_id ";
//  echo $sql1;
$res1 = mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1)>0){
    while($row2=mysqli_fetch_assoc($res1)){
        $trainee_id = $row2['id'];
        $mem_id=$row2['mem_id'];
        $type_id=$row2['type_id'];
    ?>
    <input type="hidden" name="trainee_id" value="<?php echo $trainee_id ?>"> 
    <input type="hidden" name="mem_id" value="<?php echo $mem_id ?>"> 
    <input type="hidden" name="type_id" value="<?php echo $type_id ?>"> 
    <?php
}
}
    ?>
    <br>
<div class="row" style="margin-left: 85px;">
  <div class="rs-select2 js-select-simple select--no-search">
    <select name="fee">

    <?php
$sql = "SELECT * FROM `training_fee` WHERE type_id=$type_id ";
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
?>
  <option disabled="disabled" selected="selected" >Fee</option>
        <?php     while($row=mysqli_fetch_assoc($result)){ ?>
        <option value="<?php echo $row['type_id'] ?>"><?php echo $row['fee'] ?></option>
        <?php
    }
}
else{
?>
  <option disabled="disabled" selected="selected" >Fee</option>
        <option value="800">800</option>
<?php
        }


?>
        </select>

        <div class ="select-dropdown"></div>

        </div>
</div>
<div class="row">
<h3 style="margin-top: 20px;"><a  href="index_trainee.php?id=<?php echo $person_id ?>" style=" 
        width:140px;
        padding:6px 6px 6px 6px;
        margin-left:100px;
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
