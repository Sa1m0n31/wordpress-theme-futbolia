<?php get_header('single'); ?>
	<?php
if(have_posts()) {
  while(have_posts()) {
  	the_post();
   	?>
    
    <main class="player-main">
            <div class="first-row">
                <img src="<?php echo get_field('player_image'); ?>" alt="player-img" />
                <div class="player-main-stats">
                    <img class="stats-background" src="<?php echo bloginfo('template_directory') . '/assets/images/stats-tlo.png'; ?>" alt="background" />
                    <div class="main-stat">
                        <div class="main-stat-number">
                            <?php echo get_field('games_played'); ?>
                        </div>
                        <div class="main-stat-caption">
                            <?php echo get_theme_mod('single_games_played', 'Games played'); ?>
    						<span id="single-games-played"></span>
                        </div>
                    </div>
                    <div class="main-stat">
                        <div class="main-stat-number">
                            <?php echo get_field('minutes_played'); ?>
                        </div>
                        <div class="main-stat-caption">
                            <?php echo get_theme_mod('single_minutes_played', 'Minutes'); ?>
    						<span id="single-minutes-played"></span>
                        </div>
                    </div>
                    <div class="main-stat">
                        <div class="main-stat-number">
                            <?php echo get_field('starts'); ?>
                        </div>
                        <div class="main-stat-caption">
                            <?php echo get_theme_mod('single_starts', 'Starts'); ?>
    						<span id="single-starts"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="next-rows">
                <div class="player-stat">
                    <div class="player-stat-left"><?php echo get_theme_mod('single_full_name', 'Full name'); ?><span id="single-full-name"></span></div>
                    <div class="player-stat-right"><?php echo get_field('first_name') . ' ' . get_field('second_name'); ?></div>
                </div>
                <div class="player-stat">
                    <div class="player-stat-left"><?php echo get_theme_mod('single_position', 'Position'); ?><span id="single-position"></span></div>
                    <div class="player-stat-right"><?php echo get_field('position'); ?></div>
                </div>
                <div class="player-stat">
                    <div class="player-stat-left"><?php echo get_theme_mod('single_date_of_birth', 'Date of birth'); ?><span id="single-date-of-birth"></span></div>
                    <div class="player-stat-right"><?php echo get_field('birthdate'); ?></div>
                </div>
                <div class="player-stat">
                    <div class="player-stat-left"><?php echo get_theme_mod('single_weight_and_height', 'Weight / Height'); ?><span id="single-weight-and-height"></span></div>
                    <div class="player-stat-right"><?php echo get_field('weight'); ?> kg / <?php echo get_field('height'); ?> cm</div>
                </div>
                <div class="player-stat">
                    <div class="player-stat-left"><?php echo get_theme_mod('single_in_team_since', 'In team since'); ?><span id="single-in-team-since"></span></div>
                    <div class="player-stat-right"><?php echo get_field('in_team_since'); ?></div>
                </div>
            </div>
            <div class="white-stats">
                <div class="white-stat">
                    <img src="<?php echo bloginfo('template_directory') . '/assets/images/goals.png'; ?>" alt="goals" />
                    <div class="white-stat-number"><?php echo get_field('goals'); ?></div>
                    <div class="white-stat-caption"><?php echo get_theme_mod('single_goals', 'Goals'); ?><span id="single-goals"></span></div>
                </div>
                <div class="white-stat">
                    <img src="<?php echo bloginfo('template_directory') . '/assets/images/assists.png'; ?>" alt="assist" />
                    <div class="white-stat-number"><?php echo get_field('assists'); ?></div>
                    <div class="white-stat-caption"><?php echo get_theme_mod('single_assists', 'Assists'); ?><span id="single-assists"></span></div>
                </div>
                <div class="white-stat">
                    <div class="card yellow-card"></div>
                    <div class="white-stat-number"><?php echo get_field('yellow_cards'); ?></div>
                    <div class="white-stat-caption"><?php echo get_theme_mod('single_yellow_cards', 'Yellow cards'); ?><span id="single-yellow-cards"></span></div>
                </div>
                <div class="white-stat">
                    <div class="card red-card"></div>
                    <div class="white-stat-number"><?php echo get_field('red_cards'); ?></div>
                    <div class="white-stat-caption"><?php echo get_theme_mod('single_red_cards', 'Red cards'); ?><span id="single-red-cards"></span></div>
                </div>
            </div>
        </main>
    
    <?php
  }
}


?>
    </div>
<?php get_footer(); ?>