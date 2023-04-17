<?php
function cochisweb_lista_lenguajes($cantidad = -1)
{
    ?>
<ul class="listado-grid">
    <?php
    $args = [
        'post_type' => 'cochisweb_lenguajes',
        'posts_per_page' => $cantidad,
    ];
    $lenguajes = new WP_Query($args);
    while ($lenguajes->have_posts()) {
        $lenguajes->the_post(); ?>
        <li class="card">
            <?php the_post_thumbnail('large'); ?>
            <div class="contenido">
                <a href="<?php the_permalink(); ?>">

                    <h3><?php the_title(); ?></h3>
                </a>
                <?php
                $version = get_field('version');
                $compatibles = get_field('lenguajes_compatible');
                ?>

                <p> <?php echo 'Versiones '; ?> = <?php the_field(
     'version'
 ); ?>  <br> Lenguajes compatibles <?php echo $compatibles; ?> </p>
            </div>

        </li>
    <?php
    }
    wp_reset_postdata();?>

 </ul>
        <?php
}

function cochisweb_portafolios()
{
    ?>
    <ul class="listado-grid portafolios">
        <?php
        $args = [
            'post_type' => 'portafolios',
        ];
        $portafolios = new WP_Query($args);
        while ($portafolios->have_posts()) {

            $portafolios->the_post();
            $desarrollo1 = get_field('desarrollo1');
            $imagen = $desarrollo1['imagen']['sizes']['medium_large'];
            $empresa = $desarrollo1['empresa'];
            $link = $desarrollo1['link'];
            ?>
            <li class="portafolio text-center ">
                <center>

                    <?php the_post_thumbnail('large'); ?>
                </center>
                <div class="contenido text-center">
                    <h4 ><?php the_title(); ?></h4>
                    <?php the_content(); ?>
                     
                        <div class="especialidad">
                       
                            <?php
                            $tec = $desarrollo1['tecnologia'];
                            foreach ($tec as $t) { ?>
                                        <span class="etiqueta"> <?php echo esc_html(
                                            $t
                                        ); ?></span>
                            <?php }
                            ?>
                        </div>
                 </div>
            </li>
        <?php
        }
        wp_reset_postdata();?>

    </ul>
    <?php
}

function cochisweb_testimoniales()
{
    ?>
 <ul class="listado-testimoniales  swiper-wrapper">
        <?php
        $args = [
            'post_type' => 'testimoniales',
        ];
        $testimoniales = new WP_Query($args);
        while ($testimoniales->have_posts()) {
            $testimoniales->the_post(); ?>
            <li class="testimonial text-center swiper-slide">
               <blockquote>
                <?php the_content(); ?>
               </blockquote>
               <footer class="testimonial-footer">
                <?php the_post_thumbnail('thumbnail'); ?>
                <p>
                     <?php the_title(); ?>
                </p>
               </footer>
            </li>
          
        <?php
        }
        wp_reset_postdata();?>

    </ul>
<?php
}
?>
