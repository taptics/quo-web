<?php $title = "Quo | About"; require('header.php'); require('classes/post.php'); require('classes/user.php'); ?>
<div id="content">
	<div class="full">
		<div class="title"><h2>About</h2></div>
		<div class="desc"><p>Quo is about the little spurts of inspiration, imagination and creativity that happen whenever, wherever. Whether you’re walking your dog, laying on the beach or out with friends, you can post to Quo whatever’s on your mind — a song lyric, a thought, a rhyme, a quote or anything else that comes to you. Quo is about embracing your creativity in motion.</p><p>Our team consists of young creatives based in the US working remotely from both the East and the West coast. We're blurring the lines between literature and expression through one platform.</p></div>
	</div>
	<div class="full">
		<div class="title"><h2>Team</h2></div>
		<div class="plate">
			<div class="avatar"></div>
			<div class="name"><p>Ryan Cohen</p><p>iOS Developer</p></div>
		</div>
		<div class="plate">
			<div class="avatar"></div>
			<div class="name"><p>Phil Fishbein</p><p>Back-End Developer</p></div>
		</div>
		<div class="plate">
			<div class="avatar"></div>
			<div class="name"><p>Jack Defuria</p><p>Marketing Coordinator</p></div>
		</div>
		<div class="plate">
			<div class="avatar"></div>
			<div class="name"><p>Jacqueline Angel</p><p>Creative Director &#38; Front-End Developer</p></div>
		</div>
	</div>
</div>
	<footer>
		<ul>
			<li><a href="/press">Press</a></li>
			<li><a href="/">Terms &#38; Conditions</a></li>
			<li><a href="/privacy">Privacy Policy</a></li>
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