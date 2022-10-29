<?php
require 'database.php';
require './function.php';

if(isset($_GET['id'])){
    $id=$_GET['id'];
    $myid=getAllPostbyId($db,$id);
    echo $myid['status'];
    if($myid['status']== "Rejected"){
        header('location:../adminlogin/teacher.php');
    }
    else{
        $query="UPDATE `csrtimesheet` SET `status`='Approved' WHERE id=$id";
        mysqli_query($db,$query);
        header('location:../adminlogin/teacher.php');
    
    }
}


   
?>