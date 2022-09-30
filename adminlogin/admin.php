<?php
require('../includes/function.php');
require('../includes/database.php');
$uemail=$_SESSION['email'];
$utype=$_SESSION['usertype'];


if($_SESSION['email'] and $utype=="admin")
{
    $adminData=getAllAdminDetails($db,$uemail);
    $getimage=getAllAdminDetails($db,$uemail);
    // this code for insert auto year and session
    $thisYear=2019;
    $query="SELECT * FROM year WHERE admissionyear='$thisYear'";
    $runQuery=mysqli_query($db,$query);
    if(mysqli_num_rows($runQuery)){
        
    }
    else {
        $sessionYearNew=($thisYear).'-'.($thisYear+1);
        echo $sessionYearNew;
        $query="INSERT INTO year (admissionyear,Year) VALUES('$thisYear','$sessionYearNew')";
        $run=mysqli_query($db,$query) or die(mysqli_error($db));
    }
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
                <span class="d-none d-lg-block"> | CSR CUTM</span>
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
            <a class="nav-link " href="admin.php">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="certificateapprove.php">
              <i class="bi bi-file-check-fill"></i>
              <span>Event timesheet approval</span>
          </a>
      </li>

      <li class="nav-item">
          <a class="nav-link " href="studentapproval.php">
              <i class="bi bi-person-badge-fill"></i>
              <span>Participants ID Approval</span>
          </a>
      </li> 

    <li class="nav-item">
          <a class="nav-link " href="addfaculty.php">
              <i class="bi bi-journal-text"></i>
              <span>Add Faculty In-charge</span>
          </a>
      </li>

      <li class="nav-item">
          <a class="nav-link " href="addclub.php">
              <i class="bi bi-file-earmark-plus"></i>
              <span>Add New Club</span>
          </a>
      </li>

         <li class="nav-item">
              <a class="nav-link " href="adminprof.php">
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
                <div class="col-lg-12">
                <form action="" method="post">
            <div class="row">
            <form action="" method="post">
            <div class="row">

                <div class="col-md-4 bg-light text-right">
                    <label>Select School</label>
                    <select class="form-select" aria-label="Default select example" name="school">
                    <option value="School of Engineering and Technology">Select school</option>
                    <option value="School of Engineering and Technology">School of Engineering and Technology</option>
                      <option value="School of Management">School of Management</option>
                      <option value="M.S. Swaminathan School of Agriculture">M.S. Swaminathan School of Agriculture</option>
                      <option value="School of Media and Communication">School of Media and Communication</option>
                      <option value="School Of Paramedics & Allied Health Science">School Of Paramedics & Allied Health Science</option>
                      <option value="School of Applied Science">School of Applied Sciences</option>
                      <option value="School of Forensic Science">School of Forensic Sciences</option>
                      <option value="School Of Pharmacy">School Of Pharmacy</option>
                      <option value="School of Agriculture and Bio-Engineering">School of Agriculture and Bio-Engineering</option>
                      <option value="School of Fisheries">School of Fisheries</option>
                      <option value="School Of Vocational Education and Training">School Of Vocational Education and Training</option>
                      <option value="School of Maritime Studies">School of Maritime Studies</option>
                    </select>
                </div>
                <div class="col-md-3 bg-light text-right">
                    <label>Select Program</label>
                    <select class="form-select" aria-label="Default select example" name="program" id="program"
                                onChange="getClub()">
                        <option value="">Loading</option>

                    </select>
                </div>
                <div class="col-md-3 bg-light text-right">
                    <label>Select Club</label>
                        <select class="form-select" aria-label="Default select example" name="clubname" id="club">
                            <option value="">Please Select Program</option>
                        </select>
                </div>
                
                
                <div class="col-md-2 bg-light text-right"><br>
                    <button type="submit" class="btn btn-primary btn-lg float-right" name="getCertificateDetails">Submit</button>
                </div>
            
            </div>
          </form>
            
            <div class="row">
                <div class="col-md-8 bg-light text-right">
                    
                </div>
               </div>
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
                                        <th scope="col">Total Hour Worked</th>
                                        <th scope="col">Grade</th>
                                        <th scope="col">Details View</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                    $campus=$adminData['campus'];
                    if(isset($_POST['getCertificateDetails'])){
                        $school=mysqli_real_escape_string($db,$_POST['school']);
                        $program=mysqli_real_escape_string($db,$_POST['program']);
                        $clubname=mysqli_real_escape_string($db,$_POST['clubname']);
                    
                        
                        $posts=getAllPostAdminBySchoolClub($db,$school,$campus,$program,$clubname);

                    }
                    else {
                    $posts=getAllPostAdminByCampus($db,$campus);
                    }
                    $count=1;
                    foreach($posts as $post){
                      if ($post['totalTime'] >= 90) {
                        $gradeIs="O";
                      }
                      elseif ($post['totalTime'] >= 76) {
                        $gradeIs="E";
                      }
                      elseif ($post['totalTime'] >= 61) {
                        $gradeIs="A";
                      }
                      elseif ($post['totalTime'] >= 46) {
                        $gradeIs="B";
                      }
                      elseif ($post['totalTime'] >= 30) {
                        $gradeIs="C";
                      }
                      elseif ($post['totalTime'] >= 0) {
                        $gradeIs="C";
                      }
                      else{
                        $gradeIs="C";
                      }

                      $studentData=getAllStudentDetails($db,$post['emailOfStd']);
                    ?>
                                    <tr>
                                        <th scope="row"><?=$count?></th>
                                        <td><?=$post['NameOfStd']?></td>
                                        <td><?=$post['emailOfStd']?></td>
                                        <td><?=(int)$post['totalTime']?></td>
                                        <td><?=$gradeIs?></td>
                                        <td>
                                            <a href="#" class="btn btn-dark" target="_blank" data-toggle="modal"
                                                data-target=".<?=$post['id']?>">
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
                                                                <img src="../images/profileimg/<?=$studentData['profileimage'] ?>"
                                                                    alt="avatar" class="rounded-circle img-fluid"
                                                                    style="width: 150px;">
                                                                <h5 class="my-3"><?=$post['NameOfStd']?></h5>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <div class="card mb-4">
                                                            <div class="card-body">
                                                                <div class="row">
                                                                    <div class="col-sm-3">
                                                                        <p class="mb-0">Full Name</p>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <p class="text-muted mb-0">
                                                                            <?=$studentData['name']?></p>
                                                                    </div>
                                                                </div>
                                                                <hr>
                                                                <div class="row">
                                                                    <div class="col-sm-3">
                                                                        <p class="mb-0">Email</p>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <p class="text-muted mb-0">
                                                                            <?=$studentData['email']?></p>
                                                                    </div>
                                                                </div>
                                                                <hr>
                                                                <div class="row">
                                                                    <div class="col-sm-3">
                                                                        <p class="mb-0">Regd No</p>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <p class="text-muted mb-0">
                                                                            <?=$studentData['regd']?></p>
                                                                    </div>
                                                                </div>
                                                                <hr>
                                                                <div class="row">
                                                                    <div class="col-sm-3">
                                                                        <p class="mb-0">Mobile</p>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <p class="text-muted mb-0">
                                                                            <?=$studentData['mobile']?></p>
                                                                    </div>
                                                                </div>
                                                                <hr>
                                                            </div>

                                                        </div>


                                                        <div class="modal-footer">

                                                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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
            &copy; Copyright <strong><span>CSR | CUTM</span></strong>. All Rights Reserved
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js" integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    

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