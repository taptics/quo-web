<?php
require('classes/post.php');
require('classes/user.php');
$user = new User;
$post = new Post;
$posts = $post->getAll();
foreach ($posts["posts"] as $post) {
    $u = $user->get($post["userId"]);
    echo "<a href='post.php?id=".$post["id"]."'><h3>".$post["title"]." by ".$u["user"]["name"]."</a></h3><br />";
}
?>