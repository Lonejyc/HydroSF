<?php 
    /* Template Name: Projet */
    get_header();

    $progress_articles = get_posts([
        'posts_per_page'    => 3,
        'post_type'     => 'post',
        'meta_key'      => 'state',
        'meta_value'    => 'in_progress'
    ]);

    $proj_img = get_field('proj_img');
    $proj_title = get_field('proj_title');
    $proj_paragaph = get_field('proj_paragaph');
    $proj_link = get_field('proj_link');

    $finished_articles = get_posts([
        'posts_per_page'    => 3,
        'post_type'     => 'post',
        'meta_key'      => 'state',
        'meta_value'    => 'finished'
    ]);


    // add_filter('the_title', function($post_title, $post_id) {
    //     return '- ' . $post_title . ' -';
    // }, 10, 2);

    // return apply_filters( 'the_title', $post_title, $post_id );
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
                            <a href="<?php echo $helloasso_link; ?>" target="_blank" class="btn special-btn">SOUTENIR <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Heart.svg" alt="Coeur"></a>
                        </div>
                    </div>
                </article> 
            <?php endforeach; ?>
        </div>
    </section>
    <section>
        <article class="proj img_text">
            <div class="left">
                <img 
                    loading="lazy"
                    src="<?php echo ($proj_img['sizes']['art-img-full']); ?>"
                    width="<?php echo ($proj_img['sizes']['art-img-full-width']); ?>"
                    height="<?php echo ($proj_img['sizes']['art-img-full-height']); ?>"
                    alt="<?php echo $proj_img['alt']; ?>"
                >
            </div>
            <div class="right">
                <h2 class="h2"><?php echo $proj_title; ?></h2>
                <div class="paragraph"><?php echo $proj_paragaph; ?></div>
                <a href="<?php echo $proj_link; ?>" class="btn outline-btn">NOUS CONTACTER</a>
            </div>
        </article>
    </section>
    <section class="now spe">
        <h2 class="h2">Projets terminés</h2>
        <div class="projects-show">
            <?php foreach ($finished_articles as $f_article) : ?>
                <?php
                    $featured_img_f = get_field('featured_img', $f_article->ID);
                    $short_description_f = get_field('short_description', $f_article->ID);
                ?>
                <article class="project-show art">
                    <img class="img"
                        loading="lazy"
                        src="<?php echo ($featured_img_f['sizes']['art-img']); ?>"
                        width="<?php echo ($featured_img_f['sizes']['art-img-width']); ?>"
                        height="<?php echo ($featured_img_f['sizes']['art-img-height']); ?>"
                        alt="<?php echo $featured_img_f['alt']; ?>"
                    >
                    <div class="content">
                        <h3 class="h3"><?php echo get_the_title($f_article->ID); ?></h3>
                        <div class="paragraph"><?php echo $short_description_f; ?></div>
                        <div class="buttons">
                            <a href="<?php echo get_permalink($f_article->ID); ?>" class="btn outline-btn">EN SAVOIR PLUS</a>
                        </div>
                    </div>
                </article> 
            <?php endforeach; ?>
        </div>
    </section>
</main>
<?php
    get_footer();
?>