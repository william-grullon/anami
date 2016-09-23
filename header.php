<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Anami
 */
?><!DOCTYPE html>
<html class="" <?php language_attributes(); ?> >
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php wp_title(''); ?></title>

    <link rel="shortcut icon" href="<?php echo(get_template_directory_uri()); ?>/favicon.ico" type="image/x-icon">
    <link rel="icon" href="<?php echo(get_template_directory_uri()); ?>/favicon.ico" type="image/x-icon">

    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <link rel="stylesheet" href="<?php echo(get_template_directory_uri()); ?>/css/font-awesome.min.css">

    <!-- Bootstrap -->
    <link href="<?php bloginfo('stylesheet_directory'); ?>/css/bootstrap.min.css" rel="stylesheet">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'anami' ); ?></a>


    <header >
        <div id="hero"><!-- image -->
            <img alt="Adamí" src="<?php header_image(); ?>" >
        </div>




        <div id="anami-bootstrap-menu" class="navbar navbar-default " role="navigation">
            <div class="container-fluid">
                <div class="navbar-header"><a href="<?php echo esc_url( home_url()); ?>/inicio" class="navbar-brand">
                        <img id="" alt="" width="223" height="113" src="<?php echo(get_template_directory_uri()); ?>/images/mensaje-de-los-angeles-y-mensajes-espirituales-anami-logo-superior-u219.png?crc=15017676"/>
                    </a>
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-menubuilder"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
                    </button>
                </div>
                <?php
                wp_nav_menu( array(

                    'theme_location'	=> 'primary',
                    'container'			=> 'nav',
                    'container_class'	=> 'collapse navbar-collapse navbar-menubuilder',
                    'menu_class'		=> 'nav navbar-nav navbar-right'

                ) );
                ?>
            </div>
        </div>

    </header><!-- #masthead -->

<div id="content" class="site-content">

