<?php
require('../../includes/database.php');
    $OUTPUT=(object) array('status' => false, 'data' => '');

    if (!$_GET || !isset($_GET["school"]) || !$_GET["school"] ) {
        $OUTPUT=(object) array('status' => false, 'data' => 'school is Required');
    }
    else{
        $query="SELECT * FROM coordinatorstypeschool where schoolType='{$_GET["school"]}'";
        $run=mysqli_query($db,$query);
        $data=array();
        while($d=mysqli_fetch_assoc($run)){
            $data[]=$d['schoolType'];
        }
        $OUTPUT=(object) array('status' => true, 'data' => $data);

    }
    
    echo json_encode($OUTPUT,true)
?>