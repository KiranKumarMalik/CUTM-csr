<?php
require('../includes/database.php');
require('../includes/function.php');
if(isset($_POST['forgotfaculty'])){
	$email=mysqli_real_escape_string($db,$_POST['email']);
    $teacherData=getTeacherDetails($db,$email);
	$query="SELECT * FROM teacher WHERE email='$email'";
    $runQuery=mysqli_query($db,$query);
    if(mysqli_num_rows($runQuery)){
        $password=randPass();
        $query="UPDATE `teacher` SET `password`='$password' WHERE email='$email'";
        $test=mysqli_query($db,$query);
        header('location:https://chinmayakumarbiswal.in/test/cutmCsrMail?name='.$teacherData['name'].'&email='.$email.'&pass='.$password); 
        if ($test) {
            ?>
			<script type="text/javascript" language="JavaScript">
				alert("Update. ");
			</script>
        <?php 
        }   
        else {
            ?>
			<script type="text/javascript" language="JavaScript">
				alert("Error in Update password please contact to admin ");
			</script>
        <?php 
        }
        
    }
	else {
		?>
			<script type="text/javascript" language="JavaScript">
				alert("You are not a valid user . ");
			</script>
        <?php 
	}
	
}
?>


<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/styles.css" />
    <title>Forgot Password | Faculty</title>
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
                    Faculty
                </span>

                <div class="alert alert-warning hidden">
                    <span></span>
                    <button type="button" class="close" onclick="$('.alert').addClass('hidden');">&times;</button>
                </div>

                <form method="POST" class="login100-form validate-form p-b-33 p-t-5">
                    <center>
                    <span class="login100-form-title p-b-41" style="color:black;">
                    Reset Password
                    </span>
                        <p><img src="cutm.png" alt="centered image" width="80" height="80"></p>
                    </center>

                    <div class="wrap-input100 validate-input" data-validate="userid">
                        <input class="input100 form-control" type="text" name="email" placeholder="Email">
                        <span class="focus-input100" data-placeholder="&#xe82a;"></span>
                    </div>

                    <div class="container-login100-form-btn m-t-32">
                        <button class="btn btn-primary login100-form-btn" name="forgotfaculty">
                            Submit
                        </button>
                    </div><br>
                </form>
                <center>
                
                    <br>
                    <button class="login100-form-btn btn btn-primary"><a href="faculty.php"
                            style="color:white; font-style:Baskerville">
                            <h2 style="color:white; font-style:Baskerville">Home</h2>
                        </a></button>
                    </a>
                </center>
             </div>
        </div>

    </div>
    </div><!-- /.container -->

</body>

</html>