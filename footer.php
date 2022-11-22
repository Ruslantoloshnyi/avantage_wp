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
if (have_rows('front_page_content')) :

	while (have_rows('front_page_content')) :
		the_row();

		if (get_row_layout() == 'front_page_booking_section') :

			$tel1 = get_sub_field('front_page_booking_tel_1');
			$tel2 = get_sub_field('front_page_booking_tel_2');
			$mail = get_sub_field('front_page_booking_mail');

		endif;

	endwhile;

endif;
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
							<p><?php echo $tel1; ?>; <?php echo $tel2; ?></p>
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