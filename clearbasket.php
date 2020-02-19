<?php
	session_start();
	include("db.php");
	$pagename="Clear Smart Basket"; //Create and populate a variable called $pagename
	echo "<link rel=stylesheet type=text/css href=mystylesheet.css>"; //Call in stylesheet
	echo "<title>".$pagename."</title>"; //display name of the page as window title
	echo "<body>";
	include ("headfile.html"); //include header layout file
	echo "<h4>".$pagename."</h4>"; //display name of the page on the web page
	//display random text
	unset($_SESSION['basket']);
	echo "<p> Your basket has been cleared.";
				echo "<table>";
				echo "  <tr>";
				echo "	<th>Product</th>";
				echo "	<th>Price</th>";
				echo "	<th>Quantity</th>";
				echo "	<th>Subtotal</th>";
				echo "	<th></th>";
				echo "  </tr>";
				
			
				echo "<tr>";
				echo "<td colspan='3'>Total</td>";
				echo "<td> $0.00</td>";
				echo "<td></td>";
				echo "</tr>";
				echo "</table>";
	include("footfile.html"); //include head layout
	echo "</body>";
?>