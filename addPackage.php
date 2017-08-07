<?php

	session_start();
	!include "phpCode.php";

	if(is_auth()=="yes"){
		$PacName=$_POST["PacName"];
		$PacDuration=$_POST["PacDuration"];
		$PacTrans=$_POST["PacTrans"];
		$PacHotel=$_POST["PacHotel"];
		$PacAmount=$_POST["PacAmount"];
		$mobile=$_POST["mobile"];
		$id=GetLastID()+1;

		if($PacName!="" && $PacDuration!="" && $PacTrans!="" && $PacHotel!="" && $PacAmount!="" && $mobile!=""){
			$target_dir = "Images/";
			$target_file = basename($_FILES["fileToUpload"]["name"]);

			$uploadOk = 1;
			$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
			$target_file=$id.".".$imageFileType;
			$target_file=$target_dir.$target_file;
			if(isset($_POST["submit"])) {
			    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
			    if($check !== false) {
			        $uploadOk = 1;
			    } else {
			        echo "File is not an image.";
			        $uploadOk = 0;
			    }
			}

			if ($_FILES["fileToUpload"]["error"]==1) {
			    echo "Sorry, your file is too large.";
			    $uploadOk = 0;
			}

			if($imageFileType != "jpg" && $imageFileType != "JPG" && $imageFileType != "png" && $imageFileType != "jpeg" ) {
			    echo "Sorry, only JPG, JPEG, PNG  files are allowed.";
			    $uploadOk = 0;
			}

			if ($uploadOk == 0) {
			    echo "Sorry, your file was not uploaded.";
			}else if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)){
				$result=InserIntotable($id,$PacName,$PacDuration,$PacTrans,$PacHotel,$PacAmount,$mobile,$target_file);
				if($result=="OK"){
					echo "Complete";
				}
				else echo $result;
			}
		}
	}
?>