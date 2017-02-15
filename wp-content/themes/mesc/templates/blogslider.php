<?php

$args = array(
    'post_type' => 'post',
    'posts_per_page' => 5,
    'post_parent' => 0,
    'orderby' => 'menu_order',
    'order' => 'ASC'
);

$query = new WP_Query($args);

if ($query->have_posts()) : ?>


    <div class="blog-slide">

        <div class="pure-g">

            <div class="home_slider">
                <?php while ($query->have_posts()) : $query->the_post(); ?>
                    <?php
                    $src = wp_get_attachment_image_src(get_post_thumbnail_id($post_id), 'thumbnail_size');
                    $url = $src[0];
                    $category = get_the_category($recent["ID"]);
                    $firstCategory = $category[0]->cat_name;
                    ?>
                    <div>
                        <div class="pure-u-1 pure-u-sm-1 pure-u-md-1-2 pure-u-lg-1-2 hide-on-small">
                            <div class="image" style="
                                background-image:url(<?php echo $src[0]; ?>);
                                background-repeat: no-repeat;
                                background-size: cover;">
                            </div>
                        </div>
                        <div class="pure-u-1 pure-u-sm-1 pure-u-md-1-2 pure-u-lg-1-2 content">
                            <div class="date"><?php echo $firstCategory . ' / ';
                                echo date('F, j Y'); ?></div>
                            <h2><?php the_title(); ?></h2>
                            <hr/>
                            <div class="excerpt">
                                <p><?php echo get_the_excerpt(get_the_ID()); ?></p>
                            </div>
                            <a href="<?php the_permalink(get_the_ID()); ?>" class="more"> Read article</a>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>

    </div>

    <?php wp_reset_postdata(); ?>

<?php endif; ?>