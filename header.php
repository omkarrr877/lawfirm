<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package omkar
 */

?>
<!DOCTYPE HTML>
<!-- Website template by freewebsitetemplates.com -->
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<title>Law Firm</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
	<div id="header">
		<div class="clearfix">
			<div class="logo">
				<a href="index.html"><?php the_custom_logo(); ?></a>
			</div>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_class'        => 'navigation',
					'container'		 => '',
				)
			);
			?>
		</div>
	</div>