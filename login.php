<?php
    require('includes/database.php');
    require('includes/function.php');

    

    if(isset($_SESSION['isUserLoggedIn']) && $_SESSION['isUserLoggedIn']){
        echo"<script>alert('Please Logout Before login');</script>";
    }

    if(isset($_POST['loginadmin'])){
        $email=mysqli_real_escape_string($db,$_POST['email']);
        $password=mysqli_real_escape_string($db,$_POST['password']);
        $query="SELECT * FROM admin WHERE email='$email' AND password='$password'";
        $runQuery=mysqli_query($db,$query);
        if(mysqli_num_rows($runQuery)){
            $_SESSION['isUserLoggedIn']=true;
            $_SESSION['email']=$email;
            $_SESSION['usertype']="admin";
            header('location:adminlogin/admin.php');
            // echo"<script>alert('Login ok !');</script>";
        }
        else{
            echo"<script>alert('Incorrect email or password !');</script>";
        }
    }


    else if(isset($_POST['loginteacher'])){
        $email=mysqli_real_escape_string($db,$_POST['email']);
        $password=mysqli_real_escape_string($db,$_POST['password']);
        $query="SELECT * FROM teacher WHERE email='$email' AND password='$password'";
        $runQuery=mysqli_query($db,$query);
        if(mysqli_num_rows($runQuery)){
            $_SESSION['isUserLoggedIn']=true;
            $_SESSION['email']=$email;
            $_SESSION['usertype']="teacher";
            header('location:adminlogin/teacher.php');
            // echo"<script>alert('Login ok !');</script>";
        }
        else{
            echo"<script>alert('Incorrect email or password !');</script>";
        }
    }


    else if(isset($_POST['loginstudent'])){
        $email=mysqli_real_escape_string($db,$_POST['email']);
        $password=mysqli_real_escape_string($db,$_POST['password']);
        $query="SELECT * FROM student WHERE email='$email' AND password='$password'";
        $runQuery=mysqli_query($db,$query);
        if(mysqli_num_rows($runQuery)){
            $_SESSION['isUserLoggedIn']=true;
            $_SESSION['email']=$email;
            $_SESSION['usertype']="student";
            header('location:adminlogin/student.php');
            echo"<script>alert('Login ok !');</script>";
        }
        else{
            echo"<script>alert('Incorrect email or password !');</script>";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SakhyatTech</title>
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Barlow+Semi+Condensed:600,700%7CNunito:300,400"
        rel="stylesheet">
    <link href="./css/animate.min.css" rel="stylesheet" media="screen">
    <link href="./css/fonts.css" rel="stylesheet" media="screen">
    <link href="./css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="./css/style.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
        integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
   
    <section class="vh-100">
        <div class="container-fluid h-custom">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-9 col-lg-6 col-xl-5">
                    <h1>student</h1>
                </div>
                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                    <form method="post">
                        <br><br>
                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <input type="email" id="form3Example3" class="form-control form-control-lg"
                                placeholder="Enter a valid email address" name="email" />
                            <label class="form-label" for="form3Example3">Email address</label>
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-3">
                            <input type="password" id="form3Example4" class="form-control form-control-lg"
                                placeholder="Enter password" name="password" />
                            <label class="form-label" for="form3Example4">Password</label>
                        </div>

                        <div class="d-flex justify-content-between align-items-center">
                            <!-- Checkbox -->
                            <div class="form-check mb-0">
                                <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
                                <label class="form-check-label" for="form2Example3">
                                    Remember me
                                </label>
                            </div>
                            <a href="#!" class="text-body">Forgot password?</a>
                        </div>

                        <div class="text-center text-lg-start mt-4 pt-2">
                            <button type="submit" class="btn btn-primary btn-lg"
                                style="padding-left: 2.5rem; padding-right: 2.5rem;" name="loginstudent">Login</button>
                        </div>

                    </form>
                </div>
            </div>
    </section>
    <section class="vh-100">
        <div class="container-fluid h-custom">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-9 col-lg-6 col-xl-5">
                    <h1>teacher</h1>
                </div>
                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                    <form method="post">
                        <br><br>
                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <input type="email" id="form3Example3" class="form-control form-control-lg"
                                placeholder="Enter a valid email address" name="email" />
                            <label class="form-label" for="form3Example3">Email address</label>
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-3">
                            <input type="password" id="form3Example4" class="form-control form-control-lg"
                                placeholder="Enter password" name="password" />
                            <label class="form-label" for="form3Example4">Password</label>
                        </div>

                        <div class="d-flex justify-content-between align-items-center">
                            <!-- Checkbox -->
                            <div class="form-check mb-0">
                                <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
                                <label class="form-check-label" for="form2Example3">
                                    Remember me
                                </label>
                            </div>
                            <a href="#!" class="text-body">Forgot password?</a>
                        </div>

                        <div class="text-center text-lg-start mt-4 pt-2">
                            <button type="submit" class="btn btn-primary btn-lg"
                                style="padding-left: 2.5rem; padding-right: 2.5rem;" name="loginteacher">Login</button>
                        </div>

                    </form>
                </div>
            </div>
    </section>
    <section class="vh-100">
        <div class="container-fluid h-custom">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-9 col-lg-6 col-xl-5">
                    <h1>admin</h1>
                </div>
                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                    <form method="post">
                        <br><br>
                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <input type="email" id="form3Example3" class="form-control form-control-lg"
                                placeholder="Enter a valid email address" name="email" />
                            <label class="form-label" for="form3Example3">Email address</label>
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-3">
                            <input type="password" id="form3Example4" class="form-control form-control-lg"
                                placeholder="Enter password" name="password" />
                            <label class="form-label" for="form3Example4">Password</label>
                        </div>

                        <div class="d-flex justify-content-between align-items-center">
                            <!-- Checkbox -->
                            <div class="form-check mb-0">
                                <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
                                <label class="form-check-label" for="form2Example3">
                                    Remember me
                                </label>
                            </div>
                            <a href="#!" class="text-body">Forgot password?</a>
                        </div>

                        <div class="text-center text-lg-start mt-4 pt-2">
                            <button type="submit" class="btn btn-primary btn-lg"
                                style="padding-left: 2.5rem; padding-right: 2.5rem;" name="loginadmin">Login</button>
                        </div>

                    </form>
                </div>
            </div>
    </section>

    <script src="./js/jquery.min.js"></script>
    <script src="./js/bootstrap.bundle.min.js"></script>
    <script src="./js/plugins.js"></script>
    <script src="./js/main.js"></script>
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-62a47696f6cce6bf"></script>

</body>

</html>