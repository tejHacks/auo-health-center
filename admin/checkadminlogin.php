<?php
session_start();
error_reporting(0);

include('includes/config.php');

if (!empty($_SESSION["staffID"])) {
    $staffID = $_SESSION['staffID'];
 
    $stmt = $conn->prepare("SELECT * FROM `Admin` WHERE `StaffID` = ? ");
 $stmt->bind_param("s",$staffID);
 $stmt->execute();
 $result = $stmt->get_result();

 if($result->num_rows >0){
     $row = $result->fetch_assoc();
     $adminid = $row["ID"];
     $fullName = $row["Fullname"];
     $studentID = $row["StaffID"];
    $email = $row["StaffEmail"];
    $contact = $row["Contact"];
    $gender = $row["Gender"];
    $status = $row["Status"];
    $role = $row["Role"];
    $jobtitle = $row["JobTitle"];
    $department = $row["Department"];
   $regDate = $row["RegDate"];
   $updatedDate = $row["updationDate"];
 }

}
 else {
    header("location:index.php");
}



?>