<?php get_header(); ?>
        <div class="news news-1 news-active">
            <img class="news-img" src="<?php echo get_theme_mod('landing_page'); ?>" alt="news-alt-text" />
			<span id="landing-page"></span>
            <div class="title-section">
                <h1 class="title" id="team-slogan"><?php echo get_theme_mod('team_slogan', 'Your team slogan'); ?>
					<span id="title-section"></span>
				</h1>
            </div>
			<div class="header-900">
				<menu class="mobile-landing-menu">
					<ul>
						<?php
							wp_nav_menu(array(
								'theme_location' => 'mobile'
));
						?>
					</ul>
				</menu>
			</div>
        </div>
</header>
    <main class="main-section">
        <section class="previous-news">
            <div class="news-section"><!--WP LOOP-->
                <h2><?php echo get_theme_mod('previous_news', 'Previous news'); ?><span id="previous-news"></span></h2>
                <div class="news-container">
                   	<?php 
					$query = new WP_Query( array(
    'post_type'      => 'post', 
    'posts_per_page' => 2, 
    'no_found_rows'  => true,
	//'category_name' => 'news'
) );
					
					
					if($query->have_posts()) {
	while($query->have_posts()) {
		$query->the_post();
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
								echo wp_trim_words(get_the_excerpt(), 15, ' <a class=\'read-more\' href="' . get_permalink() . '">' . get_theme_mod('read_more', 'Read more') . '<span id="read-more"></span></a>');
								?></p>
                        </div>
                    </div>
					
					
					<?php
		$query->the_excerpt();
 } // end while
} // end if 
					wp_reset_postdata();
					?>

                </div>
            </div>
            <div class="table">
                <h2><?php echo get_theme_mod('table', 'Table'); ?><span id="table"></span></h2>
                <table>
                    <thead>
                        <tr>
                            <td></td>
                            <td class="club-img"></td>
                            <td class="club-name"></td>
                            <td>M</td>
                            <td>W</td>
                            <td>D</td>
                            <td>L</td>
                            <td>P</td>
                        </tr>
                    </thead>
                    <tbody>
						<?php
						$lp = 1;
						$tableQuery = new WP_Query(array(
							'post_type' => 'teams',
							'meta_key' => 'team_points',
							'orderby' => 'meta_value_num',
							'order' => 'DESC',
'suppress_filters' => true
						));
						
						if($tableQuery->have_posts()) {
							while($tableQuery->have_posts()) {
								$tableQuery->the_post();
								?>
						<tr>
                            <td><?php echo $lp; ?></td>
                            <td class="club-img"><img src="<?php echo get_field('team_logo'); ?>" alt="club-1"/></td>
                            <td class="club-name"><?php echo get_field('team_name'); ?></td>
                            <td><?php echo get_field('team_wins') + get_field('team_draws') + get_field('team_losses'); ?></td>
                            <td><?php echo get_field('team_wins'); ?></td>
                            <td><?php echo get_field('team_draws'); ?></td>
                            <td><?php echo get_field('team_losses'); ?></td>
                            <td><?php echo get_field('team_points'); ?></td>
                        </tr>
						
						
						<?php
								$lp++;
							}
						}
						?>
                    </tbody>
                </table>
            </div>
        </section>
		<!-- MATCHES SECTION -->
        <section class="matches">
			<?php
				$today = date('Y-m-d');
				$lastMatchQuery = new WP_Query(array(
							'post_type' => 'Matches',
							'posts_per_page' => 1,
							'no_found_rows' => true,
							'meta_key' => 'date_and_time',
							'orderby' => 'meta_value',
							'order' => 'DESC',
							'meta_query' => array(
								array(
									'key' => 'date_and_time',
									'value' => $today,
									'compare' => '<',
									'type' => 'DATE'
								)
							)
						));
			
				if($lastMatchQuery->have_posts()) {
					while($lastMatchQuery->have_posts()) {
						$lastMatchQuery->the_post();
						?>
						<div class="last-match">
							<h2><?php echo get_theme_mod('last_match', 'Last match'); ?><span id="last-match"></span></h2>
							<div class="score">
								<div class="team team-a">
									<img src="<?php echo get_field('host_team_logo'); ?>" alt="team-a-img" />
								</div>
								<div class="result">
									<span class="team-a-score"><?php echo get_field('host_score'); ?></span>:<span class="team-b-score"><?php echo get_field('away_score'); ?></span>
								</div>
								<div class="team team-b">
									<img src="<?php echo get_field('away_team_logo'); ?>" alt="team-b-img" />
								</div>
							</div>
							<h3 class="place"><?php echo get_field('date_and_time'); ?></h3>
							<button class="more-btn"><?php echo get_theme_mod('review', 'More'); ?><span id="review"></span></button>
            			</div>
			
			<?php
					}
				}
			?>

            <div class="upcoming-matches">
                <h2><?php echo get_theme_mod('upcoming', 'Upcoming'); ?><span id="upcoming"></span></h2>
                <div class="upcoming-matches-container">
					
					<?php
						$matchesQuery = new WP_Query(array(
							'post_type' => 'Matches',
							'posts_per_page' => 1,
							'no_found_rows' => true,
							'meta_query' => array(
								array(
									'key' => 'date_and_time',
									'value' => $today,
									'compare' => '>',
									'type' => 'DATE'
								)
							),
							'meta_key' => 'date_and_time',
							'orderby' => 'meta_value',
							'order' => 'ASC'
						));
				
					
						if($matchesQuery->have_posts()) {
							while($matchesQuery->have_posts()) {
								$matchesQuery->the_post();
								?>
								<div class="upcoming-match closest-match">
									<div class="score">
										<div class="team team-a">
											<img src="<?php echo get_field('host_team_logo'); ?>" alt="team-a-img" />
										</div>
										<div class="result">
											v
										</div>
										<div class="team team-b">
											<img src="<?php echo get_field('away_team_logo'); ?>" alt="team-b-img" />
										</div>
									</div>
									<h3 class="place"><?php echo get_field('date_and_time'); ?></h3>
									<a href="<?php echo get_field('article_link'); ?>"><button class="more-btn"><?php echo get_theme_mod('preview', 'Preview'); ?><span id="preview"></span></button></a>
                    			</div>
					
					
					<?php
							}
						}
					?>
					
					<img class="previous-match next" src="<?php echo bloginfo('template_directory') . '/assets/images/previous.png'; ?>" alt="next" />
                    <div class="upcoming-matches-scroll">
						<?php
							$matchesScrollQuery = new WP_Query(array(
								'post_type' => 'Matches',
								'meta_key' => 'date_and_time',
								'orderby' => 'meta_value',
								'order' => 'ASC',
								'meta_query' => array(array(
									'key' => 'date_and_time',
									'value' => $today,
									'compare' => '>='
								)),
								'offset' => 1
							));
						
							if($matchesScrollQuery->have_posts()) {
								while($matchesScrollQuery->have_posts()) {
									$matchesScrollQuery->the_post();
									?>
									<div class="upcoming-match">
										<div class="score">
											<div class="team team-a">
												<img src="<?php echo get_field('host_team_logo'); ?>" alt="team-a-img" />
											</div>
											<div class="result">
												v
											</div>
											<div class="team team-b">
												<img src="<?php echo get_field('away_team_logo'); ?>" alt="team-b-img" />
											</div>
										</div>
										<h3 class="place"><?php echo get_field('date_and_time'); ?></h3>
                        			</div>
						
						<?php
								}
							}
						
						
						?>
                    </div>
                    <img class="next-match next" src="<?php echo bloginfo('template_directory') . '/assets/images/previous.png'; ?>" alt="next" />
					
					
                </div>
				
            
            </div>
        </section>
        <section class="team">
            <header class="team-header">
                <h1><?php echo get_theme_mod('meet_our_team', 'Meet our team'); ?><span id="meet-our-team"></span></h1>
            </header>
            <main class="team-slider">
                <div class="team-slider-arrow team-slider-previous">
                    <img src="<?php echo bloginfo('template_directory') . '/assets/images/previous.png'; ?>" alt="previous" />
                </div>
                <div class="team-slider-container">
                    <?php
						$playersQuery = new WP_Query(array(
							'post_type' => 'Players',
							'posts_per_page' => 50
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
                <div class="team-slider-arrow team-slider-next">
                    <img src="<?php echo bloginfo('template_directory') . '/assets/images/next.png'; ?>" alt="next" />
                </div>
            </main>
        </section>
        <!-- TEAM STATS SECTION -->
        <section class="stats">
            <header class="stats-header">
                <h1><?php echo get_theme_mod('season_stats_label', 'Season stats'); ?><span id="season-stats-label"></span></h1>
            </header>
            <main class="stats-main">
                <div class="stat">
                    <div class="icon">
                        <img src="<?php echo bloginfo('template_directory') . '/assets/images/pitch.png'; ?>" alt="games-played" />
                    </div>
                    <div class="number games-played-number">
						<?php echo get_theme_mod('games_played', '10'); ?>
					</div>
                    <h3 class="stat-title"><?php echo get_theme_mod('games_played_label', 'Games played'); ?><span id="games-played-label"></span></h3>
                </div>

                <div class="stat">
                    <div class="icon">
                        <img src="<?php echo bloginfo('template_directory') . '/assets/images/pileczka.png'; ?>" alt="goals-scored" />
                    </div>
                    <div class="number goals-scored-number">
						<?php echo get_theme_mod('goals_scored', '10'); ?>
					</div>
                    <h3 class="stat-title"><?php echo get_theme_mod('goals_scored_label', 'Goals scored'); ?><span id="goals-scored-label"></span></h3>
                </div>

                <div class="stat">
                    <div class="icon">
                        <img src="<?php echo bloginfo('template_directory') . '/assets/images/exit.png'; ?>" alt="goals-conceded" />
                    </div>
                    <div class="number goals-conceded-number">
						<?php echo get_theme_mod('goals_conceded', '10'); ?>
					</div>
                    <h3 class="stat-title"><?php echo get_theme_mod('goals_conceded_label', 'Goals conceded'); ?><span id="goals-conceded-label"></span></h3>
                </div>

                <div class="stat">
                    <div class="icon">
                        <img src="<?php echo bloginfo('template_directory') . '/assets/images/punkt.png'; ?>" alt="points" />
                    </div>
                    <div class="number points-number">
						<?php echo get_theme_mod('points', '10'); ?>
					</div>
                    <h3 class="stat-title"><?php echo get_theme_mod('points_label', 'Points'); ?><span id="points-label"></span></h3>
                </div>
            </main>
        </section>
        <!-- PLAYERS STATS SECTION -->
        <section class="players-stats">
            <header class="players-stats-header">
                <h1><?php echo get_theme_mod('players_stats', 'Players stats'); ?><span id="players-stats"></span></h1>
                <h2><?php echo get_theme_mod('players_stats_subheader', 'Best of'); ?><span id="players-stats-subheader"></span></h2>
            </header>
            <main class="players-stats-main">
                <label for="position">
                    <select id="position" class="position-select" name="<?php echo site_url() ?>/wp-admin/admin-ajax.php">
                        <option name="goalkeepers"><?php echo get_theme_mod('goalkeepers', 'Goalkeepers'); ?><span id="goalkeepers"></span></option>
                        <option name="defenders"><?php echo get_theme_mod('defenders', 'Defenders'); ?><span id="defenders"></span></option>
                        <option name="midfielders"><?php echo get_theme_mod('midfielders', 'Midfielders'); ?><span id="midfielders"></span></option>
                        <option name="forwards"><?php echo get_theme_mod('forwards', 'Forwards'); ?><span id="forwards"></span></option>
                    </select>
                </label>

                <table class="players-table">
                    <thead>
                        <tr>
                            <th><?php echo get_theme_mod('stats_player_name', 'Player name'); ?><span id="stats-player-name"></span></th>
                            <th><?php echo get_theme_mod('stats_games_played', 'Matches'); ?><span id="stats-games-played"></span></th>
                            <th class="only-900"><?php echo get_theme_mod('stats_assists', 'Assists'); ?><span id="stats-assists"></span></th>
                            <th><?php echo get_theme_mod('stats_goals', 'Goals'); ?><span id="stats-goals"></span></th>
                        </tr>
                    </thead>
                    <tbody class="players-table-insert">
                   
                    </tbody>
                </table>
            </main>
            <section class="players-stats-buttons">
                <button class="full-squad"><a href="<?php echo get_permalink( get_page_by_path( 'team' ) ); ?>">
                	<?php echo get_theme_mod('view_full_squad', 'View full squad'); ?><span id="view-full-squad"></span>
                </a></button>
            </section>
        </section>
		<section class="gallery-section">
            <header class="gallery-header">
                <h1><?php echo get_theme_mod('gallery', 'Gallery'); ?><span id="gallery"></span></h1>
            </header>
			<main class="gallery-main">
			<?php
				$galleryQuery = new WP_Query(array(
					'post_type' => 'gallery',
					'posts_per_page' => 3
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
			</main>
        </section>
    </main>
<?php get_footer(); ?>