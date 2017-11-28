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

<main class="hfeed site" id="page">

	<header id="wrapper-navbar">

		<div class="top-header">
			<div class="container">

				<!-- Top Header -->
				<div class="top-header--inner">
					<p>
						<i class="fa fa-envelope-o" aria-hidden="true"></i>
						<span>info@sangiorgello.it</span>
					</p>

					<p>
						<i class="fa fa-phone" aria-hidden="true"></i>
						<a href="tel">+39 0573.100004</a>
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
		<div class="container main-header">
			<nav class="navbar navbar-toggleable-md">
				
				<button class="navbar-toggler" type="button" data-toggle="collapse" 
					data-target="#mainHeader" aria-controls="mainHeader" 
					aria-expanded="false" aria-label="Toggle navigation" style="background:red">
					<span class="navbar-toggler-icon"></span>
				</button>

				<figure class="navbar-brand">
					<img src="" alt="Sangiorgello">
					<h1></h1>
				</figure>

				<div class="collapse navbar-collapse" id="mainHeader">
					<ul class="navbar-nav">
						<li class="nav-item active">
							<a href="">Home</a>
						</li>
						<li class="nav-item">
							<a href="">Chi siamo</a>
						</li>
						<li class="nav-item">
							<a href="">Campi estivi</a>
						</li>
						<li class="nav-item">
							<a href="">Animatori</a>
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

