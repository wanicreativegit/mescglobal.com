<?php

$args = array(
    'post_type' => 'testimonials',
    'posts_per_page' => -1,
    'post_parent' => 0,
    'orderby' => 'menu_order',
    'order' => 'ASC'
);

$query = new WP_Query($args);

if ($query->have_posts()) : ?>


    <div class="testimonials margin-bottom-basic">

        <div class="pure-g">

            <div class="pure-u-1 pure-u-sm-1 pure-u-md-1-3 pure-u-lg-1-3 image hide-on-medium">
                <img src="http://wanilab.com/mesc/wp-content/uploads/2016/11/testimonial-.jpg" alt=""/>
            </div>
            <div class="pure-u-1 pure-u-sm-1 pure-u-md-1 pure-u-lg-2-3 content">
                <div class="title">
                    <h2>Our Values</h2>
                    <hr/>
                </div>
                <div class="fade">
                    <?php while ($query->have_posts()) : $query->the_post(); ?>

                        <div>
                            <?php the_content(); ?>
                            <span><?php the_title(); ?></span>
                        </div>

                    <?php endwhile; ?>
                </div>
            </div>

        </div>


    </div>
    <?php wp_reset_postdata(); ?>

<?php endif; ?>