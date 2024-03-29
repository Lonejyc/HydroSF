<?php 
    $repetor = $flex_content["repetor"];
    $title = $flex_content["title"];
?>

<article class="now">
    <h2 class="h2"><?php echo $title ?></h2>
    <?php foreach($repetor as $row) : ?>
    <?php
        $img = $row['img'];
        $title = $row['title'];
        $description = $row['description'];
        $project_link = $row['project_link'];
        $helloasso_link = $row['helloasso_link'];
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
        <div class="paragraph"><?php echo $description; ?></div>
        <div class="button">
            <a href="<?php echo $project_link; ?>" class="btn outline-btn">EN SAVOIR PLUS</a>
            <a href="<?php echo $helloasso_link; ?>" class="btn special-btn">SOUTENIR <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Heart.svg" alt="Coeur"></a>
        </div>
    </div>
    <?php
        endforeach;
    ?>
</article>