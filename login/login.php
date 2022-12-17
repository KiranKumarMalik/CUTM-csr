<?php
    require('../includes/database.php');
    require('../includes/function.php');
    if(isset($_POST['loginstudent'])){
      $email=mysqli_real_escape_string($db,$_POST['email']);
      $password=mysqli_real_escape_string($db,$_POST['password']);

        $query="SELECT * FROM student WHERE email='$email' AND password='$password' AND status='Approved'";
        $runQuery=mysqli_query($db,$query);
        if(mysqli_num_rows($runQuery)){
            $_SESSION['isUserLoggedIn']=true;
            $_SESSION['email']=$email;
            $_SESSION['usertype']="student";
            header('location:../adminlogin/student.php');
        }
        else{
            echo"<script>alert('Incorrect email and password or your account not activated please contact to admin or wait for approval !');</script>";
        }
    }

?>


<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/styles.css" />
    <title>Student Login</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/login.js"></script>
    <!-- Custom styles for this template -->
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

        <div class="container-login100" style="background-image: url('images/csr.jpg');">

            <div class="wrap-login100 p-t-30 p-b-50">

                <!-- <div class="container"> -->


                <br><br>
                <span class="login100-form-title p-b-41">
                    Login for Student
                </span>

                <div class="alert alert-warning hidden">
                    <span></span>
                    <button type="button" class="close" onclick="$('.alert').addClass('hidden');">&times;</button>
                </div>

                <form method="POST" class="login100-form validate-form p-b-33 p-t-5">
                    <center>
                        <p><img src="cutm.png" alt="centered image" width="80" height="80"></p>
                    </center>

                    <div class="wrap-input100 validate-input" data-validate="userid">
                        <input class="input100 form-control" type="text" name="email" placeholder="Email">
                        <span class="focus-input100" data-placeholder="&#xe82a;"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Enter password">
                        <input class="input100 form-control" type="password" name="password" placeholder="password">
                        <span class="focus-input100" data-placeholder="&#xe80f;"></span>
                    </div>

                    <div class="container-login100-form-btn m-t-32">
                    <a href="stuforgetpassword.php"><h4 style="color:gray; text-align:right">Forgot password? </h4></a>
                    </div>

                    <div class="container-login100-form-btn m-t-32">
                        <button class="btn btn-primary login100-form-btn" name="loginstudent">
                            Login
                        </button>
                    </div><br>
                    <center>
                        <h4 style="color:gray">Don't have an account?</h4>
                        <h2>
                            <a href="enterredg.php" style="font-size: large">Register here</a>
                        </h2>
                    </center>


                </form>

                <center>
                    <div class="container-login100-from-btn m-t-32">
                        <a href="login.php">
                            <button class="login100-form-btn btn btn-primary"><a href="faculty.php"
                                    style="color:white; font-style:Baskerville">
                                    <h2 style="color:white; font-style:Baskerville">For Faculties</h2>
                                </a></button>
                        </a>
                    </div>
                    <br>
                    <button class="login100-form-btn btn btn-primary"><a href="admin.php"
                            style="color:white; font-style:Baskerville">
                            <h2 style="color:white; font-style:Baskerville">For Admin</h2>
                        </a></button>
                    </a>
                    <br>
                    <button class="login100-form-btn btn btn-primary"><a href="superdashboard.php"
                            style="color:white; font-style:Baskerville">
                            <h2 style="color:white; font-style:Baskerville">For SuperAdmin</h2>
                        </a></button>
                    </a>
                </center>


            </div>
        </div>

    </div>
    </div><!-- /.container -->

</body>

</html>