<?php
/* template name: homepage */
?>
<?php get_header(); ?>
<?php get_template_part('templates/pheader'); ?>


<?php if (have_posts()): while (have_posts()) : the_post(); ?>

    <?php get_template_part('templates/sectors'); ?>

    <?php the_content(); ?>


<?php endwhile; ?>

<?php else: ?>

    <h2><?php _e('Sorry, nothing to display.', 'wanicrea'); ?></h2>

<?php endif; ?>

<?php get_template_part('templates/subscribe'); ?>
<?php get_footer(); ?>