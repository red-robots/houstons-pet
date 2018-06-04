<?php
/**
 * Template Name: Form
 *
 * @package ACStarter
 */

get_header(); 

get_template_part('inc/banner');

?>

<div id="primary" class="content-area-full">
	<main id="main" class="site-main" role="main">
		<div class="wrapper">
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<div class="entry-content">
					<header class="entry-header">
						<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
					</header><!-- .entry-header -->
					<?php the_content(); ?>
				</div><!-- .entry-content -->
				<?php get_template_part('inc/form'); ?>
			</article><!-- #post-## -->
		</div>
	</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();



