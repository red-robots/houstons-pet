<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ACStarter
 */

$title = get_field('call_to_action_box_title');
$copy = get_field('call_to_action_box_copy');

$cLogin =get_field('login_link', 'option');
$cSignup =get_field('new_client_link', 'option');
?>

<aside id="secondary" class="widget-area" role="complementary">
	<?php //dynamic_sidebar( 'sidebar-1' ); ?>
	<div class="cta">
	<h3><?php echo $title; ?></h3>
	<div class="copy">
		<?php echo $copy; ?>
	</div>
		<div class="button-wrapper">
			<div class="button">
				<a href="<?php echo $cLogin; ?>" target="_blank">CLIENT LOGIN</a>
			</div>
			<div class="button">
				<a href="<?php echo $cSignup; ?>" target="_blank">CREATE NEW ACCOUNT</a>
			</div>
		</div>
	</div>
</aside><!-- #secondary -->
