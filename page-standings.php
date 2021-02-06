<?php get_header('single'); ?>
        <main class="table-main">
            <h1 class="page-heading"><?php echo get_theme_mod('page_standings', 'Season table'); ?><span id="page-standings"></span></h1>
            <div class="season-table-container">
                <table class="season-table">
                    <thead>
                        <tr>
                            <th class="position position-head">Pos</th>
                            <th class="club"></th>
                            <th class="matches">M</th>
                            <th class="wins w-head">W</th>
                            <th class="draws d-head">D</th>
                            <th class="losses l-head">L</th>
                            <th class="gs">GS</th>
                            <th class="gc">GC</th>
                            <th class="plus-minus">+/-</th>
                            <th class="pts pts-header">Pts</th>
                        </tr>
                    </thead>
                    <tbody>
<?php
	$teamsQuery = new WP_Query(array(
		"post_type" => "teams",
		"meta_key" => "team_points",
		"orderby" => "meta_value_num",
		"order" => "DESC"
));
$i = 1;

if($teamsQuery->have_posts()) {
  while($teamsQuery->have_posts()) {
  	$teamsQuery->the_post();
    $teamMatches = get_field('team_losses') + get_field('team_draws') + get_field('team_wins');
    ?>
  		<tr>
                        <td class="position"><p><?php echo $i . '.'; ?></p></td>
                        <td class="club">
                            <img class="club-logo" src="<?php echo get_field('team_logo'); ?>" alt="logo" />
                            <p><?php echo get_field('team_name'); ?></p>
                        </td>
                        <td class="matches"><p><?php echo $teamMatches; ?></p></td>
                        <td class="wins"><p><?php echo get_field('team_wins'); ?></p></td>
                        <td class="draws"><p><?php echo get_field('team_draws'); ?></p></td>
                        <td class="losses"><p><?php echo get_field('team_losses'); ?></p></td>
                        <td class="gs"><p><?php echo get_field('goals_scored'); ?></p></td>
                        <td class="gc"><p><?php echo get_field('goals_conceded'); ?></p></td>
                        <td class="plus-minus"><p><?php echo get_field('goals_scored') - get_field('goals_conceded'); ?></p></td>
                        <td class="pts"><p><?php echo get_field('team_points'); ?></p></td>
                    </tr>  	
    <?php
    $i++;
  }
}


?>
                    </tbody>
                </table>
            </div>
        </main>
<?php get_footer(); ?>