<?php
//Print '<script>alert("Made It 1");</script>';
if($_SERVER["REQUEST_METHOD"] == "POST"){
	include  'resources/non-logged-in/libraries/php_functions.php';
	//Print '<script>alert("Made It 2");</script>';

	$con = mysqli_connect('localhost', 'root', 'bob123$$bob', 'hw');
	if (!$con)
	{
		die('Connect Error (' . mysqli_connect_errno() . ') ' . mysqli_connect_error());
	}
	//Print "<script>alert('Connected!');</script>";

	$username = mysqli_real_escape_string($con, $_POST['username']);
	//Print '<script>alert("No syntax error 1");</script>';
	$password = mysqli_real_escape_string($con, $_POST['password']);
	//Print '<script>alert("No syntax error 2");</script>';
	$first_name = mysqli_real_escape_string($con, $_POST['first_name']);
	//Print '<script>alert("No syntax error 3");</script>';
	$last_name = mysqli_real_escape_string($con, $_POST['last_name']);
	//Print '<script>alert("No syntax error 4");</script>';
	$email = mysqli_real_escape_string($con, $_POST['email']);
	//Print '<script>alert("No syntax error 5");</script>';
    $bool = true;
    //Print '<script>alert("Made It 3");</script>';

	$valid = valid_pass($password);
	if(!$valid){
		Print '<script>alert("The password you chose is not valid. Your password must be at least 8 characters long, have one capital and one special character, and one number.")</script>';
		Print '<script>window.location.assign("index.php#signup")</script>';
		exit(0);
	}
	$query = mysqli_query($con, "SELECT * FROM tbl_students"); //Query the users table
	while($row = mysqli_fetch_array($query)) //display all rows from query
	{
		$table_users = $row['username']; // the first username row is passed on to $table_users, and so on until the query is finished
		if($username == $table_users) // checks if there are any matching fields
		{
			$bool = false; // sets bool to false
			Print '<script>alert("Username has been taken!");</script>'; //Prompts the user
			print '<script>window.location.assign("index.php#signup");</script>';
		}
	}
	if($bool) // checks if bool is true
	{
		$hash = password_hash($password, PASSWORD_DEFAULT);
		mysqli_query($con, "INSERT INTO tbl_students (username, password, first_name, last_name, email) VALUES ('$username','$hash','$first_name','$last_name','$email')"); //Inserts the value to table users
		Print '<script>alert("Successfully Registered!");</script>'; // Prompts the user
		print '<script>window.location.assign("index.php");</script>';
	}
}
?>
