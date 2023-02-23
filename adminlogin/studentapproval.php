<?php
require('../includes/function.php');
require('../includes/database.php');
$uemail=$_SESSION['email'];
$utype=$_SESSION['usertype'];
if($_SESSION['email'] and $utype=="admin")
{
    $adminData=getAllAdminDetails($db,$uemail);
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
                        <a href="adminprof.php"><img src="../images/profileimg/<?=$adminData['profileimg']?>" height="70px" style=border-radius:50%;></a>
                            <h6><?=$uemail?></h6>
                            <span>Admin</span>
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
            <a class="nav-link collapsed" href="./admin.php">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
          <a class="nav-link collapsed" href="./certificateapprove.php">
              <i class="bi bi-file-check-fill"></i>
              <span>Certificate approval</span>
          </a>
      </li>

      <li class="nav-item">
          <a class="nav-link" href="./studentapproval.php">
              <i class="bi bi-person-badge-fill"></i>
              <span>Participants ID Approval</span>
          </a>
      </li> 

    <li class="nav-item">
          <a class="nav-link collapsed" href="./addfaculty.php">
              <i class="bi bi-journal-text"></i>
              <span>Add Faculty In-charge</span>
          </a>
      </li>

      <li class="nav-item">
          <a class="nav-link collapsed" href="./addClub.php">
              <i class="bi bi-file-earmark-plus"></i>
              <span>Add New Club</span>
          </a>
      </li>

      <li class="nav-item">
              <a class="nav-link collapsed" href="./addannouncement.php">
                  <i class="bi bi-megaphone-fill"></i>
                  <span>Announcements</span>
              </a>
          </li>

      <li class="nav-item">
              <a class="nav-link collapsed" href="./gallery_uploads.php">
                  <i class="bi bi-images"></i>
                  <span>Gallery</span>
              </a>
          </li>

          <li class="nav-item">
              <a class="nav-link collapsed" href="./coordinator_uploads.php">
                  <i class="bi bi-people-fill"></i>
                  <span>Co-ordinators</span>
              </a>
          </li>

          <li class="nav-item">
              <a class="nav-link collapsed" href="./achievement_uploads.php">
                  <i class="bi bi-trophy-fill"></i>
                  <span>Achievements</span>
              </a>
          </li>

         <li class="nav-item">
              <a class="nav-link collapsed" href="./adminprof.php">
                  <i class="bi bi-person-fill"></i>
                  <span>Profile</span>
              </a>
          </li>
         <li class="nav-item">
              <a class="nav-link collapsed" href="../includes/logout.php">
                  <i class="bi bi-box-arrow-right"></i>
                  <span>Log out</span>
              </a>
          </li>



        </ul>

    </aside><!-- End Sidebar-->

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Participants ID approval</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="admin.php">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Requests</h5>
                            <!-- Table with stripped rows -->
                            <form action="../includes/multipleselectadmin.php" method="POST">
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th>Sl</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">schoolname	</th>
                                        <th scope="col">program</th>
                                        <th scope="col">branch</th>
                                        <th scope="col">campus</th>
                                        <th scope="col">mobile</th>
                                        <th scope="col">Profile</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $statuschange="";
                                        $changecolor="success";
                                        $campus=$adminData['campus'];
                                        $posts=getAllStudentDetailsByAdmin($db,$campus);
                                        $count=1;
                                        foreach($posts as $post){
                                            if($post['status'] == "Approved"){
                                                $statuschange="return false";
                                                $changecolor="secondary";
                                            }
                                        
                                    ?>
                                    <tr>
                                    <input type="hidden" name="allName[]" value="<?=$post['name']?>">
                                    <input type="hidden" name="allEmail[]" value="<?=$post['email']?>">
                                        <th scope="row"><?=$count?></th>
                                        <td><?=$post['name']?></td>
                                        <td><?=$post['email']?></td>
                                        <td><?=$post['schoolname']?></td>
                                        <td><?=$post['program']?></td>
                                        <td><?=$post['branch']?></td>
                                        <td><?=$post['campus']?></td>
                                        <td><?=$post['mobile']?></td>
                                        <td><img src="../images/profileimg/<?=$post['profileimage']?>" height="30px"></td>
                                        <td><?=$post['status']?></td>
                                        <td>
                                        <a href="#" class="btn btn-dark" target="_blank" data-toggle="modal" data-target=".<?=$post['id']?>">
                            Details 
                          </a>       
                                        </td>
                                    </tr>
                                    <div class="modal fade <?=$post['id']?>" tabindex="-1" role="dialog"
                                        aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">

                                                <br>

                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <div class="card mb-4">
                                                            <div class="card-body text-center">
                                                                <img src="../images/profileimg/<?=$post['profileimage'] ?>"
                                                                    alt="avatar" class="rounded-circle img-fluid"
                                                                    style="width: 130px;">
                                                                <h5 class="my-3"><?=$post['name']?></h5>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <div class="card mb-4">
                                                            <div class="card-body">
                                                                <div class="row">
                                                                    <div class="col-sm-3">
                                                                        <p class="mb-0">Full Name </p>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <p class="text-muted mb-0">
                                                                            <?=$post['name']?></p>
                                                                    </div>
                                                                </div>
                                                                <hr>
                                                                <div class="row">
                                                                    <div class="col-sm-3">
                                                                        <p class="mb-0">Registration number </p>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <p class="text-muted mb-0">
                                                                            <?=$post['regd']?></p>
                                                                    </div>
                                                                </div>
                                                                <hr>
                                                                <div class="row">
                                                                    <div class="col-sm-3">
                                                                        <p class="mb-0">Program </p>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <p class="text-muted mb-0">
                                                                            <?=$post['program']?></p>
                                                                    </div>
                                                                </div>
                                                                <hr>
                                                                <div class="row">
                                                                    <div class="col-sm-3">
                                                                        <p class="mb-0">Branch </p>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <p class="text-muted mb-0">
                                                                            <?=$post['branch']?></p>
                                                                    </div>
                                                                </div>
                                                                <hr>
                                                                <div class="row">
                                                                    <div class="col-sm-3">
                                                                        <p class="mb-0">Admission Year </p>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <p class="text-muted mb-0">
                                                                            <?=$post['admissionyear']?></p>
                                                                    </div>
                                                                </div>
                                                                <hr>
                                                                <div class="row">
                                                                    <div class="col-sm-3">
                                                                        <p class="mb-0">Campus </p>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <p class="text-muted mb-0">
                                                                            <?=$post['campus']?></p>
                                                                    </div>
                                                                </div>
                                                                <hr>
                                                                <div class="row">
                                                                    <div class="col-sm-3">
                                                                        <p class="mb-0">Email</p>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <p class="text-muted mb-0">
                                                                            <?=$post['email']?></p>
                                                                    </div>
                                                                </div>
                                                                <hr>
                                                                <div class="row">
                                                                    <div class="col-sm-3">
                                                                        <p class="mb-0">Mobile</p>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <p class="text-muted mb-0">
                                                                            <?=$post['mobile']?></p>
                                                                    </div>
                                                                </div>
                                                                <hr>
                                                            </div>

                                                        </div>


                                                        <div class="modal-footer"> 
                                                            <a href="../includes/approvestudent.php?id=<?=$post['id']?>&email=<?=$post['email']?>&name=<?=$post['name']?>" class="btn btn-<?=$changecolor?>" onclick="<?=$statuschange?>;">Approve</a>
                                                                <button type="button" class="btn btn-danger"
                                                                    data-dismiss="modal">Close</button> 
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>
                                        </div>

                                    </div>

                                    <?php
                                        $count++;
                                        }
                                    ?>



                                </tbody>
                                
                            </table>
                            </from>
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
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

</body>

</html>