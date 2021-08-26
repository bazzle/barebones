<?php

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

//  Register navigation menus for our theme.

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

function register_prop_menus()
{

    register_nav_menus(

        array(
            'navigation_primary' => __('Primary Navigation')
        )

    );

}

add_action('init', 'register_prop_menus');