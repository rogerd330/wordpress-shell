<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <title><?php wp_title('|', true, 'right'); ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo get_template_directory_uri() ?>/assets/img/favicon.ico" type="image/x-icon" rel="icon">
    <link href="<?php echo get_template_directory_uri() ?>/assets/img/favicon.ico" type="image/x-icon" rel="shortcut icon">

  <?php wp_head(); ?>

    <?php $the_page = get_page(get_the_ID()) ?>

    <meta property="og:title" content="<?php echo $the_page->post_title ?>">
    <meta property="og:site_name" content="<?php bloginfo('name') ?>">
    <meta property="og:description" content="<?php bloginfo('description') ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php bloginfo('url') ?>">
    <meta property="og:image" content="<?php echo get_template_directory_uri() ?>/assets/img/logo-opengraph.jpg">

  <link rel="alternate" type="application/rss+xml" title="<?php echo get_bloginfo('name'); ?> Feed" href="<?php echo home_url(); ?>/feed/">
</head>
