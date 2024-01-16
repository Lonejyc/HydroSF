<?php 
    /* Template Name: Article */
    get_header();
?>
<main>
<?php

$contents = get_field('head_content', get_the_id());

foreach ($contents as $content) {
  $template_name = $content['acf_fc_layout'];
  $template_file = sprintf('%s/layouts/%s.php', get_template_directory(), $template_name);

  if (file_exists($template_file)) {
    
    printf('<section class="layout_%s">', $template_name);
    include($template_file);
    printf('</section>');
  }

}
?>
<?php

$flex_contents = get_field('flex_content', get_the_id());

foreach ($flex_contents as $flex_content) {
  $template_name = $flex_content['acf_fc_layout'];
  $template_file = sprintf('%s/layouts/%s.php', get_template_directory(), $template_name);

  if (file_exists($template_file)) {
    
    printf('<section class="layout_%s">', $template_name);
    include($template_file);
    printf('</section>');
  }

}
?>
</main>
<?php
    get_footer();
?>