<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ACStarter
 */
	$phone = get_field('phone', 'option');
	$email = get_field('email', 'option');
	$antispam = antispambot($email);
	$facebook = get_field('facebook', 'option');
	$angieslist = get_field('angies_list', 'option');
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="wrapper center">

			<section class="footer-contact sections">
				<div class="left">
					<h3>CALL US</h3>
					<div class="phone">
						<a href="tel:<?php echo $phone; ?>">
							<?php echo $phone; ?>
						</a>
					</div>
					
				</div>
				<div class="right">
					<h3>EMAIL US</h3>
					<div class="icon">
						<a href="mailto:<?php echo $antispam; ?>">
							<i class="fas fa-envelope fa-3x"></i>
						</a>
					</div>
				</div>
			</section>
			<section class="bottomnav">
				<?php wp_nav_menu( array( 'theme_location' => 'footer', 'menu_id' => 'primary-menu' ) ); ?>
			</section>
			<section class="social-links">
				<ul>
					<?php if( $facebook ) { ?>
					<li>
						<a href="<?php echo $facebook; ?>">
							<i class="fab fa-facebook-square fa-3x"></i>
						</a>
					</li>
					<?php } ?>
					<?php if( $angieslist ) { ?>
					<li>
						<a href="<?php echo $angieslist; ?>">
							<img src="<?php bloginfo('template_url'); ?>/images/angies-list.png" style="width: 50px;">
						</a>
					</li>
					<?php } ?>
				</ul>
			</section>	
			<div class="creds">
				© <?php echo date('Y') . ' ' . get_bloginfo('name'); ?>. All Rights Reserved. Site by <a href="https://bellaworksweb.com" target="_blank">BW</a>.
			</div>
		</div><!-- wrapper -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
