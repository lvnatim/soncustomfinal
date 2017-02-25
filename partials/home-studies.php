<?php

$args = array(
  'posts_per_page'   => 1,
  'offset'           => 0,
  'category'         => '',
  'category_name'    => '',
  'orderby'          => 'date',
  'order'            => 'DESC',
  'include'          => '',
  'exclude'          => '',
  'meta_key'         => '',
  'meta_value'       => '',
  'post_type'        => 'studies',
  'post_mime_type'   => '',
  'post_parent'      => '',
  'author'     => '',
  'author_name'    => '',
  'post_status'      => 'publish',
  'suppress_filters' => true 
);
$latest_study = get_posts( $args )[0];

?>

<div class="container-fluid">
<div class="row">
<div class="col-xs-12">
  <section class="single-section more-extra-padding" style="background-image: url('<?php echo get_template_directory_uri() . '/dist/img/background_studies.jpg' ?>')">
    <div class="overlay"></div>
    <p class="quote"><?php echo get_field('quote', $latest_study) ?></p>
    <p>- <?php echo get_field('quote_author', $latest_study) ?>, <b><?php echo $latest_study->post_title ?> / <?php echo get_field('quoted_author_position', $latest_study) ?></b></p>
    <p class="statistic"><?php echo $latest_study->post_content ?></p>
    <a href="<?php echo get_permalink($latest_study) ?>" class="button case-button">View Case Study</a>
  </section>
</div>
</div>
</div>