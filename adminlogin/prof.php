<?php
require('../includes/function.php');
require('../includes/database.php');
$uemail=$_SESSION['email'];
$utype=$_SESSION['usertype'];

$post_images=getImagesByPost($db,$uemail);




if($_SESSION['email'] and $utype=="student")
{
  $studentdata=getUserNmae($db,$uemail);
  $studentData=getAllStudentDetails($db,$uemail);
}
else
{
  echo "working";
  header('location:../includes/logout.php');
}
if(isset($_POST['passwordbtn'])){
  $oldpassword=mysqli_real_escape_string($db,$_POST['oldpassword']);
  $newpassword=mysqli_real_escape_string($db,$_POST['newpassword']);
  $renewpassword=mysqli_real_escape_string($db,$_POST['renewpassword']);

  echo "oldpassword";
  echo "newpassword";
  echo "renewpassword";
  $oldpassword=md5($oldpassword);

  if($studentdata['password'] == $oldpassword){
    if($newpassword == $renewpassword){
      $newpassword=md5($newpassword);
      $studentemail=$studentdata['email'];
      $query="UPDATE student SET password='$newpassword' WHERE email='$studentemail'";
      $run=mysqli_query($db,$query) or die(mysqli_error($db));
      if ($run) {
        ?>
        <script>
          alert("password Changed ");
        </script>
      <?php
      }
      else {
        ?>
        <script>
          alert("Password Update error ");
        </script>
      <?php
       }

    }
    else{
      ?>
        <script>
          alert("password and confirm password not match ");
        </script>
      <?php
    }

  }
  else{
    ?>
    <script>
      alert("Old password not match ");
    </script>
  <?php
  }

 
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Profile</title>
  <link rel="icon" href="image/cutm.png" type="image/icon type">
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
              <span>student</span>
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

    <div class="bd-masthead mb-3" id="content">
        <div class="container-xxl bd-gutter">
            <div class="col-md-8 mx-auto text-center">
            
                <h1 class="mb-3 fw-bold">Profile</h1>
                
            
            </div>
        </div>
    </div>

    <section class="section profile">
      <div class="row">
        <div class="col-xl-4">

          <div class="card">
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

            <img src="../images/profileimg/<?=$post_images['profileimage'] ?>" alt="<?=$post_images ?>" width="170" height="130"ALIGN="right"HSPACE="30"VSPACE="30"style=border-radius:50%;/>
              <h2><?=$studentdata['name']?></h2>
              <h3>Student</h3>
            </div>
          </div>

        </div>

        <div class="col-xl-8">

          <div class="card">
            <div class="card-body pt-3">
              <!-- Bordered Tabs -->
              <ul class="nav nav-tabs nav-tabs-bordered">

                <li class="nav-item">
                  <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profile</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Change Password</button>
                </li>

              </ul>
              <div class="tab-content pt-2">

                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                  

                  <h5 class="card-title">Profile Details</h5>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Full Name</div>
                    <div class="col-lg-9 col-md-8"><?=$studentdata['name']?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Registration number</div>
                    <div class="col-lg-9 col-md-8"><?=$studentdata['regd']?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Campus</div>
                    <div class="col-lg-9 col-md-8"><?=$studentdata['campus']?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">School Name</div>
                    <div class="col-lg-9 col-md-8"><?=$studentdata['schoolname']?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Program</div>
                    <div class="col-lg-9 col-md-8"><?=$studentdata['program']?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Branch</div>
                    <div class="col-lg-9 col-md-8"><?=$studentdata['branch']?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Session</div>
                    <div class="col-lg-9 col-md-8"><?=$studentdata['admissionyear']?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Religion</div>
                    <div class="col-lg-9 col-md-8"><?=$studentdata['religion']?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Date of Birth</div>
                    <div class="col-lg-9 col-md-8"><?=$studentdata['dob']?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Present Address</div>
                    <div class="col-lg-9 col-md-8"><?=$studentdata['present_address']?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Present Address</div>
                    <div class="col-lg-9 col-md-8"><?=$studentdata['permanent_address']?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Sex</div>
                    <div class="col-lg-9 col-md-8"><?=$studentdata['sex']?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Phone</div>
                    <div class="col-lg-9 col-md-8"><?=$studentdata['mobile']?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Email</div>
                    <div class="col-lg-9 col-md-8"><?=$studentdata['email']?></div>
                  </div>

                </div>

                <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                  <!-- Profile Edit Form -->
                  <form action="../includes/createuser.php" method="post" enctype="multipart/form-data">
                    <div class="row mb-3">
                      <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
                      <div class="col-md-8 col-lg-9">
                        <img src="../images/profileimg/<?=$post_images['profileimage'] ?>">
                        <div class="pt-2">
                        <input class="form-control" type="file" id="formFile" name="imageupload" accept="image/*" >
                        <p style="color:red;">*Upload Photo Max. Size upto 50Kb.*</p>
                        </div>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Full Name</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="name" type="text" class="form-control" id="fullName" value="<?=$studentdata['name']?>" readonly>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="company" class="col-md-4 col-lg-3 col-form-label">Registration number</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="regdno" type="text" class="form-control" id="company" value="<?=$studentdata['regd']?>" readonly>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Job" class="col-md-4 col-lg-3 col-form-label">Campus</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="campus" type="text" class="form-control" id="campus" value="<?=$studentdata['campus']?>" readonly>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Job" class="col-md-4 col-lg-3 col-form-label">School Name</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="school" type="text" class="form-control" id="schoolname" value="<?=$studentdata['schoolname']?>" readonly>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Job" class="col-md-4 col-lg-3 col-form-label">Program</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="program" type="text" class="form-control" id="program" value="<?=$studentdata['program']?>" readonly>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Job" class="col-md-4 col-lg-3 col-form-label">Branch</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="branch" type="text" class="form-control" id="branch" value="<?=$studentdata['branch']?>" readonly>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Country" class="col-md-4 col-lg-3 col-form-label">Session</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="addyr" type="text" class="form-control" id="year" value="<?=$studentdata['admissionyear']?>" readonly>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Country" class="col-md-4 col-lg-3 col-form-label">Religion</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="religion" type="text" class="form-control" id="religion" value="<?=$studentdata['religion']?>" readonly>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Country" class="col-md-4 col-lg-3 col-form-label">Date of Birth</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="dob" type="text" class="form-control" id="date" value="<?=$studentdata['dob']?>" readonly>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Country" class="col-md-4 col-lg-3 col-form-label">Sex</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="sex" type="text" class="form-control" id="sex" value="<?=$studentdata['sex']?>" readonly>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Country" class="col-md-4 col-lg-3 col-form-label">Hobby</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="hobby" type="text" class="form-control" id="hobby" value="<?=$studentdata['hobby']?>" readonly>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Address" class="col-md-4 col-lg-3 col-form-label">Present Address</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="presentadd" type="text" class="form-control" id="Address" value="<?=$studentdata['present_address']?>">
                      </div>`
                    </div>

                    <div class="row mb-3">
                      <label for="Address" class="col-md-4 col-lg-3 col-form-label">Permanent address</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="permanent" type="text" class="form-control" id="Address" value="<?=$studentdata['present_address']?>">
                      </div>`
                    </div>

                    <div class="row mb-3">
                      <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Phone</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="mob" type="text" class="form-control" id="Phone" value="<?=$studentdata['mobile']?>">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="email" type="email" class="form-control" id="Email" value="<?=$studentdata['email']?>" readonly>
                      </div>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="Profilechange" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered" role="document">
                              <div class="modal-content">
                              <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLongTitle">Do You Sure to Update</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                  </button>
                              </div>
                              <div class="modal-footer">
                                <button type="submit" class="btn btn-success" name="editprofile">Yes</button>
                                <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
                              </div>
                              </div>
                          </div>
                      </div>

                    
                  </form><!-- End Profile Edit Form -->
                  <div class="text-center">
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Profilechange">Save Changes</button>
                    </div>
                </div>


                <div class="tab-pane fade pt-3" id="profile-change-password">
                  <!-- Change Password Form -->
                  <form action="" method="post">

                  <div class="row mb-3">
                      <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">Old Password</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="oldpassword" type="password" class="form-control" id="oldPassword" value="" required>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New Password</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="newpassword" type="password" class="form-control" id="newPassword" value="" required>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Re-enter New Password</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="renewpassword" type="password" class="form-control" id="renewPassword" value="" required>
                      </div>
                    </div>

                    
                    <!-- Modal -->
              <div class="modal fade" id="changestudentPassword" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Do You Sure to Update</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-footer">
                          <button type="submit" class="btn btn-success" name="passwordbtn">Yes</button>
                          <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
                        </div>
                        </div>
                    </div>
                </div>
                  </form><!-- End Change Password Form -->
                  <div class="text-center">
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#changestudentPassword">Change Password</button>
                    </div>

                </div>

              </div><!-- End Bordered Tabs -->

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
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script>
        function editprof() {
          window.location.href = "./edit.php";
        }
    </script>

</body>

</html>