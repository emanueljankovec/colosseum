<?php
/**
 * Template Name: Home Page
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );

if ( is_front_page() ) {
	get_template_part( 'global-templates/hero' );
}

$menuLocations = get_nav_menu_locations(); // Get our nav locations (set in our theme, usually functions.php)

$menuID = $menuLocations['primary']; // Get the *primary* menu ID

$primaryNav = wp_get_nav_menu_items($menuID);

$aboutUsUrl = '#';
$eventsUrl = '#';

foreach($primaryNav as $menu) {

    if($menu->title == "O bendu") {
        $aboutUsUrl = $menu->url;
    }

    if($menu->title == "Događaji") {
        $eventsUrl = $menu->url;
    }
}

?>

<div class="wrapper" id="colosseum_wrapper">

    <main class="site-main" id="main" role="main">

        <div id="colosseum_home_page_main_photo">
            <div class="<?php echo esc_attr( $container ); ?>" id="content">

                <div class="row">

                    <div class="col-md-12 content-area extended" id="primary">

                        <div class="colosseum_home_main_holder">
                            <div class="colosseum_main_logo_holder">
                                <img src="<?= get_stylesheet_directory_uri() . '/assets/images/colosseum_logo.png' ?>" alt="Colosseum Logo">
                                <div class="colosseum_logo_title">Colosseum Band</div>
                            </div>
                            <div class="colosseum_home_arrow">
                                <img src="<?= get_stylesheet_directory_uri() . '/assets/icons/arrow.png' ?>" alt="Arrow">
                            </div>
                            <div class="colosseum_main_photo_bottom_part">
                                Dobrodošli na zvanični sajt Colosseum benda
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>

        <div id="colosseum_home_about">
            <div class="<?php echo esc_attr( $container ); ?>">

                <div class="row">

                    <div class="col-md-12 content-area extended">
                        
                        <div class="home_about_holder">
                            <div class="about_title">
                                O Colosseum Bendu
                            </div>
                            <div class="about_description_holder">
                                <div class="about_description">
                                    <div class="cb_devider"></div>
                                    <div class="about_text">
                                        Mi smo bend koji je nastao 2009 godine i dosta dugo se bavimo muzikom. Muzika za nas nije samo nešto što se treba odraditi i odsvirati. Mi to doživljavamo na jako specifičan način...
                                    </div>
                                    <a class="about_see_more" href="<?= $aboutUsUrl; ?>">
                                        Saznajte više
                                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="arrow-right" class="svg-inline--fa fa-arrow-right fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M190.5 66.9l22.2-22.2c9.4-9.4 24.6-9.4 33.9 0L441 239c9.4 9.4 9.4 24.6 0 33.9L246.6 467.3c-9.4 9.4-24.6 9.4-33.9 0l-22.2-22.2c-9.5-9.5-9.3-25 .4-34.3L311.4 296H24c-13.3 0-24-10.7-24-24v-32c0-13.3 10.7-24 24-24h287.4L190.9 101.2c-9.8-9.3-10-24.8-.4-34.3z"></path></svg>
                                    </a>
                                </div>
                                <img src="<?= get_stylesheet_directory_uri() . '/assets/images/ana_home.png' ?>" alt="Anastazija">
                            </div>
                            <div class="about_bottom_part">
                                <img src="<?= get_stylesheet_directory_uri() . '/assets/images/colosseum_home.png' ?>" alt="Colosseum">
                            </div>
                        </div>

                    </div>

                </div>

            </div>

        </div>

        <div id="colosseum_home_upcoming_events">
            <div class="<?php echo esc_attr( $container ); ?>">

                <div class="row">

                    <div class="col-md-12 content-area extended">
                        
                        <div class="home_events_holder">

                            <div class="events_title">Predstojeći događaji</div>
                            <div class="evennts_description">Ako i vi želite da vas baš mi zabavimo pogledajte <br> slobodne termine. Ovo su samo neki koji su zauzeti i slede.</div>

                            <div class="events_dates_holder">
                                <?php for($i = 0; $i < 4; $i++) : ?>
                                    <div class="event_description">
                                        <div class="date_holder">
                                            28
                                            <span>Jan</span>
                                        </div>
                                        <div class="city_holder">
                                            Niš, Srbija 
                                            <span>Svadba</span>
                                        </div>
                                        <div class="place_holder">
                                            Kafana "Stari grad"
                                        </div>
                                    </div>
                                <?php endfor; ?>
                            </div>
                            <a class="events_see_more" href="<?= $eventsUrl; ?>">
                                Saznajte više
                                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="arrow-right" class="svg-inline--fa fa-arrow-right fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M190.5 66.9l22.2-22.2c9.4-9.4 24.6-9.4 33.9 0L441 239c9.4 9.4 9.4 24.6 0 33.9L246.6 467.3c-9.4 9.4-24.6 9.4-33.9 0l-22.2-22.2c-9.5-9.5-9.3-25 .4-34.3L311.4 296H24c-13.3 0-24-10.7-24-24v-32c0-13.3 10.7-24 24-24h287.4L190.9 101.2c-9.8-9.3-10-24.8-.4-34.3z"></path></svg>
                            </a>
                        </div>

                    </div>

                </div>

            </div>

        </div>
        
    </main>

</div>

<?php
get_footer();
