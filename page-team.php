<?php get_header('single'); ?>
        <main class="results-main">
            <h1 class="page-heading"><?php echo get_theme_mod('page_team', 'Our team'); ?><span id="page-team"></span></h1>
           	<div class="team-container">
				<div class="team-container-section">
					<h2 class="team-container-section-header">Goalkeepers</h2>
					<div class="team-container-section-main">
						<?php
						$playersQuery = new WP_Query(array(
							'post_type' => 'Players',
							'meta_query' => array(array(
								'key' => 'position',
								'value' => 'Goalkeeper'
							))
						));
					
						if($playersQuery->have_posts()) {
							while($playersQuery->have_posts()) {
								$playersQuery->the_post();
								?>
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
							}
						}
					
					
					?>
					</div>
				</div>
				
				<div class="team-container-section">
					<h2 class="team-container-section-header">Defenders</h2>
										<div class="team-container-section-main">
						<?php
						$playersQuery = new WP_Query(array(
							'post_type' => 'Players',
							'meta_query' => array(array(
								'key' => 'position',
								'value' => 'Defender'
							))
						));
					
						if($playersQuery->have_posts()) {
							while($playersQuery->have_posts()) {
								$playersQuery->the_post();
								?>
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
							}
						}
					
					
					?>
					</div>
				</div>

				<div class="team-container-section">
					<h2 class="team-container-section-header">Midelfielders</h2>
										<div class="team-container-section-main">
						<?php
						$playersQuery = new WP_Query(array(
							'post_type' => 'Players',
							'meta_query' => array(array(
								'key' => 'position',
								'value' => 'Midelfielder'
							))
						));
					
						if($playersQuery->have_posts()) {
							while($playersQuery->have_posts()) {
								$playersQuery->the_post();
								?>
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
							}
						}
					
					
					?>
					</div>
				</div>

				<div class="team-container-section">
					<h2 class="team-container-section-header">Forwards</h2>
										<div class="team-container-section-main">
						<?php
						$playersQuery = new WP_Query(array(
							'post_type' => 'Players',
							'meta_query' => array(array(
								'key' => 'position',
								'value' => 'Forward'
							))
						));
					
						if($playersQuery->have_posts()) {
							while($playersQuery->have_posts()) {
								$playersQuery->the_post();
								?>
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
							}
						}
					
					
					?>
					</div>
				</div>
			</div>
        </main>
<?php get_footer(); ?>