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
<section class="wrapper" id="wrapper-contact-us">
	<div class="container">
		<div class="row">

			<div>
				<h4>Ti interessano le nostre attività?</h4>
				<p>
					Scrivici per chiedere qualsiasi info tanto non ti rispondiamo
				</p>
			</div>

			<a href="" class="btn">Scrivici</a>			

		</div>
	</div>
</section><!-- //Wrapper Contact Us -->

<footer>

	<!-- Main Footer -->
	<div class="main-footer">
		<div class="container">
			<div class="row">
				<figure class="">
					<img src="" alt="">
				</figure>

				<div class="">
					<h4>Contatti</h4>
					<span>
						<i class="fa fa-phone" aria-hidden="true"></i>
						<a href="">+39 0573 400001</a>
					</span>
					<span>
						<i class="fa fa-phone" aria-hidden="true"></i>
						info@sangiorgello.it
					</span>
				</div>

				<div>
					<h4>Menu</h4>
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

				<div>
					<h4>Seguici</h4>
					<a href="">
						<i class="fa fa-phone" aria-hidden="true"></i>
						Gruppo Giovani Sangiorgello
					</a>

					<a href="">
						<i class="fa fa-phone" aria-hidden="true"></i>
						Sangiorgello
					</a>

					<a href="">
						<i class="fa fa-phone" aria-hidden="true"></i>
						Gruppo Giovani Sangiorgello
					</a>
				</div>
			</div>
		</div>
	</div><!-- //Main Footer -->

	<!-- Sub Footer -->
	<div class="sub-footer">
		copyright SGG 2017. All Rights Reserved.
	</div>
</footer>

</main>

<?php wp_footer(); ?>

</body>

</html>

