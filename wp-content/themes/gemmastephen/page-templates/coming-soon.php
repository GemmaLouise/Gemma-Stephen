<?php
/**
 * Template Name: Coming Soon
 *
 * @package twentysixteen
 * @subpackage gemmastephen
 */
?>

<!DOCTYPE html>
	<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/images/favicon.png" />
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<?php endif; ?>
		<?php wp_enqueue_script("jquery"); ?>
		<?php wp_head(); ?>
	</head>

	<body>
			
		
		<div class="coming-soon">
			<div class="main-header">
				Coming Soon
			</div>
			<h1>Gemma Stephen</h1>
			<p>This site is currently under construction</p>
			<a href="https://twitter.com/GemmaStephen" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/tw-icon.png"></span></a>
		</div>

	</body>
</html>