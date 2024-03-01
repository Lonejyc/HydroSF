<?php 

add_action('wp_enqueue_scripts', 'load_scripts_and_style');

//Loading scripts and style
function load_scripts_and_style()
{
  $template_directory_uri = get_template_directory_uri();
  wp_enqueue_style('theme-style', $template_directory_uri . '/style.css', [], filemtime(get_template_directory() . '/style.css'));

  if (file_exists(get_template_directory() . '/dist/main.css')) {
    wp_enqueue_style('styles-bundle', $template_directory_uri . '/dist/main.css', [], filemtime(get_template_directory() . '/dist/main.css'));
  }
  
  if (file_exists(get_template_directory() . '/dist/main.js')) {
    wp_enqueue_script('js-bundle', $template_directory_uri . '/dist/main.js', [], filemtime(get_template_directory() . '/dist/main.js'), true);
  }
  
  wp_localize_script('js-bundle', 'WP', array(
    'root' => esc_url_raw(rest_url()),
    'nonce' => wp_create_nonce(),
    'base' => get_site_url(),
    'publicPath' => $template_directory_uri . "/dist/",
  ));
}

function p($args){
  var_dump($args);
}

function d($args){
  p($args);
  die();
}

define('ID_PAGE_DON', 116);
define('ID_PAGE_ACTU', 18);
define('ID_PAGE_ASSO', 14);
define('ID_PAGE_CONTACT', 20);
define('ID_PAGE_HOME', 11);
define('ID_PAGE_PROJECT', 16);

//Add image size
add_image_size('home-img', 648, 800, array('center', 'center'));
add_image_size('art-img', 365, 208, array('center', 'center'));
add_image_size('art-img-full', 648, 853, array('center', 'center'));
add_image_size('art-img-max', 1920, 1080, array('center', 'center'));
add_image_size('art-img-banner', 1312, 302, array('center', 'center'));
add_image_size('home-background-img', 1440, 600, array('center', 'center'));
add_image_size('art-loc-img', 640, 1060, array('center', 'center'));


function weichie_load_more() {
  $ajaxposts = new WP_Query([
    'post_type' => 'post',
    'posts_per_page' => 6,
    'orderby' => 'date',
    'order' => 'DESC',
    'paged' => $_POST['paged'],
  ]);

  $max_pages = $ajaxposts->max_num_pages;
  $articles = $ajaxposts->posts;

  if($ajaxposts->have_posts()) {
    ob_start();
    
    foreach ($articles as $article) : ?>
      <?php 
          $featured_img = get_field('featured_img', $article->ID);
          $short_description = get_field('short_description', $article->ID);
      ?>
      <article class="art">
          <img class="img"
              loading="lazy"
              src="<?php echo ($featured_img['sizes']['art-img']); ?>"
              width="<?php echo ($featured_img['sizes']['art-img-width']); ?>"
              height="<?php echo ($featured_img['sizes']['art-img-height']); ?>"
              alt="<?php echo $featured_img['alt']; ?>"
          >
          <div class="content">
              <h3 class="h3"><?php echo get_the_title($article->ID); ?></h3>
              <div class="paragraph"><?php echo $short_description; ?></div>
              <a href="<?php echo get_permalink($article->ID); ?>" class="btn outline-btn">EN SAVOIR PLUS</a>
          </div>
      </article> 
  <?php endforeach;

    $output = ob_get_contents();
    ob_end_clean();
  } 

  $result = [
    'max' => $max_pages,
    'html' => $output,
  ];

  echo json_encode($result);
  exit;
}
add_action('wp_ajax_weichie_load_more', 'weichie_load_more');
add_action('wp_ajax_nopriv_weichie_load_more', 'weichie_load_more');