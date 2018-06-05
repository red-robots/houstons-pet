<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ACStarter
 */

get_header(); ?>
<div class="wrapper">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post(); ?>

				<article class="blog entry-content">
		    		<h2><?php the_title(); ?></h2>
		    		<?php if ( has_post_thumbnail() ) { ?>
							<div class="featuredimage">
								<?php the_post_thumbnail(); ?>
							</div>
						<?php }  ?>
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
