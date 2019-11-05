<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title><?php wp_title('&laquo;', true, 'right'); ?><?php bloginfo('name'); ?> - <?php bloginfo('description'); ?></title>

    <meta name="description" content="">
    <meta name="author" content="">

    <meta name="viewport" content="width=device-width">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>"/>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="/"><?php bloginfo('name'); ?></a>
        <p class="site-description mr-3 mb-0 font-weight-light"><?php bloginfo('description'); ?></p>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <?php
        wp_nav_menu([
            'container' => 'div',
            'container_class' => 'collapse navbar-collapse',
            'container_id' => 'navbarNav',
            'menu_class' => 'navbar-nav',
            'theme_location' => 'top-menu',
        ]); ?>
    </div>
</nav>