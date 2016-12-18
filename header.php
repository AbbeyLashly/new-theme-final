<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package punchtheme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'punchtheme' ); ?></a>



	<!-- replacer header -->


	<header id="header">
		<a id="cd-logo" href="#0"></a>


		<nav class="cd-secondary-nav">

				<div class="logo">
					<a href="<?php echo home_url(); ?>">
						<!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
						<!-- <img src="<?php echo get_template_directory_uri(); ?>/img/punch.svg" alt="Logo" class="logo-img"> -->
						<img src="<?php echo get_template_directory_uri(); ?>/assets/punch-white.svg" alt="Logo" class="logo-img">
					</a>
				</div>
				<ul>
					<li><a class="active" href="#0">Intro</a></li>
					<li><a href="#0">Features</a></li>
					<li><a href="#0">Photos</a></li>
					<li><a href="#0">Videos</a></li>
					<li><a href="#0">Specs</a></li>
					<li><a href="#0">Support</a></li>
					<li><a href="#0">Compare</a></li>
					<li><a href="#0">Buy</a></li>

				</ul>


		</nav> <!-- .cd-secondary-nav -->


		<a id="cd-menu-trigger" href="#0"><span class="cd-menu-text">Sections</span><span class="cd-menu-icon"></span></a>
	</header>









	<div id="content" class="site-content cd-main-content">
