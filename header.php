<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package news_egypt
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

        <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/owl.carousel.min.css">
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/owl.theme.default.css">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php

	$nav_image = get_field("nav_image");
	$item1 = get_field("item1");
	$item2 = get_field("item2");
	$item3 = get_field("item3");
	$item4 = get_field("item4");
	$item5 = get_field("item5");
	$item6 = get_field("item6");
	$item7 = get_field("item7");
	$item8 = get_field("item8");
	$icon1 = get_field("icon1");
	$icon2 = get_field("icon2");
	$icon3 = get_field("icon3");

?>


	<!-- header -->
<header>
	<nav>
		<div class="title">
			<img src="<?php echo $nav_image["url"]?>">
		</div>
		<ul>
			<li><?php echo $item1; ?></li>
			<li><?php echo $item2; ?></li>
			<li><?php echo $item3; ?></li>
			<li><?php echo $item4; ?></li>
			<li><?php echo $item5; ?></li>
			<li><?php echo $item6; ?></li>
			<li><?php echo $item7; ?></li>
			<li><?php echo $item8; ?></li>
		</ul>
		<div class="nav-icon">
			<a href="#">
				<?php echo $icon1; ?>
			</a>
			<a href="#">
				<?php echo $icon2; ?>
			</a>
			<a href="#">
				<?php echo $icon3; ?>
			</a>
		</div>
		<i class="icon fa fa-bars fa-2x"></i>
	</nav>
</header>
