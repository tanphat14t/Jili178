<?php

/**
 * Header template.
 *
 * @package          Flatsome\Templates
 * @flatsome-version 3.16.0
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="<?php flatsome_html_classes(); ?>">

<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<!-- import font Poppins -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<?php do_action('flatsome_after_body_open'); ?>
	<?php wp_body_open(); ?>

	<a class="skip-link screen-reader-text" href="#main"><?php esc_html_e('Skip to content', 'flatsome'); ?></a>

	<div id="wrapper">

		<?php do_action('flatsome_before_header'); ?>

		<header id="header" class="header <?php flatsome_header_classes(); ?> header-cs">
			<div class="header-wrapper">
				<?php get_template_part('template-parts/header/header', 'wrapper'); ?>
			</div>
		</header>

		<?php do_action('flatsome_after_header'); ?>

		<main id="main" class="<?php flatsome_main_classes(); ?>">