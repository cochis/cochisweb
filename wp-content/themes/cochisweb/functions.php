<?php
//includes
require get_template_directory() . '/includes/widgets.php';
require get_template_directory() . '/includes/queries.php';

function cochisweb_setup()
{
    //imagenes destacadas
    add_theme_support('post-thumbnails');

    // Titulo para SEO
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'cochisweb_setup');
function cochisweb_menus()
{
    register_nav_menus([
        'menu-principal' => __('Menu Principal', 'cochisweb'),
    ]);
}
add_action('init', 'cochisweb_menus');

function cochisweb_scripts_styles()
{
    //Archivos CSS

         // normalize
    wp_enqueue_style('normalize','https://necolas.github.io/normalize.css/8.0.1/normalize.css',array(),'8.0.1');
    // swiper css
  
    wp_enqueue_style('swiper-css','https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css',array(),'9.2.0' );
 

    // lightbox css
    if(is_page('portafolio')){
        wp_enqueue_style('lightboxcss',get_template_directory_uri() . '/css/lightbox.min.css',array(),'2.11.4');
    }
    //styles Globales css
    wp_enqueue_style('style', get_stylesheet_uri(), array('normalize'), '1.0.0');
    //archivos JS
     // lightbox js
    if(is_page('portafolio')){
        wp_enqueue_script('lightboxjs',get_template_directory_uri() . '/js/lightbox.min.js',array('jquery'),'2.11.4',true);
    }
    // swiper js
    if(is_front_page()){
        wp_enqueue_script('swiper-js','https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js',array(),'9.2.0' ,true);
        wp_enqueue_script('anime','https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js',array(),'2.0.2',true);
 
    } 
        wp_enqueue_script('scripts',get_template_directory_uri('swiper-js','anime') . '/js/scripts.js',array(),'1.0.0',true);
    
   
}

add_action('wp_enqueue_scripts', 'cochisweb_scripts_styles');

//Definir zona de widgets

function cochisweb_widgets()
{
    register_sidebar([
        'name' => 'Sidebar 1',
        'id' => 'sidebar_1',
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="text-center text-primary">',
        'after_title' => '</h3">',
    ]);
    register_sidebar([
        'name' => 'Sidebar 2',
        'id' => 'sidebar_2',
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="text-center text-primary">',
        'after_title' => '</h3">',
    ]);
}
add_action('widgets_init', 'cochisweb_widgets');

//  Crear Shortcodes

function cochisweb_ubicacion_shortcode()
{
    ?>
    <div class="mapa">
        <?php
            if(is_page('contacto')){
                the_field('ubicacion');
            }
        ?>
    </div>
    <h2 class="text-center text-primary">
            Formulario de contacto
    </h2>
    <?php
    echo do_shortcode('[contact-form-7 id="78" title="Formulario de contacto 1"]');
}

add_shortcode('cochisweb_ubicacion', 'cochisweb_ubicacion_shortcode');


// Imagenes dinamicas como BG
function cochisweb_hero_imagen(){
// Obtener el id de la pagina
$front_id = get_option('page_on_front');
//obtener imagen
$id_imagen = get_field('hero_imagen',$front_id);
//obtener ruta
$imagen = wp_get_attachment_image_src($id_imagen, 'full' )[0];
// crear css
wp_register_style('custom',false);
wp_enqueue_style('custom');
$imagen_destacada_css = "body.home .header{ background-image: linear-gradient(rgb(0 0 0/ .7),rgb(20 166 206/ .7)), url($imagen);}";

//Intertar css
wp_add_inline_style('custom',$imagen_destacada_css);
}

add_action('init', 'cochisweb_hero_imagen');