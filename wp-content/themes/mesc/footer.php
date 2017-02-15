<footer>

    <div id="wrapper">
        <div class="pure-g">
            <div class="pure-u-1 pure-u-sm-1 pure-u-md-2-3 pure-u-lg-2-3">
                <div class="logo"></div>
                <div>
                    All rights reserved <?php echo date('Y'); ?>
                    <?php
                    echo wp_nav_menu(array('menu' => 'footer'));
                    ?>
                </div>
            </div>
            <div class="pure-u-1 pure-u-sm-1 pure-u-md-1-3 pure-u-lg-1-3 text-right">

                    <?php
                    $fb = get_field('facebook', 13);
                    $tw = get_field('twitter', 13);

                    if($fb || $tw){

                        echo '<div class="social">';

                        if($fb){
                            echo '<a href="'.$fb.'">';
                            echo '<div class="fb"></div>';
                            echo '</a>';
                        }
                        if($tw){
                            echo '<a href="'.$tw.'">';
                            echo '<div class="tw"></div>';
                            echo '</a>';
                        }


                        echo '</div>';
                    }


                $args = array(
                    'post_type' => 'config',
                    'p' => 13
                );

                $the_query = new WP_Query($args);

                if ($the_query->have_posts()) {

                    while ($the_query->have_posts()) {
                        $the_query->the_post();

                        the_content();
                    }

                    wp_reset_postdata();
                }

                ?>
                <div style="font-size:14px;"> Website by <a href="http://wanicreative.com" target="_blank" rel="noopener">WaniCreative</a></div>

            </div>
        </div>
    </div>

</footer>

	</body>
</html>
