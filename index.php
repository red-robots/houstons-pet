<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ACStarter
 */

get_header(); ?>

	<div id="primary" class="content-area-full">
		<main id="main" class="site-main" role="main">

		<section class="home-services  sections">
		<div class="wrapper">
		<h2>SERVICES</h2>
		<div class="flexwrap">
		<?php
			$wp_query = new WP_Query();
			$wp_query->query(array(
			'post_type'=>'service',
			'posts_per_page' => -1
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
						<i class="<?php echo $icon; ?> fa-5x"></i>
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
		</div>
		</section>

		
		<?php 
		// query homepage
		$post = get_post(51); 
		setup_postdata( $post );

		// section testimonials 
		$title = get_field('title');
		$short_description = get_field('short_description');
		$link = get_field('link');
		$button_text = get_field('button_text');
		$photo = get_field('photo');

		// section Join our team 
		$jtitle = get_field('title_join');
		$jshort_description = get_field('short_description_join');
		$jlink = get_field('link_join');
		$jbutton_text = get_field('button_text_join');
		$jphoto = get_field('photo_join');

		wp_reset_postdata(); 
		
		?>

 
		
		<section class="testimonials sections">
			<div class="left padding">
				<h2><?php echo $title; ?></h2>
				<?php echo $short_description; ?>
				<div class="button">
					<a href="<?php echo $link; ?>"><?php echo $button_text; ?></a>
				</div>
			</div>
			<div class="right">
				<img src="<?php echo $photo['url']; ?>">
			</div>
		</section>

		<section class="join sections">
			<div class="left">
				<img src="<?php echo $jphoto['url']; ?>">
			</div>
			<div class="right padding">
				<h2><?php echo $jtitle; ?></h2>
				<?php echo $jshort_description; ?>
				<div class="button-white">
					<a href="<?php echo $jlink; ?>"><?php echo $jbutton_text; ?></a>
				</div>
			</div>
		</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
