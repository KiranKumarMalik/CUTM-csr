<?php
require('database.php');
require('function.php');
$Culture="";
$Responsibility="";
$Sports="";
if(isset($_POST['approved'])){
    $uname=mysqli_real_escape_string($db,$_POST['userEmailFromAdmin']);
    $name=mysqli_real_escape_string($db,$_POST['userNameFromAdmin']);
    
    $Culture=getStudentCultureByAdmin($db,$uname);
    $Responsibility=getStudentResponsibilityByAdmin($db,$uname);
    $Sports=getStudentSportsByAdmin($db,$uname);

    $year = date("Y"); 

    echo $name;
    echo $uname;
    echo $Culture;
    echo $Responsibility;
    echo $Sports;


    $emailquery= "SELECT * FROM certificatelog WHERE email='$uname' AND Year='$year'";
    $inquery=mysqli_query($db, $emailquery);
    $emailcount=mysqli_num_rows($inquery);
                  
    if($emailcount>0)
    {
        ?>
            <script>
                alert("You have already inserted data");
                setTimeout(function () {    
                    window.location.href = '../adminlogin/admin.php'; 
                },0);
            </script>
        <?php
    }
    else 
    {
        $query="INSERT INTO certificatelog (Name,Email,Culture,Responsibility,Sports,Year) VALUES('$name','$uname','$Culture','$Responsibility','$Sports','$year')";
        $run=mysqli_query($db,$query);
        echo $run;
        header('location:../adminlogin/admin.php');
    }
    
}
if(isset($_POST['backtoadmin'])){
    header('location:../adminlogin/admin.php');
    
}

?>