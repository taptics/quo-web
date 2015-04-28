<?php
if($_COOKIE["id"]){
	echo "Silly goose, you're already logged in.";
} else {
	require("../classes/user.php");
	$user = $_POST["username"];
	$password = md5($_POST["password"]);
	if(!$user || !$password){
		echo "Please enter both a username and a password.";
	} else {
		$u = new User;
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