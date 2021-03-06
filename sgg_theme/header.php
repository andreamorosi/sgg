<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-title" content="<?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>



<header id="wrapper-header" class="header-wrapper">

	<div class="top-header">
		<div class="container">

			<!-- Top Header -->
			<div class="top-header--inner">
				<p class="top-header--inner-p margin-b-none margin-o-1 f-s-s">
					<i class="fa fa-envelope-o f-s-l" aria-hidden="true"></i>
					<span class="giallo">gruppogiovanisangiorgello@gmail.com</span>
				</p>

				<p class="top-header--inner-p margin-b-none margin-o-1 margin-r-auto f-s-s">
					<i class="fa fa-phone f-s-l" aria-hidden="true"></i>
					<a href="tel" class="giallo">+39 0573 400001</a>
				</p>

				<ul class="social-list">
					<li>
						<a href=""><i class="fa fa-facebook"></i></a>
					</li>
					<li>
						<a href=""><i class="fa fa-instagram"></i></a>
					</li>
					<li>
						<a href=""><i class="fa fa-youtube"></i></a>
					</li>
				</ul>
			</div><!-- //Top Header -->
		</div>
	</div>


	<!-- Main Header -->
	<div id="wrapper-navbar" class="container main-header">
		<nav class="navbar navbar-expand-md navbar-toggleable-md">
			
			<button class="navbar-toggler" type="button" data-toggle="collapse" 
				data-target="#mainHeader" aria-controls="mainHeader" 
				aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<figure class="navbar-brand">
				<img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Sangiorgello">
			</figure>

			<div class="collapse navbar-collapse main-header-core" id="mainHeader">
				<ul class="navbar-nav">
					<li class="nav-item active">
						<a href="/">Home</a>
					</li>
					<li class="nav-item">
						<a href="/chi-siamo">Chi siamo</a>
					</li>
					<li class="nav-item">
						<a href="/campi-estivi">Campi estivi</a>
					</li>
					<li class="nav-item">
						<a href="/animatori">Animatori</a>
					</li>
					<li class="nav-item">
						<a href="">Galleria</a>
					</li>
					<li class="nav-item">
						<a href="">Contatti</a>
					</li>
				</ul>
			</div>
		</nav>
		

	</div><!-- //Main Header -->
	
</header>

<main class="hfeed site" id="page">