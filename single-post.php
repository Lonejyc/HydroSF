<?php 
    /* Template Name: Article */
    get_header();
?>
<main>
<?php

$contents = get_field('head_content', get_the_id());

if(!empty($contents)) {
  foreach ($contents as $content) {
    $template_name = $content['acf_fc_layout'];
    $template_file = sprintf('%s/layouts/%s.php', get_template_directory(), $template_name);

    if (file_exists($template_file)) {
      
      printf('<section class="layout_%s">', $template_name);
      include($template_file);
      printf('</section>');
    }
  }
}
?>
<?php

$flex_contents = get_field('flex_content', get_the_id());

if(!empty($flex_contents)) {
  foreach ($flex_contents as $flex_content) {
    $template_name = $flex_content['acf_fc_layout'];
    $template_file = sprintf('%s/layouts/%s.php', get_template_directory(), $template_name);

    if (file_exists($template_file)) {
      
      printf('<section class="layout_%s">', $template_name);
      include($template_file);
      printf('</section>');
    }
  }
}
?>
<?php 
  $helloasso_link = get_field('helloasso_link', get_the_id());
  if(!empty($helloasso_link)) {
?>
  <div class="helloasso">
    <a href="<?php echo $helloasso_link; ?>" class="btn">SOUTENIR <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Heart.svg" alt="Coeur"></a>
  </div>
<?php
  }
?>
 </main>
<?php
    get_footer();
?>