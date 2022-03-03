<div class="container">
    

    <?php 
  
  wp_nav_menu(
      array(
          'theme_location' => 'footer-menu',
          //menu class=> "top bar"
          'menu_class' => 'footer-bar',

      )

          

  );
  ?>
    
 
    </div>



<?php wp_footer();?>


</body>
</html>