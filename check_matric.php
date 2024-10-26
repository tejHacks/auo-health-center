<?php
require_once("configs/config.php");
if (!empty($_POST["matricNumber"])) {
    $matricNumber = $_POST["matricNumber"];
   
    
    $result = mysqli_query($conn, "SELECT `MatricNumber` FROM `Student` WHERE `MatricNumber`='$matricNumber' ");
    $count = mysqli_num_rows($result);
    if ($count > 0) {
        echo "<span style='color:red'> This matric number has already been regiStered .</span>";
        echo "<script>let x = document.getElementById('matricNumber');x.classList.remove('is-valid');x.classList.add('is-invalid'); </script>";
        echo "<script>$('#submit').prop('disabled',true);</script>";
    } else {
        // echo "<span style='color:green'> This email is available for registration .</span>";
        echo "<script>let x = document.getElementById('matricNumber');x.classList.remove('is-invalid');x.classList.add('is-valid'); </script>";
        echo "<script>$('#submit').prop('disabled',false);</script>";
    }

    // check if the input value is empty or not
} else {
    // echo "<span style='color:red'>Please type in your matric number.</span>";
    echo "<script>let x = document.getElementById('matricNumber');x.classList.remove('is-valid');x.classList.add('is-invalid'); </script>";
    
    echo "<script>$('#submit').prop('disabled',true);</script>";
}



//check matric number if it is still available and not registered yet 