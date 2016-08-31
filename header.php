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
<html class="nojs html css_verticalspacer" lang="en-US">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="stylesheet" href="<?php echo(get_template_directory_uri()); ?>/css/font-awesome.min.css">



<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'anami' ); ?></a>

	<div class="clearfix gradient borderbox" id="page"><!-- group -->

	<header id="masthead" class="site-header" role="banner">
   <div class="clip_frame grpelem" id="u123"><!-- image -->
    <img alt="" src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>">
   </div>


   <div class="shadow grpelem" id="u247"><!-- simple frame -->
    <nav class="MenuBar clearfix colelem" id="menuu322"><!-- horizontal box -->
        <div class="MenuItemContainer clearfix grpelem" id="u323"><!-- vertical box -->
        <a class="nonblock nontext MenuItem MenuItemWithSubMenu MuseMenuActive clearfix colelem" id="u326" href="http://anami.com.co/inicio/"><!-- horizontal box --><div class="MenuItemLabel NoWrap clearfix grpelem" id="u327-4"><!-- content --><p>INICIO</p></div></a>
        </div>
        <div class="MenuItemContainer clearfix grpelem" id="u330"><!-- vertical box -->
        <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem" id="u333" href="http://anami.com.co/sobre-anami/"><!-- horizontal box --><div class="MenuItemLabel NoWrap clearfix grpelem" id="u336-4"><!-- content --><p>ANAMÍ</p></div></a>
        </div>
        <div class="MenuItemContainer clearfix grpelem" id="u368"><!-- vertical box -->
        <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem" id="u369" href="http://anami.com.co/productos/"><!-- horizontal box --><div class="MenuItemLabel NoWrap clearfix grpelem" id="u371-4"><!-- content --><p>PRODUCTOS</p></div></a>
        </div>
        <div class="MenuItemContainer clearfix grpelem" id="u389"><!-- vertical box -->
        <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem" id="u392" href="http://anami.com.co/contactos/"><!-- horizontal box --><div class="MenuItemLabel NoWrap clearfix grpelem" id="u395-4"><!-- content --><p>CONTACTOS</p></div></a>
        </div>
        <div class="MenuItemContainer clearfix grpelem" id="u410"><!-- vertical box -->
        <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem" id="u411" href="http://anami.com.co/category/blog/"><!-- horizontal box --><div class="MenuItemLabel NoWrap clearfix grpelem" id="u414-4"><!-- content --><p>BLOG</p></div></a>
        </div>
        <div class="MenuItemContainer clearfix grpelem" id="u431"><!-- vertical box -->
        <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem" id="u432" href="http://anami.com.co/inicio/"><!-- horizontal box --><div class="MenuItemLabel NoWrap clearfix grpelem" id="u433-4"><!-- content --><p>BOLETÍN</p></div></a>
        </div>
    </nav>  
   </div><!-- simple frame end -->
   <a class="nonblock nontext MuseLinkActive grpelem" id="u219" href="http://anami.com.co/inicio/"><!-- rasterized frame --><img id="u219_img" alt="" width="223" height="113" src="<?php echo(get_template_directory_uri()); ?>/images/mensaje-de-los-angeles-y-mensajes-espirituales-anami-logo-superior-u219.png?crc=15017676"/></a>
   <div class="clip_frame grpelem" id="u1664"><!-- image -->
   
   </div>
   <div class="clearfix grpelem" id="pu133"><!-- column -->
    <div class="clip_frame colelem" id="u133"><!-- image -->
     
    </div>

   </div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
