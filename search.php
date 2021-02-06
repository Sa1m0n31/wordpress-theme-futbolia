<?php get_header('single'); ?>

        <section class="search-results">
			<div class="search-section search-posts">
                  <?php
                      $args = array(
                          's' => get_search_query(),
						  'post_type' => 'post'
                      );

                      $postQuery = new WP_Query($args);

                      if($postQuery->have_posts()) { ?>
                        
                        <header class="search-section-header">
                          <h1 class="page-heading">
                              <?php echo get_theme_mod('posts', 'News'); ?>
                          </h1>
                        </header>
                        <main class="search-section-content">
                        
                        <?php
                        while($postQuery->have_posts()) {
                          $postQuery->the_post(); ?>
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
                                <p class="news-excerpt">
                                    <?php 
                                        echo wp_trim_words(get_the_excerpt(), 15, ' <a class=\'read-more\' href="' . get_permalink() . '">Read more...</a>');
                                        ?>
                                </p>
                            </div>
                        </div>
                          <?php
                        } ?>
                        </main>
                        <?php
                      }
                  ?>
			</div>
			<div class="search-section search-players">
                  <?php
                      $args = array(
                          's' => get_search_query(),
                          'post_type' => 'Players'
                      );

                      $postQuery = new WP_Query($args);

                      if($postQuery->have_posts()) { ?>
                        
                        <header class="search-section-header">
                          <h1 class="page-heading">
                              <?php echo get_theme_mod('players', 'Players'); ?>
                          </h1>
                        </header>
                        <main class="search-section-content">
                        <?php
                        while($postQuery->have_posts()) {
                          $postQuery->the_post(); ?>
                          <div class="player">
                              		<a class="player-link" href="<?php echo the_permalink(); ?>">
                                      <div class="player-img">
                                          <img src="<?php echo get_field('player_image'); ?>" alt="player-1" />
                                      </div>
                                      <div class="player-name">
                                          <div class="number"><?php echo get_field('player_number'); ?></div>
                                          <h2 class="name"><?php echo get_field('second_name'); ?></h2>
                                      </div>
                              		</a>
								</div>
                          <?php
                        } ?>
                        </main>
                        <?php
                      }
                  ?>			
			</div>
			<div class="search-section search-matches">
                  <?php
                      $args = array(
                          's' => get_search_query(),
                          'post_type' => 'Matches'
                      );

                      $postQuery = new WP_Query($args);

                      if($postQuery->have_posts()) { ?>
                        
                        <header class="search-section-header">
                          <h1 class="page-heading">
                              <?php echo get_theme_mod('matches', 'Matches'); ?>
                          </h1>
                        </header>
                        <main class="search-section-content">
                        <?php
                        while($postQuery->have_posts()) {
                          $postQuery->the_post(); ?>
                          <div class="last-match">
                          	<div class="score">
                            <div class="team team-a">
                                <img src="<?php echo get_field('host_team_logo'); ?>" alt="team-a-img" />
                                <h3 class="team-name team-a-name"><?php echo get_field('host_team'); ?></h3>
                            </div>
                            <div class="result">
                                <span class="vs"><?php echo get_field('host_score'); ?></span>
    							<span class="vs">:</span>
    							<span class="vs"><?php echo get_field('away_score'); ?></span>
                            </div>
                            <div class="team team-b">
                                <img src="<?php echo get_field('away_team_logo'); ?>" alt="team-b-img" />
                                <h3 class="team-name team-b-name"><?php echo get_field('away_team'); ?></h3>
                            </div>
                          </div>
                          <h3 class="time"><?php echo get_field('date_and_time'); ?></h3>
                          <h3 class="place"><?php echo get_field('place'); ?></h3>
                          </div>
                          <?php
                        } ?>
                        </main>
                        <?php
                      }
                  ?>	
			</div>
			<div class="search-section search-galleries">
                  <?php
                      $args = array(
                          's' => get_search_query(),
                          'post_type' => 'Gallery'
                      );

                      $postQuery = new WP_Query($args);

                      if($postQuery->have_posts()) { ?>
                        
                        <header class="search-section-header">
                          <h1 class="page-heading">
                              <?php echo get_theme_mod('gallery', 'Gallery'); ?>
                          </h1>
                        </header>
                        <main class="search-section-content">
                        <?php
                        while($postQuery->have_posts()) {
                          $postQuery->the_post(); ?>
                                <div class="gallery-item">
                                  <a class="gallery-link" href="<?php echo the_permalink(); ?>">
                                  <div class="gallery-overlay"></div>
                                  <h2><?php echo the_title(); ?></h2>
                                  <?php the_post_thumbnail('single-post-thumbnail'); ?>
                                  </a>
                              	</div>
                          <?php
                        } ?>
                        </main>
                        <?php
                      }
                  ?>	
			</div>
</section>
<?php get_footer(); ?>