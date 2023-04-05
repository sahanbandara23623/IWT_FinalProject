<?php
require 'config.php';

if(isset($_POST["submit"])){

	$first_name = $_POST["first_name"];

	$last_name = $_POST["last_name"];

	$Address = $_POST["Address"];

	$Date_of_birth = $_POST["Date_of_birth"];

	$email = $_POST["email"];

	$create_password = $_POST["create_password"];

	$confirm_password = $_POST["confirm_password"];

	$phone = $_POST["phone"];

	$gender = $_POST["gender"];

	// $box = $_POST["box"];
	
	$duplicate = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email' ");

	if(mysqli_num_rows($duplicate)> 0 ){

		echo "<script>alert('first_name or Email has Already taken');</script>";

		header("location:registration.php?error=email already exist!");
	}
	else{
		if(strcmp($create_password, $confirm_password) == 0 )
		{

			$query = "INSERT INTO users(firstName, lastName, Address, dob, email, password, phone_number, gender) VALUES ( '{$first_name}', '{$last_name}',  '{$Address}', '{$Date_of_birth}', '{$email}',  '{$confirm_password}', '{$phone}', '{$gender}')";

			$result = mysqli_query($conn,$query);
		}
			if ($result){
				header('location:../Login/login page/loginpage.php');
			}
			else{
			echo
			"<script>alert('sql query faild')</script>";
			}
	 }
	 //else{
	// 	echo
	// 		"<script>alert('password does not match')</script>";
	// 		header('location:registration.php');
	// }
	
	}
	
?>

<!doctype html>
<html>
	<head>
	        <link rel="stylesheet" href="style.css">
			
		<title>
		</title>
	</head>
<body>
	<div class="regform"><h1>Registration Form</h1></div>
	<div class="main">
		<form action="registration.php" method="POST">
		
			<div id="name">
			 <h2 class="name">Name</h2>
			   <input class="firstname" type="text" id ="first_name" name="first_name">
			   <label class="firstlabel">first name</label>
			   <input class="lastname" type="text" id ="last_name" name="last_name">
			   <label class="lastlabel">last name</label>
			</div>
			
			<h2 class="name">Address</h2>
			<input class="address" type="text" id ="Address" name="Address">
			
			<h2 class="name">Date of birth</h2>
			<input class="DOB" type="Date" id ="Date of birth" name="Date_of_birth">
			
			<h2 class="name">Email</h2>
			<input class="email" type="text" id ="email" name="email">
			
			
			<h2 class="name">Password</h2>
			   <input class="password" type="password" id ="create-password" name="create_password"><br>
			   <label class="createpassword">Create password</label>
			   <input class="confirmpassword" type="password" id ="confirm-password" name="confirm_password"><br>
			   <label class="confirmpasswordlb">Confirm Password</label>
			
			<h2 class="name">Phone</h2>
			<input class="number" type="text" id ="phone" name="phone" maxlength="10">
	
			
			<h2 class="name">Gender</h2>
			<label class="radio">
			<input type="radio" id="male" id ="gender" name="gender" value="male" class="radio-one">
			<label for="male">Male</label>
			<input type="radio" id="female" id ="gender" name="gender" value="female" class="radio-two">
			<label for="female">Female</label>
			</label><br><br>
			
			<div class="checkbox">
			<!-- <label> -->
			  <input type="checkbox" id="borrow" id ="box" name="box" value="B">
			  <label for="borrow">Borrowing Book</label><br>
			  <input type="checkbox" id="reading" id ="box" name="box" value="r">
			  <label for="borrow">In-house reading</label><br>
			  <input type="checkbox" id="reference" id ="box" name="box" value="re">
			  <label for="borrow">Reference books</label><br>
			</div>
			
			<button type="submit" class="button" name="submit" >Submit</button>
			
		</form>
	</div>
</body>
</html>