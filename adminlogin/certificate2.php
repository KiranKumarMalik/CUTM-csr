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
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CSR Certificate</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'><link rel="stylesheet" href="./style.css">
  <style>
  @font-face {
    font-family: 'Open Sans';
    font-style: normal;
    font-weight: 400;
    font-stretch: normal;
    src: url(https://fonts.gstatic.com/s/opensans/v34/memSYaGs126MiZpBA-UvWbX2vVnXBbObj2OVZyOOSr4dVJWUgsjZ0B4gaVc.ttf) format('truetype');
  }
  @font-face {
    font-family: serif;;
    font-style: normal;
    font-weight: 400;
    src: url(https://fonts.gstatic.com/s/pinyonscript/v17/6xKpdSJbL9-e9LuoeQiDRQR8WOXaPw.ttf) format('truetype');
  }
  @font-face {
    font-family: 'Rochester';
    font-style: normal;
    font-weight: 400;
    src: url(https://fonts.gstatic.com/s/rochester/v18/6ae-4KCqVa4Zy6Fif-UC2FHS.ttf) format('truetype');
  }
  .cursive {
    font-family: serif, cursive;
  }
  .sans {
    font-family: 'Open Sans', sans-serif;
  }
  .bold {
    font-weight: bold;
  }
  .block {
    display: block;
  }
  .underline {
    border-bottom: 1px solid #777;
    padding: 5px;
    margin-bottom: 15px;
  }
  .margin-0 {
    margin: 0;
  }
  .padding-0 {
    padding: 0;
  }
  .pm-empty-space {
    height: 40px;
    width: 100%;
  }
  body {
    padding: 20px 0;
    background: #ccc;
  }
  .backimage{
    position: fixed;
    height: 100vh;
    width: 100vw;
    top:0;
    left:0;
  }
  .pm-certificate-container {
    position: relative;
    width: 1100px;
    height: 750px;
    background-image: url("image/csr.jpg");
    background-position: center;
    background-size: 1100px 750px;
    padding: 30px;
    color: #333;
    font-family: 'Comic Sans MS', Brush Script MT;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.5);
    /*background: -webkit-repeating-linear-gradient(
      45deg,
      #618597,
      #618597 1px,
      #b2cad6 1px,
      #b2cad6 2px
    );
    background: repeating-linear-gradient(
      90deg,
      #618597,
      #618597 1px,
      #b2cad6 1px,
      #b2cad6 2px
    );*/
  }
  .pm-certificate-container .outer-border {
    width: 1087px;
    height: 735px;
    position: absolute;
    left: 50%;
    margin-left: -544px;
    top: 50%;
    margin-top: -367px;
    
  }
  .pm-certificate-container .inner-border {
    width: 1005px;
    height: 654px;
    position: absolute;
    left: 50%;
    margin-left: -503px;
    top: 50%;
    margin-top: -326px;
    
  }
  .pm-certificate-container .pm-certificate-border {
    position: relative;
    width: 1030px;
    height: 681px;
    padding: 0;
    border: 1px solid #E1E5F0;
    background-color: #ffffff;
    background-image: url("image/cutmbg.png");
    background-repeat: no-repeat;
    background-size: 250px 210px;
    background-position: center;
    left: 50%;
    margin-left: -515px;
    top: 50%;
    margin-top: -342px;
  }
  .pm-certificate-container .pm-certificate-border .pm-certificate-block {
    width: 650px;
    height: 200px;
    position: relative;
    left: 50%;
    margin-left: -325px;
    top: 70px;
    margin-top: 0;
  }
  .pm-certificate-container .pm-certificate-border .pm-certificate-header {
    margin-bottom: px;
  }
  .pm-certificate-container .pm-certificate-border .pm-certificate-title {
    position: relative;
    top: 15px;
  }
  .pm-certificate-container .pm-certificate-border .pm-certificate-title h2 {
    font-size: 34px !important;
  }
  .pm-certificate-container .pm-certificate-border .pm-certificate-body {
    padding: 40px;
  }
  .pm-certificate-container .pm-certificate-border .pm-certificate-body .pm-name-text {
    font-size: 20px;
  }
  .pm-certificate-container .pm-certificate-border .pm-earned {
    margin: 15px 0 20px;
  }
  .pm-certificate-container .pm-certificate-border .pm-earned .pm-earned-text {
    font-size: 20px;
  }
  .pm-certificate-container .pm-certificate-border .pm-earned .pm-credits-text {
    font-size: 15px;
  }
  .pm-certificate-container .pm-certificate-border .pm-course-title .pm-earned-text {
    font-size: 20px;
  }
  .pm-certificate-container .pm-certificate-border .pm-course-title .pm-credits-text {
    font-size: 15px;
  }
  .pm-certificate-container .pm-certificate-border .pm-certified {
    font-size: 12px;
  }
  .pm-certificate-container .pm-certificate-border .pm-certified .underline {
    margin-bottom: 5px;
  }
  .pm-certificate-container .pm-certificate-border .pm-certificate-footer {
    width: 950px;
    height: 150px;
    position: relative;
    left: 50%;
    margin-left: -470px;
    bottom: -95px;
  }
</style>
</head>
<body>
<!-- partial:index.partial.html -->

<div class="container pm-certificate-container">

  

    
   
    <div class="outer-border"></div>
    <div class="inner-border"></div>
    
    <div class="pm-certificate-border col-xs-12">
    
      <div class="row pm-certificate-header">
        <div class="pm-certificate-title cursive col-xs-12 text-center">
          <h2>Centurion University of Technology and Management</h2>
          <img src="image/logo.png" width="100" height="150">
        </div>
      

      <div class="row pm-certificate-body">
        
        <div class="pm-certificate-block">
            <div class="col-xs-12">
              <div class="row">
                <div class="col-xs-2"><!-- LEAVE EMPTY --></div>
                <div class="pm-certificate-name underline margin-0 col-xs-8 text-center">
                  <span class="pm-name-text bold">CERTIFICATE OF COMPLETION</span>
                </div>
                <div class="col-xs-2"><!-- LEAVE EMPTY --></div>
              </div>
            </div>
                  <p>This is awarded to <?=$studentdata['name']?> having registration <?=$studentdata['regd']?> had successfully completed the Culture Sports and Responsibility activities under the academic track here at the Centurion University of Technology and Management-Bhubaneswar, with <?=$score?> grade. </p>
            <div class="col-xs-12">
              <div class="row">
                <div class="col-xs-2"><!-- LEAVE EMPTY --></div>
                <div class="pm-course-title col-xs-8 text-center">
                  <span class="pm-earned-text block cursive">Thank you for joining CSaR</span>
                </div>
                <div class="col-xs-2"><!-- LEAVE EMPTY --></div>
              </div>
            </div>
</div>
</div>
            <div class="col-xs-12">
              <div class="row">
                <div class="col-xs-2"><!-- LEAVE EMPTY --></div>
                
                <div class="col-xs-2"><!-- LEAVE EMPTY --></div>
              </div>
            </div>
        </div>       
        
        <div class="col-xs-12">
          <div class="row">
            <div class="pm-certificate-footer">
                <div class="col-xs-4 pm-certified col-xs-4 text-center">
                  <span class="pm-credits-text block sans"></span>
                  <span class="pm-empty-space block underline"></span>
                  <span class="bold block">Dean, Students'Welfare</span>
                </div>
                <div class="col-xs-4">
                  <!-- LEAVE EMPTY -->
                </div>
                <div class="col-xs-4 pm-certified col-xs-4 text-center">
                  <span class="pm-credits-text block sans"></span>
                  <span class="pm-empty-space block underline"></span>
                  <span class="bold block">Director</span>
                </div>
            </div>
          </div>
        </div>

      </div>

    </div>
  </div>
  
  <br><br>
  

</body>
<center><button class="btn btn-success btn-lg float-right" type="click" onclick="finalCertificate()">Print Final Certificate</button><center>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js'></script>

    <script>
        function finalCertificate() {
            // var divContents = document.getElementById("main").innerHTML;
            // var a = window.open('', '', 'height=500, width=500');
            // a.document.write(`
            

            // `);
            // a.document.close();
            // a.print();
            window.print();
        }
    </script>

</body>

</html>