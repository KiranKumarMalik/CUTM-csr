<?php
require('../includes/function.php');
require('../includes/database.php');
$campus=$_GET['campus'];


?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Achievement details</title>
  <link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
  <section>
</center><span><h1><?=$campus?> Campus</h1></span></center>
<div><a href="../campusachievements.php"><p style="text-align:left"><i class="fa fa-arrow-left" aria-hidden="true"></i></p></a></div>
<div class="u-center-text u-margin-top-huge">
      </div>
  <div class="container" style="background-image: url('images/achievement.jpg');">

    

  <?php
    $getAllArchivement=getAllArchivement($db,$campus);
    foreach($getAllArchivement as $getAllArchivements){


    ?>


    <div class="card">
      <div class="content">
        <div class="img"><img src="./images/Previous achievements/<?=$getAllArchivements['profile_img']?>" alt=""></div>
        <div class="cardContent">
          <h3><?=$getAllArchivements['name']?><br><span></span></h3>
          <p><?=$getAllArchivements['branch']?></p>
          <p><?=$getAllArchivements['achievementdetails']?> </p>
          <p><?=$getAllArchivements['academicyear']?>  </p>
        </div>
      </div>
    </div>
    

 <?php
    }
 ?>




  </div>


</section>



<!-- partial -->
  
</body>

</html>
