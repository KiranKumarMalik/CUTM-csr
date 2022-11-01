<?php
require('../includes/function.php');
require('../includes/database.php');
$uemail=$_SESSION['email'];
$utype=$_SESSION['usertype'];
if($_SESSION['email'] and $utype=="teacher")
{
  $teacherData=getTeacherDetails($db,$uemail);
  ?>
    <!-- <script>
      alert("welcome ");
    </script> -->
  <?php
}
else
{
  header('location:../includes/logout.php');
}

$getengdata=getAllRegisterStudentSchoolAndclubwiseByTeacher($db,$teacherData['campus'],$teacherData['Clubget'],'School of Engineering and Technology');
$getswamidata=getAllRegisterStudentSchoolAndclubwiseByTeacher($db,$teacherData['campus'],$teacherData['Clubget'],'M.S. Swaminathan School of Agriculture');
$getfishdata=getAllRegisterStudentSchoolAndclubwiseByTeacher($db,$teacherData['campus'],$teacherData['Clubget'],'School of Fisheries');
$getappliedsciencedata=getAllRegisterStudentSchoolAndclubwiseByTeacher($db,$teacherData['campus'],$teacherData['Clubget'],'School of Applied Sciences');
$getagriculturedata=getAllRegisterStudentSchoolAndclubwiseByTeacher($db,$teacherData['campus'],$teacherData['Clubget'],'School of Agriculture and Bio-Engineering');
$getmediadata=getAllRegisterStudentSchoolAndclubwiseByTeacher($db,$teacherData['campus'],$teacherData['Clubget'],'School of Media and Communication');
$getmanagementdata=getAllRegisterStudentSchoolAndclubwiseByTeacher($db,$teacherData['campus'],$teacherData['Clubget'],'School of Management');
$getparamedicsdata=getAllRegisterStudentSchoolAndclubwiseByTeacher($db,$teacherData['campus'],$teacherData['Clubget'],'School Of Paramedics & Allied Health Science');
$getpharmacydata=getAllRegisterStudentSchoolAndclubwiseByTeacher($db,$teacherData['campus'],$teacherData['Clubget'],'School Of Pharmacy');
$getforensicdata=getAllRegisterStudentSchoolAndclubwiseByTeacher($db,$teacherData['campus'],$teacherData['Clubget'],'School of Forensic Sciences');
$getvocationaledudata=getAllRegisterStudentSchoolAndclubwiseByTeacher($db,$teacherData['campus'],$teacherData['Clubget'],'School Of Vocational Education and Training');
$getvocationaltrainingdata=getAllRegisterStudentSchoolAndclubwiseByTeacher($db,$teacherData['campus'],$teacherData['Clubget'],'School of Vocational Training');


$getteacherdashboarddaywise=getAllTeacherdaywisegraph($db,$teacherData['Clubget']);
$mydatestr="";
$mydatestrdata="";
$counter1=0;
foreach($getteacherdashboarddaywise as $daywisedatas){
  $mydatestr="'".$daywisedatas['date']."',".$mydatestr;
  $mydatestrdata="'".$daywisedatas['totalTime']."',".$mydatestrdata;
  $counter1++;
  if($counter1 >=15){
    break;
  }
}
echo $mydatestr;
echo $mydatestrdata;
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="teacher.php" class="logo d-flex align-items-center">
      <img src="../images/cutm.png" alt="">
      <span class="d-none d-lg-block"> | CSaR CUTM</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->


    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">




        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            

            <span class="d-none d-md-block dropdown-toggle ps-2"><?=$uemail?></suserNamepan>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
            <a href="facultyprof.php"><img src="../images/profileimg/<?=$teacherData['profileimage']?>" height="70px" style=border-radius:50%;></a>
              <h6><?=$uemail?></h6>
              <span>Teacher</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            

            <li>
              <a class="dropdown-item d-flex align-items-center" href="../includes/logout.php">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

  <ul class="sidebar-nav" id="sidebar-nav">

<li class="nav-item">
      <a class="nav-link " href="teacherdashboard.php">
        <i class="bi bi-grid"></i>
        <span>Dashboard</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link " href="teacher.php">
        <i class="bi bi-calendar3"></i>
        <span>Event timesheet approval</span>
      </a>
    </li>
        <li class="nav-item">
              <a class="nav-link " href="facultyprof.php">
                  <i class="bi bi-person-fill"></i>
                  <span>Profile</span>
              </a>
          </li>
         <li class="nav-item">
              <a class="nav-link " href="../includes/logout.php">
                  <i class="bi bi-box-arrow-right"></i>
                  <span>Log out</span>
              </a>
          </li>



  </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="teacher.php">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
      <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Schoolwise Status</h5>

              <!-- Pie Chart -->
              <div id="pieChart"></div>

              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  new ApexCharts(document.querySelector("#pieChart"), {
                    series: [<?=$getengdata?>, <?=$getswamidata?>, <?=$getfishdata?>, <?=$getappliedsciencedata?>, <?=$getagriculturedata?>, <?=$getmediadata?>, <?=$getmanagementdata?>, <?=$getparamedicsdata?>, <?=$getpharmacydata?>, <?=$getforensicdata?>, <?=$getvocationaledudata?>, <?=$getvocationaltrainingdata?>],
                    chart: {
                      height: 350,
                      type: 'pie',
                      toolbar: {
                        show: true
                      }
                    },
                    labels: ['School of Engineering and Technology', 'M.S. Swaminathan School of Agriculture', 'School of Fisheries', 'School of Applied Sciences', 'School of Agriculture and Bio-Engineering', 'School of Media and Communication', 'School of Management', 'School Of Paramedics & Allied Health Science', 'School Of Pharmacy', 'School of Forensic Sciences', 'School Of Vocational Education and Training','School of Vocational Training']
                  }).render();
                });
              </script>
              <!-- End Pie Chart -->

            </div>
          </div>
        </div>


        <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Daywise time spent</h5>

              <!-- Area Chart -->
              <div id="areaChart"></div>

              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  const series = {
                    "monthDataSeries1": {
                      "prices": [<?=$mydatestrdata?>],
                      "dates": [<?=$mydatestr?>]
                    }
                  }
                  new ApexCharts(document.querySelector("#areaChart"), {
                    series: [{
                      name: "HOURS",
                      data: series.monthDataSeries1.prices
                    }],
                    chart: {
                      type: 'area',
                      height: 350,
                      zoom: {
                        enabled: false
                      }
                    },
                    dataLabels: {
                      enabled: false
                    },
                    stroke: {
                      curve: 'straight'
                    },
                    subtitle: {
                      text: 'Hour Movements',
                      align: 'left'
                    },
                    labels: series.monthDataSeries1.dates,
                    xaxis: {
                      type: 'dates',
                    },
                    yaxis: {
                      opposite: true
                    },
                    legend: {
                      horizontalAlign: 'left'
                    }
                  }).render();
                });
              </script>
              <!-- End Area Chart -->

            </div>
          </div>
        </div>

              <!-- End of the chart -->

              <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Post</h5>
              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th>Sl</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col-8">Year of Program</th>
                    <th scope="col">CSaR program</th>
                    <th scope="col">Club</th>
                    <th scope="col">Date</th>
                    <th scope="col">From Time</th>
                    <th scope="col">End Time</th>
                    <th scope="col">Total</th>
                    <th scope="col">Status</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  echo $teacherData['campus'];
                  echo $teacherData['Clubget'];
                    $posts=getAllPostTeacher($db,$teacherData['campus'],$teacherData['Clubget']);
                    $count=1;
                    foreach($posts as $post){
                    ?>
                      <tr>
                        <th scope="row"><?=$count?></th>
                        <td><?=$post['NameOfStd']?></td>
                        <td><?=$post['emailOfStd']?></td>
                        <td><?=$post['yearOfPr']?></td>
                        <td><?=$post['csrPr']?></td>
                        <td><?=$post['club']?></td>
                        <td><?=$post['date']?></td>
                        <td><?=$post['fromTime']?></td>
                        <td><?=$post['endTime']?></td>
                        <td><?=(int)$post['totalTime']?></td>
                        <td><?=$post['status']?></td>
                      </tr>
                    <?php
                    $count++;
                  }
                  ?>
                  
                  
                  
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>CSaR | CUTM</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      Designed by <a href="https://cutm.ac.in/">Centurion University of Technology and Management</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>