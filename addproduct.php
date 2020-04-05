<?php
	session_start();
	$pagename="Add New Product"; //Create and populate a variable called $pagename
	echo "<link rel=stylesheet type=text/css href=mystylesheet.css>"; //Call in stylesheet
	echo "<title>".$pagename."</title>"; //display name of the page as window title
	echo "<body>";
	include ("headfile.html"); //include header layout file
	include("detectlogin.php");
	echo "<h4>".$pagename."</h4>"; 
	

	echo "<form action='addproduct_conf.php' method='POST'>";
	echo "	<table style='border:0px !important;'>";
	echo "	<tr style='border:0px !important;'><td style='border:0px !important;'>*Product Name :</td><td style='border:0px !important;'> <input type='text' name='productName'></td></tr>";
	echo "	<tr style='border:0px !important;'><td style='border:0px !important;'>*Small Picture Name :</td><td style='border:0px !important;'> <input type='text' name='smallPic'></td></tr>";
	echo "	<tr style='border:0px !important;'><td style='border:0px !important;'>*Large Picture Name :</td><td style='border:0px !important;'> <input type='text' name='largePic'></td></tr>";
	echo "	<tr style='border:0px !important;'><td style='border:0px !important;'>*Short Description :</td><td style='border:0px !important;'> <input type='text' name='shortDescrip'></td></tr>";
	echo "	<tr style='border:0px !important;'><td style='border:0px !important;'>*Long Description :</td><td style='border:0px !important;'> <input type='text' name='longDescrip'></td></tr>";
	echo "	<tr style='border:0px !important;'><td style='border:0px !important;'>*Price($) :</td><td style='border:0px !important;'> <input type='text' name='price'></td></tr>";
	echo "	<tr style='border:0px !important;'><td style='border:0px !important;'>*Initial Stock Quantity :</td><td style='border:0px !important;'> <input type='text' name='stock'></td></tr>";
	echo "	<tr style='border:0px !important;'><td style='border:0px !important;'><input type='reset' value='Reset Form'></td><td style='border:0px !important;'><input type='submit' value='Add Product'></td></tr>";
	echo "	</table>";
	echo "</form>";


	include("footfile.html"); //include head layout
	echo "</body>";
?>