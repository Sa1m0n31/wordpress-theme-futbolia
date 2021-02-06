<?php get_header('single'); ?>
	<?php
		if(have_posts()) {
			while(have_posts()) {
				the_post();
				?>
        <main class="article-main">
            <header class="article-main-header">
                <img class="news-img" src="<?php echo get_field("big_image"); ?>" alt="news-img" />
                <h1 class="news-title"><?php echo the_title(); ?></h1>
                <h5 class="news-date"><?php echo the_date(); ?></h5>
            </header>
            <main class="article-main-content news-main-content">
                <?php echo the_content(); ?>
            </main>
        </main>
        <section class="comments-section">
        	<?php if (comments_open()){
    comments_template();
} ?>
        </section>




<?php
			}
		}
?>
<?php get_footer(); ?>