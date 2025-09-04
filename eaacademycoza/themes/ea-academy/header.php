<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package EA_Academy
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<header id="masthead" class="site-header">
		<nav id="site-navigation" class="main-navigation max-width flex flex-wrap align-center">
			<div class="logo">
				<a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
					<img src="/wp-content/uploads/2025/09/logo.svg">
				</a>
			</div>
			<a class="eaa-button bright-blue" href="#apply">Apply Now</a>
			<?php echo do_shortcode('[responsive_menu]'); ?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
