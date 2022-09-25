<?php
require('../../includes/database.php');
    $OUTPUT=(object) array('status' => false, 'data' => '');

    if (!$_GET || !isset($_GET["scrPr"]) || !$_GET["scrPr"] ) {
        $OUTPUT=(object) array('status' => false, 'data' => 'scrPr is Required');
    }
    else{
        $query="SELECT * FROM csrpr where csrPr='{$_GET["scrPr"]}'";
        $run=mysqli_query($db,$query);
        $data=array();
        while($d=mysqli_fetch_assoc($run)){
            $data[]=$d['club'];
        }
        $OUTPUT=(object) array('status' => true, 'data' => $data);

    }
    
    echo json_encode($OUTPUT,true)
?>