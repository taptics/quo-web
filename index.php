<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
	<meta charset ="UTF-8">
	<meta name="viewport" content="width=device-width, initia-scale=1, maximum-scale=1, user-scalable=yes">
	<meta name="description" content="Creativity in motion">
	<meta name="apple-itunes-app" content="app-id=903216219">

	<link rel="shortcut icon" type="favicon.ico" />
	<link rel="stylesheet" type="text/css" href="styles.css">

	<title>Quo</title>
</head>
<body>
	<header>
		<div class="content">
			<div id="logo"><a href="#"><img src="web-logo.svg" /></a></div>
			<a class="nav-toggle" href="#"><span></span></a>
			<nav class="dropdown">
				<ul class="left">
					<li><a href="/">Get the App</a></li>
					<li><a href="/about">About</a></li>
				</ul>

				<ul class="right">
					<?php if(!$_COOKIE["id"]) { ?>
						<li><a href="login.php">Login</a></li>
						<li><a href="signup.php">Register</a></li>
					<?php } ?>
				</ul>
			</nav>
		</div>
	</header>
	<?php
		require('classes/post.php');
		require('classes/user.php');
		?>
	<div id="compose">
		<h1>Start Writing</h1>
		<form action="actions/compose.php" method="POST">
			<input type="text" name="title" placeholder="Title" autofocus><br />
			<textarea id="expand" name="text" placeholder="Your words"></textarea>
		</form>
	</div>
	<div id="posts">
		<?php
		$post = new Post;
		$posts = $post->getAll();
		foreach ($posts["posts"] as $post) { 
			$lines_arr = preg_split('/\n|\r/',$post["text"]);
			$line = count($lines_arr); 
			$users = new User;
			$user = $users->get($post["userId"]);
		?>
			<div class="post"><a href='/post/<?php echo $post["id"]; ?>'><h3><?php echo $post["title"]; ?><span><img src="icon.svg" /><?php echo $line; ?> lines</span><p class="author">Written by <?php if($user["user"]["name"]) { echo $user["user"]["name"]; } else {echo "Unknown"; } ?></p><p class="preview"><?php echo substr($post["text"], 0, 40); echo "...";?></p></h3></a></div>
		<?php
		}
		?>
	<footer>
		<ul>
			<li><a href="/">Press</a></li>
			<li><a href="/">Terms &#38; Conditions</a></li>
			<li><a href="/">Privacy Policy</a></li>
		</ul>
	</footer>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="responsive-nav.js"></script>
	<script type="text/javascript">
	$(document).ready(function() {
	    $('#expand').keyup(function() {
	       var txtheight = $(this).scrollTop();
	       $(this).css('height',($(this).height() + txtheight) + 'px')
	    });
	    $('#expand').keyup();
	});
	</script>
</body>
</html>