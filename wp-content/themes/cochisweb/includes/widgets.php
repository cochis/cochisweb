<?php

if (!defined('ABSPATH')) {
    die();
}

class CochisWeb_Lenguajes_Widget extends WP_Widget
{
    function __construct()
    {
        parent::__construct(
            'cochisweb_widget',
            esc_html__('CochisWeb Lenguajes', 'cochisweb'),
            [
                'description' => esc_html__(
                    'Agrega las Lenguajes como Widget',
                    'cochisweb'
                ),
            ]
        );
    }

    public function widget($args, $instance)
    {
         ?>
            <ul class="lenguajes-sidebar">
                <?php
                
                 $args = [
                    'post_type' => 'cochisweb_lenguajes',
                    'posts_per_page' => $instance['cantidad'],
                    // 'order'=> 'ASC',
                    'orderby'=>'rand'
                ];
                 $lenguajes = new WP_Query($args);
                 while ($lenguajes->have_posts()) {
                $lenguajes->the_post();
                ?>
                <li>
                    <div class="imagen">
                        <?php the_post_thumbnail('thumbnail'); ?>

                    </div>
                    <div class="contenido-lenguaje">

                     <a href="<?php the_permalink(); ?>">

                    <h3><?php the_title(); ?></h3>
                </a>
                <?php
                $version = get_field('version');
                $compatibles = get_field('lenguajes_compatible');
                ?>

                <p> 
                    <?php  echo "Versiones "  ?> = <?php the_field('version');?>  
                    <br> 
                    Lenguajes compatibles <?php echo $compatibles;?> 
                </p>
                    </div>
                </li>
                <?php



                 }
                 wp_reset_postdata();
                ?>

            </ul>
         <?php  
    }

    public function form($instance)
    {
        $cantidad = !empty($instance['cantidad'])
            ? $instance['cantidad']
            : esc_html('¿Cuantos lenguajes deseas mostrar?'); ?>  
        <p>
            <label for="<?php echo esc_attr( $this->get_field_id('cantidad') ); ?>">
            <?php esc_attr_e('¿Cuantos lenguajes deseas mostrar?'); ?>
            </label>
            <input 
            class="widefat"
            type="number" 
            id="<?php echo esc_attr( $this->get_field_id('cantidad') ); ?>"
            name="<?php echo esc_attr( $this->get_field_name('cantidad') ); ?>"
            value="<?php echo esc_attr($cantidad); ?>"
            
            >
        </p>
        <?php
    }

    public function update($new_instance, $old_instance)
    {

        $instance = array();
        $instance['cantidad'] = (!empty($new_instance['cantidad'])) ? 
        sanitize_text_field($new_instance['cantidad']) :
        '';
        return $instance;
    }
}

function cochisweb_registrar_widget()
{
    register_widget('CochisWeb_Lenguajes_Widget');
}
add_action('widgets_init', 'cochisweb_registrar_widget');
