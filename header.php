<!doctype html>
<html AMP <?php language_attributes(); ?>>
	<head>
		<meta charset="utf-8">
		<title><?php wp_title( '&nbsp;_&nbsp;', true, 'right' ); ?><?php bloginfo('name'); ?></title>
		<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no,minimal-ui">
		<link rel="canonical" href="<?php bloginfo('url'); ?>">

		<!-- Inline CSS -->
		<?php include('dist/all.min.css.php'); ?>

		<!-- AMP components -->
		<script async custom-element="amp-carousel" src="https://cdn.ampproject.org/v0/amp-carousel-0.1.js"></script>

		<!-- AMP magic -->
		<style>body {opacity: 0}</style><noscript><style>body {opacity: 1}</style></noscript>
		<script async src="https://cdn.ampproject.org/v0.js"></script>

		<?php //wp_head(); ?>
	</head>
	<body>
		<a name=""></a>
		<header class="page__header">
			<div class="container">
				<a class="logo" href="<?php bloginfo('url'); ?>">
					<svg width="80" viewBox="0 0 100 25.8"><path d="M0,22.2h20v-3.5H0V22.2z M39,14V7.3C39,3.2,37.2,0,31.2,0c-1.9,0-6.7,0.4-6.7,3.8v1.9h4.2v-1 c0-1,1.6-1.2,2.4-1.2c2.3,0,3.3,1,3.3,3.6v0.1h-0.6c-3,0-10.8,0.5-10.8,6.2c0,3.6,3,5.7,6.2,5.7c4.1,0,5.5-3.2,5.5-3.2h0.1 c0,0,0,0.3,0,0.8c0,1.1,0.6,2,2.3,2h4.1v-3.8h-1.4C39.3,14.8,39,14.5,39,14z M34.5,10.8c0,2.2-1.7,4.8-4.1,4.8 c-1.9,0-2.7-1.1-2.7-2.4c0-2.5,3.7-2.9,6.1-2.9h0.8V10.8z M74.2,14.1V0.5h-4.5v8c0,0.8-0.1,1.6-0.3,2.3c-0.6,2.3-2.1,4.2-4.4,4.2 c-2.2,0-2.5-1.7-2.5-3.7V0.5h-4.5v8c0,0.9-0.1,1.6-0.3,2.3c-0.5,2.3-2.1,4.2-4.3,4.2c-2.1,0-2.5-1.6-2.5-3.7V2.9 c0-1.7-0.7-2.4-2.4-2.4h-4.3v3.8h1.4c0.5,0,0.8,0.3,0.8,0.8v7.1c0,4.8,2.2,7,5.9,7c2.9,0,5.2-1.8,6.2-3.8h0.1 c0.8,2.5,2.6,3.8,5.3,3.8c2.8,0,5-2,5.9-3.8h0.1c0,0,0,0.4,0,0.8v0.5c0,1.3,0.8,2,2.4,2h4.2v-3.9H75 C74.5,14.9,74.2,14.6,74.2,14.1z M91.9,0c-4.2,0-5.8,2.9-5.8,2.9h-0.1c0,0,0-0.3,0-0.7c0-1-0.6-1.8-2.3-1.8h-4v3.9h1.4 c0.5,0,0.8,0.3,0.8,0.8v20.7h4.5v-7.5c0-0.9-0.1-1.6-0.1-1.6h0.1c0,0,1.6,2.4,5.2,2.4c4.8,0,8.3-3.8,8.3-9.5 C100,3.9,96.8,0,91.9,0z M90.8,15.3c-3,0-4.5-2.8-4.5-5.6c0-4,2.2-5.8,4.6-5.8c2.7,0,4.5,2.3,4.5,5.7 C95.4,13.2,93.3,15.3,90.8,15.3z"/></svg>
				</a>

				<nav>
					<?php wp_nav_menu(array('theme_location' => 'primary')); ?>
				</nav>
			</div>
		</header>
