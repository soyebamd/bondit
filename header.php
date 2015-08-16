<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<script>(function(){document.documentElement.className='js'})();</script>
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon.ico" />
	<link href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.css" rel="stylesheet" type="text/css" >
    <link href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css" rel="stylesheet" type="text/css" >
	
	<?php wp_head(); ?>
     <link href="<?php echo get_template_directory_uri(); ?>/css/responsive.css" rel="stylesheet" type="text/css" >

</head>

<body <?php body_class(); ?>>
	<header>
    	<div class="inner-wrapper">
        	<div class="header-left">
            	<div class="logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"  title="<?php bloginfo( 'name' ); ?>"><img alt="<?php bloginfo( 'name' ); ?>" src="<?php echo get_template_directory_uri(); ?>/images/logo.png" /></a></div>
            </div>
            
            <div class="header-right">
            	<nav id="site-navigation" class="main-navigation" role="navigation">
				<?php
					// Primary navigation menu.
					wp_nav_menu( array(
						'menu_class'     => 'nav-menu',
						'theme_location' => 'primary',
					) );
				?>
			</nav><!-- .main-navigation -->
            </div>
        </div>
    
    <?php if (is_active_sidebar( 'homepage-banner' ) ) { ?>
            <div class="home-page-banner">
                <?php dynamic_sidebar( 'homepage-banner' ); ?>
            </div>
 	<?php }?>
    </header>
    
    <div class="promo-text">
    	
		<?php if (is_active_sidebar( 'page-promo-text' ) ) { ?>
            <div class="page-promo-text">
                <?php dynamic_sidebar( 'page-promo-text' ); ?>
            </div>
 		<?php }?> 
        
    </div>
 
<div id="page" class="hfeed site">
	<div class="inner-wrapper">
