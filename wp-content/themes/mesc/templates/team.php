<?php

$args = array(
    'post_type' => 'members',
    'posts_per_page' => -1,
    'post_parent' => 0,
    'orderby' => 'menu_order',
    'order' => 'ASC'
);

$query = new WP_Query($args);

if ($query->have_posts()) : ?>


    <div class="members">
        <div class="pure-g">

            <?php while ($query->have_posts()) : $query->the_post(); ?>
                <?php
                $src = wp_get_attachment_image_src(get_post_thumbnail_id($post_id), 'thumbnail_size');
                $url = $src[0];
                ?>

                <div class="pure-u-1 pure-u-sm-1 pure-u-md-1-2 pure-u-lg-1-2 member ">
                    <img src="<?php echo $url; ?>" alt=""/>

                    <div class="name"><?php the_title(); ?></div>
                    <div class="position"><?php the_excerpt(); ?></div>

                    <div class="bio <?php if(get_field('color') === '#ffdc00') { echo 'black-text'; } ?>" style="background-color:<?php echo get_field('color'); ?>; ">
                        <div class="co">
                            <?php the_content(); ?>
                        </div>
                    </div>

                </div>


            <?php endwhile; ?>

        </div>
    </div>
    <?php wp_reset_postdata(); ?>

<?php endif; ?>