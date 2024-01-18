<?php 
    $quote = $content["quote"];
    $background_img = $content["background_img"];
    $location_title = $content["location_title"];
    $location_img = $content["location_img"];
?>

<article>
    <img 
        loading="lazy" 
        src="<?php echo ($background_img['sizes']['art-img']); ?>"
        width="<?php echo ($background_img['sizes']['art-img-width']); ?>"
        height="<?php echo ($background_img['sizes']['art-img-height']); ?>"
        alt="<?php echo $background_img['alt']; ?>"
    >
    <div class="content">
        <div class="chapo"><?php echo $quote ?></div>
        <h2 class="h2"><?php echo $location_title ?></h2>
        <img 
            loading="lazy" 
            src="<?php echo ($location_img['sizes']['art-img']); ?>"
            width="<?php echo ($location_img['sizes']['art-img-width']); ?>"
            height="<?php echo ($location_img['sizes']['art-img-height']); ?>"
            alt="<?php echo $location_img['alt']; ?>"
        >
    </div>
</article>