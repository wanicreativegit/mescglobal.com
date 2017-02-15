<?php

$id = get_the_ID();
$src = wp_get_attachment_image_src(get_post_thumbnail_id($id), 'thumbnail_size');
$url = $src[0];

$color = get_field('color', get_the_ID());
$title = get_field('title', get_the_ID());

$color = get_field('color', get_the_ID());

?>

<div class="header" <?php if ($color) {
    echo 'data-color="' . $color . '"';
} ?>>

    <?php

    $args = array(
        'post_type' => 'header-slider',
        'posts_per_page' => -1,
        'cat' => 4,
        'post_parent' => 0,
        'orderby' => 'menu_order',
        'order' => 'ASC'
    );


    $query = new WP_Query($args);

    if ($query->have_posts()) : ?>

        <div class="the_images">
            <div class="black-filter"></div>
            <div class="header-slider">
                <?php while ($query->have_posts()) : $query->the_post();

                    $src = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'full');
                    $url = $src[0];

                    ?>

                    <div class="the_image" style="
                        background-image: url(<?php echo $url; ?>);
                        ">
                    </div>

                <?php endwhile; ?>
            </div>
        </div>
        <?php wp_reset_postdata(); ?>

        <div class="pure-u-1 pure-u-sm-1 pure-u-md-1 pure-u-lg-1 header-bg-absolute-center" <?php if ($color) {
            echo 'data-color="' . $color . '"';
        } ?> >
            <div class="title" style="padding-left: 10%;">

                <?php

                $args = array(
                    'post_type' => 'header-slider',
                    'posts_per_page' => -1,
                    'cat' => 4,
                    'post_parent' => 0,
                    'orderby' => 'menu_order',
                    'order' => 'ASC'
                );

                $query = new WP_Query($args);

                if ($query->have_posts()) : ?>

                    <div class="header-slider">
                        <?php while ($query->have_posts()) : $query->the_post(); ?>

                            <h2>
                                <?php echo get_the_content(); ?>
                            </h2>

                        <?php endwhile; ?>
                    </div>

                    <?php wp_reset_postdata(); ?>

                <?php
                else:
                    ?>

                    <h2 <?php if ($color) {
                        echo 'data-color="' . $color . '"';
                    } ?>>
                        <?php echo $title; ?>
                    </h2>

                <?php
                endif; ?>


            </div>
        </div>

    <?php else: ?>

        <div class="the_images">
            <div class="header-slider">
                <div class="the_image" style="
                    background-image: url(<?php echo $url; ?>);
                    ">
                </div>
            </div>
        </div>

    <?php endif; ?>

    <div class="blur">

    </div>
    <div class="social">
        <div class="fb">
        </div>
        <div class="tw">
        </div>
    </div>
</div>


