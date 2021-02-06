<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
    <?php
		wp_head();
	
		if(!is_front_page()) {
			?>
			<style>
				.container-inner {
					width: 1500px !important;
				}
			</style>
	<?php
		}
	?>
</head>
<body>
<div class="container">
	<div class="container-inner">
        <header class="header">
			 <header class="header-header">
            <div class="header-logo only-1300">
                <div class="header-logo-background">
                     <?php
                  if(function_exists('the_custom_logo')) {
                      $custom_logo_id = get_theme_mod("custom_logo");
                      $logo = wp_get_attachment_image_src($custom_logo_id);
                  }
				?>
            <img src="<?php echo $logo[0]; ?>" alt="logo" />
                </div>
            </div>
            <menu class="main-menu">
				<img class="front-header-mobile-img below-1300" src="<?php echo $logo[0]; ?>" alt="logo" />
				<h1 class="below-1300 header-mobile club-name"><?php echo bloginfo('name'); ?></h1>
                <ul class="only-1300">
                    <?php
					wp_nav_menu(array(
					'theme_location' => 'primary'
));
?>
                </ul>
				<?php echo get_search_form(true); ?>
                <div class="menu-social-media only-1500">
                    <span id="facebook"><a href="<?php echo get_theme_mod('facebook_link'); ?>" target="_blank">
						<img src="<?php echo bloginfo('template_directory') . '/assets/images/facebook.png'; ?>" alt="facebook" />
					</a></span>
					<span id="instagram"><a href="<?php echo get_theme_mod('instagram_link'); ?>" target="_blank">
						<img src="<?php echo bloginfo('template_directory') . '/assets/images/instagram.png'; ?>" alt="instagram" />
                	</a></span>
				</div>
            </menu>
        </header>