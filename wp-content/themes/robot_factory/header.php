<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <title>
        <?php wp_title(); ?>
    </title>
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <?php if (is_singular() && get_option('thread_comments'))
        wp_enqueue_script('comment-reply'); ?>

    <?php wp_head(); ?>

    <!-- CSS -->

    <!-- google fonts -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>

    <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>

<body>

    <!-- Site Header -->
    <div class="site-header-bg">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <a href="<?php get_home_url(); ?>"><img src="<?php echo ROBOTS_FACTORY_ASSETS_URL ?>/images/logo.png" alt="logo"></a>
                </div>
                <div class="col-sm-3 col-sm-offset-3 text-right">
                    <span class="ion-android-cart"></span> 0 products
                    <form>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="">
                            <span class="input-group-btn">
                                <button class="btn btn-default btn-robot" type="button">Search</button>
                            </span>
                        </div><!-- /input-group -->
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Header -->

    <section id="header" class="main-header">
        <div class="container">

            <div class="row">
                <nav class="navbar navbar-default">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#site-nav-bar" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <?php
                    if (has_nav_menu('header_menu')) {

                        wp_nav_menu($arrgs = array(
                            'menu'                => "site-nav-bar", // (int|string|WP_Term) Desired menu. Accepts a menu ID, slug, name, or object.
                            'menu_class'          => "nav navbar-nav", // (string) CSS class to use for the ul element which forms the menu. Default 'menu'.
                            'menu_id'             => "site-nav-bar-id", // (string) The ID that is applied to the ul element which forms the menu. Default is the menu slug, incremented.
                            'container'           => "ul", // (string) Whether to wrap the ul, and what to wrap it with. Default 'div'.
                            'container_class'     => "collapse navbar-collapse", // (string) Class that is applied to the container. Default 'menu-{menu slug}-container'.
                            'container_id'        => "site-nav-bar", // (string) The ID that is applied to the container.
                            'theme_location'      => "header_menu", // (string) Theme location to be used. Must be registered with register_nav_menu() in order to be selectable by the user.
                        ));
                    }
                    ?>
                </nav>
            </div>