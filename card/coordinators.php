<?php
require('../includes/function.php');
require('../includes/database.php');
$campus=$_GET['campus'];
$cordinatorType=$_GET['coordinator'];

if($cordinatorType=="ClubInCharges"){
  $nameofClub="Club In Charges";
}else if($cordinatorType=="FacultyInCharges"){
  $nameofClub="Faculty In Charges ";
}else if($cordinatorType=="StudentInCharges"){
  $nameofClub="Student In Charges ";
}

?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Coordinator details</title>
  <link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
  <section>
</center><span><h1><?=$nameofClub?> of Campus</h1></span></center>
<div><a href="../coordinators.php"><p style="text-align:left"><i class="fa fa-arrow-left" aria-hidden="true"></i></p></a></div>
<div class="u-center-text u-margin-top-huge">
      </div>
  <div class="container" style="background-image: url('images/cutmbg.jpg');">

    <?php
    $getAllCordinatordata=getAllCodrinator($db,$campus,$cordinatorType);
    foreach($getAllCordinatordata as $getAllCordinatordatas){


    ?>




    <div class="card">
      <div class="content">
        <div class="img"><img src="./images/co-ordinators profile image/<?=$getAllCordinatordatas['profile_img'] ?>" alt="<?=$getAllCordinatordatas?>"></div>
        <div class="cardContent">
          <h3><?=$getAllCordinatordatas['name']?><br><span><?=$getAllCordinatordatas['mail']?></span></h3>
          <p><?=$getAllCordinatordatas['branch']?></p>
        </div>
      </div>
      <ul class="sci">
      <li style="--i:1">
          <a href="mailto:<?=$getAllCordinatordatas['mail']?>"><i class="fa fa-envelope" aria-hidden="true"></i></a>
        </li>
        <li style="--i:1">
          <a href="<?=$getAllCordinatordatas['facebook']?>"><i class="fa fa-facebook" aria-hidden="true"></i></a>
        </li>
        <li style="--i:2">
          <a href="<?=$getAllCordinatordatas['instagram']?>"><i class="fa fa-instagram" aria-hidden="true"></i></a>
        </li>
        <li style="--i:3">
          <a href="<?=$getAllCordinatordatas['github']?>"><i class="fa fa-github" aria-hidden="true"></i></a>
        </li>
        <li style="--i:3">
        <a href="https://api.whatsapp.com/send/?phone=91<?=$getAllCordinatordatas['whatsapp']?>&text&app_absent=Hi"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
        </li>
        <li style="--i:3">
        <a href="<?=$getAllCordinatordatas['linkedin']?>"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
        </li>
    </ul>
    </div>

    <?php
}
    ?>

  </div>


</section>



<!-- partial -->
  
</body>

</html>
