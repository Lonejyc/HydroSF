<?php 
    $img = $flex_content["img"];
    $title = $flex_content["title"];
    $left_paragraph = $flex_content["left_paragraph"];
    $right_paragraph = $flex_content["right_paragraph"];
?>

<article class="img_text block">
    <div class="img">
        <img 
            loading="lazy"
            src="<?php echo ($img['sizes']['art-img-full']); ?>"
            width="<?php echo ($img['sizes']['art-img-full-width']); ?>"
            height="<?php echo ($img['sizes']['art-img-full-height']); ?>"
            alt="<?php echo $img['alt']; ?>"
        >
    </div>
    <div class="content">
        <h2 class="h2"><?php echo $title; ?></h2>
        <div>
            <div class="paragraph"><?php echo $left_paragraph; ?></div>
            <div class="paragraph"><?php echo $right_paragraph; ?></div>
        </div>
    </div>
</article>