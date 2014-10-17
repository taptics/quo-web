<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
	<meta charset ="UTF-8">
	<meta name="viewport" content="width=device-width, initia-scale=1, maximum-scale=1, user-scalable=yes">
	<meta name="description" content="Creativity in motion">
	<!--<meta name="apple-itunes-app" content="app-id=903216219, app-argument=myURL">-->
	<meta name="apple-itunes-app" content="app-id=903216219">

	<link rel="shortcut icon" type="favicon.ico" />
	<link rel="stylesheet" type="text/css" href="styles.css">

	<title>Quo</title>
</head>
<body>
	<header>
		<div class="content">
			<div id="logo"><a href="#"><img src="logo.svg" /></a></div>
			<a class="nav-toggle" href="#"><span></span></a>
			<nav class="dropdown">
				<ul class="left">
					<li><a href="/">Get the App</a></li>
					<li><a href="/about">About</a></li>
				</ul>
				<ul class="right">
					<li><a href="login.php">Log in</a></li>
					<li><a href="signup.php">Join the community</a></li>
				</ul>
			</nav>
		</div>
	</header>
	<?php
		require('classes/post.php');
		require('classes/user.php');
		?>
	<div id="banner">
		<h1>Creativity in motion</h1>
	</div>
	<div id="posts">
		<?php
		$post = new Post;
		$posts = $post->getAll();
		foreach ($posts["posts"] as $post) { 
			$lines_arr = preg_split('/\n|\r/',$post["text"]);
			$line = count($lines_arr); 
		?>
			<div class="post"><a href='/post/<?php echo $post["id"]; ?>'><h3><?php echo $post["title"]; ?><span><img src="icon.svg" /><?php echo $line; ?> lines</span><p class="author">Written by <?php if($user["user"]["name"]) { echo $user["user"]["name"]; } else {echo "Unknown"; } ?></p><p class="preview"><?php echo substr($post["text"], 0, 40); echo "...";?></p></h3></a></div>
		<?php
		}
		?>
	</div>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="responsive-nav.js"></script>
</body>
</html>