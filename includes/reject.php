<?php
require 'database.php';
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $query="UPDATE `csrtimesheet` SET `status`='Rejected' WHERE id=$id";
    mysqli_query($db,$query);
    header('location:../adminlogin/teacher.php');
}
?>