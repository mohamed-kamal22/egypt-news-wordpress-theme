<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package news_egypt
 */

?>

<?php

	$list_1 = get_field("list_1");
	$list_2 = get_field("list_2");
	$list_3 = get_field("list_3");
	$list_4 = get_field("list_4");
	$list_5 = get_field("list_5");
	$list_6 = get_field("list_6");
	$list_7 = get_field("list_7");
	$footer_img = get_field("footer_img");
	$foot_icon1 = get_field("foot_icon1");
	$foot_icon2 = get_field("foot_icon2");
	$footer_text = get_field("footer_text");
	$scroll_top = get_field("scroll_top");

?>

	<footer>
		<div class="row">
			<div class="col-12">
				<div class="row">
					<div class="col-md-4 col-12">
						<div class="title">
							<img src="<?php echo $footer_img[url]; ?>">
						</div>
					</div>
					<div class="col-md-6 col-12">
						<ul>
							<li><?php echo $list_1; ?></li>
							<li><?php echo $list_2; ?></li>
							<li><?php echo $list_3; ?></li>
							<li><?php echo $list_4; ?></li>
							<li><?php echo $list_5; ?></li>
							<li><?php echo $list_6; ?></li>
							<li><?php echo $list_7; ?></li>
						</ul>
					</div>
					<div class="col-md-2 col-12 social">
						<?php echo $foot_icon1; ?>
						<?php echo $foot_icon2; ?>
					</div>
				</div>
			</div>
		</div>
		<section class="copyrights">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="text">
							<?php echo $footer_text; ?>
						</div>
					</div>
				</div>
			</div>
		</section>
	</footer>

	<div class="scrollTop">
		<?php echo $scroll_top; ?>
	</div>    

	<script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery-3.3.1.min.js"></script>
	<script src="<?php bloginfo('stylesheet_directory'); ?>/js/bootstrap.min.js"></script>
	<script src="<?php bloginfo('stylesheet_directory'); ?>/js/tether.min.js"></script>
	<script src="<?php bloginfo('stylesheet_directory'); ?>/js/owl.carousel.min.js"></script>
	<script src="<?php bloginfo('stylesheet_directory'); ?>/js/plugin.js"></script>

<?php wp_footer(); ?>

</body>
</html>
