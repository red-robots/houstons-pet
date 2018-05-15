<?php
/**
 * Template Name: Services
 *
 * @package ACStarter
 */

get_header(); 

get_template_part('inc/banner');


$wp_query = new WP_Query();
	$wp_query->query(array(
	'post_type'=>'service',
	'posts_per_page' => -1,
	'post__not_in' => array(48)
));
	if ($wp_query->have_posts()) : ?>
		<nav class="services">
			<ul>
				<?php while ($wp_query->have_posts()) : $wp_query->the_post();
				$icon = get_field('icon');
			    $noFont = get_field('no_font_awesome_icon');
			    $sDesc = get_field('short_description'); 
		?>
				<li>
					<a href="<?php the_permalink(); ?>">
					<div class="icon">
						
						<?php if( $icon ) : ?>
							<i class="<?php echo $icon; ?> fa-2x"></i>
						<?php endif; ?>
						<?php if( $noFont ) : ?>
							<img src="<?php echo $noFont['url']; ?>">
						<?php endif; ?>
				
					</div>
					<h3><?php the_title(); ?></h3>
					</a>
				</li>
		
				<?php endwhile; ?>
			</ul>
		</nav>

<?php  endif; 

wp_reset_query(); ?>
<div class="wrapper">
	<div id="primary" class="content-area-full">
		<main id="main" class="site-main" role="main">


		<?php
			while ( have_posts() ) : the_post(); ?>
				<section class="intro entry-content">
					<h1><?php the_title(); ?></h1>
					<?php the_content(); ?>
				</section>
			<?php endwhile; // End of the loop.
			?>

			<section class="page-services  sections">
				
				
				<div class="flexwrap">
				<?php
					$wp_query = new WP_Query();
					$wp_query->query(array(
					'post_type'=>'service',
					'posts_per_page' => -1,
					'post__not_in' => array(48)
				));
					if ($wp_query->have_posts()) : ?>
				    <?php while ($wp_query->have_posts()) : $wp_query->the_post(); 

				    	$icon = get_field('icon');
				    	$noFont = get_field('no_font_awesome_icon');
				    	$sDesc = get_field('short_description');

				    	// echo '<pre>';
				    	// print_r($noFont);
				    	// echo '</pre>';
				    ?>	
					<div class="service">
						<div class="icon">
							<?php if( $icon ) : ?>
								<i class="<?php echo $icon; ?> fa-4x"></i>
							<?php endif; ?>
							<?php if( $noFont ) : ?>
								<img src="<?php echo $noFont['url']; ?>">
							<?php endif; ?>
						</div>
						<h3><?php the_title(); ?></h3>
						<?php echo $sDesc; ?>
						<div class="button">
							<a href="<?php the_permalink(); ?>">
							Learn More
							</a>
						</div>
					</div>

					<?php endwhile; ?>
				<?php endif; ?>
				</div>
				
				</section>

		</main><!-- #main -->
	</div><!-- #primary -->
</div>
<?php
get_footer();
