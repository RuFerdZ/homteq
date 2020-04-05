<?php
	session_start();

	include("db.php");
	$pagename="Smart Basket"; //Create and populate a variable called $pagename
	echo "<link rel=stylesheet type=text/css href=mystylesheet.css>"; //Call in stylesheet
	echo "<title>".$pagename."</title>"; //display name of the page as window title
	echo "<body>";
	include ("headfile.html"); //include header layout file
	include("detectlogin.php");
	echo "<h4>".$pagename."</h4>"; //display name of the page on the web page

		if(isset($_POST['h_prodID'])){
			$delprodid = $_POST['h_prodID'];
	
			unset($_SESSION['basket'][$delprodid]);

			echo "<p>1 item removed from basket</p>";
		}


		if(isset($_POST['h_prodid'])){
			$newprodid = $_POST['h_prodid'];
			$reququantity = $_POST['p_quantity'];	
		//create a new cell in the basket session array. Index this cell with the new product id.
		//Inside the cell store the required product quantity
		$_SESSION['basket'][$newprodid]=$reququantity;
		//echo "<p>The doc id ".$newdocid." has been ".$_SESSION['basket'][$newdocid];
		}else{
		echo "<p>Current basket unchanged</p>";
		}
			$total=0;
			if(isset($_SESSION['basket'])){
				
				echo "<table>";
				echo "  <tr>";
				echo "	<th>Product</th>";
				echo "	<th>Price</th>";
				echo "	<th>Quantity</th>";
				echo "	<th>Subtotal</th>";
				echo "	<th></th>";
				echo "  </tr>";
				
				foreach($_SESSION['basket'] As $prodID => $prodQuantity){
					$SQL="select prodName,prodPrice from Product where prodId = ".$prodID;
					$exeSQL=mysqli_query($conn, $SQL);
					while($arrayp=mysqli_fetch_array($exeSQL)){
						echo "  <tr>";
						echo "	<td>".$arrayp['prodName']."</td>";
						echo "	<td> $".$arrayp['prodPrice']."</td>";
						echo "	<td>".$prodQuantity."</td>";
						echo "	<td> $".$arrayp['prodPrice']*$prodQuantity."</td>";
						echo "	<td> <form action='basket.php' method='POST'> <input type='submit' value='Remove'></td>";
						echo "	<input type=hidden name=h_prodID value=".$prodID."> </form>";
						$total = $total +($arrayp['prodPrice']*$prodQuantity);
						echo "  </tr>";
					}
					
				}
				echo "<tr>
					<td colspan='3'>Total</td>
					<td> $".$total."</td>
					</tr>";
				echo "</table>";
				echo "<a href='clearbasket.php'>Clear Basket</a>";
			}else{
				
				echo "<table>";
				echo "  <tr>";
				echo "	<th>Product</th>";
				echo "	<th>Price</th>";
				echo "	<th>Quantity</th>";
				echo "	<th>Subtotal</th>";
				echo "	<th></th>";
				echo "  </tr>";
				
			
				echo "<tr>
					<td colspan='3'>Total</td>
					<td> $".$total."</td>
					</tr>";
				echo "</table>";
				
			}
	$_SESSION['total'] = $total;
		
	if(isset($_SESSION['userId'])){

		echo "<br><br>To finalize your Order: <a href='checkout.php'>Checkout</a>";	
	}else{
		echo "<br><br>New homteq Customers: <a href='signup.php'>Sign-up</a>";
		echo "<br>Returning homteq Customers: <a href='login.php'>Login</a>";
	}
	
	
	include("footfile.html"); //include head layout
	echo "</body>";
?>
