<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Avantage
 */

?>
<?php
$tel_1 = get_field('tel_1', 'option');
$tel_2 = get_field('tel_2', 'option');
$mail = get_field('email', 'option');
?>
<!-- footer
   ================================================== -->

<footer>

	<section class="footer-section">

		<div class="container">

			<div class="row">
				<div class="col-6">
					<div class="footer-menu">
						<?php
						wp_nav_menu([
							'theme_location'  => 'footer',
							'menu_class'      => 'footer-nav',
						]);
						?>
					</div>

				</div>

				<div class="col-6">
					<div class="row footer-adress">
						<div class="col-12 col-md-6 footer-head">
							<p>Адреса:</p>
						</div>
						<div class="col-12 col-md-6 footer-content">
							<p>вулиця Шкільна, 59Б, Залізний Порт,<br> Херсонська область, 75653</p>
						</div>

						<div class="col-12 col-md-6 footer-head ">
							<p>Контакти: </p>
						</div>
						<div class="col-12 col-md-6 footer-content-two">
							<p><?php echo $tel_1; ?>; <?php echo $tel_2; ?></p>
							<p><?php echo $mail; ?></p>
						</div>

					</div>
				</div>
			</div>


		</div>

	</section>

</footer>

<?php wp_footer(); ?>

</body>

</html>