<?php
function getUserName($email){
	include("database.php");
	$request =  "SELECT * FROM users WHERE EMAIL = '$email'";
	$sql = mysqli_query($connect,$request);
	$fetch = mysqli_fetch_array($sql);
	echo $fetch['FULLNAME'];

}

function upload(){
	if (isset($_POST['sub'])){
		$image = $_FILES['img']['name'];
		$tmp = $_FILES['img']['tmp_name'];
		$folder = "upload/".basename($image);
		$move = move_uploaded_file($tmp, $folder);
		if ($move) {
			echo "file uploaded";
		}
		else{
			echo "failed";
		}

	}
}
?>