<?php 
    $repetor = $flex_content["repetor"];
    $title = $flex_content["title"];
    $rows = get_field($repetor);
?>

<article class="now">
    <h2 class="h2"><?php echo $title ?></h2>
    <?php foreach($rows as $row) : ?>
    <?php
        $img = get_field('img', $row->ID);
        $title = get_field('title', $row->ID);
        $description = get_field('description', $row->ID);
        $project_link = get_field('project_link', $row->ID);
        $helloasso_link = get_field('helloasso_link', $row->ID);
        // $img = $row['img'];
        // $title = $row['title'];
        // $description = $row['description'];
        // $project_link = $row['project_link'];
        // $helloasso_link = $row['helloasso_link'];
    ?>
    <div class="box">
        <img 
            loading="lazy"
            src="<?php echo ($img['sizes']['art-img']); ?>"
            width="<?php echo ($img['sizes']['art-img-width']); ?>"
            height="<?php echo ($img['sizes']['art-img-height']); ?>"
            alt="<?php echo $img['alt']; ?>"
        >
        <h3 class="h3"><?php echo $title; ?></h3>
        <p class="paragraph"><?php echo $description; ?></p>
        <div class="button">
            <a href="<?php echo $project_link; ?>" class="btn outline-btn">EN SAVOIR PLUS</a>
            <a href="<?php echo $helloasso_link; ?>" class="btn">SOUTENIR <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Heart.svg" alt="Coeur"></a>
        </div>
    </div>
    <?php
        endforeach;
    ?>
</article>