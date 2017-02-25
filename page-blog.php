<?php get_header(); ?>

<?php 

parse_str($_SERVER['QUERY_STRING'], $query);
$category = $query['category'];
$pagenum = $query['pagenum'] ? $query['pagenum'] : 1;
$offset = ($pagenum - 1) * 4;

$args = array(
  'posts_per_page'   => '',
  'offset'           => '',
  'category'         => $category,
  'orderby'          => 'date',
  'order'            => 'DESC',
  'include'          => '',
  'exclude'          => '',
  'meta_key'         => '',
  'meta_value'       => '',
  'post_type'        => 'post',
  'post_mime_type'   => '',
  'post_parent'      => '',
  'author'           => '',
  'author_name'      => '',
  'post_status'      => 'publish',
  'suppress_filters' => true
);

$posts_array = get_posts($args);

$displayed_posts = array_slice($posts_array, $offset, 4); 
$total_posts = ceil(count($posts_array) / 4.0) ;
$categories = get_categories(
  array(
    'orderby' => 'name',
    'order'   => 'ASC'
  )
);

$next_query_str = '';
$prev_query_str = '';

if($pagenum < $total_posts && $pagenum > 0){
  $page_num_str = '?pagenum=' . ($pagenum + 1); 
  $category_query_str = $category ? '&category=' . $category : '';
  $next_query_str = $page_num_str . $category_query_str;
}

if($pagenum <= $total_posts && $pagenum > 1){
  $page_num_str = '?pagenum=' . ($pagenum - 1); 
  $category_query_str = $category ? '&category=' . $category : '';
  $prev_query_str = $page_num_str . $category_query_str;
}

?>

<div class="container-fluid">
  <div class="row">
    <div class="col-xs-12">
      <section class="single-section blog-section reduce-top">
        <div class="blog-header">
          <h1>Brain Food</h1>
          <div>
            <div class="category-selector">
              <div id="hamburger">
                <span></span>
                <span></span>
                <span></span>
              </div>
              <?php $category = $query['category']; ?>
              <?php if (get_cat_name($category)): ?>
                  <p id="categoryname"><?php echo get_cat_name($category);?></p>
              <?php else: ?>
                  <p id="categoryname">Category</p>
              <?php endif ?>
              <div class="arrow-container">
                <img class="img-responsive down svg arrow" src="<?php echo get_template_directory_uri() . '/dist/icons/arrow.svg' ?>"/>
              </div>
            </div>

            <ul class="category-dropdown">
              <a href="?category=0" class="filter-blog" data-category="0">All Categories</a>
              <?php foreach($categories as $category):?>
              <a href="?category=<?php echo $category->term_id ?>" data-category="<?php echo $category->term_id ?>" class="filter-blog"><?php echo $category->name ?></a>
              <?php endforeach ?>
            </ul>
          </div>
        </div>

        <div id="post-blog-container" class="post-blog-container">
        <?php foreach($displayed_posts as $post):?>
          <?php $terms = get_the_category($post->ID) ?>
          <div class="post-blog post-clickable">
            <span class="date"><?php echo the_time('F jS, Y');?></span>
            <a>
              <img class="img-responsive" src="<?php echo get_the_post_thumbnail_url($post->ID) ?>">
            </a>
            <div class="text-container">
              <p><?php echo the_time('F jS, Y');?></p>
              <h2><?php echo $post->post_title; ?></h2>
              <div class="term-container">
                <?php foreach($terms as $term):?>
                  <span><?php echo $term->name; ?></span>
                <?php endforeach ?>
              </div>
              <?php echo apply_filters( 'the_content', wp_trim_words( strip_tags( $post->post_content ), 40 ) ); ?>
              <a class="button post-push" href="<?php echo get_permalink($post->ID) ?>">Read More</a>
            </div>
          </div>
        <?php endforeach ?>
          <div class="pagination">
            <a href="<?php echo $prev_query_str; ?>" class="pagination-arrow pagebackward filter-blog">
              <img class="img-responsive left svg red arrow" src="<?php echo get_template_directory_uri() . '/dist/icons/arrow.svg' ?>"/>
            </a>
            <p>
            <span id="curpage"><?php echo $pagenum ?></span> / 
            <span id="maxpage"><?php echo $total_posts ?></span> 
            </p>
            <a href="<?php echo $next_query_str; ?>" class="pagination-arrow pageforward filter-blog">
              <img class="img-responsive right svg red arrow" src="<?php echo get_template_directory_uri() . '/dist/icons/arrow.svg' ?>"/>
            </a>
          </div>
        </div>
      </section>
    </div>
  </div>
</div>

<?php get_footer(); ?>