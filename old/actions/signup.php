<?php
if($_COOKIE["id"]){
	echo "Silly goose, you're already logged in.";
} else {
	require("../classes/user.php");
	$user = $_POST["username"];
	$location = $_POST["location"];
	$name = $_POST["name"];
	$password = md5($_POST["password"]);
	if(!$user || !$password || !$name || !$location){
		echo "Please fill out all forms.";
	} else {
		$location = $_POST["location"];
		$name = $_POST["name"];
		$u = new User;
		$register = $u->register($user, $password, $location, $name);
		$auth = $u->authenticate($user, $password);
		if($auth["success"] == 1){
			setcookie("id", $auth["userId"], time() + (86400 * 30), "/");
			header("Location:../index.php");
		} else {
			echo "Something went horribly wrong. Error message: ";
			print_r($auth["error"]);
		}
	}
}
?>