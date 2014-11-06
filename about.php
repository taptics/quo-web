<?php $title = "Quo | About"; require('header.php'); require('classes/post.php'); require('classes/user.php'); ?>
<div id="content">
	<div class="full">
		<div class="title"><h2>About</h2></div>
		<div class="desc"><p>Quo is about the little spurts of inspiration, imagination and creativity that happen whenever, wherever. Whether you’re walking your dog, laying on the beach or out with friends, you can post to Quo whatever’s on your mind — a song lyric, a thought, a rhyme, a quote or anything else that comes to you. Quo is about embracing your creativity in motion.</p></div>
	</div>
	<div class="full">
		
	</div>
	<div class="full">
		
	</div>
</div>
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