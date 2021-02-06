<?php get_header('single'); ?>
        <main class="results-main">
            <h1 class="page-heading"><?php echo get_theme_mod('page_schedule', 'Season schedule'); ?><span id="page-schedule"></span></h1>
            <div class="season-results-container">
                <div class="upcoming-match">
                    <h2 class="upcoming-header"><?php echo get_theme_mod('page_upcoming', 'Upcoming'); ?><span id="page-upcoming"></span></h2>
                    <div class="score-container">
<?php
$today = date('Y-m-d');
$nextMatch = new WP_Query(array(
							'post_type' => "Matches",
							'posts_per_page' => 1,
							'meta_query' => array(array(
								'key' => 'date_and_time',
								'value' => $today,
								'compare' => '>',
								'type' => 'DATE'
							)),
							'orderby' => 'date_and_time',
							'order' => 'ASC'
						));

if($nextMatch->have_posts()) {
  while($nextMatch->have_posts()) {
  	$nextMatch->the_post();
    ?>
    	<div class="score">
                            <div class="team team-a">
                                <img src="<?php echo get_field('host_team_logo'); ?>" alt="team-a-img" />
                                <h3 class="team-name team-a-name"><?php echo get_field('host_team'); ?></h3>
                            </div>
                            <div class="result">
                                <span class="vs">vs</span>
                            </div>
                            <div class="team team-b">
                                <img src="<?php echo get_field('away_team_logo'); ?>" alt="team-b-img" />
                                <h3 class="team-name team-b-name"><?php echo get_field('away_team'); ?></h3>
                            </div>
                        </div>
                        <h3 class="time"><?php echo get_field('date_and_time'); ?></h3>
                        <h3 class="place"><?php echo get_field('place'); ?></h3>
    <?php
 }
}
?>
</div>
                      
                </div>
                <div class="next-matches">
<?php
$today2 = date('Y-m-d');
$nextMatches = new WP_Query(array(
	'post_type' => 'Matches',
	'meta_query' => array(array(
		'key' => 'date_and_time',
		'value' => $today2,
		'compare' => '>',
		'type' => 'DATE'
	)),
	'orderby' => 'date_and_time',
	'order' => 'ASC',
	'offset' => 1
));

if($nextMatches->have_posts()) {
  while($nextMatches->have_posts()) {
  	$nextMatches->the_post(); ?>
    
    <div class="next-match">
                        <div class="score-container">
                            <div class="score">
                                <div class="team team-a">
                                    <img src="<?php echo get_field('host_team_logo'); ?>" alt="team-a-img" />
                                    <h3 class="team-name team-a-name"><?php echo get_field('host_team'); ?></h3>
                                </div>
                                <div class="result">
                                    <span class="vs">vs</span>
                                </div>
                                <div class="team team-b">
                                    <img src="<?php echo get_field('away_team_logo'); ?>" alt="team-b-img" />
                                    <h3 class="team-name team-b-name"><?php echo get_field('away_team'); ?></h3>
                                </div>
                            </div>
                            <h3 class="time"><?php echo get_field('date_and_time'); ?></h3>
                            <h3 class="place"><?php echo get_field('place'); ?></h3>
                        </div>
                    </div>
    
    <?php
  }
}

?>
                   
                </div>
            </div>
        </main>
<?php get_footer(); ?>