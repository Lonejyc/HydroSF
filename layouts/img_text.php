<?php 
    $img = $flex_content["img"];
    $title = $flex_content["title"];
    $paragraph = $flex_content["paragraph"];
    $btn_link = $flex_content["btn_link"];
    $btn_txt = $flex_content["btn_txt"];
    $layout = $flex_content["layout"];
    $var = $layout == 'img_right' ? 'invert' : '';
?>

<article class="img_text <?php echo (isset($var)) ? $var : ''; ?>">
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
        <p class="paragraph"><?php echo $paragraph; ?></p>
        <a href="<?php echo $btn_link; ?>" class="btn outline-btn"><?php echo $btn_txt; ?></a>
    </div>
</article>