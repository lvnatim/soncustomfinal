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
  'post_type'        => 'studies',
  'post_mime_type'   => '',
  'post_parent'      => '',
  'author'       => '',
  'author_name'    => '',
  'post_status'      => 'publish',
  'suppress_filters' => true
);
$posts_array = get_posts( $args ); ?>

<?php get_header(); ?>
<div class="container-fluid">
  <div class="row">
    <div class="col-xs-12">
      <section class="single-section reduce-top chat-icon" style="background-image:url(<?php echo get_template_directory_uri() . '/dist/img/chat.png' ?>">
        <h1>Our Work</h1>
        <p>Whether you are a small business or a large company, we make work that is perfectly tailored to your needs! Here is some of our select work:</p>
        <?php foreach($posts_array as $post):?>
        <div class="post-package post-clickable">
          <a class="post-package-link" href="<?php echo get_permalink($post) ?>">
            <div class="overlay"></div>
            <img class="img-responsive" src="<?php echo get_the_post_thumbnail_url($post); ?>"> 
          </a>
          <div class="post-package-text">
            <p class="title"><?php echo $post->post_title; ?></p>
            <p><?php echo $post->post_content; ?></p>
            <a class="button post-push" href="<?php echo get_permalink($post) ?>">View Project</a>
          </div>
        </div>
        <?php endforeach ?>
      </section>
    </div>
  </div>
</div>
<?php get_footer(); ?>