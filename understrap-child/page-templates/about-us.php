<?php
/**
 * Template Name: About Us Page
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


?>

<div class="wrapper" id="colosseum_about_us_holder">
    <div class="colosseum_about_us_main_holder">
        <img src="<?= get_stylesheet_directory_uri() . '/assets/images/about_us_main_photo.png' ?>" class="colosseum_about_us_main_photo">

        <div class="<?php echo esc_attr( $container ); ?>">

            <div class="row">

                <div class="col-md-12 content-area extended">

                    <main class="site-main" role="main">

                        <div class="colosseum_about_us_description_holder">
                            <div class="colosseum_about_us_title">Malo o nama...</div>
                            <div class="colosseum_about_us_description">
                                <?= nl2br(
                                    '<span>COLOSSEUM BEND</span> zvanicno postoji od kraja 2009-e godine i nastao je iz hobija i ljubavi prema muzici i druzenju.

                                    Period koncipiranja, uskladjivanja i prosirivanja repertoara, kao i sam koncept rada po kome je bend danas prepoznatljiv, nije bio kratak i jednostavan, bilo je potrebno mnogo ljubavi i odricanja da bi se doslo do nivoa na kom je COLOSSEUM danas.

                                    Danas, COLOSSEUM BEND, predstavlja jedinstvenu energiju, koju sa sobom nose svi clanovi benda, pre svega prijatelji, a posle i kolege, po toj energiji i atmosferi koju ova ekipa donosi smo i najprepoznatljiviji.

                                    Uvek smo spremni i raspolozeni da se repertoarom i dinamikom prilagodimo

                                    svima. Prenosimo svoju medjusobnu, lepu  i cistu energiju na sve prisutne i uzivamo u uzvracanju kroz osmehe i odlican provod.

                                    Dugogodisnje profesionalno iskustvo i vrhunska svirka garancija je vrhunskog provoda na nasim nastupima.

                                    Pre svega, profesionalan, ozbiljan pristup, najkvalitetnija muzicka oprema, rasveta i celokupan i efikasan scenski nastup se kod <span>COLOSSEUM BENDA</span> podrazumevaju.') ?>
                                
                            </div>
                        </div>

                    </main><!-- #main -->

                </div><!-- #primary -->

            </div><!-- .row end -->

        </div><!-- #content -->

    </div>
    <div class="colosseum_musicians_holder">
        <div class="colosseum_about_us_image_holder_one"></div>
        <div class="colosseum_about_us_image_holder_two"></div>

        <div class="<?php echo esc_attr( $container ); ?> colosseum_musicians_container">

            <div class="row">

                <div class="col-md-12 content-area extended">

                    <main class="site-main" role="main">
                        <div class="colosseum_central_line"></div>
                        <div class="colosseum_about_us_title_bottom">
                            Ko smo to mi?
                        </div>
                        <div class="colosseum_about_us_cards_holder">
                            <div class="colosseum_card_img_left">
                                <img src="<?= get_stylesheet_directory_uri() . '/assets/images/ana_about_us.png' ?>" class="">
                                <div class="colosseum_lines_holder">
                                    <span>⬤</span>
                                    <div class="colosseum_middle_line"></div>
                                    <div class="colosseum_right_line"></div>
                                </div>
                                <div class="colosseum_card_right_holder">
                                    <div class="colosseum_musican_name">
                                        Anastazija Mitrović 
                                        <span>pevačica</span>
                                    </div>
                                    <div class="colosseum_musican_description">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.
                                    </div>
                                </div>
                            </div>
                            <div class="colosseum_card_img_right">
                                <div class="colosseum_card_left_holder">
                                    <div class="colosseum_musican_name">
                                        Dušan Miljković 
                                        <span>pevač</span>
                                    </div>
                                    <div class="colosseum_musican_description">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.
                                    </div>
                                </div>
                                <div class="colosseum_lines_holder">
                                    <div class="colosseum_right_line"></div>
                                    <div class="colosseum_middle_line"></div>
                                    <span>⬤</span>
                                </div>
                                
                                <img src="<?= get_stylesheet_directory_uri() . '/assets/images/dule_about_us.png' ?>" class="">
                            </div>
                            <div class="colosseum_card_img_left">
                                <img src="<?= get_stylesheet_directory_uri() . '/assets/images/emi_about_us.png' ?>" class="">
                                <div class="colosseum_lines_holder">
                                    <span>⬤</span>
                                    <div class="colosseum_middle_line"></div>
                                    <div class="colosseum_right_line"></div>
                                </div>
                                <div class="colosseum_card_right_holder">
                                    <div class="colosseum_musican_name">
                                        Emanuel Jankovec  
                                        <span>gitarista</span>
                                    </div>
                                    <div class="colosseum_musican_description">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.
                                    </div>
                                </div>
                            </div>
                            <div class="colosseum_card_img_right">
                                <div class="colosseum_card_left_holder">
                                    <div class="colosseum_musican_name">
                                        Aleksandar Simijonović
                                        <span>klavijaturista</span>
                                    </div>
                                    <div class="colosseum_musican_description">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.
                                    </div>
                                </div>
                                <div class="colosseum_lines_holder">
                                    <div class="colosseum_right_line"></div>
                                    <div class="colosseum_middle_line"></div>
                                    <span>⬤</span>
                                </div>
                                
                                <img src="<?= get_stylesheet_directory_uri() . '/assets/images/buca_about_us.png' ?>" class="">
                            </div>
                            <div class="colosseum_card_img_left">
                                <img src="<?= get_stylesheet_directory_uri() . '/assets/images/dule_about_us.png' ?>" class="">
                                <div class="colosseum_lines_holder">
                                    <span>⬤</span>
                                    <div class="colosseum_middle_line"></div>
                                    <div class="colosseum_right_line"></div>
                                </div>
                                <div class="colosseum_card_right_holder">
                                    <div class="colosseum_musican_name">
                                        Stefan Nikić  
                                        <span>bubnjar</span>
                                    </div>
                                    <div class="colosseum_musican_description">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.
                                    </div>
                                </div>
                            </div>
                            <div class="colosseum_card_img_right">
                                <div class="colosseum_card_left_holder">
                                    <div class="colosseum_musican_name">
                                        Nikola Đorđević 
                                        <span>basista</span>
                                    </div>
                                    <div class="colosseum_musican_description">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.
                                    </div>
                                </div>
                                <div class="colosseum_lines_holder">
                                    <div class="colosseum_right_line"></div>
                                    <div class="colosseum_middle_line"></div>
                                    <span>⬤</span>
                                </div>
                                
                                <img src="<?= get_stylesheet_directory_uri() . '/assets/images/buca_about_us.png' ?>" class="">
                            </div>
                        </div>
                    </main><!-- #main -->

                </div><!-- #primary -->

            </div><!-- .row end -->

        </div><!-- #content -->
        <div class="colosseum_about_us_image_holder_three">
            <div class="<?php echo esc_attr( $container ); ?>">

                <div class="row">

                    <div class="col-md-12 content-area extended">

                        <main class="site-main" role="main">
                            <div class="colosseum_about_us_contact_holder">
                                <div class="colosseum_about_us_contact_title">Ostaje samo da se i lično upoznamo i družimo uz pesmu. Vidimo se!</div>
                                <div class="colosseum_about_us_like">Voli vas vaš <a href="<?= get_home_url(); ?>">Colosseum bend</a>.</div>
                                <a class="colosseum_about_us_contact_btn" href="<?= get_home_url() . '/kontakt' ?>">Kontakt</a>
                            </div>
                        </main><!-- #main -->

                    </div><!-- #primary -->

                </div><!-- .row end -->

            </div><!-- #content -->
        </div>
        
    </div>

	

</div><!-- #full-width-page-wrapper -->

<?php
get_footer();