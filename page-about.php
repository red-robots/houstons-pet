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
			
			while ( have_posts() ) : the_post(); 

				$ourStory = get_field('our_story');
				$why = get_field('why_you_need_a_pet_sitter');
				$what = get_field('what_our_clients_say');
				$how = get_field('how_can_we_help_you');


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
					<div class="entry-content">
						<?php echo $ourStory; ?>
					</div>
				</div>
			</section>

			
			<section class="about color2">
				<div class="wrapper">
					<div class="entry-content">
						<?php echo $why; ?>
					</div>
				</div>
			</section>

			
			<section class="about color3">
				<div class="wrapper">
					<div class="entry-content">
						<?php echo $what; ?>
					</div>
				</div>
			</section>

			
			<section class="about color4">
				<div class="wrapper">
					<div class="entry-content">
						<?php echo $how; ?>
					</div>
				</div>
			</section>



			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
