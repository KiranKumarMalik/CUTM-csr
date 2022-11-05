<?php
require './database.php';
require './function.php';

if(isset($_POST['submitall'])){


    $chk=""; 
    $allid=$_POST['allId'];
    $name=$_POST['allName'];
    $email=$_POST['allEmail'];

    foreach ($allid as $allids) {
        echo $allids;
        echo $name[0];
    }
    
    
        
        // header('location:../adminlogin/teacher.php');
    
}






   
?>