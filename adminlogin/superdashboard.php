<?php
require('../includes/function.php');
require('../includes/database.php');
$uemail=$_SESSION['email'];
$utype=$_SESSION['usertype'];


if($_SESSION['email'] and $utype=="admin")
{
    $adminData=getAllAdminDetails($db,$uemail);
    $getimage=getAllAdminDetails($db,$uemail);
}
else
{
  header('location:../includes/logout.php');
}

$blsdata=getAllRegisterStudent($db,'Balasore');
$bbsrdata=getAllRegisterStudent($db,'Bhubaneswar');
$blrdata=getAllRegisterStudent($db,'Balangir');
$pkddata=getAllRegisterStudent($db,'Paralakhemundi');
$ryddata=getAllRegisterStudent($db,'Rayagada');
$chtdata=getAllRegisterStudent($db,'Chatrapur');

for ($month = 1; $month <= 12; $month++) {
  $campuswiseculture[$month]=getAllAcadamicYearStatusBySuperAdmin($db,'Culture',$month);
}

for ($month = 1; $month <= 12; $month++) {
  $campuswisesports[$month]=getAllAcadamicYearStatusBySuperAdmin($db,'Sports',$month);
}
for ($month = 1; $month <= 12; $month++) {
  $campuswiseresponsibility[$month]=getAllAcadamicYearStatusBySuperAdmin($db,'Responsibility',$month);
}


$totalCulture=getAllRegisterStudentProgramwiseBySuperAdmin($db,'Culture');
$totalSports=getAllRegisterStudentProgramwiseBySuperAdmin($db,'Sports');
$totalResponsibility=getAllRegisterStudentProgramwiseBySuperAdmin($db,'Responsibility');
echo $totalCulture;





$allclubis="";
$allclubisCountDat="";
echo $adminData['campus'];

if(isset($_GET['program'])){
  $getallClub=$_GET['program'];
  $dataForGraph=getAllStudentdataprogramwiseBySuperAdmin($db,$getallClub);
  foreach($dataForGraph as $alldatagraphs){
    $allclubis=$allclubis."'".$alldatagraphs['club']."',";
    $allclubisCountDat=$allclubisCountDat."'".$alldatagraphs['totalTime']."',";
  }
}
else{
  $dataForGraph=getAllStudentdataprogramwiseBySuperAdmin($db,'Culture');
  foreach($dataForGraph as $alldatagraphs){
    $allclubis=$allclubis."'".$alldatagraphs['club']."',";
    $allclubisCountDat=$allclubisCountDat."'".$alldatagraphs['totalTime']."',";
  }
}


// echo $allclubis;
// echo $allclubisCountDat;
// echo $getallClub;


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Superadmin Dashboard</title>
    <link rel="icon" href="image/cutm.png" type="image/icon type">
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
            <a href="admin.php" class="logo d-flex align-items-center">
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
                            <a href="adminprof.php"><img src="../images/profileimg/<?=$adminData['profileimg']?>"
                                    height="70px" style=border-radius:50%;></a>
                            <h6><?=$uemail?></h6>
                            <span>Super Admin</span>
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
                <a class="nav-link " href="./superdashboard.php">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="./superstudentdatabse.php">
                    <i class="bi bi-journal-text"></i>
                    <span>Add Student Database</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="./superstudentactivity.php">
                    <i class="bi bi-file-check-fill"></i>
                    <span>Student Activity Data</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="./superadminfacultydata.php">
                    <i class="bi bi-person-badge-fill"></i>
                    <span>Admin & Faculty Database</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link " href="./superadminstudentdata.php">
                    <i class="bi bi-people-fill"></i>
                    <span>registred Student</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link " href="./superprofile.php">
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
                    <li class="breadcrumb-item"><a href="admin.php">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">

                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Participant Status in all Campus</h5>

                            <!-- Line Chart -->
                            <canvas id="lineChart" style="max-height: 400px;"></canvas>
                            <script>
                            document.addEventListener("DOMContentLoaded", () => {
                                new Chart(document.querySelector('#lineChart'), {
                                    type: 'line',
                                    data: {
                                        labels: ['Balasore', 'Bhubaneswar', 'Balangir',
                                            'Paralakhemundi', 'Rayagada', 'Chhatrapur'
                                        ],
                                        datasets: [{
                                            label: 'Number of Students',
                                            data: [<?=$blsdata?>, <?=$bbsrdata?>, <?=$blrdata?>,
                                                <?=$pkddata?>, <?=$ryddata?>, <?=$chtdata?>
                                            ],
                                            fill: false,
                                            borderColor: 'rgb(255, 0, 0)',
                                            tension: 0.1
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
                            <!-- End Line CHart -->

                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Academic Year</h5>

                            <!-- Column Chart -->
                            <div id="columnChart"></div>

                            <script>
                            document.addEventListener("DOMContentLoaded", () => {
                                new ApexCharts(document.querySelector("#columnChart"), {
                                    series: [{
                                        name: 'Culture',
                                        data: [<?=(int)$campuswiseculture[1]?>,
                                            <?=(int)$campuswiseculture[2]?>,
                                            <?=(int)$campuswiseculture[3]?>,
                                            <?=(int)$campuswiseculture[4]?>,
                                            <?=(int)$campuswiseculture[5]?>,
                                            <?=(int)$campuswiseculture[6]?>,
                                            <?=(int)$campuswiseculture[7]?>,
                                            <?=(int)$campuswiseculture[8]?>,
                                            <?=(int)$campuswiseculture[9]?>,
                                            <?=(int)$campuswiseculture[10]?>,
                                            <?=(int)$campuswiseculture[11]?>,
                                            <?=(int)$campuswiseculture[12]?>
                                        ]
                                    }, {
                                        name: 'Sports',
                                        data: [<?=(int)$campuswisesports[1]?>,
                                            <?=(int)$campuswisesports[2]?>,
                                            <?=(int)$campuswisesports[3]?>,
                                            <?=(int)$campuswisesports[4]?>,
                                            <?=(int)$campuswisesports[5]?>,
                                            <?=(int)$campuswisesports[6]?>,
                                            <?=(int)$campuswisesports[7]?>,
                                            <?=(int)$campuswisesports[8]?>,
                                            <?=(int)$campuswisesports[9]?>,
                                            <?=(int)$campuswisesports[10]?>,
                                            <?=(int)$campuswisesports[11]?>,
                                            <?=(int)$campuswisesports[12]?>
                                        ]
                                    }, {
                                        name: 'Responsibility',
                                        data: [<?=(int)$campuswiseresponsibility[1]?>,
                                            <?=(int)$campuswiseresponsibility[2]?>,
                                            <?=(int)$campuswiseresponsibility[3]?>,
                                            <?=(int)$campuswiseresponsibility[4]?>,
                                            <?=(int)$campuswiseresponsibility[5]?>,
                                            <?=(int)$campuswiseresponsibility[6]?>,
                                            <?=(int)$campuswiseresponsibility[7]?>,
                                            <?=(int)$campuswiseresponsibility[8]?>,
                                            <?=(int)$campuswiseresponsibility[9]?>,
                                            <?=(int)$campuswiseresponsibility[10]?>,
                                            <?=(int)$campuswiseresponsibility[11]?>,
                                            <?=(int)$campuswiseresponsibility[12]?>
                                        ]
                                    }],
                                    chart: {
                                        type: 'bar',
                                        height: 350
                                    },
                                    plotOptions: {
                                        bar: {
                                            horizontal: false,
                                            columnWidth: '55%',
                                            endingShape: 'rounded'
                                        },
                                    },
                                    dataLabels: {
                                        enabled: false
                                    },
                                    stroke: {
                                        show: true,
                                        width: 2,
                                        colors: ['standard']
                                    },
                                    xaxis: {
                                        categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul',
                                            'Aug', 'Sep', 'Oct', 'Nov', 'Dec',
                                        ],
                                    },
                                    yaxis: {
                                        title: {
                                            text: 'Hours (Hrs)'
                                        }
                                    },
                                    fill: {
                                        opacity: 1
                                    },
                                    tooltip: {
                                        y: {
                                            formatter: function(val) {
                                                return val + " Hours"
                                            }
                                        }
                                    }
                                }).render();
                            });
                            </script>
                            <!-- End Column Chart -->

                        </div>
                    </div>
                </div>



                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Program</h5>

                            <!-- Pie Chart -->
                            <div id="pieChart"></div>

                            <script>
                            document.addEventListener("DOMContentLoaded", () => {
                                new ApexCharts(document.querySelector("#pieChart"), {
                                    series: [<?=$totalCulture?>, <?=$totalSports?>,
                                        <?=$totalResponsibility?>
                                    ],
                                    chart: {
                                        height: 350,
                                        type: 'pie',
                                        toolbar: {
                                            show: true
                                        }
                                    },
                                    labels: ['Cultutre', 'Sports', 'Responsibility']
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
                            <h5 class="card-title">Club Status</h5>
                            <h6>
                                <a href="superdashboard.php?program=Culture" class="btn btn-dark">
                                    Culture
                                </a>
                                <a href="superdashboard.php?program=Sports" class="btn btn-dark">
                                    Sports
                                </a>
                                <a href="superdashboard.php?program=Responsibility" class="btn btn-dark">
                                    Responsibility
                                </a>
                            </h6>

                            <!-- Bar Chart -->
                            <canvas id="barChart" style="max-height: 400px;"></canvas>
                            <script>
                            document.addEventListener("DOMContentLoaded", () => {
                                new Chart(document.querySelector('#barChart'), {
                                    type: 'bar',
                                    data: {
                                        labels: [<?=$allclubis?>],
                                        datasets: [{
                                            label: 'Bar Chart',
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
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js"
        integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js"
        integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
    function getPr() {
        document.getElementById('program').disabled = true
        axios.get("./api/pr.php").then((response) => {
            console.log(response);
            let options = '<option value="">Select one option</option>';
            for (let each of response.data.data) {
                options += `<option value="${each}">${each}</option>`;
            }
            document.getElementById('program').innerHTML = options;
            document.getElementById('program').disabled = false;
        })
    }

    function getClub() {
        let selection = document.getElementById('program').value;
        if (!selection) return;
        document.getElementById('club').disabled = true
        document.getElementById('club').innerHTML = '<option value="">Loading</option>';
        axios.get("./api/club.php?scrPr=" + selection).then((response) => {
            console.log(response);
            let options = '';
            for (let each of response.data.data) {
                options += `<option value="${each}">${each}</option>`;
            }
            document.getElementById('club').innerHTML = options;
            document.getElementById('club').disabled = false;
        })
    }
    getPr();
    </script>

</body>

</html>