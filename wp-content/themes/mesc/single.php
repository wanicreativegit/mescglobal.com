<?php get_header(); ?>

<div class="blog">


    <div class="pure-g">

        <?php if (have_posts()): while (have_posts()) : the_post();

            $src = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'thumbnail_size');
            $url = $src[0];

            $category = get_the_category(get_the_ID());
            $firstCategory = $category[0]->cat_name;

            if($firstCategory == 'Uncategorized'){
                $firstCategory = '';
            }

            $prev = get_permalink(get_adjacent_post(false, '', false));
            $next = get_permalink(get_adjacent_post(false, '', true));

            ?>

            <div class="pure-u-1 pure-u-sm-1 pure-u-md-1 pure-u-lg-2-3 relative margin-bottom-basic">
                <div class="filter">
                    <div class="pure-g">
                        <div class="pure-u-1 pure-u-sm-1-2 pure-u-md-1-2 pure-u-lg-1-2"><?php if($prev != get_permalink()) { ?> <a class="back" href="<?php echo $prev; ?>">Back</a><?php } ?></div>
                        <div class="pure-u-1 pure-u-sm-1-2 pure-u-md-1-2 pure-u-lg-1-2"><?php if($next != get_permalink()) { ?><a class="next" href="<?php echo $next; ?>">Next article</a><?php } ?></div>
                    </div>
                </div>
                <div class="image"
                     style="
                         background-image:url(<?php echo $src[0]; ?>);
                         background-position: center;
                         background-size: cover;">
                </div>

                <div class="content">
                    <div class="date"><?php echo $firstCategory . ' / ';
                        echo date('j F, Y'); ?></div>

                    <?php
                    if(get_the_title()) {
                        ?>
                        <h1><?php the_title(); ?></h1>
                    <?php
                    }
                        ?>
                        <hr/>
                    <?php the_content(); ?>
                </div>
                <div class="share">
                    <div class="pure-g">
                        <div class="pure-u-1 pure-u-sm-1-2 pure-u-md-1-2 pure-u-lg-1-2">
                            <ul>
                                <li>
                                    <span class="facebook-share" data-js="facebook-share">face</span>
                                </li>
                                <li>
                                    <span class="twitter-share" data-js="twitter-share">Share on Twitter</span>
                                </li>
                            </ul>
                        </div>
                        <div class="pure-u-1 pure-u-sm-1-2 pure-u-md-1-2 pure-u-lg-1-2 text-right">
                            <ul class="title">
                                <li>SHARE</li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>


        <?php endwhile; ?>

            <div class="pure-u-1 pure-u-sm-1 pure-u-md-1 pure-u-lg-1-3 ">
                <?php
                $args = array('numberposts' => '-1', 'exclude' => get_the_ID());
                $recent_posts = wp_get_recent_posts($args);
                foreach ($recent_posts as $recent) {
                    $src = wp_get_attachment_image_src(get_post_thumbnail_id($recent["ID"]), 'thumbnail_size');
                    $url = $src[0];
                    $category = get_the_category($recent["ID"]);
                    $firstCategory = $category[0]->cat_name;

                    if($firstCategory == 'Uncategorized'){
                        $firstCategory = '';
                    }

                    ?>

                    <div class="related">
                        <div class="image"
                             style="
                                 background-image:url(<?php echo $src[0]; ?>);
                                 background-position: center;
                                 background-size: cover;">
                        </div>
                        <div class="date"><?php echo $firstCategory . ' / ';
                            echo date('F, j Y'); ?></div>
                        <?php if($recent["post_title"]){ ?>
                            <h2><?php echo $recent["post_title"]; ?></h2>
                        <?php
                        }
                        ?>
                        <hr/>
                        <div class="excerpt">
                            <p><?php echo get_the_excerpt($recent["ID"]); ?></p>
                        </div>
                        <a href="<?php the_permalink($recent['ID']); ?>" class="more"> Read more</a>
                    </div>



                <?php

                }
                wp_reset_query();
                ?>
            </div>

            <?php get_template_part('templates/subscribe'); ?>

        <?php else: ?>

            <!-- article -->
            <article>

                <h1><?php _e('Sorry, nothing to display.', 'wanicrea'); ?></h1>

            </article>
            <!-- /article -->

        <?php endif; ?>


    </div>
</div>


<?php get_footer(); ?>
