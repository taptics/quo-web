<?php
require('classes/user.php');
$u = new User;
$currentUser = $u->get($_SESSION["id"]);
if($currentUser["success"]){
	echo "Hey there, ".$currentUser["user"]["name"].".";
}
?>

<a href="compose.php">Compose</a>
 | 
<a href="login.php">Login</a> | 
<a href="signup.php">Signup</a>