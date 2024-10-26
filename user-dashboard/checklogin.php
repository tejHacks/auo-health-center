<?php
session_start();
include('config.php');


if (!empty($_SESSION['matric']) && !empty($_SESSION['password'])) {
    $matric = $_SESSION['matric'];
    $password = $_SESSION['password'];
 
    $stmt = $conn->prepare("SELECT * FROM `Student` WHERE `MatricNumber` = ? ");
 $stmt->bind_param("s",$matric);
 $stmt->execute();
 $result = $stmt->get_result();

 if($result->num_rows >0){
    $row = $result->fetch_assoc();
    $fullName = $row["Fullname"];
    $email = $row["Email"];
    $matricNumber = $row["MatricNumber"];
    $mobile = $row["Phonenumber"];
    $id = $row["Student_ID"];
    $level = $row["Level"];
    $course = $row["Course"];
    $gender = $row["Gender"];
    $profilePhoto = $row["profile_photo"];
    $userId = $row["Student_ID"];
 }

}
 else {
    header("location:../login.php");
}

?>