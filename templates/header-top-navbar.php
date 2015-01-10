<header class="banner navbar navbar-default navbar-static-top" role="banner">
  <div class="container">
    <div class="navbar-header">
      <!--<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>-->

      <!--<img id="logo" src="<?php bloginfo('template_directory'); ?>/assets/img/logo.png" />-->
      <a class="navbar-brand" id="title" href="<?php echo home_url(); ?>/"><?php echo str_replace("future", '<span id="title-half">future</span>', get_bloginfo('name')); ?></a>
    </div> 

    <nav class="collapse navbar-collapse" role="navigation">
      <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav'));
        endif;
      ?>
    </nav>
  </div>

  <div class="row">
    <div class="header-colour col-xs-3 col-lg-3 col-sm-3 col-md-3 header-colour-1"></div>
    <div class="header-colour col-xs-3 col-lg-3 col-sm-3 col-md-3 header-colour-2"></div>
    <div class="header-colour col-xs-3 col-lg-3 col-sm-3 col-md-3 header-colour-3"></div>
    <div class="header-colour col-xs-3 col-lg-3 col-sm-3 col-md-3 header-colour-4"></div>
  </div>
</header>
