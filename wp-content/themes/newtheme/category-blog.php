<?php get_header();?>
<section class="page-wrap">
<div class="container">

<section class="row">

<div class="col-6">

          
          <div class="container">
          <h1><?php single_cat_title();?></h1>
          

            <?php get_template_part('inc/section','archive');?>
            
            <?php
global $wp_query;

$big = 999999999; // need an unlikely integer

echo paginate_links( array(
    'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
    'format' => '?paged=%#%',
    'current' => max( 1, get_query_var('paged') ),
    'total' => $wp_query->max_num_pages
) );
?>
            
            
           
        </div>
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
        
        </section>
        
    
    
    
    </div>
    
    
</section>

<?php get_footer();?>