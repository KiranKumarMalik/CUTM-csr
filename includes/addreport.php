<?php
require('database.php');
if(isset($_POST['addpost'])){
    $uname=mysqli_real_escape_string($db,$_POST['uname']);
    $campus=mysqli_real_escape_string($db,$_POST['campus']);
    $schoolname=mysqli_real_escape_string($db,$_POST['schoolname']);
    $uemail=mysqli_real_escape_string($db,$_POST['uemail']);
    $year=mysqli_real_escape_string($db,$_POST['year']);
    $program=mysqli_real_escape_string($db,$_POST['program']);
    $clubname=mysqli_real_escape_string($db,$_POST['clubname']);
    $date=mysqli_real_escape_string($db,$_POST['date']);
    $starttime=mysqli_real_escape_string($db,$_POST['starttime']);
    $endtime=mysqli_real_escape_string($db,$_POST['endtime']);
    $status="Not approved";


    echo $uname;echo "<br>";
    echo $campus;echo "<br>";
    echo $schoolname;echo "<br>";
    echo $uemail;echo "<br>";
    echo $year;echo "<br>";
    echo $program;echo "<br>";
    echo $clubname;echo "<br>";
    echo $date;echo "<br>";
    echo $starttime;echo "<br>";
    echo $endtime;echo "<br>";

    if (strtotime($endtime)>strtotime($starttime)) {
        $totaltime=(strtotime($endtime)-strtotime($starttime))/3600;
        echo $totaltime;
        // this is used for time calculation 

        $query="INSERT INTO csrtimesheet (NameOfStd,emailOfStd,yearOfPr,csrPr,schoolname,club,date,campus,fromTime,endTime,totalTime,status) VALUES('$uname','$uemail','$year','$program','$schoolname','$clubname','$date','$campus','$starttime','$endtime','$totaltime','$status')";
        $run=mysqli_query($db,$query);

        echo $run;
    

        header('location:../adminlogin/student.php');
    }
    else {
        ?>
            <script>
            alert("Please Insert Valid Time ");

            setTimeout(function () {    
                window.location.href = '../adminlogin/generatereport.php'; 
            },0);
            </script>
        <?php
    }
    
     
}

?>