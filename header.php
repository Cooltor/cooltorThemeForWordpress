<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fira+Mono:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header class="header">
        
            <img src="<?php echo get_template_directory_uri(); ?>/img/MT.PNG" alt="Logo">
        
        <?php //wp_nav_menu( array( 'theme_location' => 'main' ) ); 
        wp_nav_menu( 
            array( 
                'theme_location' => 'main', 
                'container' => 'ul', // afin d'éviter d'avoir une div autour 
                'menu_class' => 'site__header__menu', // ma classe personnalisée 
            ) 
        ); 
        ?>
    </header>