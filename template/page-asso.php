<?php 
    /* Template Name: Association */ 
    get_header();

    $asso_title = get_field('asso_title');
    $asso_paragraph = get_field('asso_paragraph');
    $asso_img = get_field('asso_img');

    $left_title = get_field('left_title');
    $left_paragraph = get_field('left_paragraph');
    $right_title = get_field('right_title');
    $right_paragraph = get_field('right_paragraph');

    $orga_title = get_field('orga_title');
    $orga_paragraph = get_field('orga_paragraph');
    $orga_img = get_field('orga_img');

    $guide_img = get_field('guide_img');
    $guide_title = get_field('guide_title');
    $guide_paragraph = get_field('guide_paragraph');
    $guide_link = get_field('guide_link');

    $partner_title = get_field('partner_title');
    $partner_paragraph = get_field('partner_paragraph');
    $rows = get_field('repetor');
?>
<main>
    <section>
        <article class="asso img_text invert">
            <div class="left">
            <img 
                loading="lazy" 
                src="<?php echo ($asso_img['sizes']['home-img']); ?>"
                width="<?php echo ($asso_img['sizes']['home-img-width']); ?>"
                height="<?php echo ($asso_img['sizes']['home-img-height']); ?>"
                alt="<?php echo $asso_img['alt']; ?>"
            >
            </div>
            <div class="right">
                <h2 class="h2"><?php echo $asso_title; ?></h2>
                <div class="paragraph">
                    <?php echo $asso_paragraph; ?>
                </div>
            </div>
        </article>
    </section>
    <section>
        <article class="text-x2">
            <h2 class="h2"><?php echo $left_title; ?></h2>
            <div class="paragraph"><?php echo $left_paragraph; ?></div>
        </article>
        <div class="bar"></div>
        <article>
            <h2 class="h2"><?php echo $right_title; ?></h2>
            <div class="paragraph"><?php echo $right_paragraph; ?></div>
        </article>
    </section>
    <section>
        <article>
            <h2 class="h2"><?php echo $orga_title; ?></h2>
            <div class="paragraph"><?php echo $orga_paragraph; ?></div>
            <img 
                loading="lazy" 
                src="<?php echo ($orga_img['sizes']['home-img']); ?>"
                width="<?php echo ($orga_img['sizes']['home-img-width']); ?>"
                height="<?php echo ($orga_img['sizes']['home-img-height']); ?>"
                alt="<?php echo $orga_img['alt']; ?>"
            >
        </article>
    </section>
    <section>
        <article class="guide">
            <div class="left">
                <img 
                loading="lazy" 
                src="<?php echo ($guide_img['sizes']['home-img']); ?>"
                width="<?php echo ($guide_img['sizes']['home-img-width']); ?>"
                height="<?php echo ($guide_img['sizes']['home-img-height']); ?>"
                alt="<?php echo $guide_img['alt']; ?>"
                >
            </div>
            <div class="right">
                <h2 class="h2"><?php echo $guide_title ?></h2>
                <div class="paragraph">
                    <?php echo $guide_paragraph ?>
                </div>
                <a href="<?php echo $guide_link ?>" class="btn">COMMANDER</a>
            </div>
        </article>
    </section>
    <section>
        <div class="title">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Droplet.svg" alt="Goutte d'eau">
            <h2 class="h2"><?php echo $partner_title; ?></h2>
        </div>
        <div class="paragraph"><?php echo $partner_paragraph; ?></div>
        <div class="partners">
            <?php foreach($rows as $row) : ?>
                <?php 
                    $logo = $row['partner_logo'];
                    $link = $row['partner_link'];
                ?>
                <div class="partner">
                    <a href="<?php echo $link; ?>" target="_blank">
                        <img 
                            loading="lazy" 
                            src="<?php echo ($logo['sizes']['home-img']); ?>"
                            width="<?php echo ($logo['sizes']['home-img-width']); ?>"
                            height="<?php echo ($logo['sizes']['home-img-height']); ?>"
                            alt="<?php echo $logo['alt']; ?>"
                        >
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
</main>
<?php
    get_footer();
?>