<?php

class VanillaTheme {

    public static function register_menus(){
        register_nav_menus(
            array(
                'header-menu' => __('Header Menu'),
                'footer-menu' => __('Footer Menu')
            )
        );
    }

    public static function widgets_init() {
        register_sidebar(
            array(
                'name'          => __('Primary Sidebar'),
                'id'            => 'sidebar-0',
                'before_widget' => '<aside id="%1$s" class="widget %2$s">',
                'after_widget'  => '</aside>',
                'before_title'  => '<h3 class="widget-title">',
                'after_title'   => '</h3>',
            )
        );
    }

}

add_action('init', array('VanillaTheme', 'register_menus'));
add_action('widgets_init', array('VanillaTheme', 'widgets_init'));
