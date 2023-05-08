<?php
$connect = mysqli_connect("localhost","root","","projects");

if(!$connect){
	echo "<script>(alert('No database detected'))</script>";
}
?>

