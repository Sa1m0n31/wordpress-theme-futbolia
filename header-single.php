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
					width: 100vw;
				}
			</style>
	<?php
		}
	?>
</head>
<body>
<div class="container">
	<div class="container-inner">
        <header class="page-header">
			 <?php
                  if(function_exists('the_custom_logo')) {
                      $custom_logo_id = get_theme_mod("custom_logo");
                      $logo = wp_get_attachment_image_src($custom_logo_id);
                  }
				?>
            <a class="header-home-url" href="<?php echo get_bloginfo('url'); ?>">
				<img src="<?php echo $logo[0]; ?>" alt="logo" />
				<h1 class="header-mobile club-name"><?php echo get_bloginfo('name'); ?></h1> 
            </a>
			<menu class="page-menu header-desktop">
                <ul>
					<?php
						wp_nav_menu(array(
							'menu' => 'primary'
						));
					?>
                </ul>
            </menu>
        </header>