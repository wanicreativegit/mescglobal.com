<?php
/* template name: articles */
?>
<?php get_header(); ?>

<div class="blog">


    <div class="pure-g">

        <div class="pure-u-1 pure-u-sm-1 pure-u-md-1 pure-u-lg-2-3 relative margin-bottom-basic full-on-small">
            <div class="filter">
                <div class="pure-g">
                    <div class="pure-u-1 pure-u-sm-1-2 pure-u-md-1-2 pure-u-lg-1-2"><a class="back" href="">Back</a></div>
                    <div class="pure-u-1 pure-u-sm-1-2 pure-u-md-1-2 pure-u-lg-1-2"><a class="next" href="">Next article</a></div>
                </div>
            </div>
            <?php
            $args = array('numberposts' => '1');
            $recent_posts = wp_get_recent_posts($args);
            foreach ($recent_posts as $recent) {
                $src = wp_get_attachment_image_src(get_post_thumbnail_id($recent["ID"]), 'thumbnail_size');
                $url = $src[0];
                $category = get_the_category($recent["ID"]);
                $firstCategory = $category[0]->cat_name;

                if($firstCategory == 'Uncategorized'){
                    $firstCategory = '';
                }

                global $current;
                $current = $recent["ID"];

                ?>

                <div class="image"
                    style="
                    background-image:url(<?php echo $src[0]; ?>);
                        background-position: center;
                        background-size: cover;">
                </div>

                <div class="content">
                    <div class="date"><?php echo $firstCategory.' / '; echo date('j F, Y'); ?></div>

                    <?php if($recent["post_title"]){ ?>
                    <h1><?php echo $recent["post_title"]; ?></h1>
                    <?php
                    }
                    ?>
                    <hr/>
                    <?php echo wpautop(get_post_field('post_content', $recent["ID"])); ?>
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
                        <div class="pure-u-1 pure-u-sm-1-2 pure-u-md-1-2 pure-u-lg-1-2 text-right center-all">
                            <ul class="full-width">
                                <li>SHARE</li>
                            </ul>
                        </div>
                    </div>
                </div>

            <?php

            }
            wp_reset_query();
            ?>
        </div>
        <div class="pure-u-1 pure-u-sm-1 pure-u-md-1 pure-u-lg-1-3 full-on-small ">
            <?php
            $args = array('numberposts' => '-1', 'exclude' => $current);
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
                    <div class="date"><?php echo $firstCategory.' / '; echo date('F, j Y'); ?></div>
                    <?php if($recent["post_title"]){ ?>
                        <h2><?php echo $recent["post_title"]; ?></h2>
                    <?php
                    }
                    ?>
                    <hr/>
                    <div class="excerpt">
                        <p><?php  echo get_the_excerpt($recent["ID"]); ?></p>
                    </div>
                    <a href="<?php the_permalink($recent['ID']); ?>" class="more"> Read more</a>
                </div>



            <?php

            }
            wp_reset_query();
            ?>
        </div>

        <?php get_template_part('templates/subscribe'); ?>

    </div>
</div>

<?php get_footer(); ?>
