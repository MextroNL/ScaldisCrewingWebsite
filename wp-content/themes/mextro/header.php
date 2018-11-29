<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>style.css">
        <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.png" />
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="https://use.fontawesome.com/46636d4f0f.js"></script>

    </head>

    <body>
    <?php
    // Fix menu overlap
    if ( is_admin_bar_showing() ) echo '<div style="min-height: 32px;"></div>';
    ?>

    <!--Center Logo Start-->
    <div class="logo-wrapper">
        <!--Image-->
        <?php the_custom_logo(); ?>
    </div>
    <!--Center Logo End-->

    <!--Navigation Start-->
    <nav class="navbar fixed-top navbar-expand-sm navbar">
        <!--Collapse Button-->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar" aria-expanded="false">
                <span class="hamburger-icon fas fa-bars"></span>
            </button>
        <!--Collapse Container-->
            <div class="collapse navbar-collapse main-nav" id="collapsibleNavbar">
            <!--Main Menu-->
                <ul class="navbar-nav nav-fill w-100">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Over</a>
                        <ul class="dropdown-menu">
                            <li class="nav-item"><a class="nav-link" href="#">Scaldis Crewing</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Voorwaarden</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Vacatures</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Aflossers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Werkgevers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
            <!--Main Menu End-->
            </div>
        <!--Collapse Container End-->
    </nav>
    <!--Navigation End-->

<!--                    <div class="main-nav">-->
<!--                    --><?php
//                    wp_nav_menu( array(
//                        'theme_location' => 'main-menu',
//                        'container'      => 'ul',
//                        'menu_class'     => 'navbar-nav nav-fill w-100',
//                    ) );
//                    ?>
<!--                    </div>-->



    <!--Header Image-->
    <div class="header">
        <img id="headerimg" src="<?php header_image(); ?>" alt="headerimg" />
    </div>
    <!--Header Image End-->