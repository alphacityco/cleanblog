<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Clean Blog
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <!-- Navigation -->
	<a class="menu-bar" data-toggle="collapse" href="#menu">
            <span class="bars"></span>            
        </a>
    	<div class="collapse menu" id="menu">
            <ul class="list-inline">
		<?php wp_nav_menu( array( 'theme_location' => 'primary', 'items_wrap' => '%3$s' ) ); ?>
            </ul> 
    	</div>

        <div class="container logo-texto">
            <div class="row">
                <h2 class="text-center">geoliteratura</h2>
            </div>
        </div> 	
	<?php //cleanblog_header(); ?>
	<header id="sticker" class="intro-header">
		<?php if (dynamic_sidebar('top-mapa')); {  } ?>
    	</header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
