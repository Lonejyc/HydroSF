<?php 
    /* Template Name: Article */
    get_header();

    $art_background_img = get_field('art_background_img');
    $art_quote = get_field('art_quote');
    $art_location_title = get_field('art_location_title');
    $art_location_img = get_field('art_location_img');
?>
<?php


$flexible_contents = get_field('content');

foreach ($flexible_contents as $content) {
  $template_name = $content['acf_fc_layout'];
  $template_file = sprintf('%s/layouts/%s.php', get_template_directory(), $template_name);

  if (file_exists($template_file)) {
    
    printf('<section class="layout_%s">', $template_name);
    include($template_file);
    printf('</section>');
  }

}
?>
<main>
    <section>
        <article>
            <img 
                loading="lazy" 
                src="<?php echo ($art_background_img['sizes']['art-img']); ?>"
                width="<?php echo ($art_background_img['sizes']['art-img-width']); ?>"
                height="<?php echo ($art_background_img['sizes']['art-img-height']); ?>"
                alt="<?php echo $art_background_img['alt']; ?>"
            >
            <div class="content">
                <p class="chapo"><?php echo $art_quote ?></p>
                <h2 class="h2"><?php echo $art_location_title ?></h2>
                <img 
                    loading="lazy" 
                    src="<?php echo ($art_location_img['sizes']['art-img']); ?>"
                    width="<?php echo ($art_location_img['sizes']['art-img-width']); ?>"
                    height="<?php echo ($art_location_img['sizes']['art-img-height']); ?>"
                    alt="<?php echo $art_location_img['alt']; ?>"
                >
            </div>
        </article>
    </section>
</main>
<?php
    get_footer();
?>