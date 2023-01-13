<?php
require 'database.php';
require 'function.php';
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $email=$_GET['email'];
    $name=$_GET['name'];
    $getPassword=randPass();
    $password=md5($getPassword);

    // echo $email;
    // echo $name;
    // echo $password;


    $query="UPDATE `student` SET `status`='Approved', `password`='$password' WHERE id=$id";
    mysqli_query($db,$query);
    header('location:../adminlogin/api/cutmCsrMail.php?name='.$name.'&email='.$email.'&pass='.$getPassword);
}
?>