<!-- Header Start -->
<?php 
$id = $_SESSION['id'];
?>
<div class="header-area header-transparent">
            <div class="main-header header-sticky">
                <div class="container-fluid">
                    <div class="menu-wrapper d-flex align-items-center justify-content-between">
                        <!-- Logo -->
                        <div class="logo">
                            <a href="index_trainee.php?id=<?php echo $id ?>"><img src="assets/img/logo/logo1.png" alt=""></a>
                        </div>
                        <!-- Main-menu -->
                        <div class="main-menu f-right d-none d-lg-block">
                            <nav>
                                <ul id="navigation">
                                    <li><a href="index_trainee.php?id=<?php echo $id ?>">Home</a></li>
                                    <li><a href="about_trainee.php">About</a></li>
                                    <li><a href="assign_trainer.php">Trainer</a>
                                        <ul class="submenu">
                                            <li><a href="my_trainer.php">My Trainer</a></li>
                                            <!-- <li><a href="assign_">Assign Trainer</a></li> -->
                                        </ul>
                                    </li>
                                    <li><a href="view_diet.php">Diet Plan</a></li>
                                    <li><a href="membership.php">Membership</a></li>
                                    <li><a href="pay_fee.php">Payment</a></li>
                                    
                                </ul>
                            </nav>
                        </div>          
                        <!-- Header-btn -->
                        <div class="header-btns d-none d-lg-block f-right">
                           <a href="logout.php" class="btn">Logout</a>
                       </div>
                       <!-- Mobile Menu -->
                       <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->