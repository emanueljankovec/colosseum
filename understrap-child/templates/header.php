<?php 
    $menuLocations = get_nav_menu_locations(); // Get our nav locations (set in our theme, usually functions.php)

    $menuID = $menuLocations['primary']; // Get the *primary* menu ID

    $primaryNav = wp_get_nav_menu_items($menuID);

?>

<div class="header_spacer"></div>

<nav class="navbar fixed-top navbar-expand-lg colosseum_navbar_container">
    <a href="<?= home_url(); ?>"><div class="colosseum_mobile_logo"></div></a>
    <div class="colosseum_navbar" id="navbarNav">
        <ul class="colosseum_desktop_navbar">
            <?php foreach($primaryNav as $menu) : ?>
                <li class="nav-item <?php if($menu->title == "Rezerviši") echo "book-now"; ?> <?php if( $menu->object_id == get_queried_object_id() ) echo "active"; ?>">
                    <div class="nav-item-holder">
                        <a class="nav-link" href="<?= $menu->url; ?>"><?= $menu->title ?></a>
                        <div></div>
                    </div>
                </li>
            <?php endforeach; ?>
        </ul>
        <div class="colosseum_mobile_navbar">
            <?php foreach($primaryNav as $menu) : ?>
                <li class="nav-item <?php if($menu->title == "Rezerviši") echo "book-now"; ?> <?php if( $menu->object_id == get_queried_object_id() ) echo "active"; ?>">
                    <div class="nav-item-holder">
                        <a class="nav-link" href="<?= $menu->url; ?>"><?= $menu->title ?></a>
                        <div></div>
                    </div>
                </li>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="colosseum_mobile_hamburger">
        <svg class="nav_open_icon" fill="#FF9100" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24" width="24px" height="24px"><path d="M 2 5 L 2 7 L 22 7 L 22 5 L 2 5 z M 2 11 L 2 13 L 22 13 L 22 11 L 2 11 z M 2 17 L 2 19 L 22 19 L 22 17 L 2 17 z"/></svg>
        <svg class="nav_close_icon" fill="#FF9100" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24" width="24px" height="24px"><path d="M 4.7070312 3.2929688 L 3.2929688 4.7070312 L 10.585938 12 L 3.2929688 19.292969 L 4.7070312 20.707031 L 12 13.414062 L 19.292969 20.707031 L 20.707031 19.292969 L 13.414062 12 L 20.707031 4.7070312 L 19.292969 3.2929688 L 12 10.585938 L 4.7070312 3.2929688 z"/></svg>
    </div>
</nav>