<?php
    session_start();
    require('./mail.php');

    $email=$_GET['email'];
    $name=$_GET['name'];
    $password=$_GET['pass'];


    $message="Name : ".$name."\n"."Email:". $email."\n"."Password:". $password."\n". "You login to CSR website using http://localhost/csr-project/adminlogin/teacher.php "."\n". "This is a testing server if you don’t create an account in this website please ignore this message."."\n". "Thank You" ."\n". "Chinmaya Kumar Biswal";
    // $message="Dear ".$name."\n"." As per your request below mentioned is the username and password"."\n"."Name : ".$name."\n"."Email:". $email."\n"."Password:". $password."\n". "You login to CSR website using https://csr.cutm.ac.in/login/login.php "."\n". "This is a testing server if you don’t create an account in this website please ignore this message."."\n". "Thank You" ."\n". "Chinmaya Kumar Biswal";
    
    $send=smtp_mailer($email,'CSaR Credential',$message);
    if ($send) {
        echo "send ok";
        header('location:http://localhost/csr-project/adminlogin/studentapproval.php');
    }
    else {
        echo "error in sending ";
        header('location:http://localhost/csr-project/adminlogin/studentapproval.php');
    }

?>