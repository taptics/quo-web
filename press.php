<?php $title = "Quo | Press"; require('header.php'); require('classes/post.php'); require('classes/user.php'); ?>
<div id="content">
	<div class="full">
		<div class="title"><h2>Press</h2></div>
		<div class="desc"><p>Contact <a href="mailto:press@quoapp.co">press@quoapp.co</a> for any inquiries. We've put together a folder loaded with our brand assets just for you.</p></div>
		<div id="button"><a class="btn" target="_blank" href="">Download Press Kit</a></div>
	</div>
	<div class="full">
		<div class="title"><h2>Guidelines</h2></div>
		<div class="img"><img src=""></div>
		<div class="img"><img src=""></div>
		<div class="img"><img src=""></div>
		<div class="img"><img src=""></div>
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