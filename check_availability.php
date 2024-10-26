<?php
require_once("configs/config.php");
if (!empty($_POST["Email"])) {
	$Email = $_POST["Email"];

	$email = filter_var($Email, FILTER_SANITIZE_EMAIL);
	// Validate e-mail
	if (!filter_var($Email, FILTER_VALIDATE_EMAIL) === false) {
		echo "<span style='color:green;float:left;'>{$Email} is a valid email address and can be registered </span>";
		echo "<script>let x = document.getElementById('email');x.classList.add('is-valid');x.classList.remove('is-invalid'); </script>";
		
			$result = mysqli_query($conn, "SELECT `Email` FROM `Student` WHERE `Email`='$Email' ");
			$count = mysqli_num_rows($result);

			
			if ($count > 0) {
				echo "<span style='color:red'> This email already exists,try another one .</span>";
				echo "<script>$('#submit').prop('disabled',true);</script>";
			} else {

			// echo "<span style='color:green'>is available for registration .</span>";
			echo "<script>let x = document.getElementById('email');x.classList.remove(is-invalid');x.classList.add('is-valid'); </script>";
				echo "<script>$('#submit').prop('disabled',false);</script>";
			}
		} else {
			// echo ("$Email is not a valid email address and is not valid for registration");
		echo "<script>let x = document.getElementById('email');x.classList.add('is-invalid'); </script>";

			echo "<script>$('#submit').prop('disabled',true);</script>";
	}
} else {
	// echo "<span style='color:red'>Please type in an email.</span>";
	echo "<script>let x = document.getElementById('email');x.classList.add('is-invalid'); </script>";

	echo "<script>$('#submit').prop('disabled',true);</script>";
}

	//end of isset function and checking if the email is empty or not!!!