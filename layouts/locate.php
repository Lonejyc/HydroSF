<?php 
    $quote = $content["quote"];
    $background_img = $content["background_img"];
    $location_title = $content["location_title"];
    $location_img = $content["location_img"];
?>

<article class="locate">
    <img 
        loading="lazy" 
        src="<?php echo ($background_img['sizes']['home-background-img']); ?>"
        width="<?php echo ($background_img['sizes']['home-background-img-width']); ?>"
        height="<?php echo ($background_img['sizes']['home-background-img-height']); ?>"
        alt="<?php echo $background_img['alt']; ?>"
    >
    <div class="content">
        <div class="text-content">
            <div class="chapo"><?php echo $quote ?></div>
            <div class="title">
                <div class="title-content">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Location.svg" alt="Location icon">
                    <h2 class="h2"><?php echo $location_title ?></h2>
                </div>
                <div class="headband"></div>
            </div>
        </div>
        <img 
            loading="lazy" 
            src="<?php echo ($location_img['sizes']['art-loc-img']); ?>"
            width="<?php echo ($location_img['sizes']['art-loc-img-width']); ?>"
            height="<?php echo ($location_img['sizes']['art-loc-img-height']); ?>"
            alt="<?php echo $location_img['alt']; ?>"
        >
    </div>
</article>