<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width" />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="wrapper" class="hfeed">

    <?php do_action( 'themer_before_header' ); ?>

    <header id="header" role="banner">
        <?php do_action( 'themer_header' ); ?>
    </header>

    <?php do_action( 'themer_after_header' ); ?>

    <div class="page-wrapper">

    <?php do_action( 'themer_before_content' ); ?>
