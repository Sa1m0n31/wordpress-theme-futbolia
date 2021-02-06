<?php get_header('single'); ?>
        <main class="gallery-main-page">
            <h1 class="page-heading" id="archive-heading" >Archive news</h1>
           	<div class="archive-container">
				<?php
				$archiveQuery = new WP_Query(array(
					'post_type' => 'post',
					'posts_per_page' => get_option( 'posts_per_page' )
				));

wp_get_archives('type=yearly');
			
				if($archiveQuery->have_posts()) {
					while($archiveQuery->have_posts()) {
						$archiveQuery->the_post();
						?>
			
						<div class="news-item">
                        <div class="news-img">
                            <?php
							if ( has_post_thumbnail() ) {
        the_post_thumbnail(array( "class"=>"thumbnail"));
    }
		
		?>
                        </div>
                        <div class="news-content">
							<a href='<?php echo get_permalink(); ?>'><h3 class="news-title"><?php the_title(); ?></h3></a>
                            <p class="news-excerpt"><?php 
								echo wp_trim_words(get_the_excerpt(), 15, ' <a class=\'read-more\' href="' . get_permalink() . '">Read more...</a>');
								?></p>
                        </div>
                    </div>
			
						<?php
                  }
				}
			
			?>	
			</div>
        </main>
<?php get_footer(); ?>