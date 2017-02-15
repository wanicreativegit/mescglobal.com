<?php
/* template name: about */
?>
<?php get_header(); ?>
<?php get_template_part('templates/pheader'); ?>
<?php if (have_posts()): while (have_posts()) : the_post(); ?>

    <?php the_content(); ?>


    <div class="members-block margin-bottom-basic">
        <div class="pure-g">
            <div class="pure-u-1 pure-u-sm-1 pure-u-md-1-3 pure-u-lg-1-2 center-all content ">
                <?php
                $args = array(
                    'post_type' => 'config',
                    'p' => 83
                );

                $query = new WP_Query($args);
                if ($query->have_posts()) : ?>

                    <?php while ($query->have_posts()) : $query->the_post(); ?>
                        <div class="push-left fixed-content-box">
                            <h2><?php the_title(); ?></h2>
                            <?php the_content(); ?>
                        </div>
                    <?php endwhile; endif;  ?>
            </div>
            <div class="pure-u-1 pure-u-sm-1 pure-u-md-2-3 pure-u-lg-1-2 ">
                <?php get_template_part('templates/team'); ?>
            </div>
        </div>
    </div>

    <?php get_template_part('templates/experience'); ?>
    <?php get_template_part('templates/subscribe'); ?>

<?php endwhile; ?>

<?php else: ?>

    <h2><?php _e('Sorry, nothing to display.', 'wanicrea'); ?></h2>

<?php endif;  ?>


<?php get_footer(); ?>
