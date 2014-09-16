</div>

	
	<div id="yomamma">
		<div id="squiggle"> </div>
	</div>
	
	<div class="h3container"><h3>Info / Contact</h3></div>
	
	<ul class="menu">
		<?php dynamic_sidebar( 'Info / Contact' ); ?>
	</ul>

	<div class="h3container" ><h3>Book a Table</h3></div>
	<iframe src="https://nz3.eveve.com/tms/DateCovers.php?Est=matterhorn" frameborder="0" style="height:600px;width:400px;">Looks like you're using an older browser. Please call us to book a table.</iframe>

</div> <!-- /leftcolumn -->
	
	
	
	
<div id="rightcolumn">
	<div class="h3container"><h3>Downloadable Menus</h3></div>

	<ul>
		<?php wp_nav_menu( 'Menus' ); ?>
	</ul>

	<div class="h3container"><h3>Twitter</h3></div>
	
	<div id="tweet-box"> 
		<a class="twitter-timeline" href="https://twitter.com/TheMatterhorn" data-widget-id="366678492408061952" data-chrome="nofooter transparent noheader">Tweets by @TheMatterhorn</a>
		<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
	</div>
	
	<a href="http://www.facebook.com/MatterhornSince1963" target="_blank"><div id="facebooklike">Like Us on Facebook</div></a>
</div> <!-- /rightcolumn -->
</div><!-- /columns -->
</div><!-- /container -->
<?php wp_footer(); ?>
</body>
</html>