<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php wp_title(''); ?><?php if (wp_title('', false)) {
            echo ' :';
        } ?> <?php bloginfo('name'); ?></title>

    <link href="//www.google-analytics.com" rel="dns-prefetch">
    <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
    <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo('description'); ?>">

    <?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>
<div id="fb-root"></div>
<script>(function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.8";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
<?php
$color = get_field('color', get_the_ID());
?>

<div class="mainmenu" id="main_menu">
    <div class="align-menu">
        <?php
        echo wp_nav_menu(array('menu' => 'main', 'menu_class' => 'general'));
        ?>
    </div>
</div>

<header <?php if ($color) {
    echo 'data-color="' . $color . '"';
} ?>>

    <div id="wrapper">

        <div class="pure-g">
            <div class="pure-u-1 pure-u-sm-2-3 pure-u-md-1-3 pure-u-lg-1-3">
                <a href="<?php echo home_url(); ?>">
                    <div class="logo">
                    </div>
                </a>
            </div>
            <div class="pure-u-1 pure-u-sm-1-3 pure-u-md-2-3 pure-u-lg-2-3">
                <div class="menu">
                    <div class="icon">

                    </div>
                </div>
                <ul class="hide-on-medium hide-on-small">
                    <li>
                        <a href="http://jobs.mescglobal.com">
                            Jobs
                        </a>
                    </li>
                    <li>
                        <a href="http://jobs.mescglobal.com/register">
                            Register
                        </a>
                    </li>
                    <li>
                        <a href="http://jobs.mescglobal.com/login">
                            Login
                        </a>
                    </li>
                </ul>

            </div>
        </div>

    </div>
</header>