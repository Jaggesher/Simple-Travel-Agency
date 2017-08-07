<?php
	$handle= $_POST['userid'];
	$pswrd= $_POST['usrpass'];

	if($handle=="PGD" && $pswrd=="PGD"){
		session_start();
		 $_SESSION["status"] = "ADMIN";
		 header('location:index.php');
	}else{
		echo "<h1>!!!!!!INVALID!!!!!!!!!, Log In Fail.</h1>";
	}
?>