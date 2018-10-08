<?php
include_once 'db.php';
if(isset($_GET['nim'])){
	$id = $_GET['nim'];
	$query = "Delete From Mahasiswa Where nim = '$nim'";
	$query_success = mysqli_query($conn,$query);

	if ($query_success){
		header('location: list.php');
	}else{
		die(mysqli_error());
	}
}
?>