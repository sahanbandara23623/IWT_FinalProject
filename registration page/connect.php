<?php 
	include_once 'conn.php';
	if(isset($_POST['save']))
	{	 	 
		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$Address = $_POST['Address'];
		$Date of birth = $_POST['Date of birth'];
		$email = $_POST['email'];
		$create-password = $_POST['create-password'];
		$confirm-password = $_POST['confirm-password'];
		$phone = $_POST['phone'];
		$gender = $_POST['gender'];
		$check = $_POST['check']; 	 
		$sql = "INSERT INTO registrationdb (first_name,last_name,Address,Date_of_birth,email,create_password,confirm_password,phone,gender,box) 	 
		VALUES ('$first_name','$last_name','$Address','$Date_of_birth','$email','$create_password','$confirm_password','$phone','$gender','$box')"; 	 
		if (mysqli_query($conn, $sql)) { 		
			echo "New record created successfully !"; 	 
		} else { 		
			echo "Error: " . $sql . "
" . mysqli_error($conn); 	 
			} 	 mysqli_close($conn); 
	}
?>

	