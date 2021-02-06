<form role="search" method="get" id="searchform" class="searchform" action="http://futbolia.pl/">
	<div>
		<label class="screen-reader-text" for="s"><?php echo get_theme_mod('search', 'Search'); ?></label>
		<input type="text" value="" name="s" id="s" placeholder="<?php echo get_theme_mod('search', 'Search'); ?>" />
		<span id="search"></span>
		<input type="submit" id="searchsubmit" />
	</div>
</form> 