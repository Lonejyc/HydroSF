<?php 
    /* Template Name: Actualité */ 
    get_header();

    $args = array(
        'post_type' => 'post',
        'posts_per_page' => 6,
        'orderby' => 'date',
        'order' => 'DESC',
        'paged' => 1
    );
    $query = new WP_Query( $args );
    $articles = $query->posts;

?>
<main>
    <section class="container-grid publication-list" data-url="<?php echo get_site_url(); ?>">
        <?php foreach ($articles as $article) : ?>
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
        <?php endforeach; ?>
    </section>
    <div class="btn_wrapper">
        <a href="#!" class="round-btn load-more">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Plus.svg" alt="Plus">
        </a>
    </div>
</main>
<?php
    get_footer();
?>