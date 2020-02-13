<?php

// Permet de choisir une image d'article sur wordpress
add_theme_support('post-thumbnails');

// Fonction pour gérer les menus dans wordpress

function enregistre_mon_menu()
{
    register_nav_menu('menu_principal', __('Menu principal'));
}
add_action('init', 'enregistre_mon_menu');

// fonction pour afficher la sidebar

function clea_parcours_p_register_sidebars()
{

    register_sidebar(

        array(
            'id' => 'before-front-page',
            'name' => __("Avant le contenu de page d'accueil"),
            'description' => __('Pour insérer un contenu juste sous le menu'),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>'
        )
    );
}

add_action('widgets_init', 'clea_parcours_p_register_sidebars');

