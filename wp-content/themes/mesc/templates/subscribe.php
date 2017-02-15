<div class="subscribe">

    <div class="pure-g">
        <div class=" pure-u-1 pure-u-sm-1 pure-u-md-1 pure-u-lg-1-2 login">

            <h3>Log in</h3>
            <hr/>
            <form action="">

                <input type="text" placeholder="Email" />
                <input type="password" placeholder="Password" />
                <div class="pure-g">
                    <div class="pure-u-1 pure-u-sm-1-2 pure-u-md-1-2 pure-u-lg-1-2 checkbox-bg">
                        <input type="checkbox" name="checkboxG1" id="checkboxG1" class="css-checkbox" /><label for="checkboxG1" class="css-label radGroup1">Forgot your password</label>
                    </div>
                    <div class="pure-u-1 pure-u-sm-1-2 pure-u-md-1-2 pure-u-lg-1-2 text-right">
                        <button type="submit" class="submit"></button>
                    </div>
                </div>
            </form>


        </div>
        <div class=" pure-u-1 pure-u-sm-1 pure-u-md-1 pure-u-lg-1-2 yellow ">

            <?php

            $args = array(
                'post_type' => 'config',
                'p' => 55
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
            <?php echo do_shortcode('[contact-form-7 id="54" title="Subscribe"]'); ?>
        </div>
    </div>
</div>