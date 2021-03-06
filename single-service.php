<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package ACStarter
 */

get_header(); 

$cLogin =get_field('login_link', 'option');
$cSignup =get_field('new_client_link', 'option');

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
			
			 ?>
		    <?php 

		    	

		    	// echo '<pre>';
		    	// print_r($noFont);
		    	// echo '</pre>';
		    ?>

		<?php 
		
		// query the actual page
		while ( have_posts() ) : the_post();

			$icon = get_field('icon');
			$noFont = get_field('no_font_awesome_icon');
			$lDesc = get_field('long_description');
			$disclaimers = get_field('disclaimers');
		?>

		<div class="service-content">
			<div class="entry-content">
				<h1><?php the_title(); ?></h1>
				<?php echo $lDesc; ?>
			</div>
			<!-- <div class="button-wrapper">
				<div class="button">
					<a href="<?php echo $cLogin; ?>">CLIENT LOGIN</a>
				</div>
				<div class="button">
					<a href="<?php echo $cSignup; ?>">CREATE NEW ACCOUNT</a>
				</div>
			</div> -->
		</div>

		<div class="rates">
			<h2>RATES</h2>
			<div class="rate-box">
				<?php 
				$i = 0;
				
				if(have_rows('rates')) : while(have_rows('rates')) : the_row(); 
					$i++;
					$desc = get_sub_field('description');
					$price = get_sub_field('price');
					if( $i == 2 ) {
						$class = 'second';
						$i = 0;
					} else {
						$class = 'first';
					}
				?>
					<div class="row <?php echo $class; ?>">
						<div class="desc"><?php echo $desc; ?></div>
						<div class="price"><?php echo $price; ?></div>
					</div>
				
			<?php endwhile;?>
				<div class="disclaimer">
					<?php echo $disclaimers; ?>
				</div>
			<?php endif; ?>
			</div>
			<div class="button-wrapper">
				<div class="button">
					<a href="<?php echo $cLogin; ?>" target="_blank">CLIENT LOGIN</a>
				</div>
				<div class="button">
					<a href="<?php echo $cSignup; ?>">CREATE NEW ACCOUNT</a>
				</div>
			</div>
			<?php endwhile; // End of the loop. ?>
			<section class="inhome">
			<div class="first-time">
				<h2><span>First Time? Please Read Below!</span></h2>
			</div>
			<?php $post = get_post(48); 
					setup_postdata( $post );
					 
						$desc = get_field('long_description');
					 
					 ?>
				<h2><?php echo get_the_title(); ?></h2>
				<div class="entry-content">
					<?php echo $desc; ?>
				</div>
			</section>
		</div>

		

		
		<?php wp_reset_postdata(); ?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div>


<div class="dog">
	<img src="<?php bloginfo('template_url'); ?>/images/dog.png">
</div>
<?php

get_footer();
