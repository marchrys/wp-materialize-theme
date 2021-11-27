<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    
    <?php wp_body_open(); ?>

    <header class="header">
        <nav>
            <div class="nav-wrapper">
                <a href="<?php echo home_url() ?>" class="brand-logo"><?= get_bloginfo('name'); ?></a>
                <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="fas fa-bars"></i></a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <?php wp_nav_menu( array( 'theme_location' => 'main' ) ); ?>
                </ul> 
            </div>
        </nav> 

        <ul class="sidenav" id="mobile-demo">
            <?php wp_nav_menu( array( 'theme_location' => 'main' ) ); ?>
        </ul>
 
    </header>

    <main>
        <div class="container">

