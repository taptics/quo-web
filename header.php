<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
	<meta charset ="UTF-8">
	<meta name="viewport" content="width=device-width, initia-scale=1, maximum-scale=1, user-scalable=yes">
	<meta name="description" content="Creativity in motion">
	<meta name="apple-itunes-app" content="app-id=903216219">

	<link rel="shortcut icon" type="favicon.ico" />
	<link rel="stylesheet" type="text/css" href="styles.css">

	<title><?php $title ? echo $title : echo "Quo"; ?></title>
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