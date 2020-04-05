<?php
	session_start();
	$pagename="New Product Confirmation"; //Create and populate a variable called $pagename
	echo "<link rel=stylesheet type=text/css href=mystylesheet.css>"; //Call in stylesheet
	echo "<title>".$pagename."</title>"; //display name of the page as window title
	echo "<body>";
	include("db.php");
	include ("headfile.html"); //include header layout file
	include("detectlogin.php");
	echo "<h4>".$pagename."</h4>"; 
	

	$pname = $_POST['productName'];
	$smallpic  = $_POST['smallPic'];
	$largepic = $_POST['largePic'];
	$shortd = $_POST['shortDescrip'];
	$longd = $_POST['longDescrip'];
	$price = $_POST['price'];
	$stock = $_POST['stock'];

	if (empty($pname) || empty($smallpic) || empty($largepic) || empty($shortd) || empty($longd) || empty($price) || empty($stock)){
		echo "You have not filled all details!!!<br>";
		echo "<a href='addproduct.php'>Go back</a> to fill again.";
	}else{
		$SQL = "insert into product(prodName, prodPicNameSmall, prodPicNameLarge, prodDescripShort, prodDescripLong, prodPrice, prodQuantity) values ('$pname','$smallpic','$largepic','$shortd','$longd','$price','$stock')";
		$exeSQL=mysqli_query($conn, $SQL);
		if (mysqli_errno($conn)=='0'){
			echo "The Product has been Successfully added!</br>";
			echo "<p>Product Name :" .$pname."</p>";
			echo "<p>Name of Small Picture :".$smallpic."</p>";
			echo "<p>Name of Large Picture :".$largepic."</p>";
			echo "<p>Short Description :".$shortd."</p>";
			echo "<p>Long Description :".$longd."</p>";
			echo "<p>Price :".$price."</p>";
			echo "<p>Quantity :".$stock."</p>";
		}else if (mysqli_errno($conn)=='1062'){
			echo "Product Name Uniqueness Problem";
		}else if (mysqli_errno($conn)=='1064'){
			echo "Illegal Characters('/','`') Entered";
		}else if (mysqli_errno($conn)=='1054'){
			echo "Invalid format of Price or(and) Quantity";
		}
		

	}

	include("footfile.html"); //include head layout
	echo "</body>";
?>