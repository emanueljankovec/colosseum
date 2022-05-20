<?php
/**
 * Template Name: Gallery Page
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

$query_videos_args = array(
    'post_type'      => 'attachment',
    'post_mime_type' => 'video',
    'post_status'    => 'inherit',
    'posts_per_page' => - 1,
);

$query_videos= new WP_Query( $query_videos_args );

$videos = [];
$videosTitle = [];
foreach ( $query_videos->posts as $video ) {
    $videos[] = wp_get_attachment_url( $video->ID );
    $videosTitle[] = $video->post_title;
}

$query_images_args = array(
    'post_type'      => 'attachment',
    'post_mime_type' => 'image',
    'post_status'    => 'inherit',
    'posts_per_page' => - 1,
);

$query_images = new WP_Query( $query_images_args );

$images = [];
foreach ( $query_images->posts as $image ) {
    $images[] = wp_get_attachment_url( $image->ID );
}

$counter = 0;
$image_counter = 0;

?>

<div class="wrapper colosseum_callery_holder">
    <div class="">

        <div class="<?php echo esc_attr( $container ); ?>">

            <div class="row">

                <div class="col-md-12 content-area extended">

                    <main class="site-main" role="main">
                        <div class="colosseum_gallery_title_holder">
                            Galerija
                            <span>Svaka priča ima svoj početak i kraj a ovo je samo delić onoga što možete doživeti sa nama</span>
                        </div>

                        <div class="colosseum_videos_holder">
                            <span class="colosseum_line_left"></span>
                            <div class="colosseum_gallery_title">Video</div>
                            <div class="colosseum_videos">
                                <div class="colosseum_active_video">
                                    <div class="colosseum_video_title_holder">
                                        <img src="<?= get_stylesheet_directory_uri() . '/assets/images/colosseum_logo.png' ?>" alt="Logo">
                                        <div class="colosseum_video_title">
                                            <?= $videosTitle[0]; ?>
                                        </div>
                                    </div>
                                    <video width="709" height="448" controls type="video/mp4" id="video">
                                        <source src="<?= $videos[0] . "#t=20"; ?>" type="video/mp4" id="video_source">
                                        <source src="http://colosseum.test/wp-content/uploads/2022/03/Colosseum-Bend-Kvartet-Allegro-Ja-Nemam-Drugi-Dom-COVER.ogg" type="video/ogg">
                                    </video>
                                </div>
                                <div class="colosseum_video_thumbnails">
                                    <div class="colosseum_video_counter">
                                        <?= count($videos);  ?> videa
                                    </div>
                                    <div class="colosseum_thumbnail_videos_holder">
                                        <?php foreach($videos as $key => $video) : ?>
                                            <?php $counter++; ?>
                                            <div class="colosseum_thumbnail_video <?php if($counter == 1) echo 'active'; ?>">
                                                <video width="92" height="53" type="video/mp4">
                                                    <source src="<?= $video . '#t=20'; ?>" type="video/mp4">
                                                    <source src="http://colosseum.test/wp-content/uploads/2022/03/hush-hush-1.ogg" type="video/ogg">
                                                </video>
                                                <div class="colosseum_thumbnail_title">
                                                    <?= $videosTitle[$key]; ?>
                                                </div>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="colosseum_images_holder">
                            <span class="colosseum_line_right"></span>
                            <div class="colosseum_gallery_title">Fotografije</div>
                            <div class="colosseum_gallery_holder">
                                <?php foreach($images as $image) : ?>
                                    <?php 
                                        $image_counter++;    
                                    ?>
                                    <div class="colosseum_image_holder <?php if($image_counter > 20) echo 'hidde_image'; ?>">
                                        <img src="<?= $image; ?>" alt="Slika" class="colosseum_image" data-toggle="modal" data-target=".colosseum_gallery_modal">
                                    </div>
                                <?php endforeach; ?>
                                <div class="modal fade colosseum_gallery_modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <span class="close-modal" class="close" data-dismiss="modal" aria-label="Close">
                                                <svg fill="#FF9100" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 30 30" width="30px" height="30px">    <path d="M 7 4 C 6.744125 4 6.4879687 4.0974687 6.2929688 4.2929688 L 4.2929688 6.2929688 C 3.9019687 6.6839688 3.9019687 7.3170313 4.2929688 7.7070312 L 11.585938 15 L 4.2929688 22.292969 C 3.9019687 22.683969 3.9019687 23.317031 4.2929688 23.707031 L 6.2929688 25.707031 C 6.6839688 26.098031 7.3170313 26.098031 7.7070312 25.707031 L 15 18.414062 L 22.292969 25.707031 C 22.682969 26.098031 23.317031 26.098031 23.707031 25.707031 L 25.707031 23.707031 C 26.098031 23.316031 26.098031 22.682969 25.707031 22.292969 L 18.414062 15 L 25.707031 7.7070312 C 26.098031 7.3170312 26.098031 6.6829688 25.707031 6.2929688 L 23.707031 4.2929688 C 23.316031 3.9019687 22.682969 3.9019687 22.292969 4.2929688 L 15 11.585938 L 7.7070312 4.2929688 C 7.5115312 4.0974687 7.255875 4 7 4 z"/></svg>
                                        </span>
                                            <div class="fotorama" data-loop="true" data-arrows="true" data-navposition="bottom" data-nav="thumbs">
                                                <?php foreach($images as $image) : ?>
                                                    <img src="<?= $image; ?>" alt="">
                                                <?php endforeach; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php if($image_counter > 2) : ?>
                                <span class="colosseum_gallery_see_more">
                                    Saznajte više
                                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="arrow-right" class="svg-inline--fa fa-arrow-right fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M190.5 66.9l22.2-22.2c9.4-9.4 24.6-9.4 33.9 0L441 239c9.4 9.4 9.4 24.6 0 33.9L246.6 467.3c-9.4 9.4-24.6 9.4-33.9 0l-22.2-22.2c-9.5-9.5-9.3-25 .4-34.3L311.4 296H24c-13.3 0-24-10.7-24-24v-32c0-13.3 10.7-24 24-24h287.4L190.9 101.2c-9.8-9.3-10-24.8-.4-34.3z"></path></svg>
                                </span>
                            <?php endif; ?>
                        </div>
                        

                    </main><!-- #main -->

                </div><!-- #primary -->

            </div><!-- .row end -->

        </div><!-- #content -->

    </div>

</div><!-- #full-width-page-wrapper -->

<?php
get_footer();