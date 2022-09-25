<?php
require('../../includes/database.php');

    $query="SELECT * FROM csrpr GROUP BY csrPr";
    $run=mysqli_query($db,$query);
    $data=array();
    while($d=mysqli_fetch_assoc($run)){
        $data[]=$d['csrPr'];
    }
    $OUTPUT=(object) array('status' => true, 'data' => $data);
    echo json_encode($OUTPUT,true)
?>