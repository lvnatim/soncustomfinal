<?php get_header(); ?>
<div class="container-fluid">
  <div class="row">
    <div class="col-xs-12">
      <section class="single-section">
        <img class="background-image img-responsive" src="<?php echo get_the_post_thumbnail_url($post); ?>"/>
        <div class="overlay overflow"></div>
        <h1><?php echo $post->post_title; ?></h1>
        <p class="bigger"><?php echo $post->post_content; ?></p>
      </section>
      <section class="white-background single-section more-extra-padding no-padding-bottom">
        <div class="tablet-50">
        <p class="title">The Gains</p>
        <ul>
          <?php if(get_field('gain_one')): ?><li><?php the_field('gain_one') ?></li><?php endif ?>
          <?php if(get_field('gain_two')): ?><li><?php the_field('gain_two') ?></li><?php endif ?>
          <?php if(get_field('gain_three')): ?><li><?php the_field('gain_three') ?></li><?php endif ?>
          <?php if(get_field('gain_four')): ?><li><?php the_field('gain_four') ?></li><?php endif ?>
          <?php if(get_field('gain_five')): ?><li><?php the_field('gain_five') ?></li><?php endif ?>
        </ul>
        <br>
        </div>
        <div class="tablet-50">
        <p class="title">The Social Media</p>
        <div class="align-row no-center">
          <?php if(get_field('facebook_url')): ?>
          <a href="<?php the_field('facebook_url') ?>" class="icon">
            <img class="img-responsive svg" src="<?php echo get_template_directory_uri() . '/dist/icons/facebook.svg' ?>"/>
          </a>
          <?php endif ?>
          <?php if(get_field('instagram_url')): ?>
          <a href="<?php the_field('instagram_url') ?>" class="icon">
            <img class="img-responsive svg" src="<?php echo get_template_directory_uri() . '/dist/icons/instagram.svg' ?>"/>
          </a>
          <?php endif ?>
          <?php if(get_field('twitter_url')): ?>
          <a href="<?php the_field('twitter_url') ?>" class="icon">
            <img class="img-responsive svg" src="<?php echo get_template_directory_uri() . '/dist/icons/twitter.svg' ?>"/>
          </a>
          <?php endif ?>
          <?php if(get_field('linkedin_url')): ?>
          <a href="<?php the_field('linkedin_url') ?>" class="icon">
            <img class="img-responsive svg" src="<?php echo get_template_directory_uri() . '/dist/icons/linkedin.svg' ?>"/>
          </a>
          <?php endif ?>
          <?php if(get_field('pinterest_url')): ?>
          <a href="<?php the_field('pinterest_url') ?>" class="icon">
            <img class="img-responsive svg" src="<?php echo get_template_directory_uri() . '/dist/icons/pinterest.svg' ?>"/>
          </a>
          <?php endif ?>
        </div>
        </div>
        <br>
        <p class="title extra-margin always-full-width">How do you promote a business that just started with zero followers and something?</p>

        <div id="slick-about-slider" class="slick-slider">
          <?php if(get_field('slide_one')): ?>
            <div class="slide">
              <div class="image-container">
                <img class="img-responsive" src="<?php echo get_field('slide_one'); ?>"/>
              </div>
              <div class="slider-text-container red-background">
                <p class="always-full-width"><?php echo get_field('slide_one_description'); ?></p>
              </div>
            </div>
            <?php endif ?>
            <?php if(get_field('slide_two')): ?>
            <div class="slide">
              <div class="image-container">
                <img class="img-responsive" src="<?php echo get_field('slide_two'); ?>"/>
              </div>
              <div class="slider-text-container red-background">
                <p class="always-full-width"><?php echo get_field('slide_two_description'); ?></p>
              </div>
            </div>
            <?php endif ?>
            <?php if(get_field('slide_three')): ?>
            <div class="slide">
              <div class="image-container">
                <img class="img-responsive" src="<?php echo get_field('slide_three'); ?>"/>
              </div>
              <div class="slider-text-container red-background">
                <p class="always-full-width"><?php echo get_field('slide_three_description'); ?></p>
              </div>
            </div>
            <?php endif ?>
            <?php if(get_field('slide_four')): ?>
            <div class="slide">
              <div class="image-container">
                <img class="img-responsive" src="<?php echo get_field('slide_four'); ?>"/>
              </div>
              <div class="slider-text-container red-background">
                <p class="always-full-width"><?php echo get_field('slide_four_description'); ?></p>
              </div>
            </div>
            <?php endif ?>
            <?php if(get_field('slide_five')): ?>
            <div class="slide">
              <div class="image-container">
                <img class="img-responsive" src="<?php echo get_field('slide_five'); ?>"/>
              </div>
              <div class="slider-text-container red-background">
                <p class="always-full-width"><?php echo get_field('slide_five_description'); ?></p>
              </div>
            </div>
            <?php endif ?>
        </div>

        <div class="slider full-size line-slider red-line-slider">
          <?php if(get_field('slide_one')): ?>
          <div class="slide active">
            <div class="image-container">
              <img class="img-responsive" src="<?php echo get_field('slide_one'); ?>"/>
            </div>
            <div class="slider-text-container red-background">
              <p class="always-full-width"><?php echo get_field('slide_one_description'); ?></p>
            </div>
          </div>
          <?php endif ?>
          <?php if(get_field('slide_two')): ?>
          <div class="slide">
            <div class="image-container">
              <img class="img-responsive" src="<?php echo get_field('slide_two'); ?>"/>
            </div>
            <div class="slider-text-container red-background">
              <p class="always-full-width"><?php echo get_field('slide_two_description'); ?></p>
            </div>
          </div>
          <?php endif ?>
          <?php if(get_field('slide_three')): ?>
          <div class="slide">
            <div class="image-container">
              <img class="img-responsive" src="<?php echo get_field('slide_three'); ?>"/>
            </div>
            <div class="slider-text-container red-background">
              <p class="always-full-width"><?php echo get_field('slide_three_description'); ?></p>
            </div>
          </div>
          <?php endif ?>
          <?php if(get_field('slide_four')): ?>
          <div class="slide">
            <div class="image-container">
              <img class="img-responsive" src="<?php echo get_field('slide_four'); ?>"/>
            </div>
            <div class="slider-text-container red-background">
              <p class="always-full-width"><?php echo get_field('slide_four_description'); ?></p>
            </div>
          </div>
          <?php endif ?>
          <?php if(get_field('slide_five')): ?>
          <div class="slide">
            <div class="image-container">
              <img class="img-responsive" src="<?php echo get_field('slide_five'); ?>"/>
            </div>
            <div class="slider-text-container red-background">
              <p class="always-full-width"><?php echo get_field('slide_five_description'); ?></p>
            </div>
          </div>
          <?php endif ?>
          <div class="line-slider-lines">
            <?php if(get_field('slide_one')): ?><span class="active"></span><?endif?>
            <?php if(get_field('slide_two')): ?><span></span><?endif?>
            <?php if(get_field('slide_three')): ?><span></span><?endif?>
            <?php if(get_field('slide_four')): ?><span></span><?endif?>
            <?php if(get_field('slide_five')): ?><span></span><?endif?>
          </div>
        </div>
      </section>

      <section class="single-section" style="background-image: url(<?php echo get_the_post_thumbnail_url($post); ?>) ">
        <div class="overlay"></div>
        <p class="quote always-full-width pseudo-text-align">I couldn’t be happier with the work done by Social or Nothing. They understood my product and market right away, and it showed in all of my social media. My following has never been bigger!</p>
        <p class="always-full-width pseudo-text-align">- Rebecca Rochon, <b>Coffee Time / CEO</b></p>
      </section>

      <?php $prev_post = get_previous_post() ? get_previous_post(): get_posts(array('post_type' => 'studies','numberposts' => 1,))[0] ?>
      <?php $next_post = get_next_post() ? get_next_post(): get_posts(array('post_type' => 'studies','numberposts' => 1, 'order' => 'ASC'))[0]; ?>

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

    </div>
  </div>
</div>
<?php get_footer(); ?>