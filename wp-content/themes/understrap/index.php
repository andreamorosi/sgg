<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package understrap
 */

get_header();

$container   = get_theme_mod( 'understrap_container_type' );
$sidebar_pos = get_theme_mod( 'understrap_sidebar_position' );
?>

<?php if ( is_front_page() && is_home() ) : ?>
	<?php get_template_part( 'global-templates/hero' ); ?>
<?php endif; ?>

<!-- Wrapper Hero -->
<section class="wrapper hero-wrapper" id="wrapper-hero">

	<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner" role="listbox">
			<div class="carousel-item active">
				<img class="d-block img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/header.jpg" alt="First slide">
				<div class="carousel-caption d-none d-md-block">
					<span class="titolo giallo">Campi Estivi</span>
					<h3>Campo Superiori 2016 <br>Il Re Leone</h3>
					<a href="" class="btn">Scopri</a>
				</div>
			</div>

			<div class="carousel-item">
				<img class="d-block img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/header.jpg" alt="Second slide">
			</div>

			<div class="carousel-item">
				<img class="d-block img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/header.jpg" alt="Third slide">
			</div>
		</div>

		<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>

</section><!-- //Wrapper Hero -->

<!-- Wrapper Trio -->
<section class="wrapper wrapper-trio after-hero" id="wrapper-trio">
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-sm-12 trio-obj">
				<i class="fa fa-music trio-obj--icon" aria-hidden="true"></i>
				<h3>Cene e Feste</h3>
				<p class="trio-obj--descr">
					Lorem ipsum dolor sit amet consectetur adipisicing elit. 
					Assumenda numquam necessitatibus dolorum libero expedita natus earum. 
					Architecto, cupiditate! Beatae, neque.
				</p>
				<a href="" class="btn">Scopri</a>
			</div>

			<div class="col-md-4 col-sm-12 trio-obj">
				<i class="fa fa-music trio-obj--icon" aria-hidden="true"></i>
				<h3>Cene e Feste</h3>
				<p class="trio-obj--descr">
					Lorem ipsum dolor sit amet consectetur adipisicing elit. 
					Assumenda numquam necessitatibus dolorum libero expedita natus earum. 
					Architecto, cupiditate! Beatae, neque.
				</p>
				<a href="" class="btn">Scopri</a>
			</div>

			<div class="col-md-4 col-sm-12 trio-obj">
				<i class="fa fa-music trio-obj--icon" aria-hidden="true"></i>
				<h3>Cene e Feste</h3>
				<p class="trio-obj--descr">
					Lorem ipsum dolor sit amet consectetur adipisicing elit. 
					Assumenda numquam necessitatibus dolorum libero expedita natus earum. 
					Architecto, cupiditate! Beatae, neque.
				</p>
				<a href="" class="btn">Scopri</a>
			</div>
		</div>
	</div>
</section><!-- //Wrapper Trio -->

<!-- Wrapper Info -->
<section class="wrapper wrapper-info" id="wrapper-info">
	<div class="container">
		<div class="row">
			<figure class="col-md-6">
				<img src="<?php echo get_template_directory_uri(); ?>/img/header.jpg" alt="Sangiorgello Gruppo Giovani">
			</figure>
			<div class="col-md-6 col-sm-12">
				<span class="titolo giallo">Welcome to</span>
				<h1 class="blu">Gruppo Giovani <br>Sangiorgello</h1>
				<p>
					Lorem ipsum dolor sit amet consectetur adipisicing elit. 
					Hic, temporibus ab amet obcaecati asperiores quibusdam 
					quia nam ipsa eius a ducimus reiciendis molestias tempore 
					nesciunt aspernatur natus officiis nihil cupiditate.
				</p>
				<a href="" class="btn">Scopri di più</a>
			</div>
		</div>
	</div>
</section><!-- //Wrapper Info -->

<!-- Wrapper Stats -->
<section class="wrapper" id="wrapper-stats">
	<figure>
		<img src="<?php echo get_template_directory_uri(); ?>/img/header.jpg" alt="">
	</figure>
</section><!-- //Wrapper Stats -->

<!-- Wrapper Activities -->
<section class="wrapper" id="wrapper-activities">
	<div class="container">
		<div class="row">
			<div class="wrapper-title">
				<span class="pre-titolo">Estate</span>
				<h3 class="titolo rosso">Campi estivi</h3>
			</div>
		</div>

		<div class="row">
			<article class="card">
				<figure style="background-image:url(<?php echo get_template_directory_uri(); ?>/img/header.jpg);"></figure>
				<h2>
					Campo Elementari
				</h2>
				<p>
					Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
					Suscipit, nostrum quidem? Commodi doloremque ad quam.
				</p>
				<div class="card--footer">
					<span>7-11 anni</span>
					<a href="">Iscriviti</a>
				</div>
			</article>
			<article class="card">
				<figure style="background-image:url(<?php echo get_template_directory_uri(); ?>/img/header.jpg);"></figure>
				<h2>
					Campo Elementari
				</h2>
				<p>
					Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
					Suscipit, nostrum quidem? Commodi doloremque ad quam.
				</p>
				<div class="card--footer">
					<span>7-11 anni</span>
					<a href="">Iscriviti</a>
				</div>
			</article>
			<article class="card">
				<figure style="background-image:url(<?php echo get_template_directory_uri(); ?>/img/header.jpg);"></figure>
				<h2>
					Campo Elementari
				</h2>
				<p>
					Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
					Suscipit, nostrum quidem? Commodi doloremque ad quam.
				</p>
				<div class="card--footer">
					<span>7-11 anni</span>
					<a href="">Iscriviti</a>
				</div>
			</article>
		</div>

		<div class="row">
			<a class="btn margin-o-auto" href="">Tutti i campi</a>
		</div>
	</div>
</section><!-- //Wrapper Activities -->

<!-- Wrapper Faces -->
<section class="wrapper" id="wrapper-faces">
	<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner" role="listbox">
			<div class="carousel-item face-wrapper active">
				<figure class="face-wrapper--pic">
					<img class="" src="<?php echo get_template_directory_uri(); ?>/img/header.jpg" alt="First slide">
				</figure>
				
				<div class="face-wrapper--descr">
					<h5>Jonny</h5>
					<p>25 anni</p>
				</div>
			</div>

			<div class="carousel-item face-wrapper">
				<figure class="face-wrapper--pic">
					<img class="" src="<?php echo get_template_directory_uri(); ?>/img/header.jpg" alt="First slide">
				</figure>
				
				<div class="face-wrapper--descr">
					<h5>Jonny</h5>
					<p>25 anni</p>
				</div>
			</div>

			<div class="carousel-item face-wrapper">
				<figure class="face-wrapper--pic">
					<img class="" src="<?php echo get_template_directory_uri(); ?>/img/header.jpg" alt="First slide">
				</figure>
				
				<div class="face-wrapper--descr">
					<h5>Jonny</h5>
					<p>25 anni</p>
				</div>
			</div>
		</div>

		<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
</section><!-- //Wrapper Faces -->

<!-- Wrapper Gallery -->
<section class="wrapper" id="wrapper-faces">
	<div class="container">
		<div class="row">
			<div class="wrapper-title">
				<span>Galleria</span>
				<h3>I nostri momenti</h3>
			</div>
		</div>

		<div class="row">
			<!-- TODO: WP Slider or OwlCarousel here -->
		</div>
	</div>
</section><!-- //Wrapper Gallery -->

<!-- Wrapper Events -->
<section class="wrapper" id="wrapper-events">
	<div class="container">
		<div class="row">
			<div class="wrapper-title">
				<span>Eventi</span>
				<h3>Prossimi Appuntamenti</h3>
			</div>
		</div>

		<div class="row">

			<article class="col-md-4 col-sm-12">
				<figure>
					<img src="" alt="">
				</figure>
				<h2>
					Festa Carnevale
				</h2>
				<span class="">26 feb</span>
				<p>
					Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
					Suscipit, nostrum quidem? Commodi doloremque ad quam.
				</p>
				<div>
					<span>15:00</span>
					<span>Oggi</span>
				</div>
			</article>

			<article class="col-md-4 col-sm-12">
				<figure>
					<img src="" alt="">
				</figure>
				<h2>
					Festa Carnevale
				</h2>
				<span class="">26 feb</span>
				<p>
					Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
					Suscipit, nostrum quidem? Commodi doloremque ad quam.
				</p>
				<div>
					<span>15:00</span>
					<span>Oggi</span>
				</div>
			</article>

			<article class="col-md-4 col-sm-12">
				<figure>
					<img src="" alt="">
				</figure>
				<h2>
					Festa Carnevale
				</h2>
				<span class="">26 feb</span>
				<p>
					Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
					Suscipit, nostrum quidem? Commodi doloremque ad quam.
				</p>
				<div>
					<span>15:00</span>
					<span>Oggi</span>
				</div>
			</article>
		</div>
	</div>
</section><!-- //Wrapper Events -->
<?php get_footer(); ?>
