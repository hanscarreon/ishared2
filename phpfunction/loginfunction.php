<?php

// connect to database
$conn = mysqli_connect('localhost', 'root', '', 'the_system');
// $conn = mysqli_connect('localhost', 'u152248926_root', 'JAjArB9sKKyx', 'u152248926_datab');


if($conn->connect_error)
  {
    // check the connection
    die('connection failed ' . $conn->connect_error);
  }




if(isset($_POST['login']))
{	

	$username 	= $_POST['username'];
	$password 	= $_POST['password'];



	if(empty($username) || empty($password))
	{
		header("Location: ../login.php?error=emptyfield");
		exit();

	}else{

		$sql = "SELECT * FROM admin WHERE username=?";
		$stmt = mysqli_stmt_init($conn);

			if(!mysqli_stmt_prepare($stmt,$sql)){
				header("Location: ../login.php?error=sqlerror");
				exit();
			}
			else{
				mysqli_stmt_bind_param($stmt, "s", $username);
				mysqli_stmt_execute($stmt);
				$result = mysqli_stmt_get_result($stmt);

				if($row = mysqli_fetch_assoc($result)){
					$pwdcheck = password_verify($password, $row['password']);

					if($pwdcheck == false){
						header("Location: ../login.php?error=wrongpass");
						exit();

					}else if($pwdcheck == true){
						session_start();
						$_SESSION['username'] 			= $row['username'];
						$_SESSION['id'] 	  			= $row['id'];
						$_SESSION['fname'] 			  	= $row['fname'];
						$_SESSION['lname'] 				= $row['lname'];
						$_SESSION['mname'] 				= $row['mname'];
						$_SESSION['bod'] 				= $row['bod'];
						$_SESSION['level'] 				= $row['level'];
						$_SESSION['address'] 			= $row['address'];
						$_SESSION['profile_pic']	  	= $row['profile_pic'];
						header("Location: ../index.php?login=success");
						exit();

					}else{
						header("Location: ../login.php?error=wrongpass");
						exit();
					}

				}else{
					header("Location: ../login.php?error=nouser");
					exit();
				}
			}
		}
	
}


if(isset($_POST['logout']))
{
	session_start();
	session_unset();
	session_destroy();
	header("Location: ../login.php");
}



