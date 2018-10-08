<?php

session start();

$user = array(
				"nama" => "Hafshah",
				"username" => "admin",
				"password" => 1245
			);

if ($_POST["username"] == $username["username"]&& $_POST["password"] == $user["password"]){
$_SESSION["username"] = $_POST["username"];
$_SESSION["password"] = $_POST["password"];

header("Location: SignUp.php");

}else{
	echo "Login Gagal";
}



?>