<?php
session_start();
require("../classes/post.php");
$title = $_POST["title"];
$text = $_POST["text"];
$p = new Post;
$newPost = $p->create($title, $text, $_SESSION["id"]);
if($newPost["success"]==1){
	header("Location:../index.php");
} else {
	echo "Nah";
}

?>