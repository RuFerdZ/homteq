<?php
	session_start();
	include("db.php");
	$pagename="Your Login Results"; //Create and populate a variable called $pagename
	echo "<link rel=stylesheet type=text/css href=mystylesheet.css>"; //Call in stylesheet
	echo "<title>".$pagename."</title>"; //display name of the page as window title
	echo "<body>";
	include ("headfile.html"); //include header layout file
	echo "<h4>".$pagename."</h4>"; //display name of the page on the web page
	//display random text
	
	$email = $_POST['email'];
	$password = $_POST['password'];

	if(empty($email) || empty($password)){
		echo"<b><p>Login Failed<p></b><br>";
		echo"<p>Your login form is incomplete</p>";
		echo"<p>Make sure you provide all the required details</p>";
		echo "<p>Go back to <a href='login.php'>Login</a></p>";
	}else{
	
		$SQL="select userEmail,userPassword from Users"; 
		$exeSQL=mysqli_query($conn, $SQL) or die (mysqli_error());  
		$emailbool=true;
		$passbool=true;
		while ($arrayp=mysqli_fetch_array($exeSQL)){
			if($arrayp['userEmail']==$email){
				$emailbool=true;
				
			}else{
				$emailbool=false;
			}


		
			if($arrayp['userPassword'] == $password){
				$passbool=true;
			}else{
				$passbool=false;
			}
			
			if (($emailbool) and ($passbool)){
				break;
			}else if (($emailbool) and (!$passbool)){
				break;
			}
		}
				
		if(($emailbool) and ($passbool)){
			echo "Login successful<br>";
			$SQL="select userId,userType,userFName,userSName,userEmail from Users"; 
				$exeSQL=mysqli_query($conn, $SQL) or die (mysqli_error($conn));  
				while ($arrayp=mysqli_fetch_array($exeSQL))       {
					$_SESSION['userId']=$arrayp['userId'];
					$_SESSION['userType']=$arrayp['userType'];
					$_SESSION['userFName']=$arrayp['userFName'];
					$_SESSION['userSName']=$arrayp['userSName'];
				

			if ($arrayp['userEmail']==$email){
				echo "<br>Hello ". $_SESSION['userFName']   ." ".$_SESSION['userSName']."<br>";
				echo "<br>You have successfully logged in as homteq customer<br>";
				echo "<br>Continue Shopping for <a href='index.php'> Home Tech</a><br>";
				echo "<br>View your <a href='basket.php'>Smart Basket</a><br>";
			}
		}
		}else if(!$emailbool){
			echo "Email not recognised, login again";
			echo "<p>Go back to <a href='login.php'>Login</a></p>";
			echo "User enter kerene details: ".$email. "-----".$password;
			
		}else if(!$passbool){
			echo "Password not recognised, login again";
			echo "<p>Go back to <a href='login.php'>Login</a></p>";
			
		}
	}



	include("footfile.html"); //include head layout
	echo "</body>";
?>