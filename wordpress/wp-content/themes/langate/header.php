<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package langate
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<header id="masthead" class="site-header">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="fs-1 text-center">
						<?php if (is_home()) : ?>
							<h1><?php echo get_bloginfo('name') ?></h1>
						<?php else : ?>
							<a href="<?php echo get_home_url() ?>"><?php echo get_bloginfo('name') ?></a>
						<?php endif; ?>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<nav id="site-navigation" class="main-navigation">
						<button class="menu-toggle" aria-controls="primary-menu"
								aria-expanded="false"><?php esc_html_e('Primary Menu', 'langate'); ?></button>
						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-1',
								'menu_id' => 'primary-menu',
							)
						);
						?>
					</nav><!-- #site-navigation -->
				</div>
			</div>
		</div>
	</header><!-- #masthead -->
	<div class="container">
