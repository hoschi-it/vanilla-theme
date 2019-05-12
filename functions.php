<?php

class VanTheme {

    public static function register_menus(){
        register_nav_menus(
            array(
                'header-menu' => __('Header Menu'),
                'footer-menu' => __('Footer Menu')
            )
        );
    }

}

add_action('init', array('VanTheme', 'register_menus'));
