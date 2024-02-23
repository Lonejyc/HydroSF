<?php 
    $img = $flex_content["img"];
    $img_size = $flex_content["img_size"];
    $var = ($img_size == 'banner') ? 'art-img-banner' : 'art-img-max';
?>

<article class="img-content">
    <img 
        loading="lazy"
        src="<?php echo ($img['sizes'][$var]); ?>"
        width="<?php echo ($img['sizes'][$var . '-width']); ?>"
        height="<?php echo ($img['sizes'][$var . '-height']); ?>"
        alt="<?php echo $img['alt']; ?>"
    >
</article>