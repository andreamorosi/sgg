<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

$the_theme = wp_get_theme();
$container = get_theme_mod( 'understrap_container_type' );
?>

<!-- Wrapper Contact Us -->
<section class="wrapper bg-blu" id="wrapper-contact-us">
	<div class="container">
		<div class="row">

			<div class="contact-foot-info">
				<h4 class="giallo f-s-xxl pacifico">Ti interessano le nostre attività?</h4>
				<p class="bianco margin-b-none f-s-xl f-bold">
					Scrivici per chiedere qualsiasi info tanto non ti rispondiamo
				</p>
			</div>

			<a href="" class="btn giallo bordo">Scrivici</a>			

		</div>
	</div>
</section><!-- //Wrapper Contact Us -->

<footer>

	<!-- Main Footer -->
	<div class="main-footer" style="background-image:url(<?php echo get_template_directory_uri(); ?>/img/SGG_wall_2.png);">
		<div class="container">
			<div class="row footer-inner">
				<figure class="footer-inner--logo">
					<img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="">
				</figure>

				<div class="footer-inner--list">
					<h4 class="giallo pacifico">Contatti</h4>
					<span>
						<i class="fa fa-phone giallo" aria-hidden="true"></i>
						<a href="">+39 0573 400001</a>
					</span>
					<span>
						<i class="fa fa-envelope giallo" aria-hidden="true"></i>
						info@sangiorgello.it
					</span>
				</div>

				<div>
					<h4 class="giallo pacifico">Menu</h4>
					<ul>
						<li>
							<a href="">Home</a>
						</li>

						<li>
							<a href="">Chi Siamo</a>
						</li>

						<li>
							<a href="">Campi Estivi</a>
						</li>

						<li>
							<a href="">Animatori</a>
						</li>

						<li>
							<a href="">Galleria</a>
						</li>

						<li>
							<a href="">Contatti</a>
						</li>
					</ul>
				</div>

				<div class="footer-inner--social">
					<h4 class="giallo pacifico">Seguici</h4>
					<a href="">
						<i class="fa fa-facebook" aria-hidden="true"></i>
						<p>Gruppo Giovani Sangiorgello</p>
					</a>

					<a href="">
						<i class="fa fa-instagram" aria-hidden="true"></i>
						<p>Sangiorgello</p>
					</a>

					<a href="">
						<i class="fa fa-youtube" aria-hidden="true"></i>						
						<p>Gruppo Giovani Sangiorgello</p>
					</a>
				</div>
			</div>
		</div>
	</div><!-- //Main Footer -->

	<!-- Sub Footer -->
	<div class="sub-footer bg-blu f-s-s text-center bianco">
		copyright SGG 2017. All Rights Reserved.
	</div>
</footer>

</main>

<?php wp_footer(); ?>

</body>

</html>

