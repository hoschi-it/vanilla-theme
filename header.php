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
    <?php wp_head(); ?>
</head>
<body>
    <?php wp_nav_menu( 
        array(
            'theme_location' => 'header-menu', 
            'container' => 'nav', 
            'container_id' => 'mainnav',
        )
    ); ?>
    <section class="page">
        <header style="background-color: orange;">
            <div class="title">
                <h1><?php bloginfo('name');?></h1>
                <p><?php bloginfo('description');?></p>
            </div>



<input id="toggle-menu" type="checkbox" />
<label class="toggle-menu" for="toggle-menu">
 <svg class="burger" width="86" height="60" viewbox="0 0 150 150">
        <g stroke-width="12">   
            <line x1="6" y1="6" x2="80" y2="6"></line>
            <line x1="6" y1="28" x2="80" y2="28"></line>
            <line x1="6" y1="50" x2="80" y2="50"> </line>
        </g>
    </svg>
    <svg class="close" width="86" height="60" viewbox="0 0 150 150">
        <g stroke-width="12">   
            <line x1="42" y1="6" x2="42" y2="80"></line>
            <line x1="6" y1="42" x2="80" y2="42"></line>
        </g>
    </svg>
Menu
</label>


        </header>

