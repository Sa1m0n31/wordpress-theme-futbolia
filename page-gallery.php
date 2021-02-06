<?php get_header('single'); ?>
        <main class="gallery-main-page">
            <h1 class="page-heading"><?php echo get_theme_mod('page_gallery', 'Gallery'); ?><span id="page-gallery"></span></h1>
           	<div class="gallery-container">
				<?php
				$galleryQuery = new WP_Query(array(
					'post_type' => 'gallery'
				));
			
				if($galleryQuery->have_posts()) {
					while($galleryQuery->have_posts()) {
						$galleryQuery->the_post();
						?>
			
						<div class="gallery-item">
							<a class="gallery-link" href="<?php echo the_permalink(); ?>">
                      		<div class="gallery-overlay"></div>
							<h2><?php echo the_title(); ?></h2>
							<?php the_post_thumbnail('single-post-thumbnail'); ?>
							</a>
						</div>
			
						<?php
					}
				}
			
			?>	
			</div>
        </main>
<?php get_footer(); ?>