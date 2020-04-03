<?php
	session_start();
	include("db.php");
	$pagename="Your Sign Up Results"; //Create and populate a variable called $pagename
	echo "<link rel=stylesheet type=text/css href=mystylesheet.css>"; //Call in stylesheet
	echo "<title>".$pagename."</title>"; //display name of the page as window title
	echo "<body>";
	include ("headfile.html"); //include header layout file
	echo "<h4>".$pagename."</h4>"; //display name of the page on the web page
	//display random text
	
	
	$fname = $_POST['userFName'];
	$sname = $_POST['userSName'];
	$address = $_POST['userAddress'];
	$postcode = $_POST['userPostCode'];
	$telno = $_POST['userTelNo'];
	$email = $_POST['userEmail'];
	$password = $_POST['userPassword'];
	$confirmpwd = $_POST['confirmPassword'];


	if(empty($fname) || empty($sname) || empty($address) || empty($postcode) || empty($telno) || empty($email) || empty($password) || empty($confirmpwd)){
	 	echo "Hi, you have not filled all details!!!<br>";
		echo "<a href='signup.php'>Go back</a> to fill again.";
	}else{
		if ($password!=$confirmpwd){
			echo "Hi, your passwords does not Match!<br>";
			echo "<a href='signup.php'>Go back</a> to fill again.";
		}else {
			if (filter_var($email, FILTER_VALIDATE_EMAIL)){
				try {
					$SQL = "insert into users (userType,userFName,userSName,userAddress,userPostCode,userTelNo,userEmail,userPassword)values(' ','$fname','$sname','$address','$postcode','$telno','$email','$password');";
					$exeSQL=mysqli_query($conn, $SQL) or die(mysqli_error($conn));
					echo "Hi ".$fname ." " .$sname;
					echo "<p>You have successfully signed Up</p>";
					echo "<p>Click here to <a href='login.php'> Login</a> </p>";
				} catch (Exception $e) {
					echo "Hi, this email already exists!<br>";
					echo "<a href='signup.php'>Go back</a> to Sign up with a different email.";
				}
			}else{
				echo "Hi, your email is invalid!<br>";
				echo "<a href='signup.php'>Go back</a> to fill again.";
			}
		}	
	}

	include("footfile.html"); //include head layout
	echo "</body>";
?>