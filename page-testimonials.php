<?php
/**
 * Template Name: Testimonials
 */

get_header(); 

get_template_part('inc/banner');

?>
<div class="wrapper">
	<div id="primary" class="content-area-full">
		<main id="main" class="site-main" role="main">
		<div class="entry-content">
			<h1><?php the_title(); ?></h1>
		</div>
			<?php
				$wp_query = new WP_Query();
				$wp_query->query(array(
				'post_type'=>'testimonial',
				'posts_per_page' => -1
			));
				if ($wp_query->have_posts()) : ?>
				<section class="testi">
					
				
			    <?php while ($wp_query->have_posts()) : ?>
			        
			    <?php $wp_query->the_post(); ?>	

			    <div class="testimonial">
			    	<h2><?php the_title(); ?></h2>
			    	<?php the_content(); ?>
			    </div>	

				<?php endwhile; ?>
					</section>
			<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div>
<?php
get_footer();
