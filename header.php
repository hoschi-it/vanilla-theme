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
    <header>
        <div class="title">
            <h1><?php bloginfo('name');?></h1>
            <p><?php bloginfo('description');?></p>
        </div>
        <?php wp_nav_menu( 
            array(
                'theme_location' => 'header-menu', 
                'container' => 'nav', 
                'container_id' => 'mainnav',
            )
        ); ?>
    </header>

