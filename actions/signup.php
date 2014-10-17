<?php
require("../classes/user.php");
$user = $_POST["username"];
$password = md5($_POST["password"]);
if(!$user || !$password){
	echo "NAH";
} else {
	$location = $_POST["location"];
	$name = $_POST["name"];
	$u = new User;
	$register = $u->register($user, $password, $location, $name);
	$auth = $u->authenticate($user, $password);
	if($auth["success"] == 1){
		session_start();
		$_SESSION["id"] = $auth["userId"];
		header("Location:../index.php");
	} else {
		echo "Nah.";
	}
}

?>