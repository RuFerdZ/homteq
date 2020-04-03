<?php
	session_start();
	$pagename="Sign In"; //Create and populate a variable called $pagename
	echo "<link rel=stylesheet type=text/css href=mystylesheet.css>"; //Call in stylesheet
	echo "<title>".$pagename."</title>"; //display name of the page as window title
	echo "<body>";
	include ("headfile.html"); //include header layout file
	echo "<h4>".$pagename."</h4>"; //display name of the page on the web page
	//display random text
	
	echo "<form action='login_process.php' method='POST'>";
	echo "	<table style='border:0px !important;'>";
	echo "	<tr style='border:0px !important;'><td style='border:0px !important;'>Email :</td><td style='border:0px !important;'> <input type='email' name='email'></td></tr>";
	echo "	<tr style='border:0px !important;'><td style='border:0px !important;'>Password :</td><td style='border:0px !important;'> <input type='password' name='password'></td></tr>";
	echo "	<tr style='border:0px !important;'><td style='border:0px !important;'></td><td style='border:0px !important;'><input type='submit' value='Sign In'></td></tr>";
	echo "	</table>";
	echo "</form>";

	include("footfile.html"); //include head layout
	echo "</body>";
?>