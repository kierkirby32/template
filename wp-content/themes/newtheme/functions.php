<?php 
//bootstrap and mainstyle
function load_stylesheets()
{
        wp_register_style('stylesheet',get_template_directory_uri() . '/css/bootstrap1.min.css',
         array(),false,'all');
         wp_enqueue_style('stylesheet');
        
         wp_register_style('main',get_template_directory_uri() . '/css/main.css',
         array(),false,'all');
         wp_enqueue_style('main');
        

        
}
add_action ('wp_enqueue_scripts', 'load_stylesheets');

//jquery function
function include_jquery()

{
        wp_deregister_script('jquery');

        wp_enqueue_script('jquery',get_template_directory_uri() .'/js/jquery-3.6.0.min.js','',1,
        true);
        
        add_action('wp_enqueue_scripts','jquery');


}

add_action('wp_enqueue_scripts','include_jquery');






//js function
function loadjs()
{

        wp_register_script('customjs', get_template_directory_uri(). '/js/bootstrap.min.js','',1,true);
        wp_enqueue_script('customjs');

}
add_action('wp_enqueue_scripts', 'loadjs');

//Theme Options
add_theme_support('responsive-embeds');
add_theme_support('menus');
add_theme_support('post-thumbnails');
add_theme_support('widgets');
add_theme_support('experimental-link-color');     
add_theme_support('custom-spacing');
add_theme_support( 'custom-logo' );

// Menus Functions
register_nav_menus(

        array(

                'top-menu' =>  'Top Menu Location',
                'footer-menu' => 'Footer Menu Location',
                'mobile-menu' =>  'Mobile Menu Location',
        )       
);

	// Custome Image Sizes
add_image_size('blog-large', 800, 400, true);
add_image_size('blog-small', 300, 200, true);




//sidebars

function my_sidebars()
{
        register_sidebar(

                    array (
                            'name' => 'Page Sidebar',
                            'id' => 'page-sidebar',
                            'before_title' => '<h4 class="widget-title">',
                            'after_title' => '</h4>'
                    )    
              );

              register_sidebar(

                array (
                        'name' => 'blog Sidebar',
                        'id' => 'blog-sidebar',
                        'before_title' => '<h4 class="widget-title">',
                        'after_title' => '</h4>'
                )    
          );

}
add_action('widgets_init','my_sidebars');

function  my_first_post_type()

{



        $args = array (

                'labels' =>array(
                        'name'=>'Sliders',
                        'singular_name' =>'Slider',
        ),
            
        'hierarchical' => true,
        'public' => true,
        'has_archive' => true,
        'supports' => array ('title','editor','thumbnail'),
);

register_post_type('slider',$args);
}
add_action('init','my_first_post_type');


function my_first_taxonomy(){

        $args = array (
                'labels' =>array(
                        'name'=>'Categories',
                        'singular_name' =>'Category',
        ),
                
                'public'=> true,
                'hierarchical' => false,

        );

        register_taxonomy('categories',array ('slider'),$args);


}
	


add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

function special_nav_class ($classes, $item) {
  if (in_array('current-menu-item', $classes) ){
    $classes[] = 'active ';
  }
  return $classes;
}

    