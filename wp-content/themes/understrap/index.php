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
	<div class="owl-carousel hero-carousel">

		<div class="hero-carousel--item" style="background-image:url(<?php echo get_template_directory_uri(); ?>/img/home_light.jpg);">
			<div class="hero-carousel--item--info">
				<span class="titolo giallo pacifico">Campi Estivi</span>
				<h3 class="bianco f-bold">Campo Superiori 2016 <br>Il Re Leone</h3>
				<a href="" class="btn">Scopri</a>
			</div>
		</div>

		<div class="hero-carousel--item" style="background-image:url(<?php echo get_template_directory_uri(); ?>/img/home_light.jpg);">
			<div class="hero-carousel--item--info">
				<span class="titolo giallo">Campi Estivi</span>
				<h3 class="bianco">Campo Medie 2016 <br>Il Re Leone</h3>
				<a href="" class="btn">Scopri</a>
			</div>
		</div>
	</div>


</section><!-- //Wrapper Hero -->

<!-- Wrapper Trio -->
<section class="wrapper wrapper-trio after-hero" id="wrapper-trio">
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-sm-12 trio-obj">
				<i class="fa fa-cutlery trio-obj--icon" aria-hidden="true"></i>
				<h3 class="pacifico">Cene e Feste</h3>
				<p class="trio-obj--descr">
				Organizziamo feste a tema e cene di raccolta fondi per finanziare le nostre attività o per sostenere progetti di altre Associazioni del territorio
				</p>
				<a href="" class="btn rosso bordo">Scopri</a>
			</div>

			<div class="col-md-4 col-sm-12 trio-obj">
				<i class="fa fa-music trio-obj--icon" aria-hidden="true"></i>
				<h3 class="pacifico">Animazione</h3>
				<p class="trio-obj--descr">
				Animiamo feste di compleanno per bambini con musica, giochi e truccabimbo in cambio di un’offerta a sostegno dei nostri progetti
				</p>
				<a href="" class="btn verde bordo">Scopri</a>
			</div>

			<div class="col-md-4 col-sm-12 trio-obj">
				<i class="fa fa-comments trio-obj--icon" aria-hidden="true"></i>
				<h3 class="pacifico">Incontri e Seminari</h3>
				<p class="trio-obj--descr">
				Creiamo momenti di incontro e discussione, gratuiti e aperti a tutti, su temi di interesse del Gruppo o su questioni di attualità
				</p>
				<a href="" class="btn bordo">Scopri</a>
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
				<span class="titolo giallo pacifico">Welcome to</span>
				<h1 class="blu f-bold">Gruppo Giovani <br>Sangiorgello</h1>
				<p>
				Il Gruppo Giovani Sangiorgello è nato come gruppo informale di ragazzi e ragazze delle Parrocchie di Gello e San Giorgio con l’obiettivo di dare un contributo attivo alla vita della comunità parrocchiale.
				</p>
				<a href="" class="btn">Scopri di più</a>
			</div>
		</div>
	</div>
</section><!-- //Wrapper Info -->

<!-- Wrapper Stats -->
<section class="wrapper" id="wrapper-stats">
	<figure class="c-c-combo-breaker"></figure>
</section><!-- //Wrapper Stats -->
<!-- Wrapper Activities -->
<section class="wrapper" id="wrapper-activities">
	<div class="container">
		<div class="row">
			<div class="wrapper-title">
				<span class="pre-titolo f-bold">Estate</span>
				<h3 class="titolo rosso pacifico">Campi estivi</h3>
			</div>
		</div>

		<div class="row cards-wrapper">
			<article class="card">
				<figure style="background-image:url(<?php echo get_template_directory_uri(); ?>/img/Campo_Elementari.png);"></figure>
				<header>
					<h2 class="blu pacifico">Campo Elementari</h2>
				</header>
				<p>
					Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
					Suscipit, nostrum quidem? Commodi doloremque ad quam.
				</p>
				<div class="card--footer">
					<span class="blu f-bold">7-11 anni</span>
					<a href="" class="f-bold">Iscriviti</a>
				</div>
			</article>
			<article class="card">
				<figure style="background-image:url(<?php echo get_template_directory_uri(); ?>/img/Campo_Medie.png);"></figure>
				<header>
					<h2 class="verde pacifico">Campo Medie</h2>
				</header>
				<p>
					Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
					Suscipit, nostrum quidem? Commodi doloremque ad quam.
				</p>
				<div class="card--footer">
					<span class="verde f-bold">7-11 anni</span>
					<a href="" class="f-bold">Iscriviti</a>
				</div>
			</article>
			<article class="card">
				<figure style="background-image:url(<?php echo get_template_directory_uri(); ?>/img/Campo_Superiori.png);"></figure>
				<header>
					<h2 class="rosso pacifico">Campo Superiori</h2>
				</header>
				<p>
					Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
					Suscipit, nostrum quidem? Commodi doloremque ad quam.
				</p>
				<div class="card--footer">
					<span class="rosso f-bold">7-11 anni</span>
					<a href="" class="f-bold">Iscriviti</a>
				</div>
			</article>
		</div>

		<div class="row">
			<a class="btn margin-o-auto rosso" href="">Tutti i campi</a>
		</div>
	</div>
</section><!-- //Wrapper Activities -->

<!-- Wrapper Faces -->
<section class="wrapper bg-giallo" id="wrapper-faces">
	<div class="container">
		<div class="row">
			<div class="wrapper-title">
				<span class="pre-titolo f-bold">Animatori</span>
				<h3 class="rosso pacifico">Scopriamo i volti</h3>
			</div>
		</div>
		<div class="owl-carousel scopri-carousel">
			<div class="face-wrapper">
				<figure class="face-wrapper--pic">
					<img class="" src="<?php echo get_template_directory_uri(); ?>/img/Animatore_jonny.jpg" alt="First slide">
				</figure>
				
				<div class="face-wrapper--descr">
					<h5 class="pacifico f-s-xl blu">Jonny</h5>
					<p class="f-bold">25 anni</p>
				</div>
			</div>	

			<div class="face-wrapper">
				<figure class="face-wrapper--pic">
					<img class="" src="<?php echo get_template_directory_uri(); ?>/img/Animatore_danda.jpg" alt="First slide">
				</figure>
				
				<div class="face-wrapper--descr">
					<h5 class="pacifico f-s-xl blu">Amanda</h5>
					<p class="f-bold">27 anni</p>
				</div>
			</div>

			<div class="face-wrapper">
				<figure class="face-wrapper--pic">
					<img class="" src="<?php echo get_template_directory_uri(); ?>/img/Animatore_jonny.jpg" alt="First slide">
				</figure>
				
				<div class="face-wrapper--descr">
					<h5 class="pacifico f-s-xl blu">Jonny</h5>
					<p class="f-bold">25 anni</p>
				</div>
			</div>

			<div class="face-wrapper">
				<figure class="face-wrapper--pic">
					<img class="" src="<?php echo get_template_directory_uri(); ?>/img/Animatore_danda.jpg" alt="First slide">
				</figure>
				
				<div class="face-wrapper--descr">
					<h5 class="pacifico f-s-xl blu">Amanda</h5>
					<p class="f-bold">27 anni</p>
				</div>
			</div>

		</div>

		<div class="row">
			<a href="" class="btn margin-o-auto rosso bordo">Scopri tutti</a>
		</div>
		
	</div>
	
</section><!-- //Wrapper Faces -->

<!-- Wrapper Gallery -->
<section class="wrapper" id="wrapper-faces">
	<div class="container">
		<div class="row">
			<div class="wrapper-title">
				<span class="pre-titolo f-bold">Galleria</span>
				<h3 class="verde pacifico">I nostri momenti</h3>
			</div>
		</div>

		<div class="owl-carousel galleria-carousel">
		
		<?php 
		for($i=0;$i<9;$i++) {
			?>
			<figure class="galleria-item">
				<img src="<?php echo get_template_directory_uri(); ?>/img/header.jpg" alt="">
			</figure>
			<?php
		}
		?>
		</div>
	</div>
</section><!-- //Wrapper Gallery -->

<!-- Wrapper Events -->
<section class="wrapper bg-rosso" id="wrapper-events">
	<div class="container">
		<div class="row">
			<div class="wrapper-title">
				<span class="pre-titolo f-bold bianco">Eventi</span>
				<h3 class="pacifico giallo">Prossimi Appuntamenti</h3>
			</div>
		</div>

		<div class="row cards-wrapper">
			<article class="card col-md-4 col-sm-12">
				<figure style="background-image:url(<?php echo get_template_directory_uri(); ?>/img/header.jpg);"></figure>

				<header>
					<h2 class="blu pacifico">Festa Carnevale</h2>
					<span class="giallo f-bold">26 feb</span>
				</header>
				
				<p>
					Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
					Suscipit, nostrum quidem? Commodi doloremque ad quam.
				</p>
				<div class="card--footer">
					<span class="blu f-bold">15:00</span>
					<span class="giallo f-bold">Oggi</span>
				</div>
			</article>
			<article class="card col-md-4 col-sm-12">
				<figure style="background-image:url(<?php echo get_template_directory_uri(); ?>/img/header.jpg);"></figure>
				<header>
					<h2 class="blu pacifico">Festa Carnevale</h2>
					<span class="giallo f-bold">26 feb</span>
				</header>
				<p>
					Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
					Suscipit, nostrum quidem? Commodi doloremque ad quam.
				</p>
				<div class="card--footer">
					<span class="blu f-bold">15:00</span>
					<span class="giallo f-bold">Oggi</span>
				</div>
			</article>
			<article class="card col-md-4 col-sm-12">
				<figure style="background-image:url(<?php echo get_template_directory_uri(); ?>/img/header.jpg);"></figure>
				<header>
					<h2 class="blu pacifico">Festa Carnevale</h2>
					<span class="giallo f-bold">26 feb</span>
				</header>
				<p>
					Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
					Suscipit, nostrum quidem? Commodi doloremque ad quam.
				</p>
				<div class="card--footer">
					<span class="blu f-bold">15:00</span>
					<span class="giallo f-bold">Oggi</span>
				</div>
			</article>
		</div>
	</div>
</section><!-- //Wrapper Events -->
<?php get_footer(); ?>
