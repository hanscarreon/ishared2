<?php

error_reporting(E_ALL ^ E_NOTICE);

$conn = mysqli_connect('localhost', 'root', '', 'the_system');
// $conn = mysqli_connect('localhost', 'u152248926_root', 'JAjArB9sKKyx', 'u152248926_datab');

if($conn->connect_error)
  {
    // check the connection
    die('connection failed ' . $conn->connect_error);
  }


	




if(isset($_POST['register'])){

	// $phone 	= $_POST['regnum'];


	$email = $_POST['regemail'];
	$username =  $_POST['username'];
	$password = $_POST['regpass'];
	$password2 = $_POST['regrepeat'];
	$fname  = $_POST['regfname'];
	$lname  = $_POST['reglname'];


	if( empty($username) || empty($password) || empty($password2))
	{
		header("Location: ../signup.php?error=emptyfield&name=".$name."&username=".$username);
		exit();
	}

	elseif (!preg_match("/^[a-zA-z0-9]*$/", $username)) {
		header("Location ../signup.php?error=invalidnameuser");
		exit();
	}
	elseif ($password !== $password2) {
		header("Location: ../signup.php?error=passwordCheck&name=".$name. "username=" .$username);
		exit();
	}
	else
		{
			$sql = "SELECT username FROM admin WHERE username=?";
			$stmt = mysqli_stmt_init($conn);

			if(!mysqli_stmt_prepare($stmt,$sql))
			{
				header("Location: ../signup.php?error=sqlerror1");
			
				exit();


			}
			else
			{
				mysqli_stmt_bind_param($stmt, "s", $username);
				mysqli_stmt_execute($stmt);
				mysqli_stmt_store_result($stmt);
				$resultCheck = mysqli_stmt_num_rows($stmt);
				if($resultCheck > 0)
				{
					header("Location: ../signup.php?error=usernametaken".$username);
					exit();
				}
				else{
					$sql = "INSERT INTO admin (username,password,fname,lname) values (?,?,?,?)";

					$stmt = mysqli_stmt_init($conn);
					if(!mysqli_stmt_prepare($stmt, $sql)){
						header("Location: ../signup.php?error=sqlerror");
					
						exit();
					}
					else
  					{
						$hasspass = password_hash($password, PASSWORD_DEFAULT);
						// echo $username;
						// echo "<br>";
						// echo $password;
						// echo "<br>";
						// echo $fname;
						// echo "<dbr>";
						// echo $email;


						mysqli_stmt_bind_param($stmt, "ssss", $username, $hasspass, $fname, $lname);
						mysqli_stmt_execute($stmt);
						 echo'<script>';
               			 echo'alert("successfully Registered!");';
               			 echo'window.location.href="../login.php";';
               			 echo'</script>';
						
						// header("location: ../login.php?=success");
						exit();
				
					}
				}
			}
		}

		mysqli_stmt_close($stmt);
		mysqli_close($conn);


}