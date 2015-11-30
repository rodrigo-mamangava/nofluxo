<?php

/**
 *  Plugin Name: Banner No Fluxo
 *  Description: Adição de custom post do tipo: BANNER
 *  Version: 1.0.0
 *  Author: Mamangava
 *  Author URI: http://mamangava.com
 * 	Author Email: rodrigo@mamangava.com
 *  Licence: GPL2
 */
///////////CUSTON POSTS
function mmgv_PostsSet() {

    //NOTICIAS

    $labels = array(
        'name' => 'Banner',
        'singular_name' => 'Banner',
        'menu_name' => 'Banners',
        'name_admin_bar' => 'Banners',
        'add_new' => 'Adicionar novo Banner',
        'add_new_item' => 'Adicionar novo Banner',
        'new_item' => 'Novo Banner',
        'edit_item' => 'Editar Banner',
        'view_item' => 'Ver ',
        'all_items' => 'Todas ',
        'search_items' => 'Buscar Banner',
        'parent_item_colon' => ' Banners relacionadas:',
        'not_found' => 'Nenhum banner encontrada.',
        'not_found_in_trash' => 'Nenhum banner na lixeira.',
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_icon' => 'dashicons-format-gallery',
        'query_var' => true,
        'rewrite' => array('slug' => 'banner'),
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => true,
        'menu_position' => 6,
        'supports' => array('title', 'thumbnail', 'page-attributes', 'custom-fields'),
        'taxonomies' => array('category')
    );

    register_post_type('banner', $args);
    
    //NOTICIAS - END
    
    

    
}

add_action('init', 'mmgv_PostsSet');

function my_rewrite_flush_02() {
    mmgv_PostsSet();
    flush_rewrite_rules();
}

register_activation_hook(__FILE__, 'my_rewrite_flush_02');


///////////CUSTON POSTS - END


/*Taxonomia*/

//function myCustonTaxonomies(){
//	
//	// Tipos de cursos
//    $labels = array(
//        'name'              => 'Tipo de curso',
//        'singular_name'     => 'Tipos de curso',
//        'search_items'      => 'Buscar por Tipos de curso',
//        'all_items'         => 'Todos Tipos de curso',
//        'parent_item'       => 'Parent Tipos de curso',
//        'parent_item_colon' => 'Parent Tipos de curso:',
//        'edit_item'         => 'Editar Tipos de curso',
//        'update_item'       => 'Atualizar Tipos de curso',
//        'add_new_item'      => 'Adicionar novo Tipos de curso',
//        'new_item_name'     => 'Novo Tipos de curso',
//        'menu_name'         => 'Tipos de curso',
//    );
//
//    $args = array(
//        'hierarchical'      => true,
//        'labels'            => $labels,
//        'show_ui'           => true,
//        'show_admin_column' => true,
//        'query_var'         => true,
//        'rewrite'           => array( 'slug' => 'tipos-evento' ),
//    );
//
//    register_taxonomy( 'tipos-curso', array( 'evento', ), $args );
//
//
//}
//
//add_action('init', 'myCustonTaxonomies');



