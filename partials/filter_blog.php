<?php 

parse_str($_SERVER['QUERY_STRING'], $query);
$category = $query['category'];
$pagenum = $query['pagenum'] ? $query['pagenum'] : 1;
$offset = ($pagenum - 1) * 4;

if($_GET['pagenum']){
  $pagenum = $_GET['pagenum'];
}

if($_GET['category']){
  $category = $_GET['category'];
}

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

?>

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
