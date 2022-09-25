<?php
    function getAllYear($db){
        $query="SELECT * FROM year";
        $run=mysqli_query($db,$query);
        $data=array();
        while($d=mysqli_fetch_assoc($run)){
            $data[]=$d;
        }
        return $data;
    }

    function getSessionByYear($db,$year){
        $query="SELECT * FROM year WHERE admissionyear='$year'";
        $run=mysqli_query($db,$query);
        $data=mysqli_fetch_assoc($run);
        return $data['Year'];
    }

    function getYearBySession($db,$AddmissionYear){
        $query="SELECT * FROM year WHERE Year='$AddmissionYear'";
        $run=mysqli_query($db,$query);
        $data=mysqli_fetch_assoc($run);
        return $data['admissionyear'];
    }

    function getAllPost($db,$uemail){
        $query="SELECT * FROM csrtimesheet WHERE emailOfStd='$uemail' ORDER BY id DESC";
        $run=mysqli_query($db,$query);
        $data=array();
        while($d=mysqli_fetch_assoc($run)){
            $data[]=$d;
        }
        return $data;
    }

    function getAllPostTeacher($db,$campus,$Clubget){
        $query="SELECT * FROM csrtimesheet WHERE campus='$campus' AND club='$Clubget' ORDER BY id DESC";
        $run=mysqli_query($db,$query);
        $data=array();
        while($d=mysqli_fetch_assoc($run)){
            $data[]=$d;
        }
        return $data;
    }

    function getAllPostTeacherSession($db,$campus,$Clubget,$sessionSelect){
        $query="SELECT * FROM csrtimesheet WHERE club='$Clubget' AND campus='$campus' AND yearOfPr='$sessionSelect' ORDER BY id DESC";
        $run=mysqli_query($db,$query);
        $data=array();
        while($d=mysqli_fetch_assoc($run)){
            $data[]=$d;
        }
        return $data;
    }

    function getAllPostAdmin($db){
        $query="SELECT NameOfStd,emailOfStd,totalTime,id,SUM(totalTime) as totalTime FROM csrtimesheet GROUP BY emailOfStd ORDER BY id DESC";
        $run=mysqli_query($db,$query);
        $data=array();
        while($d=mysqli_fetch_assoc($run)){
            $data[]=$d;
        }
        return $data;
    }

    function getAllProgramAdmin($db){
        $query="SELECT * FROM csrpr  ORDER BY id DESC";
        $run=mysqli_query($db,$query);
        $data=array();
        while($d=mysqli_fetch_assoc($run)){
            $data[]=$d;
        }
        return $data;
    }

    function getAllPostAdminByClub($db,$school,$campus){
        $query="SELECT NameOfStd,emailOfStd,totalTime,id,SUM(totalTime) as totalTime FROM csrtimesheet WHERE schoolname='$school' AND campus='$campus' GROUP BY emailOfStd ORDER BY id DESC";
        $run=mysqli_query($db,$query);
        $data=array();
        while($d=mysqli_fetch_assoc($run)){
            $data[]=$d;
        }
        return $data;
    }

    function getAllPostAdminBySchoolClub($db,$school,$campus,$program,$clubname){
        $query="SELECT NameOfStd,emailOfStd,totalTime,id,SUM(totalTime) as totalTime FROM csrtimesheet WHERE schoolname='$school' AND campus='$campus' AND csrPr='$program' AND club='$clubname' GROUP BY emailOfStd ORDER BY id DESC";
        $run=mysqli_query($db,$query);
        $data=array();
        while($d=mysqli_fetch_assoc($run)){
            $data[]=$d;
        }
        return $data;
    }
    
    function getAllPostAdminByCampus($db,$campus){
        $query="SELECT NameOfStd,emailOfStd,totalTime,id,SUM(totalTime) as totalTime FROM csrtimesheet WHERE campus='$campus' GROUP BY emailOfStd ORDER BY id DESC";
        $run=mysqli_query($db,$query);
        $data=array();
        while($d=mysqli_fetch_assoc($run)){
            $data[]=$d;
        }
        return $data;
    }

    function getUserNmae($db,$uemail){
        $query="SELECT * FROM student WHERE email='$uemail'";
        $run=mysqli_query($db,$query);
        $data=mysqli_fetch_assoc($run);
        return $data;
    }

    function getStudentSports($db,$uemail){
        $query="SELECT SUM(totalTime) as totalTime FROM csrtimesheet WHERE emailOfStd='$uemail' AND csrPr='Sports'";
        $run=mysqli_query($db,$query);
        $data=mysqli_fetch_assoc($run);
        return $data['totalTime'];
    }

    function getStudentResponsibility($db,$uemail){
        $query="SELECT SUM(totalTime) as totalTime FROM csrtimesheet WHERE emailOfStd='$uemail' AND csrPr='Responsibility'";
        $run=mysqli_query($db,$query);
        $data=mysqli_fetch_assoc($run);
        return $data['totalTime'];
    }

    function getStudentCulture($db,$uemail){
        $query="SELECT SUM(totalTime) as totalTime FROM csrtimesheet WHERE emailOfStd='$uemail' AND csrPr='Culture'";
        $run=mysqli_query($db,$query);
        $data=mysqli_fetch_assoc($run);
        return $data['totalTime'];
    }

    function getAllStudentDetailsByAdmin($db,$campus){
        $query="SELECT * FROM student WHERE campus='$campus' ORDER BY id DESC";
        $run=mysqli_query($db,$query);
        $data=array();
        while($d=mysqli_fetch_assoc($run)){
            $data[]=$d;
        }
        return $data;
    }


    function getAllStudentDetails($db,$uemail){
        $query="SELECT * FROM student WHERE email='$uemail' ORDER BY id DESC";
        $run=mysqli_query($db,$query);
        $data=mysqli_fetch_assoc($run);
        return $data;
    }

    function getAllAdminDetails($db,$uemail){
        $query="SELECT * FROM admin WHERE email='$uemail' ORDER BY id DESC";
        $run=mysqli_query($db,$query);
        $data=mysqli_fetch_assoc($run);
        return $data;
    }

    function getTeacherDetails($db,$uemail){
        $query="SELECT * FROM teacher WHERE email='$uemail' ORDER BY id DESC";
        $run=mysqli_query($db,$query);
        $data=mysqli_fetch_assoc($run);
        return $data;
    }

    function getAllPostByAdmin($db,$uemail,$year){
        $query="SELECT * FROM csrtimesheet WHERE emailOfStd='$uemail' AND yearOfPr='$year' AND status='Approved' ORDER BY id DESC";
        $run=mysqli_query($db,$query);
        $data=array();
        while($d=mysqli_fetch_assoc($run)){
            $data[]=$d;
        }
        return $data;
    }

    function getStudentCultureByAdmin($db,$uemail){
        $query="SELECT SUM(totalTime) as totalTime FROM csrtimesheet WHERE emailOfStd='$uemail' AND csrPr='Culture'";
        $run=mysqli_query($db,$query);
        $data=mysqli_fetch_assoc($run);
        return $data['totalTime'];
    }
    
    function getStudentResponsibilityByAdmin($db,$uemail){
        $query="SELECT SUM(totalTime) as totalTime FROM csrtimesheet WHERE emailOfStd='$uemail' AND csrPr='Responsibility'";
        $run=mysqli_query($db,$query);
        $data=mysqli_fetch_assoc($run);
        return $data['totalTime'];
    }

    function getStudentSportsByAdmin($db,$uemail){
        $query="SELECT SUM(totalTime) as totalTime FROM csrtimesheet WHERE emailOfStd='$uemail' AND csrPr='Sports'";
        $run=mysqli_query($db,$query);
        $data=mysqli_fetch_assoc($run);
        return $data['totalTime'];
    }

    function getStudentResultyr1($db,$uemail,$year){
        $query="SELECT * FROM certificatelog WHERE email='$uemail' AND Year='$year'";
        $run=mysqli_query($db,$query);
        $data=mysqli_fetch_assoc($run);
        return $data;
    }

    function getStudentResultyr2($db,$uemail,$year){
        $query="SELECT * FROM certificatelog WHERE email='$uemail' AND Year='$year'";
        $run=mysqli_query($db,$query);
        $data=mysqli_fetch_assoc($run);
        return $data;
    }

    function getStudentResultyr3($db,$uemail,$year){
        $query="SELECT * FROM certificatelog WHERE email='$uemail' AND Year='$year'";
        $run=mysqli_query($db,$query);
        $data=mysqli_fetch_assoc($run);
        return $data;
    }

    function getStudentResultyr4($db,$uemail,$year){
        $query="SELECT * FROM certificatelog WHERE email='$uemail' AND Year='$year'";
        $run=mysqli_query($db,$query);
        $data=mysqli_fetch_assoc($run);
        return $data;
    }

    function getImagesByPost($db,$email){
        $query="SELECT * FROM student WHERE email='$email'";
        $run=mysqli_query($db,$query);
        $data=mysqli_fetch_assoc($run);
        return $data;
    }

    function getStudentDataByRegd($db,$regd){
        $query="SELECT * FROM studregd WHERE regd='$regd'";
        $run=mysqli_query($db,$query);
        $data=mysqli_fetch_assoc($run);
        return $data;
    }

    function randPass() {
        $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
        return substr(str_shuffle($chars),0,8);
    }
    
?>