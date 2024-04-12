<footer>
  <div class="footer-left">
    <a href="<?php echo get_site_url(); ?>" class="logo">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/LogoHSF.png" alt="Logo Hydraulique Sans Frontière" class="footer-logo">
    </a>
    <p class="copyright">Crédits : Jocelyn Marcilloux-Buisson - Johan Vuillerme - Théo Lefloch - Oscar Philippe</p>
  </div>
  <nav class="footer-mid">
    <?php wp_nav_menu(array('menu' => 'Menu-footer')); ?>
    <p class="copyright">© Hydraulique sans frontières 2024</p>
  </nav>
  <div class="footer-right">
      <div class="footer-newsletter">
          <h4 class="h4">ABONNEZ-VOUS À NOTRE NEWSLETTER !</h4>
          <for class="form">
              <input type="text" placeholder="VOTRE EMAIL ICI..." class="input_">
              <button type="submit">S'ABONNER</button>
          </form>
      </div>
      <div class="footer-socials">
        <a href="https://www.facebook.com/hydrauliquesansfrontieres" target="_blank" class="media">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Facebook.svg" alt="Facebook">
        </a>
        <a href="https://www.linkedin.com/company/hydraulique-sans-frontieres-ong/" target="_blank" class="media">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/LinkedIn.svg" alt="Linkedin">
        </a>
        <a href="https://www.instagram.com/hydraulique_sans_frontieres/" target="_blank" class="media">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Instagram.svg" alt="Instagram">
        </a>
        <a href="https://www.youtube.com/@hydrauliquesansfrontieres467" target="_blank" class="media">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Youtube.svg" alt="Youtube">
        </a>
      </div>
    </div>
</footer>
  <?php wp_footer(); ?>
  </body>
</html>
