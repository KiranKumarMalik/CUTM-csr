<?php
require('../includes/function.php');
require('../includes/database.php');
$uemail=$_SESSION['email'];
$utype=$_SESSION['usertype'];

// this is- get total csr Activity
$uSports=getStudentSports($db,$uemail);
echo $uSports;

$uResponsibility=getStudentResponsibility($db,$uemail);
echo $uSports;

$uCulture=getStudentCulture($db,$uemail);
echo $uSports;



if($_SESSION['email'] and $utype=="student")
{
    $studentdata=getUserNmae($db,$uemail);
  ?>
<!-- <script>
      alert("welcome ");
    </script> -->
<?php
}
else
{
  echo "working";
  header('location:../includes/logout.php');
}



$allclubis="";
$allclubisCountDat="";



if(isset($_GET['program'])){
  $getallClub=$_GET['program'];
  $dataForGraph=getAllStudentdataprogramwiseGrappg($db,$studentdata['email'],$getallClub);
  foreach($dataForGraph as $alldatagraphs){
    $allclubis=$allclubis."'".$alldatagraphs['club']."',";
    $allclubisCountDat=$allclubisCountDat."'".$alldatagraphs['totalTime']."',";
  }
}
else{
  $dataForGraph=getAllStudentdataprogramwiseGrappg($db,$studentdata['email'],'Culture');
  foreach($dataForGraph as $alldatagraphs){
    $allclubis=$allclubis."'".$alldatagraphs['club']."',";
    $allclubisCountDat=$allclubisCountDat."'".$alldatagraphs['totalTime']."',";
  }
}





echo $allclubis;
echo $allclubisCountDat;

// ['Dance', 'Mucic', 'DJ']
$mydatestr="";
$mydatestrdata="";
$counter1=0;
$daywisedata=getAllStudentdaywisegraph($db,$studentdata['email']);
foreach($daywisedata as $daywisedatas){
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
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

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
            <a href="student.php" class="logo d-flex align-items-center">
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
                        <a href="prof.php"><img src="../images/profileimg/<?=$studentdata['profileimage']?>" height="70px" style=border-radius:50%;></a>
                            <h6><?=$uemail?></h6>
                            <span>Student</span>
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
            <a class="nav-link " href="student.php">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link " href="generatereport.php">
                <i class="bi bi-file-earmark-plus"></i>
                <span>Add Activity</span>
            </a>
        </li>

           <li class="nav-item">
                <a class="nav-link " href="studentresult.php">
                    <i class="bi bi-file-text"></i>
                    <span>CSaR Report</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link " href="certificate.php">
                    <i class="bi bi-award-fill"></i>
                    <span>Generate E-Certificate</span>
                </a>
            </li>

           <li class="nav-item">
                <a class="nav-link " href="prof.php">
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
                    <li class="breadcrumb-item"><a href="student.php">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">

                <!-- Left side columns -->
                <div class="col-lg">
                    <div class="row">


                        <!-- Customers Card -->
                        <div class="col-xxl-4 col-xl-12">

                            <div class="card info-card customers-card">
                                <div class="card-body">
                                    <h5 class="card-title">Culture</h5>

                                    <div class="d-flex align-items-center">
                                        <a href="./student.php?program=Culture">
                                          <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-people-fill"></i>
                                          </div>
                                        </a>
                                        <a href="./student.php?program=Culture">
                                          <div class="ps-3">
                                              <h6><?=(int)$uCulture?> Hrs</h6>
                                          </div>
                                        </a>  
                                        
                                    </div>

                                </div>
                            </div>

                        </div><!-- End Customers Card -->



                        <!-- Sales Card -->
                        <div class="col-xxl-4 col-md-6">
                            <div class="card info-card sales-card">
                                <div class="card-body">
                                    <h5 class="card-title">Sports</h5>

                                    <div class="d-flex align-items-center">
                                      <a href="./student.php?program=Culture">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-trophy-fill"></i>
                                        </div>
                                    </a>
                                    <a href="./student.php?program=Sports">
                                        <div class="ps-3">
                                            <h6><?=(int)$uSports?> Hrs</h6>
                                        </div>
                                    </a>
                                    </div>
                                </div>

                            </div>
                        </div><!-- End Sales Card -->

                        <!-- Revenue Card -->
                        <div class="col-xxl-4 col-md-6">
                            <div class="card info-card revenue-card">
                                <div class="card-body">
                                    <h5 class="card-title">Responsibility</h5>

                                    <div class="d-flex align-items-center">
                                      <a href="./student.php?program=Responsibility">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-hand-thumbs-up-fill"></i>
                                        </div>
</a>
                                        <a href="./student.php?program=Responsibility">
                                        <div class="ps-3">
                                            <h6><?=(int)$uResponsibility?> Hrs</h6>
                                        </div>
</a>
                                    </div>
                                </div>

                            </div>
                        </div><!-- End Revenue Card -->

                        

                        <!-- Reports -->




                    </div>
                </div><!-- End Left side columns -->



            </div>

        </section>

        <section class="section">
            <div class="row">
            <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Club Status</h5>

              <!-- Bar Chart -->
              <canvas id="barChart" style="max-height: 400px;"></canvas>
              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  new Chart(document.querySelector('#barChart'), {
                    type: 'bar',
                    data: {
                      // 1st for loop for dynamic
                      labels: [<?=$allclubis?>],
                      datasets: [{
                        label: 'Bar Chart',
                        // 2nd for loop for dynamic
                        data: [<?=$allclubisCountDat?>],
                        backgroundColor: [
                          'rgba(255, 99, 132, 0.2)',
                          'rgba(255, 159, 64, 0.2)',
                          'rgba(255, 205, 86, 0.2)',
                          'rgba(75, 192, 192, 0.2)',
                          'rgba(54, 162, 235, 0.2)',
                          'rgba(153, 102, 255, 0.2)',
                          'rgba(201, 203, 207, 0.2)'
                        ],
                        borderColor: [
                          'rgb(255, 99, 132)',
                          'rgb(255, 159, 64)',
                          'rgb(255, 205, 86)',
                          'rgb(75, 192, 192)',
                          'rgb(54, 162, 235)',
                          'rgb(153, 102, 255)',
                          'rgb(201, 203, 207)'
                        ],
                        borderWidth: 1
                      }]
                    },
                    options: {
                      scales: {
                        y: {
                          beginAtZero: true
                        }
                      }
                    }
                  });
                });
              </script>
              <!-- End Bar CHart -->

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
                                        <th scope="col-8">Acadamic Year</th>
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
                    
                    $posts=getAllPost($db,$uemail);
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

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

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