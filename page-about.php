<?php get_header(); ?>
<div class="container-fluid">
  <div class="row">
    <div class="col-xs-12">
      <section class="single-section no-padding-top chat-icon" style="background-image: url(<?php echo get_template_directory_uri() . '/dist/img/chat.png' ?>)">
        <div class="slider full-size line-slider line-slider-padding">
          <div class="slide active">
            <img class="img-responsive" src="<?php echo get_the_post_thumbnail_url($post); ?>"/>
          </div>
          <div class="slide">
            <img class="img-responsive" src="<?php echo get_the_post_thumbnail_url($post); ?>"/>
          </div>
          <div class="slide">
            <img class="img-responsive" src="<?php echo get_the_post_thumbnail_url($post); ?>"/>
          </div>
          <div class="line-slider-lines">
            <span class="active"></span>
            <span></span>
            <span></span>
          </div>
        </div>

        <div id="slick-about-slider" class="slick-slider">
          <div class="slide">
            <img class="img-responsive" src="<?php echo get_the_post_thumbnail_url($post); ?>"/>
          </div>
          <div class="slide">
            <img class="img-responsive" src="<?php echo get_the_post_thumbnail_url($post); ?>"/>
          </div>
          <div class="slide">
            <img class="img-responsive" src="<?php echo get_the_post_thumbnail_url($post); ?>"/>
          </div>
        </div>

        <p class="title about-title">We are a group of people that look cool in photos.</p>
        <div id="about-team">
          <div class="about-team-member">
            <div class="about-image-container">
              <img class="img-responsive" src="http://localhost:8888/SoN/wp-content/uploads/2017/02/3.jpg"/>
            </div>
            <div class="about-team-meta-container">
              <h4 class="about-team-member-name">Leon</h4>
              <p class="about-team-member-title">CEO</p>
              <p class="about-team-member-description">Leon is Inimusap idunto tendellupid ullatiu ntinctibus nobisque et eos rerrum aliquas perovit magnissequiUpiet, incitaqui ditatis voluptius eario erum fugitatur, od ulla vit, con nam quas dicitas dipsapic tesciis dit aut dem exceperum aut eos nihictatur acimusdae doluptam.</p>
            </div>
          </div>
          <div class="about-team-member right">
            <div class="about-image-container">
              <img class="img-responsive" src="http://localhost:8888/SoN/wp-content/uploads/2017/02/2.jpg"/>
            </div>
            <div class="about-team-meta-container">
              <h4 class="about-team-member-name">Koko</h4>
              <p class="about-team-member-title">Designer</p>
              <p class="about-team-member-description">Leon is Inimusap idunto tendellupid ullatiu ntinctibus nobisque et eos rerrum aliquas perovit magnissequiUpiet, incitaqui ditatis voluptius eario erum fugitatur, od ulla vit, con nam quas dicitas dipsapic tesciis dit aut dem exceperum aut eos nihictatur acimusdae doluptam.</p>
            </div>
          </div>
          <div class="about-team-member">
            <div class="about-image-container">
              <img class="img-responsive" src="http://localhost:8888/SoN/wp-content/uploads/2017/02/1.jpg"/>
            </div>
            <div class="about-team-meta-container">
              <h4 class="about-team-member-name">Nick</h4>
              <p class="about-team-member-title">Account Manager</p>
              <p class="about-team-member-description">Leon is Inimusap idunto tendellupid ullatiu ntinctibus nobisque et eos rerrum aliquas perovit magnissequiUpiet, incitaqui ditatis voluptius eario erum fugitatur, od ulla vit, con nam quas dicitas dipsapic tesciis dit aut dem exceperum aut eos nihictatur acimusdae doluptam.</p>
            </div>
          </div>
          <div class="about-team-member right">
            <div class="about-image-container">
              <img class="img-responsive" src="http://localhost:8888/SoN/wp-content/uploads/2017/02/3.jpg"/>
            </div>
            <div class="about-team-meta-container">
              <h4 class="about-team-member-name">Ana</h4>
              <p class="about-team-member-title">Designer</p>
              <p class="about-team-member-description">Leon is Inimusap idunto tendellupid ullatiu ntinctibus nobisque et eos rerrum aliquas perovit magnissequiUpiet, incitaqui ditatis voluptius eario erum fugitatur, od ulla vit, con nam quas dicitas dipsapic tesciis dit aut dem exceperum aut eos nihictatur acimusdae doluptam.</p>
            </div>
          </div>
        </div>
        
      </section>
    </div>
  </div>
</div>
<?php get_footer(); ?>