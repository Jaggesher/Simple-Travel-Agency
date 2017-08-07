<?php
	session_start();
	!include "phpCode.php";

	if(is_auth()=="yes"){
		$code=$_POST["Code"];
		$Action=$_POST["Action"];

		if($Action=="Send"){
			 echo GiveIT($code);
		}else if($Action=="delete"){
			echo DeleteIT($code);
		}
	}else{
		echo "<h1>You are Not ADMIN</h1>";
	}

?>