<?php
    require('./database.php');
    require('./function.php');

   
    if(isset($_POST['createu'])){
		$name=mysqli_real_escape_string($db,$_POST['name']);
        $email=mysqli_real_escape_string($db,$_POST['email']);
		$regdno=mysqli_real_escape_string($db,$_POST['regdno']);
		$campus=mysqli_real_escape_string($db,$_POST['campus']);
		$school=mysqli_real_escape_string($db,$_POST['school']);
		$program=mysqli_real_escape_string($db,$_POST['program']);
		$branch=mysqli_real_escape_string($db,$_POST['branch']);
		$batch=mysqli_real_escape_string($db,$_POST['batch']);
		$addyr=mysqli_real_escape_string($db,$_POST['addyr']);
		$sex=mysqli_real_escape_string($db,$_POST['sex']);
		$religion=mysqli_real_escape_string($db,$_POST['religion']);
		$dob=mysqli_real_escape_string($db,$_POST['dob']);
		$hobby=mysqli_real_escape_string($db,$_POST['hobby']);
		$presentadd=mysqli_real_escape_string($db,$_POST['presentadd']);
		$premantadd=mysqli_real_escape_string($db,$_POST['permanent']);
		$phone=mysqli_real_escape_string($db,$_POST['mob']);

		$image_name=$_FILES['imageupload']['name'];
        $image_tmp=$_FILES['imageupload']['tmp_name'];
		$status="Not Approved";


		$getSession=getSessionByYear($db,$addyr);
		$addyr=$getSession;




		echo $name."<br><br>";
		echo $email."<br><br>";
		echo $regdno."<br><br>";
		echo $school."<br><br>";
		echo $program."<br><br>";
		echo $branch."<br><br>";
		echo $batch."<br><br>";
		echo $addyr."<br><br>";
		echo $sex."<br><br>";
		echo $religion."<br><br>";
		echo $dob."<br><br>";
		echo $hobby."<br><br>";
		echo $presentadd."<br><br>";
		echo $premantadd."<br><br>";
		echo $phone."<br><br>";
		echo $image_name."<br><br>";
        echo $image_tmp."<br><br>";

        print "<pre>";
        print_r($_FILES);
        print "</pre>";

        if(move_uploaded_file($image_tmp,"../images/profileimg/$image_name")){
            $query="INSERT INTO student (name,email,regd,schoolname,program,branch,batch,campus,admissionyear,sex,religion,dob,hobby,present_address,permanent_address,mobile,profileimage,status) VALUES('$name','$email','$regdno','$school','$program','$branch','$batch','$campus','$addyr','$sex','$religion','$dob','$hobby','$presentadd','$premantadd','$phone','$image_name','$status')";
            $run=mysqli_query($db,$query) or die(mysqli_error($db));
            if ($run) {
                header('location:../login/login.php');
            }
            else {
                echo "inserted error";
            }
        }
        
    }

	
	if(isset($_POST['editprofile'])){
		$name=mysqli_real_escape_string($db,$_POST['name']);
        $email=mysqli_real_escape_string($db,$_POST['email']);
		$sex=mysqli_real_escape_string($db,$_POST['sex']);
		$religion=mysqli_real_escape_string($db,$_POST['religion']);
		$hobby=mysqli_real_escape_string($db,$_POST['hobby']);
		$presentadd=mysqli_real_escape_string($db,$_POST['presentadd']);
		$premantadd=mysqli_real_escape_string($db,$_POST['permanent']);
		$phone=mysqli_real_escape_string($db,$_POST['mob']);
		$password=mysqli_real_escape_string($db,$_POST['password']);

		$image_name=$_FILES['imageupload']['name'];
        $image_tmp=$_FILES['imageupload']['tmp_name'];



		echo $name."<br><br>";
		echo $email."<br><br>";
		echo $sex."<br><br>";
		echo $religion."<br><br>";
		echo $hobby."<br><br>";
		echo $presentadd."<br><br>";
		echo $premantadd."<br><br>";
		echo $phone."<br><br>";
		echo $image_name."<br><br>";
        echo $image_tmp."<br><br>";

		if(move_uploaded_file($image_tmp,"../images/profileimg/$image_name")){
            $query="UPDATE  student SET name='$name', sex='$sex', religion='$religion', hobby='$hobby', present_address='$presentadd', permanent_address='$premantadd', mobile='$phone', profileimage='$image_name', password='$password'  WHERE email='$email'";
            $run=mysqli_query($db,$query) or die(mysqli_error($db));
            if ($run) {
                header('location:../adminlogin/prof.php');
				echo "inserted done";
            }
            else {
                echo "inserted error";
            }
        }
        else {
            echo "File Size High";
        }
	}


	if(isset($_POST['editadminprofile'])){
		$name=mysqli_real_escape_string($db,$_POST['name']);
        $email=mysqli_real_escape_string($db,$_POST['email']);
		$phone=mysqli_real_escape_string($db,$_POST['mob']);

		$image_name=$_FILES['imageupload']['name'];
        $image_tmp=$_FILES['imageupload']['tmp_name'];



		echo $name."<br><br>";
		echo $email."<br><br>";
		echo $phone."<br><br>";
		echo $image_name."<br><br>";
        echo $image_tmp."<br><br>";

		if(move_uploaded_file($image_tmp,"../images/profileimg/$image_name")){
            $query="UPDATE admin SET name='$name', email='$email', mobile='$phone', profileimage='$image_name'  WHERE email='$email'";
            $run=mysqli_query($db,$query) or die(mysqli_error($db));
            if ($run) {
                header('location:../adminlogin/adminprof.php');
				echo "inserted done";
            }
            else {
                echo "inserted error";
            }
        }
        else {
            echo "File Size High";
        }
	}


	if(isset($_POST['editteacherprofile'])){
		$name=mysqli_real_escape_string($db,$_POST['name']);
        $email=mysqli_real_escape_string($db,$_POST['email']);
		$mobile=mysqli_real_escape_string($db,$_POST['mobile']);
		$Degination1=mysqli_real_escape_string($db,$_POST['Degination']);
		$Qualification=mysqli_real_escape_string($db,$_POST['Qualification']);
		$SchoolName=mysqli_real_escape_string($db,$_POST['SchoolName']);
		$Clubget=mysqli_real_escape_string($db,$_POST['Clubget']);
		$Gender=mysqli_real_escape_string($db,$_POST['sex']);
		$password=mysqli_real_escape_string($db,$_POST['password']);

		$image_name=$_FILES['imageupload']['name'];
        $image_tmp=$_FILES['imageupload']['tmp_name'];



		echo $name."<br><br>";
		echo $email."<br><br>";
		echo $mobile."<br><br>";
		echo $Degination1."<br><br>";
		echo $Qualification."<br><br>";
		echo $SchoolName."<br><br>";
		echo $Clubget."<br><br>";
		echo $Gender."<br><br>";
		echo $image_name;

		if(move_uploaded_file($image_tmp,"../images/profileimg/$image_name")){
            $query="UPDATE teacher SET name='$name', mobile='$mobile', Degination='$Degination1', Qualification='$Qualification', SchoolName='$SchoolName', Clubget='$Clubget', Gender='$Gender', profileimage='$image_name', password='$password'  WHERE email='$email'";
            $run=mysqli_query($db,$query) or die(mysqli_error($db));
            if ($run) {
                header('location:../adminlogin/facultyprof.php');
				echo "inserted done";
            }
            else {
                echo "inserted error";
            }
        }
        else {
            echo "File Size High";
        }
	}

	




	
	if(isset($_POST['uploadimagepublic'])){
		$nameofprogram=mysqli_real_escape_string($db,$_POST['nameofprogram']);
        $detailsofprogram=mysqli_real_escape_string($db,$_POST['detailsofprogram']);
		$yearofprogram=mysqli_real_escape_string($db,$_POST['yearofprogram']);
		$campus=mysqli_real_escape_string($db,$_POST['campus']);


		echo $nameofprogram."<br><br>";
		echo $detailsofprogram."<br><br>";
		echo $yearofprogram."<br><br>";
		echo $campus."<br><br>";

		$image_name=$_FILES['imageupload']['name'];
        $image_tmp=$_FILES['imageupload']['tmp_name'];
		echo $image_name[0]."<br><br>";


		$query="INSERT INTO gallery1 (name,details,images,campus,years) VALUES('$nameofprogram','$detailsofprogram','$image_name[0]','$campus','$yearofprogram')";
        $run=mysqli_query($db,$query) or die(mysqli_error($db));
        if ($run) {
			$galleryid1=mysqli_insert_id($db);
            foreach($image_name as $index=>$img){ 
				echo $img;
				echo $image_tmp[$index];

				if(move_uploaded_file($image_tmp[$index],"../assets/img/event_images/$img")){
					$query="INSERT INTO gallery2 (connect_id,images) VALUES('$galleryid1','$img')";
        			$run=mysqli_query($db,$query) or die(mysqli_error($db));
					if ($run) {
						header('location:./gallery_uploads.php');
						// echo "inserted done";
					}
					else {
						echo "inserted error";
					}
				}
			}
			
        }
        else {
            echo "inserted error";
        }
		

		

		
	}

	if(isset($_POST['uploadcoordinator'])){
		$type=mysqli_real_escape_string($db,$_POST['getcodType']);
		$name=mysqli_real_escape_string($db,$_POST['name']);
		$schoolbranch=mysqli_real_escape_string($db,$_POST['getSchool']);
		$program=mysqli_real_escape_string($db,$_POST['program']);
		$clubname=mysqli_real_escape_string($db,$_POST['clubname']);
		
		$mailid=mysqli_real_escape_string($db,$_POST['mailid']);
		$facebook=mysqli_real_escape_string($db,$_POST['facebook']);
		$instagram=mysqli_real_escape_string($db,$_POST['instagram']);
		$github=mysqli_real_escape_string($db,$_POST['github']);
		$whatsapp=mysqli_real_escape_string($db,$_POST['whatsapp']);
		$linkedin=mysqli_real_escape_string($db,$_POST['linkedin']);
		$campus=mysqli_real_escape_string($db,$_POST['campus']);

		$image_name=$_FILES['profile_img']['name'];
        $image_tmp=$_FILES['profile_img']['tmp_name'];



		echo $type."<br><br>";
		echo $name."<br><br>";
		
		echo $schoolbranch."<br><br>";
		echo $program."<br><br>";
		echo $clubname."<br><br>";
		echo $mailid."<br><br>";
		echo $facebook."<br><br>";
		echo $instagram."<br><br>";
		echo $github."<br><br>";
		echo $whatsapp."<br><br>";
		echo $linkedin."<br><br>";
		echo $campus."<br><br>";
		echo $image_name;



		if(move_uploaded_file($image_tmp,"../card/images/co-ordinators profile image/$image_name")){
            $query="INSERT INTO coordinators (name,mail,type,profile_img,facebook,instagram,github,whatsapp,linkedin,schoolbranch,program,club,campus) VALUES('$name','$mailid','$type','$image_name','$facebook','$instagram','$github','$whatsapp','$linkedin','$schoolbranch','$program','$clubname','$campus')";
            $run=mysqli_query($db,$query) or die(mysqli_error($db));
            if ($run) {
                header('location:../adminlogin/coordinator_uploads.php');
				echo "inserted done";
            }
            else {
                echo "inserted error";
            }
        }
        else {
            echo "File Size High";
        }	
	}


	if(isset($_POST['uploadpreachievements'])){
		$name=mysqli_real_escape_string($db,$_POST['name']);
		$regd=mysqli_real_escape_string($db,$_POST['regd']);
		$academicyear=mysqli_real_escape_string($db,$_POST['academicyear']);
		$achievementdetails=mysqli_real_escape_string($db,$_POST['achievementdetails']);
		$batch=mysqli_real_escape_string($db,$_POST['batch']);
		$campus=mysqli_real_escape_string($db,$_POST['campus']);

		$image_name=$_FILES['profile_img']['name'];
        $image_tmp=$_FILES['profile_img']['tmp_name'];


		echo $name."<br><br>";
		echo $regd."<br><br>";
		echo $branch."<br><br>";
		echo $achievementdetails."<br><br>";
		echo $campus."<br><br>";
		echo $image_name;



		if(move_uploaded_file($image_tmp,"../card/images/Previous achievements/$image_name")){
            $query="INSERT INTO preachievements (name,regd,branch,achievementdetails,academicyear,campus,profile_img) VALUES('$name','$regd','$branch','$achievementdetails','$academicyear','$campus','$image_name')";
            $run=mysqli_query($db,$query) or die(mysqli_error($db));
            if ($run) {
                header('location:../adminlogin/achievement_uploads.php');
				echo "inserted done";
            }
            else {
                echo "inserted error";
            }
        }
        else {
            echo "File Size High";
        }	
	}
?>