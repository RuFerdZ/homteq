<?php
	session_start();
	$pagename="Sign Up"; //Create and populate a variable called $pagename
	echo "<link rel=stylesheet type=text/css href=mystylesheet.css>"; //Call in stylesheet
	echo "<title>".$pagename."</title>"; //display name of the page as window title
	echo "<body>";
	include ("headfile.html"); //include header layout file
	echo "<h4>".$pagename."</h4>"; //display name of the page on the web page
	
	echo "<form action='signup_process.php' method='POST'>";
	echo "	<table style='border:0px !important;'>";
	echo "	<tr style='border:0px !important;'><td style='border:0px !important;'>*First Name :</td><td style='border:0px !important;'> <input type='text' name='userFName'></td></tr>";
	echo "	<tr style='border:0px !important;'><td style='border:0px !important;'>*Surname :</td><td style='border:0px !important;'> <input type='text' name='userSName'></td></tr>";
	echo "	<tr style='border:0px !important;'><td style='border:0px !important;'>*Address :</td><td style='border:0px !important;'> <input type='text' name='userAddress'></td></tr>";
	echo "	<tr style='border:0px !important;'><td style='border:0px !important;'>*Postal Code :</td><td style='border:0px !important;'> <input type='text' name='userPostCode'></td></tr>";
	echo "	<tr style='border:0px !important;'><td style='border:0px !important;'>*Telephone number :</td><td style='border:0px !important;'> <input type='text' name='userTelNo'></td></tr>";
	echo "	<tr style='border:0px !important;'><td style='border:0px !important;'>*Email :</td><td style='border:0px !important;'> <input type='email' name='userEmail'></td></tr>";
	echo "	<tr style='border:0px !important;'><td style='border:0px !important;'>*Password :</td><td style='border:0px !important;'> <input type='password' name='userPassword'></td></tr>";
	echo "	<tr style='border:0px !important;'><td style='border:0px !important;'>*Confirm Password :</td><td style='border:0px !important;'> <input type='password' name='confirmPassword'></td></tr>";
	echo "	<tr style='border:0px !important;'><td style='border:0px !important;'></td><td style='border:0px !important;'><input type='submit' value='Sign Up'></td></tr>";
	echo "	</table>";
	echo "</form>";

	include("footfile.html"); //include head layout
	echo "</body>";
?>