<?php
$tel_1 = get_field('tel_1', 'option');
$tel_2 = get_field('tel_2', 'option');
$mail = get_field('email', 'option');
$currentYear = date('Y');
?>

<footer>
	<div class="container">
		<div class="footer_content">
			<div class="footer_content__menu">
				<div class="footer-menu">
					<?php
					wp_nav_menu([
						'theme_location'  => 'footer',
						'menu_class'      => 'footer-nav',
					]);
					?>
				</div>
			</div>
			<div class="footer_content_data">
				<div class="footer_content_data__adress">
					<div>Адреса:</div>
					<div>
						<div>вулиця Шкільна, 59Б, Залізний Порт,</div>
						<div>Херсонська область, 75653</div>
					</div>
				</div>
				<div class="footer_content_data__contacts">
					<div>Контакти:</div>
					<div class="footer_contact_data__cont">
						<div><?php echo $tel_1 . ';' . ' ' . $tel_2; ?></div>
						<div><?php echo $mail; ?></div>
					</div>
				</div>
				<div class="footer_content_data__social">
					<div>Соцмережі:</div>
					<div>
						<a href="https://www.facebook.com/profile.php?id=100069532664457"><img src="<?php echo get_template_directory_uri() . '/assets/image/facebook.png'; ?>" alt=""></a>
						<a href="https://instagram.com/avantagehotel?igshid=MzRlODBiNWFlZA=="><img src="<?php echo get_template_directory_uri() . '/assets/image/instagram.png'; ?>" alt=""></a>
					</div>

				</div>
			</div>
		</div>
		<div class="footer-copyright">
			<div class="footer-copyright__autor">&#169; 2022 &ndash; <?php echo $currentYear; ?> Ruslan Toloshnyi</div>
			<div class="footer-copyright__email">ruslantoloshnyi@gmail.com</div>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>

</body>

</html>