<?php
/*
* Template Name: Listado de Lenguajes

*/

get_header(); ?>
<main class="contenedor seccion  ">


<?php get_template_part('template-parts/pagina'); ?>
  <?php
  cochisweb_lista_lenguajes( );
  ?>
</main>

<?php get_footer(); ?>
