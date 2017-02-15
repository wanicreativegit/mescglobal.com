<?php

$id = get_the_ID();
$src = wp_get_attachment_image_src(get_post_thumbnail_id($id), 'thumbnail_size');
$url = $src[0];

$color = get_field('color', get_the_ID());
$title = get_field('title', get_the_ID());

?>

<div class="header" style="
    position:relative;
    background: url(<?php echo $url; ?>) center no-repeat;
    width: 100%;
    height: 500px;
    background-size: cover;
    " <?php if ($color) {
    echo 'data-color="' . $color . '"';
} ?>>

    <div class="pure-g">
        <div class="pure-u-1 pure-u-sm-1 pure-u-md-1 pure-u-lg-1 contact-form">
            <?php echo do_shortcode('[contact-form-7 id="359" title="contactsForm1"]'); ?>
        </div>
    </div>

</div>