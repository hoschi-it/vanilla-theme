<!DOCTYPE html>
<html lang="<?php bloginfo('language'); ?>">
<head>
    <meta name="viewport" content="width=device-width"> 
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php bloginfo('name'); ?></title>
    <link
        rel="stylesheet" 
        type="text/css" 
        href="<?php bloginfo('stylesheet_url'); ?>"
        >
    <script 
        type="text/javascript" 
        src="<?php bloginfo('stylesheet_directory');?>/menu.js">
    </script>
    <?php wp_head(); ?>
</head>
<body>
    <input id="show-menu" type="checkbox" />
    <label class="toggle-menu" for="show-menu">
        Menü
        <svg class="burger" width="86" height="60" viewbox="0 0 150 150">
            <g stroke-width="12">   
                <line x1="6" y1="6" x2="80" y2="6"></line>
                <line x1="6" y1="28" x2="80" y2="28"></line>
                <line x1="6" y1="50" x2="80" y2="50"> </line>
            </g>
        </svg>
        <svg class="close hidden"  width="86" height="60" viewbox="0 0 150 150">
            <g stroke-width="12">   
                <line x1="5" y1="5" x2="60" y2="60"></line>
                <line x1="60" y1="5" x2="5" y2="60"></line>
            </g>
        </svg>
    </label>
    <?php wp_nav_menu( 
        array(
            'theme_location' => 'header-menu', 
            'container' => 'nav', 
            'container_id' => 'mainnav',
            'container_class' => 'menu hidden',
        )
    ); ?>


    <section class="page">
        <header style="background-color: orange;">
            <div class="title">
                <h1><?php bloginfo('name');?></h1>
                <p><?php bloginfo('description');?></p>
            </div>





        </header>

