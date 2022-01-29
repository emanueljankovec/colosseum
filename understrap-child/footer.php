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
						
						<div class="footer-bottom-part">
							© 2022 Colosseum bend. All rights reserved.
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

