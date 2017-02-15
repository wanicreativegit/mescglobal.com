<?php

$args = array(
    'post_type' => 'experience',
    'posts_per_page' => -1,
    'post_parent' => 0,
    'orderby' => 'menu_order',
    'order' => 'ASC'
);

$query = new WP_Query($args);

if ($query->have_posts()) : ?>


    <div class="experience-block margin-bottom-basic">

        <div class="pure-g">

            <div class="pure-u-1 pure-u-sm-1 pure-u-md-1 pure-u-lg-1 content">
                <div class="title push-left-more">
                    <h2>Candidate experience</h2>
                    <hr/>
                </div>
                <div class="experience">
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