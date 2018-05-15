<?php
/**
 * Template Name: Join Our Team
 */

get_header(); 

get_template_part('inc/banner');

?>
<div class="wrapper">
	<div id="primary" class="content-area-full">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post(); ?>

			<div class="join-left">
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<div class="entry-content">
						<header class="entry-header">
							<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
						</header><!-- .entry-header -->
						<?php the_content(); ?>
					</div><!-- .entry-content -->
				</article><!-- #post-## -->
			</div>

			<div class="join-right">
				<?php the_field('form_side'); ?>
			</div>

				

			<?php endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div>
<?php
get_footer();
