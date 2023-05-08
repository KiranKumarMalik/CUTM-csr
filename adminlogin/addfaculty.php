<?php
require('../includes/function.php');
require('../includes/database.php');
$uemail=$_SESSION['email'];
$utype=$_SESSION['usertype'];

$post_images=getImagesByPost($db,$uemail);


$AddmissionYear=2021;


if($_SESSION['email'] and $utype=="admin")
{
    $adminData=getAllAdminDetails($db,$uemail);
}
else
{
  echo "SESSION is not present";
  header('location:../includes/logout.php');
}

  
if(isset($_POST['addTeacher'])){
    $name=mysqli_real_escape_string($db,$_POST['name']);
    $facultyid=mysqli_real_escape_string($db,$_POST['facultyid']);
    $email=mysqli_real_escape_string($db,$_POST['email']);
    $mobile=mysqli_real_escape_string($db,$_POST['mob']);
    $Degination1=mysqli_real_escape_string($db,$_POST['Degination']);
    $Qualification=mysqli_real_escape_string($db,$_POST['Qualification']);
    $SchoolName=mysqli_real_escape_string($db,$_POST['school']);
    $Campus=mysqli_real_escape_string($db,$_POST['Campus']);
    $Gender=mysqli_real_escape_string($db,$_POST['sex']);
    // $program=mysqli_real_escape_string($db,$_POST['program']);
    $clubname=mysqli_real_escape_string($db,$_POST['clubname']);
    // $password=mysqli_real_escape_string($db,$_POST['password']);
    $password=randPass();
    $mailPassword=$password;
    $password=md5($password);

    $iamge="";

    if ($Gender == "Male") {
        $iamge="maleuser.jpg";
    }
    else if ($Gender == "Female") {
        $iamge="femaleuser.jpg";
    }
    else {
        $iamge="";
    }

    // echo $name."<br><br>";
    // echo $facultyid."<br><br>";
    // echo $email."<br><br>";
    // echo $mobile."<br><br>";
    // echo $Degination1."<br><br>";
    // echo $Qualification."<br><br>";
    // echo $SchoolName."<br><br>";
    // echo $Campus."<br><br>";
    // echo $Gender."<br><br>";
    // echo $program."<br><br>";
    // echo $clubname."<br><br>";
    // echo $password."<br><br>";

    
    $query="SELECT * FROM teacher WHERE email='$email'";
    $runQuery=mysqli_query($db,$query);
    if(mysqli_num_rows($runQuery)){
        ?>
            <script>
            // alert("Sorry This teacher already in a club. ");
            popup();
            </script>
        <?php     
    }
    else {
        $query="INSERT INTO teacher (name,email,mobile,empid,Designation,campus,Qualification,SchoolName,Clubget,Gender,password,profileimage) VALUES('$name','$email','$mobile','$facultyid','$Degination1','$Campus','$Qualification','$SchoolName','$clubname','$Gender','$password','$iamge')";
        $run=mysqli_query($db,$query) or die(mysqli_error($db));
        if ($run) {
            header('location:./api/cutmCsrMail.php?name='.$name.'&email='.$email.'&pass='.$mailPassword);
        }
        else {
            echo "inserted error";
        }
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Edit Profile</title>
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
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
        Launch demo modal
    </button>

    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>


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
          <a class="nav-link collapsed" href="./studentapproval.php">
              <i class="bi bi-person-badge-fill"></i>
              <span>Participants ID Approval</span>
          </a>
      </li> 

    <li class="nav-item">
          <a class="nav-link" href="./addfaculty.php">
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
              <a class="nav-link collapsed" href="./activities_upload.php">
                  <i class="bi bi-activity"></i>
                  <span>Activities</span>
              </a>
          </li>

          <li class="nav-item">
              <a class="nav-link collapsed" href="./annual_reports.php">
                  <i class="bi bi-journals"></i>
                  <span>Annual Reports</span>
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

        <div class="bd-masthead mb-3" id="content">
            <div class="container-xxl bd-gutter">
                <div class="col-md-8 mx-auto text-center">

                    <h1 class="mb-3 fw-bold">Assigning Faculty</h1>


                </div>
            </div>
        </div>


        <section class="section dashboard">


            <form action="" method="post">

                <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Name of the faculty : </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="name" value="" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Faculty ID: </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="facultyid" value="" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Mobile No.:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="mob" value="" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Mail:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="email" value="" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Designation : </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="Designation" value="" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Campus: </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="Campus" value="<?=$adminData['campus']?>"
                            readonly>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Qualification: </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="Qualification" value="" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">School: </label>
                    <div class="col-sm-10">
                        <select class="form-select" aria-label="Default select example" name="school">
                            <option value="School of Engineering and Technology">School of Engineering & Technology</option>
                            <option value="School of Management">School of Management</option>
                            <option value="M.S. Swaminathan School of Agriculture">M.S.Swaminathan School of Agriculture</option>
                            <option value="School of Media and Communication">School of Media & Communication</option>
                            <option value="School Of Paramedics & Allied Health Science">School of Paramedics & Allied Health Sciences</option>
                            <option value="School of Applied Sciences">School of Applied Sciences</option>
                            <option value="School of Forensic Sciences">School of Forensic Sciences</option>
                            <option value="School Of Pharmacy">School of Pharmacy and Life Sciences</option>
                            <option value="School Of Pharmacy">School of Pharmacy</option>
                            <option value="School of Agriculture and Bio-Engineering">School of Agriculture & Bio Engineering</option>
                            <option value="School of Fisheries">School of Fisheries</option>
                            <option value="School Of Vocational Education and Training">School of Vocational Education & Training</option>
                            <option value="School of Maritime Studies">School of Maritime Studies</option>
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Gender:</label>
                    <div class="col-sm-10">
                        <select class="form-select" aria-label="Default select example" name="sex">
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Transgender">Other</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg">
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Select CSaR program</label>
                        <div class="col-sm-10">
                            <select class="form-select" aria-label="Default select example" name="program" id="program"
                                onChange="getClub()">
                                <option value="">Loading</option>

                            </select>
                        </div>
                    </div>
                </div>

                <div class="col-lg">
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Select CSaR Club</label>
                        <div class="col-sm-10">
                            <select class="form-select" aria-label="Default select example" name="clubname" id="club">
                                <option value="">Please Select Program</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label"></label>
                    <!-- Modal -->
                <div class="modal fade" id="confirmaddFaculty" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Do You Sure to Assign Faculty</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-footer">
                          <button class="btn btn-success" type="submit" name="addTeacher">Yes</button>
                          <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
                        </div>
                        </div>
                    </div>
                </div>
                    <div class="col-sm-10">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#confirmaddFaculty">Submit</button>
                    </div>
                </div>
            </form>
            
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
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/quill/quill.min.js"></script>
    <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  
    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
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
    <script>
    < script>
        function popup() {
            $("#myModal").modal('show');
        };
    </script>
    </script>

</body>

</html>