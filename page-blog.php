<?php
/**
 * Template Name: Blog
 */

get_header(); 

get_template_part('inc/banner');

?>
<div class="wrapper">
	<div id="primary" class="content-area-full">
		<main id="main" class="site-main" role="main">

			<?php
				$wp_query = new WP_Query();
				$wp_query->query(array(
				'post_type'=>'post',
				'posts_per_page' => 10
			));
				if ($wp_query->have_posts()) : ?>
			    <?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

			    	<article class="blog entry-content">
			    		<h2><?php the_title(); ?></h2>
			    		<div class="excerpt">
			    			<?php the_excerpt(); ?>
			    		</div>
			    		<div class="button">
			    			<a href="<?php the_permalink(); ?>">READ MORE</a>
			    		</div>
			    	</article>

			    <?php endwhile; ?>
			    <?php pagi_posts_nav(); ?>
			<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->
	<?php get_sidebar(); ?>
</div>
<?php
get_footer();
