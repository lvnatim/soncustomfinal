<?php

$args = array(
  'posts_per_page'   => 5,
  'offset'           => 0,
  'category'         => '',
  'category_name'    => '',
  'orderby'          => 'date',
  'order'            => 'DESC',
  'include'          => '',
  'exclude'          => '',
  'meta_key'         => '',
  'meta_value'       => '',
  'post_type'        => 'post',
  'post_mime_type'   => '',
  'post_parent'      => '',
  'author'     => '',
  'author_name'    => '',
  'post_status'      => 'publish',
  'suppress_filters' => true 
);
$blog_posts_array = get_posts( $args );

?>

<div class="container-fluid">
<div class="row">
<div class="col-xs-12">
  <section class="white-background">
    <h1 class="title">Brain Food<small> (Our Blog)</small></h1>
    <div id="slick-blog-slider" class="slick-slider">
      <?php foreach($blog_posts_array as $blog_post): ?>
        <div class="slick-slide">
          <a href="<?php echo get_permalink($blog_post); ?>">
            <img class="img-responsive" src="<?php echo get_the_post_thumbnail_url($blog_post); ?>"/>
          </a>
          <div>
            <b><?php echo $blog_post->post_title ?></b>
            <p class="always-full-width"><?php echo get_the_date('', $post) ?></p>
          </div>
        </div>
      <?php endforeach ?>
    </div>
    <div id="slick-blog-arrows" class="slick-slider-arrows"></div>

  </section>
</div>
</div>
</div>