<footer class="footer contenedor">
   <hr>
   <div class="contenido-footer">
      <?php
      $args = [
          'theme_location' => 'menu-principal',
          'container' => 'nav',
          'contaniner_class' => 'menu-principal',
      ];
      wp_nav_menu($args);
      ?>
      <p class="copyright">
         &copy;   <?php echo get_bloginfo('name')?> . Todos los derechos reservados.
             
           <?php date('Y'); ?> 
      </p>
   </div>
</footer>
<?php wp_footer();?>
</body>
</html>