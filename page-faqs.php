<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ACStarter
 */

get_header(); 

get_template_part('inc/banner');

?>
<div class="wrapper">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post(); ?>

			<div class="entry-content">
				<h1><?php the_title(); ?></h1>

				<?php /*
				     ------------------------------------
				        FAQ's
				   ------------------------------------*/ ?>
				 <?php if( have_rows('questions_&_answers') ): ?>
				     <?php while ( have_rows('questions_&_answers') ) : ?>
				         <?php the_row(); ?>
				                    
				            <div class="faqrow">
				               <div class="question"><div class="question-image"></div><?php the_sub_field('question'); ?></div>
				               <div class="answer"><?php the_sub_field('answer'); ?></div>
				            </div><!-- faqrow -->
				<?php endwhile; endif; // end faq's ?>
			</div>

			<?php endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->
	<?php get_sidebar('cta'); ?>
</div>
<?php

get_footer();
