<meta name="apple-itunes-app" content="app-id=903216219, app-argument=quo://post?id=<?php echo $_GET['id'];?>">
<meta charset="UTF-8">
<?php
require('classes/post.php');
require('classes/user.php');
$id = $_GET["id"];
$post = new Post;
$user = new User;
$p = $post->get($id);
$u = $user->get($p["post"]["userId"]);

?>

<h2><?php echo $p["post"]["title"]; ?></h2>
<small><?php echo $u["user"]["name"]; ?></small>
<p><?php echo preg_replace("/\r\n|\r|\n/",'<br/>',$p["post"]["text"]); ?></p>