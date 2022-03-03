<?php get_header('secondary');?>

<section class="page-wrap">
<div class="container ">


<div class="row">
<h1><?php the_title();?></h1>
    <div class="col-6">
    <?php get_template_part('inc/section','content');?>
    </div>
    <div class="col">
    <?php if( is_active_sidebar('blog-sidebar')):?>
                    <?php dynamic_sidebar('blog-sidebar');?>


                <?php endif;?>
                
 
    </div>
    
    <div class="col">
    
            <?php if( is_active_sidebar('page-sidebar')):?>
                    <?php dynamic_sidebar('page-sidebar');?>


                <?php endif;?>

                
     
    
  </div>
</div>
          
            


            
              
</div>
</section>


<?php get_footer();?>