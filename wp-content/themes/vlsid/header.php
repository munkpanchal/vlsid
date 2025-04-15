<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package framesync
 */

$site_name = get_bloginfo('name');
$site_title = $meta_data['title'] ?? null;
$site_desc = $meta_data['description'] ?? null;
?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php if (!empty($site_title)) : ?>
		<title><?php echo esc_html($site_title) . ' - ' . esc_html($site_name); ?></title>
	<?php endif; ?>

	<?php if (!empty($site_desc)) : ?>
		<meta name="description" content="<?php echo esc_attr($site_desc); ?>">
	<?php endif; ?>

	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body>
	<header class="bg-white py-4 sticky top-0 z-50">
		<div class="container">
			<div class="header-wrapper flex justify-between items-center">
				<div class="logo
				w-36 sm:w-[min(100%_,_180px)]
				">
					<img src="<?php echo get_theme_file_uri("/public/logo.svg"); ?>"
						alt="<?php echo esc_attr($site_name); ?>">
				</div>
				<div class="flex items-center gap-4 max-sm:hidden">
					<?php
					echo wp_nav_menu(array(
						'theme_location' => 'header_nav',
						'container' => false,

						'items_wrap' => '<ul class="header-nav-links">%3$s</ul>'
					))
					?>

					<button class="btn">
						register now
					</button>
				</div>
				<div class="hamburger sm:hidden">
					<span></span>
					<span></span>
					<span></span>
				</div>
			</div>
		</div>

	</header>
	<div class="dropdown ">
		dropdown wil lcome her
	</div>