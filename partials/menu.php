<div id="mobile-menu">
  <a href="<?php echo get_site_url(); ?>" class="logo-container">
    <img class="img-responsive" src="<?php echo get_template_directory_uri() . '/dist/img/logo.png' ?>"/>
  </a>
  <div id="hamburger">
    <span></span>
    <span></span>
    <span></span>
  </div>
  <div id="mobile-menu-links-container">
    <a class="mobile-menu-link" href="<?php echo get_site_url() . "/our-work"; ?>">our work</a>
    <a class="mobile-menu-link" href="<?php echo get_site_url() . "/packages"; ?>">packages</a>
    <a class="mobile-menu-link" href="<?php echo get_site_url() . "/about"; ?>">about</a>
    <a class="mobile-menu-link" href="<?php echo get_site_url() . "/blog"; ?>">blog</a>
    <a class="mobile-menu-link" href="<?php echo get_site_url() . "/contact"; ?>">contact</a>
  </div>
  <div class="overlay"></div>
</div>

<div id="menu">
  <a href="<?php echo get_site_url(); ?>" class="logo-container">
    <img class="img-responsive" src="<?php echo get_template_directory_uri() . '/dist/img/logo.png' ?>"/>
  </a>
  <div id="menu-links-container">
    <a class="menu-link <?php if(is_page('our-work')):?>active<?php endif ?>" href="<?php echo get_site_url() . "/our-work"; ?>">our work</a>
    <a class="menu-link <?php if(is_page('packages')):?>active<?php endif ?>"" href="<?php echo get_site_url() . "/package"; ?>">packages</a>
    <a class="menu-link <?php if(is_page('about')):?>active<?php endif ?>"" href="<?php echo get_site_url() . "/about"; ?>">about</a>
    <a class="menu-link <?php if(is_page('blog')):?>active<?php endif ?>"" href="<?php echo get_site_url() . "/blog"; ?>">blog</a>
    <a class="menu-link <?php if(is_page('contact')):?>active<?php endif ?>"" href="<?php echo get_site_url() . "/contact"; ?>">contact</a>
  </div>
</div>