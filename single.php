<?php 
    /* Template Name: Article */
    get_header();

    $art_background_img = get_field('art_background_img');
    $art_quote = get_field('art_quote');
    $art_location_title = get_field('art_location_title');
    $art_location_img = get_field('art_location_img');
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