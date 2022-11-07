<?php
require 'database.php';
require './function.php';

if(isset($_GET['id'])){
    $id=$_GET['id'];
    
        $query="UPDATE `csrtimesheet` SET `status`='Approved' WHERE id=$id";
        mysqli_query($db,$query);
        header('location:../adminlogin/teacher.php');
    
    
}


   
?>