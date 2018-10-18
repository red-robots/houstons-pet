<?php
/**
 * Template Name: About
 */

get_header(); 

get_template_part('inc/banner');

?>

	<div id="primary" class="content-area-full">
		<main id="main" class="site-main" role="main">

			<?php

			$wp_query = new WP_Query();
			$wp_query->query(array(
				'post_type'=>'testimonial',
				'posts_per_page' => 1,
				'orderby' => 'rand',
			));
			if ($wp_query->have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post();

				$title = get_the_title();
				$content = get_the_content();

			endwhile; endif; wp_reset_query();
			
			while ( have_posts() ) : the_post(); 

				$ourStory = get_field('our_story');
				$iStory = get_field('image_story');
				$why = get_field('why_you_need_a_pet_sitter');
				$iwhy = get_field('image_why');
				$what = get_field('what_our_clients_say');
				$iwhat = get_field('image_what');
				$how = get_field('how_can_we_help_you');
				$ihow = get_field('image_how');

				// echo '<pre>';
				// print_r($iStory);
				// echo '</pre>';


			?>
			<div class="wrapper">	
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<div class="entry-content">
						<header class="entry-header">
							<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
						</header><!-- .entry-header -->
						<?php the_content(); ?>
					</div><!-- .entry-content -->
					
				</article><!-- #post-## -->
			</div>
			
			<section class="about color1">
				<div class="wrapper">
					<div class="entry-content left">
						<?php echo $ourStory; ?>
					</div>
					<div class="image right">
						<img src="<?php echo $iStory['url']; ?>">
					</div>
				</div>
			</section>

			
			<section class="about color2">
				<div class="wrapper">
					<div class="image left">
						<img src="<?php echo $iwhy['url']; ?>">
					</div>
					<div class="entry-content right">
						<?php echo $why; ?>
					</div>
				</div>
			</section>

			
			<section class="about color3">
				<div class="wrapper">
					<div class="entry-content left">
						<?php echo $what; ?>
						<div class="small-testi">
							<h3><?php echo $title; ?></h3>
							<?php echo $content; ?>
						</div>
					</div>
					<div class="image right">
						<img src="<?php echo $iwhat['url']; ?>">
					</div>
				</div>
			</section>

			
			<section class="about color4">
				<div class="wrapper">
					<div class="image left">
						<img src="<?php echo $ihow['url']; ?>">
					</div>
					<div class="entry-content right">
						<?php echo $how; ?>
					</div>
				</div>
			</section>



			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
