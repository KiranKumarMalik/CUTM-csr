<?php
require('../includes/function.php');
require('../includes/database.php');
$uemail=$_SESSION['email'];
$utype=$_SESSION['usertype'];
$uname=getUserNmae($db,$uemail);

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
  header('location:../includes/logout.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>CSR CUTM</title>
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
                        <a href="prof.php"><img src="../images/profileimg/<?=$studentdata['profileimage']?>" height="70px" style=border-radius:50%;></a>
                            <h6><?=$uemail?></h6>
                            <span>Student</span>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <!-- <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li> -->

                        <!-- <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li> -->



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
                <i class="bi bi-journal-text"></i>
                <span>Add Activity</span>
            </a>
        </li>

           <li class="nav-item">
                <a class="nav-link " href="studentresult.php">
                    <i class="bi bi-clipboard-check"></i>
                    <span>CSR Result</span>
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
                    <li class="breadcrumb-item active">Add Activity</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section dashboard">


            <form action="../includes/addreport.php" method="post" enctype="multipart/form-data">


              <input type="hidden" name="uname" value="<?=$uname['name']?>">
              <input type="hidden" name="campus" value="<?=$uname['campus']?>">
              <input type="hidden" name="schoolname" value="<?=$uname['schoolname']?>">
              <input type="hidden" name="uemail" value="<?=$uemail?>">

                <div class="col-lg">

                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Select Year of program</label>
                        <div class="col-sm-10">
                            <select class="form-select" aria-label="Default select example" name="year">
                                <?php
                                  $year=getAllYear($db);
                                  $thisyear=date("Y");
                                  foreach($year as $ct){
                                    if ($ct['admissionyear'] == $thisyear) {
                                ?>
                                        <option value="<?=$ct['Year']?>"><?=$ct['Year']?></option>
                                <?php
                                }
                        }
                      ?>
                            </select>
                        </div>
                    </div>

                </div>

                <div class="col-lg">
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Select CSR program</label>
                        <div class="col-sm-10">
                            <select class="form-select" aria-label="Default select example" name="program" id="program" onChange="getClub()">
                              <option value="">Loading</option>
                              
                            </select>
                        </div>
                    </div>
                </div>

                <div class="col-lg">
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Select CSR Club</label>
                        <div class="col-sm-10">
                            <select class="form-select" aria-label="Default select example" name="clubname" id="club">
                            <option value="">Please Select Program</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="inputDate" class="col-sm-2 col-form-label">Date</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" name="date" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="inputTime" class="col-sm-2 col-form-label">Start Time</label>
                    <div class="col-sm-10">
                        <input type="time" class="form-control" name="starttime" required>
                    </div>
                </div>


                <div class="row mb-3">
                    <label for="inputTime" class="col-sm-2 col-form-label">End Time</label>
                    <div class="col-sm-10">
                        <input type="time" class="form-control" name="endtime" required>
                    </div>
                </div>


                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-10">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#openForAdd">Submit</button>
                        
                    </div>
                </div>


                <!-- Modal -->
                <div class="modal fade" id="openForAdd" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Do You Want to Submit</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary" name="addpost">Submit</button>
                        </div>
                        </div>
                    </div>
                </div>

                


            </form>

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
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/quill/quill.min.js"></script>
    <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  
    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js" integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        function getPr() {
            document.getElementById('program').disabled =true
            axios.get("./api/pr.php").then((response)=>{
                console.log(response);
                let options='<option value="">Select one option</option>';
                for(let each of response.data.data){
                    options+=`<option value="${each}">${each}</option>`;
                }
                document.getElementById('program').innerHTML=options;
                document.getElementById('program').disabled =false;
            })
        }
        function getClub() {
            let selection=document.getElementById('program').value;
            if(!selection)return;
            document.getElementById('club').disabled =true
            document.getElementById('club').innerHTML='<option value="">Loading</option>';
            axios.get("./api/club.php?scrPr="+selection).then((response)=>{
                console.log(response);
                let options='';
                for(let each of response.data.data){
                    options+=`<option value="${each}">${each}</option>`;
                }
                document.getElementById('club').innerHTML=options;
                document.getElementById('club').disabled =false;
            })
        }
        getPr();
        
    </script>

</body>

</html>