<?php
	if(isset($_SESSION['userId'])){
		echo "<div align='right'>".$_SESSION['userFName']."  ".$_SESSION['userSName']." | ".($_SESSION['userType'])." No: ".($_SESSION['userId'])."</div>";	
	}
?>