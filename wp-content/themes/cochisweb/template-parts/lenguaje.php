<?php
while (have_posts()):
    the_post();
    the_title('<h1 class="text-center text-primary">', '</h1>');
    if (has_post_thumbnail()) {
        the_post_thumbnail('full', ['class' => 'imagen-destacada']);
    }
    

        $version = get_field('version');
        $compatibles = get_field('lenguajes_compatible');
        ?>

                <p class="informacion-lenguaje"> 
                    <?php echo 'Versiones '; ?> = 
                    <?php the_field('version'); ?>
                    <br> 
                    Lenguajes compatibles 
                    <?php echo $compatibles; ?> 
                </p>
                <?php 
                the_content();
                endwhile;
                ?>
