<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
  	<meta charset="utf-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<title><?php wp_title('|', true, 'right'); ?> | <?php bloginfo('description') ?></title>
  	<meta name="viewport" content="width=device-width, initial-scale=1">

  	<?php wp_head(); ?>

  	<link rel="alternate" type="application/rss+xml" title="<?php echo get_bloginfo('name'); ?> Feed" href="<?php echo esc_url(get_feed_link()); ?>">
 
	<link rel="icon" href="favicon.ico" type="image/x-icon" />
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />

	<!-- Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400,500' rel='stylesheet' type='text/css'>
</head>
