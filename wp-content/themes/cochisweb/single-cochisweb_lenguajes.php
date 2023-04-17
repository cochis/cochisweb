<?php
get_header(); ?>
<main class="contenedor seccion con-sidebar">
    <section class="contenido-principal">

        <?php get_template_part('template-parts/lenguaje'); ?>
    </section>
      <?php get_sidebar('lenguajes'); ?>
</main>
<?php get_footer(); ?>
