<?php 
$target_dir="uploads/";
$target_file=$target_dir .basename($_FILES["filetoupload"]["name"]);

if (isset($_POST["submit"])) {
	if (move_uploaded_file($_FILES["filetoupload"]["tmp_name"], $target_file)) {
		echo "MY FILE NAME IS" .basename($_FILES["filetoupload"]["name"]);
	
	}
	else{echo "file not uploaded";}
}


 ?>