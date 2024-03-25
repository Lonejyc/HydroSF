<?php 
    /* Template Name: Don */
    get_header();

    $progress_articles = get_posts([
        'posts_per_page'    => 3,
        'post_type'     => 'post',
        'meta_key'      => 'state',
        'meta_value'    => 'in_progress'
    ]);

    $img = get_field('img');
    $title = get_field('title');
    $paragraph = get_field('paragraph');
    $link = get_field('link');

?>
<main>
    <section class="now">
        <h2 class="h2">Ces projets ont besoin de vous !</h2>
        <div class="projects-show">
            <?php foreach ($progress_articles as $p_article) : ?>
                <?php 
                    $featured_img = get_field('featured_img', $p_article->ID);
                    $short_description = get_field('short_description', $p_article->ID);
                    $helloasso_link = get_field('helloasso_link', $p_article->ID);
                ?>
                <article class="project-show art">
                    <img class="img"
                        loading="lazy"
                        src="<?php echo ($featured_img['sizes']['art-img']); ?>"
                        width="<?php echo ($featured_img['sizes']['art-img-width']); ?>"
                        height="<?php echo ($featured_img['sizes']['art-img-height']); ?>"
                        alt="<?php echo $featured_img['alt']; ?>"
                    >
                    <div class="content">
                        <h3 class="h3"><?php echo get_the_title($p_article->ID); ?></h3>
                        <div class="paragraph"><?php echo $short_description; ?></div>
                        <div class="buttons">
                            <a href="<?php echo get_permalink($p_article->ID); ?>" class="btn outline-btn">EN SAVOIR PLUS</a>
                            <a href="<?php echo $helloasso_link; ?>" class="btn special-btn">SOUTENIR <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Heart.svg" alt="Coeur"></a>
                        </div>
                    </div>
                </article> 
            <?php endforeach; ?>
        </div>
    </section>
    <section>
        <article class="img_text don">
            <div class="left">
                <img 
                    loading="lazy"
                    src="<?php echo ($img['sizes']['art-img-full']); ?>"
                    width="<?php echo ($img['sizes']['art-img-full-width']); ?>"
                    height="<?php echo ($img['sizes']['art-img-full-height']); ?>"
                    alt="<?php echo $img['alt']; ?>"
                >
            </div>
            <div class="right">
                <h2 class="h2"><?php echo $title; ?></h2>
                <div class="paragraph"><?php echo $paragraph; ?></div>
                <a href="<?php echo $link; ?>" class="btn outline-btn" target="_blank">J'ADHÈRE À HSF</a>
            </div>
        </article>
    </section>
</main>
<?php
    get_footer();
?>