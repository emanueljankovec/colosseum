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
?>


<div class="wrapper" id="colosseum-footer">

	<div class="<?php echo esc_attr( $container ); ?>">

		<div class="row justify-content-center">

			<div class="col-md-6">

				<footer class="site-footer" id="colophon">

					<div class="site-info">

						<div class="footer_title">
							Colosseum Bend
						</div>

						<?php 
							$menuLocations = get_nav_menu_locations(); // Get our nav locations (set in our theme, usually functions.php)
							// This returns an array of menu locations ([LOCATION_NAME] = MENU_ID);

							$menuID = $menuLocations['primary']; // Get the *primary* menu ID

							$primaryNav = wp_get_nav_menu_items($menuID);

							foreach($primaryNav as $menu) {
								
							}
						
							// var_dump($primaryNav); 
						?>

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

