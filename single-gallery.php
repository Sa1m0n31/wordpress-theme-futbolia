<?php get_header('single'); ?>
	<?php
		if(have_posts()) {
			while(have_posts()) {
				the_post();
				?>
        <main class="article-main gallery-main-container">
            <header class="article-main-header gallery-main-header">
                <h1 class="news-title"><?php echo the_title(); ?></h1>
                <h5 class="news-date"><?php echo the_date(); ?></h5>
            </header>
            <main class="article-main-content gallery-main-content">
                <?php echo the_content(); ?>
            </main>
        </main>




<?php
			}
		}
?>
    </div>
<?php get_footer(); ?>