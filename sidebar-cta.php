<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ACStarter
 */


?>

<aside id="secondary" class="widget-area" role="complementary">
	<?php //dynamic_sidebar( 'sidebar-1' ); ?>
	<div class="cta">
	<h3>Let's Get Started</h3>
		<div class="button-wrapper">
			<div class="button">
				<a href="<?php echo $cLogin; ?>">CLIENT LOGIN</a>
			</div>
			<div class="button">
				<a href="<?php echo $cSignup; ?>">CREATE NEW ACCOUNT</a>
			</div>
		</div>
	</div>
</aside><!-- #secondary -->
