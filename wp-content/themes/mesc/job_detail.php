<?php /* template name: jobdetail */ ?>
<?php get_header(); ?>
    <div class="filter job">
        <div class="pure-g">
            <div class="pure-u-1 pure-u-sm-1 pure-u-md-1-2 pure-u-lg-1-2"><a class="back" href="<?php echo get_permalink(143); ?>">Back to search results</a></div>
        </div>
    </div>


    <div id="wrapper">

        <div class="pure-g job_inside">
            <div class="pure-u-1 pure-u-sm-1 pure-u-md-1-2 pure-u-lg-1-2  info-block">
                <h1>Lorem ipsum</h1>
                <hr/>
                <div class="info">
                    <div class="pure-g">
                        <div class="pure-u-1 pure-u-sm-1-2 pure-u-md-1-2 pure-u-lg-1-2 city">
                            Dubai
                        </div>
                        <div class="pure-u-1 pure-u-sm-1-2 pure-u-md-1-2 pure-u-lg-1-2 date">
                            12 August, 2012
                        </div>
                        <div class="pure-u-1 pure-u-sm-1-2 pure-u-md-1-2 pure-u-lg-1-2 salary">
                            £ 20 000
                        </div>
                        <div class="pure-u-1 pure-u-sm-1-2 pure-u-md-1-2 pure-u-lg-1-2 type">
                            Permanent
                        </div>
                    </div>
                </div>
                <div class="form hide-on-small" data-color="blue">

                    <input type="text" placeholder="Your first name"/>
                    <input type="text" placeholder="Your last name"/>
                    <input type="email" placeholder="Email address"/>
                    <span id="filename">Cv</span>
                    <label for="file-upload">Browse<input type="file" id="file-upload">
                    </label>
                    <input type="text" placeholder="Your name"/>
                    <input type="text" placeholder="Your message"/>
                    <input type="submit" value="apply"/>

                </div>

            </div>
            <div class="pure-u-1 pure-u-sm-1 pure-u-md-1-2 pure-u-lg-1-2 content">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec quam lectus, efficitur eu sollicitudin eget, cursus eu risus. Praesent ac pellentesque quam, eu vestibulum lectus. Duis efficitur volutpat nunc ut hendrerit. Phasellus efficitur leo magna, tincidunt vestibulum orci cursus eu. Duis pulvinar bibendum nibh, in porttitor lacus pellentesque a. Nam ipsum purus, lacinia eget ligula vel, vehicula molestie diam. Proin semper vehicula nisl, ac molestie sapien fermentum ut. Sed volutpat interdum arcu ullamcorper rhoncus. Sed iaculis lectus ut lorem ultrices commodo. Curabitur gravida lacus felis, eget ornare ipsum varius at. Suspendisse quis condimentum orci, placerat porta mauris. Maecenas at ex ut diam porttitor pharetra.
                </p>
                <p>
                In vitae pellentesque est. Morbi nibh est, venenatis ac massa ut, pulvinar porttitor urna. Nunc eleifend, arcu id tempor pellentesque, dui dui viverra purus, ac consectetur quam ligula nec nulla. Quisque lectus dui, dignissim non accumsan in, lobortis quis ex. Ut non orci arcu. Aliquam erat volutpat. Duis ullamcorper porttitor elementum. Aliquam massa lacus, elementum et porta et, cursus a purus. Donec erat sem, interdum non nunc sed, maximus tristique purus. Aenean rhoncus rhoncus maximus.
                </p>
                <p>
                Nunc pulvinar eu sapien ac rutrum. Vivamus finibus sed magna quis pulvinar. Pellentesque finibus augue at bibendum posuere. Donec tempus ut nisi eu egestas. Donec molestie enim quis rhoncus faucibus. Proin sit amet sem eu ex condimentum tincidunt. Maecenas iaculis ac mauris at placerat. Donec a lacus vitae nisl venenatis pellentesque. Morbi quis magna sit amet urna aliquet finibus. Fusce purus lacus, efficitur sit amet turpis non, aliquam tempus sem. Duis vel nibh at lectus placerat sodales. Fusce ac tellus aliquam, vulputate nibh sed, pretium tortor. Vivamus condimentum tellus nibh, sed fermentum diam ultricies sit amet.
                </p>
                <p>
                Mauris eget pharetra purus, sed finibus orci. Nulla eget tortor sapien. Vestibulum nibh dolor, commodo nec hendrerit a, volutpat id mauris. Nullam sit amet tincidunt nibh. Praesent quis congue dolor. Pellentesque pulvinar id justo sed auctor. Praesent pellentesque erat enim, ut gravida risus suscipit sit amet. Sed euismod ex vitae augue mollis semper. Maecenas finibus neque lectus, ut luctus quam porta in. Quisque placerat, risus et interdum condimentum, massa purus aliquet magna, eu efficitur lacus odio vitae ex.
                </p>
                <p>
                Proin justo ex, elementum ut nisi consectetur, bibendum ornare neque. Quisque nec ipsum quis nisl venenatis egestas at at neque. In lorem mi, suscipit in blandit vel, tristique eget justo. Pellentesque gravida neque aliquam vestibulum tincidunt. Sed viverra consequat magna. Fusce ullamcorper scelerisque mauris eget eleifend. Maecenas eu porttitor nisl. Nam libero nulla, pulvinar vel dictum at, maximus sit amet nulla. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Pellentesque sed metus ultrices, vehicula libero in, consectetur risus. In in fermentum velit, vel lobortis libero. Nam non facilisis tellus, quis tempor sapien.
                </p>
            </div>
            <div class="form hide-on-large show-on-small" data-color="blue">

                <input type="text" placeholder="Your first name"/>
                <input type="text" placeholder="Your last name"/>
                <input type="email" placeholder="Email address"/>
                <span id="filename">Cv</span>
                <label for="file-upload">Browse<input type="file" id="file-upload">
                </label>
                <input type="text" placeholder="Your name"/>
                <input type="text" placeholder="Your message"/>
                <input type="submit" value="apply"/>

            </div>
        </div>

    </div>

<?php get_template_part('templates/subscribe'); ?>
<?php get_footer(); ?>