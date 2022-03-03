<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Ducument</title>

        <?php wp_head();?>









    </head>
    <body>
        
<header>

    <div class="container">
        <div class="row">
            <div class="col-sm-9">
                <?php
                    if (is_front_page() && is_home()) : ?>
                        <h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
                    <?php else : ?></h1>
                        <p class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></p>
                    <?php
                    endif;

            
                       $description = get_bloginfo('description', 'display');
                        if ($description || is_customize_preview()) : ?>
                            <p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
                        <?php
                        endif; ?>
    </div>
                    </div>         
                    
                    
<div class="container">
        <div class="row">
            
        <div class="col"> <?php 
        
        wp_nav_menu(
            array(
                'theme_location' => 'top-menu',
                //menu class=> "top bar"
                'menu_class' => 'top-bar',

            )

                

        );
  ?>
    </div>
    </div>


</div>
</div>



</header>
        