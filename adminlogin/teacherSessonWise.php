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
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Dashboard</title>
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
      <a class="nav-link " href="teacher.php">
        <i class="bi bi-grid"></i>
        <span>Dashboard</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link " href="teacherSessonWise.php">
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
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                        <form action="" method="post">
                            <h5 class="card-title">Filled event timesheet</h5>
                            <div class="row">
                            
                                <div class="col-md-8 bg-light text-right">
                                    <label>Academic year</label>
                                    <select class="form-select" aria-label="Default select example" name="selectSession">
                                    <?php
                                      $year=getAllYear($db);
                                      foreach($year as $ct){
                                    ?>
                                      <option value="<?=$ct['Year']?>"><?=$ct['Year']?></option>
                                    <?php
                                      }
                                    ?>
                                    </select>
                                </div>
                                <div class="col-md-4 bg-light text-right"><br>
                                    <button type="submit" class="btn btn-primary btn-lg float-right" name="addpost">Submit</button>
                                </div>
                                
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
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        if (isset($_POST['addpost'])) {
                                          $post[]="";
                                          $post['NameOfStd']="";
                                          $post['emailOfStd']="";
                                          $post['yearOfPr']="";
                                          $post['csrPr']="";
                                          $post['club']="";
                                          $post['date']="";
                                          $post['fromTime']="";
                                          $post['endTime']="";
                                          $post['totalTime']="";
                                          $post['status']="";
                                          $post['id']="";
                                          $sessionSelect=mysqli_real_escape_string($db,$_POST['selectSession']);
                                          $posts=getAllPostTeacherSession($db,$teacherData['campus'],$teacherData['Clubget'],$sessionSelect);
                                          $count=1;
                                          foreach($posts as $post){
                                        }
                                          
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
                                            <td>
                                                <a href="../includes/status.php?id=<?=$post['id']?>"
                                                    class="btn btn-danger">
                                                    Aprove <i class="bi bi-exclamation"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <?php
                                            $count++;
                                          }
                                        ?>



                                    </tbody>
                                </table>
                                <!-- End Table with stripped rows -->
                              
                              </from>
                                        

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