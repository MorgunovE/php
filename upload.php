<?php
if ($_FILES["image"]["type"] !== "image/jpeg"){
	echo "Files not support";
	die();
}
//print_r($_FILES);

$tmp = $_FILES["image"]["tmp_name"];
$dirSave = "uploads/" . time() . "_" . $_FILES["image"]["name"];
if (!move_uploaded_file($tmp,$dirSave)){
	echo "Files didnt upload";
	die();
} else {
	echo "Files success uploaded <a href='$dirSave'>$dirSave</a>";
}


