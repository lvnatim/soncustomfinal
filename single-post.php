<?php get_header(); ?>

<?php $terms = get_the_category($post->ID) ?>

<?php $args = array(
  'posts_per_page'   => 4,
  'offset'           => 0,
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
$posts_array = get_posts( $args );
$author_id = get_post_field( 'post_author', $post_id );
?>

<div class="container-fluid">
  <div class="row">
    <div class="col-xs-12">

      <section class="single-section blog-section">

        <div class="blog-post-meta">
          <div class="blog-post-main-container">
            <div class="blog-post-meta-container">
              <b class="date"><?php echo the_time('F jS, Y') ?></b>
              <h1><?php echo the_title(); ?></h1>
              <b class="author">By <?php echo the_author_meta('first_name', $author_id) ?> <?php echo the_author_meta('last_name', $author_id) ?></b>
            </div>
            <img class="img-responsive" src="<?php echo get_the_post_thumbnail_url($post->ID) ?>"/>
          </div>
        </div>

        <div class="blog-post-content">
          <div class="desktop-icons">
            <img class="icon img-responsive svg" src="<?php echo get_template_directory_uri() . '/dist/icons/twitter.svg' ?>">
            <img class="icon img-responsive svg" src="<?php echo get_template_directory_uri() . '/dist/icons/twitter.svg' ?>">
            <img class="icon img-responsive svg" src="<?php echo get_template_directory_uri() . '/dist/icons/twitter.svg' ?>">
          </div>
          <div class="mobile-icons">
            <img class="icon img-responsive svg" src="<?php echo get_template_directory_uri() . '/dist/icons/twitter.svg' ?>">
            <img class="icon img-responsive svg" src="<?php echo get_template_directory_uri() . '/dist/icons/twitter.svg' ?>">
            <img class="icon img-responsive svg" src="<?php echo get_template_directory_uri() . '/dist/icons/twitter.svg' ?>">
          </div>





          <div class="term-container">
            <?php foreach($terms as $term):?>
            <span><?php echo $term->name; ?></span>
            <?php endforeach ?>
          </div>
          <p><?php echo apply_filters("the_content", $post->post_content) ?></p>
        </div>

        <div class="blog-footer">
          <div class="blog-post-author-info">
            <p class="title">About the Author</p>
            <div class="author-col-left">
              <?php echo get_avatar($author_id) ?>
            </div>

            <div class="author-col-right">
              <b><?php echo the_author_meta('first_name', $author_id) ?> <?php echo the_author_meta('last_name', $author_id) ?></b>
              <p><?php echo the_author_meta('description', $author_id) ?></p>

              <div class="author-social-media">
                <a class="icon" href="">
                  <img class="img-responsive icon svg" src="<?php echo get_template_directory_uri() . '/dist/icons/twitter.svg' ?>"/>
                </a>
                <b><?php echo the_author_meta('twitter', $author_id) ?></b>
              </div>

              <div class="author-social-media">
                <a class="icon" href="">
                  <img class="img-responsive icon svg" src="<?php echo get_template_directory_uri() . '/dist/icons/linkedin.svg' ?>"/>
                </a>
                <b><?php echo the_author_meta('linkedin', $author_id) ?></b>
              </div>

            </div>
          </div>

          <div class="blog-post-subscribe-form">
            <b>Subscribe for Blog Updates</b>
            <div class="input-container">
              <input type="text" placeholder="email"/>
              <div class="button-div">
                <button class="submit">&#9658;</button>
              </div>
            </div>
          </div>

          <?php comments_template(); ?>

        </div>

        <?php $prev_post = get_previous_post() ? get_previous_post(): get_posts(array('post_type' => 'post','numberposts' => 1,))[0] ?>
        <?php $next_post = get_next_post() ? get_next_post(): get_posts(array('post_type' => 'post','numberposts' => 1, 'order' => 'ASC'))[0]; ?>

        <div class="navigation">
        <a 
          href="<?php echo get_permalink($prev_post) ?>" 
          class="previous" 
          style="background-image:url(<?php echo get_the_post_thumbnail_url($prev_post) ?>)"
        >
          <div class="overlay">
            <b>Previous Project</b>
            <p><?php echo $prev_post->post_title ?></p>
          </div>
          <img class="img-responsive arrow left svg" src="<?php echo get_template_directory_uri() . '/dist/icons/arrow.svg' ?>"/>prev
        </a>
        <a 
          href="<?php echo get_permalink($next_post) ?>" 
          class="next"
          style="background-image:url(<?php echo get_the_post_thumbnail_url($next_post) ?>)"
        >
          <div class="overlay">
            <b>Next Project</b>
            <p><?php echo $next_post->post_title ?></p>
          </div>
          next
          <img class="img-responsive arrow right svg" src="<?php echo get_template_directory_uri() . '/dist/icons/arrow.svg' ?>"/>

        </a>
      </div>
      </section>
    
    </div>
  </div>
</div>

<?php get_footer(); ?>