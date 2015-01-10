<header class="banner container" role="banner">
  <div class="row">
    <div class="col-lg-12">
      <a class="brand" href="<?php echo home_url('/') ?>"><?php bloginfo('name'); ?></a>
      <nav class="nav-main" role="navigation">
        <?php
          if (has_nav_menu('primary_navigation')) :
            wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav nav-pills'));
          endif;
        ?>
      </nav>
    </div>
  </div>

  <div class="row">
    <div class="header-colour col-lg-3 col-sm-3 header-colour-1"></div>
    <div class="header-colour col-lg-3 col-sm-3 header-colour-2"></div>
    <div class="header-colour col-lg-3 col-sm-3 header-colour-3"></div>
    <div class="header-colour col-lg-3 col-sm-3 header-colour-4"></div>
  </div>
</header>
