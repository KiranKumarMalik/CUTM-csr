<?php
require('../includes/function.php');
require('../includes/database.php');
$uemail=$_SESSION['email'];
$utype=$_SESSION['usertype'];


if($_SESSION['email'] and $utype=="superadmin")
{
    $adminData=getAllAdminDetails($db,$uemail);
    $getimage=getAllAdminDetails($db,$uemail);
}
else
{
  header('location:../includes/logout.php');
}

if(isset($_POST['importExcel'])){
	$file=$_FILES['excelData']['tmp_name'];
	// echo "<PRE>";
    // echo $file;
	$ext=pathinfo($_FILES['excelData']['name'],PATHINFO_EXTENSION);
	if($ext=='xlsx'){
		require('./PHPExcel/PHPExcel.php');
		require('./PHPExcel/PHPExcel/IOFactory.php');
		
		
		$obj=PHPExcel_IOFactory::load($file);
		foreach($obj->getWorksheetIterator() as $sheet){
			$getHighestRow=$sheet->getHighestRow();
			for($i=2;$i<=$getHighestRow;$i++){
				$name=$sheet->getCellByColumnAndRow(0,$i)->getValue();
				$email=$sheet->getCellByColumnAndRow(1,$i)->getValue();
                $regd=$sheet->getCellByColumnAndRow(2,$i)->getValue();
                $schoolname=$sheet->getCellByColumnAndRow(3,$i)->getValue();
                $program=$sheet->getCellByColumnAndRow(4,$i)->getValue();
                $branch=$sheet->getCellByColumnAndRow(5,$i)->getValue();
                $courseDuration=$sheet->getCellByColumnAndRow(6,$i)->getValue();
                $campus=$sheet->getCellByColumnAndRow(7,$i)->getValue();
                $admissiontype=$sheet->getCellByColumnAndRow(8,$i)->getValue();
                $admissionyear=$sheet->getCellByColumnAndRow(9,$i)->getValue();
                $sex=$sheet->getCellByColumnAndRow(10,$i)->getValue();
                $religion=$sheet->getCellByColumnAndRow(11,$i)->getValue();
                $dob=$sheet->getCellByColumnAndRow(12,$i)->getValue();
                $blood_group=$sheet->getCellByColumnAndRow(13,$i)->getValue();
                
				if($name!=''){
					// mysqli_query($db,"INSERT INTO studregd (name,email,regd,schoolname,program,branch,courseDuration,campus,admissiontype,admissionyear,sex,religion,dob,blood_group) VALUES('$name','$email','$regd','$schoolname','$program','$branch','$courseDuration','$campus','$admissiontype','$sex','$religion','$dob','$blood_group');");
                    $query="INSERT INTO studregd (name,email,regd,schoolname,program,branch,courseDuration,campus,admissiontype,admissionyear,sex,religion,dob,blood_group) VALUES('$name','$email','$regd','$schoolname','$program','$branch','$courseDuration','$campus','$admissiontype','$admissionyear','$sex','$religion','$dob','$blood_group')";
                    $run=mysqli_query($db,$query) or die(mysqli_error($db));
                    
				}
                $totalIs=$totalIs+$run;
			}
            echo "<script>alert('Total data inserted is ".$totalIs."');</script>";
		}
	}else{
		echo "<script>alert('Invalid format');</script>";
	}
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
<!-- import excel data modal-->
    <div class="modal fade" id="importExcel" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Please upload your <a href="./PHPExcel/testing.xlsx">excel in this format</a></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="post" action="" enctype="multipart/form-data">
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Excel</label>
                        <div class="col-sm-10">
                            <input type="file" class="form-control" name="excelData" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-success" type="submit" name="importExcel">Import Excel</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
                    </div>
                </form>
                
            </div>
        </div>
    </div>





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
                <a class="nav-link collapsed" href="./superdashboard.php">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="./superstudentdatabse.php">
                    <i class="bi bi-journal-text"></i>
                    <span>Student Database Add</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="./superstudentactivity.php">
                    <i class="bi bi-file-check-fill"></i>
                    <span>Student Activity Data</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="./superadminfacultydata.php">
                    <i class="bi bi-person-badge-fill"></i>
                    <span>Admin & Faculty Database</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="./superadminstudentdata.php">
                    <i class="bi bi-people-fill"></i>
                    <span>registred Student</span>
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
            <h1>Dashboard</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="student.php">Home</a></li>
                    <li class="breadcrumb-item active">View Student Database</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section dashboard">

            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Post</h5>
                        <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#importExcel">Import Student Data</button>
                        <!-- Table with stripped rows -->
                        <table class="table datatable" id="tableData">
                            <thead>
                                <tr>
                                    <th>Sl</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Registration No</th>
                                    <th scope="col">School Name</th>
                                    <th scope="col">Program</th>
                                    <th scope="col">Branch</th>
                                    <th scope="col">Course Duration</th>
                                    <th scope="col">Campus</th>
                                    <th scope="col">Admission Type</th>
                                    <th scope="col">Admission Year</th>
                                    <th scope="col">Sex</th>
                                    <th scope="col">Religion</th>
                                    <th scope="col">DOB</th>
                                    <th scope="col">Blood Group</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $posts=getStudentREGDDetailsBySuperAdmin($db);
                                    $count=1;
                                    foreach($posts as $post){
                                ?>
                                <tr>
                                    <th scope="row"><?=$count?></th>
                                    <td><?=$post['name']?></td>
                                    <td><?=$post['email']?></td>
                                    <td><?=$post['regd']?></td>
                                    <td><?=$post['schoolname']?></td>
                                    <td><?=$post['program']?></td>
                                    <td><?=$post['branch']?></td>
                                    <td><?=$post['courseDuration']?></td>
                                    <td><?=$post['campus']?></td>
                                    <td><?=$post['admissiontype']?></td>
                                    <td><?=$post['admissionyear']?></td>
                                    <td><?=$post['sex']?></td>
                                    <td><?=$post['religion']?></td>
                                    <td><?=$post['dob']?></td>
                                    <td><?=$post['blood_group']?></td>
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
    <script src="assets/vendor/quill/quill.min.js"></script>
    <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="assets/vendor/tinymce/tinymce.min.js"></script>

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



</body>

</html>