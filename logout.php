<?php
	session_start();
	$pagename="Logout"; //Create and populate a variable called $pagename
	echo "<link rel=stylesheet type=text/css href=mystylesheet.css>"; //Call in stylesheet
	echo "<title>".$pagename."</title>"; //display name of the page as window title
	echo "<body>";
	include ("headfile.html"); //include header layout file
	include ("detectlogin.php");
	echo "<h4>".$pagename."</h4>"; //display name of the page on the web page
	//display random text
	 
	echo "Thank you, ".$_SESSION['userFName']."  ".$_SESSION['userSName'];
	echo "<br><br>You are now Logged Out";
	
	// remove all session variables
	session_unset();

	// destroy the session
	session_destroy();


	include("footfile.html"); //include head layout
	echo "</body>";
?>