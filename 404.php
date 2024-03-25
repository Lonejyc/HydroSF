<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon.ico">
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
          <a href="https://www.facebook.com/search/top?q=hydraulique%20sans%20fronti%C3%A8res" target="_blank" class="media">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Facebook.svg" alt="Facebook">
          </a>
          <a href="https://www.linkedin.com/company/hydraulique-sans-frontieres-ong/" target="_blank" class="media">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Linkedin.svg" alt="Linkedin">
          </a>
          <a href="https://www.instagram.com/hydraulique_sans_frontieres/" target="_blank" class="media">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Instagram.svg" alt="Instagram">
          </a>
          <a href="https://www.youtube.com/@hydrauliquesansfrontieres467" target="_blank" class="media">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Youtube.svg" alt="Youtube">
          </a>
        </nav>
        <?php wp_nav_menu(['menu' => 'Menu',
        'container_class' => 'nav-menu',
        'menu_class' => 'nav-menu-list'
        ]); ?>
        <div class="burger">
          <span class="line"></span>
        </div>
      </div>
    </header>
    <main class="error-404">
        <h2>OOPS ! UNE ERREUR EST SURVENUE.</h2>
        <div class="animation">
            <h1 class="h1-404">ERREUR 404</H1>
            <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script> 
            <dotlottie-player class="gif" src="<?php echo get_stylesheet_directory_uri(); ?>/images/error404.lottie" background="transparent" speed="1" loop autoplay></dotlottie-player>
        </div>
    </main>
<?php get_footer(); ?>