<?php
	session_start();
	include("db.php");
	$pagename="Order Confirmation"; //Create and populate a variable called $pagename
	echo "<link rel=stylesheet type=text/css href=mystylesheet.css>"; //Call in stylesheet
	echo "<title>".$pagename."</title>"; //display name of the page as window title
	echo "<body>";
	include ("headfile.html"); //include header layout file
	include ("detectlogin.php");
	echo "<h4>".$pagename."</h4>"; //display name of the page on the web page
	//display random text
	  

	$userId = $_SESSION['userId'];
	$orderTotal = $_SESSION['total'];
	$orderDateTime = date('Y-m-d H:i:s');


	try{
		$SQL = "insert into orders(userId, orderDateTime, orderTotal) values ('$userId','$orderDateTime','$orderTotal')";

		$exeSQL=mysqli_query($conn, $SQL) or die(mysqli_error($conn));
		
		$SQL = "select * from orders WHERE orderNo=(select MAX(orderNo) from orders where userId='$userId')";
		$exeSQL=mysqli_query($conn, $SQL) or die(mysqli_error($conn));

		$arrayp=mysqli_fetch_array($exeSQL);


		echo "<p>You Order has been Successfully Placed</p>";
		echo "<p>You Order Reference Number: <b>".$arrayp['orderNo']."</b></p>";

		$Grandtotal=0;

		
		echo "<table>";
		echo "  <tr>";
		echo "	<th>Product</th>";
		echo "	<th>Price</th>";
		echo "	<th>Quantity</th>";
		echo "	<th>Subtotal</th>";
		echo "  </tr>";
			

		foreach($_SESSION['basket'] As $prodID => $prodQuantity){
			$SQL="select prodName,prodPrice from Product where prodId = ".$prodID;
			$exeSQL=mysqli_query($conn, $SQL);
			$arrayb=mysqli_fetch_array($exeSQL);

			$total = ($arrayb['prodPrice']*$prodQuantity);

			$orderNo = $arrayp['orderNo'];

			$Grandtotal= $Grandtotal + $total;
	
			$SQL = "insert into order_line(orderNo,prodId,quantityOrdered,subTotal) values ('$orderNo','$prodID','$prodQuantity','$total')";
			$exeSQL=mysqli_query($conn, $SQL);
		
			echo "  <tr>";				
			echo "	<td>".$arrayb['prodName']."</td>";
			echo "	<td> $".$arrayb['prodPrice']."</td>";
			echo "	<td>".$prodQuantity."</td>";
			echo "	<td> $".$total."</td>";
			echo "  </tr>";
			
		}

		echo "<tr>
			<td colspan='3'>Total</td>
			<td> $".$Grandtotal."</td>
			</tr>";
		echo "</table>";



	}catch(Exception $e){
		echo "Error in Checkout!!";
	}	

	echo "To logout and leave the system: <a href='logout.php'>Logout</a>";
	// remove all session variables
	

	// destroy the session
	

	include("footfile.html"); //include head layout
	echo "</body>";
?>