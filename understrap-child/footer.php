<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );

$menuLocations = get_nav_menu_locations(); // Get our nav locations (set in our theme, usually functions.php)

$menuID = $menuLocations['primary']; // Get the *primary* menu ID

$primaryNav = wp_get_nav_menu_items($menuID);

?>


<div class="wrapper" id="colosseum-footer">

	<div class="<?php echo esc_attr( $container ); ?>">

		<div class="row justify-content-center">

			<div class="col-md-12">

				<footer class="site-footer" id="colophon">

					<div class="site-info-holder">

						<div class="footer_title">
							Colosseum Bend
						</div>

						<div class="footer_navigation">
							<?php foreach($primaryNav as $menu) : ?>
								<div class="nav-item <?php if($menu->title == "Rezerviši") echo "hide"; ?>">
									<a class="nav-link" href="<?= $menu->url; ?>"><?= $menu->title ?></a>
								</div>
							<?php endforeach; ?>
						</div>

						<div class="colosseum_social_icons_holder">
							<div class="colosseum_cocial_icon">
								<a href="https://www.facebook.com/colosseumbendofficial" target="_blank">
									<img src="<?= get_stylesheet_directory_uri() . '/assets/icons/cb_facebook.png' ?>" alt="Facebook">
								</a>
							</div>
							<div class="colosseum_cocial_icon">
								<a href="https://www.instagram.com/colosseum_bend_official/" target="_blank">
									<img src="<?= get_stylesheet_directory_uri() . '/assets/icons/cb_instagram.png' ?>" alt="Instagram">
								</a>
							</div>
							<div class="colosseum_cocial_icon">
								<a href="https://www.youtube.com/channel/UC_2P3v0fnjFs8U5Z5t7X4vA/featured" target="_blank">
									<img src="<?= get_stylesheet_directory_uri() . '/assets/icons/cb_youtube.png' ?>" alt="Youtube">
								</a>
							</div>
							<div class="colosseum_cocial_icon">
								<a href="mailto:colosseumbendnis@gmail.com" target="_blank">
									<img src="<?= get_stylesheet_directory_uri() . '/assets/icons/cb_mail.png' ?>" alt="Mail">
								</a>
							</div>
						</div>
						
						<div class="footer-bottom-part">
							© 2022 Colosseum bend. All rights reserved | Powered by: <a href="https://astrid-solution.com/" target="_blank"">Astrid Solutions</a>
						</div>

					</div><!-- .site-info -->

				</footer><!-- #colophon -->

			</div><!--col end -->

		</div><!-- row end -->

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

