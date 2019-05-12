<!DOCTYPE html>
<html lang="<?php bloginfo('language'); ?>">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php bloginfo('description'); ?></title>
    <link
        rel="stylesheet" 
        type="text/css" 
        href="<?php bloginfo('stylesheet_url'); ?>"
        >
</head>
<body>
    <header>
        <h1><?php bloginfo('name');?></h1>
        <p><?php bloginfo('description');?></p>
    </header>
<?php wp_nav_menu( array(
    'theme_location' => 'header_menu', 
    'container'=>'nav', 
    'container_class'=>'mainnav'
)); 
?>
