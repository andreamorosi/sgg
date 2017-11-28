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
<section class="wrapper" id="wrapper-hero">
<!-- TODO: OwlCarousel here -->

</section><!-- //Wrapper Hero -->

<!-- Wrapper Trio -->
<section class="wrapper" id="wrapper-trio">
	<div class="container">
		<div class="row">
			<div class="col-md-3 col-sm-12">
				<i class="fa fa-music" aria-hidden="true"></i>
				<h3>Cene e Feste</h3>
				<p>
					Lorem ipsum dolor sit amet consectetur adipisicing elit. 
					Assumenda numquam necessitatibus dolorum libero expedita natus earum. 
					Architecto, cupiditate! Beatae, neque.
				</p>
				<a href="" class="btn">Scopri</a>
			</div>

			<div class="col-md-3 col-sm-12">
				<i class="fa fa-music" aria-hidden="true"></i>
				<h3>Cene e Feste</h3>
				<p>
					Lorem ipsum dolor sit amet consectetur adipisicing elit. 
					Assumenda numquam necessitatibus dolorum libero expedita natus earum. 
					Architecto, cupiditate! Beatae, neque.
				</p>
				<a href="" class="btn">Scopri</a>
			</div>

			<div class="col-md-3 col-sm-12">
				<i class="fa fa-music" aria-hidden="true"></i>
				<h3>Cene e Feste</h3>
				<p>
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
<section class="wrapper" id="wrapper-info">
	<div class="container">
		<div class="row">
			<figure class="col-md-6">
				<img src="" alt="Sangiorgello Gruppo Giovani">
			</figure>
			<div class="col-md-6 col-sm-12">
				<span>Welcome to</span>
				<h2>Gruppo Giovani Sangiorgello</h2>
				<p>
					Lorem ipsum dolor sit amet consectetur adipisicing elit. 
					Hic, temporibus ab amet obcaecati asperiores quibusdam 
					quia nam ipsa eius a ducimus reiciendis molestias tempore 
					nesciunt aspernatur natus officiis nihil cupiditate.
				</p>
				<a href="">Scopri di più</a>
			</div>
		</div>
	</div>
</section><!-- //Wrapper Info -->

<!-- Wrapper Stats -->
<section class="wrapper" id="wrapper-stats">
	<figure>
		<img src="" alt="">
	</figure>
</section><!-- //Wrapper Stats -->

<!-- Wrapper Activities -->
<section class="wrapper" id="wrapper-activities">
	<div class="container">
		<div class="row">
			<div class="wrapper-title">
				<span>Estate</span>
				<h3>Campi estivi</h3>
			</div>
		</div>

		<div class="row">
			<article class="col-md-4 col-sm-12">
				<figure>
					<img src="" alt="">
				</figure>
				<h2>
					Campo Elementari
				</h2>
				<span class="">€170</span>
				<p>
					Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
					Suscipit, nostrum quidem? Commodi doloremque ad quam.
				</p>
				<div>
					<span>7-11 anni</span>
					<a href="">Iscriviti</a>
				</div>
			</article>
			<article class="col-md-4 col-sm-12">
				<figure>
					<img src="" alt="">
				</figure>
				<h2>
					Campo Elementari
				</h2>
				<span class="">€170</span>
				<p>
					Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
					Suscipit, nostrum quidem? Commodi doloremque ad quam.
				</p>
				<div>
					<span>7-11 anni</span>
					<a href="">Iscriviti</a>
				</div>
			</article>
			<article class="col-md-4 col-sm-12">
				<figure>
					<img src="" alt="">
				</figure>
				<h2>
					Campo Elementari
				</h2>
				<span class="">€170</span>
				<p>
					Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
					Suscipit, nostrum quidem? Commodi doloremque ad quam.
				</p>
				<div>
					<span>7-11 anni</span>
					<a href="">Iscriviti</a>
				</div>
			</article>
		</div>

		<div class="row">
			<a href="">Tutti i campi</a>
		</div>
	</div>
</section><!-- //Wrapper Activities -->

<!-- Wrapper Faces -->
<section class="wrapper" id="wrapper-faces">
	<div class="container">
		<div class="row">
			<div class="wrapper-title">
				<span>Animatori</span>
				<h3>Scropriamo i volti</h3>
			</div>
		</div>

		<div class="row">
			<!-- TODO: OwlCarousel here -->
		</div>

		<div class="row">
			<a href="">Scropri tutti</a>
		</div>

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
