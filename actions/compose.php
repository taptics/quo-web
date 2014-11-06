<?php
require("../classes/post.php");
if($_COOKIE["id"]){
	if ($title!="" && $text != ""){
		$title = $_POST["title"];
		$text = $_POST["text"];
		$p = new Post;
		$newPost = $p->create($title, $text, $_COOKIE["id"]);
		if($newPost["success"]==1){
			header("Location:../index.php");
		} else {
			echo "Something went horribly wrong. Error message: ".$newPost["error"];
		}
	} else {
		echo "Blank posts are not permitted.";
	}
} else {
	echo "User is not currently logged in.";
}

?>