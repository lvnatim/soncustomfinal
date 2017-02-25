<?php

add_filter('user_contactmethods', 'my_user_contactmethods');

function my_user_contactmethods($user_contactmethods){
  $user_contactmethods['twitter'] = 'Twitter Username';
  $user_contactmethods['facebook'] = 'Facebook Username';
  $user_contactmethods['linkedin'] = 'Linkedin Username';
  return $user_contactmethods;
}

function register_custom_clients_and_taxonomies(){
  $labels = array(
    'name'          =>  'Packages',
    'singular_name' =>  'Package',
    'add_new'       =>  _x('Add New Package', 'Package'),
    'add_new_item'  =>  'Add Package',
    'edit_item'     =>  'Edit Package',
    'new_item'      =>  'New Package',
    'view_item'     =>  'View Package',
    'search_items'  =>  'Search Packages',
    'not_found'     =>  'No Packages Found',
    'not_found_in_trash' => 'No Packages found in Trash',
    'all_items'     =>  'View All Packages',
    'archives'      =>  'Packages',
    'insert_into_item'  =>  'Insert Into Package\'s Details',
    'uploaded_to_this_item' => 'Uploaded to this Package\'s Details',
    'menu_name'     =>  'Packages',
    'name_admin_bar'=>  'Packages'
  );

  register_post_type('packages',
    array(
      'description' => 'Packages available for clients',
      'has_archive' => false,
      'labels'      => $labels,
      'menu_position' => 4,
      'public'      => true,
      'publicly_queryable' =>true,
      'rewrite'     => array(
        'slug'      => 'packages'
        ),
      'supports'    => array(
        'title',
        'editor',
        'thumbnail',
        'excerpt',
        'custom-fields',
        ),
      'show_ui'     => true,
    )
  );

  $labels = array(
    'name'          =>  'Case Studies',
    'singular_name' =>  'Case Study',
    'add_new'       =>  _x('Add New Case Study', 'Case Study'),
    'add_new_item'  =>  'Add Case Study',
    'edit_item'     =>  'Edit Case Study',
    'new_item'      =>  'New Case Study',
    'view_item'     =>  'View Case Studies',
    'search_items'  =>  'Search Portfolio',
    'not_found'     =>  'No Case Study Found',
    'not_found_in_trash' => 'No Case Studies found in Trash',
    'all_items'     =>  'View All Case Studies',
    'archives'      =>  'Portfolio',
    'insert_into_item'  =>  'Insert Into Case Study',
    'uploaded_to_this_item' => 'Uploaded to this Case Study',
    'menu_name'     =>  'Portfolio',
    'name_admin_bar'=>  'Portfolio'
  );

  register_post_type('studies',
    array(
      'description' => 'Portfolio for all the case studies',
      'has_archive' => false,
      'labels'      => $labels,
      'menu_position' => 5,
      'public'      => true,
      'publicly_queryable' =>true,
      'rewrite'     => array(
        'slug'      => 'case-studies'
        ),
      'supports'    => array(
        'title',
        'editor',
        'thumbnail',
        'excerpt',
        'custom-fields',
        ),
      'show_ui'     => true,
    )
  );

  $labels = array(
    'name'              => _x( 'Services', 'taxonomy general name', 'textdomain' ),
    'singular_name'     => _x( 'Service', 'taxonomy singular name', 'textdomain' ),
    'search_items'      => __( 'Search Services', 'textdomain' ),
    'all_items'         => __( 'All Services', 'textdomain' ),
    'parent_item'       => __( 'Parent Service', 'textdomain' ),
    'parent_item_colon' => __( 'Parent Service:', 'textdomain' ),
    'edit_item'         => __( 'Edit Service', 'textdomain' ),
    'update_item'       => __( 'Update Service', 'textdomain' ),
    'add_new_item'      => __( 'Add New Service', 'textdomain' ),
    'new_item_name'     => __( 'New Service Name', 'textdomain' ),
    'menu_name'         => __( 'Services', 'textdomain' ),
  );

  $args = array(
    'hierarchical'      => true,
    'labels'            => $labels,
    'show_ui'           => true,
    'show_admin_column' => true,
    'query_var'         => true,
    'rewrite'           => array( 'slug' => 'services' ),
  );

  register_taxonomy( 'services', array( 'studies' ), $args );

  add_theme_support( 'post-thumbnails' );

}

function asset_pipeline(){
  wp_enqueue_style('bootstrap', get_template_directory_uri() . '/dist/bootstrap/css/bootstrap.css');
  wp_enqueue_style('style', get_stylesheet_uri());
  wp_enqueue_style('slick', get_template_directory_uri() . '/dist/js/slick/slick.css');
  wp_enqueue_style('slick-theme', get_template_directory_uri() . '/dist/js/slick/slick-theme.css');
  wp_register_script('slick', get_template_directory_uri() . '/dist/js/slick/slick.js', array('jquery'), null, true);
  wp_register_script('index', get_template_directory_uri() . '/dist/js/index.js', array('jquery'), null, true);
  wp_localize_script( 'index', 'my_ajax_object', array( 'ajax_url' => admin_url( 'admin-ajax.php' ) ) );
  wp_enqueue_script('slick');
  wp_enqueue_script('index');
}

function remove_admin_login_header() {
  remove_action('wp_head', '_admin_bar_bump_cb');
}

function filter_blog(){
  $template = get_template_part( 'partials/filter_blog', 'filter_blog');
  echo $template;
  die();
}


add_action('init', 'register_custom_clients_and_taxonomies');
add_action('get_header', 'remove_admin_login_header');
add_action( 'wp_enqueue_scripts', 'asset_pipeline' );
add_action( 'wp_ajax_filter_blog', 'filter_blog');
add_action( 'wp_ajax_nopriv_filter_blog', 'filter_blog');

?>