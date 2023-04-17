<?php
get_header(); ?>
<section class="bienvenida seccion contenedor  text-center">
    <h2 class="text-primary">

      <?php the_field('encabezado_bienvenida'); ?>
    </h2>
   
    <p>
    <?php the_field('texto_bienvenida'); ?>

    </p>
</section>

<section class="codigos">
 
    <?php
    $lenguaje1 = get_field('lenguaje1');
    $imagen = $lenguaje1['imagen']['sizes']['medium_large'];
    $texto = $lenguaje1['texto'];
    if ($imagen !== '' && $texto !== '') { ?>
    <div class="codigo">
        <?php  ?>
        <img  class="ma"  src="<?php echo esc_attr($imagen); ?>" 
             alt=" Imagen <?php echo esc_attr($texto); ?>">
        <p><?php echo esc_html($texto); ?></p>
    </div>
    <?php }
    ?>
    
     <?php
     $lenguaje2 = get_field('lenguaje2');
     $imagen = $lenguaje2['imagen']['sizes']['medium_large'];
     $texto = $lenguaje2['texto'];
     if ($imagen !== '' && $texto !== '') { ?>
    <div class="codigo">
        <?php  ?>
        <img  class="ma"  src="<?php echo esc_attr($imagen); ?>" 
             alt=" Imagen <?php echo esc_attr($texto); ?>">
        <p><?php echo esc_html($texto); ?></p>
    </div>
    <?php }
     ?>
     <?php
     $lenguaje3 = get_field('lenguaje3');
     $imagen = $lenguaje3['imagen']['sizes']['medium_large'];
     $texto = $lenguaje3['texto'];
     if ($imagen !== '' && $texto !== '') { ?>
    <div class="codigo">
        <?php  ?>
        <img  class="ma"  src="<?php echo esc_attr($imagen); ?>" 
             alt=" Imagen <?php echo esc_attr($texto); ?>">
        <p><?php echo esc_html($texto); ?></p>
    </div>
    <?php }
     ?>
     <?php
     $lenguaje4 = get_field('lenguaje4');
     $imagen = $lenguaje4['imagen']['sizes']['medium_large'];
     $texto = $lenguaje4['texto'];
     if ($imagen !== '' && $texto !== '') { ?>
    <div class="codigo">
        <?php  ?>
        <img  class="ma"  src="<?php echo esc_attr($imagen); ?>" 
             alt=" Imagen <?php echo esc_attr($texto); ?>">
        <p><?php echo esc_html($texto); ?></p>
    </div>
    <?php }
     ?>
      
     
</section>
<main class="contenedor seccion">
     
  <h2 class="text-center text-primary "> Nuestros fuertes</h2>
  <?php cochisweb_lista_lenguajes(4); ?>
  <div class="contenedor-boton">
      <a href="<?php echo esc_url(
          get_permalink(get_page_by_title('Lenguajes'))
      ); ?> " class="boton boton-primario">
        Ver todos los lenguajes
      </a>
  </div>
 
</main>

<section class="contenedor seccion">
<h2 class="text-center text-primary">
Nuestros desarrollos
</h2>
<p class="text-center">
Sitios creados por nosotros
</p>
<?php cochisweb_portafolios(); ?>
</section>
<section class="testimoniales">
    <h2 class="testimonial text-center ">Testimoniales</h2>
    <div class="contenedor-testimoniales swiper mySwiper">

        <?php cochisweb_testimoniales(); ?>
     
    </div>
   <div class="swiper-pagination"></div>
</section>


<section class="contenedor seccion">
    <h2 class="text-center text-primary "> Nuestro blog</h2>
    <p class="text-center">
      Conoce mas a fondo nuestro trabajo 
    </p>    
     <ul class="listado-grid ">
        <?php 
        $args = array(
            'post_type'=>'post',
            'posts_per_page'=> 4
        );
        $blog = new WP_Query($args);
        while($blog->have_posts()){
            $blog->the_post(  );
             get_template_part( 'template-parts/blog');
        }
        wp_reset_postdata();
        ?>
     </ul>
</section>

<?php get_footer(); ?>
