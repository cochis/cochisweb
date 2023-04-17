<?php
/*
    Plugin Name: cochisweb - Post Types
    Plugin URI:  
    Description: Añade Post Types al sitio cochisweb
    Version: 1.0.0
    Author: Oscar Alejandro Ramirez Rosas
    Author URI: http://cochisweb.com
    Text Domain: cochisweb
*/

if (!defined('ABSPATH')) {
    die();
}

// Registrar Custom Post Type
function cochisweb_Lenguajes_post_type()
{
    $labels = [
        'name' => _x('Lenguajes', 'Post Type General Name', 'cochisweb'),
        'singular_name' => _x(
            'Lenguaje',
            'Post Type Singular Name',
            'cochisweb'
        ),
        'menu_name' => __('Lenguajes', 'cochisweb'),
        'name_admin_bar' => __('Lenguaje', 'cochisweb'),
        'archives' => __('Archivo', 'cochisweb'),
        'attributes' => __('Atributos', 'cochisweb'),
        'parent_item_colon' => __('Lenguaje Padre', 'cochisweb'),
        'all_items' => __('Todas Las Lenguajes', 'cochisweb'),
        'add_new_item' => __('Agregar Lenguaje', 'cochisweb'),
        'add_new' => __('Agregar Lenguaje', 'cochisweb'),
        'new_item' => __('Nueva Lenguaje', 'cochisweb'),
        'edit_item' => __('Editar Lenguaje', 'cochisweb'),
        'update_item' => __('Actualizar Lenguaje', 'cochisweb'),
        'view_item' => __('Ver Lenguaje', 'cochisweb'),
        'view_items' => __('Ver Lenguajes', 'cochisweb'),
        'search_items' => __('Buscar Lenguaje', 'cochisweb'),
        'not_found' => __('No Encontrado', 'cochisweb'),
        'not_found_in_trash' => __('No Encontrado en Papelera', 'cochisweb'),
        'featured_image' => __('Imagen Destacada', 'cochisweb'),
        'set_featured_image' => __('Guardar Imagen destacada', 'cochisweb'),
        'remove_featured_image' => __('Eliminar Imagen destacada', 'cochisweb'),
        'use_featured_image' => __(
            'Utilizar como Imagen Destacada',
            'cochisweb'
        ),
        'insert_into_item' => __('Insertar en Lenguaje', 'cochisweb'),
        'uploaded_to_this_item' => __('Agregado en Lenguaje', 'cochisweb'),
        'items_list' => __('Lista de Lenguajes', 'cochisweb'),
        'items_list_navigation' => __('Navegación de Lenguajes', 'cochisweb'),
        'filter_items_list' => __('Filtrar Lenguajes', 'cochisweb'),
    ];
    $args = [
        'label' => __('Lenguaje', 'cochisweb'),
        'description' => __('Lenguajes para el Sitio Web', 'cochisweb'),
        'labels' => $labels,
        'supports' => ['title', 'editor', 'thumbnail' , 'custom-fields'],
        'hierarchical' => true, // true = posts , false = paginas
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 6,
        'menu_icon' => 'dashicons-awards',
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => 'page',
    ];
    register_post_type('cochisweb_lenguajes', $args);
}
add_action('init', 'cochisweb_lenguajes_post_type', 0);


 


function cochisweb_portafolios_post_type() {

	$labels = array(
		'name'                  => _x( 'Portafolios', 'Post Type General Name', 'cochisweb' ),
		'singular_name'         => _x( 'Portafolio', 'Post Type Singular Name', 'cochisweb' ),
		'menu_name'             => __( 'Portafolios', 'cochisweb' ),
		'name_admin_bar'        => __( 'Portafolio', 'cochisweb' ),
		'archives'              => __( 'Archivo', 'cochisweb' ),
		'attributes'            => __( 'Atributos', 'cochisweb' ),
		'parent_item_colon'     => __( 'Portafolio Padre', 'cochisweb' ),
		'all_items'             => __( 'Todas Las Portafolios', 'cochisweb' ),
		'add_new_item'          => __( 'Agregar Portafolio', 'cochisweb' ),
		'add_new'               => __( 'Agregar Portafolio', 'cochisweb' ),
		'new_item'              => __( 'Nueva Portafolio', 'cochisweb' ),
		'edit_item'             => __( 'Editar Portafolio', 'cochisweb' ),
		'update_item'           => __( 'Actualizar Portafolio', 'cochisweb' ),
		'view_item'             => __( 'Ver Portafolio', 'cochisweb' ),
		'view_items'            => __( 'Ver Portafolios', 'cochisweb' ),
		'search_items'          => __( 'Buscar Portafolio', 'cochisweb' ),
		'not_found'             => __( 'No Encontrado', 'cochisweb' ),
		'not_found_in_trash'    => __( 'No Encontrado en Papelera', 'cochisweb' ),
		'featured_image'        => __( 'Imagen Destacada', 'cochisweb' ),
		'set_featured_image'    => __( 'Guardar Imagen destacada', 'cochisweb' ),
		'remove_featured_image' => __( 'Eliminar Imagen destacada', 'cochisweb' ),
		'use_featured_image'    => __( 'Utilizar como Imagen Destacada', 'cochisweb' ),
		'insert_into_item'      => __( 'Insertar en Portafolio', 'cochisweb' ),
		'uploaded_to_this_item' => __( 'Agregado en Portafolio', 'cochisweb' ),
		'items_list'            => __( 'Lista de Portafolios', 'cochisweb' ),
		'items_list_navigation' => __( 'Navegación de Portafolios', 'cochisweb' ),
		'filter_items_list'     => __( 'Filtrar Portafolios', 'cochisweb' ),
	);
	$args = array(
		'label'                 => __( 'Portafolios', 'cochisweb' ),
		'description'           => __( 'Portafolios para el Sitio Web', 'cochisweb' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 7,
		'menu_icon'             => 'dashicons-admin-users',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'portafolios', $args );

}
add_action( 'init', 'cochisweb_portafolios_post_type', 0 );

 

function cochisweb_testimoniales_post_type() {
	$labels = array(
		'name'                  => _x( 'Testimoniales', 'Post Type General Name', 'cochisweb' ),
		'singular_name'         => _x( 'Testimonial', 'Post Type Singular Name', 'cochisweb' ),
		'menu_name'             => __( 'Testimoniales', 'cochisweb' ),
		'name_admin_bar'        => __( 'Testimonial', 'cochisweb' ),
		'archives'              => __( 'Archivo', 'cochisweb' ),
		'attributes'            => __( 'Atributos', 'cochisweb' ),
		'parent_item_colon'     => __( 'Testimonial Padre', 'cochisweb' ),
		'all_items'             => __( 'Todas Las Testimoniales', 'cochisweb' ),
		'add_new_item'          => __( 'Agregar Testimonial', 'cochisweb' ),
		'add_new'               => __( 'Agregar Testimonial', 'cochisweb' ),
		'new_item'              => __( 'Nueva Testimonial', 'cochisweb' ),
		'edit_item'             => __( 'Editar Testimonial', 'cochisweb' ),
		'update_item'           => __( 'Actualizar Testimonial', 'cochisweb' ),
		'view_item'             => __( 'Ver Testimonial', 'cochisweb' ),
		'view_items'            => __( 'Ver Testimoniales', 'cochisweb' ),
		'search_items'          => __( 'Buscar Testimonial', 'cochisweb' ),
		'not_found'             => __( 'No Encontrado', 'cochisweb' ),
		'not_found_in_trash'    => __( 'No Encontrado en Papelera', 'cochisweb' ),
		'featured_image'        => __( 'Imagen Destacada', 'cochisweb' ),
		'set_featured_image'    => __( 'Guardar Imagen destacada', 'cochisweb' ),
		'remove_featured_image' => __( 'Eliminar Imagen destacada', 'cochisweb' ),
		'use_featured_image'    => __( 'Utilizar como Imagen Destacada', 'cochisweb' ),
		'insert_into_item'      => __( 'Insertar en Testimonial', 'cochisweb' ),
		'uploaded_to_this_item' => __( 'Agregado en Testimonial', 'cochisweb' ),
		'items_list'            => __( 'Lista de Testimoniales', 'cochisweb' ),
		'items_list_navigation' => __( 'Navegación de Testimoniales', 'cochisweb' ),
		'filter_items_list'     => __( 'Filtrar Testimoniales', 'cochisweb' ),
	);
	$args = array(
		'label'                 => __( 'Testimoniales', 'cochisweb' ),
		'description'           => __( 'Testimoniales para el Sitio Web', 'cochisweb' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 8,
		'menu_icon'             => 'dashicons-editor-quote',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'testimoniales', $args );
}
add_action( 'init', 'cochisweb_testimoniales_post_type', 0 );
