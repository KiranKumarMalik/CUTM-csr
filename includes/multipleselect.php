<?php
require './database.php';
require './function.php';

if(isset($_POST['submitall'])){


    $chk=""; 
    $allid=$_POST['allId'];
    foreach ($allid as $allids) {
        $query="UPDATE `csrtimesheet` SET `status`='Approved' WHERE id=$allids";
        mysqli_query($db,$query);
    }
    
    
        
        header('location:../adminlogin/teacher.php');
    
}






   
?>