<?php /* template name: joblist */ ?>
<?php get_header(); ?>
<?php get_template_part('templates/pheader'); ?>

    <div class="job_list">
        <div id="wrapper">
            <div class="pure-g">
                <?php

                for ($i = 0; $i < 20; $i++) {

                    if($i%3 == 0){
                        $color = 'green';
                    }
                    if($i%2 == 0){
                        $color = 'blue';
                    }
                    if($i%4 == 0){
                        $color = 'red';
                    }


                    ?>

                    <div class="pure-u-1 pure-u-sm-1 pure-u-md-1-2 pure-u-lg-1-3 job" data-color="<?php echo $color; ?>" >
                        <h3>Lorem ipsum</h3>
                        <hr/>
                        <div class="info">
                            <div class="pure-g">
                                <div class="pure-u-1 pure-u-sm-1 pure-u-md-1-2 pure-u-lg-1-2 city">
                                    Dubai
                                </div>
                                <div class="pure-u-1 pure-u-sm-1 pure-u-md-1-2 pure-u-lg-1-2 date">
                                    12 August, 2012
                                </div>
                                <div class="pure-u-1 pure-u-sm-1 pure-u-md-1-2 pure-u-lg-1-2 salary">
                                    £ 20 000
                                </div>
                                <div class="pure-u-1 pure-u-sm-1 pure-u-md-1-2 pure-u-lg-1-2 type">
                                    Permanent
                                </div>
                            </div>
                        </div>
                        <div class="desc">
                            Lorem ipsum dolor sit amet, consectetur adipisi elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim questo siamo veniam.
                        </div>
                        <div class="keys">
                            <div class="pure-g">
                                <div class="pure-u-1 pure-u-sm-1-2 pure-u-md-1-2 pure-u-lg-1-2 r_more">
                                    <a href="">Read more</a>
                                </div>
                                <div class="pure-u-1 pure-u-sm-1-2 pure-u-md-1-2 pure-u-lg-1-2 shortlist">
                                    <a href="">Add to shotlist</a>
                                </div>
                            </div>
                        </div>
                        <input type="submit" value="Apply" class="more" />
                    </div>

                <?php

                }

                ?>

            </div>
            <div class="clearfix"></div>
            <div class="pagination">
                <ul>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#next" class="next"> Next page </a></li>
                </ul>
            </div>
        </div>
    </div>

<?php get_template_part('templates/subscribe'); ?>
<?php get_footer(); ?>