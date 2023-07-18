<?php
require "config.php";
$id= "";
$acc_id = "";
if(isset($_POST['submit'])){
    $name = $_POST['first_name'];
    $l_name = $_POST['last_name'];
    $name = $_POST['first_name'];
    $age = $_POST['age'];
    $contact = $_POST['contact'];
    $city = $_POST['city'];
    $town = $_POST['town'];
    $street = $_POST['street'];
    $house = $_POST['house'];
    $email = $_POST['email'];
    $psw = $_POST['password'];
    $sql_person = "INSERT INTO `person`( `name`, `last_name`, `contact`, `age`) VALUES ('$name','$l_name',
    '$contact','$age')";
    $res_person = mysqli_query($conn,$sql_person);
    $sel_person = "SELECT * FROM `person` WHERE name = '$name' And last_name='$l_name' ";
    $res_sel_person = mysqli_query($conn,$sel_person);
    if(mysqli_num_rows($res_sel_person)>0){
        while($row = mysqli_fetch_assoc($res_sel_person)){
            $id = $row['p_id'];

        }
    }
    // echo $id;
    $sql_acc = "INSERT INTO `account`(`person_id`, `email`, `password`)
     VALUES ($id,'$email','$psw' )";
     $res_acc = mysqli_query($conn,$sql_acc);
    $sel_acc = "SELECT * FROM `account` WHERE person_id=$id";
    $res_sel_acc = mysqli_query($conn,$sel_acc);
    if(mysqli_num_rows($res_sel_acc)>0){
        while($row1=mysqli_fetch_assoc($res_sel_acc)){
            $acc_id = $row1['id'];
        }
    }
    $sql_trainee ="INSERT INTO `trainee`(`acc_id`, `person_id`) VALUES ($acc_id,$id)";
    $res_trainee = mysqli_query($conn,$sql_trainee);
    $sql_address ="INSERT INTO `address`( `person_id`, `city`,
    `town`, `street`, `house`) VALUES ($id,'$city','$town','$street','$house')";
    $res_address=mysqli_query($conn,$sql_address);

    header("Location:login.php");

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Registration form</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title"> Registration Form</h2>
                </div>
                <div class="card-body">
                    <form action="" method="POST">
                        <div class="form-row m-b-55">
                            <div class="name">Name</div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="first_name">
                                            <label class="label--desc">first name</label>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="last_name">
                                            <label class="label--desc">last name</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Age</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="age">
                                </div>
                            </div>
                        </div>
                       
                        <div class="form-row">
                            <div class="name">Phone</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="contact">
                                </div>
                            </div>
                        </div>
                        <!-- <div class="form-row">
                            <div class="name">City</div> -->
                            <!-- <div class="value">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="city">
                                            <option disabled="disabled" selected="selected">Choose option</option>
                                            <option>Islamabad</option>
                                            <option>Rawalpindi</option>
                                            <option>Murree</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div> -->
                        <!-- </div> -->
                        <div class="form-row">
                            <div class="name">City</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="city">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Town</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="town">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Street</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="street">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">House No</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="house">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Email</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="email" name="email">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Password</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="password" name="password" required>
                                </div>
                            </div>
                        <!-- <div class="form-row p-t-20">
                            <label class="label label--block">Are you an existing customer?</label>
                            <div class="p-t-15">
                                <label class="radio-container m-r-55">Yes
                                    <input type="radio" checked="checked" name="exist">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="radio-container">No
                                    <input type="radio" name="exist">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div> -->
                        <div >
                            <button class="btn btn--radius-2 btn--red" name="submit" type="submit">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body>
</html>
<!-- end document-->