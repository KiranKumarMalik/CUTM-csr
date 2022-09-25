<?php
 require('../includes/database.php');
 require('../includes/function.php');
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="css/styles.css" />
    <link rel="stylesheet" href="css/style.css" />
    <title>Signup | CSR | CUTM</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/login.js"></script>
    <!-- Custom styles for this template -->
    <link href="navbar-fixed-top.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!--===============================================================================================-->
</head>

<body>

    <div class="limiter">

        <div class="container-login100" style="background-image: url('images/cutm4.jpg');">

            <div class="wrap-login100 p-t-30 p-b-50">

                <!-- <div class="container"> -->


                <br><br>
                <span class="login100-form-title p-b-41">
                    Signup for Student
                </span>
                <div class="alert alert-warning hidden">
                    <span></span>
                    <button type="button" class="close" onclick="$('.alert').addClass('hidden');">&times;</button>
                </div>


                <form id="signup" method="POST" action="../includes/createuser.php" enctype="multipart/form-data" class="login100-form" >

                    <div class="wrap-input100 validate-input form-group" data-validate="Enter Name">
                        <input class="input100 form-control" type="text" name="name" placeholder="Enter Name" required>
                        <span class="focus-input100" data-placeholder="&#xe82a;"></span>
                    </div>
                    <div class="wrap-input100 validate-input form-group" data-validate="Email">
                        <input class="input100 form-control" type="email" name="email" placeholder="Enter Email-id"
                            required>
                        <span class="focus-input100" data-placeholder="&#xe82b;"></span>
                    </div>
                    <div class="wrap-input100 validate-input form-group" data-validate="Registration number">
                        <input class="input100 form-control" type="text" name="regdno"
                            placeholder="Enter Registration number" required>
                        <span class="focus-input100" data-placeholder="&#xe82a;"></span>
                    </div>
                    <div class="wrap-input100 validate-input form-group" data-validate="School">
                        <input class="input100 form-control" type="text" name="school" placeholder="Enter School name"
                            required>
                        <span class="focus-input100" data-placeholder="&#xe82b;"></span>
                    </div>
                    <div class="wrap-input100 validate-input form-group" data-validate="program">
                        <input class="input100 form-control" type="text" name="program" placeholder="Enter Program"
                            required>
                        <span class="focus-input100" data-placeholder="&#xe82b;"></span>
                    </div>
                    <div class="wrap-input100 validate-input form-group" data-validate="branch">
                        <input class="input100 form-control" type="text" name="branch"
                            placeholder="Enter branch details" required>
                        <span class="focus-input100" data-placeholder="&#xe82b;"></span>
                    </div>
                    <div class="wrap-input100 validate-input form-group" data-validate="addyr">
                        <select class="input100 form-select" aria-label="Default select example" name="addyr">
                            <option value="AddYr">Addmission Year</option>
                            <?php
							
                                  $year=getAllYear($db);
                                  foreach($year as $ct){
                            ?>
                            <option value="<?=$ct['Year']?>"><?=$ct['Year']?></option>
                            <?php
                        			}
							?>
                        </select>
                        <span class="focus-input100" data-placeholder="&#xe82b;"></span>
                    </div>

                    <div class="wrap-input100 validate-input form-group" data-validate="sex">
                        <select class="input100 form-select" aria-label="Default select example" name="sex">
                            <option value="select">Select gender</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Transgender">Transgender</option>
                        </select>
                        <span class="focus-input100" data-placeholder="&#xe82b;"></span>
                    </div>

                    <div class="wrap-input100 validate-input form-group" data-validate="religion">
                        <input class="input100 form-control" type="text" name="religion" placeholder="Enter religion"
                            required>
                        <span class="focus-input100" data-placeholder="&#xe82b;"></span>
                    </div>

                    <div class="wrap-input100 validate-input form-group" data-validate="dob">
                        <input class="input100 form-control" type="date" name="dob" placeholder="Enter dob" required>
                        <span class="focus-input100" data-placeholder="&#xe82b;"></span>
                        <span class="help-block" style="font-size:small">
                            <center>Date Of Birth</center>
                        </span>
                    </div>

                    <div class="wrap-input100 validate-input form-group" data-validate="blood">
                        <select class="input100 form-select" aria-label="Default select example" name="blood">
                            <option value="select">Select Blood</option>
                            <option value="o+">O+</option>
                            <option value="a+">A+</option>
                            <option value="b+">B+</option>
                            <option value="ab+">AB+</option>
                            <option value="o-">O-</option>
                            <option value="a-">A-</option>
                            <option value="b-">B-</option>
                            <option value="ab-">AB-</option>
                        </select>
                        <span class="focus-input100" data-placeholder="&#xe82b;"></span>
                    </div>

                    <div class="wrap-input100 validate-input form-group" data-validate="hobby">
                        <input class="input100 form-control" type="text" name="hobby" placeholder="Enter hobby" required>
                        <span class="focus-input100" data-placeholder="&#xe82b;"></span>

                    </div>

                    <div class="wrap-input100 validate-input form-group" data-validate="presentadd">
                        <input class="input100 form-control" type="text" name="presentadd" placeholder="Enter presentadd"
                            required>
                        <span class="focus-input100" data-placeholder="&#xe82b;"></span>
                    </div>

                    <div class="wrap-input100 validate-input form-group" data-validate="permanent">
                        <input class="input100 form-control" type="text" name="permanent" placeholder="Enter permanent add"
                            required>
                        <span class="focus-input100" data-placeholder="&#xe82b;"></span>

                    </div>

                    <div class="wrap-input100 validate-input form-group" data-validate="Phone number">
                        <input class="input100 form-control" type="text" name="mob" placeholder="Enter Phone number"
                            required>
                        <span class="focus-input100" data-placeholder="&#xe82b;"></span>
                    </div>

                    <div class="wrap-input100 validate-input form-group" data-validate="imageupload">
                        <input class="input100 form-control" type="file" name="imageupload"
                            accept="image/png, image/gif, image/jpeg" required>
                        <span class="focus-input100" data-placeholder="&#xe82b;"></span>
                        <span class="help-block" style="font-size:small">
                            <center>Upload Profile Image</center>
                        </span>
                    </div>



                    <div class="wrap-input100 validate-input form-group" data-validate="Password">
                        <input class="input100 form-control" type="password" name="password"
                            placeholder="Enter Password" required>
                        <span class="focus-input100" data-placeholder="&#xe80f;"></span>
                        <span class="help-block" style="font-size:small">
                            <center>Password should be 6 characters long.</center>
                        </span>
                    </div>

                    <div class="wrap-input100 validate-input form-group" data-validate="Confirm Password">
                        <input class="input100 form-control" type="password" name="password2"
                            placeholder="Retype Password">
                        <span class="focus-input100" data-placeholder="&#xe80f;"></span>
                    </div>

                    <div class="container-login100-form-btn m-t-32">
                        <button class="login100-form-btn btn btn-primary pull-right" type="submit" name="createu">
                            Register
                        </button>
                </form>

            </div>
            <center>
                <div class="container-login100-from-btn m-t-32">
                    <a href="login.php">
                        <button class="login100-form-btn btn btn-primary">Return to Home</button>
                    </a>
                </div>
            </center>
        </div>

    </div>
    <!-- FOOTER -->
    <footer style="height:120%;">
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; @2019 GGITS &middot; developed by Ritika Ghosh & Twinkle Arora &middot; </p>
    </footer>
    </div>

    <div id="dropDownSelect1"></div>

   
    <!-- <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <script src="vendor/animsition/js/animsition.min.js"></script>
  
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
   
    <script src="vendor/select2/select2.min.js"></script>

    <script src="vendor/daterangepicker/moment.min.js"></script>
    <script src="vendor/daterangepicker/daterangepicker.js"></script>

    <script src="vendor/countdowntime/countdowntime.js"></script>
   
    <script src="js/main.js"></script> -->


</body>

</html>