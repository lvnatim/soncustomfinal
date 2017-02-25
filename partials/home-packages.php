<?php $args = array(
  'posts_per_page'   => 4,
  'offset'           => 0,
  'category'     => $term_ids,
  'orderby'          => 'date',
  'order'            => 'DESC',
  'include'          => '',
  'exclude'          => '',
  'meta_key'         => '',
  'meta_value'       => '',
  'post_type'        => 'packages',
  'post_mime_type'   => '',
  'post_parent'      => '',
  'author'       => '',
  'author_name'    => '',
  'post_status'      => 'publish',
  'suppress_filters' => true
);

$posts_array = get_posts( $args ); ?>

<?php $post_counter = 1; ?>

<div class="container-fluid">
  <div class="row">
    <div class="col-xs-12">

    <div id="slick-packages-slider" class="slick-slider">
      <?php foreach($posts_array as $post): ?>
        <div class="slide <?php if(is_page('packages')): ?>no-button<?php endif?>">
          <b><?php echo $post->post_title; ?></b>
          <h1><?php echo $post->post_excerpt; ?></h1>
          <p><?php echo $post->post_content; ?></p>
          <p class="package-number"><?php echo $post_counter; ?></p>
        </div>
        <?php $post_counter += 1; ?>
      <?php endforeach ?>
    </div>
    <div id="slick-packages-arrows" class="slick-slider-arrows"></div>
    <?php if(!is_page('packages')): ?>
    <a href="<?php echo get_site_url() . '/packages' ?>" class="button red packages-button">Our Packages.</a>
    <?php endif ?>
    </div>
  </div>
</div>











