<?php
require("../classes/post.php");
if($_COOKIE["id"]){
	$title = $_POST["title"];
	$text = $_POST["text"];
	if ($title && $text){
		$p = new Post;
		$newPost = $p->create($title, $text, $_COOKIE["id"]);
		if($newPost["success"]==1){
			header("Location:../index.php");
		} else {
			echo "Something went horribly wrong. Error message: ";
			print_r($newPost["error"]);
		}
	} else {
		echo "Blank posts are not permitted.";
	}
} else {
	echo "User is not currently logged in.";
}

?>