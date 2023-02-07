<?php
require('../includes/function.php');
require('../includes/database.php');
$uemail=$_SESSION['email'];
$utype=$_SESSION['usertype'];






if($_SESSION['email'] and $utype=="student")
{
  $studentdata=getUserNmae($db,$uemail);
  $studentData=getAllStudentDetails($db,$uemail);
  $AddmissionYear=$studentData['admissionyear'];
  $AddmissionYear=getYearBySession($db,$AddmissionYear);
  // echo $AddmissionYear;
  $posts=getAllPostAdmin($db);

  $studentResultyr1=getStudentResultyr1($db,$uemail,$AddmissionYear);
  $studentResultyr2=getStudentResultyr2($db,$uemail,$AddmissionYear+1);
  $studentResultyr3=getStudentResultyr3($db,$uemail,$AddmissionYear+2);
  $studentResultyr4=getStudentResultyr4($db,$uemail,$AddmissionYear+3);
  




  $score="";
      $totalCradit=(int)$studentResultyr1['Culture'] + (int)$studentResultyr1['Sports'] + (int)$studentResultyr1['Responsibility']+ (int)$studentResultyr2['Culture'] + (int)$studentResultyr2['Sports'] + (int)$studentResultyr2['Responsibility'] + (int)$studentResultyr3['Culture'] + (int)$studentResultyr3['Sports'] + (int)$studentResultyr3['Responsibility'] + (int)$studentResultyr4['Culture'] + (int)$studentResultyr4['Sports'] + (int)$studentResultyr4['Responsibility'];
      $avrageCradit=$totalCradit/4;
      if ($avrageCradit >=91 ) {
        $score="O";
      }
      elseif ($avrageCradit >=76 &&  $avrageCradit <=90) {
        $score="E";
      }
      elseif ($avrageCradit >=61 &&  $avrageCradit <=75) {
        $score="A";
      }
      elseif ($avrageCradit >=46 &&  $avrageCradit <=60) {
        $score="B";
      }
      elseif ($avrageCradit >=30 &&  $avrageCradit <=45) {
        $score="C";
      }
      else {
        $score="C";
      }



}
else
{
  echo "working";
  header('location:../includes/logout.php');
}
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.container {
  position: relative;
  text-align: center;
  color: rgb(251, 8, 8);
}

.cutm-heading {
  position: absolute;
  top: 10%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: rgb(0, 0, 0);
  font-size: 15px;
  font-style: "bold";
  font-family: "Times New Roman", Times, serif;
  text-align: center;
}

.cutm-logo {
  position: absolute;
  top: 25%;
  left: 50%;
  transform: translate(-50%, -50%);
}
.certificate-heading {
  position: absolute;
  top: 35%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: rgb(147, 131, 5);
  font-size: 48px;
  font-family: "Old English Text MT", Times, serif;
}

.presentingto-award {
  position: absolute;
  top: 46%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: rgb(0, 0, 0);
  font-size: 26px;
  font-family: "Gabriola", Times, serif;
}

.student-name {
  position: absolute;
  top: 55%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: rgb(0, 0, 0);
  font-size: 50px;
  font-family: "Gabriola", Times, serif;
}

.certificate-description {
  position: absolute;
  top: 70%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: rgb(6, 7, 15);
  text-align: justify;
  line-height: 1.0;
  font-size: 25px;
  font-family: "Gabriola", Times, serif;
}

.dean-studentwelfare {
  position: absolute;
  bottom: 6%;
  left: 21%;
  color: rgb(0, 0, 0);
  font-size: 20px;
  font-family: "Gabriola", Times, serif;
}

.director {
    position: absolute;
  bottom: 6%;
  right: 26%;
  color: rgb(0, 0, 0);
  font-size: 20px;
  font-family: "Gabriola", Times, serif;
}

</style>
</head>
<body>


<div class="container">
  <img src="./image/certificate.jpg" alt="background" style="width:95%;">
  <div class="cutm-heading"><h1>Centurion University of Technology and Management</h1></div>
  <div class="cutm-logo"><img src="./image/cutmlogo.png" alt="logo" style="width:14%;"></div>
  <div class="certificate-heading">Certificate of completion</div>
  <div class="presentingto-award">The following award is given to</div>
  <div class="student-name"><?=$studentdata['name']?></div>
  <div class="certificate-description">This is awarded to having registration <?=$studentdata['regd']?> had successfully completed the Culture Sports and Responsibility activities under the academic track here at the Centurion University of Technology and Management-Bhubaneswar, with <?=$score?> grade.</div>
  <div class="dean-studentwelfare">Dean, Students' Welfare</div>
  <div class="director">Director</div>
</div>

</body>
</html> 
