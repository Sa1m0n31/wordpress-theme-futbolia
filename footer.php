<footer class="footer">
        <div class="footer-center">
            <?php
				if(function_exists('the_custom_logo')) {
					$logo_id = get_theme_mod('custom_logo');
					$logo = wp_get_attachment_image_src($logo_id);
				}
			?>
			<img src="<?php echo $logo[0]; ?>" alt="logo12" />
            <h2><?php echo bloginfo('title'); ?></h2>
        </div>
        <div class="footer-bottom">
            <ul class="footer-bottom-up">
               <?php
				wp_nav_menu(array(
				'menu' => 'footer'
));
?>
            </ul>
            <div class="footer-bottom-down">
                <?php echo get_theme_mod('copyright_label', '&copy; All rights reserved. Designed and created by Skylo.pl'); ?><span id="copyright-label"></span>
            </div>
        </div>
    </footer>
</div>
<?php
	wp_footer();
?>
</body>
</html>