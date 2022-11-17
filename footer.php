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

<!-- footer
   ================================================== -->

<footer>

	<section class="footer-section">

		<div class="container">

			<div class="row">
				<div class="col-6">
					<div class="footer-menu">

						<ul class="footer-nav">
							<li><a class="footer-nav-line" href="#"> Головна </a></li>
							<li><a href="#"> Номери </a></li>
							<li><a href="#"> Фото готелю </a></li>
							<li><a href="#"> Бронювання та цiни </a></li>
						</ul>

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
							<p>(099) 470-99-39; (067) 796-03-94</p>
							<p>avantagezp@gmail.com</p>
						</div>

					</div>
				</div>
			</div>


		</div>

	</section>

</footer>

<script src="js/script.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

<script type="text/javascript">
	$(function() {
		$('#datepicker').datepicker();
	});
</script>

<script type="text/javascript">
	$(function() {
		$('#datepicker-2').datepicker();
	});
</script>

</body>

</html>