<?php
	session_start();
	$con = mysqli_connect('localhost', 'root', 'bob123$$bob', 'hw');
	if (!$con) {
		die('Connect Error (' . mysqli_connect_errno() . ') ' . mysqli_connect_error());
	}
	$username = mysqli_real_escape_string($con,$_POST['username']);
	$password = mysqli_real_escape_string($con, $_POST['password']);

	$query = mysqli_query($con, "SELECT * FROM tbl_students WHERE username= '$username' ");
	$exists = mysqli_num_rows($query);
	$table_users = "";
	$table_password = "";
	if ($exists > 0) {
		while($row = mysqli_fetch_assoc($query))
		{
			$table_users = $row['username'];
			$table_password = $row['password'];
		}
		$hash_match = password_verify($password, $table_password);
		if(($username == $table_users) && ($hash_match))
		{
			if($hash_match)
			{
				$_SESSION['user'] = $username;
				Print '<script>window.location.assign("logged-in/index.php");</script>';
			}
		}
		else
		{
			Print '<script>alert("Incorrect Password")</script>';
			Print '<script>window.location.assign("index.php#login");</script>';
		}
	}
	else
	{
		Print '<script>alert("Username is incorrect!");</script>';
		Print '<script>window.location.assign("index.php#login");</script>';
	}
?>
