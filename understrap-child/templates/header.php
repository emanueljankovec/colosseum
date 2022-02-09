<?php 
    $menuLocations = get_nav_menu_locations(); // Get our nav locations (set in our theme, usually functions.php)

    $menuID = $menuLocations['primary']; // Get the *primary* menu ID

    $primaryNav = wp_get_nav_menu_items($menuID);

?>

<div class="header_spacer"></div>

<nav class="navbar fixed-top navbar-expand-lg colosseum_navbar_container">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse colosseum_navbar" id="navbarNav">
        <ul class="navbar-nav">
            <?php foreach($primaryNav as $menu) : ?>
                <li class="nav-item <?php if($menu->title == "Rezerviši") echo "book-now"; ?> <?php if( $menu->object_id == get_queried_object_id() ) echo "active"; ?>">
                    <a class="nav-link" href="<?= $menu->url; ?>"><?= $menu->title ?></a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</nav>