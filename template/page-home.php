<?php 
    /* Template Name: Accueil */
    get_header();

    $intro_txt = get_field('intro_txt');
    $img_home_asso = get_field('img_home_asso');
    $title_home_asso = get_field('title_home_asso');
    $description_home_asso = get_field('description_home_asso');
    $asso_page_link = get_field('asso_page_link');
    $img_home_proj = get_field('img_home_proj');
    $title_home_proj = get_field('title_home_proj');
    $description_home_proj = get_field('description_home_proj');
    $proj_page_link = get_field('proj_page_link');
    $needu_background_img = get_field('needu_background_img');

    $args = [
        'post_type' => 'post',
        'posts_per_page' => -1
    ];
    $query = new WP_Query( $args );
    $articles = $query->posts;
?>

<main>
    <section class="head">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Motif-africain.svg" alt="Motif style Africain">
        <div class="container">
            <div class="imgs-hover"></div>
            <p class="description"><?php echo $intro_txt ?></p>
            <div class="img">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Droplet.svg" alt="Goutte d'eau">
            </div>
        </div>
    </section>
    <section class="about">
        <article class="asso">
            <div class="left">
            <img 
                loading="lazy" 
                src="<?php echo ($img_home_asso['sizes']['home-img']); ?>"
                width="<?php echo ($img_home_asso['sizes']['home-img-width']); ?>"
                height="<?php echo ($img_home_asso['sizes']['home-img-height']); ?>"
                alt="<?php echo $img_home_asso['alt']; ?>"
            >  
            </div>
            <div class="right">
                <h2 class="h2"><?php echo $title_home_asso ?></h2>
                <div class="paragraph">
                    <?php echo $description_home_asso ?>
                </div>
                <a href="<?php echo $asso_page_link ?>" class="btn outline-btn">EN SAVOIR PLUS</a>
            </div>
        </article>
        <article class="proj">
            <div class="left">
            <img 
                loading="lazy" 
                src="<?php echo ($img_home_proj['sizes']['home-img']); ?>"
                width="<?php echo ($img_home_proj['sizes']['home-img-width']); ?>"
                height="<?php echo ($img_home_proj['sizes']['home-img-height']); ?>"
                alt="<?php echo $img_home_proj['alt']; ?>"
            >  
            </div>
            <div class="right">
                <h2 class="h2"><?php echo $title_home_proj ?></h2>
                <div class="paragraph">
                    <?php echo $description_home_proj ?>
                </div>
                <a href="<?php echo $proj_page_link ?>" class="btn outline-btn">EN SAVOIR PLUS</a>
            </div>
        </article>
    </section>
    <section class="now">
        <h2 class="h2">En ce moment</h2>
        <div class="main-carousel" data-flickity='{ "groupCells": true }'>
            <?php foreach ($articles as $article) : ?>
                <?php 
                    $featured_img = get_field('featured_img', $article->ID);
                    $short_description = get_field('short_description', $article->ID);
                ?>
                <article class="carousel-cell art">
                    <img 
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
        </div>
    </section>
    <section class="needu" style="background-image: url(<?php echo ($needu_background_img['sizes']['home-background-img']); ?>)">
        <h1 class="h1">ON A BESOIN DE VOUS !</h1>
        <div class="button">
            <a href="<?php echo get_page_link(ID_PAGE_DON); ?>" class="btn">FAIRE UN DON</a>
        </div>
    </section>
</main>

<?php
    get_footer();
?>