<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <link
      rel="stylesheet"
      href="node_modules/keen-slider/keen-slider.min.css"
    />
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
  </head>
  <body>
    <header>
      <div class="container">
        <div class="logo">
          <a href="<?php echo get_site_url(); ?>" class="logo-img">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/LogoHSF.png" alt="Logo Hydraulique Sans Frontière">
          </a>
        </div>
        <nav class="medias">
          <a href="https://www.facebook.com/hydrauliquesansfrontieres/" target="_blank" class="media">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Facebook.svg" alt="Facebook">
          </a>
          <a href="https://www.linkedin.com/company/hydraulique-sans-fronti-res/" target="_blank" class="media">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Linkedin.svg" alt="Linkedin">
          </a>
          <a href="instagram/HSF" target="_blank" class="media">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Instagram.svg" alt="Instagram">
          </a>
          <a href="https://www.youtube.com/channel/UCZQX6Z6Z2X6Z6Z2X6Z6Z2Xw" target="_blank" class="media">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Youtube.svg" alt="Youtube">
          </a>
        </nav>
        <nav class="nav">
          <?php wp_nav_menu(array('menu' => 'Menu')); ?>
        </nav>
      </div>
      <?php if(!is_front_page()) : ?>
      <div class="header-bot">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/motif-header.svg" alt="Motif pour le header">
        <nav class="breadcrumb">
          <?php
            $ancestors = array_reverse(get_post_ancestors($post->ID));
          ?>
          <a href="<?php echo get_site_url(); ?>">ACCUEIL</a>
          <?php foreach($ancestors as $ancestor): ?>
            <?php $ancestor_post = get_post($ancestor); ?>
            <span>></span>
            <a href="<?php echo(get_permalink($ancestor_post->ID)); ?>"><?php echo($ancestor_post->post_title); ?></a>
          <?php endforeach; ?>
          <span>></span>
          <a href=""><?php echo($post->post_title); ?></a>
        </nav>
        <h1 class="h1"><?php the_title(); ?></h1>
        <div class="headband"></div>
      </div>
      <?php endif; ?>
    </header>